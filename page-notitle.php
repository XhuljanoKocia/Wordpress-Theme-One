<?php 
/*
    Template Name: Page No Title
*/
get_header(); ?>

    <?php
        //We check if there are any posts 
        if(have_posts()) :
            //We loop throught the posts 
            while(have_posts()) :
                //This will print all the posts, their titles and content as well as the time(date, month, hour) and category
                the_post();
    ?>
                <h1>This is my Static Title</h1>
                <small>Posted on: <?php the_time('F j, Y \a\t  g:i a'); ?>, in <?php the_category(); ?></small>
                <p><?php the_content(); ?></p>
                <hr>
    <?php
            endwhile;
        endif;
    ?>
    
<?php get_footer(); ?>