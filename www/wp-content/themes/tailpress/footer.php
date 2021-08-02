<? $options = get_fields('options'); ?>
<?php get_template_part( 'partners', 'block' ); ?>
<!--FOOTER-->
<footer class="border-t-2 border-mgray">
    <div class="container py-2 sm:px-5 mx-auto">
        <!--   HEADER INFO     -->
        <div class="flex flex-row justify-center lg:justify-between flex-wrap w-full">
            <div class="w-full md:w-2/6 mb-2 flex justify-center lg:justify-start lg:w-auto">
                <a href="/" class="flex logo no-underline py-1 flex flex-row items-center text-lg md:text-2xl">
                    <img src="<?=get_template_directory_uri()?>/images/icon.png" alt="Logo" width="88" height="48">
                    <span class="text-mblue ">ЕТАЛ</span>ЛОЛОМ</a>
            </div>
            <div class="w-full md:w-2/6 mb-2 text-center flex flex-col md:items-center lg:items-start justify-center lg:text-left lg:justify-start lg:w-auto">
                <? $menu_1 = wp_get_nav_menu_items(4, array());?>
                <ul class="list-none">
                <?foreach ($menu_1 as $item){?>
                    <li>
                        <a href="<?=$item->url?>" class="pf-font-light text-lg hover:text-mlgreen"><?=$item->title?></a>
                    </li>
                <?}?>
                </ul>
            </div>
            <div class="w-full md:w-2/6 mb-2 text-center flex flex-row md:items-center lg:items-start justify-center lg:text-left lg:justify-start lg:w-auto">
                <? $menu_2 = wp_get_nav_menu_items(5, array());?>
                <ul class="list-none">
                <?foreach ($menu_2 as $item){?>
                    <li>
                        <a href="<?=$item->url?>" class="pf-font-light text-lg hover:text-mlgreen"><?=$item->title?></a>
                    </li>
                <?}?>
                </ul>
            </div>

            <div class="w-full md:w-2/6 mb-2 text-center flex flex-col justify-center lg:text-left lg:justify-start lg:w-auto px-2">
                <a href="<?=$options['phone']->uri()?>" class="w-full text-black hover:text-mlgreen font-bold text-lg pf-font-medium no-underline"><?=$options['phone']->international()?></a>
                <p class="w-full pf-font-light text-black text-lg"><?=$options['schedule']?></p>
                <?if(!empty($options['messengers'])){?>
                    <ul class="list-none">
                        <?foreach ($options['messengers'] as $messenger){?>
                            <li class="w-auto inline-block ">
                                <a href="<?=$messenger['link']?>" class="text-mlgreen text-xl text-lg pf-font-medium no-underline px-2">
                                    <i class="<?=$messenger['icon']?> shadow-mlgreen rounded-full"></i>
                                </a>
                            </li>
                        <?}?>
                    </ul>
                <?}?>
            </div>
            <div class="w-full md:w-2/6 mb-2 text-center flex flex-col justify-center lg:text-left lg:justify-start lg:w-auto px-2">
                <a href="mailto:<?=$options['email']?>" class="w-full text-mlgreen hover:text-black text-lg pf-font-light underline dotted"><?=$options['email']?></a>
                <p class="w-full pf-font-light text-black text-lg"><?=$options['address']?></p>
            </div>
            <div class="w-full md:w-2/6 mb-2 text-center flex flex-row justify-center lg:text-left lg:justify-start lg:w-auto">
                <button class="modal-open h-16	bg-mblue text-lg pf-font-medium text-white hover:bg-blue-500 shadow-blue px-5 py-1">
                    Обратный звонок
                </button>
            </div>
        </div>
    </div>
</footer>
<!--FOOTER END-->

<?php wp_footer(); ?>

</body>
</html>
