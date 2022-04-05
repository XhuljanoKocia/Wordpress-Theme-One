<?php get_header(); ?>

<div class="row">

    <?php
        //We show only the first post
        // $lastBlog = new WP_Query('type=post&posts_per_page=1');

        $args_cat = array(
            'include' => '7, 8, 9',
        );

        $categories = get_categories($args_cat);
        foreach($categories as $category):
            $args = array(
                'type' => 'post',
                'posts_per_page' => 1,
                'category__in' => $category->term_id, //This includes the category ids which will be shown
                'category__not_in' => array(1), //This escludes the category ids which we don't want to show
            );
    
            $lastBlog = new WP_Query($args);
    
            //We check if there are any posts 
            if($lastBlog -> have_posts()) :
                //We loop throught the posts 
                while($lastBlog -> have_posts()) :
                    //This will print all the posts, their titles and content as well as the time(date, month, hour) and category
                    $lastBlog -> the_post();
            ?>
    
            <div class="col-xs-12 col-sm-4">
    
                <?php get_template_part('content', 'featured'); ?>
    
            </div>
                        
            <?php
                    endwhile;
                endif;
    
                wp_reset_postdata();
        endforeach;

    ?>

</div>

<div class="row">

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

            //Print 2 other posts without repeating the first post, offset=1 skips the first post
            //Using an array makes the code more clear and more readable since we might have more than 3 arguments
/*            $args = array(
                'type' => 'post',
                'posts_per_page' => 2,
                'offset' => 1
            );

            $lastBlog = new WP_Query($args);

                //We check if there are any posts 
                if($lastBlog -> have_posts()) :
                    //We loop throught the posts 
                    while($lastBlog -> have_posts()) :
                        //This will print all the posts, their titles and content as well as the time(date, month, hour) and category
                        $lastBlog -> the_post();
            ?>
            <?php get_template_part('content', get_post_format()); ?>
                        
            <?php
                    endwhile;
                endif;

                wp_reset_postdata();
*/
            ?>

            <!-- <hr> -->

            <?php
                //Print only tutorial category posts, we get them with category page id or we can use category_name=tutorials if the name is not going to change
/*            $lastBlog = new WP_Query('type=post&posts_per_page=-1&cat=9');

            //We check if there are any posts 
            if($lastBlog -> have_posts()) :
                //We loop throught the posts 
                while($lastBlog -> have_posts()) :
                    //This will print all the posts, their titles and content as well as the time(date, month, hour) and category
                    $lastBlog -> the_post();
            ?>
            <?php get_template_part('content', get_post_format()); ?>
                        
            <?php
                    endwhile;
                endif;

                wp_reset_postdata();
*/
            ?>

    </div>

<div class="col-xs-12 col-sm-4">
    <?php get_sidebar(); ?>
</div>

</div>
    
<?php get_footer(); ?>