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

.text-paragraph {
    font-family: Hurme Geometric Sans 4;
    color: #FFFFFF;
    font-weight: 900;
    font-size: 115px;
    margin: 0;
    margin-bottom: -20px;
}

.text-paragraph-small {
    font-size: 84.6404px;
    font-family: Hurme Geometric Sans 4;
    color: #FFFFFF;
    font-weight: 900;
}

.contain{
    display: flex;
    flex-direction: column;
    padding-top: 11.5rem;
    padding-bottom: 13.8rem;
}
.line-h{
    width: 4.9rem;
    height: 0.2rem;
    background: #ED1164;
    border-radius: 10px;
}

.points-line-position {
    position: absolute;
    margin-left: -10px;
    z-index: 1;
}
</style>
<section>


<div class="view" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/portada 2.png'); background-repeat: no-repeat; background-size: cover; background-position: center center; height: 100vh;">

<div class="mask rgba-black-light align-items-center">
  <div class="container">
    <div class="row">
      <div class="contain mb-4 text-center">
        <h1 style="font-family: running-text;
            font-size: 60px; line-height: 119px; color: #FFFFFF;
            margin-bottom: -70px;
        " data-wow-delay="0.3s">Genera impacto</h1>
        <p class="text-paragraph text-uppercase" data-wow-delay="0.3s">Audio</p>
        <div class='two-elements'>
            <p class="text-paragraph-small text-uppercase">visual</p>
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
        <div class="d-inline-block w-100"><button type="button" class="btn bg-red rounded-pill text-white my-1 p-2 btn-sm w-90"><strong>Desafíanos</strong> con tu proyecto</button>
        </div>
        
        <div class="float-rectangle-banner">
            <div id="rectangle" class="text-center">
            </div>
        </div>

       

    </div>

</section>
<section>
    <div class="bg-white">
        <div class="mx-auto w-50">
            <ul class="nav nav-pills d-flex justify-content-around" role="tablist">
            <?php
             $lista = array (array  (
             'svg' => $directory_imgs.'first-tab.svg',
             'title'=> 'Sopts & <br> Videos',
             'href'=> '#home',
             'active'=> 'active', 
             'center' => 'two-elements'),
             array (
             'svg' => $directory_imgs.'second-tab.svg',
             'title'=> 'Animación <br> 2D',
             'href'=> '#menu1','active'=> '',
             'center' => 'two-elements'
            ),
            array (
            'svg' => $directory_imgs.'third-tab.svg',
            'title'=> 'Fotografía Profesional',
            'href'=> '#menu2',
            'active'=> '',
            'center' => 'two-elements'
            ));
             foreach ($lista as $data) {
                 get_template_part('components/circle-nav','full', $data );
             }
             ?>
            </ul>

        </div>

        <!-- Tab panes -->
        <div style='margin-top: 3.4rem' class="tab-content">
            <div id="home" class="tab-pane active"><br>
               <div class="bg-faint-gray py-5">
                <div class="big-title text-red my-4 text-center">
                Spots & Videos
                </div>
                <div class="container">
                    <div class="row">
                    <div class="col-sm-6">

<div class="my-3">
    <div class="text-green  my-3 text-left" style='width: 90%; font-weight: 900; font-size: 1.6rem'>
    Creatividad y emociones en cada cuadro
    </div>
</div>
  <p class='font-weight-normal w-90' style='line-height: 22px; font-size: 1rem'>
    Ponemos tu marca en escena y <strong>seducimos desde los primeros segundos.</strong> Nos aseguramos de que tu mensaje se comprenda y se recuerde. <br> <br>

    Muestra tus proyectos en múltiples plataformas (TV, redes sociales, sitios web) con <strong>piezas audiovisuales que despierten el interés y generen conexión </strong> con tu público objetivo.
  </p>
    <div class='text-center w-100'>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Group 275.png" alt="Cámara fotográfica">
    </div>

