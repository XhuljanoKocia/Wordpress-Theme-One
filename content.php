<h3><?php the_title(); ?></h3>
<!-- We call the post thumbnail in order for the featured image of blog posts to appear -->
<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
<small>Posted on: <?php the_time('F j, Y \a\t  g:i a'); ?>, in <?php the_category(); ?></small>
<p><?php the_content(); ?></p>
<hr>