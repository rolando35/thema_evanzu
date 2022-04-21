<?php 
/* 
    Template Name: BTL
*/
get_header();

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

	.subtitle-event {
		font-family: Hurme Geometric Sans 4;
		font-size: 1.6rem;
		font-style: normal;
		font-weight: 700;
		letter-spacing: 0em;
		color: #ED1164;
	}

	.text-event-italic {
		font-family: Hurme Geometric Sans 4;
		font-size: 1rem;
		font-style: italic;
		font-weight: 700;
		line-height: 19px;
		letter-spacing: 0em;
		text-align: justified;
		color:#808080;
	}

	.text-event {
		font-family: Hurme Geometric Sans 4;
		font-size: 1rem;
		font-style: normal;
		font-weight: 400;
		letter-spacing: 0em;
		text-align: justified;
		color: #808080;
	}

	.group-nav  {
		z-index: 17;
		position: relative;
		padding: 1rem;
		/* width: 100%; */
		/* margin: -2.5rem auto 0; */
	}
</style>

<section id="slider" class="section-slider-btl">
	<div
		id="demo"
		class="carousel slide"
		data-ride="carousel"
	>
		<div class="float-rectangle-banner text-center d-none d-xl-block">
			<div id="rectangle" class="text-center my-0 mx-auto"></div>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active d-flex align-items-center">
				<img
					src="<?php echo get_template_directory_uri()?>/assets/images/btl/btl-slider.jpg;"
					alt="Los Angeles"
					class="w-100 d-none d-sm-block"
					style="min-height: 25rem;"
				/>
				
				<img
					src="<?php echo get_template_directory_uri()?>/assets/images/btl/ServicioActivacionBTL.png"
					alt="Los Angeles"
					class="w-100 d-sm-none"
					style="max-height: 25rem;"
				/>					

				<div class="carousel-caption" style="bottom: auto; left: 10%;">
					<div class="row">
						<div class="col-12 col-md-8 col-lg-6 flex-column align-items-left p-0">
							<div class="running-text-btl">
								Somos una agencia de
							</div>
							<div class="d-flex mt-n3">
								<div class="hurme-simple-btl">
									Btl & 
								</div>
								<div class="pl-5">
									<img
									style="width: 70px; height: 70px"
									src="<?php echo get_template_directory_uri()?>/assets/images/btl/title-icon.png"
									/>
								</div>
							</div>
							<div class="medium-subtitle-first-btl text-left">Comunicación
							</div>
							<div class="text-subtitle-btl">
								Sacamos nuestra creatividad y estrategia a las calles.
							</div>
							<div class="text-subtitle-btl">
								Salimos a encontrar a tus próximos clientes y enamorar a los
								actuales con campañas interactivas.
							</div>
							<div class="mt-3 text-left">
								<button class="btn-btl">
								Quieres resultados.
								<span style="font-weight: 400"
									>Escríbenos &nbsp&nbsp</span
									>
								</button>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-white">
		<!-------------------nav-------------------->
		<div class="group-nav">
			<ul class="nav nav-pills justify-content-center" id="nav-iconos" role="tablist">
				<?php                          
                    foreach (
						array (
							array (
							'svg' => 'first-tab.svg',
							'title'=> 'BTL y<br>Activaciones',
							'href'=> '#home',
							'active'=> true,
							"path" => $path_img
							),
                            array (
							'svg' =>'second-tab.svg',
							'title'=> 'Eventos' ,
							'href'=> '#events',
							"path" => $path_img
							),
                            array (
							'svg' => 'third-tab.svg',
							'title'=> 'Relaciones<br>Públicas',
							'href'=> '#relations',
							"path" => $path_img
							),
                            array (
							'svg' =>'fourth-tab.svg',
							'title'=> 'Fuerza de<br>Ventas',
							'href'=> '#sales',
							"path" => $path_img
							),
                            array (
							'svg' => 'fifth-tab.svg',
							'title'=> 'Anfitrionaje',
							'href'=> '#hostess',
							"path" => $path_img
							)) as $nav) {
                             get_template_part('components/circle-nav-2','full', $nav ); 
                         }
                     ?>
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
					<div class="bg-light-gray py-0">
						<div class="big-title text-red my-2 text-center">BTL y Activaciones</div>
						<!-------------------Card---------------------->
						<div class="py-2">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-md-11 col-lg-6 d-flex align-items-center">
										<div class="card bg-transparent border-0">
											<div class="card-body">
												<h3 class="subtitle-btl text-left p-1">LLevamos tu marca al lado del consumidor</h3>
												<p class="text-justify text-light-gray p-1">
												Realizamos todo tipo de activaciones promocionales y juegos
												BTL con la finalidad de lograr una
												<strong
													>interacción especial y de valor con el consumidor.</strong
													>
												Ofrecemos una experiencia vivencial que involucre a tus
												clientes con tu mensaje u oferta.
												</p>
											</div>
										</div>
									</div>
									<div class="col-md-10 col-lg-6">
										<img
											src="<?php echo $path_img; ?>activacion-01.png"
											alt=""
											class="img-fluid"
										/>
									</div>
								</div>
							</div>
						</div>
						<!------------Card---------->

						<!-------------------Card---------------------->
						<div class="py-2 card-activation-2">
							<div class="container">
								<div class="row flex-column-reverse flex-lg-row justify-content-center align-items-center align-items-lg-end">
									<div class="col-md-10 col-lg-6 py-2 text-center">
										<img
											src="<?php echo $path_img; ?>activacion-02.png"
											alt=""
											class="img-fluid"
										/>
									</div>
									<div class="col-md-11 col-lg-6 py-2 d-flex align-items-end">
										<div class="card bg-transparent border-0">
											<div class="card-body pb-0">
												<div class="text-justify text-light-gray p-1 pb-2 pb-md-3">
												Nos comprometemos en cada proceso: desarrollo del concepto,
												diseño de piezas de comunicación, planeamiento de actividades
												y ejecución.
												</div>
												<div
												class="text-justify text-light-gray p-1 pb-2 pb-md-3"
												>
												<strong>Trabajamos en base a tu presupuesto y lo optimizamos.</strong>
												<br>
												Ideal para lanzamiento de productos o marcas, sampling,
												volanteo publicitario y otros.
												</div>
												<div
												class="text-justify text-light-gray p-1"
												>
												<strong>¡Genera experiencias positivas para tu cliente!</strong>
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
				<?php
                 get_template_part('components/border-circle','full', array('color' => '#ED1164', 'position' => '')); 
                ?>
				<!--------------------bola-Left------------------------->

				<!-----------------------Service----------------------------->
				<div class="section-service">
					<div class="big-title text-red text-center">El servicio incluye:</div>

					<div class="text-center">
						<svg width="80" height="4" viewBox="0 0 80 4" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M77.7269 3.12186H1.56093C0.699727 3.12186 0 2.42214 0 1.56093C0 0.699732 0.699727 0 1.56093 0H77.7302C78.5914 0 79.2912 0.699732 79.2912 1.56093C79.2878 2.42214 78.5881 3.12186 77.7269 3.12186Z" fill="#ED1164"/>
						</svg>
					</div>

					<div class="container">
						<div class="d-flex flex-column align-items-center">
							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_img."first-icon-service.svg",
											'text' => '<strong>Desarrollo</strong> de Concepto.',
											'line' => $path_img."line-rosado.svg"
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_img."second-icon-service.svg",
											'text' => '<strong>Activaciones</strong> en ferias, <br>mercados, universidades, <br>parques y más.',
											'line' => $path_img."line-celeste.svg"
										)
									); 
								?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_img."third-icon-service.svg",
											'text' => '<strong>Pre-Producción</strong> de la<br>activación (Merchandising,<br> personal, juegos y otros).',
											'line' => $path_img."line-rosado.svg"
										)
									); 
								?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_img."fourth-icon-service.svg",
											'text' => '<strong>Reporte</strong> de resultados.',
											'line' => $path_img."line-celeste.svg"
										)
									); 
								?>
							</div>
							<div class="d-none d-lg-flex">
								<div class="container-center-service element-final-center"></div>
							</div>
						</div>
					</div>
									
				</div>
				<!-----------------------Service----------------------------->

				<!-----------------------Contanct----------------------------->
				<?php 
					get_template_part('components/btl/contact','full', 
					array (
						'path_img' => $path_img,
						'title'=> 'Define tu presupuesto'
					));  	 
				?>
				<!-----------------------Contanct----------------------------->

				<!------------------Game-------------------->
				<section style="margin-top: 2rem" class="text-center">
					<!------------title-------------->
					<div class="big-title text-red text-center">Juegos BTL:</div>
					<!------------title-------------->

					<!-------------line--------------->
					<div>
						<img src="<?php echo $path_img; ?>game-line.svg" alt="" />
					</div>
					<!-------------line--------------->

					<!-------------Note------------>
					<div class="d-flex justify-content-center flex-wrap">
						<div class="m-sm-1 m-md-2">
							<img src="<?php echo $path_img; ?>first-game.svg" alt="" />
						</div>
						<div class="m-sm-1 m-md-2">
							<img src="<?php echo $path_img; ?>second-game.svg" alt="" />
						</div>
						<div class="m-sm-1 m-md-2">
							<img src="<?php echo $path_img; ?>third-game.svg" alt="" />
						</div>
					</div>
					<!-------------Note------------>

					<!-------------Options---------------->
					<div class="my-5">
						<div class="container">
							<div class="row justify-content-center">
								<?php 
								foreach (array(
									array
									(
									"image" => "tablero-memoria.png", 
									"icon" => "cerebro.svg",
									"title" => "Tablero de <strong>Memoria</strong>",
									"path" => $path_img
									), 
									array ( 
									"image" => "cabina-aire.png",
									"icon" => "cabina-aire.svg", 
									"title" => "Cabina de <strong>Aire</strong>", 
									"path" => $path_img
									),
									array (
									"image" => "ruta.png",
									"icon" => "ruleta.svg",
									"title" => "La <strong>Ruleta</strong>",
									"path" => $path_img
									), 
									array (
									"image" => "jenga-gigante.png", 
									"icon" => "jenga-gigante.svg",
									"title" => "Jenga <strong>Gigante</strong>",
									"path" => $path_img
									),
									array
									(
									"image" => "carrera-enchufes.png", 
									"icon" => "carrera-enchufes.svg",
									"title" => "Carrera de <strong>Enchufes</strong>",
									"path" => $path_img
									), 
									array ( 
									"image" => "palestra-inflable.png",
									"icon" => "palestra-inflable.svg", 
									"title" => "Palestra <strong>Inflable</strong>", 
									"path" => $path_img
									),
									array (
									"image" => "palestra.png",
									"icon" => "palestra.svg",
									"title" => "La <strong>Palesta</strong>",
									"path" => $path_img
									), 
									array (
									"image" => "tablero-dardos.png", 
									"icon" => "tablero-dardos.svg",
									"title" => "Tablero de <strong>Dardos</strong>",
									"path" => $path_img
									),
									array
									(
									"image" => "hombre-globo.png", 
									"icon" => "hombre-globo.svg",
									"title" => "Hombre <strong>Glogo</strong>",
									"path" => $path_img
									), 
									array ( 
									"image" => "futbol-billar-gigante.png",
									"icon" => "futbol-billar-gigante.svg", 
									"title" => "Futbol Billar <strong>Gigante</strong>", 
									"path" => $path_img
									),
									array (
									"image" => "tira-gol.png",
									"icon" => "tira-gol.svg",
									"title" => "El <strong>TiraGol</strong>",
									"path" => $path_img
									), 
									array (
									"image" => "obstaculos.png", 
									"icon" => "obstaculos.svg",
									"title" => "Los <strong>Obstáculos</strong>",
									"path" => $path_img
									)) as $game) {
								get_template_part('components/option-game','full', $game ); } ?>
							</div>
						</div>
					</div>
					<!-------------Options---------------->
				</section>
				<!------------------Game-------------------->

			</div>
			<!------------BTL------------>

			<!----------Events---------->
			<div id="events" class="tab-pane fade">
				<br>
				<!----------------------Main---------------------->
				<section class="p-0">
					<div class="bg-light-gray py-0">
						<div class="big-title text-red my-2 text-center">Eventos</div>
						<!-------------------Card---------------------->
						<div class="py-2">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-md-11 col-lg-6 d-flex align-items-center">
										<div class="card bg-transparent border-0">
											<div class="card-body">
												<h3 class="subtitle-btl text-left p-1">Creamos experiencias que conectan.</h3>
												<p class="text-justify text-light-gray p-1">
												La planificación, es excelente trabajo en equipo y la
												capacidad de ejecución son nuestro pilares para asegurar que
												tu evento sea totalmente exitoso, tanto en organización como
												lógistica.
												</p>
												<p class="text-justify text-light-gray p-1">
													<strong
														>Nos adaptamos al tamaño de tu audiencia e imagen
													corporativa</strong
														>
													para asegurar una
													<strong>experiencia única y exclusiva.</strong> Nos encargamos
													de las acciones de comunicación pre-evento, y durante la
													ejecución lograremos el papel activo de la audiencia.
												</p>
											</div>
										</div>
									</div>
									<div class="col-md-10 col-lg-6">
										<img
											src="<?php echo $path_img; ?>eventos.png"
											alt=""
											class="img-fluid"
										/>
									</div>
								</div>
							</div>
						</div>
						<!------------Card---------->

						<!-------------------Card---------------------->
						<div class="py-2">
							<div class="container">
								<div class="row flex-column-reverse flex-lg-row justify-content-center align-items-center align-items-lg-end">
									<div class="col-md-10 col-lg-3 py-2 text-center">
										<img
											src="<?php echo $path_img; ?>second-event.svg"
											alt=""
											class="img-fluid"
										/>
									</div>
									<div class="col-md-11 col-lg-7 py-2 d-flex align-items-end">
										<div class="card bg-transparent border-0">
											<div class="card-body pb-0">
												<h3 class="subtitle-btl text-left">¿Qué lograrás?</h3>
												<p class="subtitle-btl text-left">Establecer enlaces con tu audiencia y generar el reconocimiento de tu marca.
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

				<?php
                 get_template_part('components/border-circle','full', array('color' => '#ED1164', 'position' => '')); 
                ?>

				<!-----------------------Service----------------------------->
				<div class="section-service">
					<div class="big-title text-red text-center">El servicio incluye:</div>

					<div class="text-center">
						<svg width="80" height="4" viewBox="0 0 80 4" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M77.7269 3.12186H1.56093C0.699727 3.12186 0 2.42214 0 1.56093C0 0.699732 0.699727 0 1.56093 0H77.7302C78.5914 0 79.2912 0.699732 79.2912 1.56093C79.2878 2.42214 78.5881 3.12186 77.7269 3.12186Z" fill="#ED1164"/>
						</svg>
					</div>

					<div class="container">
						<div class="d-flex flex-column align-items-center">
							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_img."first-icon-service.svg",
											'text' => '<strong>Desarrollo</strong> de Concepto.',
											'line' => $path_img."line-rosado.svg"
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>

								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_img."second-icon-service.svg",
											'text' => '<strong>Ejecución</strong> y control.',
											'line' => $path_img."line-celeste.svg"
										)
									); 
								?>
							</div>
							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_img."third-icon-service.svg",
											'text' => '<strong>Planeación</strong> (equipo de<br>trabajo, espacios,<br>decoración, catering, etc.',
											'line' => $path_img."line-rosado.svg"
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_img."fourth-icon-service.svg",
											'text' => '<strong>Reporte</strong> de resultados.',
											'line' => $path_img."line-celeste.svg"
										)
									); 
								?>
							</div>
							<div class="d-none d-lg-flex">
								<div class="container-center-service element-final-center"></div>
							</div>
						</div>
					</div>
									
				</div>
				<!-----------------------Service----------------------------->

				<!-----------------------Contact----------------------------->
				<?php 
					get_template_part('components/btl/contact','full', 
					array (
						'path_img' => $path_img,
						'title'=> '¡Empecemos ahora!'
					));  	 
				?>
				<!-----------------------Contact----------------------------->

				<!-----------------Section-------------------->
				<section class="p-0 mt-5">
					<!-------------------Card---------------------->
					<div class="card-btl">
						<div class="container bg-fa">
							<div class="row justify-content-center">
								<div class="col-md-10 col-lg-6 d-flex align-items-center">
									<div class="card bg-transparent border-0">
										<div class="card-body">
											<h3 class="card-title subtitle-event">Eventos Presenciales</h3>
											<ul class="card-text px-4">
												<li class="text-event">Lanzamientos y otros corporativos.</li>
												<li class="text-event">Eventos de integración para empleados.</li>
												<li class="text-event">Conferencias, foros, seminarios y convenciones.</li>
											</ul>
											<p class="text-event-italic">*Cubrimos el protocolo de bioseguridad en todos los eventos</p>
										</div>
									</div>
								</div>
								<div class="col-md-10 col-lg-6">
									<img
										src="<?php echo $path_img; ?>eventos-presenciales.png"
										alt=""
										class="img-fluid img-float-event"
									/>
								</div>
							</div>
						</div>
					</div>
					<!------------Card---------->	

					<!-------------------Card---------------------->
					<div class="card-btl">
						<div class="container bg-fa">
							<div class="row flex-column-reverse flex-lg-row justify-content-center align-items-center">
								<div class="col-md-10 col-lg-6">
									<img
										src="<?php echo $path_img; ?>eventos-online.png"
										alt=""
										class="img-fluid img-float-event"
									/>
								</div>
								<div class="col-md-10 col-lg-6 d-flex align-items-center">
									<div class="card bg-transparent border-0">
										<div class="card-body">
											<h3 class="card-title subtitle-event">Eventos Online</h3>
											<p class="card-text text-event">Redefinimos la manera tradicional de hacer eventos y las llevamos a un formato digital. Organizamos:</p>
											<ul class="card-text px-4">
												<li class="text-event">Webinars y capacitaciones online.</li>
												<li class="text-event">Dinámicas digitales para equipos de trabajo.</li>
												<li class="text-event">Ferias virtuales.</li>
											</ul>											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!------------Card---------->					
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
						<div class="big-title text-red my-2 text-center">Relaciones Públicas</div>
						<!-------------------Card---------------------->
						<div class="py-2">
							<div class="container">
								<div class="row flex-column-reverse flex-lg-row justify-content-center align-items-center">
									<div class="col-md-10 col-lg-6">
										<img
											src="<?php echo $path_img; ?>relaciones-publicas.png"
											alt=""
											class="img-fluid"
										/>
									</div>
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
								</div>
							</div>
						</div>
						<!------------Card---------->

						<!-------------------Card---------------------->
						<div class="pb-2">
							<div class="container">
								<div class="row justify-content-center align-items-center align-items-lg-end">
									<div class="col-md-11 col-lg-6 py-2 d-flex justify-content-center justify-content-lg-end align-items-start align-items-lg-end ml-0 pl-0">
										<div class="card bg-transparent border-0">
											<div class="card-body py-0">
												<h3 class="subtitle-btl text-left text-lg-right">¿Qué lograrás?</h3>
												<div class="subtitle-btl text-left text-lg-right">Generar un impacto</div>
												<div class="subtitle-btl text-left text-lg-right">mediático positivo</div>
												<div class="d-none d-lg-block text-right">
													<img
														src="<?php echo $path_img; ?>third-relation.svg"
														alt=""
														/>
												</div>	


											</div>
										</div>
									</div>
									<div class="col-md-10 col-lg-6 py-2 text-center">
										<img
											src="<?php echo $path_img; ?>second-relation.svg"
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

				<?php
                 get_template_part('components/border-circle','full', array('color' => '#ED1164', 'position' => '')); 
                ?>

				<!-----------------------Service----------------------------->
				<div class="section-service">
					<div class="big-title text-red text-center">El servicio incluye:</div>

					<div class="text-center">
						<svg width="80" height="4" viewBox="0 0 80 4" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M77.7269 3.12186H1.56093C0.699727 3.12186 0 2.42214 0 1.56093C0 0.699732 0.699727 0 1.56093 0H77.7302C78.5914 0 79.2912 0.699732 79.2912 1.56093C79.2878 2.42214 78.5881 3.12186 77.7269 3.12186Z" fill="#ED1164"/>
						</svg>
					</div>

					<div class="container">
						<div class="d-flex flex-column align-items-center">
							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_img."first-icon-service.svg",
											'text' => '<strong>Conferencia de prensa</strong><br>en medios televisivos,<br>radiales, impresos y <br>digitales.',
											'line' => $path_img."line-rosado.svg"
										)
									); 
								?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_img."second-icon-service.svg",
											'text' => '<strong>Representación:</strong> ofrecemos<br>la presencia de un vocero<br>para ampliar la información<br>cada vez que lo requieran.',
											'line' => $path_img."line-celeste.svg"
										)
									); 
								?>
							</div>
							<div class="d-flex flex-column flex-md-row">	
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_img."third-icon-service.svg",
											'text' => '<strong>Redacción:</strong> creación de<br>artículos con información<br>objetiva para los medios de<br>comunicación.',
											'line' => $path_img."line-rosado.svg"
										)
									); 
								?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_img."fourth-icon-service.svg",
											'text' => '<strong>Prevención, gestión de<br>crisis y recuperación de<br>imágen.</strong>',
											'line' => $path_img."line-celeste.svg"
										)
									); 
								?>									
							</div>
							<div class="d-none d-lg-flex">
								<div class="container-center-service element-final-center"></div>
							</div>
						</div>
					</div>
									
				</div>
				<!-----------------------Service----------------------------->			

				<!-----------------------Contact----------------------------->
				<?php 
					get_template_part('components/btl/contact','full', 
					array (
						'path_img' => $path_img,
						'title'=> 'Te escuchamos'
					));  	 
				?>
				<!-----------------------Contact----------------------------->

			</div>
			<!---------relations------------>

			<!----------Sales---------->
			<div id="sales" class="tab-pane fade">
				<br>
				<!----------------------Main---------------------->
				<section class="p-0">
					<div class="bg-light-gray py-0">
						<div class="big-title text-red my-2 text-center">Fuerza de ventas</div>
						<!-------------------Card---------------------->
						<div class="py-2">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-md-11 col-lg-6 d-flex align-items-center">
										<div class="card bg-transparent border-0">
											<div class="card-body">
												<h3 class="subtitle-btl text-left p-1">Incrementa tus ventas y fideliza a tus clientes</h3>			
												<div class="text-justify text-light-gray p-1">
													Ponemos a tu disposición un
													<strong>equipo humano capacitado y con experiencia</strong>
													que te ayudará a alcanzar resultados. Nos encargamos del
													<strong
														>reclutamiento y seguimiento para crear tu propia red de
														ventas a nivel nacional</strong
													>
													a la medida de tus necesidades y objetivos.
												</div>
												<div class="text-justify text-light-gray p-1">
													El desempeño de nuestro equipo preservará la identidad de tu organización y logrará construir relaciones a largo plazo con tus clientes.
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-10 col-lg-6">
										<img
											src="<?php echo $path_img; ?>fuerza-ventas.png"
											alt=""
											class="img-fluid"
										/>
									</div>
								</div>
							</div>
						</div>
						<!------------Card---------->

						<!-------------------Card---------------------->
						<div class="py-2 card-sales-2">
							<div class="container">
								<div class="row flex-column-reverse flex-lg-row justify-content-center align-items-center align-items-lg-end">
									<div class="col-md-10 col-lg-4 py-2 text-center">
										<img
											src="<?php echo $path_img; ?>second-sales.svg"
											alt=""
											class="img-fluid"
										/>
									</div>
									<div class="col-md-11 col-lg-5 py-2 d-flex align-items-end">
										<div class="card bg-transparent border-0">
											<div class="card-body pb-0">
												<div class="text-justify text-light-gray p-1">
													Con nosotros conseguirás equipos de alto<br />
													desempeño: Promotores, Ejecutivos de Ventas,<br />
													Asesores Comerciales y más.													
												</div>
												<div class="d-none d-lg-block">
													<img
														src="<?php echo $path_img; ?>third-sales.svg"
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

				<?php
                 get_template_part('components/border-circle','full', array('color' => '#ED1164', 'position' => '')); 
                ?>

				<!-----------------------Service----------------------------->
				<div class="section-service">
					<div class="big-title text-red text-center">El servicio incluye:</div>

					<div class="text-center">
						<svg width="80" height="4" viewBox="0 0 80 4" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M77.7269 3.12186H1.56093C0.699727 3.12186 0 2.42214 0 1.56093C0 0.699732 0.699727 0 1.56093 0H77.7302C78.5914 0 79.2912 0.699732 79.2912 1.56093C79.2878 2.42214 78.5881 3.12186 77.7269 3.12186Z" fill="#ED1164"/>
						</svg>
					</div>

					<div class="container">
						<div class="d-flex flex-column align-items-center">
							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_img."first-icon-service.svg",
											'text' => '<strong>Definición del perfil,</strong><br>reclutamiento, capacitación<br>y objetivo de venta.',
											'line' => $path_img."line-rosado.svg"
										)
									); 
								?>								
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_img."estrategia-lanzamiento.svg",
											'text' => '<strong>Estrategia de<br>lanzamiento.</strong>',
											'line' => $path_img."line-celeste.svg"
										)
									); 
								?>									
							</div>
							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_img."elaboracion.svg",
											'text' => '<strong>Elaboración</strong> de<br>merchandising, uniforme<br>brandeado, material de<br>comunicación y herramientas<br>de trabajo.',
											'line' => $path_img."line-rosado.svg"
										)
									); 
								?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_img."ejecucion-supervision.svg",
											'text' => '<strong>Ejecución y supervisión</strong> con<br>sistema de seguimiento y<br>control digital.',
											'line' => $path_img."line-celeste.svg"
										)
									); 
								?>									
							</div>
							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_img."fourth-icon-service.svg",
											'text' => '<strong>Speech de ventas</strong> en<br>calidad de atención y FAQ<br>del producto/servicio.',
											'line' => $path_img."line-rosado.svg"
										)
									); 
								?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_img."reporte-digitales.svg",
											'text' => '<strong>Reportes digitales</strong> según<br>requerimientos: Diarios, <br>semanales y mensuales.<br>',
											'line' => $path_img."line-celeste.svg"
										)
									); 
								?>								
							</div>
							<div class="d-none d-lg-flex">
								<div class="container-center-service element-final-center"></div>
							</div>
						</div>
					</div>
									
				</div>
				<!-----------------------Service----------------------------->				

				<!-----------------------Contact----------------------------->
				<?php 
					get_template_part('components/btl/contact','full', 
					array (
						'path_img' => $path_img,
						'title'=> '¡Estamos listos! Contáctanos'
					));  	 
				?>
				<!-----------------------Contact----------------------------->
			</div>
			<!----------Sales---------->

			<!----------Hostess---------->
			<div id="hostess" class="tab-pane fade">
				<br>
				<!----------------------Main---------------------->
				<section class="p-0">
					<div class="bg-light-gray py-0">
						<div class="big-title text-red my-2 text-center">Anfitrionaje</div>
						<!-------------------Card---------------------->
						<div class="pt-2 pb-5">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-md-11 col-lg-6 d-flex align-items-center">
										<div class="card bg-transparent border-0">
											<div class="card-body">
												<h3 class="subtitle-btl text-left p-1">Imagen y calidad de atención</h3>
												<p class="text-justify text-light-gray p-1">
												Buscamos elevar el posicionamiento de tu marca y resaltar la
												imagen de tu empresa. Contamos con
												<strong
													>anfitrionas e impulsadoras de primer nivel y con
													experiencia</strong
												>
												que garantizan un excelente contacto directo con los
												clientes.
												</p>
												<p class="text-justify text-light-gray p-1">
													Nuestro equipo es más que una cara bonita; posee carisma,
													habilidades comunicativas y capacidad de trabajo en equipo.
												</p>
											</div>
										</div>
									</div>
									<div class="col-md-10 col-lg-6">
										<img
											src="<?php echo $path_img; ?>anfitriona.png"
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

				<?php
                 get_template_part('components/border-circle','full', array('color' => '#ED1164', 'position' => '')); 
                ?>

				<!-----------------------Service----------------------------->
				<div class="section-service">
					<div class="big-title text-red text-center">El servicio incluye:</div>

					<div class="text-center">
						<svg width="80" height="4" viewBox="0 0 80 4" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M77.7269 3.12186H1.56093C0.699727 3.12186 0 2.42214 0 1.56093C0 0.699732 0.699727 0 1.56093 0H77.7302C78.5914 0 79.2912 0.699732 79.2912 1.56093C79.2878 2.42214 78.5881 3.12186 77.7269 3.12186Z" fill="#ED1164"/>
						</svg>
					</div>

					<div class="container">
						<div class="d-flex flex-column align-items-center">
							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_img."anfitriona.svg",
											'text' => '<strong>Anfitrionas/es</strong>',
											'line' => $path_img."line-rosado.svg"
										)
									); 
								?>								
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_img."estrategia-lanzamiento.svg",
											'text' => '<strong>Impulsadoras</strong>',
											'line' => $path_img."line-celeste.svg"
										)
									); 
								?>									
							</div>
							<div class="d-flex flex-column flex-md-row">
								<?php
									get_template_part('components/btl/service-left','full', 
										array(
											'image' => $path_img."degustadoras.svg",
											'text' => '<strong>Degustadoras</strong>',
											'line' => $path_img."line-rosado.svg"
										)
									); 
								?>								
								<div class="d-none d-lg-block container-center-service"></div>
								<?php
									get_template_part('components/btl/service-right','full', 
										array(
											'image' => $path_img."fourth-icon-service.svg",
											'text' => '<strong>Animadores</strong>',
											'line' => $path_img."line-celeste.svg"
										)
									); 
								?>									
							</div>
							<div class="d-none d-lg-flex">
								<div class="container-center-service element-final-center"></div>
							</div>
						</div>
					</div>
									
				</div>
				<!-----------------------Service----------------------------->			

				<!-----------------------Contact----------------------------->
				<?php 
					get_template_part('components/btl/contact','full', 
					array (
						'path_img' => $path_img,
						'title'=> 'Define tu presupuesto'
					));  	 
				?>
				<!-----------------------Contact----------------------------->

			</div>
			<!----------Hostess---------->

			<div class="corner_footer"></div>
		</div>
		<!-------------------Tab---------------------->
	</div>
</section>

<!-- <section>
      <div class="big-title text-red my-4 text-center">
         PORTAFOLIO
      </div> 
        
        <div class="container" style="margin-top:5rem">
               <?php         
                get_template_part('components/masonry-btl', );  
                ?>
        </div>
</section>



<?php  get_footer(); ?>