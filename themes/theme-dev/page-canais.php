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

		<?php while (have_posts()):
			the_post(); ?>

			<!-- banner -->
			<?php echo get_template_part('template-parts/content', 'general-banner-social-media') ?>
			<!-- banner -->

			<section class="py-20">

				<div class="container flex flex-wrap justify-center gap-y-6 lg:gap-y-12 px-4 lg:px-44">

					<?php if (have_rows('redes_sociais', 'option')):
						while (have_rows('redes_sociais', 'option')):
							the_row();
							if (get_sub_field('icone') == 'Youtube'): ?>
								<a class="group w-full shadow-lg rounded-3xl overflow-hidden relative p-6 lg:p-10"
									href="<?php echo get_sub_field('link') ?>" target="_blank" rel="noreferrer noopener"
									style="background-image: url()">

									<img class="w-full h-full transition duration-500 group-hover:scale-110 object-cover top-0 left-0 absolute"
										src="<?php echo get_template_directory_uri() ?>/resources/images/channels-banner.jpg"
										alt="Canais do youtube" />

									<div class="w-full h-full top-0 left-0 absolute bg-gradient-to-b from-transparent to-black">
									</div>

									<div class="relative flex flex-col items-start gap-y-4">
										<div class="w-20 h-20 shadow-lg rounded-full bg-white">
											<img src="<?php echo get_template_directory_uri() ?>/resources/images/logo.png" />
										</div>

										<h3 class="text-lg lg:text-2xl font-bold text-white">
											<?php echo get_sub_field('texto') ?>
										</h3>

										<div
											class="w-40 transition duration-500 hover:scale-90 shadow-lg rounded-full inline-flex justify-center items-center gap-x-2 bg-white hover:bg-[#bc7051] py-2 px-6">
											<svg class="w-5 h-5 transition duration-500" xmlns="http://www.w3.org/2000/svg"
												viewBox="0 0 576 512">
												<path
													d="M549.7 124.1C543.5 100.4 524.9 81.8 501.4 75.5 458.9 64 288.1 64 288.1 64S117.3 64 74.7 75.5C51.2 81.8 32.7 100.4 26.4 124.1 15 167 15 256.4 15 256.4s0 89.4 11.4 132.3c6.3 23.6 24.8 41.5 48.3 47.8 42.6 11.5 213.4 11.5 213.4 11.5s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zM232.2 337.6l0-162.4 142.7 81.2-142.7 81.2z" />
											</svg>

											Ver canal
										</div>
									</div>
								</a>
							<?php endif;
						endwhile;
					endif;
					?>
				</div>
			</section>
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
