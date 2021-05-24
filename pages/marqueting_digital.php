<?php
/* 
    Template Name: Marketing
*/

get_header();

?>


<section id="slider">

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_option("evanzu")["carrusell-image-one"]; ?>">


            </div>
            <div class="carousel-item">
                <img src="<?php echo get_option("evanzu")["carrusell-image-two"]; ?>">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_option("evanzu")["carrusell-image-one"]; ?>">
            </div>

          
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

        <div class="d-flex justify-content-center">
                <div id="rectangle" class="text-center">
                </div>
            </div>

    </div>


</section>


<?php get_footer(); ?>