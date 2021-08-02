<?
$options = get_fields( 'options' );

get_template_part( 'include/header', 'head' );

get_template_part( 'include/modal', 'callback' );
?>

<header id="top"
        class="bg-white bg-opacity-100 lg:bg-opacity-80 w-full flex flex-col fixed lg:relative pin-t pin-r pin-l">
    <div class="container sm:px-5 mx-auto">
        <nav id="site-menu"
             class="bg-white lg:bg-transparent w-full justify-center items-center px-4 sm:px-6 py-1 lg:py-0">
            <div
                class="w-full lg:w-auto self-start sm:self-center flex flex-row sm:flex-none flex-no-wrap justify-between items-center">
                <a href="/"
                   class="flex logo lg:hidden no-underline py-1 flex flex-row items-center text-lg sm:text-3xl">
                    <img src="<?= get_template_directory_uri() ?>/images/icon.png" alt="Logo" width="88" height="48">
                    <span>
                        <span class="text-mblue">
                            ЕТАЛ
                        </span>
                        ЛОЛОМ
                    </span>
                </a>
                <button id="menuBtn" class="hamburger block lg:hidden focus:outline-none" type="button"
                        onclick="navToggle();">
                    <span class="hamburger__top-bun"></span>
                    <span class="hamburger__bottom-bun"></span>
                </button>
            </div>

            <? $menu = wp_get_nav_menu_items( 3, array() ); ?>
            <div id="menu"
                 class="w-full lg:w-auto self-center lg:flex flex-col lg:flex-row items-center justify-between h-full pb-4 py-0 lg:pb-0 hidden">
                <? foreach ( $menu as $item ) { ?>
                    <a class="text-dark hover:bg-mgray text-center hover:text-mlgreen pf-font-light text-lg no-underline w-auto sm:px-4 py-2 sm:py-1 sm:pt-2"
                       href="<?= $item->url ?>">
                        <?= $item->title; ?>
                    </a>
                <? } ?>
            </div>
        </nav>
    </div>
    <div class="border-b-2 border-mgray"></div>
</header>
<section class="bg-white bg-opacity-100 lg:bg-opacity-80 pt-20 lg:pt-0">
    <div class="container py-2 sm:px-5 mx-auto">
        <div class="flex flex-row justify-center lg:justify-between flex-wrap w-full">
            <div class="w-full hidden md:block md:w-2/6 mb-2 flex justify-center lg:justify-start xl:w-2/6">
                <a href="/"
                   class="flex logo no-underline py-1 flex flex-row items-center text-lg md:text-xl lg:text-2xl">
                    <img src="<?=get_template_directory_uri()?>/images/icon.png" alt="Logo" width="88" height="48">
                    <span>
                        <span class="text-mblue">ЕТАЛ</span>ЛОЛОМ
                    </span>
                </a>
            </div>
            <div class="w-auto md:w-2/6 mb-2 text-center flex flex-row md:items-center lg:items-start justify-center lg:text-left lg:justify-start lg:w-auto">
                <?foreach ($options['messengers'] as $messenger){?>
                    <a href="<?=$messenger['link']?>" class="w-full text-mlgreen text-xl text-lg font-regular font-medium no-underline px-2">
                        <i class="<?=$messenger['icon']?> shadow-mlgreen rounded-full"></i>
                    </a>
                <?}?>
            </div>
            <div class="w-full md:w-2/6 mb-2 text-center flex flex-col justify-center lg:text-left lg:justify-start lg:w-auto px-2">
                <a href="<?=$options['phone']->uri()?>" class="w-full text-black hover:text-mlgreen font-bold text-lg pf-font-medium no-underline"><?=$options['phone']->international()?></a>
                <p class="w-full pf-font-light text-black text-lg"><?=$options['schedule']?></p>
            </div>
            <div class="w-full md:w-2/6 mb-2 text-center flex flex-col justify-center lg:text-left lg:justify-start lg:w-auto px-2">
                <a href="mailto:<?=$options['email']?>" class="w-full text-black-900 hover:text-mlgreen text-lg pf-font-light underline dotted"><?=$options['email']?></a>
                <p class="w-full pf-font-light text-black text-lg"><?=$options['address']?></p>
            </div>
            <div class="w-auto md:w-2/6 mb-2 text-center items-center flex flex-row justify-center lg:text-left lg:justify-start lg:w-auto">
                <?foreach ($options['social'] as $social){?>
                    <a href="<?=$social['link']?>" class="w-full flex justify-center text-mlgreen text-xl text-lg font-regular font-medium no-underline px-2">
                        <div class="h-8 w-8 flex justify-center items-center rounded-full border-2 border-mlgreen shadow-mlgreen">
                            <i class="<?=$social['icon']?>"></i>
                        </div>
                    </a>
                <?}?>
            </div>
            <div class="w-full md:w-2/6 mb-2 text-center flex flex-row justify-center lg:text-left lg:justify-start lg:w-auto">
                <button class="modal-open h-16 bg-mblue text-white hover:bg-blue-500 shadow-blue px-5 py-2">
                    Обратный звонок
                </button>
            </div>
        </div>
    </div>
