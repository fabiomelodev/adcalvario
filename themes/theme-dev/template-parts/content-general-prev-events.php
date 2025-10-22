<?php
$date_current = date('Ymd');

$args = array(
    'posts_per_page' => -1,
    'post_type'      => 'evento',
    'meta_query'     => array(
        array(
            'key'     => 'data_do_evento',
            'value'   => $date_current,
            'compare' => '<',
            'type'    => 'DATE'
        )
    ),
    'orderby' => 'meta_value',
    'order'   => 'DESC'
);

$events = new WP_Query($args);
?>

<section class="bg-gradient-to-b from-[#9D0A26] to-[#BA6239] pt-10 pb-20">

    <div class="container flex flex-wrap justify-between">

        <div class="w-full xl:w-5/12">

            <div class="mb-24">
                <h2 class="text-3xl font-semibold text-white">
                    Eventos que aconteceram
                </h2>
            </div>

            <!-- swiper -->

            <div class="swiper js-swiper-events-other">

                <div class="swiper-wrapper">

                    <!-- slide -->
                    <?php
                    if ($events->have_posts()) :
                        while ($events->have_posts()) : $events->the_post();
                    ?>
                            <div class="swiper-slide">

                                <h2 class="text-4xl font-semibold uppercase text-white mb-4">
                                    <!-- Manhã de avivamento -->
                                    <?php the_title() ?>
                                </h2>

                                <p class="text-lg font-semibold uppercase text-white">
                                    <!-- Tema: Manhã de avivamento -->
                                    Tema: <?php echo get_field('tema') ?>
                                </p>

                                <p class="text-lg font-semibold uppercase text-white mb-6">
                                    Data: <?php echo get_field('data_do_evento') ?>
                                </p>

                                <span class="block font-light text-white mb-6">
                                    <?php the_excerpt() ?>
                                </span>

                                <div class="flex gap-x-4">
                                    <a class="font-normal uppercase text-center text-[#BA6239] hover:text-white bg-white hover:bg-[#BA6239] py-2 px-4" href="<?php echo get_home_url(null, 'fotos/?ev=' . $post->post_name) ?>">
                                        Fotos
                                    </a>

                                    <a class="border-b-2 border-white font-normal uppercase text-white hover:text-[#BA6239] hover:bg-white py-2 px-4" href="<?php the_permalink() ?>">
                                        Saiba mais
                                    </a>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;

                    wp_reset_query();
                    ?>
                    <!-- end slide -->
                </div>
            </div>
            <!-- end swiper -->

            <div class="flex gap-x-4 mt-40">
                <div class="swiper-button-prev swiper-button-prev-events-other js-swiper-button-prev-events-other">
                    <p class="text-lg font-normal uppercase">
                        Anterior
                    </p>
                </div>

                <div class="swiper-button-next swiper-button-next-events-other js-swiper-button-next-events-other">
                    <p class="text-lg font-normal uppercase">
                        Próximo
                    </p>
                </div>
            </div>
        </div>

        <div class="w-5/12 relative hidden xl:block">

            <div class="w-[440px] h-[440px] border-2 border-white rounded-full overflow-hidden">

                <!-- swiper -->
                <div class="swiper js-swiper-events-other-thumbnail">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php
                        if ($events->have_posts()) :
                            while ($events->have_posts()) : $events->the_post();
                        ?>
                                <div class="swiper-slide">

                                    <div class="w-[440px] h-[440px] overflow-hidden flex justify-center items-center">
                                        <!-- <img class="w-full h-full object-cover" src="<php echo get_template_directory_uri() ?>/resources/images/top-banner.png" alt="Categoria - AD. Calvário" /> -->

                                        <?php
                                        the_post_thumbnail('post-thumbnail', array(
                                            'class' => 'w-full h-full object-cover',
                                            'alt'   => get_the_title()
                                        )) ?>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                        endif;

                        wp_reset_query();
                        ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>

            <div class="w-14 h-14 bottom-16 -left-16 border-[6px] border-white rounded-full absolute"></div>

            <div class="w-[102px] h-[102px] -bottom-8 -left-8 border-[6px] border-white rounded-full absolute"></div>
        </div>
    </div>
</section>