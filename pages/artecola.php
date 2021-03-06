<?php 
/* 
    Template Name: arte-cola
*/
get_header();

$path_img = get_template_directory_uri() . '/assets/images/artecola/';
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
					Comercio de adhesivos
				</h1>
			</div>
			<div class="col-md-6">
				<div class="p-2 text-light-gray text-main-client">
					Mas de 70 años de historia en el Perú, con un amplio portafolio de
					productos de 9 plantas productivos en 6 paises de américa latina.
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light-gray pt-3 pb-5">
	<div class="container">
		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">Diseño Web</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Realizamos el diseño web con la actualización de la nueva marca.<br /><span class="hurme-bold-4"
					>Post - Rebranding</span
				>
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Web-Artecola.jpg" title="Diseño y programación web Artecola" alt="Diseño web de artecola con un laptop" class="w-100 h-100" />
			</div>
			<div class="col-md-6 p-0 m-0">
				<div class="d-flex flex-column h-100 w-100">
					<div class="w-100 h-50 p-1 m-0 p-md-2">
						<img
							src="<?php echo $path_img?>Portafolio-Artecola.jpg"
							title="Diseño interior web Artecola"
							alt="Páginas interiores del diseño web de Artecola"
							class="w-100 h-100"
						/>
					</div>
					<div class="w-100 h-50 p-1 m-0 p-md-2">
						<img
							src="<?php echo $path_img?>Web-Artecola2.jpg"
							title="Web Artecola"
							alt="Diseño para la web de Artecola"
							class="w-100 h-100"
						/>
					</div>
				</div>
			</div>
		</div>
		<!---------------images-------------->

		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
				Diseño Gráfico
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Realizamos la elaboración de diferentes piezas gráficas para sus
				diferentes productos.<br /><span class="hurme-bold-4">Pre - Rebranding</span>
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Portafolio-Artecola-Revista.jpg"
					title="Contraporta revista Artecla"
					alt="Diseño y tratamiento de imágenes contraportada de revista latinoamericana para Artecola"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Portafolio-Artecola-4.jpg"
					title="Diseño de mockup Afix Artecola"
					alt="Diseño para la promoción de Afix 3x2 Artecola"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Portafolio-Artecola-5.jpg"
					title="Diseño backing Artecola"
					alt="Diseño de Backing Artecola"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Portafolio-Artecola-Modulo.jpg"
					title="Diseño de módulo para activación Artecla"
					alt="Diseño y producción de módulo para activaciones de Artecola - Perú"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-12 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>01-triptico.jpg" title="Diseño de tríptico Artecola" alt="Diseño de tríptico A4 Artecola" class="w-100 h-100" />
			</div>
		</div>
		<!---------------images-------------->

		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
				Diseño de contenido para redes sociales
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Realizamos la elaboración de contenidos y diseño para las plataformas
				digitales.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-md-6 p-0 m-0">
				<div class="d flex flex-column h-100 w-100">
					<div class="w-100 h-50 p-1 m-0 p-md-2">
						<img
							src="<?php echo $path_img?>Portafolio-Artecola-6.jpg"
							title="Diseño redes sociales Artecola"
							alt="Diseño de contenido para redes sociales de Artecola"
							class="w-100 h-100"
						/>
					</div>
					<div class="w-100 h-50 p-1 m-0 p-md-2">
						<img
							src="<?php echo $path_img?>Portafolio-Artecola-8.jpg"
							title="Marketing Digital"
							alt="Gestión de redes sociales"
							class="w-100 h-100"
						/>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Artecola-porta.jpg"
					title="Diseño redes sociales Artecola"
					alt="Diseño mosaico para Facebook Artecola"
					class="w-100 h-100"
				/>
			</div>
		</div>
		<!---------------images-------------->

		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
				Sesión fotográfica de producto
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Realizamos la pre, producción y post producción de los productos que
				comercializa Artecola en el mercado peruano.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Fotografía-artecola-1.jpg"
					title="Fotografía de producto Artecola"
					alt="Fotografía de producto Artecola"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Fotografía-artecola-2.jpg"
					title="Fotografía de producto Artecola"
					alt="Fotografía de producto Artecola"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Fotografía-artecola-3.jpg"
					title="Fotografía de producto Artecola"
					alt="Fotografía de producto Artecola"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img?>Fotografía-artecola-4.jpg"
					title="Fotografía de producto Artecola"
					alt="Fotografía de producto Artecola"
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
