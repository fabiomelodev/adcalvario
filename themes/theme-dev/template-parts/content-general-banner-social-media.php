<section class="w-full h-[220px] xl:h-[480px] relative flex items-end bg-cover bg-no-repeat pb-20">

    <?php
    the_post_thumbnail('post-thumbnail', array(
        'class' => 'w-full h-full top-0 left-0 object-cover absolute z-0'
    ));
    ?>

    <div class="w-full h-full top-0 left-0 opacity-90 absolute bg-gradient-to-b from-[#C06F4C] to-[#A7233C] z-10"></div>

    <div class="container relative z-20">

        <div class="w-full">
            <div class="border-b-[8px] border-white flex flex-col xl:flex-row justify-between pb-6">
                <div class="flex justify-center xl:justify-start items-center gap-x-8">
                    <h1 class="text-3xl xl:text-6xl font-semibold font-myriad-pro uppercase text-white">
                        <?php the_title() ?>
                    </h1>

                    <div class="hidden xl:flex items-center gap-4">
                        <?php for ($i = 0; $i < 3; $i++): ?>
                            <span class="w-4 h-4 rounded-full block bg-white"></span>
                        <?php endfor; ?>
                    </div>
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