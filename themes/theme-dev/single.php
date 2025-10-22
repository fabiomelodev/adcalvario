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

		<?php while (have_posts()) : the_post(); ?>
			<!-- banner -->
			<section class="relative bg-black pt-32 lg:pt-60 pb-10 lg:pb-32 lg:pb-0">

				<div 
				class="w-full h-full top-0 left-0 absolute z-10" 
				style="background-image: linear-gradient(to right, #000 50%, transparent)"></div>

				<div 
				class="w-1/2 h-full top-0 right-0 absolute" 
				style="background-image: linear-gradient(to bottom, #130bbf, #c320df, #f0acda, #9d73f6)"></div>

				<div class="container relative flex flex-wrap z-10">

					<div class="w-full lg:w-8/12 lg:pl-24">

						<h4 class="text-5xl font-light uppercase text-white mb-6">
							full-stack web developer
						</h4>

						<h1 
						class="text-[64px] md:text-[80px] lg:text-[100px] font-bold text-white mb-12" 
						style="line-height:100%">
							<?php the_title() ?>
						</h1>

						<!-- <p class="text-sm font-medium uppercase text-white -mt-10">
							8 projetos publicado
						</p> -->
					</div>

					<div class="w-4/12 hidden lg:flex flex-col justify-between items-start pt-0 lg:pl-4">

						<?php echo get_template_part('template-parts/content', 'banner-social-media'); ?>

						<?php echo get_template_part('template-parts/content', 'curriculum'); ?>
					</div>
				</div>
			</section>
			<!-- end banner -->

			<!-- content -->
			<section class="relative bg-black -mt-1 lg:mt-0 pt-4 lg:pt-32">

				<div 
				class="w-full h-full top-0 left-0 absolute z-10" 
				style="background-image: linear-gradient(to right, #000 50%, transparent)"></div>

				<div 
				class="w-1/2 h-full top-0 right-0 absolute" 
				style="background-image: linear-gradient(to bottom, #9d73f6, #f0acda)"></div>

				<div 
				class="w-1/2 h-52 bottom-0 right-0 absolute" 
				style="background-image: linear-gradient(to top, #000, transparent)"></div>

				<div class="container relative flex flex-wrap z-10">

					<div class="w-full lg:w-9/12 lg:px-4">

						<span class="block font-normal text-white css-content">
							<?php the_content() ?>
						</span>
					</div>

					<div class="w-full lg:w-3/12 border-l border-white/30 mt-6 lg:mt-0 pl-4 lg:px-4">

						<h6 class="text-lg font-bold text-white mb-4">
							Projetos relacionados
						</h6>

						<div class="flex flex-wrap">

							<!-- loop -->
							<?php
								$category_slug = get_the_category($post)[0]->slug;

								$args = array(
									'posts_per_page' => -1,
									'post_type'      => 'post',
									'category_name'  => $category_slug,
									'order'          => 'DESC',
									'post__not_in'   => array(get_the_ID())
								);

								$other_posts = new WP_Query($args);

								if($other_posts->have_posts()) :
									while($other_posts->have_posts()) : $other_posts->the_post();
							?>
										<a 
										class="w-full block text-lg font-semibold text-white mb-2 last:mb-0" 
										href="<?php the_permalink() ?>">
											<?php the_title() ?>

											<div>
												<?php foreach(get_the_tags($post) as $tag) : ?>
													<span class="shadow-lg rounded-lg text-[10px] font-medium text-white bg-purple-900 mr-2 last:mr-0 py-1 px-2">
														<?php echo $tag->name; ?>
													</span>
												<?php endforeach; ?>
											</div>
										</a>
							<?php
									endwhile;
								endif;

								wp_reset_query();
							?>
							<!-- end loop -->
						</div>
					</div>
				</div>
			</section>
			<!-- end content -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
