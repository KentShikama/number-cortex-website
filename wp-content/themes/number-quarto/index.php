<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <title><?php bloginfo('name'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link href="<?php bloginfo('template_url'); ?>/css/flexnav.css" rel="stylesheet" type="text/css" />

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'number-quarto'); ?></a>

            <header id="masthead" class="site-header" role="banner">
                <div class="menu-button">Menu</div>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'flexnav', //Adding the class for FlexNav
                        'items_wrap' => '<ul data-breakpoint="600" id="%1$s" class="%2$s">%3$s</ul>', // Adding data-breakpoint for FlexNav
                    ));
                    ?>
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->

            <div id="content" class="site-content">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <img src="<?php bloginfo('template_url'); ?>/images/numberquarto.png" alt="number quarto splash image" />
                        <h1 style="color: #1f2374; font-family: gills sans; font-size: 3em; padding: 10px; padding-bottom: 30px;">Coming Soon...</h1>
                    </main><!-- #main -->
                </div><!-- #primary -->
                <?php get_footer(); ?>
