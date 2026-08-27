<?php
$date_current = date('Ymd');

$args = array(
    'posts_per_page' => 1, // Retorna apenas 1 post conforme a sua intenção
    'post_type' => 'agenda',
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'inicio_da_semana',
            'value' => $date_current,
            'compare' => '<=', // O início da semana deve ser HOJE ou ANTES de hoje
            'type' => 'DATE'
        ),
        array(
            'key' => 'fim_da_semana',
            'value' => $date_current,
            'compare' => '>=', // O fim da semana deve ser HOJE ou DEPOIS de hoje
            'type' => 'DATE'
        ),
    ),
    'meta_key' => 'inicio_da_semana',
    'orderby' => 'meta_value',
    'order' => 'DESC',
);

$schedules = new WP_Query($args);

?>

<?php if ($schedules->have_posts()):
    while ($schedules->have_posts()):
        $schedules->the_post(); ?>
        <section class="bg-gradient-to-b from-[#9D0A26] to-[#BA6239] mt-10 lg:my-20 pt-10 pb-20">

            <div class="container flex flex-wrap justify-between gap-y-6">

                <div class="w-full order-1">
                    <h2 class="text-3xl font-semibold text-white">
                        Agenda semanal
                    </h2>

                    <p class="text-white">
                        <?php echo getFormatDateAsDayAndMonth(get_field('inicio_da_semana')) . ' à ' . getFormatDateAsDayAndMonth(get_field('fim_da_semana')) ?>
                    </p>
                </div>

                <div class="w-full xl:w-5/12 order-3 lg:order-2">

                    <!-- swiper -->
                    <div class="swiper js-swiper-schedule">

                        <div class="swiper-wrapper">

                            <!-- slide -->
                            <?php
                            if (have_rows('eventos')):
                                while (have_rows('eventos')):
                                    the_row();
                                    ?>
                                    <div class="swiper-slide">

                                        <h2 class="text-4xl font-semibold uppercase text-white mb-4">
                                            <?php echo get_sub_field('titulo') ?>
                                        </h2>

                                        <p class="text-lg font-semibold uppercase text-white mb-6">
                                            <?php echo get_sub_field('dia_da_semana') . ' às ' . get_sub_field('horario') ?>
                                        </p>

                                        <span class="css-content block font-light text-white mb-6">
                                            <?php echo limitWords(get_sub_field('descricao'), 120) ?>
                                        </span>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                            <!-- end slide -->
                        </div>
                    </div>
                    <!-- end swiper -->

                    <div class="hidden lg:flex gap-x-4 mt-20">
                        <div class="swiper-button-prev swiper-button-prev-events-other js-swiper-button-prev-schedule">
                            <svg class="w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 256 512"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                <path
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                            </svg>

                            <p class="font-normal">
                                Anterior
                            </p>
                        </div>

                        <div class="swiper-button-next swiper-button-next-events-other js-swiper-button-next-schedule">

                            <p class="font-normal">
                                Próximo
                            </p>

                            <svg class="w-4 h-4 fill-[#BA6239]" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 256 512"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                <path
                                    d="M247.1 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L179.2 256 41.9 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 order-2 lg:order-3">

                    <div class="flex lg:hidden gap-x-4 my-6">
                        <div class="swiper-button-prev swiper-button-prev-events-other js-swiper-button-prev-schedule">
                            <svg class="w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 256 512"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                <path
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                            </svg>

                            <p class="font-normal">
                                Anterior
                            </p>
                        </div>

                        <div class="swiper-button-next swiper-button-next-events-other js-swiper-button-next-schedule">

                            <p class="font-normal">
                                Próximo
                            </p>

                            <svg class="w-4 h-4 fill-[#BA6239]" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 256 512"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                <path
                                    d="M247.1 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L179.2 256 41.9 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                            </svg>
                        </div>
                    </div>

                    <div>

                        <!-- swiper -->
                        <div class="swiper swiper-schedule js-swiper-schedule-photos">

                            <div class="swiper-wrapper">

                                <!-- slide -->
                                <?php
                                if (have_rows('eventos')):
                                    while (have_rows('eventos')):
                                        the_row();
                                        ?>
                                        <div class="swiper-slide">

                                            <div class="h-[440px] shadow-lg rounded-xl overflow-hidden relative flex justify-center items-center cursor-pointer"
                                                x-data="{ overlay: false }" x-on:mouseover="overlay = true"
                                                x-on:mouseout="overlay = false">

                                                <img class="w-full h-full top-0 left-0 transition duration-300 opacity-50 object-cover absolute"
                                                    src="<?php echo get_sub_field('imagem'); ?>"
                                                    alt="<?php echo get_sub_field('titulo') . ' - ' . get_bloginfo(); ?>">

                                                <img class="w-full h-full transition duration-300 object-contain"
                                                    src="<?php echo get_sub_field('imagem'); ?>"
                                                    alt="<?php echo get_sub_field('titulo') . ' - ' . get_bloginfo(); ?>"
                                                    x-bind:class="{ 'scale-110': overlay }" />

                                                <div class="w-full h-full top-0 left-0 absolute flex items-end bg-gradient-to-t from-black to-transparent p-4"
                                                    x-show="overlay" x-cloak x-transition:enter="transition ease-out duration-300"
                                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                                    x-transition:leave="transition ease-in duration-300"
                                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

                                                    <p class=" text-lg font-bold text-white">
                                                        <?php echo get_sub_field('titulo') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                <!-- end slide -->
                            </div>
                        </div>
                        <!-- end swiper -->
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile;
endif;

wp_reset_query(); ?>