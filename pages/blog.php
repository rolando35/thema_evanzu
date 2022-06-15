<?php
/* 
    Template Name: Blog
*/
get_header();
 global $post;

$last_posts = get_posts(array('posts_per_page' => 10));
?>
<div class="card-columns mt-5">
<?php 
foreach ( $last_posts as $post ) :
 setup_postdata( $post );?>

 <!-- <p> <?php the_content();?> </p> -->
  <div class="card">
    <?php the_post_thumbnail();?>
    <div class="card-body">
      <h5 class="card-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?></a> </h5>
      <p class="card-text"><?php the_excerpt();?></p>
    </div>
  </div>

<?php endforeach;
 wp_reset_postdata();
?>
</div>
<?php  get_footer(); ?>