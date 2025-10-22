<?php
// https://generatewp.com

function create_post_type()
{
    register_post_type('evento', array(
        'labels'         => array('name' => 'Eventos', 'singular_name' => 'Evento', 'all_items' => 'Todos'),
        'public'         => true,
        'has_archive'    => true,
        'menu_icon'        => 'dashicons-welcome-write-blog',
        'supports'         => array('title', 'editor',  'excerpt', 'thumbnail')
    ));

    register_post_type('depoimento', array(
        'labels'         => array('name' => 'Depoimentos', 'singular_name' => 'Depoimentos', 'all_items' => 'Todos'),
        'public'         => true,
        'has_archive'     => true,
        'menu_icon'     => 'dashicons-calendar-alt',
        'supports'         => array('title')
    ));
}

add_action('init', 'create_post_type');

function create_taxonomy()
{
    $post_types = array('evento');

    register_taxonomy('departamento', $post_types, array(
        'labels'             => array(
            'name'              => 'Departamento',
            'singular_name'     => 'Departamentos'
        ),
        'hierarchical'       => true,
        'show_admin_column'  => true,
    ));
}
add_action('init', 'create_taxonomy');

// function create_produtos_taxonomies()
// {

//     $args = array(
//         'hierarchical'      => true,
//         'labels'            => array('name' => 'Marcas'),
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'show_in_rest' => true,
//         'rest_base'          => 'marcas_categories',
//         'rest_controller_class' => 'WP_REST_Terms_Controller',
//         'rewrite'           => array('slug' => 'marcas_categories'),
//         'default_term' => 'gore'
//     );

//     register_taxonomy('marcas_categories', array('produtos'), $args);
// }
// add_action('init', 'create_produtos_taxonomies', 0);
