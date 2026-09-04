<section
    class="w-full min-h-[160px] xl:min-h-[360px] rounded-bl-[20px] rounded-br-[20px] overflow-hidden relative flex items-end bg-gradient-to-b from-[#C06F4C] to-[#A7233C] pb-8 lg:pb-20">

    <div class="container relative z-20">

        <div class="w-full">
            <div
                class="border-b-[2px] border-white rounded-bl-[20px] rounded-br-[20px] flex flex-col xl:flex-row justify-between pb-6 px-6">

                <div>

                    <h3 class="text-xl lg:text-4xl font-bold font-myriad-pro uppercase text-white">
                        Afiliar-se
                    </h3>

                    <h1 class="text-3xl xl:text-6xl font-semibold font-myriad-pro uppercase text-white">
                        <?php the_title() ?>
                    </h1>
                </div>

                <div class="hidden xl:flex gap-x-8">
                    <?php
                    if (have_rows('redes_sociais', 'option')):
                        while (have_rows('redes_sociais', 'option')):
                            the_row();
                            ?>
                            <a class="transition hover:scale-110 flex justify-center items-center gap-4 py-4"
                                href="<?php echo get_sub_field('link') ?>" target="_blank" rel="noreferrer nopenener">
                                <?php if (get_sub_field('icone') == 'Facebook'): ?>
                                    <?php echo get_template_part('template-parts/icons/content', 'facebook', get_icon_setting('w-9 h-9 fill-white')); ?>
                                <?php endif; ?>

                                <?php if (get_sub_field('icone') == 'Instagram'): ?>
                                    <?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-9 h-9 fill-white')); ?>
                                <?php endif; ?>

                                <?php if (get_sub_field('icone') == 'Whatsapp'): ?>
                                    <?php echo get_template_part('template-parts/icons/content', 'whatsapp', get_icon_setting('w-9 h-9 fill-white')); ?>
                                <?php endif; ?>

                                <?php if (get_sub_field('icone') == 'Youtube'): ?>
                                    <?php echo get_template_part('template-parts/icons/content', 'youtube', get_icon_setting('w-9 h-9 fill-white')); ?>
                                <?php endif; ?>
                            </a>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>