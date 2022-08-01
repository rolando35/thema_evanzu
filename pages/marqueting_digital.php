<?php
/* 
    Template Name: Marketing
*/
get_header('', array( 'title' => 'Agencia de marketing digital, gestión redes sociales, posicionamiento',
                   'description' => 'Agencia de gestión de redes sociales, publicidad en plataformas digitales, posicionamiento SEO y contenidos varios para lanzamientos y promoción de productos y servicios', 
                    'keywords' => '',
                     'richsnippets' => '<script type="application/ld+json">
            {
              "@context": "https://schema.org/", 
              "@type": "BreadcrumbList", 
              "itemListElement": [{
                "@type": "ListItem", 
                "position": 1, 
                "name": "Publicidad digital",
                "item": "https://evanzu.com/new_evanzu/marketing-digital/#publicidad_digital"  
              },{
                "@type": "ListItem", 
                "position": 2, 
                "name": "Gestión de redes",
                "item": "https://evanzu.com/new_evanzu/marketing-digital/#redes_sociales"  
              },{
                "@type": "ListItem", 
                "position": 3, 
                "name": "Posicionamiento SEO",
                "item": "https://evanzu.com/new_evanzu/marketing-digital/#seo"  
              },{
                "@type": "ListItem", 
                "position": 4, 
                "name": "Growth hacking",
                "item": "https://evanzu.com/new_evanzu/marketing-digital/#growth_hacking"  
              },{
                "@type": "ListItem", 
                "position": 5, 
                "name": "Marketing de contenidos",
                "item": "https://evanzu.com/new_evanzu/marketing-digital/#marketing_contenidos"  
              }]
            }
            </script>'
                   ));
$directory_imgs =
    get_template_directory_uri() . '/assets/images/marketing-digital/';
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



.develop-title{
  font-family: running-text;
  font-size: 2.7rem; 
  line-height: 119px; 
  color: #FFFFFF;
  margin-bottom: -2.8rem;
}

.text-paragraph {
    font-family: Hurme Geometric Sans 4;
    color: #FFFFFF;
    font-weight: 900;
    font-size: 4.2rem;
    margin: 0;
    margin-bottom: -2.5rem;
}

.text-paragraph2 {
    font-family: Hurme Geometric Sans 4;
    color: #FFFFFF;
    font-weight: 900;
    font-size: 5.25rem;
    margin: 0;
    margin-bottom: -9px;
}

.margin-neg {
  margin-bottom: -9rem;
}

.margin-circle{
  margin-bottom: -6rem;
}


