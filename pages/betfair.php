<?php 
/* 
    Template Name: BETFAIR
*/
get_header();

$path_img = get_template_directory_uri() . '/assets/images/betfair/';
?>

    <!--------------------- Button Modal --------------------->
        <div   class="position-fixed button-form-in-pages pr-2 pr-sm-0"> 

                         <div  class="d-block d-md-none position-fixed" data-toggle="modal" 
                            data-target="#myModalRight" 
                            data-dismiss="modal" 
                            data-backdrop="false">
                       <img class=""
                          src="<?php echo get_template_directory_uri() .'/assets/images/menu-responsive'?>/openform.svg"
                          alt="Instagram"
                        />
                   </div>



                        <div
                        type="button"
                        class="form-button position-absolute ndx" 
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
                        <i class="btn-open-i" >Ahora que estás inclinando la cabeza para leer, escríbenos.</i> <br>
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
		<div class="text-center">
			<!-- <div class="col-md-6 text-center text-md-left"> -->
				<img
					src="<?php echo $path_img?>title.svg"
					class="img-fluid px-1 py-3"
				/>
				<h1 class="px-1 py-2 text-light-gray title-client text-uppercase">
					Juegos de azar online
				</h1>
			<!-- </div> -->
			<!-- <div class="col-md-6">
				<div class="p-2 text-light-gray text-main-client">
					Una empresa de juegos de azar en línea que opera el mayor intercambio de apuestas en línea del mundo.<br>Realizamos toda la gestión y diseño de su presentación para la Conmebol en Lima - Perú.
				</div>
			</div> -->
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
				<img src="<?php echo $path_img?>Evento-Betfair.jpg" title="Stand para la Conmebol Betfair" alt="Stand par ala Conmebol Lima" class="w-100 h-100" />
			</div>
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Fotografía-vertical-1.jpg" title="Stand evento Betfair Conmebol Lima" alt="Stand Betfair con banner 1x2 en Lima - Perú" class="w-100 h-100" />
			</div>
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Fotografía-vertical-2.jpg" title="Ruleta ganadora Betfair Conmebol Lima Perú" alt="Rulera, anfitriona y stand para Betfair en la Conmebol de Lima Perú" class="w-100 h-100" />
			</div>                        
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Fotografía-vertical-3.jpg" title="Interacción evento Betfair" alt="Evento Betfair entregando merchandising a los usuarios" class="w-100 h-100" />
			</div>
            <div class="col-md-6 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Activación-Betfair-2.jpg" title="Evento Betfair personal" alt="Fotografía al finalizar el evento Betfair" class="w-100 h-100" />
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Activación-Betfair-1.jpg" title="Selfie Evento Betfair" alt="Fotografía de un usuario con marco selfie y una anfitriona" class="w-100 h-100" />
			</div>
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Fotografía-vertical-6.jpg" title="Orientación app Betfair" alt="Volantero con usuario utilizando aplicación Betfair" class="w-100 h-100" />
			</div>                        
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Fotografía-vertical-5.jpg" title="Animador Betfair en Conmebol Lima Perú" alt="Animador Betfair con participación de usuarios en la conmebol" class="w-100 h-100" />
			</div>
            <div class="col-md-4 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img?>Fotografía-vertical-4.jpg" title="Aplicación Betfair" alt="Usuarios utilizando la aplicación Betfair en la Conmebol Lima - Perú" class="w-100 h-100" />
			</div>
        </div>
        <!---------------images-------------->
	</div>
</section>

<!-------------------- Clients -------------------->
<section class="pb-4 pt-5">
	<div class="container">
	<div
			class="d-flex flex-wrap justify-content-center justify-content-xl-between">
			<a class="p-1" href="bbva">
				<img
					src="<?php echo get_template_directory_uri() .'/assets/images/clients/'; ?>BBVA-small.png"
					class="img-fluid"
				/>
			</a>

			<a class="p-1" href="petro-peru">
				<img
					src="<?php echo get_template_directory_uri() .'/assets/images/clients/'; ?>PetroPeru-small.png"
					class="img-fluid"
				/>
			</a>

			<a class="p-1" href="artecola">
				<img
					src="<?php echo get_template_directory_uri() .'/assets/images/clients/'; ?>Artecola-small.png"
					class="img-fluid"
				/>
			</a>

			<!-- <a class="p-1" href="betfair">
				<img
					src="<?php // echo get_template_directory_uri() .'/assets/images/clients/'; ?>Betfair-small.png"
					class="img-fluid"
				/>
			</a> -->

			<a class="p-1" href="bmatic">
				<img
					src="<?php echo get_template_directory_uri() .'/assets/images/clients/'; ?>BMatic-small.png"
					class="img-fluid"
				/>
			</a>

			<a class="p-1" href="aesa">
				<img
					src="<?php echo get_template_directory_uri() .'/assets/images/clients/'; ?>AESA-small.png"
					class="img-fluid"
				/>
			</a>
		</div>
	</div>
</section>
<!-------------------- Clients -------------------->

<?php  get_footer(); ?>
