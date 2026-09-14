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
			<?php echo get_template_part('template-parts/congregations/content', 'banner-social-media') ?>
			<!-- end banner -->

			<!-- address -->
			<?php if (have_rows('endereco')):
				while (have_rows('endereco')):
					the_row();
					if (get_sub_field('endereco') && get_sub_field('bairro') && get_sub_field('cidade')):
						?>
						<section class="pt-10 lg:py-20">

							<div class="container flex justify-center">

								<div class="lg:w-8/12">

									<div class="border-2 border-gray-400/50 shadow-lg rounded-lg bg-gray-100/50 p-6">
										<p>
											<strong>Endereço:</strong>
											<?php echo get_sub_field('endereco') . ', ' . get_sub_field('numero') . ' - ' . get_sub_field('bairro') . ' - ' . get_sub_field('cep') ?>

											<br />

											<strong>Cidade:</strong> <?php echo get_sub_field('cidade') ?>
										</p>
									</div>
								</div>
							</div>
						</section>
					<?php endif;
				endwhile;
			endif;
			?>
			<!-- end address -->

			<!-- form -->
			<?php if (get_field('formulario')): ?>
				<section class="py-10">

					<div class="container flex justify-center">

						<div class="w-full lg:w-6/12">

							<?php echo do_shortcode(get_field('formulario')); ?>
						</div>
					</div>
				</section>
			<?php endif; ?>
			<!-- end form -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
