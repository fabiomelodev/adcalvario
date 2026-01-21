<section class="w-full h-[594px] relative hidden xl:block bg-cover bg-no-repeat"
    style="background-image: url(<?php echo get_field('banner_principal', 'option'); ?>)">

    <div class="w-full h-full top-0 left-0 absolute bg-black/50"></div>

    <div class="container relative grid grid-cols-4 gap-4 px-24">

        <?php
        $status = false;

        if (have_rows('redes_sociais', 'option')):
            while (have_rows('redes_sociais', 'option')):
                the_row();
                foreach (get_sub_field('visivel_em') as $hidden) {
                    if ($hidden == 'Banner topo') {
                        $status = true;

                        break;
                    } else {
                        $status = false;
                    }
                }

                if ($status):
                    ?>
                    <a class="group flex justify-center items-center gap-4 py-4" href="<?php echo get_sub_field('link') ?>"
                        target="_blank" rel="noreferrer nopenener">
                        <?php if (get_sub_field('icone') == 'Facebook'): ?>
                            <?php echo get_template_part('template-parts/icons/content', 'facebook', get_icon_setting('w-9 h-9 fill-white group-hover:fill-[#9D0A26]')); ?>
                        <?php endif; ?>

                        <?php if (get_sub_field('icone') == 'Instagram'): ?>
                            <?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-9 h-9 fill-white group-hover:fill-[#9D0A26]')); ?>
                        <?php endif; ?>

                        <?php if (get_sub_field('icone') == 'Whatsapp'): ?>
                            <?php echo get_template_part('template-parts/icons/content', 'whatsapp', get_icon_setting('w-9 h-9 fill-white group-hover:fill-[#9D0A26]')); ?>
                        <?php endif; ?>

                        <?php if (get_sub_field('icone') == 'Youtube'): ?>
                            <?php echo get_template_part('template-parts/icons/content', 'youtube', get_icon_setting('w-9 h-9 fill-white group-hover:fill-[#9D0A26]')); ?>
                        <?php endif; ?>

                        <span class="text-sm font-bold text-white group-hover:text-[#9D0A26]">
                            <?php echo get_sub_field('texto') ?>
                        </span>
                    </a>
                    <?php
                endif;
            endwhile;
        endif;
        ?>
    </div>
</section>