<?php get_header(); 

    global $post;
 $last_posts = get_posts(array('posts_per_page' => 3));
?>
  
<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- SE MUESTRA EL CONTENIDO DEL POST -->
<div class="container mt-5 pt-5">            
 <div class="row container mt-5">
    <div class="col-md-8">
          <div class="card mb-4">
            <div class="post-image">
                  <?php the_post_thumbnail(); ?>
            </div>
            
          <div class="card-body">
            <h2 class="card-title"><?php the_title(); ?></h2>
            <p class="card-text"><?php the_content(); ?></p>
            <!-- <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más &rarr;</a> -->
          </div>
          <div class="card-footer text-muted">
            <?php echo get_the_date(); ?> - <?php the_author(); ?>
            
          </div>
      </div>
        <div class="text-red ml-5 mx-3">
          Post Recientes
        </div>
        <div class="d-flex flex-md-row">
          <?php 
            foreach ( $last_posts as $post ) :
            setup_postdata( $post );?>
            <!-- <p> <?php the_content();?> </p> -->
              <div class="card mx-3">
                <div class=""> 
                  <a href="<?php the_permalink(); ?>">   
                    <?php the_post_thumbnail();?>
                  </a> 
                </div>
                <div class="card-body">
                  <h5 class="card-title text-red font-weight-bold"> <?php the_title();?> </h5>    
                         
                </div>
              </div>

            <?php endforeach;
            wp_reset_postdata();
            ?>
        </div>
      
    </div>
    <div class="col-md-4">

        <div class="my-5">
           <h4 class="text-red">Categorías</h4> 
            <?php the_category(); ?>
        </div>
         <div class="my-5">
           <?php
           	$r = new WP_Query( apply_filters( 'widget_posts_args', array('posts_per_page'=>5, 'no_found_rows'=>true, 'post_status'=>'publish', 'ignore_sticky_posts'=>true ) ) );
                if ($r->have_posts()) :
                ?>
              
                  <h4 class="text-red">Post Relacionados</h4> 
                
                  <?php while ( $r->have_posts() ) : $r->the_post(); ?>
                     <a class="text-gray" href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?> - </a>
                  <?php endwhile; ?>
                
      
                <?php
                // Reset the global $the_post as this query will have stomped on it
                wp_reset_postdata();
                endif;
                ?>
         </div>

       <div class="mx-5">
				<?php wp_tag_cloud( array('number' => 7) );  ?>
			</div>
    </div>
  </div>

  </div> 
               
         <?php endwhile; else : ?>
            <!-- SI NO SE CONSIGUE NINGÚN POST, SE RETORNA UN MENSAJE: -->
            <p>Lo siento, no hemos encontrado ningún post.</p>
 
        <?php endif; ?>
           <!-- SE DETIENE EL LOOP -->

        <?php get_footer(); ?>