<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Awsome Theme</title>
        <!-- With wp_head() we call all the enqueue styles we created on the functions file -->
        <?php wp_head(); ?>
    </head>
    <?php
        if(is_front_page()) :
            $awsome_classes = array('awsome-class', 'my-class');
        else :
            $awsome_classes = array('no-awsome-class');
        endif;
    ?>
    <body <?php body_class($awsome_classes); ?>>
        <!-- Calling the menu named primary on our header -->
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header() -> height; ?>" width="<?php echo get_custom_header() -> width; ?>" alt="">