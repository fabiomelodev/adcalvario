<?php

function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_slug_body_class');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

show_admin_bar(false);

register_nav_menus(array(
    'primary' => 'Menu Primário',
));

function dd($var)
{
    var_dump($var);
    die();
}

function get_file_uri(string $path)
{
    return get_template_directory_uri() . '/' . $path;
}

function get_theme_file(string $path)
{
    return get_template_directory() . '/' . $path;
}

function register_assets(string $handle, string $src, $in_footer = false)
{
    $id = false;

    if (file_exists(get_theme_file('mix-manifest.json'))) {
        $contents = file_get_contents(get_theme_file('mix-manifest.json'));

        $key = '/' . $src;

        if (str_contains($contents, $src)) {
            $manifest = json_decode($contents);
            if (str_contains($manifest->$key, '?id')) {
                $id = explode('?id=', $manifest->$key)[1];
            }
        }
    }

    if (str_contains($src, '.css')) {
        wp_enqueue_style($handle, get_file_uri($src), array(), $id);
    }

    if (str_contains($src, '.js')) {
        wp_enqueue_script($handle, get_file_uri($src), array(), $id, $in_footer);
    }
}

function get_sanitize_string($str)
{
    $str = trim($str);
    $str = str_replace(array('.', '-', '/', ' '), "", $str);

    return $str;
}

function get_limit_words($string, $word_limit)
{
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit) {
        array_pop($words);
        array_push($words, "...");
    }
    return implode(' ', $words);
}

/**
 * Enqueue scripts and styles.
 */
function theme_dev_scripts()
{
    wp_enqueue_style('theme-dev-style', get_stylesheet_uri());

    register_assets('theme-dev-fonts-style', 'public/fonts/stylesheet.css');
    register_assets('theme-dev-app-style', 'public/css/app.css');
    register_assets('theme-dev-app-scripts', 'public/js/app.js', true);

    wp_enqueue_style('theme-dev-custom-style', get_template_directory_uri() . '/custom.css', array(), '1.0.0');
    wp_enqueue_script('theme-dev-custom-scripts', get_template_directory_uri() . '/custom.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_dev_scripts');

require get_template_directory() . '/inc/functions/register-post-types.php';
require get_template_directory() . '/inc/functions/register-rest-fields.php';
require get_template_directory() . '/inc/functions/register-options-page.php';

function get_date_format(string $date): string
{
    list($day, $month, $year) = explode('/', $date);

    $month = get_month($month);

    return $month . '<br />' . $day;
}

function get_months()
{
    return [
        '01' => 'Jan',
        '02' => 'Fev',
        '03' => 'Mar',
        '04' => 'Abr',
        '05' => 'Mai',
        '06' => 'Jun',
        '07' => 'Jul',
        '08' => 'Ago',
        '09' => 'Set',
        '10' => 'Out',
        '11' => 'Nov',
        '12' => 'Dez'
    ];
}

function get_month($month)
{
    return get_months()[$month];
}

function get_nav_links()
{
    $items = [
        [
            'title' => 'Início',
            'link'  => ''
        ],

        [
            'title' => 'Quem Somos',
            'link'  => 'quem-somos'
        ],

        [
            'title' => 'Doações',
            'link'  => 'doacoes'
        ],

        [
            'title' => 'Eventos',
            'link'  => 'eventos'
        ],

        [
            'title' => 'Membros',
            'link'  => 'membros'
        ],

        [
            'title' => 'Contato',
            'link'  => 'contato'
        ],

        // [
        //     'title' => 'Book Online',
        //     'link'  => 'book-online'
        // ]
    ];

    return $items;
}

function get_icon_setting(string $classes = ''): array
{
    return [
        'class' => $classes
    ];
}

function get_general_gallery_setting($events): array
{
    $photos = [];

    if ($events->have_posts()) {
        while ($events->have_posts()) {
            $events->the_post();

            foreach (get_field('galeria') as $gallery) {
                array_push($photos, [
                    'title' => get_the_title(),
                    'url'   => $gallery['url']
                ]);
            }
        }
    }

    return $photos;
}

function get_status_event(string $date): string
{
    $status = [
        0 => 'Encerrado',
        1 => 'Hoje',
        2 => 'Em breve'
    ];

    if (date('d/m/Y') < $date) {
        return $status[2];
    } elseif (date('d/m/Y') === $date) {
        return $status[1];
    } else {
        return $status[0];
    }
}

function query_per_title($where, $wp_query)
{
    global $wpdb;

    if ($title = $wp_query->get('search_title')) {
        $title = esc_sql($title);
        $where .= " AND {$wpdb->posts}.post_title LIKE '%{$title}%'";
    }

    return $where;
}
add_filter('posts_where', 'query_per_title', 10, 2);