@media only screen and (max-width: 1200px) {
  .text-paragraph {
		font-size: 2.2rem !important;
    line-height: 6rem;
  }
	.text-paragraph2 {
    font-size: 3.25rem;
	}
.develop-title{
  font-size: 1.7rem;
  line-height: 4rem;
	}
}

  @media only screen and (max-width: 870px) {
  .text-paragraph {
		font-size: 2.2rem !important;
    line-height: 6rem;
  }
	.text-paragraph2 {
    font-size: 3.25rem;
	}
	.develop-title{
  font-size: 1.7rem;
  line-height: 4rem;
	}
  .margin-circle{
  margin-bottom: 0 !important;
}
}

  @media only screen and (max-width: 669px) {
	.flex-colum {
		max-width: none;
	}
	.carousel-caption{
		top: 1rem !important;
	} 
	.carousel-item > img {
		height: 25rem !important;
	}
}
  @media only screen and (max-width: 980px) {
  .margin-neg {
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
                        <i class="btn-open-i" >Ahora que estás inclinando la cabeza para leer, escríbenos.</i><br>
                        <span class="hurme-bold-4  btn-open-modal">ESCRÍBENOS</span>
                    </div>
                </div>
                <div class="mt-5c" style="z-index: 1;">
                    <?php get_template_part('components/modal/modal', 'full'); ?>
                </div>
        </div>    
    <!--------------------- Button Modal ---------------------> 


<section id="slider">

  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!-- <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul> -->

    <div class="float-rectangle-banner d-none d-xl-block">
      <div id="rectangle" class="text-center my-0 mx-auto"></div>
    </div>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100" src="<?php echo get_option('evanzu')[
            'carrusell-image-one'
        ]; ?>">
          	  <div class="carousel-caption-branding">
                  <h1 class="develop-title" data-wow-delay="0.3s">Somos una agencia de</h1>
                  <p class="title-bold-branding mt-4 mt-lg-0 hurme-bold-4 mt-sm-5 " data-wow-delay="0.3s">MARKETING</p>
                  <div class="d-flex align-center mt-n4">
                    <p class="text-paragraph2 mr-2" data-wow-delay="0.3s">DIGITAL</p>
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing-digital/title-icon.svg"
                      />
                  </div>
                  <div class="text-subtitle-btl">
                      Te ayudamos a conectar con tus clientes a través de <br>canales digitales, plataformas sociales y mucho más.
                  </div>
                    <div class="mt-3 text-left text-white">
                      Quieres resultados. 
                      <button onclick="ButtonRedirectForm();" class="btn-btl">
                        <span >¡Desafíanos con tu proyecto!</span>
                      </button>
                    </div>
					     </div>	
        </div>
      <div class="carousel-item">
        <img class="w-100" alt="Campaña digital para el lanzamiento de la marca BMatic" 
             title="Evanzu servicio Marketing Digital" 
             src="<?php echo get_option('evanzu')['carrusell-image-two']; ?>">
           <div class="carousel-caption-branding">
                  <h1 class="develop-title" data-wow-delay="0.3s">Somos una agencia de</h1>
                  <p class="title-bold-branding mt-4 mt-lg-0 hurme-bold-4 " data-wow-delay="0.3s">MARKETING</p>
                  <div class="d-flex align-center mt-n4">
                    <p class="text-paragraph2 mr-2" data-wow-delay="0.3s">DIGITAL</p>
                    <img 
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing-digital/title-icon.svg"
                      />
                  </div>
                  <div class="text-subtitle-btl">
                      Te ayudamos a conectar con tus clientes a través de <br>canales digitales, plataformas sociales y mucho más.
                  </div>
                    <div class="mt-3 text-left text-white">
                      Quieres resultados. 
                      <button onclick="ButtonRedirectForm();" class="btn-btl">
                        <span >¡Desafíanos con tu proyecto!</span>
                      </button>
                    </div>
					     </div>	
      </div>
      <!-- <div class="carousel-item">
        <img src="<?php echo get_option('evanzu')['carrusell-image-one']; ?>">
      </div> -->
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
        class="nav nav-pills nav-tabs-sticky justify-content-center"
        id="nav-iconos"
        role="tablist"
      >
        <?php
        $lista = [
            [
                'svg' => 'first-tab.svg',
                'title' => 'Publicidad
        <br />
        digital',
                'href' => '#publicidad_digital',
                'active' => true,
                'path' => $directory_imgs,
            ],
            [
                'svg' => 'second-tab.svg',
                'title' => 'Gestión
        <br />
        de Redes',
                'href' => '#redes_sociales',
                'path' => $directory_imgs,
            ],
            [
                'svg' => 'third-tab.svg',
                'title' => 'Posicionamiento
        <br />
        SEO',
                'href' => '#seo',
                'path' => $directory_imgs,
            ],
            [
                'svg' => 'quarter-tab.svg',
                'title' => 'Growth
        <br />
        hacking',
                'href' => '#growth_hacking',
                'path' => $directory_imgs,
            ],
            [
                'svg' => 'fifth-tab.svg',
                'title' => 'Marketing de
        <br />
        contenidos',
                'href' => '#marketing_contenidos',
                'path' => $directory_imgs,
            ],
        ];
        foreach ($lista as $data) {
            get_template_part('components/circle-nav-2', 'full', $data);
        }
        ?>
      </ul>
    </div>
    
    <!-- Tab panes -->
    <div class="tab-content ">
      <div id="publicidad_digital" class="tab-pane active">
        <br />
        <div class="bg-light-gray">
          <div class="big-title  text-red mt-5 pt-2 text-center">
            Publicidad Digital
          </div>
            <div class="py-2">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-11 col-lg-6 d-flex align-items-center justify-content-center">
                      <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/cellphone-publicidad-digital.svg"
                  alt="Campaña por Google Adwords y publicidad en redes sociales."
                  title="Publicidad en Plataformas Digitales"
                />
                  </div>
                  <div class="col-md-10 col-lg-6">
                    <div class="card bg-transparent border-0">
                      <div class="card-body">
                          <h3 class="subtitle-marketing  text-gray-black text-left p-1">
                          Atrae a tu próximo comprador con publicidad en canales digitales.
                          </h3>

                        <div class="my-3 text-light-gray">
                          Definimos el medio ideal de publicidad en función de tus objetivos, tu producto y el perfil de tus clientes.
                        </div>
                      
                        <div class="text-red subtitle-marketing subtitle-spacing my-1">
                          Las plataformas digitales que manejamos:
                        </div>
                        <p class="text-light-gray">
                       <span class="display-4">.</span><span class="hurme-bold-4">Google Adwords</span> <i>(Búsqueda, Display, Youtube,
                          Shopping y App móviles).</i> 
                        </p>
                        <p class="text-light-gray">
                          <span class="display-4">.</span>
                          <span class="hurme-bold-4">Publicidad en plataformas sociales</span> <i>(Facebook,
                          Instagram, Twitter, Linkedin, TikTok, Waze, Spotify, Shazam, y
                          otros).</i> 
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="py-2 card-activation-2">
              <div class="container">
                <div  class="row mt-3">
                  <div class="col-md-11 col-lg-6 py-2">
                  <div class="py-5">
                        
                          <div class="text-red subtitle-marketing  my-3">
                  Ideal para promocionar
                </div>
                <p class="text-justify text-light-gray">
                  Ventas, tráfico web, consideración de marca, productos,
                  servicios, lanzamientos, ofertas, aplicaciones móviles y
                  promociones. 
                </p>

                <p class="text-justify text-light-gray">
                  Sea cual sea tu objetivo publicitario (visitas a
                  tu web, vistas de videos, conversiones, descargas de
                  aplicaciones, visitas o llamadas a tu negocio físico, etc) te
                  ayudaremos a alcanzarlo a través de los diversos formatos de
                  publicidad.
                </p>

                <p class="text-justify text-light-gray">
                  Da el primer paso para <span class="hurme-bold-4">promocionar</span> tus productos.
                </p> 
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 py-5 left-conten-description">
                  <img
                    class="w-100"
                    src="<?php echo $directory_imgs;?>laptop-marketing.png"        
                    alt="Promociona y aumenta tus ventas por distintos canales digitales."
                    title="Publicidad Digital"
                  />
                  </div>
                </div>
              </div>
            </div>

        </div>
         <!--------------------bola-Left------------------------->
        <?php get_template_part('components/border-circle', 'full', [
            'color' => '#ED1164',
            'position' => '',
        ]); ?>
        <!--------------------bola-Left------------------------->

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
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'first-icon-service.svg',
                    'text' => '<span class="hurme-bold-4 text-gray-black">Plan de medios digitales</span> <br />
                    (definir los canales con los <br />
                    que tu público interactúa)',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $directory_imgs . 'secon-icon-righ.svg',
                        'text' => 'Definir el <span class="hurme-bold-4 text-gray-black">formato </span> <br />
                    de <span class="hurme-bold-4">publicidad</span> adecuado.
                ',
                        'line' => $directory_imgs . 'line-point-yellow.svg',
                    ]
                ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'contain-define.svg',
                    'text' => ' <span class="hurme-bold-4 text-gray-black">
                      Definición de contenidos <br />
                      publicitarios</span>
                    (Mensaje y <br />
                    gráfica o audiovisual).',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $directory_imgs . 'deploy-configuration.svg',
                        'text' => ' <span class="hurme-bold-4 text-gray-black"
                      >Despliegue y configuración <br />
                      de la campaña en la
                    </span>
                    <br />plataforma seleccionada.',
                        'line' => $directory_imgs . 'line-point-yellow.svg',
                    ]
                ); ?>
              </div>

               <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'rocket-optimisation.svg',
                    'text' => '<span class="hurme-bold-4 text-gray-black">Optimización</span> de la <br />campaña 
                .',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service">
                </div>
                    <?php get_template_part(
                        'components/btl/service-right',
                        'full',
                        [
                            'image' => $directory_imgs . 'periodic-reports.svg',
                            'text' => ' <span class="hurme-bold-4 text-gray-black">Reportes <br />
                      periódicos.</span>
                ',
                            'line' => $directory_imgs . 'line-point-yellow.svg',
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
          <div class="position-relative d-flex justify-content-center" style='margin-bottom: -10rem; height: 20rem;'>
            <img class="d-none d-lg-block" title="Publicidad digital proceso" alt="Optimizamos tus campañas digitales" src="<?php echo $directory_imgs; ?>root-tree.svg">
          </div>

        <!-----------------------Contanct----------------------------->
            <?php get_template_part('components/form-quote-request2', 'full', [
                'image' => $directory_imgs . 'form-quote-request.svg',
                'title' => 'Define tu presupuesto',
                'idwebsite' => 'publicidad_digitalWebsite',
                'idemail' => 'marketing1email',
                'idform' => 'marketing1',
                'idparagraph' => 'pmarketing1',
                'titleClass' =>'title-contact-fontlg title-contact-w38 text-left pl-lg-5',
                'imgClass' => 'image-contact-margin2'
            ]); ?>                
        <!-----------------------Contanct----------------------------->
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
                      title="Marketing de contenidos"
                      alt="Incremento de tráfico y resultados de tu negocio"
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
                          <span class="hurme-bold-4"> y tono de comunicación ideal </span>
                          para administrar tus redes sociales.
                        </p>
                        <p class="text-justify text-light-gray p-1">
                          Trabajamos con creatividad estratégica para
                          <span class="hurme-bold-4"> generar una respuesta emocional</span> en
                          tus clientes, forjar conexiones más fuertes con ellos
                          y motivarlos a tomar acción.
                        </p>
                        <p class="text-justify text-light-gray p-1">
                          Al contar con un community manager podrás
                          <span class="hurme-bold-4"> generar viralidad</span> para potenciar tu
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
                          Ganarás<span class="hurme-bold-4 "> notoriedad </span> en redes sociales
                          <span class="hurme-bold-4"> y tus clientes amarán tu marca.</span>
                        </div>
                        <svg width="177" height="4" viewBox="0 0 177 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3.49193 3.2865e-07L173.516 1.51926e-05C175.438 1.53607e-05 177 0.896557 177 2C177 3.10345 175.438 4 173.516 4L3.48442 3.99998C1.56198 3.99998 7.83793e-08 3.10343 1.74845e-07 1.99999C0.0075076 0.896542 1.56949 1.60585e-07 3.49193 3.2865e-07Z" fill="#FBC000"/>
                        </svg>

                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 py-5 left-conten-description">
                    <img
                      src="<?php echo $directory_imgs; ?>Girl_teaching_evanzu.png"
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
                fill="#FBC000"
              />
            </svg>
          </div>

          <div class="container">
            <div class="d-flex flex-column align-items-center mb-n1-5">
              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'first-icon-service.svg',
                    'text' => '<span class="hurme-bold-1 text-gray-black">Plan de comunicaciones</span>
                para cada red social.',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $directory_imgs . 'plan-contenidos.svg',
                        'text' => '<span class="hurme-bold-1 text-gray-black">Plan de contenidos</span>
                ',
                        'line' => $directory_imgs . 'line-point-yellow.svg',
                    ]
                ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'plan-grafico.svg',
                    'text' => '<span class="hurme-bold-1 text-gray-black">Plan gráfico</span>
                <br />
                   Banners, gifs, micro videos, spots publicitarios y otros.',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $directory_imgs . 'comuniti-manager.svg',
                        'text' => '<span class="hurme-bold-1 text-gray-black">Community management</span>
                Interacción con los usuarios, concursos y promociones.',
                        'line' => $directory_imgs . 'line-point-yellow.svg',
                    ]
                ); ?>
              </div>

               <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'reporte-mensual.svg',
                    'text' => '<span class="hurme-bold-1 text-gray-black">Reportes mensuales de resultados.</span>',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service ht7">
                </div>
                  <div class="spacing-services-rigth"></div>
              </div>
            </div>
          </div>
            
        </div>

        <!-----------------------Circle Right----------------------------->
        <div class='w-100 text-right' style="margin-bottom: -10rem">
          <div class="w-100 text-right d-none d-md-block"">
            <svg style="margin-top: -2rem; margin-bottom: -5rem; transform: rotate(-180deg);" width="108" height="217" viewBox="0 0 108 217" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0C59.6468 0 108 48.8533 108 108.5C108 168.147 59.6468 217 0 217V0Z" fill="#FBC000"/>
            </svg>
          </div>
        </div>
        <!-----------------------Circle Right----------------------------->

        <!-----------------------Service----------------------------->
        <div class="position-relative d-flex justify-content-center" style='margin-bottom: -10rem; height: 19.5rem;'>
          <img
            title="Gestión de redes sociales"
            alt="Plan de comunicaciones para cada red social"
            style="margin-right: -22rem; margin-top: 0.5rem;"
            class="d-none d-lg-block"
            src="<?php echo $directory_imgs; ?>Publicidad digital.png"
          >
        </div>
        <!-----------------------Contanct----------------------------->
          <?php get_template_part(
            'components/form-quote-request2',
            'full',
            [
                'image' => $directory_imgs . 'form-quote-request.svg',
                'title' => '¿Estás listo?',
                'idwebsite' => 'redes_socialesWebsite',
                'idemail' => 'marketing2email',
                'idform' => 'marketing2',
                'idparagraph' => 'pmarketing2',
                'titleClass' =>'title-contact-fontlg title-contact-w38 text-center',
                'imgClass' => 'image-contact-margin2'
            ]
          ); ?>
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
                      title="Posicionamiento SEO"
                      alt="Aumenta la visibilidad de tu web en el mundo digital"
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
                            Nuestro objetivo es <span class="hurme-bold-4">aumentar tu visibilidad <br>en motores de búsqueda</span> como Google y 
                            lograr un buen posicionamiento web para estar en los <span class="hurme-bold-4">primeros<br> resultados de búsqueda</span> de manera ORGÁNICA. 

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
                            Aumentar el tráfico de tu página web, eso significa 
                           <span class="hurme-bold-4">más visitas y más ventas.</span> <br> <br>
                            <ul class="hurme-bold-4 text-lg-right list-unstyled text-black">
                              <li>● SEO para e-commerce</li>
                              <li>● SEO inicial o mensual</li>
                            </ul>

                        </div>
                        <svg width="177" height="4" viewBox="0 0 177 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3.49193 3.2865e-07L173.516 1.51926e-05C175.438 1.53607e-05 177 0.896557 177 2C177 3.10345 175.438 4 173.516 4L3.48442 3.99998C1.56198 3.99998 7.83793e-08 3.10343 1.74845e-07 1.99999C0.0075076 0.896542 1.56949 1.60585e-07 3.49193 3.2865e-07Z" fill="#FBC000"/>
                        </svg>

                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 py-5 left-conten-description">
                    <img
                      src="<?php echo $directory_imgs; ?>zoom_seo.png"
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
                fill="#FBC000"
              />
            </svg>
          </div>

          <div class="container">
            <div class="d-flex flex-column align-items-center mb-n1-5">
              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'palabras-clabe.svg',
                    'text' => '<span class="hurme-bold-4 text-gray-black">Selección de Keywords</span>
                (Palabras Clave).',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $directory_imgs . 'meta-texto.svg',
                        'text' => '<span class="hurme-bold-4 text-gray-black"
                  >Implementar Etiquetas meta </span>
                    Descripción de las páginas que Google lee y posiciona.
                ',
                        'line' => $directory_imgs . 'line-point-yellow.svg',
                    ]
                ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'factores-internos.svg',
                    'text' => '<span class="hurme-bold-4 text-gray-black"
                  >Optimizar factores internos</span>
                    Contenido web, sistemas y otros.
              
                <br />
                   Banners, gifs, micro videos, spots publicitarios y otros.',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $directory_imgs . 'indexacion-google.svg',
                        'text' => '<span class="hurme-bold-4 text-gray-black"
                  >Indexación en Google</span
                >
                Para que Google muestre el índice de tu web en los resultados de búsqueda.',
                        'line' => $directory_imgs . 'line-point-yellow.svg',
                    ]
                ); ?>
              </div>

               <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'mapa-web.svg',
                    'text' => '<span class="hurme-bold-4 text-gray-black"> Crear el sitemap</span> Archivo XML con la estructura del sitio web.',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service">
                </div>
                    <?php get_template_part(
                        'components/btl/service-right',
                        'full',
                        [
                            'image' => $directory_imgs . 'link-building.svg',
                            'text' => '<span class="hurme-bold-4 text-gray-black">Linkbuilding </span> Estrategias para obtener enlaces que aterricen en el sitio web.',
                            'line' => $directory_imgs . 'line-point-yellow.svg',
                        ]
                    ); ?>
              </div>

                <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'velocidad_carga.svg',
                    'text' => '
                  Manejo de <span class="hurme-bold-4 text-gray-black">blog</span>',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service">
                </div>
                    <?php get_template_part(
                        'components/btl/service-right',
                        'full',
                        [
                            'image' => $directory_imgs . 'manejo-de-blog.svg',
                            'text' => '<span class="hurme-bold-4 text-gray-black">Mejora de la velocidad de carga </span> de la página.',
                            'line' => $directory_imgs . 'line-point-yellow.svg',
                        ]
                    ); ?>
              </div>
            </div>
          </div>
            
        </div>
        <!-----------------------Service----------------------------->
         <div
          class="position-relative d-flex justify-content-center margin-neg">
           <img
            title="SEO para e-commerce"
            class="d-none d-lg-block"
            style="margin-top: 5rem;"
            alt="Evanzu especialistas en posicionamiento SEO"
            src="<?php echo $directory_imgs; ?>publicidad.png">
          </div>
           <!-----------------------Circle Right----------------------------->
           <div class='w-100 text-right margin-circle'>
                <?php
                $parameters = ['color' => '#FBC000', 'position' => 'right'];
                get_template_part(
                    'components/border-circle',
                    'full',
                    $parameters
                );
                ?>
                </div>
                <!-----------------------Circle Right----------------------------->
        <!-----------------------Contanct----------------------------->
              <?php get_template_part(
                  'components/form-quote-request2',
                  'full',
                  [
                      'image' => $directory_imgs . 'form-quote-request.svg',
                      'title' => 'Conoce tu calificación SEO',
                      'idwebsite' => 'seoWebsite',
                      'idemail' => 'marketing3email',
                      'idform' => 'marketing3',
                      'idparagraph' => 'pmarketing3',
                      'titleClass' =>'title-contact-fontlg title-contact-w38 text-center',
                      'imgClass' => 'image-contact-margin2'
                  ]
              ); ?>                
        <!-----------------------Contanct----------------------------->
     
      </div>
      <!------------Growth hacking ------------>
      <div id="growth_hacking" class="tab-pane fade">
          <br />
        <!----------------------Main---------------------->
        <section class="p-0">
          <div class="bg-light-gray py-0">
            <div class="big-title text-red my-2 text-center">
            Growth hacking
            </div>
            <!-------------------Card---------------------->
            <div class="py-2">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-11 col-lg-6 d-flex align-items-center">
                    <img
                      src="<?php echo $directory_imgs; ?>Growth hacking-01 1.png"
                      alt="Te ayudamos a impactar para que puedas crecer"
                      title="Crecimiento digital"
                      class="img-fluid"
                    />
                  </div>
                  <div class="col-md-10 col-lg-6">
                    <div class="card bg-transparent border-0">
                      <div class="card-body">
                        <h3 class="subtitle-marketing text-gray-black text-left p-1">
                         Impacta para crecer
                        </h3>
                        <p class="text-justify text-light-gray p-1">
                           Desarrollamos técnicas y estrategias para lograr un <span class="hurme-bold-4">rápido crecimiento de tu marca </span>, así lograremos incrementar de forma notoria el volumen de clientes, usuarios y presencia de marca.</p> 
                          <p class="text-justify text-light-gray p-1">
                          Partimos de un conocimiento profundo de la empresa y su audiencia para tomar<span class="hurme-bold-4">decisiones inteligentes que logren mucho sin invertir de más.</span> </p>
                          <p class="text-justify text-light-gray p-1">
                          Nuestras habilidades integrales nos permiten crear formas de llegar a más personas de una manera <span class="hurme-bold-4">viral.</span>

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
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'tab41.png',
                    'text' => '<span class="hurme-bold-4 text-gray-black">Auditoría <br>
                    digital.</span>',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $directory_imgs . 'tab42.png',
                        'text' => '<span class="hurme-bold-4 text-gray-black">Plan de publicidad <br />
                        digital.</span>',
                        'line' => $directory_imgs . 'line-point-yellow.svg',
                    ]
                ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'tab43.png',
                    'text' => '<span class="hurme-bold-4 text-gray-black"Plan de contenidos  <br />virales.</span>',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $directory_imgs . 'tab44.png',
                        'text' => '<span class="hurme-bold-4 text-gray-black">Gestión de <br />Influencers.</span>',
                        'line' => $directory_imgs . 'line-point-yellow.svg',
                    ]
                ); ?>
              </div>

               <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'tab45.png',
                    'text' => '<span class="hurme-bold-4 text-gray-black">Reporte y análisis de <br /> resultados.</span>',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service ht7">
                 
                </div>
                  <div class="spacing-services-rigth"></div>
              </div>
            </div>
          </div>
            
        </div>
        <!-----------------------Service----------------------------->
        <div class="position-relative d-flex justify-content-center" style='margin-bottom: -9rem; height: 15rem;'>
          <img
            class="d-none d-lg-block"
            style='margin-right: -21rem; margin-top: -4rem;'
            title="Estratégias de Marketing Digital"
            alt="Crecimiento rápido de tu marca"
            src="<?php echo $directory_imgs; ?>haking grow.png">
        </div>

          <!-----------------------Circle Right----------------------------->
      <div class='w-100 text-right' style="margin-bottom: -10rem">
            <?php
            $parameters = ['color' => '#FBC000', 'position' => 'right'];
            get_template_part(
                'components/border-circle',
                'full',
                $parameters
            );
            ?>
      </div>
      <!-----------------------Circle Right----------------------------->

        <!-----------------------Contanct----------------------------->
                  <div class='mt-5'>
              <?php get_template_part(
                  'components/form-quote-request2',
                  'full',
                  [
                      'image' => $directory_imgs . 'form-quote-request.svg',
                      'title' => 'Crece exponencialmente',
                      'idwebsite' => 'growth_hackingWebsite',
                      'idemail' => 'marketing4email',
                      'idform' => 'marketing4',
                      'idparagraph' => 'pmarketing4',
                      'titleClass' =>'title-contact-fontlg title-contact-w38 text-center',
                      'imgClass' => 'image-contact-margin2'
                  ]
              ); ?>
              </div>
        <!-----------------------Contanct----------------------------->

      </div>
      <!------------Marketing de contenidos ------------>
      <div id="marketing_contenidos" class=" tab-pane fade">
        <section class="p-0">
          <div class="bg-light-gray py-0">
            <div class="big-title text-red my-2 text-center">
               Marketing de contenidos
            </div>
            <!-------------------Card---------------------->
            <div class="py-2">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-11 col-lg-6 d-flex">
                    <img
                      src="<?php echo $directory_imgs; ?>imac-contenido.png"
                      alt="Evanzu, creamos contenido valioso para tu marca"
                      title="Contenido relevante y valioso"
                      class="ml-5 img-fluid"
                    />
                  </div>
                  <div class="col-md-10 col-lg-6">
                    <div class="card bg-transparent border-0">
                      <div class="card-body">
                        <h3 class="subtitle-marketing text-gray-black text-left p-1">
                             EL FIN: Atraer. <br>
