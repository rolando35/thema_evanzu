<?php
/* 
    Template Name: desarrollo&software
*/
get_header('', array( 'title' => 'Desarrollo de páginas web, tienda virtual, app, software, diseño UX UI',
					  'description' => 'Agencia de Desarrollo de páginas web, tienda virtual, aplicaciones móviles, software a medida, diseño UX UI', 
					  'keywords' => '',
					  'richsnippets' =>'<script type="application/ld+json">
					{
					"@context": "https://schema.org/", 
					"@type": "BreadcrumbList", 
					"itemListElement": [{
						"@type": "ListItem", 
						"position": 1, 
						"name": "Tiendas virtuales",
						"item": "https://evanzu.com/new_evanzu/desarrollo-software/#tiendas_virtuales"  
					},{
						"@type": "ListItem", 
						"position": 2, 
						"name": "Páginas web",
						"item": "https://evanzu.com/new_evanzu/desarrollo-software/#paginas_web"  
					},{
						"@type": "ListItem", 
						"position": 3, 
						"name": "App móviles",
						"item": "https://evanzu.com/new_evanzu/desarrollo-software/#app_moviles"  
					},{
						"@type": "ListItem", 
						"position": 4, 
						"name": "Software a medida",
						"item": "https://evanzu.com/new_evanzu/desarrollo-software/#software_medida"  
					},{
						"@type": "ListItem", 
						"position": 5, 
						"name": "Diseño UX",
						"item": "https://evanzu.com/new_evanzu/desarrollo-software/#ux_ui"  
					}]
					}
					</script>'
					));
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

/* ul {
	line-height: 1.8;
} */


@media only screen and (min-width: 1200px) {
  .text-paragraph {
    line-height: 1.8;
  }
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
		top: 5rem !important;
		bottom: auto;
		left: 10%;
	} 
	.carousel-item > img {
		height: 25rem !important;
	}
}

