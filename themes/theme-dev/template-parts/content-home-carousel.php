<section class="h-[320px] xl:h-screen overflow-hidden relative bg-black">

    <div class="container">


        <!-- swiper -->
        <div class="swiper js-swiper-home-banner">

            <div class="swiper-wrapper">

                <!-- slide -->
                <?php foreach (get_field('banner') as $banner) :  ?>
                    <div class="swiper-slide">
                        <a href="#">
                            <img class="w-full h-full object-cover" src="<?php echo $banner['url'] ?>" alt="Banner - AD. Calvário" />
                        </a>
                    </div>
                <?php endforeach; ?>
                <!-- end slide -->
            </div>
        </div>

        <!-- navigation -->
        <div class="swiper-button-prev swiper-button-prev-banner js-swiper-button-prev-banner">
            <img src="<?php echo get_template_directory_uri() ?>/resources/images/icon-arrow-left.png" alt="Seta Esquerda - Carrossel - AD. Calvário" />
        </div>

        <div class="swiper-button-next swiper-button-next-banner js-swiper-button-next-banner">
            <img src="<?php echo get_template_directory_uri() ?>/resources/images/icon-arrow-right.png" alt="Seta Direita - Carrossel - AD. Calvário" />
        </div>

        <!-- pagination -->
        <div class="swiper-pagination swiper-pagination-banner js-swiper-pagination-banner"></div>
        <!-- end swiper -->
    </div>
</section>