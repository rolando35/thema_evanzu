<?php
/* 
    Template Name: Blog
*/
get_header();
 global $post;

$last_posts = get_posts(array('posts_per_page' => 10));
?>

<section id="slider">

  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
           <img height="400" class="w-100" src=" <?php echo get_template_directory_uri(); ?>/assets/images/blog/Blog-banner.png">
        
          	  <div class="carousel-caption mb-5 pb-5">
                  <h1 id="title-blog" class="hurme-bold-4 text-red" data-wow-delay="0.3s">BLOG</h1>     
                  <div class="subtitle-blog">
                    Obtén información sobre la industria, las últimas tendencias, conoce nuestro <br> proceso creativo y más
                  </div>
                   
              </div>
        
        </div>
      
    </div>
  </div>
</section>
<div class="card-columns mt-5 container">
<?php 
foreach ( $last_posts as $post ) :
 setup_postdata( $post );?>
 <!-- <p> <?php the_content();?> </p> -->
  <div class="card">
    <div class="">
        <div class="box-date-car" >     
          <img  src=" <?php echo get_template_directory_uri(); ?>/assets/images/blog/calendar.svg"> <?php echo get_the_date();?>  I  	<?php the_category(); ?>
        </div> 
         <?php the_post_thumbnail();?>

          <div class="box-autor-car" >
              <?php the_author(); ?>     
             <span> <?php echo get_avatar( get_the_author_meta('ID') ); ?>   </span>          
         </div> 
    </div>
    <div class="card-body">
      <h5 class="card-title text-red font-weight-bold"> <?php the_title();?> </h5>
      <p class="card-text"><?php the_excerpt();?></p>
      <div>
             <a href="<?php the_permalink(); ?>"><span class="text-red font-weight-bold">Leer más </span> <img  src=" <?php echo get_template_directory_uri(); ?>/assets/images/blog/circle-more.svg"></a>
      </div>  
    </div>
  </div>

<?php endforeach;
 wp_reset_postdata();
?>
</div>
<?php  get_footer(); ?>