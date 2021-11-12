<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dunn's Famous</title>

        <link rel="stylesheet" href="https://use.typekit.net/zhg8qgc.css" />
        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/styles/main.css" />
        <script src="<?php bloginfo(template_url); ?>/scripts/main.js" defer></script>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> data-component="Scrolly">
        <div id="progressBar"></div>
        <div id="progressBarContainer"></div>

        <header class="header" data-component="Header">
            <a href="<?php bloginfo('url'); ?>" class="header__brand">
                <img src="<?php bloginfo(template_url); ?>/assets/images/logo_dunns.png" alt="logo_dunns" />
            </a>

            

            <?php wp_nav_menu(array(
                    'theme_location' => 'menu_principal',
                    'container_class'=> 'nav-primary',
                    'menu_class' => 'header__ul',
            )); ?>
        

            <a class="commander" href="https://dunnsfamous.order-online.ai/#/">Commandez en ligne</a>
            
            <button class="header__toggle js-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </header>