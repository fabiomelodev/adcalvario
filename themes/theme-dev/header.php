<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme Dev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body x-data="{ menu: false }" x-bind:class="menu == true ? 'overflow-hidden' : ''" <?php body_class(); ?>>

    <div id="page" class="site">
        <!-- <a 
        class="skip-link screen-reader-text" 
        href="#content"><?php esc_html_e('Skip to content', ''); ?></a> -->

        <!-- top social media -->
        <?php echo get_template_part('template-parts/content', 'general-top-social-media') ?>
        <!-- end top social media -->

        <header class="py-4">
            <div class="container xl:px-24">

                <div class="flex flex-wrap xl:px-4">

                    <div class="w-2/12 flex justify-center items-center">
                        <a href="<?php echo get_home_url(null, '/') ?>">
                            <img src="<?php echo get_template_directory_uri() ?>/resources/images/logo.png" alt="AD. Calvário" />
                        </a>
                    </div>

                    <!-- desktop -->
                    <nav class="flex-1 hidden xl:flex justify-center">
                        <ul class="flex gap-x-12">
                            <?php foreach (get_nav_links() as $link) : ?>
                                <li>
                                    <a class="block text-sm 2xl:text-base font-bold uppercase <?php echo $link['link'] == $wp->request ? 'text-[#9D0A26]' : 'text-black' ?> py-4" href="<?php echo get_home_url(null, $link['link']) ?>">
                                        <span class="relative">
                                            <?php echo $link['title']; ?>

                                            <?php if ($link['link'] == $wp->request) : ?>
                                                <div class="w-full h-[3px] top-full left-1/2 -translate-x-1/2 absolute bg-[#9D0A26]"></div>
                                            <?php endif; ?>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <!-- end desktop -->

                    <!-- mobile -->
                    <div class="w-10/12 flex xl:hidden justify-end">
                        <button
                            class="w-12 h-12 rounded-full p-3"
                            x-on:click="menu = true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
                            </svg>
                        </button>

                        <nav
                            class="w-full h-screen top-0 left-0 fixed bg-[#9D0A26] z-50"
                            x-show="menu"
                            x-transition:enter="transition duration-500"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition duration-500"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0">
                            <div class="w-full h-[80px] flex justify-between bg-white px-4">
                                <div class="w-2/12 flex justify-center items-center">
                                    <a href="<?php echo get_home_url(null, '/') ?>">
                                        <img src="<?php echo get_template_directory_uri() ?>/resources/images/logo.png" alt="AD. Calvário" />
                                    </a>
                                </div>

                                <div class="flex items-center">
                                    <button
                                        class="w-12 h-12 rounded-full p-3"
                                        x-on:click="menu = false">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <ul class="flex flex-col gap-x-12 px-10">
                                <?php foreach (get_nav_links() as $link) : ?>
                                    <li>
                                        <a class="block text-xl font-bold uppercase text-white py-4" href="<?php echo get_home_url(null, $link['link']) ?>">
                                            <span class="relative">
                                                <?php echo $link['title']; ?>

                                                <?php if ($link['link'] == $wp->request) : ?>
                                                    <div class="w-full h-[3px] top-full left-1/2 -translate-x-1/2 absolute bg-white"></div>
                                                <?php endif; ?>
                                            </span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="flex justify-between mt-10 px-10">
                                <?php

                                if (have_rows('redes_sociais', 'option')) :
                                    while (have_rows('redes_sociais', 'option')): the_row();

                                ?>
                                        <a class="flex justify-center items-center gap-4 py-4" href="<?php echo get_sub_field('link') ?>" target="_blank" rel="noreferrer nopenener">
                                            <?php if (get_sub_field('icone') == 'Facebook') : ?>
                                                <svg class="w-9 h-9 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                                                </svg>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('icone') == 'Instagram') : ?>
                                                <svg class="w-9 h-9 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                                </svg>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('icone') == 'Whatsapp') : ?>
                                                <svg class="w-9 h-9 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                                </svg>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('icone') == 'Youtube') : ?>
                                                <svg class="w-9 h-9 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                                                </svg>
                                            <?php endif; ?>
                                        </a>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </nav>
                    </div>
                    <!-- end mobile -->
                </div>
            </div>
        </header>

        <div> <!-- #content -->