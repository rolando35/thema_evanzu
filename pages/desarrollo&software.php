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

.mb-n1-5 {
  margin-bottom: 0;
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
			<ul class="nav nav-pills justify-content-center" id="nav-iconos" role="tablist">
				<?php foreach (
        [
            [
                'svg' => 'first-tab.svg',
                'title' => 'Tiendas <br> virtuales',
                'active' => true,
                'href' => '#home',
                'path' => $path_software,
            ],
            [
                'svg' => 'second-tab.svg',
                'title' => 'Páginas <br> web',
                'href' => '#events',
                'path' => $path_software,
            ],
            [
                'svg' => 'third-tab.svg',
                'title' => 'App <br> móviles',
                'href' => '#relations',
                'path' => $path_software,
            ],
            [
                'svg' => 'fourth-tab.svg',
                'title' => 'Software <br> a medida',
                'href' => '#sales',
                'path' => $path_software,
            ],
            [
                'svg' => 'fifth-tab.svg',
                'title' => 'Diseño <br> UX & UI',
                'href' => '#hostess',
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


        <!-----------------------Service component tab1----------------------------->
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
											'image' => $path_software."servicio-incluye1.svg",
											'text' => '<b>Diseño personalizado</b> <br> y enfocado en la experiencia de usuario.',
											'line' => $path_software."line-rosado.svg"
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_software."servicio-incluye2.svg",
											'text' => 'Desarrollo a medida <br> o en CMS.',
											'line' => $path_software."line-blu.svg"
										)
									); 
								?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_software."servicio-incluye3.svg",
											'text' => 'Integración de <b>medios de pagos online.</b>',
											'line' => $path_software."line-rosado.svg"
										)
									); 
								?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_software."servicio-incluye4.svg",
											'text' => 'Desarrollo de un <b> Backoffice </b> para la gestión de pedidos.',
											'line' => $path_software."line-blu.svg"
										)
									); 
								?>
							</div>
							<div class="d-none d-lg-flex">
								<div class="container-center-service element-final-center"></div>
							</div>
						</div>
					</div>
          <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -10rem;'>
              <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-incluye.png">
          </div>
				</div>
				<!-----------------------Service component tab1----------------------------->

				<div class='mt-5'>
        <!-----------------------Contact----------------------------->
				<?php get_template_part('components/form-quote-request2', 'full', [
        'image' => $path_software . 'form-quote-request.svg',
        'title' => '¡Empecemos ahora!',
    ]); ?>
				<!-----------------------Contact----------------------------->
      </div>

				<!------------------Portafolio-------------------->
				<?php get_template_part('components/masonry-marketing'); ?>
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


        <!-----------------------Service component tab2----------------------------->
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
											'image' => $path_software."servicio-incluye1.svg",
											'text' => '<b>Diseño personalizado</b> <br> y responsivo.',
											'line' => $path_software."line-rosado.svg"
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_software."servicio-path2-2.svg",
											'text' => 'Publicidad y <br>Desarrollo.',
											'line' => $path_software."line-blu.svg"
										)
									); 
								?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_software."servicio-path2-3.svg",
											'text' => '<b>Definición de la estrategia del proyecto.</b>',
											'line' => $path_software."line-rosado.svg"
										)
									); 
								?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_software."servicio-path2-4.svg",
											'text' => 'Maquetación y arquitectura. ',
											'line' => $path_software."line-blu.svg"
										)
									); 
								?>
							</div>
							
              <div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_software."servicio-path2-5.svg",
											'text' => '<b>Implementación <br> y mantenimiento</b>',
											'line' => $path_software."line-rosado.svg"
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
          <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -4rem;'>
              <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/SERVICIO-web-imagen-2 1.png">
          </div>
				</div>
				<!-----------------------Service component tab2----------------------------->


				<!-----------------------Service paht two----------------------------->
        <!-----------------------Circle Right----------------------------->
        <div class='w-100 text-right' style="margin-bottom: -10rem">
                <?php
                $parameters = ['color' => '#03479C', 'position' => 'right'];
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
        'image' => $path_software . 'form-quote-request.svg',
        'title' => 'Estamos listos. ¡Contáctanos!',
    ]); ?>
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


      <!-----------------------Service component tab3----------------------------->
				<div class="section-service">
					<div class="big-title text-red text-center">¿Cómo trabajamos?</div>

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
											'image' => $path_software."como-trabajamos1.svg",
											'text' => '<b>Planificamos según tus objetivos y necesidades.</b>',
											'line' => $path_software."line-rosado.svg"
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_software."servicio-path2-4.svg",
											'text' => '<b>Definimos las funciones</b> <br> que cubran las necesidades actuales y que se anticipen a las futuras.',
											'line' => $path_software."line-blu.svg"
										)
									); 
								?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_software."como-trabajamos3.svg",
											'text' => '<b>Establecemos el flujo <br> de navegación y diseño </b>pensando en el usuario. ',
											'line' => $path_software."line-rosado.svg"
										)
									); 
								?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_software."como-trabajamos4.svg",
											'text' => '<b>Realizamos testing y control de calidad.</b>',
											'line' => $path_software."line-blu.svg"
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
              <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/servicio-imagen.png">
          </div>
				</div>
				<!-----------------------Service component tab3----------------------------->	

				<!-----------------------Circle Right----------------------------->
        <div class='w-100 text-right' style="margin-bottom: -10rem">
        <?php
        $parameters = ['color' => '#03479C', 'position' => 'right'];
        get_template_part('components/border-circle', 'full', $parameters);
        ?>
        </div>
                <!-----------------------Circle Right----------------------------->

        <div class='mt-5'>
        <!-----------------------Contact----------------------------->
				<?php get_template_part('components/form-quote-request2', 'full', [
        'image' => $path_software . 'form-quote-request.svg',
        'title' => 'Define tu presupuesto',
    ]); ?>
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


      <!-----------------------Service component tab4----------------------------->
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
											'image' => $path_software."tab4-servicio1.svg",
											'text' => '<b>Software ERP.</b>',
											'line' => $path_software."line-rosado.svg"
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_software."tab4-servicio2.svg",
											'text' => '<b>Software CRM.</b>',
											'line' => $path_software."line-blu.svg"
										)
									); 
								?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_software."tab4-servicio3.svg",
											'text' => '<b>Sistemas de Matrícula.</b>',
											'line' => $path_software."line-rosado.svg"
										)
									); 
								?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_software."tab4-servicio4.svg",
											'text' => '<b>Sistemas de gestión de <br> ventas e ingresos.</b>',
											'line' => $path_software."line-blu.svg"
										)
									); 
								?>
							</div>
							
              <div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_software."tab4-servicio5.svg",
											'text' => '<b>Sistemas de <br> control de stock.</b>',
											'line' => $path_software."line-rosado.svg"
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
              <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/software-medida-icon.png">
          </div>
				</div>
				<!-----------------------Service component tab4----------------------------->
        <!-----------------------Circle Right----------------------------->
        <div class='w-100 text-right' style="margin-bottom: -10rem">
                <?php
                $parameters = ['color' => '#03479C', 'position' => 'right'];
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
        'image' => $path_software . 'form-quote-request.svg',
        'title' => '¿Un proyecto en mente?',
    ]); ?>
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


        <!-----------------------Service component tab6----------------------------->
				<div class="section-service">
					<div class="big-title text-red text-center">¿Cómo trabajamos?</div>

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
											'image' => $path_software."como-trabajamos3.svg",
											'text' => '<b>Investigación del perfil</b> de usuario.',
											'line' => $path_software."line-rosado.svg"
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_software."diseño-servicio2.svg",
											'text' => '<b>Desarrollo del mapa de navegación, animación y transiciones.</b>',
											'line' => $path_software."line-blu.svg"
										)
									); 
								?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_software."diseño-servicio3.svg",
											'text' => '<b>Diseño de diagramas de navegación simulando interacciones</b> <br>Uso de plataformas como Figma, Adobe Xd y otros. ',
											'line' => $path_software."line-rosado.svg"
										)
									); 
								?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_software."diseño-servicio4.svg",
											'text' => '<b>Testing.</b>',
											'line' => $path_software."line-blu.svg"
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
              <img  class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/UX-UI-imagen.png">
          </div>
				</div>
				<!-----------------------Service component tab6----------------------------->	

				<!-----------------------Circle Right----------------------------->
        <div class='w-100 text-right' style="margin-bottom: -10rem">
        <?php
        $parameters = ['color' => '#03479C', 'position' => 'right'];
        get_template_part('components/border-circle', 'full', $parameters);
        ?>
        </div>
                <!-----------------------Circle Right----------------------------->

        <div class='mt-5'>
        <!-----------------------Contact----------------------------->
				<?php get_template_part('components/form-quote-request2', 'full', [
        'image' => $path_software . 'form-quote-request.svg',
        'title' => 'Define tu presupuesto',
    ]); ?>
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
<section>
  <div class="big-title text-red my-4 text-center">PORTAFOLIO</div>
  <div>
    <div>
      <?php         
                get_template_part('components/masonry-desarrollo', );  
        ?>
    </div>

    <div class="container" style="margin-top: 5rem"></div>
  </div>
</section>

<?php get_footer();
?>
