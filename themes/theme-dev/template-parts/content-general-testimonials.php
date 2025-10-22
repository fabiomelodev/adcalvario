<section class="relative" x-data="{ testimonialForm: false }">

    <div class="container flex justify-center">

        <div class="w-full xl:w-9/12">

            <div>
                <h2 class="text-3xl font-bold text-center uppercase text-[#240046]">
                    Depoimentos
                </h2>
            </div>

            <div class="testimonials-box">

                <div class="w-full xl:w-5/12 order-2 xl:order-1 relative flex flex-col justify-between items-center">

                    <ul class="flex flex-col gap-y-4">
                        <?php
                        if (have_rows('redes_sociais', 'option')) :
                            while (have_rows('redes_sociais', 'option')): the_row();
                        ?>
                                <li>
                                    <a class="flex items-center gap-x-4" href="<?php echo get_sub_field('link') ?>" target="_blank" rel="noreferrer noopener">

                                        <?php if (get_sub_field('icone') == 'Facebook') : ?>
                                            <?php echo get_template_part('template-parts/icons/content', 'facebook', get_icon_setting('w-7 fill-white')); ?>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('icone') == 'Instagram') : ?>
                                            <?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-7 fill-white')); ?>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('icone') == 'Whatsapp') : ?>
                                            <?php echo get_template_part('template-parts/icons/content', 'whatsapp', get_icon_setting('w-7 fill-white')); ?>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('icone') == 'Youtube') : ?>
                                            <?php echo get_template_part('template-parts/icons/content', 'youtube', get_icon_setting('w-7 fill-white')); ?>
                                        <?php endif; ?>

                                        <span class="text-sm font-semibold italic text-white">
                                            <!-- A.D.doCalvario -->

                                            <?php echo get_sub_field('texto') ?>
                                        </span>
                                    </a>
                                </li>
                        <?php
                            endwhile;
                        endif;
                        ?>

                        <!-- <li>
                            <a class="flex items-center gap-x-4" href="#" target="_blank" rel="noreferrer noopener">

                                <php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-7 fill-white')); ?>

                                <span class="text-sm font-semibold italic text-white">
                                    a.d.docalvario
                                </span>
                            </a>
                        </li>

                        <li>
                            <a class="flex items-center gap-x-4" href="#" target="_blank" rel="noreferrer noopener">

                                <php echo get_template_part('template-parts/icons/content', 'whatsapp', get_icon_setting('w-7 fill-white')); ?>

                                <span class="text-sm font-semibold italic text-white">
                                    secretária adc
                                </span>
                            </a>
                        </li>

                        <li>
                            <a class="flex items-center gap-x-4" href="#" target="_blank" rel="noreferrer noopener">

                                <php echo get_template_part('template-parts/icons/content', 'youtube', get_icon_setting('w-7 fill-white')); ?>

                                <span class="text-sm font-semibold italic text-white">
                                    youtube.com
                                </span>
                            </a>
                        </li> -->
                    </ul>

                    <div class="flex flex-col items-center gap-y-4 mt-44">
                        <p class="text-sm font-normal text-center text-white">
                            Envie seu depoimento!
                        </p>

                        <div class="transition duration-300 hover:scale-90 rounded-md inline-block text-[10px] font-semibold italic text-[#240046] bg-white cursor-pointer p-2" x-on:click="testimonialForm = true">
                            Depoimento
                        </div>
                    </div>

                    <div class="w-20 h-20 -bottom-20 right-0 rotate-45 border-[4px] border-white rounded-[20px] absolute"></div>
                </div>

                <div class="w-full xl:w-7/12 order-1 xl:order-2 flex items-center">

                    <!-- swiper -->
                    <div class="swiper js-swiper-testimonials">

                        <div class="swiper-wrapper">

                            <!-- slide -->
                            <?php
                            $testimonials_args = array(
                                'posts_per_page' => -1,
                                'post_type'      => 'depoimento',
                                'order'          => 'DESC'
                            );

                            $testimonials = new WP_Query($testimonials_args);

                            if ($testimonials->have_posts()) :
                                while ($testimonials->have_posts()) : $testimonials->the_post();
                            ?>
                                    <div class="swiper-slide">

                                        <div class="flex flex-col gap-y-4 px-4 xl:px-20">
                                            <span class="block text-lg font-light italic text-center text-white" style="line-height:100%">
                                                <!-- "Maravilhoso estar nesse ambiente,
                                                muito agradável e amoroso" -->

                                                "<?php echo get_field('depoimento') ?>"
                                            </span>

                                            <p class="text-xs font-semibold italic text-end text-white">
                                                <!-- Ana Mendonça -->

                                                <?php the_title() ?>
                                            </p>
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

                <!-- swiper navigation -->
                <div class="swiper-button-prev swiper-button-prev-testimonials js-swiper-button-prev-testimonials">
                    <svg class="w-6 fill-[#9D0A26]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                    </svg>
                </div>

                <div class="swiper-button-next swiper-button-next-testimonials js-swiper-button-next-testimonials">
                    <svg class="w-6 fill-[#9D0A26]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                </div>
                <!-- end swiper navigation -->
            </div>
        </div>
    </div>

    <!-- modal form -->
    <div
        class="w-full h-full top-0 left-0 fixed flex justify-center items-center bg-black/50 z-50"
        x-show="testimonialForm"
        x-cloak>

        <div class="container flex flex-wrap justify-center gap-y-4">

            <div class="w-full xl:w-8/12 flex justify-center">
                <button class="transition duration-300 hover:scale-90 rounded-full shadow-xl bg-white cursor-pointer py-2 px-6" x-on:click="testimonialForm = false">
                    <span class="text-sm font-bold">
                        Fechar
                    </span>

                    <span class="text-sm font-bold">
                        x
                    </span>
                </button>
            </div>

            <div class="w-full xl:w-8/12">

                <div class="rounded-lg shadow-xl bg-white p-6">

                    <p class="font-bold text-center">
                        Envie o seu depoimento aqui!
                    </p>

                    <p class="text-sm font-medium text-center">
                        Moderadores analisarão o depoimento!
                    </p>

                    <form action="">

                        <div class="grid grid-cols-1 gap-y-4">

                            <div class="flex flex-col gap-y-2">
                                <label class="font-bold" for="nome">
                                    Nome:
                                </label>

                                <input class="rounded-md border py-2 px-4" type="text" id="nome" name="nome" placeholder="Nome" />
                            </div>

                            <div class="flex flex-col gap-y-2">
                                <label class="font-bold" for="depoimento">
                                    Depoimento:
                                </label>

                                <textarea class="rounded-md border p-4" id="depoimento" placeholder="Depoimento..."></textarea>
                            </div>

                            <div class="flex flex-col gap-y-2">
                                <input class="rounded-md border inline-block font-bold text-white bg-[#9D0A26] hover:bg-[#9D0A26]/80 cursor-pointer py-2 px-4" type="submit" value="Enviar" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal form -->
</section>