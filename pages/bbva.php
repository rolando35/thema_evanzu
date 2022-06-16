<?php 
/* 
    Template Name: BBVA
*/
get_header();

$path_img = get_template_directory_uri() . '/assets/images/bbva/';
?>

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
<section class="top-clients pb-3">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 text-center text-md-left">
				<img
					src="<?php echo $path_img?>title.svg"
					class="img-fluid px-1 py-3"
				/>
				<h1 class="px-1 py-2 text-light-gray title-client text-uppercase">
					financiera
				</h1>
			</div>
			<div class="col-md-6">
				<div class="p-2 text-light-gray text-main-client">
					Es una sólida institución financiera fundada en Lima en 1951. Con su
					propósito de poner al alcance de todos los peruanos las oportunidades
					de esta nueva era, contribuyendo a la realización de sus sueños y
					proyectos.
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light-gray pt-3 pb-5">
	<div class="container">
		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
				Diseño Publicitario
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Producimos material gráfico publicitario para puntos de venta y canales
				digitales de las campañas. Los formatos y mensajes lograron los
				objetivos esperado.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-md-8 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Portada-BBVA 1.png" title="Poster BBVA desvinculacióon Kasnet" alt="Poster del BBVA en exterioor" class="w-100 h-100" />
			</div>
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Cierre-de-oficinas-BBVA.jpg"
					title="Poster Cierre de oficinas BBVA"
					alt="Diseño de poster para cierre de oficinas BBVA - Aurora"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Piezas-Agentes-BBVA.jpg"
					title="Piezas para el Agente BBVA"
					alt="Diferentes diseños para los Agentes BBVA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Triptico-BBVA.jpg"
					title="Triptico BBVA"
					alt="Diseño  de un triptico para el BBVA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Poster-Campaña-escolar 1.png"
					title="Poster campaña escolar BBVA"
					alt="Diseño y fotografía para el post de Campaña Escolar BBVA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Poster-BBVA-ganador.jpg"
					title="Poster BBVA ganador"
					alt="Diseño de poster ganador para el BBVA"
					class="w-100 h-100"
				/>
			</div>
			<!-- <div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php // echo $path_img?>Sticker-Giros.jpg"
					title="Diseño de sticker Giros"
					alt="Diseño de estiker giros BBVA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php // echo $path_img?>Poster-Agente-BBVA.png"
					title="Poster Agente BBVA"
					alt="Diseño de poster Agente BBVA"
					class="w-100 h-100"
				/>
			</div> -->
		</div>
		<!---------------images-------------->

		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
				Gestión de Redes Sociales y offline
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Gestionamos un grupo cerrado en Facebook de Agentes Corresponsales del
				BBVA. Generamos contenidos y atendimos a 300 usuarios.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Portada-de-facebook-agente-BBVA.jpg"
					title="Portada de facebook agente BBVA"
					alt="Portada y gestión de comunidad en facebook BBVA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Redes-Sociales-BBVA.jpg"
					title="Diseño de contenido y jalavista BBVA"
					alt="Diseño de jalavista y post BBVA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-12 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Disenos-para-redes-sociales.jpg"
					title="Diseño de contenidos Agente BBVA"
					alt="Diseño de contenidos para comunidad Agente BBVA"
					class="w-100 h-100"
				/>
			</div>
		</div>
		<!---------------images-------------->

		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
				Activaciones BTL con impacto
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Realizamos el concepto, planificación, diseño y gestión de las
				activaciones para los Agentes BBVA.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-12 p-1 m-0 p-md-2">
				<!-- Portafolio_BTL&_Comunicacion_BBVA  -->
				<img
					src="<?php echo $path_img?>Activacion-BBVA.jpg"
					title="Activación BBVA"
					alt="Activación BBVA en el parque de las aguas, anfitrionas y auto brandeado"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Activacion-BBVA2.jpg" title="Activación Paque de las Aguas Agente BBVA" alt="Activación del Agente BBVA en el parque de las aguas, toldo brandeado, banner y ruleta ganadora." class="w-100 h-100" title="Servicio de activacion BTL" alt="Activacion BTL  para tu empresa"/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Activacion-foto-2.jpg"
					title="Activación Agente BBVA"
					alt="Interacción en la Activación del Agente BBVA"
					class="w-100 h-100"
				/>
			</div>
		</div>
		<!---------------images-------------->
	</div>
</section>

<!-------------------- Clients -------------------->
<section class="pb-4 pt-5">
	<div class="container">
		<div
			class="d-flex flex-wrap justify-content-center justify-content-xl-between"
		>
			<a class="p-1" href="bbva">
				<img
					src="<?php echo get_template_directory_uri() .
         '/assets/images/clients/'; ?>BBVA-small.png"
					class="img-fluid"
				/>
			</a>

			<a class="p-1" href="#">
				<img
					src="<?php echo get_template_directory_uri() .
         '/assets/images/clients/'; ?>PetroPeru-small.png"
					class="img-fluid"
				/>
			</a>

			<a class="p-1" href="artecola">
				<img
					src="<?php echo get_template_directory_uri() .
         '/assets/images/clients/'; ?>Artecola-small.png"
					class="img-fluid"
				/>
			</a>

			<a class="p-1" href="betfair">
				<img
					src="<?php echo get_template_directory_uri() .
         '/assets/images/clients/'; ?>Betfair-small.png"
					class="img-fluid"
				/>
			</a>

			<a class="p-1" href="bmatic">
				<img
					src="<?php echo get_template_directory_uri() .
         '/assets/images/clients/'; ?>BMatic-small.png"
					class="img-fluid"
				/>
			</a>

			<a class="p-1" href="aesa">
				<img
					src="<?php echo get_template_directory_uri() .
         '/assets/images/clients/'; ?>AESA-small.png"
					class="img-fluid"
				/>
			</a>
		</div>
	</div>
</section>
<!-------------------- Clients -------------------->

<?php  get_footer(); ?>
