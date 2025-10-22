<section class="pt-32">

    <div class="flex">

        <div class="w-2/12 xl:w-5/12 relative">
            <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/mvv-background.png" alt="Fundo MVV - AD. Calvário" />

            <div class="w-[600px] top-1/2 left-0 -rotate-90 absolute hidden xl:flex flex-row-reverse items-center">
                <h4 class="text-[70px] font-bold font-myriad-pro uppercase text-center text-white">
                    Nossa Missão
                </h4>

                <div class="w-8 h-20 rounded-lg bg-white mr-4"></div>
            </div>
        </div>

        <div class="w-10/12 xl:w-7/12 pt-10 pr-4 xl:pr-44">

            <div class="w-full relative pb-8 pl-8">
                <div class="w-24 h-24 top-1/2 -left-16 -translate-y-1/2 rounded-full border-4 border-white overflow-hidden absolute flex justify-center items-center">

                    <div class="w-full h-full rounded-full flex justify-center items-center bg-[#BA6239]">
                        <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/icon-mission.png" alt="Missão - AD. Calvário" />
                    </div>
                </div>

                <h3 class="text-[40px] font-bold font-myriad-pro uppercase text-[#707070] mb-4">
                    Nossa missão
                </h3>

                <span class="block font-light font-montserrat">
                    <?php echo get_field('missao') ?>
                </span>
            </div>

            <div class="w-full relative pb-8 pl-8">
                <div class="w-24 h-24 top-1/2 -left-16 -translate-y-1/2 rounded-full border-4 border-white overflow-hidden absolute flex justify-center items-center">

                    <div class="w-full h-full rounded-full flex justify-center items-center bg-[#BA6239]">
                        <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/icon-mission.png" alt="Missão - AD. Calvário" />
                    </div>
                </div>

                <h3 class="text-[40px] font-bold font-myriad-pro uppercase text-[#707070] mb-4">
                    Nossa visão
                </h3>

                <span class="block font-light font-montserrat">
                    <?php echo get_field('visao') ?>
                </span>
            </div>

            <div class="w-full relative pb-8 pl-8">
                <div class="w-24 h-24 top-1/2 -left-16 -translate-y-1/2 rounded-full border-4 border-white overflow-hidden absolute flex justify-center items-center">

                    <div class="w-full h-full rounded-full flex justify-center items-center bg-[#BA6239]">
                        <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/icon-mission.png" alt="Missão - AD. Calvário" />
                    </div>
                </div>

                <h3 class="text-[40px] font-bold font-myriad-pro uppercase text-[#707070] mb-4" style="line-height:100%">
                    Nossos princípios
                </h3>

                <span class="block font-light font-montserrat">
                    <?php echo get_field('principios') ?>
                </span>
            </div>
        </div>
    </div>
</section>