<section class="py-20">

    <div class="container grid grid-cols-2 lg:grid-cols-3 gap-4">

        <div class="col-span-full mb-6">
            <h2 class="text-3xl font-semibold uppercase">
                Galeria
            </h2>
        </div>

        <?php foreach ($args as $key => $photo) : ?>
            <div class="gallery-item js-gallery-item" data-value="<?php echo $key; ?>">
                <img class="w-full h-[160px] object-cover" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['title']; ?> - AD. do Calvário" />

                <div class="gallery-item-overlay">
                    <svg class="w-8 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                    </svg>
                </div>
            </div>

            <?php
            if ($key == 11) {
                break;
            }
            ?>
        <?php endforeach; ?>
    </div>
</section>

<!-- modal photo -->
<div class="modal-gallery js-modal-gallery">

    <div class="modal-gallery-overlay js-modal-gallery-overlay"></div>

    <div class="container flex justify-center">

        <div class="w-10/12 xl:w-8/12">

            <div class="w-full h-full rounded-lg shadow-xl bg-white p-4">

                <!-- swiper -->
                <div class="swiper js-swiper-photos">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php foreach ($args as $photo) : ?>
                            <div class="swiper-slide">
                                <img class="w-full h-[400px] object-cover" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['title']; ?> - AD. do Calvário" />

                                <div class="w-full bottom-0 left-0 absolute bg-black/90 p-4 z-50">
                                    <p class="text-sm font-medium text-white">
                                        <?php echo $photo['title']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->

                <div class="swiper-button-prev swiper-button-prev-gallery js-swiper-button-prev-gallery">
                    <?php echo get_template_part('template-parts/icons/content', 'arrow-left', get_icon_setting('w-7 fill-white')) ?>
                </div>

                <div class="swiper-button-next swiper-button-next-gallery js-swiper-button-next-gallery">
                    <?php echo get_template_part('template-parts/icons/content', 'arrow-right', get_icon_setting('w-7 fill-white')) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal photo -->