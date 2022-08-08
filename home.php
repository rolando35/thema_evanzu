<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<style>
    .ndx{
        z-index: 1;
        display: flex;
        justify-content: end;
        align-items: center;
    }
    .texto-vertical {
        writing-mode: vertical-lr;
        transform: rotate(180deg);
        position: absolute;
        margin: 0;
    }
    
    .pulse {
        animation: pulse  5s 4s infinite ease;
    }
    .pulse-alternative {
        animation: pulse  5s 2s infinite ease;
        animation-delay: 2s;
    }
    @keyframes pulse {
      20%, 100% {
        transform: scale(1);
      }
      0% {
        transform: scale(1);
      }
      10% {
        transform: scale(1.05);
      }
    }

    .mt-5c{
        margin-top: 3.5rem;
    }

    .top-toggle {
        top: auto;
    }
    .image-sup {
    margin-top: -8.5rem;
    cursor: pointer;
    margin-left: 15rem;
    }
    .container-form-postula {
        display: flex;
        width: 100%;
        justify-content: center;
    }

    .size-18{
        font-size: 18px;
        align-items: center;
    }

    .wrap-row {
        flex-wrap: wrap;
        gap: 1rem;
        align-items: center;
    }

    .gap-row {
        gap: 1.5rem;
    }

    .line-1{
        line-height: 1;
    }
    .line-height {
        line-height: 0.5;
    }

    .clients {
        width: 100%;
        flex-wrap: nowrap;
    }

    .img-client {
        width: auto;
    }

    .center-padding-lt {
        padding: 0;
    }

    .image-small{
        width: 100%;
        max-width: 100%;
    }

    .points {
        height: auto;
    }

    @media only screen and (max-width: 440px) {
        .image-sup {
        margin-top: -5rem;
        cursor: pointer;
        margin-left: 9rem;
        width: 8rem;
        }
        .points{
            height: 6rem !important;
        }
        .text-left-contain-first {
            font-weight: 900 !important;
            font-size: 45px !important;
            line-height: 61px !important;
         }
         .top-toggle{
             top: 3rem !important;
         }

        .center-padding-lt {
            padding: 2rem 0 0 5rem !important;
        }
    }
    @media only screen and (max-width: 550px) {

        .image-small{
            width: 100% !important;
            max-width: 60% !important;
        }
        .mt-07 {
            margin-top: 7rem !important;
        }
        .w-70 {
            width: auto !important;
        }
        .img-postula {
            position: absolute !important;
            bottom: 1rem !important;
            width: 40% !important;
            right: 3rem !important;
        }

        .clients {
            margin: auto !important;
            flex-wrap: wrap !important;
        }

        .img-client {
            width: 250px ;
        }
    }


    .size-25 {
        font-size: 25px;
    }

    .mt-07 {
        margin-top: 0;
    }

    .img-postula {
        position: relative;
        bottom: auto;
        width: auto;
        right: auto;
    }
</style>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/carrusell-train.css" type="text/css">
<!--////First////-->
<section id="first-block" >
    <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Collapsed content</h5>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
    <!--------------------- Button Modal --------------------->
        <div class="position-absolute ndx w-100 h-100 " >
            <div class="d-block d-md-none position-fixed" data-toggle="modal" 
                data-target="#myModalRight" 
                data-dismiss="modal" 
                data-backdrop="false">
                <img class=""
                src="<?php echo get_template_directory_uri() .'/assets/images/menu-responsive'?>/openform.svg"
                alt="Instagram"/>
        </div>

            <div
                type="button"
                class="position-fixed ndx form-button" 
                class="btn btn-primary" 
                data-toggle="modal" 
                data-target="#myModalRight" 
                data-dismiss="modal" 
                data-backdrop="false">
                <svg width="72" height="509" viewBox="0 0 72 509" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M71.6475 1.52588e-05V508.657C58.136 508.657 46.469 499.238 43.6095 486.032L6.39286 314.071C-2.13095 274.694 -2.13095 233.952 6.39286 194.574L43.6095 22.6138C46.4581 9.41877 58.136 1.52588e-05 71.6475 1.52588e-05Z" fill="#ED1164"/>
                </svg> 

                <div class="texto-vertical text-light d-flex flex-column align-items-center mb-3">
                    <i class="btn-open-i" >Ahora que estás inclinando la cabeza para leer, escríbenos.</i> <br>
                    <span class="hurme-bold-4  btn-open-modal">ESCRÍBENOS</span>
                </div>
            </div>
                <div class="mt-5c" style="z-index: 1;">
                    <?php get_template_part(
                        'components/modal/modal',
                        'full'
                    ); ?>
                </div>
        </div>    
    <!--------------------- Button Modal ---------------------> 

    <video autoplay muted loop id="myVideo" class="position-relative mt-n1">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/evanzu.mp4" type="video/mp4">
    </video>
