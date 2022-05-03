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
                'svg' => 'first-tab.svg',
                'title' => 'Publicidad
        <br />
        digital',
                'href' => '#home',
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
                'href' => '#menu2',
                'path' => $directory_imgs,
            ],
            [
                'svg' => 'quarter-tab.svg',
                'title' => 'Growth
        <br />
        hacking',
                'href' => '#menu3',
                'path' => $directory_imgs,
            ],
            [
                'svg' => 'fifth-tab.svg',
                'title' => 'Marketing de
        <br />
        contenidos',
                'href' => '#menu4',
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
    <div class="tab-content">
      <div id="home" class="tab-pane active">
        <br />
        <div class="bg-light-gray">
          <div class="big-title text-red my-4 text-center">Logo & Branding</div>
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <img
                  src="<?php echo $directory_branding_imgs; ?>Identity Branding.png"
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
                <div class="text-center p-3">
                  <img
                    src="<?php echo $directory_branding_imgs; ?>pincel_girl.png"
                    alt=""
                  />
                </div>
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
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing-digital/first-icon-service.svg"
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
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing-digital/ponit-line-red.svg"
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
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing-digital/secon-icon-righ.svg"
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
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing-digital/contain-define.svg"
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
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing-digital/ponit-line-red.svg"
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
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing-digital/deploy-configuration.svg"
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
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing-digital/rocket-optimisation.svg"
                    />
                  </div>
                  <div class="d-inline-block ml-2">
                    <strong>Optimización</strong> de la <br />campaña.
                  </div>
                </div>
                <div class="ml-5">
                  <img
                    class="pl-2"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing-digital/ponit-line-red.svg"
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
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing-digital/periodic-reports.svg"
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
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing-digital/root-tree.svg"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="bg-red py-5">
          <?php
          $parameters = [
              'svg' => $directory_imgs . 'form-quote-request.svg',
              'title' => 'Crece
          exponencialmente',
          ];
          get_template_part(
              'components/form-quote-request',
              'full',
              $parameters
          );
          ?>
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
                      src="<?php echo $directory_imgs; ?>Girl_teaching_evanzu.png"
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
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $path_img . 'first-icon-service.svg',
                    'text' => '<strong
                  >Desarrollo</strong
                >
                de Concepto.',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $path_img . 'second-icon-service.svg',
                        'text' => '<strong
                  >Activaciones</strong
                >
                en ferias, <br />mercados, universidades, <br />parques y más.',
                        'line' => $path_img . 'line-celeste.svg',
                    ]
                ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $path_img . 'third-icon-service.svg',
                    'text' => '<strong
                  >Pre-Producción</strong
                >
                de la<br />activación (Merchandising,<br />
                personal, juegos y otros).',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $path_img . 'fourth-icon-service.svg',
                        'text' => '<strong
                  >Reporte</strong
                >
                de resultados.',
                        'line' => $path_img . 'line-celeste.svg',
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
        <?php get_template_part('components/btl/contact', 'full', [
            'path_img' => $path_img,
            'title' => '¿Estás listo?',
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
                      src="<?php echo $directory_imgs; ?>Girl_teaching_evanzu.png"
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
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $path_img . 'first-icon-service.svg',
                    'text' => '<strong
                  >Desarrollo</strong
                >
                de Concepto.',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service">
                  <div class="element-center-service"></div>
                </div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $path_img . 'second-icon-service.svg',
                        'text' => '<strong
                  >Activaciones</strong
                >
                en ferias, <br />mercados, universidades, <br />parques y más.',
                        'line' => $path_img . 'line-celeste.svg',
                    ]
                ); ?>
              </div>

              <div class="d-flex flex-column flex-md-row">
                <?php get_template_part('components/btl/service-left', 'full', [
                    'image' => $path_img . 'third-icon-service.svg',
                    'text' => '<strong
                  >Pre-Producción</strong
                >
                de la<br />activación (Merchandising,<br />
                personal, juegos y otros).',
                    'line' => $path_img . 'line-rosado.svg',
                ]); ?>
                <div class="d-none d-lg-block container-center-service"></div>
                <?php get_template_part(
                    'components/btl/service-right',
                    'full',
                    [
                        'image' => $path_img . 'fourth-icon-service.svg',
                        'text' => '<strong
                  >Reporte</strong
                >
                de resultados.',
                        'line' => $path_img . 'line-celeste.svg',
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
        <?php get_template_part('components/btl/contact', 'full', [
            'path_img' => $path_img,
            'title' => '¿Estás listo?',
        ]); ?>
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
                      src="<?php echo $directory_imgs; ?>Girl_teaching_evanzu.png"
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
					<div class="big-title text-red text-center">Ofrecemos ilustración digital para:</div>

					<div class="text-center">
						<svg width="80" height="4" viewBox="0 0 80 4" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M77.7269 3.12186H1.56093C0.699727 3.12186 0 2.42214 0 1.56093C0 0.699732 0.699727 0 1.56093 0H77.7302C78.5914 0 79.2912 0.699732 79.2912 1.56093C79.2878 2.42214 78.5881 3.12186 77.7269 3.12186Z" fill="#ED1164"/>
						</svg>
					</div>

					<div class="container">
						<div class="d-flex flex-column align-items-center mb-n1-5">
							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $directory_branding_imgs . 'ilustracion1.png',
											'text' => '<span class="font-weight-bold text-gray-black">Personajes para videos <br>
                      corporativos.</span>',
                    'line' => $path_img . 'line-rosado.svg',
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $directory_branding_imgs . 'ilustracion2.png',
                        'text' => '<span class="font-weight-bold text-gray-black">Dirección de arte para <br> campañas publicitarias.</span>',
                        'line' => $directory_branding_imgs . 'line_purple.svg',
										)
									); 
								?>
							</div>

							

              <div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
                  array(
                    'image' => $directory_branding_imgs . 'ilustracion3.png',
                  'text' => '<span class="font-weight-bold text-gray-black">Recursos para páginas web.</span>',
                  'line' => $path_img . 'line-rosado.svg',
                  )
                );  
								?>									
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
        					<div class="note-btl top-note-btl text-white mt-5">
        						<strong>
                      <span class="text-red mt-2">Briefing de requerimientos</span>
                      Recabamos los datos de tu empresa, del proyecto y los objetivos. 
                    </strong>
        					</div>
        				</div>
        				<div class="m-sm-1 m-md-2 position-relative">
        					<img style="height: 17rem;" src="<?php echo $path_img; ?>Group-609.png" alt="Informa a tus clientes" />
        					<div class="note-btl top-note-btl text-gray mt-5">
        						<strong>
                      <span class="text-light-gray mt-2">Conceptualización y desarrollo creativo</span>
                      Creamos ideas originales y efectivas para adaptarlas a tu marca y sus necesidades.
                    </strong>
        					</div>							
        				</div>
        				<div class="m-sm-1 m-md-2 position-relative">
        					<img style="height: 17rem;" src="<?php echo $path_img; ?>Group-610.png" alt="Conecta y logra" />
        					<div class="note-btl top-note-btl text-white mt-5">
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
                      src="<?php echo $directory_imgs; ?>Girl_teaching_evanzu.png"
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
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $directory_branding_imgs . 'tab5_first_image.png',
											'text' => '<span class="font-weight-bold text-gray-black">Investigación del perfil <br>
                    de usuario.</span>',
                    'line' => $path_img . 'line-rosado.svg',
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $directory_branding_imgs . 'tab5_second_image.png',
                        'text' => '<span class="font-weight-bold text-gray-black">Desarrollo del <br> mapa de navegación, animación y <br>  transiciones.</span>',
                        'line' => $directory_branding_imgs . 'line_purple.svg',
										)
									); 
								?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $directory_branding_imgs . 'tab5_third_image.png',
                    'text' => '<span class="font-weight-bold text-gray-black">
                    Diseño de diagramas de navegación simulando interacciones </span>
                    <p>Uso de plataformas como Figma, Adobe Xd y otros.</p>',
                    'line' => $path_img . 'line-rosado.svg',
										)
									); 
								?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $directory_branding_imgs . 'tab5_fourth_image.png',
                        'text' => '<span class="font-weight-bold text-gray-black">Testing.</span>',
                        'line' => $directory_branding_imgs . 'line_purple.svg',
										)
									); 
								?>
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
            'title' => '¿Un proyecto en mente?',
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
