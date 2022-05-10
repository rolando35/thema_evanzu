<?php
/* 
    Template Name: Blog
*/

 global $post;

$last_posts = get_posts(array('posts_per_page' => 10));

foreach ( $last_posts as $post ) :
 setup_postdata( $post );?>

<div class="last-posts-wrap">
 <?php the_post_thumbnail();?>
 <h3><?php the_title();?></h3>
 <p><?php the_excerpt();?></p>
</div>

<?php endforeach;
 wp_reset_postdata();
?>