<?php 
/* 
    Template Name: BTL
*/
get_header();

$path_img = get_template_directory_uri() . '/assets/images/btl/';
?>

<style>
	/* Make the image fully responsive */
	.carousel-inner img {
		width: 100%;
		height: 100%;
	}

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
		width: 90%;
		margin: -2.5rem auto 0;
	}
</style>

<section id="slider">
	<div
		id="demo"
		class="carousel slide"
		data-ride="carousel"
	>
		<div class="float-rectangle-banner">
			<div id="rectangle" class="text-center"></div>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img
					src="<?php echo get_template_directory_uri()?>/assets/images/btl/btl-slider.jpg;"
					alt="Los Angeles"
					width="1100"
					height="500"
				/>
				<div class="carousel-caption" style="top: 5rem; bottom: auto; left: 10%;">
					<div class="row">
						<div class="col-6 flex-column align-items-left p-0">
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
			<ul class="nav nav-pills justify-content-center" role="tablist">
				<?php                          
                    foreach (
						array (
							array (
							'svg' => 'first-tab.svg',
							'title'=> 'BTL y<br>Activaciones',
							'href'=> '#home',
							'active'=> 'active',
							"path" => $path_img
							),
                            array (
							'svg' =>'second-tab.svg',
							'title'=> 'Eventos' ,
							'href'=> '#events',
							'active'=> '',
							"path" => $path_img
							),
                            array (
							'svg' => 'third-tab.svg',
							'title'=> 'Relaciones<br>Públicas',
							'href'=> '#relations',
							'active'=> '',
							"path" => $path_img
							),
                            array (
							'svg' =>'fourth-tab.svg',
							'title'=> 'Fuerza de<br>Ventas',
							'href'=> '#sales',
							'active'=> '',
							"path" => $path_img
							),
                            array (
							'svg' => 'fifth-tab.svg',
							'title'=> 'Anfitrionaje',
							'href'=> '#hostess',
							'active'=> '',
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
				<div style="margin-top: -3.2rem">
					<div class="big-title text-red text-center">El servicio incluye:</div>
					<div>
						<div class="d-flex justify-content-center">
							<div>
								<div class="mb-1">
									<div class="d-inline-block">
										<img
											src="<?php echo $path_img; ?>first-icon-service.svg"
										/>
									</div>
									<div class="d-inline-block ml-1">
										<strong>Desarrollo</strong> de Concepto.
									</div>
								</div>
								<div class="ml-5">
									<img
										class="pl-2"
										src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/ponit-line-red.svg"
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
											fill="#01A5EC"
										/>
									</svg>
								</div>
							</div>
							<div>
								<div class="mb-1 mt-5">
									<div class="d-inline-block ml-1 text-right">
										<strong>Activaciones</strong> en ferias, <br />
										mercados, universidades,<br />
										parques y más.
									</div>
									<div class="d-inline-block ml-4">
										<img
											src="<?php echo $path_img; ?>second-icon-service.svg"
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
											stroke="#01A5EC"
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
											src="<?php echo $path_img; ?>third-icon-service.svg"
										/>
									</div>
									<div class="d-inline-block ml-1">
										<strong>Pre-Producción</strong> de la<br />
										activación (Merchandising,<br />
										personal, juegos y otros).
									</div>
								</div>
								<div class="ml-5">
									<img
										class="pl-2"
										src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/ponit-line-red.svg"
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
											fill="#01A5EC"
										/>
									</svg>
								</div>
							</div>
							<div>
								<div class="mb-1 mt-3">
									<div class="d-inline-block ml-1">
										<strong>Reporte</strong> de resultados.
									</div>
									<div class="d-inline-block">
										<img
											src="<?php echo $path_img; ?>fourth-icon-service.svg"
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
											stroke="#01A5EC"
											stroke-width="2"
											stroke-linecap="round"
											stroke-dasharray="6 6"
										/>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-----------------------Service----------------------------->

				<!--------------------bola-Right------------------------->
				<?php
                 get_template_part('components/border-circle','full', array('color' => '#01A5EC', 'position' => 'right')); 
                ?>
				<!--------------------bola-Right------------------------->


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
						<!-- <div class="row justify-content-center">
							<?php 
							foreach (array(
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
								)) as $game) {
							get_template_part('components/option-game','full', $game ); } ?>
						</div>
						<div class="row justify-content-center">
							<?php 
							foreach (array(
								array
								(
								"image" => "hombro-globo.png", 
								"icon" => "hombro-globo.svg",
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
						</div> -->
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

				<!-----------------Section-------------------->
				<section class="p-0">
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
         PORTAFOLIO avanzado
      </div> 
        <div>
        <div class="container" style="margin-top:5rem">
  <div class="row">
    
    <div class="col-lg-8">
      <div class="gallery-wrapper clearfix">
        <div class="col-lg-6 grid-sizer">  </div>
        <div class="col-lg-6 grid-item">
            primer parte
          <img class="img-fluid" src="http://via.placeholder.com/1024x900">
        </div>

        <div class="col-lg-6 grid-item">
            segunda parte
          <img class="img-fluid" src="http://via.placeholder.com/800x370">
        </div>

        <div class="col-lg-6 grid-item">
          <img class="img-fluid" src="http://via.placeholder.com/500x370">
        </div>

        <div class="col-lg-6 grid-item">
          <img class="img-fluid" src="http://via.placeholder.com/1024x600">
        </div>

        <div class="col-lg-6 grid-item">
          <img class="img-fluid" src="http://via.placeholder.com/1024x300">
        </div>

        <div class="col-lg-6 grid-item">
          <img class="img-fluid" src="http://via.placeholder.com/1024x600">
        </div>

        <div class="col-lg-6 grid-item">
          <img class="img-fluid" src="http://via.placeholder.com/800x900">
        </div>

        <div class="col-lg-6 grid-item">
          <img class="img-fluid" src="http://via.placeholder.com/1024x600">
        </div>

      </div>
    </div>

    <div class="col-lg-4 sidebar">
      <h3>Sidebar</h3>
    </div>
    
    
  </div>
</div>
        </div>

      
</section> -->

<?php  get_footer(); ?>
