<?php
/* 
    Template Name: petro-peru
*/
get_header();

$path_img = get_template_directory_uri() . '/assets/images/petro-peru/';
?>
<style>
  .b-0 {
    bottom: 0 !important;
  }

</style>

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
                  <i class="btn-open-i" >Ahora que estás inclinando la cabeza para leer, escríbenos.</i><br>
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
		<div class="row align-items-center justify-content-center mb-3">
    <img class="mb-5 img-fluid" src="<?php echo $path_img; ?>logo-petro-peru.svg" title="Logo de Petro Perú" alt="Poster del Petro Perú en exterior" />
		</div>
	</div>
</section>

<section class="bg-light-gray pt-3 pb-5">
	<div class="container">
		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
        Comunicación Interna
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
      Nos encargamos de la redacción, diseño y animación de contenidos, para luego ser difundida por las plataformas de Comunicación interna de Petroperú (Yammer, WhatsApp y correo corporativo). Con el objetido de mantenemos informados a los trabajadores y gestionar la interacción con los mismos, logrando fortalecer el clima laboral. 
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-md-8 p-1 m-0 p-md-2">
				<img src="<?php echo $path_img; ?>Portada-BBVA 1 (1).png" title="Poster Petro Perú desvinculacióon Kasnet" alt="Poster del Petro Perú en exterioor" class="w-100 h-100" />
			</div>
			<div class="col-md-4 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img; ?>Cierre-de-oficinas 1.png"
					title="Poster Cierre de oficinas Petro Perú"
					alt="Diseño de poster para cierre de oficinas Petro Perú."
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img; ?>diptico mock up.png"
					title="Piezas para el Agente Petro perú"
					alt="Diferentes diseños para los Agentes Petro Perú"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img; ?>diptico mock up (1).png"
					title="Triptico Petro Perú"
					alt="Diseño  de un triptico para el Petro Perú"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img; ?>diptico mock up (2).png"
					title="Poster campaña escolar Petro Perú"
					alt="Diseño y fotografía para el post de Campaña Escolar Petro Perú"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img; ?>diptico mock up (3).png"
					title="Poster Petro Perú ganador"
					alt="Diseño de poster ganador para el Petro Perú"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img; ?>diptico mock up (4).png"
					title="Diseño de sticker Giros"
					alt="Diseño de estiker giros Petro Perú"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php echo $path_img; ?>diptico mock up (5).png"
					title="Poster Agente Petro Perú"
					alt="Diseño de poster Agente Petro Perú"
					class="w-100 h-100"
				/>
			</div>
		</div>
		<!---------------images-------------->

		<!---------------title--------------->
		<!-- <div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
        Edición de video, animación 2D y motion grafic
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
        Realizamos el concepto, planificación, diseño y gestión de las activaciones para nuestro clientes Agentes BBVA, del banco BBVA.
			</p>
		</div> -->
		<!---------------title--------------->

		<!---------------images-------------->
		<!-- <div class="row">
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php // echo $path_img; ?>5161718.png"
					title="Portada de facebook agente BBVA"
					alt="Portada y gestión de comunidad en facebook BBVA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
				<img
					src="<?php // echo $path_img; ?>5161719.png"
					title="Diseño de contenido y jalavista BBVA"
					alt="Diseño de jalavista y post BBVA"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-12 p-1 m-0 p-md-2">
				<img
					src="<?php // echo $path_img; ?>5161720.png"
					title="Diseño de contenidos Agente BBVA"
					alt="Diseño de contenidos para comunidad Agente BBVA"
					class="w-100 h-100"
				/>
			</div>
		</div> -->
		<!---------------images-------------->

		<!---------------title--------------->
		<div class="container-subtitle-client">
			<h2 class="text-red text-center subtitle-client p-1 m-0">
				Edición de video, animación 2D y motion grafic
			</h2>

			<p class="text-light-gray text-center p-1 m-0 text-secondary-client">
				Realizamos el concepto, planificación, diseño y gestión de las activaciones para nuestro clientes Agentes BBVA, del banco BBVA.
			</p>
		</div>
		<!---------------title--------------->

		<!---------------images-------------->
		<div class="row">
			<div class="col-12 p-1 m-0 p-md-2">
				<!-- Portafolio_BTL&_Comunicacion_BBVA  -->
				<img
					src="<?php echo $path_img; ?>5161720.png"
					title="Activación BBVA"
					alt="Activación BBVA en el parque de las aguas, anfitrionas y auto brandeado"
					class="w-100 h-100"
				/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
        <div class='position-absolute b-0 ml-4'>
          <h6 class="small text-near text-red fs-12 font-weight-bold hurme-bold-4">PROCESO DE EXPLOTACIÓN Y EXTRACCIÓN DEL PETRÓLEO</h6>
          <p class="text-light font-weight-bold hurme-bold-4" style='font-size: 1.7rem; line-height: 3rem;'>PETROPERÚ</p>
        </div>
				<img src="<?php echo $path_img; ?>5161719.png" title="Activación Paque de las Aguas Agente BBVA" alt="Activación del Agente BBVA en el parque de las aguas, toldo brandeado, banner y ruleta ganadora." class="w-100 h-100" title="Servicio de activacion BTL" alt="Activacion BTL  para tu empresa"/>
			</div>
			<div class="col-md-6 p-1 m-0 p-md-2">
        <div class='position-absolute b-0 ml-4'>
          <h6 class="small text-near text-red fs-12 font-weight-bold hurme-bold-4">CONSEJOS PARA VIDEOLLAMADAS EN TEAMS</h6>
          <p class="text-light font-weight-bold hurme-bold-4" style='font-size: 1.7rem; line-height: 3rem;'>PETROPERÚ</p>
        </div>
				<img
					src="<?php echo $path_img; ?>5161718.png"
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

			<!-- <a class="p-1" href="#">
				<img
					src="<?php //echo get_template_directory_uri() .'/assets/images/clients/'; ?>PetroPeru-small.png"
					class="img-fluid"
				/>
			</a> -->

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

<?php get_footer(); ?>