EL MEDIO: Contenido relevante y valioso.

                        </h3>
                        <p class="text-light-gray p-1">
                           Nos encargamos de la <span class="hurme-bold-4"> creación y distribución de contenido </span> para generar tráfico, obtener nuevos clientes y retenerlos. 
                        </p>
                        <p class="text-light-gray p-1">                    
                              
Utilizamos nuestra visión global de medios digitales y las adaptamos a tu empresa y objetivos. Nuestras estrategias se enfocan en <span class="hurme-bold-4"> despertar una necesidad de compra en el usuario a través de contenido que informe, eduque y entretenga. </span>
                       </p>
                        <p class="text-light-gray p-1">   
                          
Haremos que todo lo que comuniques logre que un usuario <span class="hurme-bold-4"> decida comprar </span> a tu empresa y se <span class="hurme-bold-4"> convierta en un cliente leal </span> de tu marca. 
                            
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
                               Incrementar el <span class="hurme-bold-4"> tráfico y <br>
                              los resultados </span> de tu negocio.
                        </div>
                        <svg width="177" height="4" viewBox="0 0 177 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3.49193 3.2865e-07L173.516 1.51926e-05C175.438 1.53607e-05 177 0.896557 177 2C177 3.10345 175.438 4 173.516 4L3.48442 3.99998C1.56198 3.99998 7.83793e-08 3.10343 1.74845e-07 1.99999C0.0075076 0.896542 1.56949 1.60585e-07 3.49193 3.2865e-07Z" fill="#FBC000"/>
                        </svg>

                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 py-5 left-conten-description">
                    <img
                      src="<?php echo $directory_imgs; ?>Girl_campania_marketin.png"
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

         <!--------------------bola-Left------------------------->
        <?php get_template_part('components/border-circle', 'full', [
            'color' => '#ED1164',
            'position' => '',
        ]); ?>
        <!--------------------bola-Left------------------------->

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
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'first-icon-service.svg',
                    'text' => '<span class="hurme-bold-4 text-gray-black">Plan de contenidos</span> <br />
                   en diferentes formatos',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $directory_imgs . 'Left_pencil_circle.svg',
                        'text' => '<span class="hurme-bold-4 text-gray-black">Gestión de blogs. </span> <br />
                ',
                        'line' => $directory_imgs . 'line-point-yellow.svg',
                    ]
                ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'icono-rigth-redes.svg',
                    'text' => ' <span class="hurme-bold-4 text-gray-black">
                      Gestión de redes <br />
                      sociales.</span>
                    ',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' =>
                            $directory_imgs . 'Producción_adiovisual.svg',
                        'text' => ' <span class="hurme-bold-4 text-gray-black"
                      >Producción <br />
                      audivisual.
                    </span>
                    ',
                        'line' => $directory_imgs . 'line-point-yellow.svg',
                    ]
                ); ?>
              </div>

               <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $directory_imgs . 'icono_seo.svg',
                    'text' => '<span class="hurme-bold-4 text-gray-black">Posicionamiento</span> <br />SEO. 
                .',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service">
                </div>
                    <?php get_template_part(
                        'components/btl/service-right',
                        'full',
                        [
                            'image' => $directory_imgs . 'periodic-reports.svg',
                            'text' => ' <span class="hurme-bold-4 text-gray-black"
                      >Reportes y análisis de  <br />
                     resultados.</span>
                ',
                            'line' => $directory_imgs . 'line-point-yellow.svg',
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
         <div class="position-relative d-flex justify-content-center" style='margin-bottom: -10rem;'>
                 <img title="Marketing de contenidos" alt="Incremento de tráfico y resultados de tu negocio" src="<?php echo $directory_imgs; ?>Marketing_contenido_base_tree.svg">
          </div>

          <!-----------------------Circle Right----------------------------->
          <div class='w-100 text-right' style="margin-bottom: -10rem">
                <?php
                $parameters = ['color' => '#FBC000', 'position' => 'right'];
                get_template_part(
                    'components/border-circle',
                    'full',
                    $parameters
                );
                ?>
                </div>
                <!-----------------------Circle Right----------------------------->

        <!-----------------------Contanct----------------------------->
          <div class='mt-5'>
            <?php get_template_part('components/form-quote-request2', 'full', [
                'image' => $directory_imgs . 'form-quote-request.svg',
                'title' => 'Tenemos más por contarte',
                'idwebsite' => 'marketing_contenidosWebsite',
                'idemail' => 'marketing5email',
                'idform' => 'marketing5',
                'idparagraph' => 'pmarketing5',
                'titleClass' =>'title-contact-fontlg title-contact-w38 text-center',
                'imgClass' => 'image-contact-margin2'
            ]); ?>
          </div>
        <!-----------------------Contanct----------------------------->
      </div>
    </div>
  </div>
</section>
<section>
  <div class="big-title text-red my-4 text-center">PORTAFOLIO</div>
  <div>
    <div>
      <?php get_template_part('components/masonry-marketing'); ?>
    </div>

    <div class="container" style="margin-top: 5rem"></div>
  </div>
</section>

<?php get_footer(); ?>
