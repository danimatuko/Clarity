<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="header" class="site-header">
        <nav id="menu" class="site-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu', // Change 'primary-menu' to match your registered menu location.
                'container' => false,
                'menu_id' => 'primary-menu',
                'menu_class' => 'main-menu',
            ));
            ?>
        </nav>
        <h1 class="site-title hero"><?php bloginfo('name'); ?></h1>
        <p class="site-description"><?php bloginfo('description'); ?></p>
    </header>