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

			<section class="py-10 lg:py-20">

				<div class="container grid grid-cols-1 lg:grid-cols-2 gap-4">

					<div>

						<div class="w-full border border-[#BA6239] rounded-[20px] p-6">

							<h1 class="text-3xl font-extrabold uppercase text-[#BA6239] mb-10">
								Contato
							</h1>

							<!-- <form>

								<div class="flex flex-col gap-4">

									<div class="flex flex-col gap-2">
										<label
											class="text-sm font-bold ml-4"
											for="nome">
											Nome:

											<span class="text-red-500">*</span>
										</label>

										<input
											class="w-full border shadow-lg rounded-lg py-2 px-4"
											type="text"
											name="nome"
											id="nome" />
									</div>

									<div class="flex flex-col gap-2">
										<label
											class="text-sm font-bold ml-4"
											for="email">
											E-mail:

											<span class="text-red-500">*</span>
										</label>

										<input
											class="w-full border shadow-lg rounded-lg py-2 px-4"
											type="email"
											name="email"
											id="email" />
									</div>

									<div class="flex flex-col gap-2">
										<label
											class="text-sm font-bold ml-4"
											for="telefone">
											Telefone / Celular:

											<span class="text-red-500">*</span>
										</label>

										<input
											class="w-full border shadow-lg rounded-lg py-2 px-4"
											type="text"
											name="telefone"
											id="telefone" />
									</div>

									<div class="flex justify-center">
										<input
											class="btn-member-submit"
											type="submit"
											value="Enviar">
									</div>
								</div>
							</form> -->

							<?php echo do_shortcode('[contact-form-7 id="db65212" title="Formulário de contato"]'); ?>
						</div>
					</div>

					<div class="flex flex-col justify-center items-center gap-4">

						<?php
						if (have_rows('redes_sociais', 'option')) :
							while (have_rows('redes_sociais', 'option')): the_row();
						?>
								<a class="flex justify-center items-center gap-4 py-4" href="<?php echo get_sub_field('link') ?>" target="_blank" rel="noreferrer nopenener">
									<?php if (get_sub_field('icone') == 'Facebook') : ?>
										<?php echo get_template_part('template-parts/icons/content', 'facebook', get_icon_setting('w-9 h-9 fill-[#BA6239]')); ?>
									<?php endif; ?>

									<?php if (get_sub_field('icone') == 'Instagram') : ?>
										<?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-9 h-9 fill-[#BA6239]')); ?>
									<?php endif; ?>

									<?php if (get_sub_field('icone') == 'Whatsapp') : ?>
										<?php echo get_template_part('template-parts/icons/content', 'whatsapp', get_icon_setting('w-9 h-9 fill-[#BA6239]')); ?>
									<?php endif; ?>

									<?php if (get_sub_field('icone') == 'Youtube') : ?>
										<?php echo get_template_part('template-parts/icons/content', 'youtube', get_icon_setting('w-9 h-9 fill-[#BA6239]')); ?>
									<?php endif; ?>

									<span class="text-sm font-bold text-[#BA6239]">
										<?php echo get_sub_field('texto') ?>
									</span>
								</a>
						<?php
							endwhile;
						endif;
						?>
					</div>
				</div>
			</section>
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
