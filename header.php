<?php ?> 
<!DOCTYPE html>
<html lang="es">
 
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
</head>

<style>
  .nav-colors {
    background: #ED1164;
  }
  .mt-n1-6{ 
    margin-top: 0;
  }

  ul > li button.active{
    background-color: green;
  }
</style>
 
<body class="w-100">
 
<?php 
wp_head();
// $result = $transparentNone ? 'hola' : 'navbar';
$path_header = get_template_directory_uri() . '/assets/images/nav-images/';
?> 
  <!-- Navigation -->
  <nav class="<?php echo $result ?> navbar-expand-lg  nav-colors fixed-top navbar-dark">
    <div class="container" style="height: 5.56rem;">
      <div class="d-none d-lg-block">
      <a href="<?php echo home_url(); ?>">
       <img
					src="<?php echo $path_header; ?>logo-evanzu.svg"
					alt="loguito"
				/>
      </a>

      </div>
     <?php the_custom_logo() ?> 
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="mb-5">
        <?php 
            $menuraiola = array(
              'menu'            => ' ',
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse mt-n1-6',
              'container_id'    => 'navbarResponsive',
              'menu_class'      => 'navbar-nav ml-auto',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'item_spacing'    => 'preserve',
              'depth'           => 0,
              'walker'          => '',
              'theme_location'  => 'menu-principal',
          );
          wp_nav_menu($menuraiola);

         ?> 
      </div>

    </div>
  </nav>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
 $(document).ready(function () {
$("ul > li button").click(function () {
        $('ul > li button').removeClass('active');
        $(this).addClass('active');
    });
});
</script>