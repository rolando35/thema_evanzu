<?php
/* 
    Template Name: AudioVisual
*/
$transparentNone = true;
get_header();
$directory_imgs = get_template_directory_uri() . '/assets/images/audioVisual/';
?>
<style>
html,
body,
header,
.view {
  height: 100%;
}

ul{
  line-height: 1.5;
}

@media (max-width: 740px) {
  html,
  body,
  header,
  .view {
    height: 100vh;
  }
}

.top-nav-collapse {
  background-color: #78909c !important;
}

.navbar:not(.top-nav-collapse) {
  background: transparent !important;
}

@media (max-width: 991px) {
  .navbar:not(.top-nav-collapse) {
    background: #78909c !important;
  }
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
    margin-bottom: -1.5rem;
}

.text-paragraph2 {
    font-family: Hurme Geometric Sans 4;
    color: #FFFFFF;
    font-weight: 900;
    font-size: 5.25rem;
    margin: 0;
    margin-bottom: -9px;
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

/* h1 {
  letter-spacing: 8px;
} */

.two-elements {
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 0;
}

.two-elements > svg {
    margin-bottom: 1.2rem;
    margin-left: 0.6rem;
}

h5 {
  letter-spacing: 3px;
}

.hr-light {
  border-top: 3px solid #fff;
  width: 80px;
}



.contain{
    display: flex;
    flex-direction: column;
}
.line-h{
    width: 4.9rem;
    height: 0.2rem;
    background: #ED1164;
    border-radius: 10px;
}

.widthText{
  width: 28rem;
}

.margin {
  margin-top: 0;
}

.width-production{
  width: 100%;
}

.w-310 {
  width: 310px;
}

.w-12 {
  width: 100%;
}

.w-15 {
  width: 100%;
}

.w-14 {
  width: 100%;
}
.margin-negative {
  margin-top: 0;
}

.m-left-4 {
  margin-left: 0;
}

.margin-24{
  margin-top:-24rem;
  margin-right: 4.5rem;
}

.points-line-position {
    position: absolute;
    margin-left: -10px;
    z-index: 1;
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
                        <i class="btn-open-i" >Ahora que estás inclinando la cabeza para leer, escríbenos.</i>
                        <span class="hurme-bold-4  btn-open-modal">ESCRÍBENOS</span>
                    </div>
                </div>
                <div class="mt-5c" style="z-index: 1;">
                    <?php get_template_part('components/modal/modal', 'full'); ?>
                </div>
        </div>    
    <!--------------------- Button Modal ---------------------> 
<section>
	<div
		class="carousel slide"
		data-ride="carousel"
		>
		<div class="float-rectangle-banner d-none d-xl-block">
			<div id="rectangle" class="text-center my-0 mx-auto"></div>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Sevicio de Audio Visuales.png"
          title="Audio Visuales"
					alt="Servicio de Audio Visuales ideadas para comunicar"
          class="w-100 h-100"
				/>
				<div class="carousel-caption" style="top: 5rem; bottom: auto; left: 10%;">
        <div class="col-8 flex-colum text-left p-0 mt-5 mt-sm-1 mt-md-0 mt-lg-5">
        <p class="develop-title" data-wow-delay="0.3s">Genera impacto</p>
        <h1 class="text-paragraph text-uppercase hurme-bold-4" data-wow-delay="0.3s">Audio</h1>
        <div class='d-flex align-center'>
            <p class="text-paragraph2 text-uppercase mr-2 hurme-bold-4">visual</p>
            <svg width="58" height="64" viewBox="0 0 58 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M57.9974 20.5832C57.9974 19.7822 57.3321 19.132 56.5191 19.132H48.0457L53.7474 26.0184H46.6229L40.9212 19.132H35.3409L41.0426 26.0184H33.9234L28.2163 19.132H22.636L28.3404 26.0184H21.2159L15.5115 19.1347H9.93121L15.6356 26.0184H8.51105L3.34783 19.7848L7.99897 11L1.14634 12.5421C0.351793 12.7216 -0.144488 13.4992 0.0376505 14.2793L1.1648 19.1398C1.20968 19.3349 1.29416 19.5117 1.40502 19.6652C1.19649 19.9148 1.06449 20.2321 1.06449 20.5832V25.5685C1.06449 26.1198 1.37863 26.5931 1.83794 26.8376C1.82738 26.8974 1.81944 26.9572 1.81944 27.0196V60.0237C1.81944 62.216 3.63028 64 5.85554 64H52.1452C54.3704 64 56.1812 62.216 56.1812 60.0237V27.0248V27.0222H56.5217C57.3348 27.0222 58 26.3721 58 25.5711L57.9974 20.5832ZM52.1425 61.9924H5.8529C4.75215 61.9924 3.85728 61.1108 3.85728 60.0263V58.9601H43.4738C44.0387 58.9601 44.4953 58.5102 44.4953 57.9536C44.4953 57.3971 44.0387 56.9472 43.4738 56.9472H3.85728V33.1856H10.4565C11.0214 33.1856 11.4781 32.7357 11.4781 32.1792C11.4781 31.6227 11.0214 31.1728 10.4565 31.1728H3.85728V28.0261H54.1355V31.0609H14.519C13.9541 31.0609 13.4974 31.5108 13.4974 32.0674C13.4974 32.6239 13.9541 33.0738 14.519 33.0738H54.1355V56.8354H47.5363C46.9714 56.8354 46.5147 57.2853 46.5147 57.8418C46.5147 58.3983 46.9714 58.8482 47.5363 58.8482H54.1355V60.0315C54.1381 61.1108 53.2433 61.9924 52.1425 61.9924Z" fill="#019B69"/>
                <path d="M45 2L39.7281 3.29153L35 13L40.2719 11.7085L45 2Z" fill="#019B69"/>
                <path d="M33 5L27.2009 6.28911L22 16L27.802 14.7109L33 5Z" fill="#019B69"/>
                <path d="M21 8L15.7281 9.17411L11 18L16.2719 16.8259L21 8Z" fill="#019B69"/>
                <path d="M55.9654 6.22087L54.9086 1.17211C54.7374 0.361721 53.9982 -0.146129 53.254 0.0375607L51.572 0.456269L47 10L54.926 8.02805C55.6702 7.84165 56.1341 7.03396 55.9654 6.22087Z" fill="#019B69"/>
                <path d="M28.2463 39.2014L36.1449 43.7772C37.3205 44.4585 37.2748 46.2146 36.0642 46.8295L28.1737 50.8374C27.1729 51.3471 26 50.5965 26 49.447V40.5531C26.0027 39.3676 27.2429 38.6197 28.2463 39.2014Z" fill="white"/>
                <path d="M22 50C21.447 50 21 49.5962 21 49.0966V40.9034C21 40.4038 21.447 40 22 40C22.553 40 23 40.4038 23 40.9034V49.0966C22.9974 49.5962 22.5504 50 22 50Z" fill="white"/>
                </svg>
        </div>
        <p style='font-weight: 300;' class="text-white">con videos ideados para comunicar y emocionar.</p>
        <div class="d-inline-block w-100">
          <button style="max-width: 20rem;" onclick="ButtonRedirectForm();" id="btn-main" type="button" class="btn bg-red rounded-pill text-white my-1 p-2 btn-sm w-90">
            <strong>Desafíanos</strong> con tu proyecto
          </button>
        </div>
        

       

    </div>
					</div>				
				</div>
			</div>
	</div>
  <!----------------- Banner ----------------->

</section>
<section>
    <div class="bg-white">

    <!-------------------nav-------------------->
		<div class="group-nav">
			<ul class="nav nav-pills nav-tabs-sticky justify-content-center" id="nav-iconos" role="tablist">
				<?php foreach (
        [
            [
                'svg' => 'first-tab.svg',
                'title' => 'Spots & <br> Videos',
                'active' => true,
                'href' => '#spots_videos',
                'path' => $directory_imgs,
            ],
            [
                'svg' => 'second-tab.svg',
                'title' => 'Animación <br> 2D',
                'href' => '#animacion_2d',
                'path' => $directory_imgs,
            ],
            [
                'svg' => 'third-tab.svg',
                'title' => 'Fotografía Profesional',
                'href' => '#fotografia_profesional',
                'path' => $directory_imgs,
            ]
        ]
        as $nav
    ) {
        get_template_part('components/circle-nav-2', 'full', $nav);
    } ?>
			</ul>
		</div>
		<!-------------------nav-------------------->
        <!-- Tab panes -->
  <div class="tab-content" style="overflow: hidden">
		<!------------Sports & videos------------>
		<div id="spots_videos" class="tab-pane active">
			<br>
      <div class="bg-light-gray py-5">
        <h2 class="big-title text-red my-4 text-center">
        Spots & Videos
        </h2>
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-sm-6">
              <div class="my-3">
                  <div class="text-green  my-3 text-left hurme-bold-4" style='width: 90%; font-weight: 900; font-size: 1.6rem'>
                  Creatividad y emociones en cada cuadro
                  </div>
              </div>
              <p class='font-weight-normal w-90 text-justify' style='line-height: 22px; font-size: 1rem'>
                Ponemos tu marca en escena y <span class="hurme-bold-4">seducimos desde los primeros segundos.</span> Nos aseguramos de que tu mensaje se comprenda y se recuerde. <br> <br>

                Muestra tus proyectos en múltiples plataformas (TV, redes sociales, sitios web) con <span class="hurme-bold-4">piezas audiovisuales que despierten el interés y generen conexión </span> con tu público objetivo.
              </p>
              <div class='text-center w-100'>
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Group 275.png"
                    title="Servicio de Spots & Videos "
                    alt="Computadoras con imagenes de edición de videos"
                  >
              </div>
            </div>
            <div class="col-sm-6 d-flex flex-column-reverse flex-sm-column">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Group 585.png"
                title="Equipo cámara y claqueta de video"
                alt="Cámara de video 4K Full, ultra HD con claqueta de video "
              >
              <p class="text-justify py-4">
                  Es una solución ideal para promocionar lanzamientos, marcas, productos, servicios, instalaciones, herramientas, procesos, tutoriales y más.
                  Contamos con equipo para todo tipo de tomas: luces, cámaras de video 4K Full y ultra HD, drones y GoPro.
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php
        $parameters = ['color' => '#ED1164', 'position' => ''];
        get_template_part(
            'components/border-circle',
            'full',
            $parameters
        );
      ?>
      <!-------------------- services tab1 -------------------->
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
							<?php
								get_template_part('components/btl/service-left','full', 
									array(
										'image' => $directory_imgs."icono (1).svg",
										'text' => '<span class="hurme-bold-4">Pre Produción</span>
                                <ul class="text-left">
                                  <li>Brief de Requerimiento.</li>
                                  <li>Desarrollo de concepto.</li>
                                  <li>Creación del Guión y Storyboard.</li>
                                  <li>Planificación y Scouting (locaciones).</li>
                                  <li>Casting, arte y vestuario.</li>
                                </ul>',
										'line' => $directory_imgs."line-rosado.svg"
									)
								); 
							?>
							<div class="d-none d-lg-block container-center-service">
					 			<div class="element-center-service"></div>
							</div>
							<?php
								get_template_part('components/btl/service-right','full', 
									array(
										'image' => $directory_imgs."imageMicripho.svg",
										'text' => '<span class="hurme-bold-4">Produción</span>
                                <ul class="w-310">
                                    <li>Producción y gestión de rodaje.</li>
                                    <li>Maquillaje y Make up.</li>
                                    <li>Capatura de tomas en audio directo.</li>
                                    <li>Profesionales en la dirección fotográfica e iluminación.</li>
                                    <li>Grabaciones cuadro por cuadro.</li>
                                </ul>',
										'line' => $directory_imgs."line-blu.svg"
									)
								); 
							?>
						</div>

            <div class="d-flex flex-column flex-md-row">
							<?php
								get_template_part('components/btl/service-left','full', 
									array(
										'image' => $directory_imgs."icono (1).svg",
										'text' => '<span class="hurme-bold-4">Produción</span>
                                <ul class="w-310">
                                    <li>Producción y gestión de rodaje.</li>
                                    <li>Maquillaje y Make up.</li>
                                    <li>Capatura de tomas en audio directo.</li>
                                    <li>Profesionales en la dirección fotográfica e iluminación.</li>
                                    <li>Grabaciones cuadro por cuadro.</li>
                                </ul>',
										'line' => $directory_imgs."line-rosado.svg"
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
        <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -7rem;'>
            <img
              class=""
              title="Herramientas de Audio Visuales"
              alt="Ilustración de Herramientas para el servicio de Audio Visuales"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Ilustración Servicio de Audio Visuales.png"
            >
        </div>
			</div>

      <div class='w-100 text-right' style="margin-bottom: -10rem">
          <?php
            $parameters = [
                'color' => '#019B69',
                'position' => 'right',
            ];
            get_template_part(
                'components/border-circle',
                'full',
                $parameters
            );
          ?>
      </div>
      <div class='mt-5'>
        <!-----------------------Contact----------------------------->
				<?php get_template_part(
            'components/form-quote-request2',
            'full',
            [
                'image' =>
                    $directory_imgs . 'form-quote-request.svg',
                'title' => '¡Empecemos ahora!',
                'idwebsite' => 'homeWebsite',
                'idemail' => 'form1email',
                'idform' => 'chalk1',
                'idparagraph' => 'p1',
                'titleClass' =>'title-contact-fontlg title-contact-w38 text-center',
                'imgClass' => 'image-contact-margin2'
            ]
        ); ?>
				<!-----------------------Contact----------------------------->
      </div>

      <h2 class="bg-white big-title text-center text-red">Ofrecemos</h2>
      <div class='py-5 my-5 pl-5'>
        <div class='w-100 d-flex justify-content-center position-relative' style='height: 12.1rem' >
        <div class='w-90 bg-fa' style='height: 12.1rem'></div>
        </div>
        <div class='w-90 d-flex position-relative justify-content-around flex-wrap align-items-center' style='margin-top: -16rem'>
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Desarrollo de proyectos audiovisuales.png" 
              title="Proyectos audiovisuales"
              alt="Spots publicitarios para medios masivos ">
            <div>
                <p class='text-red hurme-bold-4' style='font-weight: 900; font-size: 26px;'>
                  Proyectos audiovisuales
                </p>
                <ul class='font-weight-normal text-justify'>
                    <li>Spots publicitarios para Radio, TV, Cine, Web.</li>
                    <li>Publireportajes.</li>
                    <li>Video de producto o testimonial.</li>
                    <li>Video institucional y promocional de empresa.</li>
                </ul>
            </div>
        </div>
      </div>
      <div class='py-5 my-5 pl-5'>
         <div class='w-100 d-flex justify-content-center position-relative' style='height: 12.1rem' >
              <div class='w-90 bg-fa' style='height: 15.1rem'></div>
          </div>
            <div class='w-90 d-flex position-relative justify-content-around align-items-center flex-column-reverse flex-lg-row' style='margin-top: -16rem'>
                <div class="mt-3">
                    <p class='text-red hurme-bold-4' style='font-weight: 900; font-size: 26px;'>
                      Filmación aérea
                    </p>
                    <p class='widthText font-weight-normal text-justify text-justify' style='width: 27.8rem;'>
                        Comunica desde un ángulo diferente <br> <br>

                        Trabajamos contenido a la altura de tu proyecto. Más que una grabación, <span class="hurme-bold-4">ofrecemos estrategia audiovisual que emocione.</span> Muéstrate sumamente profesional y atrayente con tomas aéreas. <br> <br>

                        Cubrimos producciones corporativas, eventos sociales, edificios, paisajes, escenarios, y más.
                    </p>
                </div>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Servicio de Filmación aérea con drone.png"
                  title="Servicio de Filmación aérea"
                  alt="Laptop con imagen de una fotografía tomada con un drone">
            </div>
      </div>
      <div class='py-5 my-5 pl-5'>
         <div class='w-100 d-flex justify-content-center position-relative' style='height: 12.1rem' >
              <div class='w-90 bg-fa' style='height: 16rem'></div>
        </div>
        <div class='w-90 d-flex position-relative justify-content-around flex-wrap align-items-center' style='margin-top: -16rem'>
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Servicio de Desarrollo de storyline y storyboard.png"
              title="Servicio de Desarrollo de guiones"
              alt="Laptop con imagenes de sopt publicitario y storyboard de agentes BBVA">
            <div class="mt-5">
                <p class='text-red hurme-bold-4' style='font-weight: 900; font-size: 26px;'>
                  Desarrollo de guiones
                </p>
                <p class='widthText font-weight-normal text-justify'>
                  Historias contadas de forma inolvidable. <br> <br>

                  Construimos narrativas según tu objetivo de comunicación. Planteamos <span class="hurme-bold-4"> guiones originales, entretenidos y que generen una reacción positiva para la marca. </span> <br> <br>

                  Ofrecemos nuestra redacción estratégica para spots publicitarios, animaciones, contenido en redes sociales u otros proyectos empresariales.
                </p>
            </div>
        </div>
      </div>
      <!-- PORTAFOLIO -->
      <section class="mb-5">
        <h2 class="bg-white big-title text-center text-red">PORTAFOLIO</h2>                 
        <?php echo get_template_part(
          'components/video-galery',
          'full',
          [
          'video1' => 'zpq6oje5FsA',
          'video2' => '-SdnP9s5cF8',
          ]
          ); ?>
      </section>
    </div>
    <!------------Sports & videos------------>


               <!-- TAB - 2 -->
            <div id="animacion_2d" class="tab-pane fade"><br>
            <div style='margin-top: 3.4rem' class="tab-content">
               <div class="bg-light-gray py-5">
                <h2 class="big-title text-red my-4 text-center">
                Animación 2D
                </h2>
                <div class="container">
                    <div class="column col-12 d-lg-flex align-items-center">
                    <div class="col-sm-12 col-lg-6 ">

            <div class="my-3">
                <div class="text-green  my-3 text-left hurme-bold-4" style='width: 90%; font-weight: 900; font-size: 1.6rem'>
                  Crea historias que enganchen
                </div>
            </div>
            <p class='font-weight-normal text-justify w-90' style='line-height: 22px; font-size: 1rem'>
            Comunicamos información relevante y contenido de interés de la manera más <span class="hurme-bold-4">creativa y cautivadora.</span> Aplicable a <b class="font-weight-bold hurme-bold-4 hurme-bold-4" >videos para comunicación interna y externa,</b> eventos corporativos, tutoriales y otros. <br> <br>
            Manejamos diversos estilos de animación: motion graphic, stop motion y otros. Contamos con un equipo especializado en Illustrator, After effects, Premier, Audition, Cinema 4D y 3D Max.
            </p>
            </div>
                  <div class="col-sm-12 col-lg-6 ">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Servicio de Animación 2D.png"
                    title="Animación 2D"
                    alt="Servicio de Animación 2D"
                  >
                  </div>
                    </div>
                </div>
                </div>
                <?php
                $parameters = ['color' => '#ED1164', 'position' => ''];
                get_template_part(
                    'components/border-circle',
                    'full',
                    $parameters
                );
                ?>
                <div >
      <!-----------------------Service component tab2----------------------------->
        <div class="section-service">
					<h2 class="big-title text-red text-center">¿Cómo lo hacemos?</h2>

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
											'image' => $directory_imgs."como-lo-hacemos1.svg",
											'text' => '<b class="font-weight-bold hurme-bold-4 text-gray-black" > Desarrollo </b> de concepto.',
											'line' => $directory_imgs."line-rosado.svg"
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $directory_imgs."como-lo-hacemos2.svg",
											'text' => 'Creación de <b class="font-weight-bold hurme-bold-4 text-gray-black" > Storyboard.</b>',
											'line' => $directory_imgs."line-blu.svg"
										)
									); 
								?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $directory_imgs."como-lo-hago3.svg",
											'text' => '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Ilustración y caracterización</b> de personajes y escenarios.',
											'line' => $directory_imgs."line-rosado.svg"
										)
									); 
								?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $directory_imgs."como-lo-hago4.svg",
											'text' => '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Animación, musicalización y voz en off.</b>',
											'line' => $directory_imgs."line-blu.svg"
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
              <img
                class=""
                title="Herramientas de Audio Visuales"
                alt="Ilustración de Herramientas para el servicio de Audio Visuales"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Ilustración Servicio de Audio Visuales.png"
              >
          </div>
				</div>
			<!-----------------------Service component tab2----------------------------->	
                <!-----------------------Circle Right----------------------------->
                <div class='w-100 text-right' style="margin-bottom: -10rem">
                <?php
                $parameters = ['color' => '#019B69', 'position' => 'right'];
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
                            'image' =>
                                $directory_imgs . 'form-quote-request.svg',
                            'title' => '¿Estás listo?',
                            'idwebsite' => 'menu1Website',
                            'idemail' => 'form2email',
                            'idform' => 'chalk2',
                            'idparagraph' => 'p2',
                            'titleClass' =>'title-contact-fontlg title-contact-w38 text-left pl-lg-5',
                            'imgClass' => 'image-contact-margin2'
                        ]
                    ); ?>
                    <!-----------------------Contact----------------------------->
                  </div>

                <div class='py-5 my-5 pl-5'>
                    <div class='w-100 d-flex justify-content-center position-relative' style='height: 12.1rem' >
                        <div class='w-90 bg-fa' style='height: 12.1rem'></div>
                    </div>
                      <div class='w-100 d-flex position-relative justify-content-around flex-wrap align-items-center' style='margin-top: -18rem'>
                          <div class="col-sm-12 col-lg-6 ">
                              <p class='text-red hurme-bold-4' style='font-weight: 900; font-size: 26px;'>Ofrecemos animación 2D para:</p>
                                <ul style="line-height: 1.5;">
                                    <li>Video-tutoriales.</li>
                                    <li>Presentación de productos o servicios.</li>
                                    <li>Videos infográficos y otros.</li>
                                    <li>Producción de audio (Musicalización, efectos de sonido, masterización de audio, locución).</li>
                                </ul>
                          </div>
                          <div class="col-sm-12 col-lg-6 ">
                            <img
                              src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/ofrecemos.png"
                              title="Poryectos de Animación 2D"
                              alt="Computadoras con diferentes animaciones en 2D">
                          </div>
                      </div>
               </div>
               
               
               <!-- PORTAFOLIO -->
                <section>
                        <h2 class="bg-white big-title text-center text-red">PORTAFOLIO</h2>                 
                            <?php echo get_template_part(
                                'components/video-galery-animacion2d',
                                'full',
                                [
                                    'video1' => 'zpq6oje5FsA',
                                    'video2' => '-SdnP9s5cF8',
                                ]
                            ); ?>
                  </section>

            </div>
        </div>
      </div>

            <!-- TAB - 3 -->
            <div id="fotografia_profesional" class="tab-pane fade"><br>
              <div class="bg-light-gray py-5">
                <h2 class="big-title text-red my-4 text-center">
                  Fotografía Profesional
                </h2>
                <div class="container">
                    <div class="row">
                    <div class="col-sm-12 col-lg-6">

            <div class="my-3">
                <div class="text-green  my-3 text-left hurme-bold-4" style='width: 90%; font-weight: 900; font-size: 1.6rem'>
                Hacemos de tus imágenes tu mejor estrategia de comunicación
                </div>
            </div>
            <p class='font-weight-normal w-90 text-justify' style='line-height: 22px; font-size: 1rem'>
            Renueva la imagen de tu negocio mediante fotografías profesionales de alta calidad. <span class="font-weight-bold hurme-bold-4">Obtendrás imágenes de calidad artística.</span> <br> <br> 
            Creamos escenarios en función del objetivo de comunicación. Manejamos técnicas de fotografía comercial, iluminación y retoque.
            </p>
            </div>
                  <div class="col-sm-12 col-lg-6">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Servicio de Fotografía Profesional de alta calidad.png"
                    alt="Cámara fotografíca y accesorios con iconos de fotografía"
                    title="Servicio de Fotografía Profesional"
                  >
                  </div>
                    </div>
                </div>
                </div>
                <?php
                $parameters = ['color' => '#ED1164', 'position' => ''];
                get_template_part(
                    'components/border-circle',
                    'full',
                    $parameters
                );
                ?>
                
        <!-----------------------Service component tab3----------------------------->
        <div class="section-service">
					<h2 class="big-title text-red text-center">Nuestras Herramientas</h2>

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
											'image' => $directory_imgs."herramientas1.svg",
											'text' => '<b class="font-weight-bold hurme-bold-4 text-gray-black" > Fotos </b> de Cámaras DLSR.',
											'line' => $directory_imgs."line-rosado.svg"
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $directory_imgs."herramientas2.svg",
											'text' => '<b class="font-weight-bold hurme-bold-4 text-gray-black" > Fotos </b>Fotos de estudio.',
											'line' => $directory_imgs."line-blu.svg"
										)
									); 
								?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $directory_imgs."herramientas3.svg",
											'text' => '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Video</b> cámara HD y 4K',
											'line' => $directory_imgs."line-rosado.svg"
										)
									); 
								?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $directory_imgs."herramientas4.svg",
											'text' => '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Fotos aéreas</b> con drones.',
											'line' => $directory_imgs."line-blu.svg"
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
              <img
                class=""
                title="Herramientas de Audio Visuales"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Ilustración Servicio de Audio Visuales.png">
          </div>
				</div>
			<!-----------------------Service component tab3----------------------------->	
                <!-----------------------Circle Right----------------------------->
                <div class='w-100 text-right' style="margin-bottom: -10rem">
                <?php
                $parameters = ['color' => '#019B69', 'position' => 'right'];
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
                            'image' =>
                                $directory_imgs . 'form-quote-request.svg',
                            'title' => 'Tenemos más por contarte, escríbenos',
                            'idwebsite' => 'menu2Website',
                            'idemail' => 'form3email',
                            'idform' => 'chalk3',
                            'idparagraph' => 'p3',
                            'titleClass' =>'title-contact-fontsm title-contact-w38 text-center',
                            'imgClass' => 'image-contact-margin2'
                        ]
                    ); ?>
                    <!-----------------------Contact----------------------------->
                  </div>
               <div class='py-5 my-5 pl-5'>
                   <div class='w-100 d-flex justify-content-center position-relative' style='height: 12.1rem' >
                        <div class='w-90 bg-fa' style='height: 12.1rem'></div>
                    </div>
                      <div class='w-90 d-flex justify-content-around flex-wrap align-items-center position-relative' style='margin-top: -20rem'>
                          <div class="mt-md-5">
                              <p class='text-red hurme-bold-4' style='font-weight: 900; font-size: 26px;'>Desarrollamos estos proyectos:</p>
                               <ul>
                                 <li>Fotografía Publicitaria en Estudio o Locación.</li>
                                 <li>Fotografía Institucional y corporativa.</li>
                                 <li>Fotografía para Campañas y Eventos.</li>
                                 <li>Fotografía de Productos y catálogos.</li>
                                 <li>Fotografías para páginas web </li>
                                 <li>Fotografías de productos para tiendas virtuales.</li>
                               </ul>
                          </div>
                          <img
                            class="mt-5"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Desarrollo de proyectos de fotografía profesionales.png"
                            alt="Desarrollo de proyectos de fotografía profesionales para deferentes marcas"
                            title="Desarrollo de proyectos fotografícos"
                          >
                      </div>
               </div>
               
               
               <!-- PORTAFOLIO -->
               <section>
                       <h2 class="bg-white big-title text-center text-red">PORTAFOLIO</h2>                 
                           <?php echo get_template_part('components/masonry-audio-visual'); ?>
                 </section>
            </div>
        </div>
    </div>

</section>


<?php get_footer();
?>
