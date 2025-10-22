<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme Dev
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php while (have_posts()) : the_post(); ?>

			<!-- banner -->
			<?php echo get_template_part('template-parts/content', 'general-banner-social-media') ?>
			<!-- banner -->

			<!-- events -->
			<?php
			$date_current = date('Ymd');

			if (isset($_GET['departamento'])) {
				$department_slug = $_GET['departamento'];

				$department = get_term_by('slug', $department_slug, 'departamento');

				$events_args = array(
					'posts_per_page' => -1,
					'post_type'      => 'evento',
					'tax_query'      => array(
						array(
							'taxonomy' => 'departamento',
							'field'    => 'term_id',
							'terms'    => $department->term_id
						)
					),
					'order'   => 'DESC'
				);
			}

			echo get_template_part('template-parts/content', 'section-events', $events_args)
			?>
			<!-- end events -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
