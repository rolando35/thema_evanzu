<?php
/* 
    Template Name: Branding
*/

get_header('', [
    'title' =>
        'Agencia de diseño de logo, merchandising, impresos, ilustración, UX-UI',
    'description' =>
        'Agencia de diseño para publicidad digital e impresos, logotipo, branding, manual de marca, señalética,  merchadising, ilustración digital, diseño Ux UI',
    'keywords' => '',
    'richsnippets' => '<script type="application/ld+json">
          {
            "@context": "https://schema.org/", 
            "@type": "BreadcrumbList", 
            "itemListElement": [{
              "@type": "ListItem", 
              "position": 1, 
              "name": "Logo Branding",
              "item": "https://evanzu.com/new_evanzu/branding-diseno/#logo_branding"  
            },{
              "@type": "ListItem", 
              "position": 2, 
              "name": "Diseño Publicitario",
              "item": "https://evanzu.com/new_evanzu/branding-diseno/#dise%C3%B1o_publicitario"  
            },{
              "@type": "ListItem", 
              "position": 3, 
              "name": "Merchandising",
              "item": "https://evanzu.com/new_evanzu/branding-diseno/#merchandising_impresos"  
            },{
              "@type": "ListItem", 
              "position": 4, 
              "name": "Ilustración digital",
              "item": "https://evanzu.com/new_evanzu/branding-diseno/#ilustracion_digital"  
            },{
              "@type": "ListItem", 
              "position": 5, 
              "name": "diseño ux",
              "item": "https://evanzu.com/new_evanzu/branding-diseno/#ux_ui"  
            }]
          }
          </script>  ',
]);
$directory_imgs =
    get_template_directory_uri() . '/assets/images/marketing-digital/';
$directory_branding_imgs =
    get_template_directory_uri() . '/assets/images/branding/';
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

  .hight-content {
    margin-bottom: -19rem;
    margin-top: 5rem;
  }

  .long-content{
    margin-bottom: -8rem;
  }
  
  .hight-content1{
    margin-bottom: -8rem;
  }

  .title-width {
    max-width: 58rem;
  }

  .card-n1 {
    margin-top: -6rem;
  }

  .semi-title {
    font-size: 24px;
    line-height: 24px;
  }
  
  .mlt-n1 {
    margin-left: -1rem;
    margin-top: 1rem;
  }

  .mb-n10 {
    margin-bottom: -10rem;
  }

  .mt-6m {
    margin-top: 0;
  }

@media only screen and (max-width: 992px) {
  .mlt-n1 {
    margin-left: 0 !important;
    margin-top: 0 !important;
  }

  .mt-6m{
    margin-top: 6rem !important;
  }

  .mb-n10 {
    margin-bottom: 0 !important;
  }
}
</style>

    <!--------------------- Button Modal --------------------->
        <div   class="position-fixed button-form-in-pages"> 
                        <div
                        type="button"
                        class="position-absolute ndx" 
                        class="btn btn-primary" 
                        data-toggle="modal" 
                        data-target="#myModalRight" 
                        data-dismiss="modal" 
                        data-backdrop="false"
                       
                        >
                    <svg width="72" height="509" viewBox="0 0 72 509" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M71.6475 1.52588e-05V508.657C58.136 508.657 46.469 499.238 43.6095 486.032L6.39286 314.071C-2.13095 274.694 -2.13095 233.952 6.39286 194.574L43.6095 22.6138C46.4581 9.41877 58.136 1.52588e-05 71.6475 1.52588e-05Z" fill="#ED1164"/>
                    </svg>
                    <div class="texto-vertical text-light d-flex flex-column align-items-center mb-3">
                        <i class="btn-open-i" >Ahora que estás inclinando la cabeza para leer, escríbenos.</i> <br>
                        <span class="hurme-bold-4  btn-open-modal">ESCRÍBENOS</span>
                    </div>
                </div>
                <div class="mt-5c" style="z-index: 1;">
                    <?php get_template_part(
                        'components/modal/modal',
                        'full'
                    ); ?>
                </div>
        </div>    
    <!--------------------- Button Modal ---------------------> 