.carousel-caption{
		top: 5rem;
		bottom: auto;
		left: 10%;
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

.contain-image {
	margin-bottom: -4rem;
  margin-right: -29rem;
  top: -13rem;
	height: 21rem;
}

.mt-24rm {
	margin-top: -16rem;
}

.contain-img-software {
	margin-bottom: -9rem;
	height: 11rem;
}

.image-software {
	margin-top: -11rem;
  margin-right: -28rem;
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
  <!----------------- Banner ----------------->
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
					src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/Portada Desarrollo.jpg"
					title="Desarrollo de Software y App móviles"
					alt="Computadora con una web"
          class="w-100 h-100"
				/>
				<div class="carousel-caption">
					<div class="col-8 flex-colum text-left p-0">
            <h1 class="develop-title" data-wow-delay="0.3s">Creadores de aplicaciones</h1>
            <h2 class="text-paragraph hurme-bold-4" data-wow-delay="0.3s">MÓVILES &</h2>
            <div class="d-flex align-center">
              <h2 class="text-paragraph2 mr-2 hurme-bold-4" data-wow-delay="0.3s">SOFTWARE</h2>
              <img
								alt="title icon"
								src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/title-icon.svg"
								/>
            </div>
						<div class="text-subtitle-btl">
              Es momento de ponerte en modo digital. <br> Ofrecemos la combinación perfecta de diseño, usabilidad y técnología.
						</div>
              <div class="mt-3 text-left">
                <button class="btn-btl" onclick="ButtonRedirectForm();" id="btn-main">
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
			<ul class="nav nav-pills nav-tabs-sticky justify-content-center" id="nav-iconos" role="tablist">
				<?php foreach (
        [
            [
                'svg' => 'first-tab.svg',
                'title' => 'Tiendas <br> virtuales',
                'active' => true,
                'href' => '#tiendas_virtuales',
                'path' => $path_software,
            ],
            [
                'svg' => 'second-tab.svg',
                'title' => 'Páginas <br> web',
                'href' => '#paginas_web',
                'path' => $path_software,
            ],
            [
                'svg' => 'third-tab.svg',
                'title' => 'App <br> móviles',
                'href' => '#app_moviles',
                'path' => $path_software,
            ],
            [
                'svg' => 'fourth-tab.svg',
                'title' => 'Software <br> a medida',
                'href' => '#software_medida',
                'path' => $path_software,
            ],
            [
                'svg' => 'fifth-tab.svg',
                'title' => 'Diseño <br> UX & UI',
                'href' => '#ux_ui',
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
			<div id="tiendas_virtuales" class="tab-pane active">
				<br>
				<!----------------------Main---------------------->
				<section class="p-0">
					<div class="bg-light-gray py-0 mb-5">
            <!-------------------Card---------------------->
						<div class="py-2">
              <div class="big-title text-blue my-2 text-center pt-5" style="line-height: 25px;">
                E-commerce <br> <span class="store font-weight-normal hurme-simple-4">(Tiendas Virtuales)</span>
              </div>
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-md-11 col-lg-6 d-flex align-items-center">
										<div class="card bg-transparent border-0">
											<div class="card-body">
												<h3 class="text-left text-blue p-1 font-weight-bold hurme-bold-4">¿Alguien dijo más ventas?</h3>
												<p class="text-justify text-light-gray p-1">
												Vende las 24 horas los 7 días a la semana con una tienda virtual efectiva. Ofrece una <span class="hurme-bold-4">experiencia de compra online única y segura.</span> <br> <br>
                        Podrás editar tus productos, sus características (precios, promociones, stock, métodos de cobro, envíos y más), y gestionar tus pedidos desde una sola interfaz.
												</p>
											</div>
										</div>
									</div>
									<div class="col-md-10 col-lg-6">
										<img
											src="<?php echo $path_software; ?>Ilustración tienda virtual.png"
											title="Servicio de tienda virtual Evanzu"
											alt="tienda virtual adaptable"
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
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $path_software . 'servicio-incluye1.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Diseño personalizado</b> <br> y enfocado en la experiencia de usuario.',
            'line' => $path_software . 'line-rosado.svg',
        ]); ?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $path_software . 'servicio-incluye2.svg',
            'text' => 'Desarrollo a medida <br> o en CMS.',
            'line' => $path_software . 'line-blu.svg',
        ]); ?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $path_software . 'servicio-incluye3.svg',
            'text' =>
                'Integración de <b class="font-weight-bold hurme-bold-4 text-gray-black" >medios de pagos online.</b>',
            'line' => $path_software . 'line-rosado.svg',
        ]); ?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $path_software . 'servicio-incluye4.svg',
            'text' =>
                'Desarrollo de un <b class="font-weight-bold hurme-bold-4 text-gray-black" > Backoffice </b> para la gestión de pedidos.',
            'line' => $path_software . 'line-blu.svg',
        ]); ?>
							</div>
							<div class="d-none d-lg-flex">
								<div class="container-center-service element-final-center"></div>
							</div>
						</div>
					</div>
          <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -10rem;'>
              <img
								class=""
								src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/Ilutración tienda virtual.png"
								title="Servicio de tienda virtual Evanzu"
								alt="Ecommerce de una tienda"
							>
          </div>
				</div>
				<!-----------------------Service component tab1----------------------------->

				<div class='mt-5'>
        <!-----------------------Contact----------------------------->
				<?php get_template_part('components/form-quote-request2', 'full', [
        'image' => $path_software . 'form-quote-request.svg',
        'title' => '¡Empecemos ahora!',
				'idwebsite' => 'tiendas_virtualesWebsite',
        'idemail' => 'softWare1email',
        'idform' => 'softWare1',
        'idparagraph' => 'psoftWare1',
		'titleClass' =>'title-contact-fontlg title-contact-w38 text-left pl-lg-5',
		'imgClass' => 'image-contact-margin2'
    ]); ?>
				<!-----------------------Contact----------------------------->
      </div>

				<!------------------Portafolio-------------------->
			
				<!------------------Portafolio-------------------->

			</div>
			<!------------BTL------------>

			<!----------paginas_web---------->
			<div id="paginas_web" class="tab-pane fade">
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
											src="<?php echo $path_software; ?>Páginas web evanzu.png"
											title="Servicio de páginas web"
											alt="imac con un web"
											class="img-fluid"
										/>
									</div>
									<div class="col-md-11 col-lg-7 py-2 d-flex align-items-end justify-content-center">
										<div class="card bg-transparent border-0">
											<div class="card-body pb-0" style="max-width: 28rem;">
												<h3 class="subtitle-btl text-blue text-left">Si no tienes presencia digital, no existes</h3>
												<p class="text-justify text-light-gray p-1">
                        <span class="hurme-bold-4">Ubica tu negocio en el espacio digital</span> con una página web profesional, atractiva y amigable. <span class="hurme-bold-4">Que te encuentren cuando te busquen.</span>
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
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $path_software . 'servicio-incluye1.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Diseño personalizado</b> <br> y responsivo.',
            'line' => $path_software . 'line-rosado.svg',
        ]); ?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $path_software . 'servicio-path2-2.svg',
            'text' => 'Publicidad y <br>Desarrollo.',
            'line' => $path_software . 'line-blu.svg',
        ]); ?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $path_software . 'servicio-path2-3.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Definición de la estrategia del proyecto.</b>',
            'line' => $path_software . 'line-rosado.svg',
        ]); ?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $path_software . 'servicio-path2-4.svg',
            'text' => '<span class="hurme-bold-4"/>Maquetación y arquitectura. </span>',
            'line' => $path_software . 'line-blu.svg',
        ]); ?>
							</div>
							
              <div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $path_software . 'servicio-path2-5.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Implementación <br> y mantenimiento</b>',
            'line' => $path_software . 'line-rosado.svg',
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
          <div class="position-relative d-flex justify-content-center mt-5 contain-image">
              <img
								class="d-none d-lg-block"
								src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/Páginas web evanzu en laptop.png"
								title="Desarrollo de páginas web"
								alt="Desarrollo de páginas web EVANZU"
						>
          </div>
					<!-----------------------Circle Right----------------------------->
					<div class='w-100 text-right'>
						<div class="w-100 text-right d-none d-md-block">
							<svg 
								style='margin-top: -31rem; transform: rotate(-180deg);'
								width="108"
								height="217"
								viewBox="0 0 108 217"
								fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M0 0C59.6468 0 108 48.8533 108 108.5C108 168.147 59.6468 217 0 217V0Z" fill="#03479C"/>
							</svg>
						</div>
					</div>
					<!-----------------------Circle Right----------------------------->
				</div>
				<!-----------------------Service component tab2----------------------------->


				<!-----------------------Service paht two----------------------------->

        <div class='mt-24rm'>
        <!-----------------------Contact----------------------------->
				<?php get_template_part('components/form-quote-request2', 'full', [
        'image' => $path_software . 'form-quote-request.svg',
        'title' => 'Estamos listos. ¡Contáctanos!',
				'idwebsite' => 'paginas_webWebsite',
        'idemail' => 'softWare2email',
        'idform' => 'softWare2',
        'idparagraph' => 'psoftWare2',
				'titleClass' =>'title-contact-fontmd title-contact-w38 text-center',
				'imgClass' => 'image-contact-margin2'
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
											<p class="text-light-gray" style="font-size: 20px;">
												Puedes solicitar el desarrollo de una <br> <span class="font-weight-bold hurme-bold-4 text-blue">web administrable</span> que incluye:
											</p>
											<div class="d-flex flex-wrap text-light-gray">
												<ul class="card-text px-4 col-12 col-md-10 col-lg-6 text-light-gray" style="line-height: 1.5">
													<li class="text-event"><b class="font-weight-bold hurme-bold-4" >Diseño personalizado</b></li>
													<li class="text-event">5 a 7 menús (páginas)</li>
													<li class="text-event"><b class="font-weight-bold hurme-bold-4" >Formulario de contacto</b></li>
													<li class="text-event">Chat de atención al cliente</li>
													<li class="text-event"><b class="font-weight-bold hurme-bold-4" >Blog</b></li>
												</ul>
												<ul class="card-text px-4 col-12 col-md-10 col-lg-6 text-light-gray" style="line-height: 1.5">
													<li class="text-event">Administrador de contenidos</li>
													<li class="text-event"><b class="font-weight-bold hurme-bold-4" >Web Estática</b></li>
													<li class="text-event">Diseño personalizado</li>
													<li class="text-event"><b class="font-weight-bold hurme-bold-4" >5 menús (páginas)</b></li>
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
										src="<?php echo $path_software; ?>Ilustración de un buscador.svg"
										title="web administrable"
										alt="Ilustración de un hombre buscando una web"
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
			<!----------paginas_web---------->

			<!----------app_moviles---------->
			<div id="app_moviles" class="tab-pane fade">
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
												<h3 class="subtitle-btl text-left p-1 text-blue">Tu negocio en las manos de tus clientes</h3>
												<div class="text-justify text-light-gray p-1">
												Desarrollamos <b class="font-weight-bold hurme-bold-4" >aplicaciones móviles tanto para uso masivo como para uso corporativo</b>. Utilízalo como extensión de tu negocio o como herramienta de comunicación para mejorar procesos internos. <br> <br>

Explotamos al máximo las funcionalidades que nos ofrecen las plataformas móviles: GPS, cámara, chat, NFC, llamadas, mensajería, pop-ups y otros.
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
											src="<?php echo $path_software; ?>App móbiles desarrollo.png"
											title="Desarrollo de aplicaciones móviles"
											alt="Partes de una aplicación móvil"
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
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $path_software . 'como-trabajamos1.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Planificamos según tus objetivos y necesidades.</b>',
            'line' => $path_software . 'line-rosado.svg',
        ]); ?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $path_software . 'servicio-path2-4.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Definimos las funciones</b> <br> que cubran las necesidades actuales y que se anticipen a las futuras.',
            'line' => $path_software . 'line-blu.svg',
        ]); ?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $path_software . 'como-trabajamos3.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Establecemos el flujo <br> de navegación y diseño </b>pensando en el usuario. ',
            'line' => $path_software . 'line-rosado.svg',
        ]); ?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $path_software . 'como-trabajamos4.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Realizamos testing y control de calidad.</b>',
            'line' => $path_software . 'line-blu.svg',
        ]); ?>
							</div>
							<div class="d-none d-lg-flex">
								<div class="container-center-service element-final-center"></div>
							</div>
						</div>
					</div>
          <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -7rem;'>
              <img
								class=""
								src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/Ilustración app móviles.png"
								title="Servicio de desarrollo de app móviles"
								alt="Ilustración del proceso de desarrollo"
								>
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
				'idwebsite' => 'app_movilesWebsite',
        'idemail' => 'softWare3email',
        'idform' => 'softWare3',
        'idparagraph' => 'psoftWare3',
		'titleClass' =>'title-contact-fontlg title-contact-w38 text-left pl-lg-2',
		'imgClass' => 'image-contact-margin2'
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
						<ul class="col-12 col-md-6 col-lg-4 hurme-bold-4 " style="line-height: 2;">
							<li>Seguimiento de clientes/proveedores</li>
							<li>Gestión de stock</li>
							<li>Geolocalización</li>
							<li>Brindar información</li>
						</ul>
						
						<ul class="col-12 col-md-6 col-lg-4 hurme-bold-4" style="line-height: 2;">
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
			<!---------app_moviles------------>

			<!----------software_medida---------->
			<div id="software_medida" class="tab-pane fade">
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
											src="<?php echo $path_software; ?>Lenguajes para desarrollo de software a medida.png"
											title="Lenguajes de desarrollo"
											alt="Lenguajes para el desarrollo de software"
											class="img-fluid"
										/>
									</div>
									<div class="col-md-11 col-lg-6 d-flex align-items-center">
										<div class="card bg-transparent border-0">
											<div class="card-body">
												<h3 class="subtitle-btl text-left p-1 text-blue">Soluciones para necesidades únicas</h3>			
												<div class="text-justify text-light-gray p-1">
													<span class="hurme-bold-4">Nos adaptamos a la complejidad de cualquier proyecto.</span> Nuestro equipo te ayudará a definir y desarrollar las herramientas que necesites, ya sea para que emprendas un nuevo proyecto o para que le des un giro o impulso a tu empresa. <br> <br> Contamos con personal especializado en distintos tipos de lenguajes de programación : PHP, Java, Java script, Ruby, Node.js, C++, Visual.Net, C#. Python. <br> <br> Tenemos especialistas para todas las etapas del desarrollo: Diseño UX y UI, frontend, backend, seguridad informática y QA Testing.
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
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $path_software . 'tab4-servicio1.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Software ERP.</b>',
            'line' => $path_software . 'line-rosado.svg',
        ]); ?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $path_software . 'tab4-servicio2.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Software CRM.</b>',
            'line' => $path_software . 'line-blu.svg',
        ]); ?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $path_software . 'tab4-servicio3.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Sistemas de Matrícula.</b>',
            'line' => $path_software . 'line-rosado.svg',
        ]); ?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $path_software . 'tab4-servicio4.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Sistemas de gestión de <br> ventas e ingresos.</b>',
            'line' => $path_software . 'line-blu.svg',
        ]); ?>
							</div>
							
              <div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $path_software . 'tab4-servicio5.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Sistemas de <br> control de stock.</b>',
            'line' => $path_software . 'line-rosado.svg',
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
          <div class="position-relative d-flex justify-content-center mt-5 contain-img-software">
              <img
								class="d-none d-lg-block image-software"
								title="Servicio de dessarrollo de software a medida"
								alt="Desarrollo de software en equipo"
								src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/Desarrollo de software a medida1.png"
							>
          </div>
					<!-----------------------Circle Right----------------------------->
					<div class='w-100 text-right'>
						<div class="w-100 text-right d-none d-md-block">
							<svg 
								style='margin: -9rem 0 -6rem 0; transform: rotate(-180deg);'
								width="108"
								height="217"
								viewBox="0 0 108 217"
								fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M0 0C59.6468 0 108 48.8533 108 108.5C108 168.147 59.6468 217 0 217V0Z" fill="#03479C"/>
							</svg>
						</div>
					</div>
					<!-----------------------Circle Right----------------------------->
				</div>
				<!-----------------------Service component tab4----------------------------->

        <div class='' style="margin-top: -1rem;">
        <!-----------------------Contact----------------------------->
				<?php get_template_part('components/form-quote-request2', 'full', [
        'image' => $path_software . 'form-quote-request.svg',
        'title' => '¿Un proyecto en mente?',
				'idwebsite' => 'software_medidaWebsite',
        'idemail' => 'softWare4email',
        'idform' => 'softWare4',
        'idparagraph' => 'psoftWare4',
		'titleClass' =>'title-contact-fontlg title-contact-w38 text-center',
		'imgClass' => 'image-contact-margin2'
    ]); ?>
				<!-----------------------Contact----------------------------->
				<!-----------------------Portafolio tab4----------------------------->
				<!-----------------------Portafolio tab4----------------------------->
				</div>
			</div>
			<!----------software_medida---------->

			<!----------ux_ui---------->
			<div id="ux_ui" class="tab-pane fade">
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
											src="<?php echo $path_software; ?>Desarrollo de software a medida.png"
											title="Servicio de dessarrollo de software a medida"
											alt="Desarrollo de software en equipo"
											class="img-fluid"
										/>
									</div>
									<div class="col-md-11 col-lg-6 d-flex align-items-center">
										<div class="card bg-transparent border-0">
											<div class="card-body">
												<h3 class="subtitle-btl text-left p-1 text-blue">Genera la mejor experiencia de usuario en tu plataforma</h3>
												<p class="text-justify text-light-gray p-1">
													Nos basamos en el diseño centrado en el usuario para crear <span class="hurme-bold-4">plataformas intuitivas.</span> <br> <br>

													Partimos de la investigación de las necesidades del usuario y del análisis de la usabilidad de tu interfaz para proponerte un <span class="hurme-bold-4">diseño efectivo que garantice la mejor experiencia de usuario. </span><br> <br>

													Hacemos que la navegabilidad sea <span class="hurme-bold-4">clara, sencilla y que encamine al usuario a tomar una acción concreta.</span>
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
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $path_software . 'como-trabajamos3.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Investigación del perfil</b> de usuario.',
            'line' => $path_software . 'line-rosado.svg',
        ]); ?>
								<div class="d-none d-lg-block container-center-service">
						 			<div class="element-center-service"></div>
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $path_software . 'diseño-servicio2.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Desarrollo del mapa de navegación, animación y transiciones.</b>',
            'line' => $path_software . 'line-blu.svg',
        ]); ?>
							</div>

							<div class="d-flex flex-column flex-md-row">
								<?php get_template_part('components/btl/service-left', 'full', [
            'image' => $path_software . 'diseño-servicio3.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Diseño de diagramas de navegación simulando interacciones</b> <br>Uso de plataformas como Figma, Adobe Xd y otros. ',
            'line' => $path_software . 'line-rosado.svg',
        ]); ?>									
								<div class="d-none d-lg-block container-center-service">
								</div>
								<?php get_template_part('components/btl/service-right', 'full', [
            'image' => $path_software . 'diseño-servicio4.svg',
            'text' =>
                '<b class="font-weight-bold hurme-bold-4 text-gray-black" >Testing.</b>',
            'line' => $path_software . 'line-blu.svg',
        ]); ?>
							</div>
							<div class="d-none d-lg-flex">
								<div class="container-center-service element-final-center"></div>
							</div>
						</div>
					</div>
          <div class="position-relative d-flex justify-content-center mt-5" style='margin-bottom: -7rem;'>
              <img
								class=""
								src="<?php echo get_template_directory_uri(); ?>/assets/images/desarrollo-de-software/Servicio de diseño de experiencia evanzu.png"
								title="Wireframes para el diseño de experiencia"
								alt="Pantallas de un diseño de interface">
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
        'title' => 'Tenemos más por contarte',
				'idwebsite' => 'ux_uiWebsite',
        'idemail' => 'softWare5email',
        'idform' => 'softWare5',
        'idparagraph' => 'psoftWare5',
		'titleClass' =>'title-contact-fontlg40 title-contact-w38 text-center',
		'imgClass' => 'image-contact-margin2'
    ]); ?>
				<!-----------------------Contact----------------------------->
				<!-----------------------Portafolio tab6----------------------------->
				<!-----------------------Portafolio tab6----------------------------->

			</div>
			<!----------ux_ui---------->

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
      <?php get_template_part('components/masonry-desarrollo'); ?>
    </div>

    <div class="container" style="margin-top: 5rem"></div>
  </div>
</section>

<?php get_footer();
?>
