<?php get_header(); ?>

    <?php
        //We check if there are any posts 
        if(have_posts()) :
            //We loop throught the posts 
            while(have_posts()) :
                //This will print all the posts, their titles and content as well as the time(date, month, hour) and category
                the_post();
    ?>
                <p><?php the_content(); ?></p>
                <h3><?php the_title(); ?></h3>
                <hr>
    <?php
            endwhile;
        endif;
    ?>
    
<?php get_footer(); ?>