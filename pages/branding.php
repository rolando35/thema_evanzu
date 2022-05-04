<?php
/* 
    Template Name: Branding
*/

get_header();
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
    margin-top: -4rem;
  }

  .semi-title {
    font-size: 24px;
    line-height: 24px;
  }

@media only screen and (max-width: 992px) {

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
          src="<?php echo $directory_branding_imgs . 'banner_brading.png'; ?>"
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
              src="<?php echo $directory_branding_imgs . 'title_icon.svg'; ?>"
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
        $lista = [
            [
                'svg' => 'digital.svg',
                'title' => 'Logo
                  <br />
                  Branding',
                'href' => '#home',
                'active' => true,
                'path' => $directory_branding_imgs,
            ],
            [
                'svg' => 'icon-diseño.svg',
                'title' => 'Diseño
                <br />
                 Publicitario',
                'href' => '#redes_sociales',
                'path' => $directory_branding_imgs,
            ],
            [
                'svg' => 'merchandancin.svg',
                'title' => 'Merchandising
                  <br />
                 & Impresos',
                'href' => '#menu2',
                'path' => $directory_branding_imgs,
            ],
            [
                'svg' => 'icon-tv.svg',
                'title' => 'Ilustración
        <br />
        digital',
                'href' => '#menu3',
                'path' => $directory_branding_imgs,
            ],
            [
                'svg' => 'icon-brain.svg',
                'title' => 'Diseño
        <br />
       UX & UI',
                'href' => '#menu4',
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
                <?php get_template_part(
                    'components/branding/service-left',
                    'full',
                    [
                        'image' => $directory_branding_imgs . 'manual_icon.svg',
                        'text' => '
                          Plasmamos tu ADN corporativo en un documento guía para las diversas 
                          formas de comunicación en función de tu negocio: Restaurantes, ONG’s, 
                          Moda, Estudios Contables y Servicios.',
                        'title' => 'Manual de marca',
                        'line' => $directory_branding_imgs . 'line-red.svg',
                    ]
                ); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php get_template_part(
                    'components/branding/service-right',
                    'full',
                    [
                        'image' => $directory_branding_imgs . 'logog_a.svg',
                        'text' => 'Te ofrecemos la mejor solución para identificar tu marca, tener identidad y presencia en el mercado.
                    Diseñamos logotipos originales y con personalidad propia.
                ',
                        'title' => 'Logos',
                        'line' =>
                            $directory_branding_imgs . 'line-purple-higth.svg',
                    ]
                ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part(
                    'components/branding/service-left',
                    'full',
                    [
                        'image' => $directory_branding_imgs . 'notes_icon.svg',
                        'text' => '
                        Creamos nombres y slogans para empresas que resuenan, enganchan y son fáciles de recordar. 
                        Serán la principal publicidad de tu marca y haremos que sea efectiva.
                        ',
                        'title' => ' Naming y slogans',
                        'line' => $directory_branding_imgs . 'line-red.svg',
                    ]
                ); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php get_template_part(
                    'components/branding/service-right',
                    'full',
                    [
                        'image' => $directory_branding_imgs . 'box-icon.svg',
                        'text' => '
                    Diseñamos empaques funcionales con el toque estético y creativo que necesita tu marca.
                    Servicio dirigido a empresas de ventas online que buscan crear una experiencia de unboxing 
                    cautivante y posteable. Diseñamos y producimos empaques, bolsas, cajas, envases y otros..
                  ',
                        'tall' => 'height: 100px;',
                        'title' => 'Packaging',
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
        'idwebsite' => 'branding7website',
        'idemail' => 'branding7email',
        'idform' => 'branding7',
        'idparagraph' => 'pbranding7',
        'titleClass' =>'title-contact-fontlg title-contact-w36 text-center',
				'imgClass' => 'image-contact-margin'
    ]); ?>
				<!-----------------------Contact----------------------------->
        </div>
      </div>
      <!------------REDES SOCIALES ------------>
      <div id="redes_sociales" class="tab-pane fade">
        <br />
        <!----------------------Main---------------------->
        <section class="p-0">
          <div class="bg-light-gray py-0">
            <div class="big-title text-red my-2 text-center">
              Diseño Publicitario
            </div>
            <!-------------------Card---------------------->
          <div class="container">
            <div class="py-2">
              <div class="container">
                 <div class="row justify-content-center">
                  <div class="col-md-11 col-lg-6 d-flex justify-content-lg-end">
                    <img
                      src="<?php echo $directory_branding_imgs ?>bim.png"
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
                              Desarrollamos todo tipo de piezas de comunicación para publicidad (digital, impresa y en diferentes soportes y formatos) con un <span class="font-weight-bold text-gray-black"> diseño claro con elementos impactantes, fáciles de recordar,</span> concisos y al mismo tiempo, que  <span class="font-weight-bold text-gray-black">conectan emocionalmente</span>span con la audiencia.
                        </p>
                        <p class="text-justify text-light-gray p-1">                       
                          <span class="font-weight-bold text-gray-black"> Transmite tu mensaje de manera atrayente y funcional.</span>
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
                                  src="<?php echo $directory_branding_imgs ?>Comunicacion_visual.png"
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
                <?php get_template_part('components/branding/service-left-double', 'full', [
                    'image-one' => $directory_branding_imgs .'volante.svg',
                    'image-two' => $directory_branding_imgs .'diptico.svg',
                    'title-one' => 'Volante',
                    'title-two' => 'Diptico',
                    'line-one' => $directory_branding_imgs.'line-rosado-large.svg',
                    'line-two' => $directory_branding_imgs.'line-rosado.svg',
                ]); ?>

                  
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                

                <?php get_template_part(
                    'components/branding/service-right-double',
                    'full',
                     [
                        'image-one' => $directory_branding_imgs.'colgante.svg',
                        'image-two' => $directory_branding_imgs.'triptico.svg',
                        'title-one' => 'Colgante',
                        'title-two' => 'Triptico',
                        'line-one' => $directory_branding_imgs .'line-purple-tiny.svg',
                        'line-two' => $directory_branding_imgs .'line_purple.svg',
                    ]
                ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/branding/service-left-double', 'full', [
                    'image-one' => $directory_branding_imgs.'stopper.svg',
                    'image-two' => $directory_branding_imgs.'jalavista.svg',
                    'title-one' => 'Stopper',
                    'title-two' => 'Jalavista',
                    'line-one' => $directory_branding_imgs.'line-rosado-large.svg',
                    'line-two' => $directory_branding_imgs.'line-rosado.svg',
                ]); ?>

                  
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                

                <?php get_template_part(
                    'components/branding/service-right-double',
                    'full',
                     [
                        'image-one' => $directory_branding_imgs.'loading.svg',
                        'image-two' => $directory_branding_imgs.'flyer.svg',
                        'image' => $path_img . 'second-icon-service.svg',
                        'title-one' => 'Landing Pages',
                        'title-two' => 'Flyer',
                        'line-one' => $directory_branding_imgs .'line-purple-tiny.svg',
                        'line-two' => $directory_branding_imgs .'line_purple.svg',
                    ]
                ); ?>
              </div>

               <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/branding/service-left-double', 'full', [
                    'image-one' => $directory_branding_imgs.'bannerP.svg',
                    'image-two' => $directory_branding_imgs.'gif.svg',
                    'title-one' => 'Banners <br>digitales',
                    'title-two' => 'gif',
                    'line-one' => $directory_branding_imgs.'line-rosado-large.svg',
                    'line-two' => $directory_branding_imgs.'line-rosado.svg',
                ]); ?>

                  
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                

                <?php get_template_part(
                    'components/branding/service-right-double',
                    'full',
                     [
                        'image-one' => $directory_branding_imgs.'poster.svg',
                        'image-two' => $directory_branding_imgs.'bannersI.svg',
                        'image' => $path_img . 'second-icon-service.svg',
                        'title-one' => 'Poster',
                        'title-two' => 'Banners<br> para impresión',
                        'line-one' => $directory_branding_imgs .'line-purple-tiny.svg',
                        'line-two' => $directory_branding_imgs .'line_purple.svg',
                    ]
                ); ?>
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
        <?php get_template_part('components/form-quote-request2', 'full', [
            'image' => $path_img . 'girl-icon.svg',
            'title' => 'Potencia tu marca',
            'idwebsite' => 'branding0website',
            'idemail' => 'branding0email',
            'idform' => 'branding0',
            'idparagraph' => 'pbranding0',
            'titleClass' =>'title-contact-fontlg title-contact-w36 text-center',
            'imgClass' => 'image-contact-margin'
        ]); ?>                
        <!-----------------------Contanct----------------------------->
      </div>
      <!------------SEO ------------>
      <div id="menu2" class="tab-pane fade">
        <br />
        <!----------------------Main---------------------->
        <section class="p-0">
          <div class="bg-light-gray py-0">
            <div class="big-title text-red my-2 text-center">
            Merchandising & Impresos
            </div>
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
                          <b class="text-light-gray font-weight-bold hurme-simple">
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
				<div class="big-title text-red text-center">Ofrecemos:</div>

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
                        <strong>Merchandising</strong>
                        <p>
                        Logra que las personas descubran, reconozcan y difundan tu marca con artículos como: Gorras, polos, lapiceros, tazas, Soleras, llaveros, pines, tomados y mucho más.
                        </p>
                      </div>
                    ',
                    'line' => $directory_branding_imgs . 'line-red.svg',
                ]); ?>
							<div class="d-none d-lg-block container-center-service">
                <div class="element-center-service"></div>
							</div>
							<?php get_template_part('components/service-right-long', 'full', [
                      'image' => $directory_branding_imgs . 'ofrecemos2.png',
                      'text' => '
                        <div class="hight-content">
                          <b>Impresos</b>
    
                          Partimos de las necesidades de comunicación para la <b>maquetación de contenido que cautive</b> al público objetivo, informe efectivamente y refuerce la identidad corporativa.
                          
                          <p class="text-red font-weight-bold">Incluye:</p> 
                          <i>
                          Hojas membretadas, tarjetas de presentación personales y corporativas, brochures corporativos, banners publicitarios, sobres y bolsas, volantes, dipticos y tripticos, y otras publicaciones como: libros, revistas, periódicos, catálogos, carátulas, cuentos y otros.
                          </i>
                        </div>
                      ',
                      'line' => $directory_branding_imgs . 'line-purple-higth1.svg',
                  ]); ?>
					</div>

            <div class="d-flex flex-column flex-md-row">
							<?php get_template_part('components/service-left-long', 'full', [
            'image' => $directory_branding_imgs . 'ofrecemos3.png',
            'text' => ' 
                <div class="hight-content1">
                  <b>Señalética corporativa </b>

                  <p>
                  Ideamos señaléticas para espacios interiores como oficinas, puntos de venta y atención al cliente. Trabajamos señalamiento de contingencia sanitaria, material POP, entre otros. Nos aseguramos de que sean originales, fáciles de percibir y de interpretar.
                  </p> 
                  <b class="text-red">Incluye:</b>
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
						<div class="d-none d-lg-flex">
							<div class="container-center-service element-final-center"></div>
						</div>
					</div>
				</div>

        <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -7rem;'>
            <img  class="" src="<?php echo $directory_branding_imgs .
                'Piezas de Comunicación 1.png'; ?>">
        </div>
			</div>
        <!-----------------------Service----------------------------->

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
          <?php get_template_part(
              'components/form-quote-request2',
              'full',
              [
                'image' => $path_img . 'girl-icon.svg',
                'title' => 'Te escuchamos',
                'idwebsite' => 'branding5website',
                'idemail' => 'branding5email',
                'idform' => 'branding5',
                'idparagraph' => 'pbranding5',
                'titleClass' =>'title-contact-fontlg title-contact-w36 text-center',
                'imgClass' => 'image-contact-margin'
              ]
          ); ?>
          <!-----------------------Contact----------------------------->
        </div>

      </div>
      <!------------Growth hacking ------------>
      <div id="menu3" class="tab-pane fade">
        <br />
        <!----------------------Main---------------------->
        <section class="p-0">
          <div class="bg-light-gray py-0">
            <div class="big-title text-red my-2 text-center">
              Ilustración digital
            </div>
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
                        <b class="text-light-gray font-weight-bold hurme-simple">
                          imágenes exclusivas y personalizadas.
                        </b> Manejamos el 
                        <b class="text-light-gray font-weight-bold hurme-simple">
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
            <div class="big-title text-red text-center title-width">Ofrecemos ilustración digital para:</div>
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
            'text' => '<span class="font-weight-bold text-gray-black">Personajes para videos <br>
                      corporativos.</span>',
            'line' => $path_img . 'line-rosado.svg',
        ]); ?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $directory_branding_imgs . 'ilustracion2.png',
            'text' =>
                '<span class="font-weight-bold text-gray-black">Dirección de arte para <br> campañas publicitarias.</span>',
            'line' => $directory_branding_imgs . 'line_purple.svg',
        ]); ?>
							</div>

							

              <div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $directory_branding_imgs . 'ilustracion3.png',
            'text' =>
                '<span class="font-weight-bold text-gray-black">Recursos para páginas web.</span>',
            'line' => $path_img . 'line-rosado.svg',
        ]); ?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<div class="d-none d-lg-block container-empty-service"></div>
							</div>

							<div class="d-none d-lg-flex">
								<div class="container-center-service element-final-center"></div>
							</div>
						</div>
					</div>
          <div class="position-relative d-flex justify-content-center">
              <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/Group 86.png">
          </div>
          <div>
          <div class="" style="background: #f7f7f7; padding: 2rem 0;">
            <h2 class="how text-center">¿Cómo lo hacemos?</h2>
            <!------------------Game-------------------->
        		<section style="margin-top: 2rem" class="text-center">

        			<!-------------Note------------>
        			<div class="d-flex justify-content-center flex-wrap">
        				<div class="m-sm-1 m-md-2 position-relative">
        					<img style="height: 17rem;" src="<?php echo $path_img; ?>Group-607.png" alt="Genera expectativa" />
        					<div class="note-btl top-note-btl text-white card-n1">
        						<strong>
                      <span class="text-red mt-2">Briefing de requerimientos</span>
                      Recabamos los datos de tu empresa, del proyecto y los objetivos. 
                    </strong>
        					</div>
        				</div>
        				<div class="m-sm-1 m-md-2 position-relative">
        					<img style="height: 17rem;" src="<?php echo $path_img; ?>Group-609.png" alt="Informa a tus clientes" />
        					<div class="note-btl top-note-btl text-gray card-n1">
        						<strong>
                      <span class="text-light-gray mt-2">Conceptualización y desarrollo creativo</span>
                      Creamos ideas originales y efectivas para adaptarlas a tu marca y sus necesidades.
                    </strong>
        					</div>							
        				</div>
        				<div class="m-sm-1 m-md-2 position-relative">
        					<img style="height: 17rem;" src="<?php echo $path_img; ?>Group-610.png" alt="Conecta y logra" />
        					<div class="note-btl top-note-btl text-white card-n1">
        						<strong>
                    <span class="text-red mt-2">Diseño de artes gráficas</span>
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
        'idwebsite' => 'branding1website',
        'idemail' => 'branding1email',
        'idform' => 'branding1',
        'idparagraph' => 'pbranding1',
        'titleClass' =>'title-contact-fontmd title-contact-w36 text-center',
        'imgClass' => 'image-contact-margin'
    ]); ?>
				<!-----------------------Contact----------------------------->
      </div>
      <!------------Marketing de contenidos ------------>
      <div id="menu4" class="tab-pane fade">
        <br />
        <!----------------------Main---------------------->
        <section class="p-0">
          <div class="bg-light-gray py-0">
            <div class="big-title text-red my-2 text-center">
              Diseño UX & UI
            </div>
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
                        <b class="text-light-gray font-weight-bold hurme-simple">
                          plataformas intuitivas.
                          </b> <br> <br>
                          Partimos de la investigación de las necesidades del usuario y del análisis de la usabilidad de tu interfaz para proponerte un
                          <b class="text-light-gray font-weight-bold hurme-simple">
                            diseño efectivo que garantice la mejor experiencia de usuario.
                          </b> <br> <br>

                          Hacemos que la navegabilidad sea
                          <b class="text-light-gray font-weight-bold hurme-simple">
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
                          <span class="hurme-simple">interacción intuitiva</span> <br>
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
					<div class="big-title text-red text-center">El servicio incluye:</div>

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
            'text' => '<span class="font-weight-bold text-gray-black">Investigación del perfil <br>
                    de usuario.</span>',
            'line' => $path_img . 'line-rosado.svg',
        ]); ?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $directory_branding_imgs . 'tab5_second_image.png',
            'text' =>
                '<span class="font-weight-bold text-gray-black">Desarrollo del <br> mapa de navegación, animación y <br>  transiciones.</span>',
            'line' => $directory_branding_imgs . 'line_purple.svg',
        ]); ?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $directory_branding_imgs . 'tab5_third_image.png',
            'text' => '<span class="font-weight-bold text-gray-black">
                    Diseño de diagramas de navegación simulando interacciones </span>
                    <p>Uso de plataformas como Figma, Adobe Xd y otros.</p>',
            'line' => $path_img . 'line-rosado.svg',
        ]); ?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $directory_branding_imgs . 'tab5_fourth_image.png',
            'text' =>
                '<span class="font-weight-bold text-gray-black">Testing.</span>',
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
        'idwebsite' => 'branding2website',
        'idemail' => 'branding2email',
        'idform' => 'branding2',
        'idparagraph' => 'pbranding2',
        'titleClass' =>'title-contact-fontlg title-contact-w36 text-center',
        'imgClass' => 'image-contact-margin'
    ]); ?>
				<!-----------------------Contact----------------------------->
      </div>
    </div>
  </div>
</section>
<section>
  <div class="big-title text-red my-4 text-center">PORTAFOLIO</div>
  <div>
    <div>
      <?php get_template_part('components/masonry-diseño'); ?>
    </div>

    <div class="container" style="margin-top: 5rem"></div>
  </div>
</section>

<?php get_footer(); ?>
