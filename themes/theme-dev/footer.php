<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evoluta
 */

?>

</div><!-- #content -->

</div><!-- #page -->

<?php echo get_template_part('template-parts/content', 'footer-contact-us'); ?>

<!-- footer -->
<footer class="bg-[#9D0A26] mt-20 py-8">

    <div class="container grid grid-cols-1 xl:grid-cols-3 gap-y-10 xl:gap-4">

        <div>
            <div class="mb-6">
                <h3 class="text-3xl font-light capitalize text-white mb-2">
                    Sobre nós
                </h3>

                <div class="w-8 h-[1px] bg-white"></div>
            </div>

            <span class="block font-light text-white">
                <?php echo get_field('informacoes_sobre', 'option') ?>
            </span>
        </div>

        <div>
            <h3 class="text-3xl font-light capitalize text-white mb-4">
                Redes sociais
            </h3>

            <ul>
                <?php
                $status = false;

                if (have_rows('redes_sociais', 'option')) :
                    while (have_rows('redes_sociais', 'option')): the_row();
                        foreach (get_sub_field('visivel_em') as $hidden) {
                            if ($hidden == 'Rodapé') {
                                $status = true;

                                break;
                            } else {
                                $status = false;
                            }
                        }

                        if ($status) :
                ?>
                            <li class="mb-2 last:mb-0">
                                <a class="flex items-center" href="<?php echo get_sub_field('link') ?>" target="_blank" rel="noreferrer noopener">
                                    <?php if (get_sub_field('icone') == 'Facebook') : ?>
                                        <?php echo get_template_part('template-parts/icons/content', 'facebook', get_icon_setting('w-6 h-6 fill-white')); ?>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('icone') == 'Instagram') : ?>
                                        <?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-6 h-6 fill-white')); ?>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('icone') == 'Whatsapp') : ?>
                                        <?php echo get_template_part('template-parts/icons/content', 'whatsapp', get_icon_setting('w-6 h-6 fill-white')); ?>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('icone') == 'Youtube') : ?>
                                        <?php echo get_template_part('template-parts/icons/content', 'youtube', get_icon_setting('w-6 h-6 fill-white')); ?>
                                    <?php endif; ?>

                                    <span class="text-sm font-light text-white ml-2">
                                        <?php echo get_sub_field('texto') ?>
                                    </span>
                                </a>
                            </li>
                <?php
                        endif;
                    endwhile;
                endif;
                ?>
            </ul>
        </div>

        <div>
            <h6 class="text-xs font-light text-white xl:mb-4">
                Desenvolvido por:
            </h6>

            <a class="text-2xl font-black text-white" href="https://fabiomelodev.com.br" target="_blank" rel="noreferrer noopener">
                Fabio Melo Dev
            </a>
        </div>

        <div class="col-span-full mt-10">
            <p class="font-light text-center text-white">
                Copyright <?php echo date('Y'); ?> AD. Calvário - Todos os direitos reservados
            </p>
        </div>
    </div>
</footer>
<!-- end footer -->

<?php wp_footer(); ?>

</body>

</html>