</section>
<!--////Second////-->
<section>
    <div class="bg-red">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="my-5">
                        <div class="text-white running-text">Agencia de</div>
                        <h1 class="text-white text-left-contain-first hurme-simple">MARKETING <br> <span class="text-white">Y PUBLICIDAD</span></h1>
                        <!-- <div class="text-white  text-left-contain-first hurme-simple"></div> -->
                        <h2 class="medium-subtitle-first">
                            <span class="text-white line-1">GRANDES IDEAS</span>
                            <span class="text-white ml-2 line-1">PARA GRANDES RESULTADOS</span>
                        </h2>
                        <h2 class="text-white size-18">
                            en marketing digital, branding & diseño, producción audiovisual, BTL & comunicación y desarrollo de software.
                        </h2>
                        <div>
                            <svg width="250" height="10" viewBox="0 0 250 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M244.747 9.28C242.187 9.28 240.107 7.20001 240.107 4.64001C240.107 2.08001 242.187 0 244.747 0C247.307 0 249.387 2.08001 249.387 4.64001C249.387 7.20001 247.307 9.28 244.747 9.28Z" fill="white" />
                                <path d="M231.737 9.28H5.32701C2.76701 9.28 0.687012 7.20001 0.687012 4.64001C0.687012 2.08001 2.76701 0 5.32701 0H231.747C234.307 0 236.387 2.08001 236.387 4.64001C236.377 7.20001 234.297 9.28 231.737 9.28Z" fill="#F798BC" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mt-5 pt-3">
                        <svg id="image-line" width="392" height="190" viewBox="0 0 392 190" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.999964 106.811C2.01329 106.864 3.00928 106.904 3.99771 106.931" stroke="white" stroke-miterlimit="10" />
                            <path d="M10.0683 106.972C82.4219 105.701 75.6593 39.9469 53.667 56.8359C40.5963 66.8701 42.4587 120.706 139.425 105.852C203.262 96.0748 302.172 7.65103 380.278 113.38" stroke="white" stroke-miterlimit="10" stroke-dasharray="6.06 6.06" />
                            <path d="M382.063 115.841C382.641 116.648 383.216 117.464 383.789 118.29" stroke="white" stroke-miterlimit="10" />
                        </svg>
                        <div id="circle-background">
                            <img
                                class="img-fluid"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/Homepage_agencia_evanzu.png"
                                alt="Presentación de la agencia de marketing y publicidad Evanzu"
                                title="Agencia Marketing y publicidad Evanzu"
                            >
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="d-flex justify-content-center bg-red">
        <div id="rectangle" class="text-center">
            <img class="img-fluid mt-5" src="<?php echo get_template_directory_uri() .'/assets/images/'; ?>points360.svg" alt="Imagen de tu dices, nosotros" title="Hojas">
        </div>
    </div>
