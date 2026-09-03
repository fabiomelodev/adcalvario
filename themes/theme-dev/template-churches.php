<?php

/*
Template Name: Página Formulário
Template Post Type: post, page, event
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

            <section class="py-10">

                <div class="container flex justify-center">

                    <div class="w-full lg:w-6/12">

                        <!-- echo do_shortcode('[contact-form-7 id="601bd96" title="Formulário Membro"]'); -->
                        <?php echo do_shortcode(get_field()); ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
