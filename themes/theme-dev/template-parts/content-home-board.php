<section class="pt-20">

    <div class="container flex justify-center">

        <div class="w-full xl:w-7/12">

            <h2 class="text-3xl font-semibold font-montserrat text-center mb-20">
                Diretoria
            </h2>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-y-16 gap-x-8">

                <!-- loop -->
                <?php
                if (have_rows('diretoria')) :
                    while (have_rows('diretoria')) : the_row();
                ?>
                        <div class="col-span-1 px-16" x-data="{ boardSocialMedia: false }" x-on:mouseover="boardSocialMedia = true" x-on:mouseout="boardSocialMedia = false">
                            <div class="shadow-lg border border-[#707070] rounded-lg overflow-hidden relative flex justify-center items-center bg-[#E2E2E2] mb-1 <?php echo get_sub_field('foto') ? '' : 'p-8' ?>">
                                <?php if (get_sub_field('foto')) : ?>
                                    <img class="w-full h-full object-cover" src="<?php echo get_sub_field('foto') ?>" alt="AD. Calvário - <?php echo get_sub_field('nome') ?>" />
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/resources/images/icon-user.png" alt="AD. Calvário - <?php echo get_sub_field('nome') ?>" />
                                <?php endif; ?>

                                <div class="w-full h-full top-0 left-0 absolute flex justify-center items-center bg-black/60 z-10" x-show="boardSocialMedia" x-cloak x-transition:enter="transition duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                    <ul class="gap-4 flex items-center">
                                        <?php if (get_sub_field('facebook')) : ?>
                                            <li>
                                                <a class="w-7 h-7" href="<?php echo get_sub_field('facebook') ?>" target="_blank" rel="noreferrer noopener">
                                                    <svg class="w-7 h-7 fill-white hover:fill-[#3B5998]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                        <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                                                    </svg>
                                                </a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('instagram')) : ?>
                                            <li>
                                                <a class="w-7 h-7" href="<?php echo get_sub_field('instagram') ?>" target="_blank" rel="noreferrer noopener">
                                                    <svg class="w-7 h-7 fill-white hover:fill-[#C32AA3]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                                    </svg>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold font-montserrat text-center">
                                    <?php echo get_sub_field('nome') ?>
                                </h3>

                                <p class="text-lg font-semibold font-montserrat uppercase text-center text-[#9D0A26]">
                                    <?php echo get_sub_field('cargo') ?>
                                </p>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
                <!-- end loop -->
            </div>
        </div>
    </div>
</section>