</section>
<section>
    <div id="box-masonry">
        <div class="text-red text-center big-title  mt-3">
        Portafolio 360&#176
        </div>
         

              <!-------------------- Clients -------------------->
        <section class="bg-smooth-gray p-4 mb-3">  
            
        <div class="text-center mb-4 text-red" style="font-size: 24px;">
                Grandes campañas para grandes clientes <br>
                <span class="text-gray" style="font-size: 20px;">Haz clic en cada marca para ver nuestros resultados.</span>
         </div>

        <!-- partial:index.partial.html -->
            
             <div class="container px-5">
                 <div class="d-flex justify-content-center clients">
                    <div class="mx-2">
                        <a  href="bbva"> 
                            <img
                                src="<?php echo get_template_directory_uri() .'/assets/images/clients/'; ?>BIG-BBVA.png"
                                class="img-fluid mx-auto d-block img-client pulse"
                                alt="Cliente Evanzu BBVA">
                        </a>
                    </div>
                     <div class="mx-2">
                            <a  href="petro-peru"> 
                                <img src="<?php echo get_template_directory_uri() .
                                    '/assets/images/clients/'; ?>BIG-PETROPERU.png"
                                    class="img-fluid mx-auto d-block img-client pulse-alternative my-2 my-sm-0"
                                    alt="Cliente Evanzu PETRO PERU">
                            </a>
                     </div>
                     <div class="mx-2">
                         <a  href="betfair">
                                <img
                                    src="<?php echo get_template_directory_uri() .
                                    '/assets/images/clients/'; ?>BIG-BETFAIR.png"
                                    class="img-fluid mx-auto d-block img-client pulse"
                                    alt="Cliente Evanzu Betfair">
                            </a>
                     </div>
                 </div>

                  <div class="d-flex justify-content-center my-2 flex-wrap flex-md-nowrap">
                    
                     <div class="mx-2">
                            <a  href="artecola">
                                <img src="<?php echo get_template_directory_uri() .
                                    '/assets/images/clients/'; ?>Artecola.png"  class="img-fluid mx-auto d-block pulse-alternative" alt="Cliente Evanzu Artecola">
                            </a>
                     </div>
                     <div class="mx-2">
                          <a href="aesa">
                            <img src="<?php echo get_template_directory_uri() .
                                '/assets/images/clients/'; ?>AESA.png" class="img-fluid mx-auto d-block pulse my-2 my-sm-0" alt="Cliente Evanzu AESA">
                         </a>
                     </div>
                       <div class="mx-2">
                           <a href="bmatic">
                                <img src="<?php echo get_template_directory_uri() .
                                    '/assets/images/clients/'; ?>BMatic.png"  class="img-fluid mx-auto d-block pulse-alternative" alt="Cliente Evanzu Bamtic">
                            </a>
                     </div>
                 </div>
             </div>
