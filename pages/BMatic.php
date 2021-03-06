<?php 
/* 
    Template Name: BMATIC
*/
get_header();

$path_img = get_template_directory_uri() . '/assets/images/BMatic/';
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
					Gestor de colas online
				</h1>
			</div>
			<div class="col-md-6">
				<div class="p-2 text-light-gray text-main-client">
					BMatic ofrece una solución fácil e intuitiva para la gestión de colas en las empresas y así evitar la acumulación de personas.
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
                Diseño de identificador gráfico
            </h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Diseñamos un simbolo para posicionar la marca, con unos colores vibrantes que resaltan la marca.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-md-5 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Bmatic-antes-a.jpg" title="Anterior logo de BMatic" alt="Anterior logo de BMatic" class="w-100 h-100" />
			</div>
			<div class="d-none col-md-2 d-md-flex align-items-md-center">
				<div class="w-100 px-1">
					<img src="<?php echo $path_img?>flecha.svg" class="w-100" />
				</div>
			</div>
			<div class="col-md-5 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Bmatic-despues-a.jpg" title="Nuevo logo de BMatic" alt="Nuevo logo de BMatic" class="w-100 h-100" />
			</div>                        
			<div class="col-12 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Manual-BMatic-Evanzu.jpg" title="Branding" alt="Diseño de logo" class="w-100 h-100" />
			</div>
        </div>
        <!---------------images-------------->


        <!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
                Diseño UX / UI
            </h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Diseñamos la experiencia de usuario de la web y app con un diseño atráctivo que permite captar leads. Además, desarrollamos su página web teniendo en cuenta características óptimas para el posicionamiento SEO.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>web-BMatic-portafolio.jpg" title="Diseño de página web BMatic" alt="Diseño y programación web de  la web de BMatic" class="w-100 h-100" />
			</div>
			<div class="col-md-6 p-0 m-0">
                <div class="d-flex flex-column h-100 w-100">
                    <div class="w-100 h-50 p-1 m-0 p-md-2">
                        <img src="<?php echo $path_img?>app-bmatic-portafolio.jpg" title="UI de la web app de bmatic" alt="Iphone con pantallas de la webapp de BMatic" class="w-100 h-100" />
                    </div>                        
                    <div class="w-100 h-50 p-1 m-0 p-md-2">
                        <img src="<?php echo $path_img?>Web-planes-BMatic.jpg" title="Web BMatic" alt="Pllanes y tarifas de BMatic" class="w-100 h-100" />
                    </div>
                </div>
			</div>
        </div>
        <!---------------images-------------->

        <!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
                Elaboración de video 2D
            </h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Creamos el video de impulso y de comunicación de servicio del sistema de BMatic, generando los gráficos y animación.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------video-------------->
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="video-responsive">
                    <iframe
                    height="215"
                    src="https://www.youtube.com/embed/v62wUTt9P6o"
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
                Diseño de contenido para redes sociales
            </h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Generamos el contenido y diseño para el lanzamiento del servicio de agendamiento de citas, para las plataformas de Facebook, Instagram y Twitter.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-12 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>redes-sociales.jpg" title="Diseño de post para facebook BMatic" alt="tres post para facebook de MaticB" class="w-100 h-100" />
			</div>
            <div class="col-8 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Redes-BMatic-A.jpg" title="Diseño para redes sociales bMatic" alt="Colas de diseño de BMatic para Facebook" class="w-100 h-100" />
			</div>
            <div class="col-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Redes-BMatic.jpg" title="Diseño para redes sociales BMatic" alt="Diseño para redes sociales BMatic" class="w-100 h-100" />
			</div>
        </div>
        <!---------------images-------------->


        <!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
                Estrategia de Adwords
            </h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Realizamos la planificación estratégica en Google Ads, para llegar al público a nivel nacional.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-6 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Adwords-BMatic.jpg" title="Adwords BMatic" alt="Diseño para Adwords BMatic" class="w-100 h-100" />
			</div>
            <div class="col-6 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Adwords-BMatic-2.jpg" title="Adwords web BMatic" alt="Diseño de banner web para Adwords BMatic" class="w-100 h-100" />
			</div>
        </div>
        <!---------------images-------------->

	</div>
</section>


<!-------------------- Clients -------------------->
<section class="pb-4 pt-5">
	<div class="container">
		<div class="d-flex flex-wrap justify-content-center justify-content-xl-between">
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