</section>

<section class="py-5 overlay-section">
    <div class="container px-5 mx-auto">
        <div class="flex justify-center text-center">
            <div class="blur-sm p-7 w-full lg:w-3/5 mb-36">
                <h1 class="text-6xl font-thin">Прием и переработка<br><strong>Металлолома<br>от 31 100 руб.</strong>
                </h1>
                <p>Работаем без выходных! Деньги есть всегда! Автомобили в лом не принимаем. Вывозим лом собственным
                    транспортом камазами с манипуляторной установкой! Вывоз металлолома собственным транспортом,
                    бесплатная погрузка/разгрузка.</p>
                <button class="modal-open mt-4 h-16 bg-mblue text-white hover:bg-blue-500 shadow-blue px-5 py-2">Сдать
                    металлолом
                </button>
            </div>
        </div>
    </div>
</section>
<section class="-mt-28">
    <div class="container sm:px-5 mx-auto">
        <div class="flex flex-col lg:flex-row flex-wrap shadow-around">
            <div class="bg-white w-full lg:w-7/12 p-4 px-5">
                <h1>Сдать металлолом это просто!</h1>
                <p class="text-lg">Позвоните нам по телефону или заполните форму, и в этот же день мы обменяем ваш
                    металлолом на деньги</p><a href="tel:+74956680359"
                                               class="w-auto text-mdblue hover:text-mlgreen font-bold text-2xl pf-font-medium no-underline">+
                    7 (495) 668-03-59</a>
            </div>
            <div class="bg-mblue w-full lg:w-5/12 p-4 px-5">
                <form action="">
                    <div class="flex flex-col md:flex-row justify-center"><label
                            class="block w-full md:w-1/2 px-2 py-2"><input
                                class="form-input w-full placeholder-white mt-1 block bgl-transparent w-full border-2 border-white"
                                placeholder="Имя" required></label> <label
                            class="block w-full md:w-1/2 px-2 py-2"><input
                                class="form-input w-full placeholder-white mt-1 block bgl-transparent w-full border-2 border-white"
                                placeholder="Вес лома" required></label></div>
                    <div class="flex mt-6 text-center w-full pf-font-light text-lg"><label
                            class="flex flex-col md:flex-row justify-center items-center w-full text-white"><input
                                type="checkbox" class="form-checkbox bgl-transparent border-2 border-white" required>
                            <span class="ml-2 text-white">Я согласен(а) с обработкой персональных данных*</span></label>
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                                class="mx-auto bg-white text-lg font-regular font-medium text-mblue hover:bg-gray-200 shadow-blue px-9 py-3">
                            Записаться
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