<!-- partial -->

        </section>
            <!-------------------- Clients -------------------->
         
        <div> 
             <div class="text-center mb-4" style="font-size: 20px;">
                 <span class="mb-2">Somos la agencia de marketing y publicidad de startups,<br> micro y pequeñas empresas, marcas líderes <br> y organizaciones gubernamentales.</span> <br> <br>
               Lo que creamos para otros clientes:
             </div>
              	<!------------------Portafolio-------------------->
				<?php get_template_part('components/masonry-home'); ?>
				<!------------------Portafolio-------------------->

        </div>

    </div>

    <div class="pt-5 bg-red">
        <div class="text-center big-title text-white">
            ¿Por qué elegir EVANZU?
        </div>
        <div class="container">
            <div class="row mt-5 pb-5">
                <div class="col-md-4 d-flex justify-content-center">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/'; ?>estrategia.svg" alt="Imagen de tu dices, nosotros" title="Hojas">
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/'; ?>idea.svg" alt="Imagen de tu dices, nosotros" title="Hojas">

                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <img class="img-fluid center-padding-lt" src="<?php echo get_template_directory_uri() .'/assets/images/'; ?>tu-dices.svg" alt="Imagen de tu dices, nosotros" title="Hojas">
                </div>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container mt-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="position-absolute mb-5">
                <div class="mt-07">
                    <div class="d-flex flex-md-row justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() .
                            '/assets/images/'; ?>says-left.svg" alt="Imagen de las hojas izquierdas" title="Hojas">
                        <p class="home-banner-text text-black mx-1 font-2 my-0">Tú dices</p>
                        <img class="mx-3 img-fluid" src="<?php echo get_template_directory_uri() .
                            '/assets/images/'; ?>says-middle.svg" alt="Imagen de hojas medio" title="Hojas centro">
                        <p class="home-banner-text text-red mx-1 font-2 my-0">Nosotros</p>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() .
                            '/assets/images/'; ?>says-right.svg" alt="Imagen de las hojas Derecha" title="Hojas derecha">
                    </div>
                    
                    <div class="text-center">
                        <div class="d-flex  align-items-center justify-content-center">
                            <p class="m-0 text-black text-about w-19 d-flex justify-content-end">¿Cómo tener más ventas?</p>
                            <img
                                class="mx-2 img-fluid"
                                src="<?php echo get_template_directory_uri() .
                                    '/assets/images/'; ?>line-mid-text.svg"
                                alt="Imagen de las hojas Derecha"
                                title="Hojas derecha">
                            <p class="m-0 text-red text-about w-17 d-flex justify-content-start">Generamos estrategias.</p>
                        </div>
                        <div class="d-flex  align-items-center justify-content-center">
                            <p class="m-0 text-black text-about w-19 d-flex justify-content-end">¿Cómo tener más seguidores?</p>
                            <img
                                class="mx-2 img-fluid"
                                src="<?php echo get_template_directory_uri() .
                                    '/assets/images/'; ?>line-mid-text.svg"
                                alt="Imagen de las hojas Derecha"
                                title="Hojas derecha">
                            <p class="m-0 text-red text-about w-17 d-flex justify-content-start">Gestionamos tu contenido.</p>
                        </div>
                        <div class="d-flex  align-items-center justify-content-center">
                            <p class="m-0 text-black text-about w-19 d-flex justify-content-end">¿Cómo mejorar la imagen de mi empresa?</p>
                            <img
                                class="mx-2 img-fluid"
                                src="<?php echo get_template_directory_uri() .
                                    '/assets/images/'; ?>line-mid-text.svg"
                                alt="Imagen de las hojas Derecha"
                                title="Hojas derecha">
                            <p class="m-0 text-red text-about w-17 d-flex justify-content-start">Trabajamos tu identidad corporativa.</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <p class="m-0 text-black text-about w-19 d-flex justify-content-end">¿Cómo ser más conocido?</p>
                            <img
                                class="mx-2 img-fluid"
                                src="<?php echo get_template_directory_uri() .
                                    '/assets/images/'; ?>line-mid-text.svg"
                                alt="Imagen de las hojas Derecha"
                                title="Hojas derecha">
                            <p class="m-0 text-red text-about w-17 d-flex justify-content-start">Trabajamos tu posicionamiento SEO.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div>
                <img class="d-none d-md-block" src="<?php echo get_template_directory_uri() .
                    '/assets/images/'; ?>about-home.svg" alt="imagen de Background customer">
            </div>
        </div>

        <div class="text-center">
            <div class="d-flex justify-content-center points">
                <img class="img-fluid mt-5 d-none d-sm-block" src="<?php echo get_template_directory_uri() .'/assets/images/'; ?>points-clientes.svg" alt="Imagen de puntos" title="Puntos">
            </div>
            <div class="big-title text-red mt-4">
                NUESTROS CLIENTES
            </div>
            <div class="mb-5 subtitle-client text-center text-red hurme-bold-4 font-weight-bold">
                El mejor <span class="text-uppercase">match</span>
            </div> 
            
            
        </div>


    </div>

    <div class="d-flex justify-content-center bg-pink">
        <div id="rectangle-inverse" class="text-center">

            <div class="container">
                <div class="top-content pb-5">
                    <!-- First row -->
                    <div class="d-flex justify-content-center my-4 flex-md-row wrap-row">
                        
                        <div class="d-flex gap-row">
                            <div>
                                <a target="_blank" href="https://www.bbva.pe/">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>BBVA.svg"
                                    class="img-fluid mx-auto d-block"
                                    alt="bbva">
                                </a>
                            </div>

                            <div>
                                <a target="_blank" href="https://www.betfair.com/pe">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>betfair.svg"
                                    class="img-fluid mx-auto d-block"
                                    alt="Betfair">
                                </a>
                            </div>

                            <div>
                                <a target="_blank" href="https://www.petroperu.com.pe"> 
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>petroperu.svg" 
                                    class="img-fluid mx-auto d-block"
                                    alt="Petro Peru">
                                </a>
                            </div>
                        </div>

                        <div class="d-flex gap-row">

                            <div>
                                <a target="_blank" href="https://www.cofide.com.pe/">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>cofide.svg" 
                                    class="img-fluid mx-auto d-block"
                                    alt="Cofide">
                                </a>
                            </div>

                            <div>
                                <a target="_blank" href="https://www.bancomercio.com/elbanco">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>banco_comercio.svg"
                                    class="img-fluid mx-auto d-block"
                                    alt="Banco de comercio">
                                </a>
                            </div>

                            <div>
                                <a target="_blank" href="https://indriver.com/es/city">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>Group 394.png"
                                    class="img-fluid mx-auto d-block"
                                    alt="Indriver">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Secon row -->
                    <div class="d-flex justify-content-center my-4 flex-md-row wrap-row"> 
                        
                        <div class="d-flex gap-row">

                            <div class="">
                                <a target="_blank" href="https://www.entel.pe/">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>entel.svg"
                                    class="img-fluid mx-auto d-block"
                                    alt="Imagen de Entel">
                                </a>
                            </div>

                            <div>
                                <a target="_blank" href="https://www.gob.pe/mtc">
                                    <img
                                        src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>ministeriotransportes.svg"
                                        class="img-fluid mx-auto d-block"
                                        alt="Ministerio de transportes y comunicaciones">
                                </a>
                            </div>

                            <div>
                                <a target="_blank" href="https://www.pichincha.pe/">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>banco_pichincha.svg" 
                                    class="img-fluid mx-auto d-block"
                                    alt="Banco pichincha">
                                </a>
                            </div>
                        </div>

                        <div class="d-flex gap-row">

                            <div>
                                <a target="_blank" href="https://www.cajahuancayo.com.pe/">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>cajahuancayo.svg"
                                    class="img-fluid mx-auto d-block"
                                    alt="Caja Huancayo">
                                </a>
                            </div>

                            <div>
                            <a target="_blank" href="https://www.hiper.com.pe/">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>hiper.svg"
                                    class="img-fluid mx-auto d-block"
                                    alt="Hiper">
                            </a>
                            </div>

                            <div>
                            <a target="_blank" href="https://www.bmatic.com.pe/">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>bmatic.png"
                                    class="img-fluid mx-auto d-block"
                                    alt="Bmatic">
                            </a>
                            </div>
                        </div>
                    </div>
                        <!-- Third row -->
                    <div class="d-flex justify-content-center my-4 flex-md-row wrap-row"> 
                            
                        <div class="d-flex gap-row">

                            <div>
                                <a target="_blank" href="https://mibim.pe/">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>Bim.svg"
                                    class="img-fluid mx-auto d-block"
                                    alt="Bim">
                                </a>
                            </div>

                            <div>
                                <a target="_blank" href="https://www.defensoria.gob.pe/">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>defensoria.svg"
                                    class="img-fluid mx-auto d-block"
                                    alt="Imagen de defensoría del pueblo.">
                                </a>
                            </div>

                            <div>
                                <a target="_blank" href="https://www.paraiso-peru.com/"> 
                                <img src="<?php echo get_template_directory_uri() .
                                    '/assets/images/home/'; ?>paraiso.svg" class="img-fluid mx-auto d-block" alt="Paraiso">
                                </a>
                            </div>
                        </div>

                        <div class="d-flex gap-row">

                            <div>
                                <a target="_blank" href="https://www.cruzdelsur.com.pe/">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>cruzdelsur.svg"
                                    class="img-fluid mx-auto d-block"
                                    alt="Cruz del sur">
                                </a>
                            </div>

                            <div>
                                <a target="_blank" href="https://www.sath.gob.pe/">
                                <img
                                    src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>administracion.svg"
                                    class="img-fluid mx-auto d-block"
                                    alt="Imagen de administración tributaria">
                                </a>
                            </div>

                            <div>
                                <a target="_blank" href="https://www.munlima.gob.pe/">
                                <img src="<?php echo get_template_directory_uri() .
                                    '/assets/images/home/'; ?>muni_lima.svg" class="img-fluid mx-auto d-block" alt="Municipalidad de Lima">
                                </a>
                            </div>
                        </div>
                            
                    </div>

                        <!-- Fourth row -->

                        <div class="d-flex justify-content-center my-4 flex-md-row wrap-row"> 
                            
                            <div class="d-flex gap-row">

                                <div>
                                    <a target="_blank" href="https://axessnet.com/conectividad-satelital-internet-satelital-backhaul-celular-telefonia-satelital/">
                                    <img src="<?php echo get_template_directory_uri() .
                                        '/assets/images/home/'; ?>axess.svg" class="img-fluid mx-auto d-block" alt="Imagen de axess network">
                                    </a>
                                </div>

                                <div>
                                    <a target="_blank" href="https://www.mivivienda.com.pe/PortalWEB/">
                                    <img src="<?php echo get_template_directory_uri() .
                                        '/assets/images/home/'; ?>mivivienda.svg" class="img-fluid mx-auto d-block" alt="Mi vivienda">
                                    </a>
                                </div>

                                <div>
                                    <a target="_blank" href="https://www.magnesol.pe/"> 
                                    <img
                                        src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>magne.svg"
                                        class="img-fluid mx-auto d-block"
                                        alt="Imagen de Magnesol">
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex gap-row">

                                <div>
                                    <a target="_blank" href="https://www.bat.com/">
                                    <img
                                        src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>british.svg"
                                        class="img-fluid mx-auto d-block"
                                        alt="Imagen de British american tobaco.">
                                    </a>
                                </div>

                                <div>
                                    <a target="_blank" href="https://www.gob.pe/servir">
                                    <img
                                        src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>servir.svg"
                                        class="img-fluid mx-auto d-block"
                                        alt="Imagen de servir.">
                                    </a>
                                </div>

                                <div>
                                    <a target="_blank" href="https://www.adecco.com.pe/">
                                    <img src="<?php echo get_template_directory_uri() .
                                        '/assets/images/home/'; ?>adeco.svg" class="img-fluid mx-auto d-block" alt="Imagen de Adecco">
                                    </a>
                                </div>

                            </div>
                        </div>
                        
                        <!-- Fifth row -->

                        <div class="d-flex justify-content-center my-4 flex-md-row wrap-row"> 
                            
                            <div class="d-flex gap-row">

                                <div>
                                    <a target="_blank" href="https://www.facebook.com/arribaeltelonperu/">
                                    <img src="<?php echo get_template_directory_uri() .
                                        '/assets/images/home/'; ?>teleton.svg" class="img-fluid mx-auto d-block" alt="Imagen de arribaeltelonperu.">
                                    </a>
                                </div>

                                <div>
                                    <a target="_blank" href="https://www.casinoatlanticcity.com/">
                                    <img
                                        src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>aceo.svg"
                                        class="img-fluid mx-auto d-block"
                                        alt="Logo de la empresa.">
                                    </a>
                                </div>

                                <div>
                                    <a target="_blank" href="https://www.holascharff.com/">
                                    <img
                                        src="<?php echo get_template_directory_uri() .'/assets/images/home/'; ?>scharff.svg"
                                        class="img-fluid mx-auto d-block"
                                        alt="Imagen de Market nexus.">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

        </div>
    </div>
    <div class="bg-pink  text-white ">
        <div class="text-center">
         <img class="my-5 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/icono-upper-stop.svg">
        </div>
        <div class="text-center big-title">
            <h2>
                Crece con nosotros
            </h2>
        </div>
        <div class="row mx-0 mx-lg-5 px-5">
            <div class="col-sm-6 p-0 p-lg-5 mt-5">
                <div class="d-flex justify-content-center align-items-center"> 
                        <div id="description-team" class="text-white w-70">
                         Somos nativos digitales, sabemos cómo trabajar en un entorno digital. Nos divertimos creando estrategias de acuerdo a tus metas. </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="my-5 d-block d-md-none">
                    <div id="description-team" class="text-white w-70">
                        Únete a nuestro <strong class="hurme-bold-4 ">Equipo</strong> <br>
                    </div>
                    <button
                    style="max-width: 20rem; font-size: 20px;"
                    type="button"
                    class="btn bg-yellow rounded-pill text-white my-1 p-2 btn-sm w-90 font-button"
                    data-toggle="modal" 
                    data-target="#myModalBottom" 
                    data-dismiss="modal" 
                    data-backdrop="false">
                        Postula
                    </button>
                </div>
                <div class="my-5 d-none d-md-block">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-pink.svg"
    					class="img-fluid px-1 py-3"
    				/>
                    <div
                        type="button"
                        class="position-absolute container-form-postula " 
                        class="btn btn-primary" 
                        data-toggle="modal" 
                        data-target="#myModalBottom" 
                        data-dismiss="modal" 
                        data-backdrop="false"
                    >
                        <img
                        class="image-sup img-postula"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/button-open-form.svg" 
                        alt="Imagen de postula" 
                        >
                    </div>
                </div>
            </div>
           
        </div>
         <div  class="py-4 my-4 bg-darkpink">  </div>
        <div class="mt-5c" style="z-index: 1;">
            <?php get_template_part('components/modal/form-postula', 'full'); ?>
        </div>
       
    </div>
   
