<section class="h-[320px] xl:h-[800px] overflow-hidden relative bg-black">

    <!-- swiper -->
    <div class="swiper h-full js-swiper-home-banner">

        <div class="swiper-wrapper">

            <!-- slide -->
            <?php foreach (get_field('banner') as $banner): ?>
                <div class="swiper-slide">
                    <a class="h-full relative flex justify-center items-center" href="#">
                        <img class="w-full h-full top-0 left-0 opacity-50 object-cover absolute z-10"
                            src="<?php echo $banner['url'] ?>" alt="Banner - AD. Calvário" />

                        <img class="h-full object-cover relative z-20" src="<?php echo $banner['url'] ?>"
                            alt="Banner - AD. Calvário" />
                    </a>
                </div>
            <?php endforeach; ?>
            <!-- end slide -->
        </div>
    </div>

    <!-- navigation -->
    <div class="swiper-button-prev swiper-button-prev-banner js-swiper-button-prev-banner">
        <img src="<?php echo get_template_directory_uri() ?>/resources/images/icon-arrow-left.png"
            alt="Seta Esquerda - Carrossel - AD. Calvário" />
    </div>

    <div class="swiper-button-next swiper-button-next-banner js-swiper-button-next-banner">
        <img src="<?php echo get_template_directory_uri() ?>/resources/images/icon-arrow-right.png"
            alt="Seta Direita - Carrossel - AD. Calvário" />
    </div>

    <!-- pagination -->
    <div class="swiper-pagination swiper-pagination-banner js-swiper-pagination-banner"></div>
    <!-- end swiper -->

</section>