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
</style>

<section id="slider">
	<div
		id="demo"
		class="carousel slide"
		data-ride="carousel"
		style="margin-top: 3rem"
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
				<div class="carousel-caption" style="top: 5rem; bottom: auto">
					<div class="">
						<div class="row">
							<div class="col-lg-6 text-white text-left">
								<div class="box-text">
									<div class="text-white running-text" style="font-size: 41px">
										Somos una agencia de
									</div>
									<div class="text-white hurme-simple" style="font-size: 118px">
										Btl &
										<img
											style="display: inline-block; width: 70px; height: 70px"
											src="<?php echo get_template_directory_uri()?>/assets/images/btl/title-icon.png"
										/>
									</div>
									<div class="medium-subtitle-first" style="font-size: 56px">
										<span class="text-white">Comunicación</span>
									</div>
									<div class="text-white mt-3" style="line-height: 17px">
										Sacamos nuestra creatividad y estrategia a las calles.
									</div>
									<div class="text-white m-0 p-0" style="line-height: 17px">
										Salimos a encontrar a tus próximos clientes y enamorar a los
										actuales con campañas interactivas.
									</div>
									<div class="mt-3">
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
		</div>
	</div>
</section>

<section>
	<div class="bg-white">
		<div class="">
			<ul class="nav nav-pills justify-content-center" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="pill" href="#home"
						>BTL Y Activaciones</a
					>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="pill" href="#events">Eventos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="pill" href="#relations"
						>Relaciones Públicas</a
					>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="pill" href="#sales"
						>Fuerza de ventas</a
					>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="pill" href="#hostess"
						>Anfitrionaje</a
					>
				</li>
			</ul>
		</div>

		<!-- Tab panes -->
		<div class="tab-content" style="overflow: hidden">
			<!------------BTL------------>
			<div id="home" class="tab-pane active">
				<br />
				<div class="bg-light-gray">
					<div class="big-title text-red my-4 text-center">
						BTL y Activaciones
					</div>
					<!---------- Container ---------->
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<div class="my-3 subtitle-btl">
									LLevamos tu marca al lado del consumidor
								</div>
								<p class="text-justify text-light-gray">
									Realizamos todo tipo de activaciones promocionales y juegos
									BTL con la finalidad de lograr una
									<strong
										>interacción especial y de valor con el consumidor.</strong
									>
									Ofrecemos una experiencia vivencial que involucre a tus
									clientes con tu mensaje u oferta.
								</p>
							</div>

							<div class="col-sm-6 text-center" style="height: 26.4rem">
								<img src="<?php echo $path_img; ?>girls.svg" alt="" />
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6 text-justify" style="margin-top: -130px">
								<img src="<?php echo $path_img; ?>bottle.svg" />
							</div>
							<div class="col-sm-6 text-light-gray">
								<p class="text-justify">
									Nos comprometemos en cada proceso: desarrollo del concepto,
									diseño de piezas de comunicación, planeamiento de actividades
									y ejecución.
								</p>
								<p
									class="text-justify"
									style="font-weight: 700; margin-bottom: 0"
								>
									Trabajamos en base a tu presupuesto y lo optimizamos.
								</p>
								<p class="text-justify">
									Ideal para lanzamiento de productos o marcas, sampling,
									volanteo publicitario y otros.
								</p>
								<p
									class="text-justify"
									style="font-weight: 700; margin-bottom: 0"
								>
									¡Genera experiencias positivas para tu cliente!
								</p>
							</div>
						</div>
					</div>
					<!---------- Container ---------->
				</div>

				<svg
					style="margin-top: -7rem"
					width="108"
					height="217"
					viewBox="0 0 108 217"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M0 0C59.6468 0 108 48.8533 108 108.5C108 168.147 59.6468 217 0 217V0Z"
						fill="#ED1164"
					/>
				</svg>

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

						<div class="d-flex justify-content-center">
							<div class="d-inline-block ml-5">
								<img
									src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-digital/root-tree.svg"
								/>
							</div>
						</div>
					</div>
				</div>

				<div class="bg-red">
					<div class="bg-pink-form rounded">
						<div class="big-title text-white text-center">
							Define tu presupuesto
						</div>

						<div class="bg-white mx-5 px-5 rounded-pill">
							<div class="d-inline-block w-75">
								<div class="input-group">
									<input
										type="text"
										placeholder="Sitio Web"
										class="form-control"
									/>
									<input
										type="text"
										placeholder="E-mail"
										class="form-control"
									/>
								</div>
							</div>
							<div class="d-inline-block">
								<button
									type="button"
									class="btn bg-red rounded-pill text-white my-1 p-2 btn-sm"
								>
									Solicita tu cotización
								</button>
							</div>
						</div>
					</div>
				</div>

				<!------------------Game-------------------->
				<div style="margin-top: 2rem" class="text-center">
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
								)) as $game) {
							get_template_part('components/option-game','full', $game ); } ?>
						</div>
						<div class="row justify-content-center">
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
						</div>
					</div>
					<!-------------Options---------------->
				</div>
				<!------------------Game-------------------->

			</div>
			<!------------BTL------------>

			<!----------Events---------->
			<div id="events" class="tab-pane fade">
				<br />
				<div class="bg-light-gray">
					<div class="big-title text-red my-4 text-center">Eventos</div>
					<!---------- Container ---------->
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-sm-6">
								<div class="my-3 subtitle-btl">
									Creamos experiencias que conectan.
								</div>
								<p class="text-justify text-light-gray">
									La planificación, es excelente trabajo en equipo y la
									capacidad de ejecución son nuestro pilares para asegurar que
									tu evento sea totalmente exitoso, tanto en organización como
									lógistica. <br /><br />
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

							<div class="col-sm-6 text-right">
								<img
									src="<?php echo $path_img; ?>first-event.svg"
									alt=""
								/>
							</div>
						</div>

						<div class="row justify-content-center pb-5">
							<div class="col-sm-6 col-md-3 text-center">
								<img
									style="height: 13rem"
									src="<?php echo $path_img; ?>second-event.svg"
								/>
							</div>
							<div class="col-sm-6 col-md-6 text-light-gray">
								<div class="d-flex flex-column justify-content-end h-100">
									<div class="my-3 subtitle-btl">
										¿Qué lograrás?<br />
										Establecer enlaces con tu audiencia y generar el
										reconocimiento de tu marca
									</div>
									<div>
										<img
											src="<?php echo $path_img; ?>third-event.svg"
											alt=""
										/>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!---------- Container ---------->
				</div>

				<svg
					style="margin-top: -7rem"
					width="108"
					height="217"
					viewBox="0 0 108 217"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M0 0C59.6468 0 108 48.8533 108 108.5C108 168.147 59.6468 217 0 217V0Z"
						fill="#ED1164"
					/>
				</svg>

				<div class="row justify-content-center" style="padding-bottom: 5rem;">
					<div style="background: #FAFAFA;" class="col-sm-12 col-md-10 d-flex flex-md-row align-items-center justify-content-center flex-column mx-3">
						<div class="pr-md-2 pr-lg-5">
							<div class="subtitle-event pb-3">Eventos Presenciales</div>
							<ul>
								<li class="text-event">Lanzamientos y otros corporativos.</li>
								<li class="text-event">Eventos de integración para empleados.</li>
								<li class="text-event">Conferencias, foros, seminarios y convenciones.</li>
							</ul>
							<div class="text-event-italic">*Cubrimos el protocolo de bioseguridad en todos los eventos</div>
						</div>
						<div class="pl-md-2 pl-lg-5">
							<!-- style="height: 23.4rem; margin-top: -4.4rem; margin-bottom: -3.2rem;" -->
							<img
								class="img-float-event"
								src="<?php echo $path_img; ?>eventos-presenciales.png"
							/>						
						</div>
					</div>
				</div>
			</div>
			<!----------Events---------->

			<!----------relations---------->
			<div id="relations" class="tab-pane fade">
				<br />
				<div class="bg-light-gray pb-5">
					<div class="big-title text-red my-4 text-center">
						Relaciones Públicas
					</div>
					<!---------- Container ---------->
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-sm-6 text-center" style="height: 26.4rem">
								<img
									src="<?php echo $path_img; ?>first-relation.svg"
									alt=""
								/>
							</div>

							<div class="col-sm-6" style="padding-top: 2rem">
								<div class="my-3 subtitle-btl">
									Establece vínculos sólidos y perdurables
								</div>
								<p class="text-justify text-light-gray">
									<strong>Hacemos que tu voz suene en los medios.</strong> Te
									asesoramos en la selección de los medios efectivos para un
									mayor impacto.<br />
									Formulamos
									<strong
										>estrategias de comunicación para construir tu reputación
										mediática.</strong
									><br /><br />

									Monitoreamos las líneas de acción para consolidar las
									relaciones con tu comunidad. Cubrimos actividades online y
									offline.
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6 text-light-gray text-right">
								<div class="my-3 subtitle-btl text-right">
									¿Qué lograrás?<br />
									Generar un impacto<br />
									mediático positivo
								</div>
								<img
									src="<?php echo $path_img; ?>third-relation.svg"
									alt=""
								/>
							</div>

							<div class="col-sm-6 text-center" style="margin-top: -5rem">
								<img
									style="height: 13rem"
									src="<?php echo $path_img; ?>second-relation.svg"
								/>
							</div>
						</div>
					</div>
					<!---------- Container ---------->
				</div>

				<svg
					style="margin-top: -7rem"
					width="108"
					height="217"
					viewBox="0 0 108 217"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M0 0C59.6468 0 108 48.8533 108 108.5C108 168.147 59.6468 217 0 217V0Z"
						fill="#ED1164"
					/>
				</svg>
			</div>
			<!---------relations------------>

			<!----------Sales---------->
			<div id="sales" class="tab-pane fade">
				<br />
				<div class="bg-light-gray pb-5">
					<div class="big-title text-red my-4 text-center">
						Fuerza de ventas
					</div>
					<!---------- Container ---------->
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-sm-6" style="padding-top: 3rem">
								<div class="my-3 subtitle-btl">
									Incrementa tus ventas y fideliza a tus clientes
								</div>
								<p class="text-justify text-light-gray">
									Ponemos a tu disposición un
									<strong>equipo humano capacitado y con experiencia</strong>
									que te ayudará a alcanzar resultados. Nos encargamos del
									<strong
										>reclutamiento y seguimiento para crear tu propia red de
										ventas a nivel nacional</strong
									>
									a la medida de tus necesidades y objetivos.<br /><br />

									El desempeño de nuestro equipo preservará la identidad de tu
									organización y logrará construir relaciones a largo plazo con
									tus clientes.
								</p>
							</div>

							<div class="col-sm-6 text-right">
								<img
									src="<?php echo $path_img; ?>first-sales.svg"
									alt=""
								/>
							</div>
						</div>

						<div class="row justify-content-center align-items-end">
							<div
								class="col-sm-6 col-md-3 text-center"
								style="margin-top: -5rem"
							>
								<img
									style="height: 15rem"
									src="<?php echo $path_img; ?>second-sales.svg"
								/>
							</div>
							<div class="col-sm-6 col-md-6" style="padding-left: 2rem">
								<div class="text-justify text-light-gray">
									Con nosotros conseguirás equipos de alto<br />
									desempeño: Promotores, Ejecutivos de Ventas,<br />
									Asesores Comerciales y más.
								</div>
								<img
									src="<?php echo $path_img; ?>third-sales.svg"
									alt=""
								/>
							</div>
						</div>
					</div>
					<!---------- Container ---------->
				</div>

				<svg
					style="margin-top: -7rem"
					width="108"
					height="217"
					viewBox="0 0 108 217"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M0 0C59.6468 0 108 48.8533 108 108.5C108 168.147 59.6468 217 0 217V0Z"
						fill="#ED1164"
					/>
				</svg>
			</div>
			<!----------Sales---------->

			<!----------Hostess---------->
			<div id="hostess" class="tab-pane fade">
				<br />
				<div class="bg-light-gray pb-5">
					<div class="big-title text-red my-4 text-center">Anfitrionaje</div>
					<!---------- Container ---------->
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-sm-6" style="padding-top: 3rem">
								<div class="my-3 subtitle-btl">
									Imagen y calidad de atención
								</div>
								<p class="text-justify text-light-gray">
									Buscamos elevar el posicionamiento de tu marca y resaltar la
									imagen de tu empresa. Contamos con
									<strong
										>anfitrionas e impulsadoras de primer nivel y con
										experiencia</strong
									>
									que garantizan un excelente contacto directo con los
									clientes.<br /><br />

									Nuestro equipo es más que una cara bonita; posee carisma,
									habilidades comunicativas y capacidad de trabajo en equipo.
								</p>
							</div>

							<div class="col-sm-6 text-right">
								<img
									src="<?php echo $path_img; ?>first-hostess.svg"
									alt=""
								/>
							</div>
						</div>
					</div>
					<!---------- Container ---------->
				</div>

				<svg
					style="margin-top: -7rem"
					width="108"
					height="217"
					viewBox="0 0 108 217"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M0 0C59.6468 0 108 48.8533 108 108.5C108 168.147 59.6468 217 0 217V0Z"
						fill="#ED1164"
					/>
				</svg>
			</div>
			<!----------Hostess---------->

			<div class="corner_footer"></div>
		</div>
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
