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

				<div class="container flex flex-wrap justify-center gap-y-12">

					<div class="w-full lg:w-6/12">
						<div class="relative mb-12 pb-6">
							<h3 class="text-4xl font-semibold text-center uppercase">
								Faça parte da Calvário
							</h3>

							<span
								class="w-28 h-3 bottom-0 left-1/2 -translate-x-1/2 shadow-lg rounded-lg absolute block bg-gradient-to-r from-[#C06F4C] to-[#A7233C]"></span>
						</div>

						<p class="text-base xl:text-lg font-normal font-montserrat text-center">
							Encontre uma de nossas congregações mais próxima de você, afilie-se e venha fazer parte da
							família Calvário! Queremos caminhar juntos em fé, comunhão e amor, vivendo uma nova caminhada na
							presença de Deus.
						</p>
					</div>

					<div class="w=full lg:w-8/12">

						<div class="grid lg:grid-cols-3 gap-4">

							<?php
							$args = array(
								'post_type' => 'congregacao',
								'posts_per_page' => -1,
							);

							$congregations = new WP_Query($args);

							if ($congregations->have_posts()):
								while ($congregations->have_posts()):
									$congregations->the_post();
									?>
									<a href="<?php the_permalink(); ?>"
										class="group border border-gray-200 shadow-lg rounded-lg flex flex-col items-center hover:bg-gradient-to-r from-[#C06F4C] to-[#A7233C] gap-y-4 p-4">
										<div class="flex flex-col items-center">
											<svg class="w-10 h-10 fill-[#A7233C] group-hover:fill-white"
												xmlns="http://www.w3.org/2000/svg"
												viewBox="0 0 512 512"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
												<path
													d="M280-8c0-13.3-10.7-24-24-24S232-21.3 232-8l0 24-32 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l32 0 0 48-98.6 65.8C120 186.7 112 201.6 112 217.7l0 38.3-79.8 45.6C12.3 313 0 334.2 0 357.1L0 448c0 35.3 28.7 64 64 64 74.7 0 85.4 0 320 0l64 0c35.3 0 64-28.7 64-64l0-90.9c0-23-12.3-44.2-32.2-55.6L400 256 400 217.7c0-16-8-31-21.4-39.9l-98.6-65.8 0-48 32 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-32 0 0-24zM256 320c35.3 0 64 28.7 64 64l0 80-128 0 0-80c0-35.3 28.7-64 64-64z" />
											</svg>

											<h4 class="text-lg font-semibold text-center group-hover:text-white">
												<?php the_title(); ?>
											</h4>
										</div>

										<?php
										if (have_rows('endereco')):
											while (have_rows('endereco')):
												the_row();
												if (get_sub_field('endereco') && get_sub_field('bairro') && get_sub_field('cidade')):
													?>
													<p class="text-sm text-center group-hover:text-white">
														<?php echo get_sub_field('endereco') . ', ' . ' - ' . get_sub_field('bairro') . ' ' . get_sub_field('cidade'); ?>
													</p>
													<?php
												endif;
											endwhile;
										endif;
										?>
									</a>
								<?php endwhile;
							endif;

							wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