</section>
<section>       
<div class="mt-5 text-center">
 
  <h2  class="big-title text-red">¿Cómo lo hacemos?</h2>
      <!-- <p>Estamos comprometidos a ofrecer resultados 
    <br>excepcionales y medibles</p>  -->
</div>


    	<div class="d-flex justify-content-center flex-wrap mb-5">
            <div class="m-sm-1 m-md-2 position-relative">
    			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/note1.png" alt="Genera expectativa" />
    			<div class="note-btl top-note-sm hurme-regular-4 text-white">
    				Cuéntanos tus necesidades y lo que <span class="hurme-bold-4 text-red">quieres lograr.</span>
    			</div>
    		</div>
    		<div class="m-sm-1 m-md-2 position-relative">
    			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/note2.png" alt="Informa a tus clientes" />
    			<div class="note-btl top-note-sm hurme-regular-4 text-gray">
    				<span class="hurme-bold-4">Analizaremos tu caso</span> y la información del mercado.
    			</div>							
    		</div>
    		<div class="m-sm-1 m-md-2 position-relative">
    			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/note3.png" alt="Conecta y logra" />
    			<div class="note-btl top-note-md hurme-regular-4 text-white">
    				Te presentaremos una propuesta con las <span class="hurme-bold-4 text-red">soluciones más creativas</span> para conseguir tu objetivo.
    			</div>							
            </div>
            
            	<div class="m-sm-1 m-md-2 position-relative">
    			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/note4.png" alt="Informa a tus clientes" />
    			<div class="note-btl top-note-sm hurme-regular-4 text-gray">
    				<span class="hurme-bold-4">Ejecutaremos el plan</span> con responsabilidad y profesionalismo.
    			</div>							
    		</div>
			</div>

