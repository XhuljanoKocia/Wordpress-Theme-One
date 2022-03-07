<?php
    function awsome_script_enqueue(){
        //The parameter this wordpress hook needs are (name, the full url for css, dependancy which is left empty because this is not dependand from other files, version, where this site will appear and we set all devices)
        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/themeone.css', array(), '1.0.0', 'all');
        //This is the same as above but the last parameter, it is a boolean and accepts only true - if we want it to load on the footer and false if we want the js file to load on the header. By default it is false
        wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/themeone.js', array(), '1.0.0', true);
    }

    //Using an action to execute our function above, the first parameter is to include all our scripts and the second one is our function name
    add_action('wp_enqueue_scripts', 'awsome_script_enqueue');
?>