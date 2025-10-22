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
			<!-- get_template_part('template-parts/content', 'general-banner-social-media') -->
			<!-- banner -->

			<!-- search -->
			<section class="mt-8">
				<div class="container flex justify-center px-2 xl:px-4">

					<div class="w-full xl:w-8/12">

						<div class="rounded-3xl shadow-xl bg-white p-6">

							<form>

								<div class="flex flex-wrap justify-center gap-y-2">

									<div class="w-full xl:w-10/12">
										<input class="input-field" type="text" name="search" placeholder="Pesquisar por evento..." />
									</div>

									<div class="w-full xl:w-2/12">
										<div class="w-full h-full flex justify-center items-center pl-2">
											<input class="btn-submit" type="submit" value="Pesquisar" />
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- end search -->

			<!-- events -->
			<?php
			if (isset($_GET['search'])) {
				$title = sanitize_text_field($_GET["search"]);

				$events_args = array(
					'posts_per_page' => -1,
					'post_type'      => 'evento',
					'search_title'   => $title,
				);

				echo get_template_part('template-parts/content', 'section-events', $events_args);
			}
			?>
			<!-- end events -->

			<!-- general categories -->
			<?php echo get_template_part('template-parts/content', 'general-categories') ?>
			<!-- end general categories -->

			<!-- testimonials -->
			<?php echo get_template_part('template-parts/content', 'general-testimonials') ?>
			<!-- end testimonials -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