<div class="h-400 bg-gray d-block d-md-flex">
<div class="col-sm-6 p-5 text-center d-flex justify-content-center align-items-center">    
    <div class="text-center position-absolute top-toggle">
        <div class="d-flex justify-content-center">
            <div class="d-flex">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/left-title.svg" alt="Imagen de adorno izquierda">
                <p class="home-banner-text text-white mx-1 font-3">Estamos</p>
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-title.svg" alt="Imagen de adorno derecha">
            </div>
        </div>
        <p class="text-yellow home-text-yellow hurme-bold-4 m-0">COMPROMETIDOS</p>
        <div class="d-flex justify-content-center">
            <div class="d-flex mb-2 font-23">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/left-ofrecer.svg" alt="Imagen de adorno izquierda">
                <p class="atletico-medium text-white my-0 mx-3">A OFRECER</p>
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-ofrecer.svg" alt="Imagen de adorno derecha">
            </div>
        </div>
        <div class=" d-flex justify-content-center align-items-center">
            <p class="text-white position-absolute hurme-bold-4 m-0 font-25">RESULTADOS EXCEPCIONALES</p>
            <img class="img-fluid image-small" src="<?php echo get_template_directory_uri(); ?>/assets/images/base-banner.svg" alt="Imagen de la base del banner">
        </div>
        <div class="d-flex justify-content-center">
            <div class="d-flex mt-4">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/olas.svg" alt="Imagen de olas izquierda">
                <p class="home-banner-text text-white mx-3 my-0">y medibles</p>
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/olas.svg" alt="Imagen de olas derecha">
            </div>
        </div>
        <div class="d-flex flex-column align-items-center">
            <img class="img-fluid" class="my-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/abobe-line.svg" alt="Imagen de olas derecha">
            <i class="text-white font-20" >Es momento de empezar</i>
            <button 
                style="max-width: 20rem;" 
                id="btn-main" 
                class="btn bg-red rounded-pill text-white my-1 p-2 btn-sm w-50 hurme-bold-4 font-23 mt-2"
                type="button"
                data-toggle="modal" 
                data-target="#myModalRight" 
                data-dismiss="modal" 
                data-backdrop="false">¡Escríbenos!</button>
        </div>
    </div>

    <div>
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-home.svg" alt="Imagen de la base del banner">
    </div> 
</div>

<div id="lef-ultimate-box" class="col-sm-6 d-none d-md-block">
    
       </div>
        
    </div>
 
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>  
<?php get_footer(); ?>
