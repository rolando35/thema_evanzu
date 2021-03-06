<?php 
/* 
    Template Name: AESA
*/
get_header();

$path_img = get_template_directory_uri() . '/assets/images/aesa/';
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
					Minería e Infraestructura
				</h1>
			</div>
			<div class="col-md-6">
				<div class="p-2 text-light-gray text-main-client">
					Es una empresa especializada en el servicio de exploración, desarrollo y explotación de yacimientos mineros. Pertenece al grupo Breca.
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
				Gestión de Evento en Seguridad
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Planificación, diseño y gestión de evento en Seguridad con la Familia
				realizado en Huancayo - Junín.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-12 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Fotografia-AESA.jpg"
					title="Evento AESA Perú"
					alt="Persona de AESA en evento de seguridad"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Fotografia-vertical-AESA-3.jpg"
					title="Almuerzo de despedida AESA"
					alt="Personal de AESA con el servicio de catering por EVANZU"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Fotografia-vertical-AESA-2.jpg"
					title="Juegos del evento de seguridad AESA"
					alt="NIños jugando en as actividades del evento AESA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Fotografia-vertical-AESA.jpg"
					title="Diseño de letreros de suelo AESA"
					alt="Diseño y producción de letreros AESA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Fotografia-AESA-h2.jpg"
					title="Increible AESA con el personal"
					alt="Personal de AESA con el personaje increible AESA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Fotografia-AESA-h1.jpg"
					title="Personajes evento AESA"
					alt="Personajes de bienvenido del evento se AESA con marco selfie y fondo temático"
					class="w-100 h-100"
				/>
			</div>
		</div>
		<!---------------images-------------->

		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
				Diseño y producción gráfica
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Elaboración de diseños para el evento de AESA.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Banner.jpg" title="Banner AESA" alt="Diseño y producción de banner AESA" class="w-100 h-100" />
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Banner-AESA-3.png"
					title="3 banner de AESA"
					alt="Diseño y producción de banner AESA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Disenos-troquelados-AESA.png"
					title="Diseños troquelado AESA"
					alt="Diseño y producción de letreros troquelados para el suelo en el evento de AESA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Membrete-AESA-.png"
					title="Diseño de membrete"
					alt="Diseño de membrete A4 para evento AESA"
					class="w-100 h-100"
				/>
			</div>
		</div>
		<!---------------images-------------->

		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
				Ilustración y diseño de personaje
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Para darle una personificación al evento decidimos crear el vestuario
				del personaje y el estilo animado para las diferentes piezas diseñadas.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-12 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Personaje-AESA.png"
					title="Ilustración de personaje temático AESA"
					alt="Diseño de personaje AESA para el evento de seguridad en Perú"
					class="w-100 h-100"
				/>
			</div>
		</div>
		<!---------------images-------------->

		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
				Grabación de evento
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Realizamos la grabación del evento para nuestro cliente.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------video-------------->
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="video-responsive">

                    <iframe
                    height="215"
                    src="https://www.youtube.com/embed/0KUkOKlPXKI"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    ></iframe>
				</div>
			</div>
		</div>
		<!---------------video-------------->

		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
				Diseño de piezas gráficas
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Creamos piezas gráficas que cumplieron con los objetivos establecidos por la marca.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Flyer-AESA.jpg" title="Diseño de flyer interno AESA" alt="Diseño de flyer interno para la minería AESA" class="w-100 h-100" />
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Banner-Ahora-te-toca-a-ti.jpg"
					title="Diseño de banner ahora te toca a ti AESA"
					alt="Diseño de banner ahora te toca a ti AESA"
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
					src="<?php echo get_template_directory_uri() . '/assets/images/clients/'?>BBVA.png"
					class="img-fluid"
				/>
			</a>

			<a class="p-1" href="artecola">
				<img
					src="<?php echo get_template_directory_uri() . '/assets/images/clients/'?>Artecola.png"
					class="img-fluid"
				/>
			</a>

			<a class="p-1" href="betfair">
				<img
					src="<?php echo get_template_directory_uri() . '/assets/images/clients/'?>Betfair.png"
					class="img-fluid"
				/>
			</a>

			<a class="p-1" href="bmatic">
				<img
					src="<?php echo get_template_directory_uri() . '/assets/images/clients/'?>BMatic.png"
					class="img-fluid"
				/>
			</a>

			<a class="p-1" href="aesa">
				<img
					src="<?php echo get_template_directory_uri() . '/assets/images/clients/'?>AESA.png"
					class="img-fluid"
				/>
			</a>
		</div>
	</div>
</section>
<!-------------------- Clients -------------------->

<?php  get_footer(); ?>
