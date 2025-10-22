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

			<!-- gallery -->
			<?php
			if (isset($_GET['ev'])) {
				$event_slug = $_GET['ev'];

				$events_args = array(
					'posts_per_page' => 1,
					'post_type'      => 'evento',
					'name'           => 'evento-01',
					'order'          => 'DESC'
				);

				$all_events = new WP_Query($events_args);

				echo get_template_part('template-parts/content', 'general-gallery', get_general_gallery_setting($all_events));
			}
			?>
			<!-- end gallery -->
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
