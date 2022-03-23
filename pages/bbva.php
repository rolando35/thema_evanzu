<?php 
/* 
    Template Name: BBVA
*/
get_header();

$path_img = get_template_directory_uri() . '/assets/images/bbva/';
?>

<section class="pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                	<img
					src="<?php echo $path_img?>title.svg"
					alt="Los Angeles"
                    class="img-fluid px-1 py-3"
                    />
                    <!-- 20.6rem -->
                <h3 class="px-1 py-2" style="
                font-weight: 400;
                font-size: 24px;
                line-height: 32.26px;
                color: #808080;
                ">FINANCIERA</h3>
            </div>
            <div class="col-sm-6">
                <div class="p-2" style="font-size: 24px; font-family: 'Hurme Geometric Sans 4'; font-weight: 600; line-height: 32.69px;color: #808080;">
                    Es una sólida institución financiera fundada en
                    Lima en 1951. Con su propósito de poner al
                    alcance de todos los peruanos las
                    oportunidades de esta nueva era, contribuyendo
                    a la reallización de sus sueños y proyectos.
                </div>
            </div>
        </div>
    </div>
</section>



<?php  get_footer(); ?>