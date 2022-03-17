<?php
/* 
    Template Name: Marketing
*/

get_header();
$directory_imgs = get_template_directory_uri() . '/assets/images/marketing-digital/';
?>

<style>
     .gallery-wrapper {
  overflow: hidden;
}

.grid-item {
  padding-bottom: 3rem;
}

.sidebar {
  text-align: center;
  padding: 1rem;
  background: red;
  height: 900px;
} 
</style>

<section id="slider">

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>

        </ul>

        <div class="float-rectangle-banner">
            <div id="rectangle" class="text-center">
            </div>
        </div>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_option("evanzu")["carrusell-image-one"]; ?>">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_option("evanzu")["carrusell-image-two"]; ?>">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_option("evanzu")["carrusell-image-one"]; ?>">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

</section>
<section>
    <div class="bg-white">
        <div class="">
            <ul class="nav nav-pills justify-content-center" role="tablist">							
                    <?php
                     $lista = array (array ('svg' => $directory_imgs.'first-tab.svg','title'=> 'Publicidad <br> digital','href'=> '#home','active'=> 'active',),
                                     array ('svg' => $directory_imgs.'second-tab.svg','title'=> 'Gestión <br> de Redes' ,'href'=> '#menu1','active'=> ''),
                                     array ('svg' => $directory_imgs.'third-tab.svg','title'=> 'Posicionamiento <br> SEO','href'=> '#menu2','active'=> ''),
                                     array ('svg' => $directory_imgs.'quarter-tab.svg','title'=> 'Growth <br> hacking','href'=> '#menu2','active'=> ''),
                                     array ('svg' => $directory_imgs.'fifth-tab.svg','title'=> 'Marketing de <br> contenidos','href'=> '#menu2','active'=> ''),
                                    );                             
                         foreach ($lista as $data) {
                             get_template_part('components/circle-nav','full', $data ); 
                         }
                     ?>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="tab-pane active"><br>
               <div class="bg-faint-gray">
                <div class="big-title text-red my-4 text-center">
                    Publicidad Digital
                </div>
                <div class="container">
                    <div class="row">
                          <div class="col-sm-6">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/cellphone-publicidad-digital.svg" alt="">
                            <div class="text-red text-center my-3">
                                 Ideal para promocionar
                            </div>
                            <p class="text-justify">
                            Ventas, tráfico web, consideración de marca, productos, servicios, lanzamientos, ofertas, aplicaciones móviles y promociones. Sea cual sea tu objetivo publicitario (visitas a tu web, vistas de videos, conversiones, descargas de aplicaciones, visitas o llamadas a tu negocio físico, etc) te ayudaremos a alcanzarlo a través de los diversos formatos de publicidad.
                            </p>
                            <p class="text-justify">
                            Da el primer paso para promocionar tus productos.
                            </p>

                            
                          </div>
                          <div class="col-sm-6">

                            <div class="my-3">
                            Atrae a tu próximo comprador con publicidad en canales digitales.
                            </div>
                              <p class="text-justify">
                                   Atrae a tu próximo comprador con publicidad en canales digitales.
                              </p>
                              <div class="text-red my-1">
                                   Las plataformas digitales que manejamos:        
                              </div>
                              <p>
                                  . <strong>Google Adwords</strong> (Búsqueda, Display, Youtube, Shopping y App móviles).
                              </p>
                              <p>
                                  . <strong>Publicidad en plataformas sociales</strong> (Facebook, Instagram, Twitter, Linkedin, TikTok, Wase, Spotify, Shazam, y otros).
                              </p>

                              <img src="<?php echo get_template_directory_uri() ?>/assets/images/laptop-publicidad-digital.svg" alt="">

                          </div>
                    </div>
                </div>
                </div>
                <div>
                     <div class="big-title text-red my-4 text-center">
                       El servicio incluye:
                     </div>
                     <div>
                         <div class="d-flex justify-content-center">
                             <div>  
                                 <div class="mb-1">
                                     <div class="d-inline-block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/first-icon-service.svg"></div>
                                          <div class="d-inline-block ml-1">
                                              Plan de medios digitales <br>
                                               (definir los canales con los  <br> que tu público interactúa)
                                        </div>   
                                   </div> 
                                    <div class="ml-5">
                                        <img  class="pl-2" src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/ponit-line-red.svg">
                                    </div>
                                   
                             </div>
                             <div> 
                                <div> 
                                    <svg width="10" height="114" viewBox="0 0 7 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 3.5C0 1.567 1.567 0 3.5 0C5.433 0 7 1.567 7 3.5V52.5C7 54.433 5.433 56 3.5 56C1.567 56 0 54.433 0 52.5V3.5Z" fill="#ED1164"/>
                                    </svg>
                                 </div> 
                                 <div>
                                     <svg width="19" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="9" cy="9.5" r="9" fill="#ED1164"/>
                                      </svg>
                                 </div>
                                 <div>
                                      <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="9" transform="matrix(-1 0 0 1 9 9.5)" fill="#FBC000"/>
                                      </svg>
                                 </div>
                              </div>
                             <div>
                                   <div class="mb-1 mt-5">         
                                          <div class="d-inline-block ml-1">
                                            Definir el <strong>formato </strong> <br> de <strong>publicidad</strong> adecuado.
                                        </div> 
                                          <div class="d-inline-block ml-4"><img src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/secon-icon-righ.svg"></div>  
                                   </div> 

                                 <div >
                                     <svg width="290" height="23" viewBox="0 0 290 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.999998 24.5L288 24.5C288.552 24.5 289 24.0523 289 23.5L289 1" stroke="#FBC000" stroke-width="2" stroke-linecap="round" stroke-dasharray="6 6"/>
                                        </svg>
                                 </div>
                             </div>
                         </div>

                        <div class="d-flex justify-content-center">
                            <div>  
                                <div class="mb-1">
                                    <div class="d-inline-block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/contain-define.svg"></div>
                                        <div class="d-inline-block ml-1">
                                        <strong> Definición de contenidos <br> publicitarios</strong>  (Mensaje y <br> gráfica o audiovisual).
                                    </div>   
                                </div> 
                                <div class="ml-5">
                                    <img  class="pl-2" src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/ponit-line-red.svg">
                                </div>
                                
                            </div>
                            <div> 
                            <div> 
                                <svg width="10" height="114" viewBox="0 0 7 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 3.5C0 1.567 1.567 0 3.5 0C5.433 0 7 1.567 7 3.5V52.5C7 54.433 5.433 56 3.5 56C1.567 56 0 54.433 0 52.5V3.5Z" fill="#ED1164"/>
                                </svg>
                                </div> 
                                <div>
                                    <svg width="19" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9.5" r="9" fill="#ED1164"/>
                                    </svg>
                                </div>
                                <div>
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle r="9" transform="matrix(-1 0 0 1 9 9.5)" fill="#FBC000"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div class="mb-1 mt-3">         
                                        <div class="d-inline-block ml-1">
                                        <strong>Despliegue y configuración <br> de la campaña en la </strong>  <br>plataforma seleccionada.
                                    </div> 
                                        <div class="d-inline-block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/deploy-configuration.svg"></div>  
                                </div> 

                                <div >
                                    <svg width="290" height="24" viewBox="0 0 290 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.999998 24.5L288 24.5C288.552 24.5 289 24.0523 289 23.5L289 1" stroke="#FBC000" stroke-width="2" stroke-linecap="round" stroke-dasharray="6 6"/>
                                    </svg>
                                </div>
                            </div>

                            


                        </div>

                        <div class="d-flex justify-content-center">
                            <div>  
                                <div class="mb-1">
                                    <div class="d-inline-block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/rocket-optimisation.svg"></div>
                                        <div class="d-inline-block ml-2">
                                                <strong>Optimización</strong>  de la <br>campaña. 
                                        </div>   
                                </div> 
                                    <div class="ml-5">
                                        <img  class="pl-2" src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/ponit-line-red.svg">
                                    </div>
                                
                            </div>
                            <div> 
                                <div> 
                                    <svg width="10" height="114" viewBox="0 0 7 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 3.5C0 1.567 1.567 0 3.5 0C5.433 0 7 1.567 7 3.5V52.5C7 54.433 5.433 56 3.5 56C1.567 56 0 54.433 0 52.5V3.5Z" fill="#ED1164"/>
                                    </svg>
                                </div> 
                                <div>
                                    <svg width="19" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="9" cy="9.5" r="9" fill="#ED1164"/>
                                    </svg>
                                </div>
                                <div>
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="9" transform="matrix(-1 0 0 1 9 9.5)" fill="#FBC000"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div class="ml-5 mt-5">         
                                        <div class="d-inline-block ml-1 mr-5">
                                        <strong>Reportes <br> periódicos.</strong> 
                                        </div> 
                                        <div class="d-inline-block ml-5"><img src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/periodic-reports.svg"></div>  
                                </div> 

                                <div >
                                    <svg width="290" height="24" viewBox="0 0 290 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.999998 24.5L288 24.5C288.552 24.5 289 24.0523 289 23.5L289 1" stroke="#FBC000" stroke-width="2" stroke-linecap="round" stroke-dasharray="6 6"/>
                                        </svg>
                                </div>
                            </div>

                        </div>
                         
                         <div class="d-flex justify-content-center">
                               
                              <div class="d-inline-block ml-5"><img src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/root-tree.svg"></div>  
                        </div>
                     </div>
                </div>
                <div class="bg-red py-5">
                                   <?php  
                                      $parameters = array ('svg' => $directory_imgs.'form-quote-request.svg','title'=> 'Crece exponencialmente');
                                      get_template_part('components/form-quote-request','full', $parameters );  
                                    ?>       
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <h3>Menu 1</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
        </div>
    </div>

