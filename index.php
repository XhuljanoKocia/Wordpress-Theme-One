<?php get_header(); ?>

<div class="row"></div>

    <div class="col-xs-12 col-sm-8">

        <?php
            //We check if there are any posts 
            if(have_posts()) :
                //We loop throught the posts 
                while(have_posts()) :
                    //This will print all the posts, their titles and content as well as the time(date, month, hour) and category
                    the_post();
        ?>
        <?php get_template_part('content', get_post_format()); ?>
                    
        <?php
                endwhile;
            endif;
        ?>
    </div>

<div class="col-xs-12 col-sm-4">
    <?php get_sidebar(); ?>
</div>

</div>
    
<?php get_footer(); ?>