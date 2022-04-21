<?php 
/* 
    Template Name: BETFAIR
*/
get_header();

$path_img = get_template_directory_uri() . '/assets/images/betfair/';
?>

<section class="top-clients pb-3">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 text-center text-md-left">
				<img
					src="<?php echo $path_img?>title.svg"
					class="img-fluid px-1 py-3"
				/>
				<h1 class="px-1 py-2 text-light-gray title-client text-uppercase">
					Juegos de azar online
				</h1>
			</div>
			<div class="col-md-6">
				<div class="p-2 text-light-gray text-main-client">
					Una empresa de juegos de azar en línea que opera el mayor intercambio de apuestas en línea del mundo.<br>Realizamos toda la gestión y diseño de su presentación para la Conmebol en Lima - Perú.
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light-gray pt-3 pb-5">
	<div class="container">
		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">Gestión de evento - activación<br>Conmebol</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Realizamos el diseño y gestión para el evento Conmebol en Lima - Perú para nuestro cliente Betfair.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-12 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Evento-Betfair.jpg" class="w-100 h-100" />
			</div>
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Fotografía-vertical-1.jpg" class="w-100 h-100" />
			</div>
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Fotografía-vertical-2.jpg" class="w-100 h-100" />
			</div>                        
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Fotografía-vertical-3.jpg" class="w-100 h-100" />
			</div>
            <div class="col-md-6 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Activación-Betfair-2.jpg" class="w-100 h-100" />
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Activación-Betfair-1.jpg" class="w-100 h-100" />
			</div>
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Fotografía-vertical-6.jpg" class="w-100 h-100" />
			</div>                        
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Fotografía-vertical-5.jpg" class="w-100 h-100" />
			</div>
            <div class="col-md-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Fotografía-vertical-4.jpg" class="w-100 h-100" />
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
