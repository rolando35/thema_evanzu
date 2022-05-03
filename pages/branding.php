<?php
/* 
    Template Name: Branding
*/

get_header();
$directory_imgs = get_template_directory_uri() . '/assets/images/marketing-digital/';
$directory_branding_imgs = get_template_directory_uri() . '/assets/images/branding/';
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

    <div class="float-rectangle-banner">
      <div id="rectangle" class="text-center"></div>
    </div>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="<?php echo $directory_branding_imgs.'banner_brading.png';  ?>"
          class="w-100"
          style="min-height: 25rem"
        />

        <div class="carousel-caption-branding">
          <div class="running-text-btl">Consultura de</div>
          <div class="title-bold-branding hurme-bold-4">
            BRANDING &
            <img
              width="60"
              height="60"
              class="align-top"
              src="<?php echo $directory_branding_imgs.'title_icon.svg'?>"
            />
            <br />
            DISEÑO
          </div>

          <div class="text-subtitle-btl">
            Humanizamos marcas y diseñamos <br />
            experiencias únicas.
          </div>

          <div class="mt-3 text-left">
            <span class="text-subtitle-btl text-red"
              >Sabes que tu marca lo necesita.
            </span>
            <button class="btn-btl">
              <span style="font-weight: 400">Escríbenos</span>
            </button>
          </div>
        </div>
      </div>
    </div>
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
        SEO','href'=> '#menu2','path'=> $directory_imgs), array ('svg' =>
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
        <div class="bg-light-gray">
          <div class="big-title text-red my-5 text-center">Logo & Branding</div>
          <div class="container">
             <div class="py-2">
              <div class="container">
                 <div class="row justify-content-center">
                  <div class="col-md-11 col-lg-6 d-flex justify-content-lg-end">
                    <img
                      src="<?php echo $directory_branding_imgs ?>Identity Branding.png"
                      alt=""
                      class="img-fluid"
                    />
                  </div>
                  <div class="col-md-10 col-lg-6">
                    <div class="card bg-transparent border-0">
                      <div class="card-body">
                        <h3 class="subtitle-marketing text-light-purple text-left p-1">
                        El branding de tu marca dejará huella
                        </h3>
                        <p class="text-justify text-light-gray p-1">
                        <span class="font-weight-bold text-gray-black">Construimos marcas con personalidad y propósito.</span> 
                           Tus clientes se llevarán una buena impresión, entenderán tus valores y  <span class="font-weight-bold text-gray-black"> amarán tu marca tanto como tú. </span> 
                        </p>
                        <p class="text-justify text-light-gray p-1">                       
                            Trabajamos en el análisis y desarrollo total de una marca desde su concepto, 
                            pronunciación, colores, formas y ventajas diferenciales, hasta la revisión del registro del nombre.
                        </p>
                      
                      
                      </div>
                    </div>
                  </div>
                 </div>
                       <div class="py-2 card-activation-2">
              <div class="container">
                <div  class="row mt-3">
                  <div class="col-md-11 col-lg-6 py-2">
                    <div class="right-conten-description">
                        <div class="subtitle-marketing text-light-purple p-1">
                           Tu marca cautivará y destacará 
                        </div>
                        <svg width="177" height="4" viewBox="0 0 177 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3.49193 3.2865e-07L173.516 1.51926e-05C175.438 1.53607e-05 177 0.896557 177 2C177 3.10345 175.438 4 173.516 4L3.48442 3.99998C1.56198 3.99998 7.83793e-08 3.10343 1.74845e-07 1.99999C0.0075076 0.896542 1.56949 1.60585e-07 3.49193 3.2865e-07Z" fill="#FBC000"/>
                        </svg>

                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 py-5 left-conten-description">
                    <img
                      src="<?php echo $directory_branding_imgs ?>pincel_girl.png"
                      class="img-fluid ml-4"
                    />
                  </div>
                </div>
              </div>
            </div>

              </div>
            </div>
          </div>
        </div>

  
       <div class="big-title text-red text-center">Ofrecemos:</div>
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
									get_template_part('components/branding/service-left','full', 
										array(
											'image' =>
                  $directory_imgs."palabras-clabe.svg", 'text' => 'Manual de marca
                          Plasmamos tu ADN corporativo en un documento guía para las diversas 
                          formas de comunicación en función de tu negocio: Restaurantes, ONG’s, 
                          Moda, Estudios Contables y Servicios.', 'line' => $directory_branding_imgs."line-red.svg" ) ); ?>
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

              
              <div class="d-none d-lg-flex">
                <div
                  class="container-center-service element-final-center"
                ></div>
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
                        <h3 class="subtitle-btl text-left p-1">
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
                <div
                  class="row flex-column-reverse flex-lg-row justify-content-center align-items-center align-items-lg-end"
                >
                  <div class="col-md-11 col-lg-6 py-2 d-flex align-items-end">
                    <div class="card bg-transparent border-0">
                      <div class="card-body pb-0">
                        <h3 class="subtitle-btl text-left p-1">
                          ¿Qué lograrás?
                        </h3>
                        <div
                          class="text-justify text-light-gray p-1 pb-2 pb-md-3"
                        >
                          Ganarás<strong> notoriedad </strong> en redes sociales
                          <strong> y tus clientes amarán tu marca.</strong>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-10 col-lg-6 py-2 text-center">
                    <img
                      src="<?php echo $directory_imgs;?>Girl_teaching_evanzu.png"
                      alt=""
                      class="img-fluid"
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
                fill="#ED1164"
              />
            </svg>
          </div>

          <div class="container">
            <div class="d-flex flex-column align-items-center">
              <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                $path_img."first-icon-service.svg", 'text' => '<strong
                  >Desarrollo</strong
                >
                de Concepto.', 'line' => $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                $path_img."second-icon-service.svg", 'text' => '<strong
                  >Activaciones</strong
                >
                en ferias, <br />mercados, universidades, <br />parques y más.',
                'line' => $path_img."line-celeste.svg" ) ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                $path_img."third-icon-service.svg", 'text' => '<strong
                  >Pre-Producción</strong
                >
                de la<br />activación (Merchandising,<br />
                personal, juegos y otros).', 'line' =>
                $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                $path_img."fourth-icon-service.svg", 'text' => '<strong
                  >Reporte</strong
                >
                de resultados.', 'line' => $path_img."line-celeste.svg" ) ); ?>
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

        <!-----------------------Contanct----------------------------->
        <?php 
					get_template_part('components/btl/contact','full', 
					array (
						'path_img' =>
        $path_img, 'title'=> '¿Estás listo?' )); ?>
        <!-----------------------Contanct----------------------------->
      </div>
      <!------------SEO ------------>
      <div id="menu2" class="tab-pane fade">
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
                        <h3 class="subtitle-btl text-left p-1">
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
                <div
                  class="row flex-column-reverse flex-lg-row justify-content-center align-items-center align-items-lg-end"
                >
                  <div class="col-md-11 col-lg-6 py-2 d-flex align-items-end">
                    <div class="card bg-transparent border-0">
                      <div class="card-body pb-0">
                        <h3 class="subtitle-btl text-left p-1">
                          ¿Qué lograrás?
                        </h3>
                        <div
                          class="text-justify text-light-gray p-1 pb-2 pb-md-3"
                        >
                          Ganarás<strong> notoriedad </strong> en redes sociales
                          <strong> y tus clientes amarán tu marca.</strong>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-10 col-lg-6 py-2 text-center">
                    <img
                      src="<?php echo $directory_imgs;?>Girl_teaching_evanzu.png"
                      alt=""
                      class="img-fluid"
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
                fill="#ED1164"
              />
            </svg>
          </div>

          <div class="container">
            <div class="d-flex flex-column align-items-center">
              <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                $path_img."first-icon-service.svg", 'text' => '<strong
                  >Desarrollo</strong
                >
                de Concepto.', 'line' => $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                $path_img."second-icon-service.svg", 'text' => '<strong
                  >Activaciones</strong
                >
                en ferias, <br />mercados, universidades, <br />parques y más.',
                'line' => $path_img."line-celeste.svg" ) ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                $path_img."third-icon-service.svg", 'text' => '<strong
                  >Pre-Producción</strong
                >
                de la<br />activación (Merchandising,<br />
                personal, juegos y otros).', 'line' =>
                $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                $path_img."fourth-icon-service.svg", 'text' => '<strong
                  >Reporte</strong
                >
                de resultados.', 'line' => $path_img."line-celeste.svg" ) ); ?>
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

        <!-----------------------Contanct----------------------------->
        <?php 
					get_template_part('components/btl/contact','full', 
					array (
						'path_img' =>
        $path_img, 'title'=> '¿Estás listo?' )); ?>
        <!-----------------------Contanct----------------------------->
      </div>
      <!------------Growth hacking ------------>
      <div id="menu3" class="tab-pane fade">
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
                        <h3 class="subtitle-btl text-left p-1">
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
                <div
                  class="row flex-column-reverse flex-lg-row justify-content-center align-items-center align-items-lg-end"
                >
                  <div class="col-md-11 col-lg-6 py-2 d-flex align-items-end">
                    <div class="card bg-transparent border-0">
                      <div class="card-body pb-0">
                        <h3 class="subtitle-btl text-left p-1">
                          ¿Qué lograrás?
                        </h3>
                        <div
                          class="text-justify text-light-gray p-1 pb-2 pb-md-3"
                        >
                          Ganarás<strong> notoriedad </strong> en redes sociales
                          <strong> y tus clientes amarán tu marca.</strong>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-10 col-lg-6 py-2 text-center">
                    <img
                      src="<?php echo $directory_imgs;?>Girl_teaching_evanzu.png"
                      alt=""
                      class="img-fluid"
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
                fill="#ED1164"
              />
            </svg>
          </div>

          <div class="container">
            <div class="d-flex flex-column align-items-center">
              <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                $path_img."first-icon-service.svg", 'text' => '<strong
                  >Desarrollo</strong
                >
                de Concepto.', 'line' => $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                $path_img."second-icon-service.svg", 'text' => '<strong
                  >Activaciones</strong
                >
                en ferias, <br />mercados, universidades, <br />parques y más.',
                'line' => $path_img."line-celeste.svg" ) ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                $path_img."third-icon-service.svg", 'text' => '<strong
                  >Pre-Producción</strong
                >
                de la<br />activación (Merchandising,<br />
                personal, juegos y otros).', 'line' =>
                $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                $path_img."fourth-icon-service.svg", 'text' => '<strong
                  >Reporte</strong
                >
                de resultados.', 'line' => $path_img."line-celeste.svg" ) ); ?>
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

        <!-----------------------Contanct----------------------------->
        <?php 
					get_template_part('components/btl/contact','full', 
					array (
						'path_img' =>
        $path_img, 'title'=> '¿Estás listo?' )); ?>
        <!-----------------------Contanct----------------------------->
      </div>
      <!------------Marketing de contenidos ------------>
      <div id="menu4" class="tab-pane fade">
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
                        <h3 class="subtitle-btl text-left p-1">
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
                <div
                  class="row flex-column-reverse flex-lg-row justify-content-center align-items-center align-items-lg-end"
                >
                  <div class="col-md-11 col-lg-6 py-2 d-flex align-items-end">
                    <div class="card bg-transparent border-0">
                      <div class="card-body pb-0">
                        <h3 class="subtitle-btl text-left p-1">
                          ¿Qué lograrás?
                        </h3>
                        <div
                          class="text-justify text-light-gray p-1 pb-2 pb-md-3"
                        >
                          Ganarás<strong> notoriedad </strong> en redes sociales
                          <strong> y tus clientes amarán tu marca.</strong>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-10 col-lg-6 py-2 text-center">
                    <img
                      src="<?php echo $directory_imgs;?>Girl_teaching_evanzu.png"
                      alt=""
                      class="img-fluid"
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
                fill="#ED1164"
              />
            </svg>
          </div>

          <div class="container">
            <div class="d-flex flex-column align-items-center">
              <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                $path_img."first-icon-service.svg", 'text' => '<strong
                  >Desarrollo</strong
                >
                de Concepto.', 'line' => $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                $path_img."second-icon-service.svg", 'text' => '<strong
                  >Activaciones</strong
                >
                en ferias, <br />mercados, universidades, <br />parques y más.',
                'line' => $path_img."line-celeste.svg" ) ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' =>
                $path_img."third-icon-service.svg", 'text' => '<strong
                  >Pre-Producción</strong
                >
                de la<br />activación (Merchandising,<br />
                personal, juegos y otros).', 'line' =>
                $path_img."line-rosado.svg" ) ); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' =>
                $path_img."fourth-icon-service.svg", 'text' => '<strong
                  >Reporte</strong
                >
                de resultados.', 'line' => $path_img."line-celeste.svg" ) ); ?>
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

        <!-----------------------Contanct----------------------------->
        <?php 
					get_template_part('components/btl/contact','full', 
					array (
						'path_img' =>
        $path_img, 'title'=> '¿Estás listo?' )); ?>
        <!-----------------------Contanct----------------------------->
      </div>
    </div>
  </div>
</section>
<section>
  <div class="big-title text-red my-4 text-center">PORTAFOLIO</div>
  <div>
    <div>
      <?php  
          get_template_part('components/masonry-diseño', );
        ?>
    </div>

    <div class="container" style="margin-top: 5rem"></div>
  </div>
</section>

<?php get_footer(); ?>