<section id="slider">
  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->

    <div class="float-rectangle-banner d-none d-xl-flex">
      <div id="rectangle" class="text-center"></div>
    </div>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="<?php echo $directory_branding_imgs . 'banner_brading.png'; ?>"
          class="w-100"
          style="min-height: 25rem"
        />

        <div class="carousel-caption-branding">
          <div class="running-text-btl">Consultora de</div>
          <h1 class="title-bold-branding hurme-bold-4">
            BRANDING &
            <img
              width="60"
              height="60"
              class="align-top d-none d-xl-inline"
              src="<?php echo $directory_branding_imgs . 'title_icon.svg'; ?>"
            />
            <br />
            DISEÑO
          </h1>

          <div class="text-subtitle-btl">
            Humanizamos marcas y diseñamos <br />
            experiencias únicas.
          </div>

          <div class="mt-3 text-left">
            <span class="text-subtitle-btl text-red"
              >Sabes que tu marca lo necesita.
            </span>
            <button 
            class="btn-btl"
            id="btn-main"
            data-toggle="modal" 
            data-target="#myModalRight" 
            data-dismiss="modal" 
            data-backdrop="false">
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
        class="nav nav-pills nav-tabs-sticky justify-content-center"
        id="nav-iconos"
        role="tablist"
      >
        <?php
        $lista = [
            [
                'svg' => 'digital.svg',
                'title' => 'Logo &
                  <br />
                  Branding',
                'href' => '#logo_branding',
                'active' => true,
                'path' => $directory_branding_imgs,
            ],
            [
                'svg' => 'icon-diseño.svg',
                'title' => 'Diseño
                <br />
                 Publicitario',
                'href' => '#disenio_publicitario',
                'path' => $directory_branding_imgs,
            ],
            [
                'svg' => 'icon-brain.svg',
                'title' => 'Diseño
                            <br />
                           UX & UI',
                'href' => '#ux_ui',
                'path' => $directory_branding_imgs,
            ],

            [
                'svg' => 'icon-tv.svg',
                'title' => 'Ilustración
                            <br />
                            digital',
                'href' => '#ilustracion_digital',
                'path' => $directory_branding_imgs,
            ],
            [
                'svg' => 'merchandancin.svg',
                'title' => 'Merchandising
                              <br />
                            & Impresos',
                'href' => '#merchandising_impresos',
                'path' => $directory_branding_imgs,
            ],
        ];
        foreach ($lista as $data) {
            get_template_part('components/circle-nav-2', 'full', $data);
        }
        ?>
      </ul>
    </div>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="logo_branding" class="tab-pane active">
        <br />
        <div class="bg-light-gray">
          <h2 class="big-title text-red my-5 text-center">Logo & Branding</h2>
          <div class="container">
             <div class="py-2">
              <div class="container">
                 <div class="row justify-content-center">
                  <div class="col-md-11 col-lg-6 d-flex justify-content-lg-end">
                    <img
                      src="<?php echo $directory_branding_imgs; ?>Identity Branding.png"
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
                        <span class="font-weight-bold hurme-bold-4">Construimos marcas con personalidad y propósito.</span> 
                           Tus clientes se llevarán una buena impresión, entenderán tus valores y  <span class="font-weight-bold hurme-bold-4"> amarán tu marca tanto como tú. </span> 
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
                      src="<?php echo $directory_branding_imgs; ?>pincel_girl.png"
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

  <!----------------------------- services tab 1 ----------------------------->
        <h2 class="big-title text-red text-center">Ofrecemos:</h2>
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

              <div class="d-flex flex-column my-1 mt-lg-0 mb-lg-5">
              	<div class="d-flex flex-column align-items-center flex-lg-row ">
              		<div class="align-self-lg-end">
              			<img class="image-service" src="<?php echo $directory_branding_imgs . 'manual_icon.svg'; ?>"
              			/>
              		</div>
              		<div
              			class="align-self-center text-center text-lg-left p-2 pl-lg-3 pb-lg-0 text-service mb-n10"
              		>
              			<div class="hurme-bold-4 text-gray-black">
                      Manual de marca <br> <br>
              			</div>
              			<div class="service-braning-text-left">
                      Plasmamos tu <span class="hurme-bold-4"> ADN corporativo</span> en un documento guía para las diversas 
                          formas de comunicación en función de tu negocio: Restaurantes, ONG’s, 
                          Moda, Estudios Contables y Servicios.
              			</div>
                      
              		</div>
              	</div>
              	<div class="d-none d-lg-flex justify-content-end container-line-left-service"
              	>
              		<div class="line-left-service">
              			<img src="<?php echo $directory_branding_imgs . 'line-red.svg'; ?>" class="img-fluid" />
              		</div>
              	</div>
              </div>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php get_template_part(
                    'components/branding/service-right',
                    'full',
                    [
                        'image' => $directory_branding_imgs . 'logog_a.svg',
                        'text' => 'Te ofrecemos la mejor solución para identificar tu marca, tener identidad y presencia en el mercado.
                    Diseñamos <span class="hurme-bold-4">logotipos originales y con personalidad propia</span>.
                ',
                        'title' => '<span class="hurme-bold-4">Logos<br> <br></span>',
                        'line' =>
                            $directory_branding_imgs . 'line-purple-higth.svg',
                    ]
                ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row mt-6m">
                <div class="d-flex flex-column my-1 mt-lg-0 mb-lg-5">
                	<div class="d-flex flex-column align-items-center flex-lg-row ">
                		<div class="align-self-lg-end">
                			<img class="image-service" src="<?php echo $directory_branding_imgs . 'notes_icon.svg'; ?>"
                			/>
                		</div>
                		<div
                			class="align-self-center text-center text-lg-left p-2 pl-lg-3 pb-lg-0 text-service mb-n10"
                		>
                			<div class="hurme-bold-4 text-gray-black">
                      Naming y slogans <br> <br>
                			</div>
                			<div class="service-braning-text-left">
                      Creamos <span class="hurme-bold-4">nombres y slogans</span> para empresas <span class="hurme-bold-4">que resuenan, enganchan y son fáciles de recordar.</span>
                        Serán la principal publicidad de tu marca y haremos que sea efectiva.
                			</div>
                        
                		</div>
                	</div>
                	<div class="d-none d-lg-flex justify-content-end container-line-left-service"
                	>
                		<div class="line-left-service">
                			<img src="<?php echo $directory_branding_imgs . 'line-red.svg'; ?>" class="img-fluid" />
                		</div>
                	</div>
                </div>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php get_template_part(
                    'components/branding/service-right',
                    'full',
                    [
                        'image' => $directory_branding_imgs . 'box-icon.svg',
                        'text' => '
                    Diseñamos <span class="hurme-bold-4">empaques funcionales con el toque estético y creativo</span> que necesita tu marca.
                    Servicio dirigido a empresas de ventas online que buscan crear una <span class="hurme-bold-4"> experiencia de unboxing</span> 
                    cautivante y posteable. Diseñamos y producimos empaques, bolsas, cajas, envases y otros..
                  ',
                        'tall' => 'height: 100px;',
                        'title' => '<span class="hurme-bold-4">Packaging<br> <br></span>',
                        'line' =>
                            $directory_branding_imgs . 'line-purple-higth.svg',
                    ]
                ); ?>
              </div>

              
              <div class="d-none d-lg-flex">
                <div
                  class="container-center-service element-final-center"
                ></div>
              </div>
            </div>
              <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -7rem;'>
                <img   src="<?php echo $directory_branding_imgs .
                    'publicidad grafico_Mesa.png'; ?>">
              </div>
          </div>

              <!-----------------------Circle Right----------------------------->
              <div class='w-100 text-right' style="margin-bottom: -10rem">
                <?php
                $parameters = ['color' => '#681484', 'position' => 'right'];
                get_template_part(
                    'components/border-circle',
                    'full',
                    $parameters
                );
                ?>
              </div>
              <!-----------------------Circle Right----------------------------->

        <div class='mt-5'>
        <!-----------------------Contact----------------------------->
				<?php get_template_part('components/form-quote-request2', 'full', [
        'image' => $path_img . 'girl-icon.svg',
        'title' => 'Desarrollamos tu marca',
        'idwebsite' => 'logo_brandingWebsite',
        'idemail' => 'branding7email',
        'idform' => 'branding7',
        'idparagraph' => 'pbranding7',
        'titleClass' => 'title-contact-fontlg title-contact-w36 text-center',
        'imgClass' => 'image-contact-margin',
    ]); ?>
				<!-----------------------Contact----------------------------->
        </div>
      </div>
      <!------------REDES SOCIALES ------------>
      <div id="disenio_publicitario" class="tab-pane fade">
        <br />
        <!----------------------Main---------------------->
        <section class="p-0">
          <div class="bg-light-gray py-0">
            <h2 class="big-title text-red my-2 text-center">
              Diseño Publicitario
            </h2>
            <!-------------------Card---------------------->
          <div class="container">
            <div class="py-2">
              <div class="container">
                 <div class="row justify-content-center">
                  <div class="col-md-11 col-lg-6 d-flex justify-content-center justify-content-lg-end">
                    <img
                      src="<?php echo $directory_branding_imgs; ?>bim.png"
                      alt=""
                      class="img-fluid"
                    />
                  </div>
                  <div class="col-md-10 col-lg-6">
                    <div class="card bg-transparent border-0">
                      <div class="card-body">
                        <h3 class="subtitle-marketing text-light-purple text-left p-1">
                           Comunicación visual para tus necesidades
                        </h3>
                        <p class="text-justify text-light-gray p-1">
                              Desarrollamos todo tipo de piezas de comunicación para publicidad (digital, impresa y en diferentes soportes y formatos) con un <span class="font-weight-bold hurme-bold-4 text-gray-black"> diseño claro con elementos impactantes, fáciles de recordar,</span> concisos y al mismo tiempo, que  <span class="font-weight-bold hurme-bold-4 text-gray-black">conectan emocionalmente</span>span con la audiencia.
                        </p>
                        <p class="text-justify text-light-gray p-1">                       
                          <span class="font-weight-bold hurme-bold-4 text-gray-black"> Transmite tu mensaje de manera atrayente y funcional.</span>
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
                                    <div class="subtitle-marketing text-light-purple p-1 text-left">
                                     Partiendo de un concepto, diseñamos para:
                                    </div>
                                     <div class="text-left">
                                        <ul>
                                           <li>Impresos</li>
                                           <li>Digitales</li>
                                           <li>Puntos de Venta /Outdoor</li>
                                        </ul>
                                     </div>

                                </div>
                              </div>

                              <div class="col-md-12 col-lg-6 py-5 left-conten-description">
                                <img
                                  src="<?php echo $directory_branding_imgs; ?>Comunicacion_visual.png"
                                  class="img-fluid ml-4"
                                />
                              </div>
                            </div>
                        </div>
                 </div>

              </div>
            </div>
          </div>

            <!------------Card---------->
          </div>
        </section>
        <!----------------------Main---------------------->

        <!--------------------bola-Left------------------------->
        <?php get_template_part('components/border-circle', 'full', [
            'color' => '#ED1164',
            'position' => '',
        ]); ?>
        <!--------------------bola-Left------------------------->

        <!-----------------------Service----------------------------->
        <div class="section-service">
          <h2 class="big-title text-red text-center">Materiales de publicidad</h2>

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
            <div class="d-flex flex-column align-items-center">
              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part(
                    'components/branding/service-left-double',
                    'full',
                    [
                        'image-one' => $directory_branding_imgs . 'volante.svg',
                        'image-two' => $directory_branding_imgs . 'diptico.svg',
                        'title-one' => 'Volante',
                        'title-two' => 'Diptico',
                        'line-one' =>
                            $directory_branding_imgs . 'line-rosado-large.svg',
                        'line-two' =>
                            $directory_branding_imgs . 'line-rosado.svg',
                    ]
                ); ?>

                  
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                

                <?php get_template_part(
                    'components/branding/service-right-double',
                    'full',
                    [
                        'image-one' =>
                            $directory_branding_imgs . 'colgante.svg',
                        'image-two' =>
                            $directory_branding_imgs . 'triptico.svg',
                        'title-one' => 'Colgante',
                        'title-two' => 'Triptico',
                        'line-one' =>
                            $directory_branding_imgs . 'line-purple-tiny.svg',
                        'line-two' =>
                            $directory_branding_imgs . 'line_purple.svg',
                    ]
                ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part(
                    'components/branding/service-left-double',
                    'full',
                    [
                        'image-one' => $directory_branding_imgs . 'stopper.svg',
                        'image-two' =>
                            $directory_branding_imgs . 'jalavista.svg',
                        'title-one' => 'Stopper',
                        'title-two' => 'Jalavista',
                        'line-one' =>
                            $directory_branding_imgs . 'line-rosado-large.svg',
                        'line-two' =>
                            $directory_branding_imgs . 'line-rosado.svg',
                    ]
                ); ?>

                  
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                

                <?php get_template_part(
                    'components/branding/service-right-double',
                    'full',
                    [
                        'image-one' => $directory_branding_imgs . 'loading.svg',
                        'image-two' => $directory_branding_imgs . 'flyer.svg',
                        'image' => $path_img . 'second-icon-service.svg',
                        'title-one' => 'Landing Pages',
                        'title-two' => 'Flyer',
                        'line-one' =>
                            $directory_branding_imgs . 'line-purple-tiny.svg',
                        'line-two' =>
                            $directory_branding_imgs . 'line_purple.svg',
                    ]
                ); ?>
              </div>

               <div class="d-flex flex-column flex-md-row mb-5 mb-lg-0">

              <div class="d-flex flex-column my-1 mt-lg-0 mb-lg-5 text-center">	
              	<div class="d-md-flex">	
               		<div><img  src="<?php echo $directory_branding_imgs . 'bannerP.svg'; ?>"	/><div class="text-center pt-1">
                   Banners para <br> publicidad digital</div> </div>	 	
               		<div class="mlt-n1">
                     <img  src="<?php echo $directory_branding_imgs . 'gif.svg'; ?>"/>
                     <div class="text-center pt-1">
                      GIF
                    </div>
                  </div>
              	</div>	
              	<div class="d-none d-lg-flex justify-content-end container-line-left-service">
              		<div class="z-index-1">
              		<div class="float-right">
                    <img src="<?php echo $directory_branding_imgs . 'line-rosado-large.svg' ?>" class="img-fluid" />
                  </div>		 
              		<div class="service-doble-line">
                    <img src="<?php echo $directory_branding_imgs . 'line-rosado.svg'; ?>" class="img-fluid" />
                  </div>	
              		</div>
              	</div>
              </div>
                  
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                

                <?php get_template_part(
                    'components/branding/service-right-double',
                    'full',
                    [
                        'image-one' => $directory_branding_imgs . 'poster.svg',
                        'image-two' =>
                            $directory_branding_imgs . 'bannersI.svg',
                        'image' => $path_img . 'second-icon-service.svg',
                        'title-one' => 'Poster',
                        'title-two' => 'Banners<br> para impresión',
                        'line-one' =>
                            $directory_branding_imgs . 'line-purple-tiny.svg',
                        'line-two' =>
                            $directory_branding_imgs . 'line_purple.svg',
                    ]
                ); ?>
              </div>

              <div class="d-none d-lg-flex">
                <div
                  class="container-center-service element-final-center"
                ></div>
              </div>
              <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -9rem; height: 10rem;'>
                <img style="margin-top: -9rem;" class="d-none d-lg-block"  src="<?php echo $directory_branding_imgs .
                    'work-table_with_circle.png'; ?>">
              </div>
            </div>
          </div>
        </div>
        <!-----------------------Service----------------------------->

        <!-----------------------Circle Right----------------------------->
        <div class='w-100 text-right' style="margin-bottom: -7rem">
                <?php
                $parameters = ['color' => '#681484', 'position' => 'right'];
                get_template_part(
                    'components/border-circle',
                    'full',
                    $parameters
                );
                ?>
              </div>
              <!-----------------------Circle Right----------------------------->

        <!-----------------------Contanct----------------------------->
        <?php get_template_part('components/form-quote-request2', 'full', [
            'image' => $path_img . 'girl-icon.svg',
            'title' => 'Potencia tu marca',
            'idwebsite' => 'disenio_publicitarioWebsite',
            'idemail' => 'branding0email',
            'idform' => 'branding0',
            'idparagraph' => 'pbranding0',
            'titleClass' =>
            'title-contact-fontlg title-contact-w36 text-center',
            'imgClass' => 'image-contact-margin',
        ]); ?>                
        <!-----------------------Contanct----------------------------->
      </div>
      <!------------SEO ------------>
      <div id="merchandising_impresos" class="tab-pane fade">
        <br />
        <!----------------------Main---------------------->
        <section class="p-0">
          <div class="bg-light-gray py-0">
            <h2 class="big-title text-red my-2 text-center">
            Merchandising & Impresos
            </h2>
            <!-------------------Card---------------------->
            <div class="py-2">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-11 col-lg-6 d-flex align-items-center justify-content-center">
                    <img
                      src="<?php echo $directory_branding_imgs; ?>Bim merchandising_Mesa de trabajo 1 1.png"
                      alt="Mechanding mesa"
                      class="img-fluid"
                    />
                  </div>
                  <div class="col-md-10 col-lg-6 d-flex align-items-center">
                    <div class="card bg-transparent border-0">
                      <div class="card-body">
                        <h3 class="subtitle-marketing text-light-purple text-left p-1">
                          Capta y fideliza a más clientes
                        </h3>
                        <p class="text-justify text-light-gray p-1">
                          Nuestros expertos creativos diseñan 
                          <b class="text-light-gray font-weight-bold hurme-bold-4">
                            artículos publicitarios que transmiten la identidad de una marca
                          </b> y que a su vez consiguen los objetivos trazados. <br> <br>

                          En la conceptualización establecemos el diseño, funcionalidad y empleabilidad del formato que mejor calce con tu objetivo.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!------------Card---------->
          </div>
        </section>
        <!----------------------Main---------------------->

        <!--------------------bola-Left------------------------->
        <?php get_template_part('components/border-circle', 'full', [
            'color' => '#ED1164',
            'position' => '',
        ]); ?>
        <!--------------------bola-Left------------------------->

        <!-------------------- services tab1 -------------------->
			<div class="section-service">
				<h2 class="big-title text-red text-center">Ofrecemos:</h2>

				<div class="text-center">
					<svg width="80" height="4" viewBox="0 0 80 4" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M77.7269 3.12186H1.56093C0.699727 3.12186 0 2.42214 0 1.56093C0 0.699732 0.699727 0 1.56093 0H77.7302C78.5914 0 79.2912 0.699732 79.2912 1.56093C79.2878 2.42214 78.5881 3.12186 77.7269 3.12186Z" fill="#ED1164"/>
					</svg>
				</div>

				<div class="container">
					<div class="d-flex flex-column align-items-center mb-n1-5">
						<div class="d-flex flex-column flex-md-row">

							<?php get_template_part('components/btl/service-left', 'full', [
                'image' => $directory_branding_imgs . 'ofrecemos1.png',
                'text' => '
                  <div class="long-content">
                    <span class="hurme-bold-4 mb-3">Merchandising <br> <br></span>
                    <p>
                    Logra que las personas descubran, reconozcan y difundan tu marca con artículos como: Gorras, polos, lapiceros, tazas, Soleras, llaveros, pines, tomados y mucho más.

                    <a style="z-index: 2; border-radius: 20px; font-size: 14px; border: none;" class="btn btn-primary bg-red position-relative mt-2" target="_blank" href="https://evanzu.com/Catalogo_de_Merchandising.pdf" role="button">Descarga nuestro catálogo aquí.</a>
                    </p>
                  </div>',
                'line' => $directory_branding_imgs . 'line-red.svg',
              ]); ?>

							<div class="d-none d-lg-block container-center-service">
                <div class="element-center-service"></div>
							</div>

              <div class="d-flex flex-column my-1 my-lg-0 align-self-lg-end">
                <div class="d-flex flex-column-reverse align-items-center flex-lg-row">
                  <div class="align-self-center text-center text-lg-right p-2 pr-lg-3 pb-lg-0 text-service">
                    <div class="hight-content">
                      <span class="hurme-bold-4 mb-5">Impresos</span> <br> <br>
                      Partimos de las necesidades de comunicación para la  <span class="hurme-bold-4">maquetación de contenido que cautive</span> al público objetivo, informe efectivamente y refuerce la identidad corporativa. <br> <br>
                      <p class="text-red font-weight-bold hurme-bold-4 m-0">Incluye:</p> 
                      <i>
                      Hojas membretadas, tarjetas de presentación personales y corporativas, brochures corporativos, banners publicitarios, sobres y bolsas, volantes, dipticos y tripticos, y otras publicaciones como: libros, revistas, periódicos, catálogos, carátulas, cuentos y otros.
                      </i>
                    </div>
                  </div>
                  <div class="align-self-lg-end long-services">
                    <img class="image-service" src="<?php echo $directory_branding_imgs . 'ofrecemos2.png' ?>"/>
                  </div>
                </div>
                <div class="d-none d-lg-flex justify-content-start container-line-right-service" style="margin-bottom: -10rem; z-index: 1;" >
                  <div class="line-right-service">
                    <img src="<?php echo $directory_branding_imgs . 'line-purple-higth1.svg'?>" />
                  </div>
                </div>
              </div>

					</div>

            <div class="d-flex flex-column flex-md-row">
							<?php get_template_part('components/service-left-long', 'full', [
           'image' => $directory_branding_imgs . 'ofrecemos3.png',
           'text' => ' 
                <div class="hight-content1">
                <span class="hurme-bold-4 mb-5">Señalética corporativa <br><br></span>

                  <p>
                  Ideamos señaléticas para espacios interiores como oficinas, puntos de venta y atención al cliente. Trabajamos señalamiento de contingencia sanitaria, material POP, entre otros. Nos aseguramos de que sean  <span class="hurme-bold-4">originales, fáciles de percibir y de interpretar.</span>
                  </p> 
                  <b class="text-red hurme-bold-4">Incluye:</b>
                  <i>
                  Diseño de Jalavistas, rompetráficos, flanger, table tent, letreros y mucho más; además de pictogramas, iconos y tipografía.
                  </i>
                </div>
            ',
           'line' => $directory_branding_imgs . 'line-red.svg',
       ]); ?>									
							<div class="d-none d-lg-block container-center-service">
							</div>
							<div class="d-none d-lg-block container-empty-service"></div>
						</div>
						<div class="d-none d-lg-flex" style="z-index: -1;">
							<div class="container-center-service element-final-center"></div>
						</div>
					</div>
				</div>

        <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -7rem;'>
            <img
            class="d-none d-lg-block"
            style="margin-right: -23rem; margin-top: -12rem;"
            src="
            <?php echo $directory_branding_imgs . 'Piezas de Comunicación 1.png'; ?>">
        </div>
			</div>
        <!-----------------------Service----------------------------->

        <!-----------------------Circle Right----------------------------->
        <div class='w-100 text-right' style="margin-bottom: -10rem">
          <?php
          $parameters = ['color' => '#681484', 'position' => 'right'];
          get_template_part('components/border-circle', 'full', $parameters);
          ?>
          </div>
        <!-----------------------Circle Right----------------------------->


        <div class='mt-5'>
          <!-----------------------Contact----------------------------->
          <?php get_template_part('components/form-quote-request2', 'full', [
              'image' => $path_img . 'girl-icon.svg',
              'title' => 'Te escuchamos',
              'idwebsite' => 'merchandising_impresosWebsite',
              'idemail' => 'branding5email',
              'idform' => 'branding5',
              'idparagraph' => 'pbranding5',
              'titleClass' =>
              'title-contact-fontlg title-contact-w36 text-center',
              'imgClass' => 'image-contact-margin',
          ]); ?>
          <!-----------------------Contact----------------------------->
        </div>

      </div>
      <!------------Growth hacking ------------>
      <div id="ilustracion_digital" class="tab-pane fade">
        <br />
        <!----------------------Main---------------------->
        <section class="p-0">
          <div class="bg-light-gray py-0">
            <h2 class="big-title text-red my-2 text-center">
              Ilustración digital
            </h2>
            <!-------------------Card---------------------->
            <div class="py-2">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-11 col-lg-6 d-flex align-items-center justify-content-center">
                    <img
                      src="<?php echo $directory_branding_imgs; ?>Mockup 1.png"
                      alt="Mechanding mesa"
                      class="img-fluid"
                    />
                  </div>
                  <div class="col-md-10 col-lg-6 d-flex align-items-center">
                    <div class="card bg-transparent border-0">
                      <div class="card-body">
                        <h3 class="subtitle-marketing text-light-purple text-left p-1">
                          Expresión visual y creativa
                        </h3>
                        <p class="text-justify text-light-gray p-1">
                        La ilustración digital es un recurso clave en esta era de la comunicación visual. Creemos en el poder de las imágenes como un recurso diferenciador para las marcas. <br> <br>

                        Trasladamos conceptos a 
                        <b class="text-light-gray font-weight-bold hurme-bold-4">
                          imágenes exclusivas y personalizadas.
                        </b> Manejamos el 
                        <b class="text-light-gray font-weight-bold hurme-bold-4">
                          arte visual enfocado a ganar la atención y fidelidad de los usuarios.
                        </b>

                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!------------Card---------->
          </div>
        </section>
        <!----------------------Main---------------------->

        <!--------------------bola-Left------------------------->
        <?php get_template_part('components/border-circle', 'full', [
            'color' => '#ED1164',
            'position' => '',
        ]); ?>
        <!--------------------bola-Left------------------------->

        <!-----------------------Service component tab5----------------------------->
				<div class="section-service">
          <div class="w-100 d-flex justify-content-center">
            <h2 class="big-title text-red text-center title-width">Ofrecemos ilustración digital para:</h2>
          </div>

					<div class="text-center">
						<svg width="80" height="4" viewBox="0 0 80 4" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M77.7269 3.12186H1.56093C0.699727 3.12186 0 2.42214 0 1.56093C0 0.699732 0.699727 0 1.56093 0H77.7302C78.5914 0 79.2912 0.699732 79.2912 1.56093C79.2878 2.42214 78.5881 3.12186 77.7269 3.12186Z" fill="#ED1164"/>
						</svg>
					</div>

					<div class="container">
						<div class="d-flex flex-column align-items-center mb-n1-5">
							<div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $directory_branding_imgs . 'ilustracion1.png',
            'text' => '<span class="font-weight-bold hurme-bold-4 text-gray-black">Personajes para videos <br>
                      corporativos.</span>',
            'line' => $path_img . 'line-rosado.svg',
        ]); ?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $directory_branding_imgs . 'ilustracion2.png',
            'text' =>
                '<span class="font-weight-bold hurme-bold-4 text-gray-black">Dirección de arte para <br> campañas publicitarias.</span>',
            'line' => $directory_branding_imgs . 'line_purple.svg',
        ]); ?>
							</div>
              <div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $directory_branding_imgs . 'ilustracion3.png',
            'text' =>
                '<span class="font-weight-bold hurme-bold-4 text-gray-black">Recursos para páginas web.</span>',
            'line' => $path_img . 'line-rosado.svg',
        ]); ?>									
								<div class="d-none d-lg-block container-center-service ht7">
								</div>
								<div class="d-none d-lg-block container-empty-service"></div>
							</div>
						</div>
					</div>
          <div class="position-relative d-flex justify-content-center">
              <img
                class="d-none d-lg-block"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/Group 86.png"
                style="
                    margin-right: -22rem;
                    margin-top: -4rem;
                    margin-bottom: -6rem;"
              >
          </div>
          <div>
          <div class="" style="background: #f7f7f7; padding: 2rem 0;">
            <h3 class="how text-center hurme-bold-4 mt-0 mt-lg-5">¿Cómo lo hacemos?</h3>
            <!------------------Game-------------------->
        		<section style="margin-top: 2rem" class="text-center">

        			<!-------------Note------------>
        			<div class="d-flex justify-content-center flex-wrap">
        				<div class="m-sm-1 m-md-2 position-relative">
        					<img style="height: 17rem;" src="<?php echo $path_img; ?>briefing.png" alt="Genera expectativa" />
        					<div class="note-btl top-note-btl text-white card-n1">
        						<strong>
                      <span class="text-red mt-2 hurme-bold-4">Briefing de requerimientos</span>
                      Recabamos los datos de tu empresa, del proyecto y los objetivos. 
                    </strong>
        					</div>
        				</div>
        				<div class="m-sm-1 m-md-2 position-relative">
        					<img style="height: 17rem;" src="<?php echo $path_img; ?>concepto.png" alt="Informa a tus clientes" />
        					<div class="note-btl top-note-btl text-gray card-n1">
        						<strong>
                      <span class="text-light-gray mt-2 hurme-bold-4">Conceptualización y desarrollo creativo</span>
                      Creamos ideas originales y efectivas para adaptarlas a tu marca y sus necesidades.
                    </strong>
        					</div>							
        				</div>
        				<div class="m-sm-1 m-md-2 position-relative">
        					<img style="height: 17rem;" src="<?php echo $path_img; ?>diseño.png" alt="Conecta y logra" />
        					<div class="note-btl top-note-btl text-white card-n1">
        						<strong>
                    <span class="text-red mt-2 hurme-bold-4">Diseño de artes gráficas</span>
                      Plasmamos nuestra experiencia y amor por el diseño en cada arte.
                    </strong>
        					</div>							
        				</div>
        			</div>
        			<!-------------Note------------>
        		</section>
        		<!------------------Game-------------------->
          </div>
          </div>
				</div>
				<!-----------------------Service component tab5----------------------------->

        <!-----------------------Contact----------------------------->
				<?php get_template_part('components/form-quote-request2', 'full', [
        'image' => $path_img . 'girl-icon.svg',
        'title' => 'Queremos conocer tu proyecto',
        'idwebsite' => 'ilustracion_digitalWebsite',
        'idemail' => 'branding1email',
        'idform' => 'branding1',
        'idparagraph' => 'pbranding1',
        'titleClass' => 'title-contact-fontmd title-contact-w36 text-center',
        'imgClass' => 'image-contact-margin',
    ]); ?>
				<!-----------------------Contact----------------------------->
      </div>
      <!------------Marketing de contenidos ------------>
      <div id="ux_ui" class="tab-pane fade">
        <br />
        <!----------------------Main---------------------->
        <section class="p-0">
          <div class="bg-light-gray py-0">
            <h2 class="big-title text-red my-2 text-center">
              Diseño UX & UI
            </h2>
            <!-------------------Card---------------------->
            <div class="py-2">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-11 col-lg-6 d-flex align-items-center justify-content-center">
                    <img
                      src="<?php echo $directory_branding_imgs; ?>iMac Perspective Screen Mockup 1.png"
                      alt="Mechanding mesa"
                      class="img-fluid"
                    />
                  </div>
                  <div class="col-md-10 col-lg-6 d-flex align-items-center">
                    <div class="card bg-transparent border-0">
                      <div class="card-body">
                        <h3 class="subtitle-marketing text-light-purple text-left p-1">
                          Genera la mejor experiencia de usuario en tu plataforma
                        </h3>
                        <p class="text-justify text-light-gray p-1">

                        Nos basamos en el diseño centrado en el usuario para crear
                        <b class="text-light-gray font-weight-bold hurme-bold-4">
                          plataformas intuitivas.
                          </b> <br> <br>
                          Partimos de la investigación de las necesidades del usuario y del análisis de la usabilidad de tu interfaz para proponerte un
                          <b class="text-light-gray font-weight-bold hurme-bold-4">
                            diseño efectivo que garantice la mejor experiencia de usuario.
                          </b> <br> <br>

                          Hacemos que la navegabilidad sea
                          <b class="text-light-gray font-weight-bold hurme-bold-4">
                            clara, sencilla y que encamine al usuario a tomar una acción
                          </b>concreta.
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
                  class="row flex-column-reverse flex-lg-row justify-content-center align-items-center align-items-lg-end mt-5"
                >
                  <div class="col-md-11 col-lg-6 py-2 d-flex align-items-end justify-content-end">
                    <div class="card bg-transparent border-0">
                      <div class="card-body pb-0">
                        <p class="text-right semi-title text-light-purple">
                          Genera una <br>
                          <span class="hurme-bold-4">interacción intuitiva</span> <br>
                          en tu interfaz.
                        </p>
                        <div class="d-flex justify-content-end">
                          <svg width="177" height="4" viewBox="0 0 177 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.49193 3.2865e-07L173.516 1.51926e-05C175.438 1.53607e-05 177 0.896557 177 2C177 3.10345 175.438 4 173.516 4L3.48442 3.99998C1.56198 3.99998 7.83793e-08 3.10343 1.74845e-07 1.99999C0.0075076 0.896542 1.56949 1.60585e-07 3.49193 3.2865e-07Z" fill="#FBC000"/>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-10 col-lg-6 py-2 text-center mt-5">
                    <img
                      src="<?php echo $directory_branding_imgs; ?>Group 371.png"
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
        <?php get_template_part('components/border-circle', 'full', [
            'color' => '#ED1164',
            'position' => '',
        ]); ?>
        <!--------------------bola-Left------------------------->

        <!-----------------------Service component tab5----------------------------->
				<div class="section-service">
					<h2 class="big-title text-red text-center">El servicio incluye:</h2>

					<div class="text-center">
						<svg width="80" height="4" viewBox="0 0 80 4" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M77.7269 3.12186H1.56093C0.699727 3.12186 0 2.42214 0 1.56093C0 0.699732 0.699727 0 1.56093 0H77.7302C78.5914 0 79.2912 0.699732 79.2912 1.56093C79.2878 2.42214 78.5881 3.12186 77.7269 3.12186Z" fill="#ED1164"/>
						</svg>
					</div>

					<div class="container">
						<div class="d-flex flex-column align-items-center mb-n1-5">
							<div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $directory_branding_imgs . 'tab5_first_image.png',
            'text' => '<span class="font-weight-bold hurme-bold-4 text-gray-black">Investigación del perfil <br>
                    de usuario.</span>',
            'line' => $path_img . 'line-rosado.svg',
        ]); ?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $directory_branding_imgs . 'tab5_second_image.png',
            'text' =>
                '<span class="font-weight-bold hurme-bold-4 text-gray-black">Desarrollo del <br> mapa de navegación, animación y <br>  transiciones.</span>',
            'line' => $directory_branding_imgs . 'line_purple.svg',
        ]); ?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $directory_branding_imgs . 'tab5_third_image.png',
            'text' => '<span class="font-weight-bold hurme-bold-4 text-gray-black">
                    Diseño de diagramas de navegación simulando interacciones </span>
                    <p>Uso de plataformas como Figma, Adobe Xd y otros.</p>',
            'line' => $path_img . 'line-rosado.svg',
        ]); ?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $directory_branding_imgs . 'tab5_fourth_image.png',
            'text' =>
                '<span class="font-weight-bold hurme-bold-4 text-gray-black">Testing.</span>',
            'line' => $directory_branding_imgs . 'line_purple.svg',
        ]); ?>
							</div>
							<div class="d-none d-lg-flex">
								<div class="container-center-service element-final-center"></div>
							</div>
						</div>
					</div>
          <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -7rem;'>
              <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/diseño UI UX_Mesa de trabajo 1 1.png">
          </div>
				</div>
				<!-----------------------Service component tab5----------------------------->

              <!-----------------------Circle Right----------------------------->
              <div class='w-100 text-right' style="margin-bottom: -10rem">
                <?php
                $parameters = ['color' => '#681484', 'position' => 'right'];
                get_template_part(
                    'components/border-circle',
                    'full',
                    $parameters
                );
                ?>
              </div>
              <!-----------------------Circle Right----------------------------->

        <div class='mt-5'>
        <!-----------------------Contact----------------------------->
				<?php get_template_part('components/form-quote-request2', 'full', [
        'image' => $path_img . 'girl-icon.svg',
        'title' => '¿Cómo te ayudamos?',
        'idwebsite' => 'ux_uiWebsite',
        'idemail' => 'branding2email',
        'idform' => 'branding2',
        'idparagraph' => 'pbranding2',
        'titleClass' => 'title-contact-fontlg title-contact-w36 text-center',
        'imgClass' => 'image-contact-margin',
    ]); ?>
				<!-----------------------Contact----------------------------->
      </div>
    </div>
  </div>
</section>
<section>
  <h2 class="big-title text-red my-4 text-center">PORTAFOLIO</h2>
  <div>
    <div>
      <?php get_template_part('components/masonry-diseño'); ?>
    </div>

    <div class="container" style="margin-top: 5rem"></div>
  </div>
</section>

<?php get_footer(); ?>
