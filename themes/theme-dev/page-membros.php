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

			<section class="py-10">

				<div class="container flex justify-center">

					<div class="w-full lg:w-6/12">

						<?php echo do_shortcode('[contact-form-7 id="601bd96" title="Formulário Membro"]'); ?>
					</div>
				</div>
			</section>
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
