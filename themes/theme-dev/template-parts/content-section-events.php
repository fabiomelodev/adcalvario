<section class="pt-20">

    <div class="container flex flex-wrap">

        <div class="w-6/12">
            <h3 class="text-xl font-semibold">
                Eventos em destaque
            </h3>
        </div>

        <div class="w-6/12">

            <div class="flex justify-end gap-x-6">

                <div class="swiper-button-prev swiper-button-prev-events js-swiper-button-prev-events">
                    <?php echo get_template_part('template-parts/icons/content', 'arrow-left', get_icon_setting('w-5 h-5 fill-[#9D0A26]')); ?>
                </div>

                <div class="swiper-button-next swiper-button-next-events js-swiper-button-next-events">
                    <?php echo get_template_part('template-parts/icons/content', 'arrow-right', get_icon_setting('w-5 h-5 fill-[#9D0A26]')); ?>
                </div>
            </div>
        </div>

        <div class="w-full mt-10">

            <!-- swiper -->
            <div class="swiper js-swiper-events">

                <div class="swiper-wrapper">

                    <!-- slide -->
                    <?php
                    $events = new WP_Query($args);

                    if ($events->have_posts()) :
                        while ($events->have_posts()) : $events->the_post();
                    ?>
                            <div class="swiper-slide">

                                <a class="mb-8" href="<?php the_permalink() ?>">
                                    <div class="overflow-hidden rounded-[10px] shadow-xl bg-white">
                                        <div class="w-full h-[200px] overflow-hidden">
                                            <!-- <img class="w-full h-full object-cover" src="<php echo get_template_directory_uri() ?>/resources/images/thumbnail.png" alt="" /> -->

                                            <?php
                                            the_post_thumbnail('post-thumbnail', array(
                                                'class' => 'w-full h-full object-cover',
                                                'alt'   => get_the_title()
                                            )) ?>
                                        </div>

                                        <div class="flex pb-4 pl-8">
                                            <div class="w-[70px] h-[70px] rounded-xl border border-[#BA6239] flex justify-center items-center bg-white -mt-8">
                                                <p class="font-bold text-center uppercase text-[#BA6239]">
                                                    <!-- FEV <br />
																13 -->

                                                    <?php echo get_date_format(get_field('data_do_evento')) ?>
                                                </p>
                                            </div>

                                            <div class="pl-4">
                                                <h6 class="text-sm font-normal">
                                                    <!-- Manhã de Avivamen;to -->

                                                    <?php the_title() ?>
                                                </h6>

                                                <p class="text-sm font-normal text-[#ACA6A6]">
                                                    <!-- Evento presencial -->

                                                    Evento <?php echo get_field('tipo_do_evento') ?>
                                                </p>

                                                <p class="rounded-[4px] inline-block text-[7px] italic text-white bg-gradient-to-r from-[#9D0A26] to-[#BA6239] py-1 px-8">
                                                    <!-- Em breve -->

                                                    <?php echo get_status_event(get_field('data_do_evento')); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="transition duration-300 hover:scale-90 rounded-[10px] bg-gradient-to-r from-[#9D0A26] to-[#BA6239] mt-4 p-2">
                                        <p class="font-semibold text-center uppercase text-white">
                                            Saiba mais
                                        </p>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="swipe-slide">
                            <div class="w-full rounded-lg shadow-xl flex flex-col items-center gap-y-6 bg-red-200 p-4">
                                <svg class="w-10 fill-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z" />
                                </svg>

                                <p class="text-lg font-bold tex-center text-red-400">
                                    Nenhum evento registrado!
                                </p>
                            </div>
                        </div>
                    <?php endif;

                    wp_reset_query();
                    ?>
                    <!-- end slide -->
                </div>
            </div>
            <!-- end swiper -->
        </div>
    </div>
</section>