<?php
/* 
    Template Name: desarrollo&software
*/
get_header();
$path_software =
    get_template_directory_uri() . '/assets/images/desarrollo-de-software/';
?>

<style>
.height-banner {
  margin-top: -.35rem;
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

.line-h{
    width: 4.9rem;
    height: 0.2rem;
    background: #ED1164;
    border-radius: 10px;
}

.store {
  font-size: 22px;
}

.w100-auto {
  width: auto;
}

.ml-n1-4 {
  margin-left: auto;
}

.ml-n1-17 {
  margin-left: auto;
}

.mb-10 {
  margin-bottom: 10rem;
}

.marg-left-1 {
	margin-left: 0;
}

.box {
	width: 35%;
	height: 7px;
	background: #03479C;
}

</style>

<section id="slider">
  <!----------------- Banner ----------------->
	<div
		class="carousel slide"
		data-ride="carousel"
	>
		<div class="float-rectangle-banner">
			<div id="rectangle" class="text-center"></div>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/banner.png"
					alt="Los Angeles"
					width="1100"
					height="500"
          class="w-100"
				/>
				<div class="carousel-caption" style="top: 5rem; bottom: auto; left: 10%;">
					<div class="col-8 flex-colum text-left p-0">
            <h1 class="develop-title" data-wow-delay="0.3s">Creadores de aplicaciones</h1>
            <p class="text-paragraph" data-wow-delay="0.3s">MÓVILES &</p>
            <div class="d-flex align-center">
              <p class="text-paragraph2 mr-2" data-wow-delay="0.3s">SOFTWARE</p>
              <img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/title-icon.svg"
								/>
            </div>
						<div class="text-subtitle-btl">
              Es momento de ponerte en modo digital. <br> Ofrecemos la combinación perfecta de diseño, usabilidad y técnología.
						</div>
              <div class="mt-3 text-left">
                <button class="btn-btl">
                  <span>¡Desafíanos con tu proyecto!</span>
                </button>
              </div>
						</div>
					</div>				
				</div>
			</div>
		</div>
  <!----------------- Banner ----------------->
  <!----------------- Tabs ----------------->
  <section>
	<div class="bg-white">
		<!-------------------nav-------------------->
		<div class="group-nav">
			<ul class="nav nav-pills justify-content-center" role="tablist">
				<?php foreach (
        [
            [
                'svg' => 'first-tab.svg',
                'title' => 'Tiendas <br> virtuales',
                'href' => '#home',
                'active' => 'active',
                'path' => $path_software,
            ],
            [
                'svg' => 'second-tab.svg',
                'title' => 'Páginas <br> web',
                'href' => '#events',
                'active' => '',
                'path' => $path_software,
            ],
            [
                'svg' => 'third-tab.svg',
                'title' => 'App <br> móviles',
                'href' => '#relations',
                'active' => '',
                'path' => $path_software,
            ],
            [
                'svg' => 'fourth-tab.svg',
                'title' => 'Software <br> a medida',
                'href' => '#sales',
                'active' => '',
                'path' => $path_software,
            ],
            [
                'svg' => 'fifth-tab.svg',
                'title' => 'Diseño <br> UX & UI',
                'href' => '#hostess',
                'active' => '',
                'path' => $path_software,
            ],
        ]
        as $nav
    ) {
        get_template_part('components/circle-nav-2', 'full', $nav);
    } ?>
			</ul>
		</div>
		<!-------------------nav-------------------->

		<!-------------------Tab---------------------->
		<div class="tab-content" style="overflow: hidden">
			<!------------BTL------------>
			<div id="home" class="tab-pane active">
				<br>
				<!----------------------Main---------------------->
				<section class="p-0">
					<div class="bg-light-gray py-0 mb-5">
            <!-------------------Card---------------------->
						<div class="py-2">
              <div class="big-title text-blue my-2 text-center pt-5" style="line-height: 25px;">
                E-commerce <br> <span class="store font-weight-normal">(Tiendas Virtuales)</span>
              </div>
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-md-11 col-lg-6 d-flex align-items-center">
										<div class="card bg-transparent border-0">
											<div class="card-body">
												<h3 class="text-left text-blue p-1 font-weight-bold">¿Alguien dijo más ventas?</h3>
												<p class="text-justify text-light-gray p-1">
												Vende las 24 horas los 7 días a la semana con una tienda virtual efectiva. Ofrece una <strong>experiencia de compra online única y segura.</strong> <br> <br>
                        Podrás editar tus productos, sus características (precios, promociones, stock, métodos de cobro, envíos y más), y gestionar tus pedidos desde una sola interfaz.
												</p>
											</div>
										</div>
									</div>
									<div class="col-md-10 col-lg-6">
										<img
											src="<?php echo $path_software; ?>tiendas-virtuales.png"
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
				<!-----------------------Service----------------------------->
				<div class="mt-3" style="margin-top: -3.2rem">
					<div class="big-title text-red text-center">El servicio incluye:
            <div class="text-center w-100 d-flex justify-content-center">
              <div class="line-h mb-5"></div>
            </div>
          </div>
					<div >
           <div>
             <div class="d-block d-lg-flex justify-content-center">
               <div class="text-center">  
                 <div class="mb-1">
                   <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-incluye1.svg">
                  </div>
                  <div class="d-inline-block ml-1 mt-3 mt-lg-0 text-center w-14 text-lg-left">
                  <b>Diseño personalizado</b> <br> y enfocado en la experiencia de usuario.
                  </div>   
                 </div> 
                <div class="ml-5">
                    <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line1.svg">
                </div>
                    <!-----------------------BoxShadow Line----------------------------->
                    <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                    <!-----------------------BoxShadow Line----------------------------->
               </div>
                 <div class="d-none d-lg-block"> 
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
                       <div class="
                        mb-1 
                        mt-5 
                        d-flex 
                        flex-column-reverse
                        flex-lg-row
                        w100-auto
                        justify-content-center 
                        justify-content-lg-around 
                        ml-lg-5 
                        align-items-center 
                        ">
                       <div class="d-inline-block ml-1 mt-3 mt-lg-0 text-center text-lg-right">
                       Desarrollo a medida <br> o en CMS.
                        </div>   
                          <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-incluye2.svg"></div> 
                       </div> 
                      <!-----------------------BoxShadow Line----------------------------->
                      <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                      <!-----------------------BoxShadow Line----------------------------->
                       <div class="position-relative" style='margin-left: -1rem;'>
                        <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/line-blue.svg">
                    </div>
                 </div>
             </div>

              <div class="d-block d-lg-flex justify-content-center margin-negative">
                  <div class="m-left-4">  
                       <div class="text-center mb-1 mt-5 d-block d-lg-flex justify-content-center align-items-lg-center justify-content-lg-start">
                           <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block">
                             <img class="mr-0 mr-lg-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-incluye3.svg"></div>
                                <div class="d-inline-block ml-1 mt-3 mt-lg-0 w-12 text-center text-lg-left">
                                Integración de <b>medios de pagos online.</b>
                                  </div>  
                         </div> 
                          <div class="ml-5">
                              <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line3.svg">
                          </div>
                          <!-----------------------BoxShadow Line----------------------------->
                        <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                        <!-----------------------BoxShadow Line----------------------------->
                   </div>
                   <div style="margin-bottom: 6rem; margin-top: -2rem;" class="mt-4">
                         <div class="mb-1 mt-5 d-flex flex-column-reverse mt-lg-5 align-items-center flex-lg-row">
                         <div class="d-inline-block ml-1 mt-3 mt-lg-0 w-15 text-center text-lg-left">
                          Desarrollo de un <b> Backoffice </b> para la gestión de pedidos.
                          </div>   
                            <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-incluye4.svg"></div> 
                         </div> 
                         <div class="position-relative" style='margin-left: -1rem;'>
                         <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/line-blue.svg">
                      </div>
                   </div>
              </div>
              <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -10rem;'>
                  <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-incluye.png">
              </div>
           </div>
          </div>
				</div>
				<!-----------------------Service----------------------------->

				<div class='mt-5'>
        <!-----------------------Contact----------------------------->
				<?php 
					get_template_part('components/form-quote-request2','full', 
					array (
						'image' => $path_software.'form-quote-request.svg',
						'title'=> '¡Empecemos ahora!'
					));  	 
				?>
				<!-----------------------Contact----------------------------->
      </div>

				<!------------------Portafolio-------------------->
				
				<!------------------Portafolio-------------------->

			</div>
			<!------------BTL------------>

			<!----------Events---------->
			<div id="events" class="tab-pane fade">
				<br>
				<!----------------------Main---------------------->
				<section class="p-0">
					<div class="bg-light-gray py-0">
						<div class="big-title text-red my-2 text-center">Páginas Web</div>
						<!-------------------Card---------------------->
						<div class="py-2">
							<div class="container">
								<div class="row flex-column-reverse flex-lg-row justify-content-center align-items-center">
									<div class="col-md-10 col-lg-5 py-2 text-center">
										<img
											src="<?php echo $path_software; ?>Web-ilustración 2.png"
											alt=""
											class="img-fluid"
										/>
									</div>
									<div class="col-md-11 col-lg-7 py-2 d-flex align-items-end">
										<div class="card bg-transparent border-0">
											<div class="card-body pb-0">
												<h3 class="subtitle-btl text-blue text-left">Si no tienes presencia digital, no existes</h3>
												<p class="text-justify text-light-gray p-1">
                        Ubica tu negocio en el espacio digital con una página web profesional, atractiva y amigable. Que te encuentren cuando te busquen. 
                        <br> <br>
                        Lograrás transmitir una imagen profesional a través de una pantalla. Nuestros diseños centrados en el usuario harán que te escojan y te prefieran. Proponemos la forma ideal de mostrar tu información según tu rubro y público objetivo.  

												</p>
												<div class="d-none d-lg-block">
													<img
														src="<?php echo $path_img; ?>third-event.svg"
														alt=""
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

				<?php get_template_part('components/border-circle', 'full', [
        'color' => '#ED1164',
        'position' => '',
    ]); ?>

				<!-----------------------Service paht two----------------------------->
				<div class="mt-3" style="margin-top: -3.2rem">
					<div class="big-title text-red text-center">El servicio incluye:
            <div class="text-center w-100 d-flex justify-content-center">
              <div class="line-h mb-5"></div>
            </div>
          </div>
					<div >
           <div>
             <div class="d-block d-lg-flex justify-content-center">
               <div class="text-center">  
                 <div class="mb-1">
                   <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-incluye1.svg">
                  </div>
                  <div class="d-inline-block ml-1 mt-3 mt-lg-0 text-center w-14 text-lg-left">
                  <b>Diseño personalizado</b> <br> y responsivo.
                  </div>   
                 </div> 
                <div class="ml-5">
                    <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line1.svg">
                </div>
                    <!-----------------------BoxShadow Line----------------------------->
                    <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                    <!-----------------------BoxShadow Line----------------------------->
               </div>
                 <div class="d-none d-lg-block"> 
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
                       <div class="
                        mb-1 
                        mt-5 
                        d-flex 
                        flex-column-reverse
                        flex-lg-row
                        w100-auto
                        justify-content-center 
                        justify-content-lg-end 
                        ml-lg-5 
                        align-items-center 
                        ">
                       <div class="d-inline-block ml-1 mt-3 mt-lg-0 text-center text-lg-right mr-lg-2">
                       Publicidad y <br>Desarrollo.
                        </div>   
                          <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block ml-lg-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-path2-2.svg"></div> 
                       </div> 
                      <!-----------------------BoxShadow Line----------------------------->
                      <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                      <!-----------------------BoxShadow Line----------------------------->
                       <div class="position-relative" style='margin-left: -1rem;'>
                        <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/line-blue.svg">
                    </div>
                 </div>
             </div>

              <div class="d-block d-lg-flex justify-content-center margin-negative-27">
                  <div class="m-left-4">  
                       <div class="text-center mb-1 mt-5 d-block d-lg-flex justify-content-center align-items-lg-center justify-content-lg-start">
                           <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block">
                             <img class="mr-0 mr-lg-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-path2-3.svg"></div>
                                <div class="d-inline-block ml-1 mt-3 mt-lg-0 w-12 text-center text-lg-left">
                                  <b>Definición de la estrategia del proyecto.</b>
                                </div>  
                         </div> 
                          <div class="ml-5">
                              <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line3.svg">
                          </div>
                          <!-----------------------BoxShadow Line----------------------------->
                        <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                        <!-----------------------BoxShadow Line----------------------------->
                   </div>
                   <div style="margin-top: -2rem;" class="mt-4 mb-10">
                         <div class="mb-1 mt-5 d-flex flex-column-reverse mt-lg-5 align-items-center flex-lg-row">
                         <div class="d-inline-block ml-1 mt-3 mt-lg-0 w-15 text-center text-lg-left">
                          <b> Maquetación y arquitectura. </b>
                          </div>   
                            <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-path2-4.svg"></div> 
                         </div> 
                         <div class="position-relative" style='margin-left: -1rem;'>
                         <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/line-blue.svg">
                      </div>
                      <!-----------------------BoxShadow Line----------------------------->
                      <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                      <!-----------------------BoxShadow Line----------------------------->
                   </div>
              </div>


              <div class="d-block d-lg-flex justify-content-center " style="margin-top: -7rem;">
                  <div class="ml-n1-17">
                       <div class="text-center mb-1 mt-5 d-block d-lg-flex justify-content-center align-items-lg-center justify-content-lg-start">
                           <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block">
                             <img class="mr-0 mr-lg-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-path2-5.svg"></div>
                                <div class="d-inline-block ml-1 mt-3 mt-lg-0 w-12 text-center text-lg-left">
                                  <b>Implementación <br> y mantenimiento</b>
                                </div>  
                         </div> 
                          <div class="ml-5">
                              <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line3.svg">
                          </div>
                   </div>
                   <div style="margin-bottom: 6rem; margin-top: -2rem;" class="mt-4">
                         <div class="mb-1 mt-5 d-flex flex-column-reverse mt-lg-5 align-items-center flex-lg-row">
                         <div class="d-none">
                          <b> Maquetación y arquitectura. </b>
                          </div>   
                            <div class="d-none"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-path2-4.svg"></div> 
                         </div> 
                         <div class="position-relative" style=''>
                         <img  class="d-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/line-blue.svg">
                      </div>
                   </div>
              </div>
              
              <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -10rem;'>
                  <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/SERVICIO-web-imagen-2 1.png">
              </div>
           </div>
          </div>
				</div>
				<!-----------------------Service paht two----------------------------->
        <!-----------------------Circle Right----------------------------->
        <div class='w-100 text-right' style="margin-bottom: -10rem">
                <?php
                  $parameters = array('color' => '#03479C', 'position' => 'right') ;
                  get_template_part('components/border-circle','full', $parameters ); 
                  ?>
                </div>
                <!-----------------------Circle Right----------------------------->

        <div class='mt-5'>
        <!-----------------------Contact----------------------------->
				<?php 
					get_template_part('components/form-quote-request2','full', 
					array (
						'image' => $path_software.'form-quote-request.svg',
						'title'=> 'Estamos listos. ¡Contáctanos!'
					));  	 
				?>
				<!-----------------------Contact----------------------------->
      </div>

				<!-----------------Section-------------------->
				<section class="p-0 mt-5">
					<!-------------------Card---------------------->
					<div class="card-btl">
						<div class="container bg-fa">
							<div class="row justify-content-center align-items-center">
								<div class="col-md-10 col-lg-6 d-flex align-items-center">
									<div class="card bg-transparent border-0">
										<div class="card-body">
											<p class="text-light-gray">
												Puedes solicitar el desarrollo de una <br> <span class="font-weight-bold text-blue">web administrable</span> que incluye:
											</p>
											<div class="d-flex flex-wrap text-light-gray">
												<ul class="card-text px-4 col-12 col-md-10 col-lg-6 text-light-gray">
													<li class="text-event"><b>Diseño personalizado</b></li>
													<li class="text-event">5 a 7 menús (páginas)</li>
													<li class="text-event"><b>Formulario de contacto</b></li>
													<li class="text-event">Chat de atención al cliente</li>
													<li class="text-event"><b>Blog</b></li>
												</ul>
												<ul class="card-text px-4 col-12 col-md-10 col-lg-6 text-light-gray">
													<li class="text-event">Administrador de contenidos</li>
													<li class="text-event"><b>Web Estática</b></li>
													<li class="text-event">Diseño personalizado</li>
													<li class="text-event"><b>5 menús (páginas)</b></li>
													<li class="text-event">Formulario de contacto</li>
												</ul>
											</div>
											
										</div>
										<div class="d-flex w-100 justify-content-center">
											<div class="box my-5 my-lg-0"></div>
										</div>
									</div>
								</div>
								<div class="col-md-10 col-lg-6">
									<img
										src="<?php echo $path_software; ?>web-administrable.svg"
										alt=""
										class="img-fluid img-float-event"
									/>
								</div>
							</div>
						</div>
					</div>
					<!------------Card---------->	
					<!--------- Portafolio tab2 --------->
					<!--------- Portafolio tab2 --------->
				</section>
				<!-----------------Section-------------------->
			</div>
			<!----------Events---------->

			<!----------relations---------->
			<div id="relations" class="tab-pane fade">
				<br>
				<!----------------------Main---------------------->
				<section class="p-0">
					<div class="bg-light-gray py-0">
						<div class="big-title text-red my-2 text-center">App móviles</div>
						<!-------------------Card---------------------->
						<div class="py-2">
							<div class="container">
								<div class="row flex-lg-row justify-content-center align-items-center mb-5 mb-md-0">
									<div class="col-md-11 col-lg-6 d-flex align-items-center">
										<div class="card bg-transparent border-0">
											<div class="card-body">
												<h3 class="subtitle-btl text-left p-1">Establece vínculos sólidos y perdurables</h3>
												<div class="text-justify text-light-gray p-1">
												<strong>Hacemos que tu voz suene en los medios.</strong> Te
												asesoramos en la selección de los medios efectivos para un
												mayor impacto.<br />
												Formulamos
												<strong
													>estrategias de comunicación para construir tu reputación
													mediática.</strong>
												</div>
												<div class="text-justify text-light-gray p-1">
													Monitoreamos las líneas de acción para consolidar las
													relaciones con tu comunidad. Cubrimos actividades online y
													offline.	
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-10 col-lg-6 text-center mb-3 mb-md-0">
										<img
											src="<?php echo $path_software; ?>Appss-ilustración.png"
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

				<?php get_template_part('components/border-circle', 'full', [
        'color' => '#ED1164',
        'position' => '',
    ]); ?>

				<!-----------------------Service tab3----------------------------->
				<div class="mt-3" style="margin-top: -3.2rem">
					<div class="big-title text-red text-center">¿Cómo trabajamos?
            <div class="text-center w-100 d-flex justify-content-center">
              <div class="line-h mb-5"></div>
            </div>
          </div>
					<div >
           <div>
             <div class="d-block d-lg-flex justify-content-center">
               <div class="text-center">  
                 <div class="mb-1 d-block d-lg-flex justify-content-between align-items-center">
                   <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/como-trabajamos1.svg">
                  </div>
                  <div class="d-inline-block ml-1 mt-3 mt-lg-0 text-center w-14 text-lg-left">
                  <b>Planificamos según tus objetivos y necesidades.</b>
                  </div>   
                 </div> 
                <div class="ml-5">
                    <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line1.svg">
                </div>
                    <!-----------------------BoxShadow Line----------------------------->
                    <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                    <!-----------------------BoxShadow Line----------------------------->
               </div>
                 <div class="d-none d-lg-block"> 
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
                       <div class="
                        mb-1 
                        mt-5 
                        d-flex 
                        flex-column-reverse
                        flex-lg-row
                        w100-auto
                        justify-content-center 
                        justify-content-lg-around 
                        align-items-center 
                        ">
												<div class="d-inline-block ml-1 mt-3 mt-lg-0 text-center text-lg-right" style="width: 14rem;">
												<b>Definimos las funciones</b> <br> que cubran las necesidades actuales y que se anticipen a las futuras.

                        </div>   
                          <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block ml-lg-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-path2-4.svg"></div> 
                       </div> 
                      <!-----------------------BoxShadow Line----------------------------->
                      <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                      <!-----------------------BoxShadow Line----------------------------->
                       <div class="position-relative" style='margin-left: -1rem;'>
                        <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/line-blue.svg">
                    </div>
                 </div>
             </div>

              <div class="d-block d-lg-flex justify-content-center margin-negative">
                  <div class="marg-left-1">  
                       <div class="text-center mb-1 mt-5 d-block d-lg-flex justify-content-center align-items-lg-center ml-n1-4 justify-content-lg-start">
                           <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block">
                             <img class="mr-0 mr-lg-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/como-trabajamos3.svg"></div>
                                <div class="d-inline-block ml-1 mt-3 mt-lg-0 w-12 text-center text-lg-left">
                                <b>Establecemos el flujo <br> de navegación y diseño </b>pensando en el usuario. 
                                  </div>  
                         </div> 
                          <div class="ml-5">
                              <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line3.svg">
                          </div>
                          <!-----------------------BoxShadow Line----------------------------->
                        <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                        <!-----------------------BoxShadow Line----------------------------->
                   </div>
                   <div style="margin-bottom: 6rem; margin-top: -2rem;" class="mt-4">
                         <div class="mb-1 mt-5 d-flex flex-column-reverse mt-lg-5 align-items-center flex-lg-row">
                         <div class="d-inline-block ml-1 mt-3 mt-lg-0 w-15 text-center text-lg-left">
                          <b>Realizamos testing y control de calidad.</b>
                          </div>   
                            <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/como-trabajamos4.svg"></div> 
                         </div> 
                         <div class="position-relative" style='margin-left: -1rem;'>
                         <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/line-blue.svg">
                      </div>
                   </div>
              </div>
              <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -10rem;'>
                  <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-imagen.png">
              </div>
           </div>
          </div>
				</div>
				<!-----------------------Service tab3----------------------------->			

				<!-----------------------Circle Right----------------------------->
        <div class='w-100 text-right' style="margin-bottom: -10rem">
        <?php
          $parameters = array('color' => '#03479C', 'position' => 'right') ;
          get_template_part('components/border-circle','full', $parameters ); 
          ?>
        </div>
                <!-----------------------Circle Right----------------------------->

        <div class='mt-5'>
        <!-----------------------Contact----------------------------->
				<?php 
					get_template_part('components/form-quote-request2','full', 
					array (
						'image' => $path_software.'form-quote-request.svg',
						'title'=> 'Define tu presupuesto'
					));  	 
				?>
				<!-----------------------Contact----------------------------->
				<!-------------------------- list -------------------------->
				<div class="py-5">
					<div class="big-title text-red text-center">Utiliza una app móvil para:
	          <div class="text-center w-100 d-flex justify-content-center">
	            <div class="line-h mb-5"></div>
	          </div>
	        </div>
					<div class="container d-flex flex-wrap justify-content-around align-items-center">
						<ul class="col-12 col-md-6 col-lg-4">
							<li>Seguimiento de clientes/proveedores</li>
							<li>Gestión de stock</li>
							<li>Geolocalización</li>
							<li>Brindar información</li>
						</ul>
						
						<ul class="col-12 col-md-6 col-lg-4">
							<li>Ventas y promociones</li>
							<li>Servicio de delivery</li>
							<li>Almacenamiento y tratamiento de información y otros</li>
						</ul>
					</div>
				</div>
				<!-------------------------- list -------------------------->
				<!----------------------- Portafolio tab3 ----------------------->
				<!----------------------- Portafolio tab3 ----------------------->
			</div>
			</div>
			<!---------relations------------>

			<!----------Sales---------->
			<div id="sales" class="tab-pane fade">
				<br>
				<!----------------------Main---------------------->
				<section class="p-0">
					<div class="bg-light-gray py-0">
						<div class="big-title text-red my-2 text-center">Software a medida</div>
						<!-------------------Card---------------------->
						<div class="py-2">
							<div class="container">
								<div class="row justify-content-center">
								<div class="col-md-10 col-lg-6">
										<img
											src="<?php echo $path_software; ?>software-medida.png"
											alt="Imagen de software a medida"
											class="img-fluid"
										/>
									</div>
									<div class="col-md-11 col-lg-6 d-flex align-items-center">
										<div class="card bg-transparent border-0">
											<div class="card-body">
												<h3 class="subtitle-btl text-left p-1">Soluciones para necesidades únicas</h3>			
												<div class="text-justify text-light-gray p-1">
													<strong>Nos adaptamos a la complejidad de cualquier proyecto.</strong> Nuestro equipo te ayudará a definir y desarrollar las herramientas que necesites, ya sea para que emprendas un nuevo proyecto o para que le des un giro o impulso a tu empresa. <br> <br> Contamos con personal especializado en distintos tipos de lenguajes de programación : PHP, Java, Java script, Ruby, Node.js, C++, Visual.Net, C#. Python. <br> <br> Tenemos especialistas para todas las etapas del desarrollo: Diseño UX y UI, frontend, backend, seguridad informática y QA Testing.
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

				<?php get_template_part('components/border-circle', 'full', [
        'color' => '#ED1164',
        'position' => '',
    ]); ?>

				<!-----------------------Service paht two----------------------------->
				<div class="mt-3" style="margin-top: -3.2rem">
					<div class="big-title text-red text-center">El servicio incluye:
            <div class="text-center w-100 d-flex justify-content-center">
              <div class="line-h mb-5"></div>
            </div>
          </div>
					<div >
           <div>
             <div class="d-block d-lg-flex justify-content-center">
               <div class="text-center">  
                 <div class="mb-1">
                   <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/tab4-servicio1.svg">
                  </div>
                  <div class="d-inline-block ml-1 mt-3 mt-lg-0 text-center w-14 text-lg-left">
                  <b>Software ERP.</b>
                  </div>   
                 </div> 
                <div class="ml-5">
                    <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line1.svg">
                </div>
                    <!-----------------------BoxShadow Line----------------------------->
                    <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                    <!-----------------------BoxShadow Line----------------------------->
               </div>
                 <div class="d-none d-lg-block"> 
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
                       <div class="
                        mb-1 
                        mt-5 
                        d-flex 
                        flex-column-reverse
                        flex-lg-row
                        w100-auto
                        justify-content-center 
                        justify-content-lg-end 
                        ml-lg-5 
                        align-items-center 
                        ">
                       <div class="d-inline-block ml-1 mt-3 mt-lg-0 text-center text-lg-right mr-lg-2">
                       <b>Software CRM.</b>
                        </div>   
                          <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/tab4-servicio2.svg"></div> 
                       </div> 
                      <!-----------------------BoxShadow Line----------------------------->
                      <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                      <!-----------------------BoxShadow Line----------------------------->
                       <div class="position-relative" style='margin-left: -1rem;'>
                        <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/line-blue.svg">
                    </div>
                 </div>
             </div>

              <div class="d-block d-lg-flex justify-content-center margin-negative-27">
                  <div class="m-left-4">  
                       <div class="text-center mb-1 mt-5 d-block d-lg-flex justify-content-center align-items-lg-center justify-content-lg-start">
                           <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block">
                             <img class="mr-0 mr-lg-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/tab4-servicio3.svg"></div>
                                <div class="d-inline-block ml-1 mt-3 mt-lg-0 w-12 text-center text-lg-left">
                                  <b>Sistemas de Matrícula.</b>
                                </div>  
                         </div> 
                          <div class="ml-5">
                              <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line3.svg">
                          </div>
                          <!-----------------------BoxShadow Line----------------------------->
                        <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                        <!-----------------------BoxShadow Line----------------------------->
                   </div>
                   <div style="margin-top: -2rem;" class="mt-4 mb-10">
                         <div class="mb-1 mt-5 d-flex flex-column-reverse mt-lg-5 align-items-center flex-lg-row">
                         <div class="d-inline-block ml-1 mt-3 mt-lg-0 w-15 text-center text-lg-left">
                          <b>Sistemas de gestión de <br> ventas e ingresos.</b>
                          </div>   
                            <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/tab4-servicio4.svg"></div> 
                         </div> 
                         <div class="position-relative" style='margin-left: -1rem;'>
                         <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/line-blue.svg">
                      </div>
                      <!-----------------------BoxShadow Line----------------------------->
                      <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                      <!-----------------------BoxShadow Line----------------------------->
                   </div>
              </div>


              <div class="d-block d-lg-flex justify-content-center " style="margin-top: -7rem;">
                  <div class="ml-n1-17">
                       <div class="text-center mb-1 mt-5 d-block d-lg-flex justify-content-center align-items-lg-center justify-content-lg-start">
                           <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block">
                             <img class="mr-0 mr-lg-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/tab4-servicio5.svg"></div>
                                <div class="d-inline-block ml-1 mt-3 mt-lg-0 w-12 text-center text-lg-left">
                                  <b>Sistemas de <br> control de stock.</b>
                                </div>  
                         </div> 
                          <div class="ml-5">
                              <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line3.svg">
                          </div>
                   </div>
                   <div style="margin-bottom: 6rem; margin-top: -2rem;" class="mt-4">
                         <div class="mb-1 mt-5 d-flex flex-column-reverse mt-lg-5 align-items-center flex-lg-row">
                         <div class="d-none">
                          <b> Maquetación y arquitectura. </b>
                          </div>   
                            <div class="d-none"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-path2-4.svg"></div> 
                         </div> 
                         <div class="position-relative" style=''>
                         <img  class="d-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/line-blue.svg">
                      </div>
                   </div>
              </div>
              
              <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -10rem;'>
                  <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/software-medida-icon.png">
              </div>
           </div>
          </div>
				</div>
				<!-----------------------Service paht two----------------------------->
        <!-----------------------Circle Right----------------------------->
        <div class='w-100 text-right' style="margin-bottom: -10rem">
                <?php
                  $parameters = array('color' => '#03479C', 'position' => 'right') ;
                  get_template_part('components/border-circle','full', $parameters ); 
                  ?>
                </div>
                <!-----------------------Circle Right----------------------------->

        <div class='mt-5'>
        <!-----------------------Contact----------------------------->
				<?php 
					get_template_part('components/form-quote-request2','full', 
					array (
						'image' => $path_software.'form-quote-request.svg',
						'title'=> '¿Un proyecto en mente?'
					));  	 
				?>
				<!-----------------------Contact----------------------------->
				<!-----------------------Portafolio tab4----------------------------->
				<!-----------------------Portafolio tab4----------------------------->
				</div>
			</div>
			<!----------Sales---------->

			<!----------Hostess---------->
			<div id="hostess" class="tab-pane fade">
				<br>
				<!----------------------Main---------------------->
				<section class="p-0">
					<div class="bg-light-gray py-0">
						<div class="big-title text-red my-2 text-center">Diseño UX & UI</div>
						<!-------------------Card---------------------->
						<div class="pt-2 pb-5">
							<div class="container">
							<div class="row justify-content-center d-flex flex-column-reverse flex-lg-row">
								<div class="col-md-10 col-lg-6">
										<img
											src="<?php echo $path_software; ?>ilustración-UX-UI 2.png"
											alt=""
											class="img-fluid"
										/>
									</div>
									<div class="col-md-11 col-lg-6 d-flex align-items-center">
										<div class="card bg-transparent border-0">
											<div class="card-body">
												<h3 class="subtitle-btl text-left p-1">Genera la mejor experiencia de usuario en tu plataforma</h3>
												<p class="text-justify text-light-gray p-1">
													Nos basamos en el diseño centrado en el usuario para crear <strong>plataformas intuitivas.</strong> <br> <br>

													Partimos de la investigación de las necesidades del usuario y del análisis de la usabilidad de tu interfaz para proponerte un <strong>diseño efectivo que garantice la mejor experiencia de usuario. </strong><br> <br>

													Hacemos que la navegabilidad sea <strong>clara, sencilla y que encamine al usuario a tomar una acción concreta.</strong>
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

				<?php get_template_part('components/border-circle', 'full', [
        'color' => '#ED1164',
        'position' => '',
    ]); ?>

				<!-----------------------Service tab6----------------------------->
				<div class="mt-3" style="margin-top: -3.2rem">
					<div class="big-title text-red text-center">¿Cómo trabajamos?
            <div class="text-center w-100 d-flex justify-content-center">
              <div class="line-h mb-5"></div>
            </div>
          </div>
					<div >
           <div>
             <div class="d-block d-lg-flex justify-content-center">
               <div class="text-center">  
                 <div class="mb-1 d-block d-lg-flex justify-content-between align-items-center">
                   <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/como-trabajamos3.svg">
                  </div>
                  <div class="d-inline-block ml-1 mt-3 mt-lg-0 text-center w-14 text-lg-left">
                  <b>Investigación del perfil</b> de usuario.
                  </div>   
                 </div> 
                <div class="ml-5">
                    <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line1.svg">
                </div>
                    <!-----------------------BoxShadow Line----------------------------->
                    <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                    <!-----------------------BoxShadow Line----------------------------->
               </div>
                 <div class="d-none d-lg-block"> 
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
                       <div class="
                        mb-1 
                        mt-5 
                        d-flex 
                        flex-column-reverse
                        flex-lg-row
                        w100-auto
                        justify-content-center 
                        justify-content-lg-around 
                        align-items-center 
                        ">
												<div class="d-inline-block ml-1 mt-3 mt-lg-0 text-center text-lg-right" style="width: 14rem;">
												<b>Desarrollo del mapa de navegación, animación y transiciones.</b>

                        </div>   
                          <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block ml-lg-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/diseño-servicio2.svg"></div> 
                       </div> 
                      <!-----------------------BoxShadow Line----------------------------->
                      <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                      <!-----------------------BoxShadow Line----------------------------->
                       <div class="position-relative" style='margin-left: -1rem;'>
                        <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/line-blue.svg">
                    </div>
                 </div>
             </div>

              <div class="d-block d-lg-flex justify-content-center margin-negative">
                  <div class="marg-left-1">  
                       <div class="text-center mb-1 mt-5 d-block d-lg-flex justify-content-center align-items-lg-center justify-content-lg-start">
                           <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block">
                             <img class="mr-0 mr-lg-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/diseño-servicio3.svg"></div>
                                <div class="d-inline-block ml-1 mt-3 mt-lg-0 w-12 text-center text-lg-left">
                                <b>Diseño de diagramas de navegación simulando interacciones</b> <br>Uso de plataformas como Figma, Adobe Xd y otros. 
                                  </div>  
                         </div> 
                          <div class="ml-5">
                              <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/audioVisual/como-line3.svg">
                          </div>
                          <!-----------------------BoxShadow Line----------------------------->
                        <div class="d-auto d-lg-none text-center" style="background: transparent; height: 1px; box-shadow: 0px 21px 3px 0px #000"></div>
                        <!-----------------------BoxShadow Line----------------------------->
                   </div>
                   <div style="margin-bottom: 6rem; margin-top: -2rem;" class="mt-4">
                         <div class="mb-1 mt-5 mt-lg-2 d-flex flex-column-reverse align-items-center flex-lg-row">
                         <div class="d-inline-block ml-1 mt-3 mt-lg-0 w-15 text-center text-lg-left">
                          <b>Testing.</b>
                          </div>   
                            <div class="d-flex justify-content-center justify-content-lg-end d-lg-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/diseño-servicio4.svg"></div> 
                         </div> 
                         <div class="position-relative" style='margin-left: -1rem;'>
                         <img  class="points-line-position d-none d-lg-block position-relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/line-blue.svg">
                      </div>
                   </div>
              </div>
              <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -6rem;'>
                  <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/UX-UI-imagen.png">
              </div>
           </div>
          </div>
				</div>
				<!-----------------------Service tab6----------------------------->			

				<!-----------------------Circle Right----------------------------->
        <div class='w-100 text-right' style="margin-bottom: -10rem">
        <?php
          $parameters = array('color' => '#03479C', 'position' => 'right') ;
          get_template_part('components/border-circle','full', $parameters ); 
          ?>
        </div>
                <!-----------------------Circle Right----------------------------->

        <div class='mt-5'>
        <!-----------------------Contact----------------------------->
				<?php 
					get_template_part('components/form-quote-request2','full', 
					array (
						'image' => $path_software.'form-quote-request.svg',
						'title'=> 'Define tu presupuesto'
					));  	 
				?>
				<!-----------------------Contact----------------------------->
				<!-----------------------Portafolio tab6----------------------------->
				<!-----------------------Portafolio tab6----------------------------->

			</div>
			<!----------Hostess---------->

			<div class="corner_footer"></div>
		</div>
		<!-------------------Tab---------------------->
	</div>
</section>
  <!----------------- Tabs ----------------->

</section>


<?php get_footer();
?>
