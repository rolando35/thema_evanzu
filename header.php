<?php ?> 
<!DOCTYPE html>
<html lang="es">
 
<head>     
   <title> <?php echo isset($args["title"]) ? $args['title'] : "Evanzu Agencia de marketing digital, publicidad, BTL y desarrollo web";?></title>
  <link rel ="icon" href ="<?php echo get_template_directory_uri()?>/assets/Favicon_Evanzu.gif" type = "image / gif" />
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="<?php echo isset($args['description']) ? $args['description']: "Somos una agencia de marketing digital, branding & diseño, producción audiovisual, BTL & comunicación, desarrollo y software."; ?>"/>
   <meta name="keywords" content="<?php echo isset($args['keywords']) ? $args['keywords'] : " " ?>" />
   <meta name="author" content="evanzu.com"/>
   <?php echo isset($args['richsnippets']) ? $args['richsnippets'] : " " ?>
</head>

<style>
  .nav-colors {
    background: #ED1164;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .mt-n1-6{ 
    margin-top: 0;
  }

  /* @media only screen and (max-width: 550px) {
    .h-variant {
      height: 3rem !important;
    }
    .mt-neg {
      margin-top: -2rem !important;
    }
  }
  .h-variant {
    height: 5.56rem;
  }
  .mt-neg {
    margin-top: -2.2rem;
  } */
  
 
</style>
 
<!-- oncontextmenu="return false;" -->
<!-- <body class="w-100" onmousedown="return false;" onselectstart="return false;"> -->
 
<?php 
wp_head();
// $result = $transparentNone ? 'hola' : 'navbar';
$path_header = get_template_directory_uri() . '/assets/images/nav-images/';
?> 
  <!-- Navigation -->
  <nav class="<?php echo $result ?> navbar-expand-lg  nav-colors fixed-top navbar-dark">
    <div class="container h-variant" >
      <div class="d-none d-lg-block">
      <a href="<?php echo home_url(); ?>">
       <img
					src="<?php echo $path_header; ?>logo-evanzu.svg"
					alt="Logo Evanzu"
				/>
      </a>

      </div>
     <?php the_custom_logo() ?> 
     <button class="navbar-toggler ml-2 mt-2" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <div class="navbar-toggler-icon ">
          
       </div>
      </button>
      <div>
       <div>
        <?php 
            $menuraiola = array(
              'menu'            => ' ',
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse mt-n1-6',
              'container_id'    => 'navbarResponsive',
              'menu_class'      => 'navbar-nav margin-menu',
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
         <div class="mt-neg mr-n5 float-right d-none d-md-block">
             <div class="div-spacer">

             </div>
              <!-- <?php
                echo '<svg class="none-select"  width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.78 28.56C22.3905 28.56 28.56 22.3905 28.56 14.78C28.56 7.16952 22.3905 1 14.78 1C7.16952 1 1 7.16952 1 14.78C1 22.3905 7.16952 28.56 14.78 28.56Z" fill="white" stroke="white" stroke-width="0.8142" stroke-miterlimit="10"/> <path d="M9.21997 10.11H20.35" stroke="#ED1164" stroke-width="1.6285" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9.21997 14.78H20.35" stroke="#ED1164" stroke-width="1.6285" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9.21997 19.46H20.35" stroke="#ED1164" stroke-width="1.6285" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> </svg>';
                echo '<svg class="none-select" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.78 28.56C22.3905 28.56 28.56 22.3905 28.56 14.78C28.56 7.16952 22.3905 1 14.78 1C7.16952 1 1 7.16952 1 14.78C1 22.3905 7.16952 28.56 14.78 28.56Z" stroke="white" stroke-width="0.8142" stroke-miterlimit="10"/> <path d="M17.9699 13.51C17.9699 14.74 17.4699 15.85 16.6699 16.66C15.8599 17.47 14.7499 17.96 13.5199 17.96C11.0599 17.96 9.06995 15.97 9.06995 13.51C9.06995 11.05 11.0599 9.06 13.5199 9.06C15.9799 9.06 17.9699 11.05 17.9699 13.51Z" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> <path d="M16.66 16.66L20.51 20.51" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> </svg>'
              ?> -->
          </div>
          <div class="mt-neg mr-3 pb-2 float-right d-block  d-md-none">
            <a href="<?php echo home_url(); ?>">
            <img class="img-fluid"
              src="<?php echo $path_header; ?>naked_logo.svg"
              alt="Logo Evanzu"
              />
            </a>
          <div>
        </div>

    </div>
  </nav>
          
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <script>
 $(document).ready(function () {
$("ul > li button").click(function () {
        $('ul > li button').removeClass('active');
        $(this).addClass('active');
    });
});
</script> -->