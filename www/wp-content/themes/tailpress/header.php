<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="preload" href="<?=get_template_directory_uri()?>/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?=get_template_directory_uri()?>/webfonts/PFDinDisplayPro-Bold.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?=get_template_directory_uri()?>/webfonts/PFDinDisplayPro-Light.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?=get_template_directory_uri()?>/webfonts/PFDinDisplayPro-Medium.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?=get_template_directory_uri()?>/webfonts/StartC.woff" as="font" type="font/woff" crossorigin>

	<?php wp_head(); ?>
</head>

<body>

<!--Modal-->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-black opacity-75"></div>

    <div class="modal-container bg-white w-11/12 md:w-9/12 mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content text-left px-6 py-8">
            <!--Title-->
            <div class="bg-transparent flex justify-end items-center pb-3">
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <div class="text-5xl pf-font-bold text-center mb-3">
                Обратный звонок
            </div>
            <div class="text-3xl pf-font-bold text-center mb-3">
                Наш менеджер свяжется с вами в течение 5 минут
            </div>
            <form action="">
                <div class="flex flex-col md:flex-row justify-between">
                    <label class="block w-full px-2 py-2">
                        <input class="form-input mt-1 block w-full border-2 border-black-800" type="text" placeholder="Имя" required>
                    </label>

                    <label class="block w-full px-2 py-2">
                        <input class="form-input mt-1 block w-full border-2 border-black-800" type="text" placeholder="Телефон" required>
                    </label>
                </div>

                <div class="flex mt-6 text-center w-full pf-font-light text-lg">
                    <label class="flex justify-center items-center w-full">
                        <input type="checkbox" class="form-checkbox border-2 border-black-800" required>
                        <span class="ml-2">Я согласен(а) с обработкой персональных данных*</span>
                    </label>
                </div>
                <div class="flex justify-center mt-4">
                    <button type="submit" class="mx-auto bg-mblue text-lg pf-font-medium text-white hover:bg-blue-600 shadow-blue px-9 py-3">Отправить</button>
                </div>
            </form>
        </div>
    </div>

</div>

<!--HEADER-->
<header id="top" class=" w-full flex flex-col fixed lg:relative bg-white pin-t pin-r pin-l">
    <div class="container sm:px-5 mx-auto">
        <!--   MENU     -->
        <nav id="site-menu" class="w-full justify-center items-center px-4 sm:px-6 py-1 lg:py-0 bg-white">
            <div class="w-full lg:w-auto self-start sm:self-center flex flex-row sm:flex-none flex-no-wrap justify-between items-center">
                <a href="/" class="flex lg:hidden start-c no-underline py-1 flex flex-row items-center text-lg sm:text-3xl">
                    <img src="<?=get_template_directory_uri()?>/images/icon.png" alt="Logo" width="88" height="48">
                    <span class="hidden lg:block"><span class="text-mblue ">ЕТАЛ</span>ЛОЛОМ</span></a>
                <button id="menuBtn" class="hamburger block lg:hidden focus:outline-none" type="button" onclick="navToggle();">
                    <span class="hamburger__top-bun"></span><span class="hamburger__bottom-bun"></span>
                </button>
            </div>
            <div id="menu" class="w-full lg:w-auto self-center lg:flex flex-col lg:flex-row items-center justify-between h-full pb-4 py-0 lg:pb-0 hidden">
                <a class="text-dark hover:bg-mgray text-center hover:text-mlgreen pf-font-light text-lg w-full no-underline w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#">Прием металлолома</a>
                <a class="text-dark hover:bg-mgray text-center hover:text-mlgreen pf-font-light text-lg w-full no-underline w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#">Черный металлолом</a>
                <a class="text-dark hover:bg-mgray text-center hover:text-mlgreen pf-font-light text-lg w-full no-underline w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#">Контакты</a>
                <a class="text-dark hover:bg-mgray text-center hover:text-mlgreen pf-font-light text-lg w-full no-underline w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#">О компании</a>
                <a class="text-dark hover:bg-mgray text-center hover:text-mlgreen pf-font-light text-lg w-full no-underline w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#">Цены</a>
                <a class="text-dark hover:bg-mgray text-center hover:text-mlgreen pf-font-light text-lg w-full no-underline w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#">Вопрос ответ</a>
                <a class="text-dark hover:bg-mgray text-center hover:text-mlgreen pf-font-light text-lg w-full no-underline w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#">Условия сдачи</a>
            </div>
        </nav>
    </div>
    <div class="border-b-2 border-mgray"></div>
</header>
<!--   HEADER INFO     -->
<section class="pt-20 lg:pt-0">
    <div class="container py-2 sm:px-5 mx-auto">
        <!--   HEADER INFO     -->
        <div class="flex flex-row justify-center lg:justify-between flex-wrap w-full">
            <div class="w-full md:w-2/6 mb-2 flex justify-center lg:justify-start xl:w-2/6">
                <a href="/" class="flex start-c no-underline py-1 flex flex-row items-center text-lg md:text-2xl">
                    <img src="<?=get_template_directory_uri()?>/images/icon.png" alt="Logo" width="88" height="48">
                    <span class="text-mblue ">ЕТАЛ</span>ЛОЛОМ</a>
            </div>
            <div class="w-auto md:w-2/6 mb-2 text-center flex flex-row md:items-center lg:items-start justify-center lg:text-left lg:justify-start lg:w-auto">
                <a href="#" class="w-full text-mlgreen text-xl text-lg pf-font-medium no-underline px-2">
                    <i class="fab fa-viber"></i>
                </a>
                <a href="#" class="w-full text-mlgreen text-xl text-lg pf-font-medium no-underline px-2">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
            <div class="w-full md:w-2/6 mb-2 text-center flex flex-col justify-center lg:text-left lg:justify-start lg:w-auto px-2">
                <a href="tel:++ 74956680359" class="w-full text-black hover:text-mlgreen font-bold text-lg pf-font-medium no-underline">+ 7 (495) 668-03-59</a>
                <p class="w-full pf-font-light text-black text-lg">Работаем с 8:00 до 23:00</p>
            </div>
            <div class="w-full md:w-2/6 mb-2 text-center flex flex-col justify-center lg:text-left lg:justify-start lg:w-auto px-2">
                <a href="mailto:infometall@gmail.com" class="w-full text-black-900 hover:text-mlgreen text-lg pf-font-light underline dotted">infometall@gmail.com</a>
                <p class="w-full pf-font-light text-black text-lg">г.Москва, Каширное шоссе, 67с2</p>
            </div>
            <div class="w-auto md:w-2/6 mb-2 text-center items-center flex flex-row justify-center lg:text-left lg:justify-start lg:w-auto">
                <a href="#" class="w-full flex justify-center text-mlgreen text-xl text-lg pf-font-medium no-underline px-2">
                    <div class="h-8 w-8 flex justify-center items-center rounded-full border-2 border-mlgreen">
                        <i class="fab fa-instagram-square"></i>
                    </div>
                </a>
                <a href="#" class="w-full flex justify-center text-mlgreen text-xl text-lg pf-font-medium no-underline px-2">
                    <div class="h-8 w-8 flex justify-center items-center rounded-full border-2 border-mlgreen">
                        <i class="fab fa-vk"></i>
                    </div>
                </a>
            </div>
            <div class="w-full md:w-2/6 mb-2 text-center flex flex-row justify-center lg:text-left lg:justify-start lg:w-auto">
                <button class="modal-open bg-mblue text-white hover:bg-blue-600 shadow-blue px-5 py-2">
                    Обратный звонок
                </button>
            </div>
        </div>
    </div>
</section>
<!--HEADER INFO END-->

