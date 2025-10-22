<section class="pt-28 pb-10">

    <div class="container">

        <div class="w-full">
            <h3 class="text-xl font-semibold">
                Encontre outros eventos por categorias
            </h3>
        </div>
    </div>
</section>

<section class="bg-[#E2E2E2] py-20">
    <div class="container flex flex-wrap">

        <div class="w-1/12">
            <div class="w-full h-full flex justify-center items-center">
                <div class="swiper-button-prev swiper-button-prev-categories js-swiper-button-prev-categories">
                    <?php echo get_template_part('template-parts/icons/content', 'arrow-left', get_icon_setting('fill-[#9D0A26]')); ?>
                </div>
            </div>
        </div>

        <div class="w-10/12">

            <!-- swiper -->
            <div class="swiper js-swiper-categories">

                <div class="swiper-wrapper">

                    <!-- slide -->
                    <?php
                    $categories = get_terms(array(
                        'taxonomy'   => 'departamento',
                        'hide_empty' => false
                    ));

                    foreach ($categories as $category) :
                    ?>
                        <div class="swiper-slide">

                            <a class="category-item" href="<?php echo get_home_url(null, 'departamentos/?departamento=' . $category->slug); ?>">
                                <div class="category-item-box">
                                    <?php if (get_field('logo', $category)) : ?>
                                        <img class="category-item-thumbnail" src="<?php echo get_field('logo', $category) ?>" alt="<?php echo $category->name; ?> - AD. do Calvário" />
                                    <?php endif; ?>
                                </div>

                                <p class="category-item-title">
                                    <!-- Juventude do Calvário -->

                                    <?php echo $category->name; ?>
                                </p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <!-- end slide -->
                </div>
            </div>
            <!-- end swiper -->
        </div>

        <div class="w-1/12">
            <div class="w-full h-full flex justify-center items-center">
                <div class="swiper-button-next swiper-button-next-categories js-swiper-button-next-categories">
                    <?php echo get_template_part('template-parts/icons/content', 'arrow-right', get_icon_setting('fill-[#9D0A26]')); ?>
                </div>
            </div>
        </div>
    </div>
</section>