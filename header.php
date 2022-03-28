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
    <body>
        <!-- Calling the menu named primary on our header -->
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>