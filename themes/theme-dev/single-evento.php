<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
			<section>

				<div class="container relative">

					<div class="h-[400px] rounded-xl overflow-hidden bg-red-500">
						<?php
						the_post_thumbnail('post-thumbnail', array('class' => 'w-full h-full object-cover', 'alt' => get_the_title()));
						?>
					</div>

					<div
						class="w-full xl:w-12 h-12 xl:h-full top-full xl:top-0 left-0 xl:left-full absolute flex justify-center items-center">

						<div class="flex xl:flex-col gap-x-4 mt-2">
							<?php
							if (have_rows('redes_sociais', 'option')):
								while (have_rows('redes_sociais', 'option')):
									the_row();
									?>
									<a class="transition hover:scale-110 flex justify-center items-center gap-2 py-3"
										href="<?php echo get_sub_field('link') ?>" target="_blank" rel="noreferrer nopenener">
										<?php if (get_sub_field('icone') == 'Facebook'): ?>
											<?php echo get_template_part('template-parts/icons/content', 'facebook', get_icon_setting('w-9 h-9 fill-black hover:fill-[#9D0A26]')); ?>
										<?php endif; ?>

										<?php if (get_sub_field('icone') == 'Instagram'): ?>
											<?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-9 h-9 fill-black hover:fill-[#9D0A26]')); ?>
										<?php endif; ?>

										<?php if (get_sub_field('icone') == 'Whatsapp'): ?>
											<?php echo get_template_part('template-parts/icons/content', 'whatsapp', get_icon_setting('w-9 h-9 fill-black hover:fill-[#9D0A26]')); ?>
										<?php endif; ?>

										<?php if (get_sub_field('icone') == 'Youtube'): ?>
											<?php echo get_template_part('template-parts/icons/content', 'youtube', get_icon_setting('w-9 h-9 fill-black hover:fill-[#9D0A26]')); ?>
										<?php endif; ?>
									</a>
									<?php
								endwhile;
							endif;
							?>
						</div>
					</div>
				</div>

			</section>
			<!-- end banner -->

			<!-- content -->
			<section class="my-20">

				<div class="container">

					<div>

						<h1 class="text-3xl font-bold font-mydr text-[#9D0A26] mb-6">
							<!-- Manhã de Avivamento -->
							<?php the_title() ?>
						</h1>

						<p class="text-lg font-normal">
							<!-- 19 de fevereiro de 2021 - 18h30 -->
							<?php echo get_field('data_do_evento') . ' - ' . get_field('horario'); ?>
						</p>

						<p class="text-lg font-normal">
							<strong>
								<!-- Presencial -->
								<?php echo get_field('tipo_do_evento'); ?>
							</strong> - A.D do Calvário
						</p>
					</div>

					<div class="mt-16">
						<h2 class="text-xl font-semibold mb-6">
							Descrição do Evento
						</h2>

						<span class="css-content">
							<?php the_content() ?>
						</span>
					</div>
				</div>
			</section>
			<!-- end content -->

			<!-- general categories -->
			<?php echo get_template_part('template-parts/content', 'general-categories') ?>
			<!-- end general categories -->

			<!-- general prev events -->
			<?php echo get_template_part('template-parts/content', 'general-prev-events') ?>
			<!-- end general prev events -->

			<!-- gallery -->
			<?php
			$args = array(
				'posts_per_page' => -1,
				'post_type' => 'evento',
				'order' => 'DESC'
			);

			$all_events = new WP_Query($args);

			echo get_template_part('template-parts/content', 'general-gallery', get_general_gallery_setting($all_events));
			?>
			<!-- end gallery -->

			<!-- testimonials -->
			<?php echo get_template_part('template-parts/content', 'general-testimonials') ?>
			<!-- end testimonials -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
