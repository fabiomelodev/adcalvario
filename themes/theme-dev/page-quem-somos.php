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
			<?php echo get_template_part('template-parts/content', 'about-gallery') ?>
			<!-- end gallery -->

			<section class="mt-16">

				<div class="container flex justify-center">

					<div class="w-full xl:w-4/12">

						<h3 class="relative text-3xl font-semibold uppercase text-center pb-2">
							Encontre sua fé

							<span class="w-[100px] h-[4px] top-full left-1/2 -translate-x-1/2 absolute bg-gradient-to-r from-[#C06F4C] to-[#A7233C]"></span>
						</h3>

						<span class="block text-lg font-light italic text-center mt-10">
							<?php echo get_field('frase') ?>
						</span>

						<span class="block text-lg font-light italic text-center mt-4">
							<?php echo get_field('versiculo') ?>
						</span>
					</div>
				</div>
			</section>
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
