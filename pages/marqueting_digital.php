<?php
/* 
    Template Name: Marketing
*/

get_header();

?>


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
<section class="bg-yellow  d-flex justify-content-center">
    <div class="bg-white w-90">
        <div class="mx-auto w-50">
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu1">Menu 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu2">Menu 2</a>
                </li>
            </ul>

        </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <div class="big-title text-red my-4 ">
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



<?php get_footer(); ?>