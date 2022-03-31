<?php get_header(); ?>

    <?php
        //We check if there are any posts 
        if(have_posts()) :
            //We loop throught the posts 
            while(have_posts()) :
                //This will print all the posts, their titles and content as well as the time(date, month, hour) and category
                the_post();
    ?>
                <h3><?php the_title(); ?></h3>
                <!-- We call the post thumbnail in order for the featured image of blog posts to appear -->
                <div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
                <small>Posted on: <?php the_time('F j, Y \a\t  g:i a'); ?>, in <?php the_category(); ?></small>
                <p><?php the_content(); ?></p>
                <hr>
    <?php
            endwhile;
        endif;
    ?>
    
<?php get_footer(); ?>