</div>
      <div class="col-sm-6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Group 585.png" alt="Cámara fotográfica">
        <p class="text-justify py-4">
            Es una solución ideal para promocionar lanzamientos, marcas, productos, servicios, instalaciones, herramientas, procesos, tutoriales y más.
            Contamos con equipo para todo tipo de tomas: luces, cámaras de video 4K Full y ultra HD, drones y GoPro.
        </p>
      </div>
                    </div>
                </div>
                </div>
                <?php
                 $parameters = array('color' => '#ED1164', 'position' => '') ;
                 get_template_part('components/border-circle','full', $parameters ); 
                ?>
                <div >
                     <div class="big-title text-red text-center py-5" style='display: flex; flex-direction: column; align-items: center;'>
                       El servicio incluye:
                       <div class="line-h"></div>
                     </div>
                     <div>
                         <div class="d-flex justify-content-center">
                             <div>  
                                 <div class="mb-1">
                                     <div class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/icono (1).svg"></div>
                                          <div class="d-inline-block ml-1">
                                                <strong>Pre Produción</strong>
                                                <ul>
                                                    <li>Brief de Requerimiento.</li>
                                                    <li>Desarrollo de concepto.</li>
                                                    <li>Creación del Guión y Storyboard.</li>
                                                    <li>Planificación y Scouting (locaciones).</li>
                                                    <li>Casting, arte y vestuario.</li>
                                                </ul>
                                            </div>   
                                   </div> 
                                    <div class="ml-5">
                                        <img  class="points-line-position" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Group 303.svg">
                                    </div>
                                   
                             </div>
                             <div> 
                                <div> 
                                    <svg width="10" height="114" viewBox="0 0 7 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 3.5C0 1.567 1.567 0 3.5 0C5.433 0 7 1.567 7 3.5V52.5C7 54.433 5.433 56 3.5 56C1.567 56 0 54.433 0 52.5V3.5Z" fill="#ED1164"/>
                                    </svg>
                                 </div> 
                                 <div class="position-relative">
                                    <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/verticalLine.svg">
                                </div>
                                
                              </div>
                             <div style='margin-top: 3.5rem'>
                                   <div class="mb-1 mt-5">
                                   <div class="d-inline-block ml-1" style='width: 302px;'>
                                        <strong>Produción</strong>
                                        <ul>
                                            <li>Producción y gestión de rodaje.</li>
                                            <li>Maquillaje y Make up.</li>
                                            <li>Capatura de tomas en audio directo.</li>
                                            <li>Profesionales en la dirección fotográfica e iluminación.</li>
                                            <li>Grabaciones cuadro por cuadro.</li>
                                        </ul>
                                    </div>   
                                      <div class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/imageMicripho.svg"></div> 
                                   </div> 

                                 <div class='points-line-position' style='margin-left: -1rem;'>
                                 <svg width="391" height="34" viewBox="0 0 391 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25 25L389 25C389.552 25 390 24.5523 390 24L390 1" stroke="#019B69" stroke-width="2" stroke-linecap="round" stroke-dasharray="6 6"/>
                                    <circle r="9" transform="matrix(-1 0 0 1 9 25)" fill="#019B69"/>
                                    </svg>
                                 </div>
                             </div>
                         </div>

                        <div class="d-flex justify-content-center " style='margin-top:-18rem'>
                            <div>  
                                 <div class="mb-1">
                                     <div class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/icono (1).svg"></div>
                                          <div class="d-inline-block ml-1">
                                               <strong>Post Producción</strong>
                                                <ul>
                                                    <li>Edición de Video Digital.</li>
                                                    <li>Realización de efectos visuales.</li>
                                                    <li>Locución y edición de audio digital.</li>
                                                    <li>Masterización de audio y video.</li>
                                                    <li>Presentación y empaquetado.</li>
                                                </ul>
                                            </div>   
                                   </div> 
                                    <div class="ml-5">
                                        <img  class="points-line-position" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/Group 303.svg">
                                    </div>
                                   
                             </div>
                             <div style='width: 27rem;'></div>
                        </div>
                        <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -10rem;'>
                            <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como lo hacemos.png">
                        </div>
                     </div>
                </div>
                <div class="bg-red">
                   <div class="bg-pink-form rounded" style='height: 27.6rem;'>
                       <div class='w-100 text-right'>
                           <?php
                             $parameters = array('color' => '#019B69', 'position' => 'transform: rotate(-180deg);') ;
                             get_template_part('components/border-circle','full', $parameters ); 
                            ?>
                       </div>
                      <div class='mt-5'>
                        <?php
                          $parameters = array ('svg' => $directory_imgs.'form-quote-request.svg','title'=> '¡Empecemos ahora!');
                          get_template_part('components/form-quote-request','full', $parameters );  
                        ?> 
                      </div>
                    </div>   
                </div>

               <div class="bg-white big-title text-center text-red">Ofrecemos</div>
               <div class='py-5 my-5 pl-5'>
                   <div class='w-100 d-flex justify-content-center position-relative' style='height: 12.1rem' >
                        <div class='w-90 bg-fa' style='height: 12.1rem'></div>
                    </div>
                      <div class='w-90 d-flex position-relative justify-content-around flex-wrap align-items-center' style='margin-top: -16rem'>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/ofrecemos 01.png" alt="Ofrecemos imagen 1">
                          <div>
                              <p class='text-red' style='font-weight: 900; font-size: 26px;'>Proyectos audiovisuales</p>
                              <ul class='font-weight-normal'>
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
                        <div class='w-90 bg-fa' style='height: 12.1rem'></div>
                    </div>
                      <div class='w-90 d-flex position-relative justify-content-around flex-wrap align-items-center' style='margin-top: -16rem'>
                          <div>
                              <p class='text-red' style='font-weight: 900; font-size: 26px;'>Filmación aérea</p>
                              <p class='font-weight-normal' style='width: 27.8rem;'>
                                Comunica desde un ángulo diferente <br> <br>
 
                                Trabajamos contenido a la altura de tu proyecto. Más que una grabación, <strong>ofrecemos estrategia audiovisual que emocione.</strong> Muéstrate sumamente profesional y atrayente con tomas aéreas. <br> <br>

                                Cubrimos producciones corporativas, eventos sociales, edificios, paisajes, escenarios, y más.
                            </p>
                          </div>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/ofrecemos 02 1.png" alt="Ofrecemos imagen 1">
                      </div>
               </div>
               <div class='py-5 my-5 pl-5'>
                   <div class='w-100 d-flex justify-content-center position-relative' style='height: 12.1rem' >
                        <div class='w-90 bg-fa' style='height: 12.1rem'></div>
                    </div>
                      <div class='w-90 d-flex position-relative justify-content-around flex-wrap align-items-center' style='margin-top: -16rem'>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/ofrecemos 03 1.png" alt="Ofrecemos imagen 1">
                          <div>
                              <p class='text-red' style='font-weight: 900; font-size: 26px;'>Desarrollo de guiones</p>
                              <p class='font-weight-normal' style='width: 27.8rem;'>
                                Historias contadas de forma inolvidable. <br> <br>

                                Construimos narrativas según tu objetivo de comunicación. Planteamos <strong> guiones originales, entretenidos y que generen una reacción positiva para la marca. </strong> <br> <br>

                                Ofrecemos nuestra redacción estratégica para spots publicitarios, animaciones, contenido en redes sociales u otros proyectos empresariales.
                              </p>
                          </div>
                      </div>
               </div>
               
               <!-- PORTAFOLIO -->

                <section>
                       <div class="bg-white big-title text-center text-red">PORTAFOLIO</div>                 
                           <?php echo get_template_part('components/video-galery','full', array('video1' => 'zpq6oje5FsA', 'video2' => '-SdnP9s5cF8'));   ?>
                 </section>
               


               <!-- TAB - 2 -->

                </div>
            <div id="menu1" class="tab-pane fade"><br>
            <div style='margin-top: 3.4rem' class="tab-content">
               <div class="bg-faint-gray py-5">
                <div class="big-title text-red my-4 text-center">
                Animación 2D
                </div>
                <div class="container">
                    <div class="row">
                    <div class="col-sm-6">

            <div class="my-3">
                <div class="text-green  my-3 text-left" style='width: 90%; font-weight: 900; font-size: 1.6rem'>
                Crea historias que enganchen
                </div>
            </div>
            <p class='font-weight-normal w-90' style='line-height: 22px; font-size: 1rem'>
            Comunicamos información relevante y contenido de interés de la manera más <strong>creativa y cautivadora.</strong> Aplicable a <b>videos para comunicación interna y externa,</b> eventos corporativos, tutoriales y otros. <br> <br>
            Manejamos diversos estilos de animación: motion graphic, stop motion y otros. Contamos con un equipo especializado en Illustrator, After effects, Premier, Audition, Cinema 4D y 3D Max.
            </p>
            </div>
                  <div class="col-sm-6">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/animacion-2d.png" alt="Cámara fotográfica">
                  </div>
                    </div>
                </div>
                </div>
                <?php
                 $parameters = array('color' => '#ED1164', 'position' => '') ;
                 get_template_part('components/border-circle','full', $parameters ); 
                ?>
                <div >
                     <div class="big-title text-red text-center py-5" style='display: flex; flex-direction: column; align-items: center;'>
                     ¿Cómo lo hacemos?
                       <div class="line-h"></div>
                     </div>
                     <div>
                         <div class="d-flex justify-content-center">
                             <div>  
                                 <div class="mb-1">
                                     <div class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-lo-hacemos1.svg"></div>
                                          <div class="d-inline-block ml-1" style='width: 14.5rem;'>
                                          <b> Desarrollo </b> de concepto.
                                            </div>   
                                   </div> 
                                    <div class="ml-5">
                                        <img  class="points-line-position" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line1.svg">
                                    </div>
                                   
                             </div>
                             <div> 
                                <div> 
                                    <svg width="10" height="114" viewBox="0 0 7 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 3.5C0 1.567 1.567 0 3.5 0C5.433 0 7 1.567 7 3.5V52.5C7 54.433 5.433 56 3.5 56C1.567 56 0 54.433 0 52.5V3.5Z" fill="#ED1164"/>
                                    </svg>
                                 </div> 
                                 <div class="position-relative">
                                    <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/verticalLine.svg">
                                </div>
                                
                              </div>
                             <div >
                                   <div class="mb-1 mt-5 ml-5">
                                   <div class="d-inline-block ml-1">
                                   Creación de <b> Storyboard.</b>

                                    </div>   
                                      <div class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-lo-hacemos2.svg"></div> 
                                   </div> 

                                   <div class="position-relative" style='margin-left: -1rem;'>
                                    <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line2.svg">
                                </div>
                             </div>
                         </div>

                        <div class="d-flex justify-content-center " style='margin-top:-24rem'>
                            <div style='margin-left: 4rem;'>  
                                 <div class="mb-1 d-flex align-items-center">
                                     <div class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-lo-hago3.svg"></div>
                                          <div class="d-inline-block ml-1" style='width: 12rem;'>
                                            <b>Ilustración y caracterización</b> de personajes y escenarios.
                                            </div>  
                                   </div> 
                                    <div class="ml-5">
                                        <img  class="points-line-position" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line3.svg">
                                    </div>
                                   
                             </div>
                             <div >
                                   <div class="mb-1 mt-5 ml-5">
                                   <div class="d-inline-block ml-1">
                                   <b>Animación, musicalización y voz en off.</b>
                                    </div>   
                                      <div class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-lo-hago4.svg"></div> 
                                   </div> 

                                   <div class="position-relative" style='margin-left: 2.5rem;'>
                                    <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line2.svg">
                                </div>
                             </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -10rem;'>
                            <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como lo hacemos.png">
                        </div>
                     </div>
                </div>
                <div class="bg-red">
                   <div class="bg-pink-form rounded" style='height: 27.6rem;'>
                       <div class='w-100 text-right'>
                           <?php
                             $parameters = array('color' => '#019B69', 'position' => 'transform: rotate(-180deg);') ;
                             get_template_part('components/border-circle','full', $parameters ); 
                            ?>
                       </div>
                      <div class='mt-5'>
                        <?php
                          $parameters = array ('svg' => $directory_imgs.'form-quote-request.svg','title'=> '¿Estás listo?');
                          get_template_part('components/form-quote-request','full', $parameters );  
                        ?> 
                      </div>
                    </div>   
                </div>

               <div class='py-5 my-5 pl-5'>
                   <div class='w-100 d-flex justify-content-center position-relative' style='height: 12.1rem' >
                        <div class='w-90 bg-fa' style='height: 12.1rem'></div>
                    </div>
                      <div class='w-90 d-flex position-relative justify-content-around flex-wrap align-items-center' style='margin-top: -16rem'>
                          <div>
                              <p class='text-red' style='font-weight: 900; font-size: 26px;'>Ofrecemos animación 2D para:</p>
                               <ul>
                                    <li>Video-tutoriales.</li>
                                   <li>Presentación de productos o servicios.</li>
                                   <li>Videos infográficos y otros.</li>
                                   <li>Producción de audio (Musicalización, efectos de sonido, masterización de audio, locución).</li>
                               </ul>
                          </div>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/ofrecemos.png" alt="Ofrecemos imagen 1">
                      </div>
               </div>
               
               
               <!-- PORTAFOLIO -->
               

            </div>
         </div>

            <!-- TAB - 3 -->
            <div id="menu2" class="tab-pane fade"><br>
               <div class="bg-faint-gray py-5">
                <div class="big-title text-red my-4 text-center">
                Fotografía Profesional
                </div>
                <div class="container">
                    <div class="row">
                    <div class="col-sm-6">

            <div class="my-3">
                <div class="text-green  my-3 text-left" style='width: 90%; font-weight: 900; font-size: 1.6rem'>
                Crea historias que enganchen
                </div>
            </div>
            <p class='font-weight-normal w-90' style='line-height: 22px; font-size: 1rem'>
            Comunicamos información relevante y contenido de interés de la manera más <strong>creativa y cautivadora.</strong> Aplicable a <b>videos para comunicación interna y externa,</b> eventos corporativos, tutoriales y otros. <br> <br>
            Manejamos diversos estilos de animación: motion graphic, stop motion y otros. Contamos con un equipo especializado en Illustrator, After effects, Premier, Audition, Cinema 4D y 3D Max.
            </p>
            </div>
                  <div class="col-sm-6">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/animacion-2d.png" alt="Cámara fotográfica">
                  </div>
                    </div>
                </div>
                </div>
                <?php
                 $parameters = array('color' => '#ED1164', 'position' => '') ;
                 get_template_part('components/border-circle','full', $parameters ); 
                ?>
                <div >
                     <div class="big-title text-red text-center py-5" style='display: flex; flex-direction: column; align-items: center;'>
                     ¿Cómo lo hacemos?
                       <div class="line-h"></div>
                     </div>
                     <div>
                         <div class="d-flex justify-content-center">
                             <div>  
                                 <div class="mb-1">
                                     <div class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-lo-hacemos1.svg"></div>
                                          <div class="d-inline-block ml-1" style='width: 14.5rem;'>
                                          <b> Desarrollo </b> de concepto.
                                            </div>   
                                   </div> 
                                    <div class="ml-5">
                                        <img  class="points-line-position" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line1.svg">
                                    </div>
                                   
                             </div>
                             <div> 
                                <div> 
                                    <svg width="10" height="114" viewBox="0 0 7 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 3.5C0 1.567 1.567 0 3.5 0C5.433 0 7 1.567 7 3.5V52.5C7 54.433 5.433 56 3.5 56C1.567 56 0 54.433 0 52.5V3.5Z" fill="#ED1164"/>
                                    </svg>
                                 </div> 
                                 <div class="position-relative">
                                    <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/verticalLine.svg">
                                </div>
                                
                              </div>
                             <div >
                                   <div class="mb-1 mt-5 ml-5">
                                   <div class="d-inline-block ml-1">
                                   Creación de <b> Storyboard.</b>

                                    </div>   
                                      <div class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-lo-hacemos2.svg"></div> 
                                   </div> 

                                   <div class="position-relative" style='margin-left: -1rem;'>
                                    <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line2.svg">
                                </div>
                             </div>
                         </div>

                        <div class="d-flex justify-content-center " style='margin-top:-24rem'>
                            <div style='margin-left: 4rem;'>  
                                 <div class="mb-1 d-flex align-items-center">
                                     <div class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-lo-hago3.svg"></div>
                                          <div class="d-inline-block ml-1" style='width: 12rem;'>
                                            <b>Ilustración y caracterización</b> de personajes y escenarios.
                                            </div>  
                                   </div> 
                                    <div class="ml-5">
                                        <img  class="points-line-position" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line3.svg">
                                    </div>
                                   
                             </div>
                             <div >
                                   <div class="mb-1 mt-5 ml-5">
                                   <div class="d-inline-block ml-1">
                                   <b>Animación, musicalización y voz en off.</b>
                                    </div>   
                                      <div class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-lo-hago4.svg"></div> 
                                   </div> 

                                   <div class="position-relative" style='margin-left: 2.5rem;'>
                                    <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line2.svg">
                                </div>
                             </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -10rem;'>
                            <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como lo hacemos.png">
                        </div>
                     </div>
                </div>
                <div class="bg-red">
                   <div class="bg-pink-form rounded" style='height: 27.6rem;'>
                       <div class='w-100 text-right'>
                           <?php
                             $parameters = array('color' => '#019B69', 'position' => 'transform: rotate(-180deg);') ;
                             get_template_part('components/border-circle','full', $parameters ); 
                            ?>
                       </div>
                      <div class='mt-5'>
                        <?php
                          $parameters = array ('svg' => $directory_imgs.'form-quote-request.svg','title'=> '¿Estás listo?');
                          get_template_part('components/form-quote-request','full', $parameters );  
                        ?> 
                      </div>
                    </div>   
                </div>

               <div class='py-5 my-5 pl-5'>
                   <div class='w-100 d-flex justify-content-center position-relative' style='height: 12.1rem' >
                        <div class='w-90 bg-fa' style='height: 12.1rem'></div>
                    </div>
                      <div class='w-90 d-flex position-relative justify-content-around flex-wrap align-items-center' style='margin-top: -16rem'>
                          <div>
                              <p class='text-red' style='font-weight: 900; font-size: 26px;'>Ofrecemos animación 2D para:</p>
                               <ul>
                                    <li>Video-tutoriales.</li>
                                   <li>Presentación de productos o servicios.</li>
                                   <li>Videos infográficos y otros.</li>
                                   <li>Producción de audio (Musicalización, efectos de sonido, masterización de audio, locución).</li>
                               </ul>
                          </div>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/ofrecemos.png" alt="Ofrecemos imagen 1">
                      </div>
               </div>
               
               
               <!-- PORTAFOLIO -->
               

            </div>
            </div>
        </div>
    </div>

</section>


<?php get_footer();
?>
