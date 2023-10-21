<!DOCTYPE html>
<html lang="ru">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VYED58YKKG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-VYED58YKKG');
    </script>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta rel="canonical" href="https://regional-electro.ru">
    <meta name="robots" content="index">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Услуги электрика, а также электролаборатории в Братске с гарантией качества.">
    <meta name="robots" content="index">
    <meta name="keywords" content="Электрик, Братск, измерение, сопротивление, изоляция, заземление, центр">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&family=Montserrat:wght@400;500;600;800&family=Mulish:wght@400;500;600;700&family=MuseoModerno:wght@400;700&family=PT+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/icons/favicon.ico" type="image/x-icon">

    <?php

        wp_head();
    ?>
    <title><?php bloginfo('name'); echo(' | '); bloginfo('description');?></title>
</head>

<body>
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(94988854, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/94988854" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- ARROW UP -->

    <div class="arrow-up">
        <img src="<?php bloginfo('template_url'); ?>/assets/icons/arrow-up.svg" alt="стрелка вверх" aria-label="возврат в начало документа">
    </div>

    <!-- /ARROW UP -->

<!-- HEADER -->

    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__left">
                    <div class="header__logo logo-header">
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
                <div class="header__center">
                    <nav class="header__nav">
                        <?php 
                            wp_nav_menu( [
                                'menu'            => 'Main',
                                'container'       => false,
                                'menu_class'      => 'header__list',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'items_wrap'      => '<ul class="header__list">%3$s</ul>',
                                'depth'           => 1,
                            ] );
                        
                        ?>
                        
                    </nav>
                </div>
                <div class="header__right right-header">
                    <div class="right-header__icon">
                        <img src="<?php the_field('phone_icon', 2);?>" alt="telephone">
                    </div>
                    <div class="right-header__info">
                        <a href="tel:<?php the_field('phone_href', 2)?>" class="right-header__tel"
                            aria-label="ссылка для звонка на указанный номер"><?php the_field('phone_beauty', 2)?></a>
                        <address class="right-header__address"><?php the_field('address', 2);?></address>
                    </div>
                </div>

                <!-- BURGER -->

                <div class="header__burger burger">
                    <div class="burger-btns">
                        <span class="burger-btns__line"></span>
                        <span class="burger-btns__line"></span>
                        <span class="burger-btns__line"></span>
                    </div>
                    <div class="burger-menu">
                        <ul class="burger-menu__list">
                            <li class="burger-menu__item">
                                <a href="#about" class="header__link"
                                    aria-label="ссылка для перехода к секции услуги и цены">Предоставляемые услуги</a>
                            </li>
                            <li class="burger-menu__item">
                                <a href="#contacts" class="header__link"
                                    aria-label="ссылка для перехода к секции контакты">Контакты</a>
                            </li>
                        </ul>
                        <div class="burger-menu__social">

                            <a href="<?php the_field('whatsapp', 2);?>">
                                <img src="<?php bloginfo('template_url'); ?>/assets/icons/whatsapp.svg" alt="whatsapp">
                            </a>


                            <a href="<?php the_field('viber');?>">
                                <img src="<?php bloginfo('template_url'); ?>/assets/icons/viber.svg" alt="viber">
                            </a>


                            <a href="<?php the_field('telegram');?>">
                                <img src="<?php bloginfo('template_url'); ?>/assets/icons/telegram.svg" alt="telegram">
                            </a>

                        </div>
                        <div class="burger-menu__close">&#10006;</div>
                    </div>
                </div>

                <!-- /BURGER -->

            </div>
        </div>
    </header>

    <!-- /HEADER -->