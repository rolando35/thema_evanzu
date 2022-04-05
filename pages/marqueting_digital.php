<?php
/* 
    Template Name: Marketing
*/

get_header();
$directory_imgs = get_template_directory_uri() . '/assets/images/marketing-digital/';
$path_img = get_template_directory_uri() . '/assets/images/btl/';
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
      <div id="rectangle" class="text-center"></div>
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
      <ul
        class="nav nav-pills justify-content-center"
        id="nav-iconos"
        role="tablist"
      >
        <?php
                     $lista = array (
                                     array ('svg' =>
        'first-tab.svg','title'=> 'Publicidad
        <br />
        digital','href'=> '#home','path'=> $directory_imgs,), array ('svg' =>
        'second-tab.svg','title'=> 'Gestión
        <br />
        de Redes' ,'href'=> '#redes_sociales','path'=> $directory_imgs), array
        ('svg' => 'third-tab.svg','title'=> 'Posicionamiento
        <br />
        SEO','href'=> '#seo','path'=> $directory_imgs), array ('svg' =>
        'quarter-tab.svg','title'=> 'Growth
        <br />
        hacking','href'=> '#menu3','path'=> $directory_imgs), array ('svg' =>
        'fifth-tab.svg','title'=> 'Marketing de
        <br />
        contenidos','href'=> '#menu4','path'=> $directory_imgs), ); foreach
        ($lista as $data) { get_template_part('components/circle-nav-2','full',
        $data ); } ?>
      </ul>
    </div>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class="tab-pane active">
        <br />
        <div class="bg-faint-gray">
          <div class="big-title text-red my-4 text-center">
            Publicidad Digital
          </div>
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <img
                  src="<?php echo get_template_directory_uri() ?>/assets/images/cellphone-publicidad-digital.svg"
                  alt=""
                />
                <div class="text-red text-center my-3">
                  Ideal para promocionar
                </div>
                <p class="text-justify">
                  Ventas, tráfico web, consideración de marca, productos,
                  servicios, lanzamientos, ofertas, aplicaciones móviles y
                  promociones. Sea cual sea tu objetivo publicitario (visitas a
                  tu web, vistas de videos, conversiones, descargas de
                  aplicaciones, visitas o llamadas a tu negocio físico, etc) te
                  ayudaremos a alcanzarlo a través de los diversos formatos de
                  publicidad.
                </p>
                <p class="text-justify">
                  Da el primer paso para promocionar tus productos.
                </p>
              </div>
              <div class="col-sm-6">
                <div class="my-3">
                  Atrae a tu próximo comprador con publicidad en canales
                  digitales.
                </div>
                <p class="text-justify">
                  Atrae a tu próximo comprador con publicidad en canales
                  digitales.
                </p>
                <div class="text-red my-1">
                  Las plataformas digitales que manejamos:
                </div>
                <p>
                  . <strong>Google Adwords</strong> (Búsqueda, Display, Youtube,
                  Shopping y App móviles).
                </p>
                <p>
                  .
                  <strong>Publicidad en plataformas sociales</strong> (Facebook,
                  Instagram, Twitter, Linkedin, TikTok, Wase, Spotify, Shazam, y
                  otros).
                </p>

                <img
                  src="<?php echo get_template_directory_uri() ?>/assets/images/laptop-publicidad-digital.svg"
                  alt=""
                />
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
                  <div class="d-inline-block">
                    <img
                      src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/first-icon-service.svg"
                    />
                  </div>
                  <div class="d-inline-block ml-1">
                    Plan de medios digitales <br />
                    (definir los canales con los <br />
                    que tu público interactúa)
                  </div>
                </div>
                <div class="ml-5">
                  <img
                    class="pl-2"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/ponit-line-red.svg"
                  />
                </div>
              </div>
              <div>
                <div>
                  <svg
                    width="10"
                    height="114"
                    viewBox="0 0 7 56"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0 3.5C0 1.567 1.567 0 3.5 0C5.433 0 7 1.567 7 3.5V52.5C7 54.433 5.433 56 3.5 56C1.567 56 0 54.433 0 52.5V3.5Z"
                      fill="#ED1164"
                    />
                  </svg>
                </div>
                <div>
                  <svg
                    width="19"
                    height="19"
                    viewBox="0 0 18 19"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="9" cy="9.5" r="9" fill="#ED1164" />
                  </svg>
                </div>
                <div>
                  <svg
                    width="18"
                    height="19"
                    viewBox="0 0 18 19"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      r="9"
                      transform="matrix(-1 0 0 1 9 9.5)"
                      fill="#FBC000"
                    />
                  </svg>
                </div>
              </div>
              <div>
                <div class="mb-1 mt-5">
                  <div class="d-inline-block ml-1">
                    Definir el <strong>formato </strong> <br />
                    de <strong>publicidad</strong> adecuado.
                  </div>
                  <div class="d-inline-block ml-4">
                    <img
                      src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/secon-icon-righ.svg"
                    />
                  </div>
                </div>

                <div>
                  <svg
                    width="290"
                    height="23"
                    viewBox="0 0 290 26"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0.999998 24.5L288 24.5C288.552 24.5 289 24.0523 289 23.5L289 1"
                      stroke="#FBC000"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-dasharray="6 6"
                    />
                  </svg>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-center">
              <div>
                <div class="mb-1">
                  <div class="d-inline-block">
                    <img
                      src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/contain-define.svg"
                    />
                  </div>
                  <div class="d-inline-block ml-1">
                    <strong>
                      Definición de contenidos <br />
                      publicitarios</strong
                    >
                    (Mensaje y <br />
                    gráfica o audiovisual).
                  </div>
                </div>
                <div class="ml-5">
                  <img
                    class="pl-2"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/ponit-line-red.svg"
                  />
                </div>
              </div>
              <div>
                <div>
                  <svg
                    width="10"
                    height="114"
                    viewBox="0 0 7 56"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0 3.5C0 1.567 1.567 0 3.5 0C5.433 0 7 1.567 7 3.5V52.5C7 54.433 5.433 56 3.5 56C1.567 56 0 54.433 0 52.5V3.5Z"
                      fill="#ED1164"
                    />
                  </svg>
                </div>
                <div>
                  <svg
                    width="19"
                    height="19"
                    viewBox="0 0 18 19"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="9" cy="9.5" r="9" fill="#ED1164" />
                  </svg>
                </div>
                <div>
                  <svg
                    width="18"
                    height="19"
                    viewBox="0 0 18 19"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      r="9"
                      transform="matrix(-1 0 0 1 9 9.5)"
                      fill="#FBC000"
                    />
                  </svg>
                </div>
              </div>
              <div>
                <div class="mb-1 mt-3">
                  <div class="d-inline-block ml-1">
                    <strong
                      >Despliegue y configuración <br />
                      de la campaña en la
                    </strong>
                    <br />plataforma seleccionada.
                  </div>
                  <div class="d-inline-block">
                    <img
                      src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/deploy-configuration.svg"
                    />
                  </div>
                </div>

                <div>
                  <svg
                    width="290"
                    height="24"
                    viewBox="0 0 290 26"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0.999998 24.5L288 24.5C288.552 24.5 289 24.0523 289 23.5L289 1"
                      stroke="#FBC000"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-dasharray="6 6"
                    />
                  </svg>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-center">
              <div>
                <div class="mb-1">
                  <div class="d-inline-block">
                    <img
                      src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/rocket-optimisation.svg"
                    />
                  </div>
                  <div class="d-inline-block ml-2">
                    <strong>Optimización</strong> de la <br />campaña.
                  </div>
                </div>
                <div class="ml-5">
                  <img
                    class="pl-2"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/ponit-line-red.svg"
                  />
                </div>
              </div>
              <div>
                <div>
                  <svg
                    width="10"
                    height="114"
                    viewBox="0 0 7 56"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0 3.5C0 1.567 1.567 0 3.5 0C5.433 0 7 1.567 7 3.5V52.5C7 54.433 5.433 56 3.5 56C1.567 56 0 54.433 0 52.5V3.5Z"
                      fill="#ED1164"
                    />
                  </svg>
                </div>
                <div>
                  <svg
                    width="19"
                    height="19"
                    viewBox="0 0 18 19"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="9" cy="9.5" r="9" fill="#ED1164" />
                  </svg>
                </div>
                <div>
                  <svg
                    width="18"
                    height="19"
                    viewBox="0 0 18 19"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      r="9"
                      transform="matrix(-1 0 0 1 9 9.5)"
                      fill="#FBC000"
                    />
                  </svg>
                </div>
              </div>
              <div>
                <div class="ml-5 mt-5">
                  <div class="d-inline-block ml-1 mr-5">
                    <strong
                      >Reportes <br />
                      periódicos.</strong
                    >
                  </div>
                  <div class="d-inline-block ml-5">
                    <img
                      src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/periodic-reports.svg"
                    />
                  </div>
                </div>

                <div>
                  <svg
                    width="290"
                    height="24"
                    viewBox="0 0 290 26"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0.999998 24.5L288 24.5C288.552 24.5 289 24.0523 289 23.5L289 1"
                      stroke="#FBC000"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-dasharray="6 6"
                    />
                  </svg>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-center">
              <div class="d-inline-block ml-5">
                <img
                  src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/root-tree.svg"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="bg-red py-5">
          <?php  
                                      $parameters = array ('svg' =>
          $directory_imgs.'form-quote-request.svg','title'=> 'Crece
          exponencialmente');
          get_template_part('components/form-quote-request','full', $parameters
          ); ?>
        </div>
      </div>
      <!------------REDES SOCIALES ------------>
      <div id="redes_sociales" class="tab-pane fade">
        <br />
        <!----------------------Main---------------------->
        <section class="p-0">
          <div class="bg-light-gray py-0">
            <div class="big-title text-red my-2 text-center">
              Gestión de Redes Sociales
            </div>
            <!-------------------Card---------------------->
            <div class="py-2">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-11 col-lg-6 d-flex align-items-center">
                    <img
                      src="<?php echo $directory_imgs; ?>mockup-01 1.png"
                      alt=""
                      class="img-fluid"
                    />
                  </div>
                  <div class="col-md-10 col-lg-6">
                    <div class="card bg-transparent border-0">
                      <div class="card-body">
                        <h3 class="subtitle-marketing text-gray-black text-left p-1">
                          ¡Usuarios más conectados, más fidelizados!
                        </h3>
                        <p class="text-justify text-light-gray p-1">
                          Encontraremos el
                          <strong> y tono de comunicación ideal </strong>
                          para administrar tus redes sociales.
                        </p>
                        <p class="text-justify text-light-gray p-1">
                          Trabajamos con creatividad estratégica para
                          <strong> generar una respuesta emocional</strong> en
                          tus clientes, forjar conexiones más fuertes con ellos
                          y motivarlos a tomar acción.
                        </p>
                        <p class="text-justify text-light-gray p-1">
                          Al contar con un community manager podrás
                          <strong> generar viralidad</strong> para potenciar tu
                          marca y llegar a más clientes.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!------------Card---------->

            <!-------------------Card---------------------->
            <div class="py-2 card-activation-2">
              <div class="container">
                <div  class="row mt-3">
                  <div class="col-md-11 col-lg-6 py-2">
                    <div class="right-conten-description">
                        <div class="subtitle-marketing text-red p-1">
                          ¿Qué lograrás?
                        </div>
                        <div class="text-light-gray p-1 pb-2">
                          Ganarás<strong> notoriedad </strong> en redes sociales
                          <strong> y tus clientes amarán tu marca.</strong>
                        </div>
                        <svg width="177" height="4" viewBox="0 0 177 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3.49193 3.2865e-07L173.516 1.51926e-05C175.438 1.53607e-05 177 0.896557 177 2C177 3.10345 175.438 4 173.516 4L3.48442 3.99998C1.56198 3.99998 7.83793e-08 3.10343 1.74845e-07 1.99999C0.0075076 0.896542 1.56949 1.60585e-07 3.49193 3.2865e-07Z" fill="#FBC000"/>
                        </svg>

                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 py-5 left-conten-description">
                    <img
                      src="<?php echo $directory_imgs;?>Girl_teaching_evanzu.png"
                      alt=""
                      class="img-fluid ml-4"
                    />
                  </div>
                </div>
              </div>
            </div>
            <!------------Card---------->
          </div>
        </section>
        <!----------------------Main---------------------->

        <!--------------------bola-Left------------------------->
        <?php
                 get_template_part('components/border-circle','full', array('color' =>
        '#ED1164', 'position' => '')); ?>
        <!--------------------bola-Left------------------------->

        <!-----------------------Service----------------------------->
        <div class="section-service">
          <div class="big-title text-red text-center">El servicio incluye:</div>

          <div class="text-center">
            <svg
              width="80"
              height="4"
              viewBox="0 0 80 4"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M77.7269 3.12186H1.56093C0.699727 3.12186 0 2.42214 0 1.56093C0 0.699732 0.699727 0 1.56093 0H77.7302C78.5914 0 79.2912 0.699732 79.2912 1.56093C79.2878 2.42214 78.5881 3.12186 77.7269 3.12186Z"
                fill="#FBC000"
              />
            </svg>
          </div>

          <div class="container">
            <div class="d-flex flex-column align-items-center mb-n1-5">
              <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                  $directory_imgs."first-icon-service.svg", 'text' => '<strong
                  >Plan de comunicaciones</strong
                >
                para cada red social.', 'line' => $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                $directory_imgs."plan-contenidos.svg", 'text' => '<strong
                  >Plan de contenidos</strong
                >
                ',
                'line' => $directory_imgs."line-point-yellow.svg" ) ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                $directory_imgs."plan-grafico.svg", 'text' => '<strong
                  >Plan gráfico</strong
                >
                <br />
                   Banners, gifs, micro videos, spots publicitarios y otros.', 'line' =>
                $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                  $directory_imgs."comuniti-manager.svg", 'text' => '<strong
                  >Community management</strong
                >
                Interacción con los usuarios, concursos y promociones.', 'line' => $directory_imgs."line-point-yellow.svg" ) ); ?>
              </div>

               <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                  $directory_imgs."reporte-mensual.svg", 'text' => '<strong
                  >Reportes mensuales de resultados.</strong
                >
                .', 'line' => $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service">
                 
                </div>
                  <div class="spacing-services-rigth"></div>
              </div>
              <div class="d-none d-lg-flex">
                <div
                  class="container-center-service element-final-center"
                ></div>
              </div>
            </div>
          </div>
            
        </div>
        <!-----------------------Service----------------------------->
         <div class="position-relative d-flex justify-content-center" style='margin-bottom: -10rem;'>
                 <img  class="" src="<?php echo $directory_imgs;?>Publicidad digital.png">
              </div>
        <!-----------------------Contanct----------------------------->
              <?php get_template_part('components/form-quote-request2', 'full', [
        'image' => $directory_imgs.'form-quote-request.svg',
        'title' => '¡Empecemos ahora!',
    ]); ?>                
        <!-----------------------Contanct----------------------------->
      </div>
      <!------------SEO ------------>
      <div id="seo" class=" tab-pane fade">
        <br />
        <!----------------------Main---------------------->
        <section class="p-0">
          <div class="bg-light-gray py-0">
            <div class="big-title text-red my-2 text-center">
              Posicionamiento SEO
            </div>
            <!-------------------Card---------------------->
            <div class="py-2">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-11 col-lg-6 d-flex">
                    <img
                      src="<?php echo $directory_imgs; ?>web-visibiliti.png"
                      alt=""
                      class="ml-5 img-fluid"
                    />
                  </div>
                  <div class="col-md-10 col-lg-6">
                    <div class="card bg-transparent border-0">
                      <div class="card-body">
                        <h3 class="subtitle-marketing text-gray-black text-left p-1">
                             Haz que tus clientes te encuentren en la web fácilmente.
                        </h3>
                        <p class="text-light-gray p-1">
                            Nuestro objetivo es <strong>aumentar tu visibilidad <br>en motores de búsqueda</strong> como Google y 
                            lograr un buen posicionamiento web para estar en los <strong>primeros<br> resultados de búsqueda</strong> de manera ORGÁNICA. 

                        </p>
                        <p class="text-light-gray p-1">                    
                           Nuestros consultores SEO evaluarán tu sitio web o tienda online para formular un plan de acción y ejecutarlo. 
                        </p>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!------------Card---------->

            <!-------------------Card---------------------->
            <div class="py-2 card-activation-2">
              <div class="container">
                <div  class="row mt-3">
                  <div class="col-md-11 col-lg-6 py-2">
                    <div class="right-conten-description">
                        <div class="subtitle-marketing text-red p-1">
                          ¿Qué lograrás?
                        </div>
                        <div class="text-light-gray p-1 pb-2">
                             ¿Qué lograrás?
                            Aumentar el tráfico de tu página web, eso significa 
                           <strong>más visitas y más ventas.</strong> 

                          <strong>  SEO para e-commerce <br>
                            SEO inicial o mensual</strong> 

                        </div>
                        <svg width="177" height="4" viewBox="0 0 177 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3.49193 3.2865e-07L173.516 1.51926e-05C175.438 1.53607e-05 177 0.896557 177 2C177 3.10345 175.438 4 173.516 4L3.48442 3.99998C1.56198 3.99998 7.83793e-08 3.10343 1.74845e-07 1.99999C0.0075076 0.896542 1.56949 1.60585e-07 3.49193 3.2865e-07Z" fill="#FBC000"/>
                        </svg>

                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 py-5 left-conten-description">
                    <img
                      src="<?php echo $directory_imgs;?>zoom_seo.png"
                      alt=""
                      class="img-fluid ml-4"
                    />
                  </div>
                </div>
              </div>
            </div>
            <!------------Card---------->
          </div>
        </section>
        <!----------------------Main---------------------->

        <!--------------------bola-Left------------------------->
        <?php
                 get_template_part('components/border-circle','full', array('color' =>
        '#ED1164', 'position' => '')); ?>
        <!--------------------bola-Left------------------------->

        <!-----------------------Service----------------------------->
        <div class="section-service">
          <div class="big-title text-red text-center">El servicio incluye:</div>

          <div class="text-center">
            <svg
              width="80"
              height="4"
              viewBox="0 0 80 4"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M77.7269 3.12186H1.56093C0.699727 3.12186 0 2.42214 0 1.56093C0 0.699732 0.699727 0 1.56093 0H77.7302C78.5914 0 79.2912 0.699732 79.2912 1.56093C79.2878 2.42214 78.5881 3.12186 77.7269 3.12186Z"
                fill="#FBC000"
              />
            </svg>
          </div>

          <div class="container">
            <div class="d-flex flex-column align-items-center mb-n1-5">
              <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                  $directory_imgs."palabras-clabe.svg", 'text' => '<strong
                  >Selección de Keywords</strong
                >
                (Palabras Clave).', 'line' => $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                $directory_imgs."meta-texto.svg", 'text' => '<strong
                  >Implementar Etiquetas meta </strong>
                    Descripción de las páginas que Google lee y posiciona.
                ',
                'line' => $directory_imgs."line-point-yellow.svg" ) ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                $directory_imgs."factores-internos.svg", 'text' => '<strong
                  >Optimizar factores internos</strong>
                    Contenido web, sistemas y otros.
              
                <br />
                   Banners, gifs, micro videos, spots publicitarios y otros.', 'line' =>
                $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                  $directory_imgs."indexacion-google.svg", 'text' => '<strong
                  >Indexación en Google</strong
                >
                Para que Google muestre el índice de tu web en los resultados de búsqueda.', 'line' => $directory_imgs."line-point-yellow.svg" ) ); ?>
              </div>

               <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                  $directory_imgs."mapa-web.svg", 'text' => '<strong>
                  Crear el sitemap</strong>
                    Archivo XML con la estructura del sitio web. 
                .', 'line' => $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service">
                </div>
                    <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                  $directory_imgs."link-building.svg", 'text' => '<strong
                  >Linkbuilding </strong>            
                    Estrategias para obtener enlaces que aterricen en el sitio web.
                ', 'line' => $directory_imgs."line-point-yellow.svg" ) ); ?>
              </div>

                <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                  $directory_imgs."velocidad_carga.svg", 'text' => '
                  Manejo de <strong>blog</strong>    
                ', 'line' => $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service">
                </div>
                    <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                  $directory_imgs."manejo-de-blog.svg", 'text' => '<strong
                  >Mejora de la velocidad
                   de carga </strong> de la página.           
                   
                ', 'line' => $directory_imgs."line-point-yellow.svg" ) ); ?>
              </div>
              <div class="d-none d-lg-flex">
                <div
                  class="container-center-service element-final-center"
                ></div>
              </div>
            </div>
          </div>
            
        </div>
        <!-----------------------Service----------------------------->
         <div class="position-relative d-flex justify-content-center" style='margin-bottom: -10rem;'>
                 <img  class="" src="<?php echo $directory_imgs;?>Publicidad digital.png">
              </div>
        <!-----------------------Contanct----------------------------->
              <?php get_template_part('components/form-quote-request2', 'full', [
        'image' => $directory_imgs.'form-quote-request.svg',
        'title' => '¡Empecemos ahora!',
    ]); ?>                
        <!-----------------------Contanct----------------------------->
     
      </div>
      <!------------Growth hacking ------------>
      <div id="menu3" class="container tab-pane fade">
        <br />
        <h3>Menu 3</h3>
        <p>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam.
        </p>
      </div>
      <!------------Marketing de contenidos ------------>
      <div id="menu4" class="container tab-pane fade">
        <br />
        <h3>Menu 4</h3>
        <p>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam.
        </p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="big-title text-red my-4 text-center">PORTAFOLIO</div>
  <div>
    <div>
      <?php  
                
                get_template_part('components/masonry-marketing', );  
        ?>
    </div>

    <div class="container" style="margin-top: 5rem"></div>
  </div>
</section>

<?php get_footer(); ?>
