<section class="mt-20">

    <div class="container flex justify-center">

        <div class="w-full xl:w-10/12">

            <span>
                <?php echo get_field('descricao'); ?>
            </span>
        </div>
    </div>

    <div class="xl:container flex justify-center">

        <div class="w-full xl:w-10/12">
            <!-- swiper -->
            <div class="relative bg-[#A7233C] mt-16 xl:px-8">
                <div class="swiper js-swiper-about-gallery">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php foreach (get_field('galeria') as $image) : ?>
                            <div class="swiper-slide">
                                <img
                                    class="w-full h-[548px] object-contain"
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endforeach; ?>
                        <!-- end slide -->
                    </div>
                </div>

                <div class="swiper-button-prev swiper-button-prev-about-gallery js-swiper-button-prev-about-gallery"></div>
                <div class="swiper-button-next swiper-button-next-about-gallery js-swiper-button-next-about-gallery"></div>
            </div>
            <!-- end swiper -->
        </div>
    </div>
</section>