</section>
<section>
      <div class="big-title text-red my-4 text-center">
         PORTAFOLIO
      </div> 
        <div>
        <div class="container" style="margin-top:5rem">
  <div class="row">
    
    <div class="col-lg-8">
      <div class="gallery-wrapper clearfix">
        <div class="col-lg-4 grid-sizer">  </div>
        <div class="col-lg-4 grid-item">
            primer parte
          <img class="img-fluid" src="http://via.placeholder.com/1024x900">
        </div>

        <div class="col-lg-4 grid-item">
            segunda parte
          <img class="img-fluid" src="http://via.placeholder.com/800x370">
        </div>

        <div class="col-lg-4 grid-item">
            tercera
          <img class="img-fluid" src="http://via.placeholder.com/500x370">
        </div>

        <div class="col-lg-6 grid-item">
            cuarta
          <img class="img-fluid" src="http://via.placeholder.com/1024x600">
        </div>

        <div class="col-lg-6 grid-item">
            quinta
          <img class="img-fluid" src="http://via.placeholder.com/1024x300">
        </div>

        <div class="col-lg-6 grid-item">
            sexta
          <img class="img-fluid" src="http://via.placeholder.com/1024x600">
        </div>

        <div class="col-lg-6 grid-item">
            septima
          <img class="img-fluid" src="http://via.placeholder.com/800x900">
        </div>

        <div class="col-lg-6 grid-item">
            octava
          <img class="img-fluid" src="http://via.placeholder.com/1024x600">
        </div>

         <div class="col-lg-12 col-12 grid-item">
            octava
          <img class="img-fluid" src="http://via.placeholder.com/1024x600">
        </div>

      </div>
    </div>

    <!-- <div class="col-lg-4 sidebar">
      <h3>Sidebar</h3>
    </div> -->
    
    
  </div>
</div>
        </div>

      
</section>


 <script>
     jQuery(function ($) {	
    var $grid = $('.gallery-wrapper').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
    transitionDuration: 0,
  });

  $grid.imagesLoaded().progress( function() {
    $grid.masonry();
  });

    });
  </script>

<?php get_footer(); ?>