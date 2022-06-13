<!-- Footer -->
<?php $path_header = get_template_directory_uri() . '/assets/images/'; ?>
<footer class="bg-red">
  <div class="py-5">
    <div class="mx-5">
      <div class="row">
        <!----------------- Column ----------------->
        <div class="col-sm-3 col-12">
         
               <a  href="<?php echo home_url(); ?>">
                    <img
                        src="<?php echo $path_header; ?>footer-logo.svg"
                        alt="logo"
                      />
                    </a>
        
                  

          <div class="mt-n4 ml-5 pl-5 d-flex justify-content-center flex-column">
            <?php get_template_part('components/footer-list-link', 'full', [
                  'title' => 'Desarrollo & <br> Software',
                  'list' => [
                    'Tiendas virtuales',
                    'Páginas web',
                    'App móviles',
                    'Software a medida ',
                    'Diseño UX & UI'
                    ],
                  'href' => [
                    '/evanzu_work/desarrollo-software/',
                    '/evanzu_work/desarrollo-software/',
                    '/evanzu_work/desarrollo-software/',
                    '/evanzu_work/desarrollo-software/',
                    '/evanzu_work/desarrollo-software/'
                  ]
              ]); ?>
          </div>

        </div>
        <!----------------- Column ----------------->
        <!----------------- Column ----------------->
        <div class="col-sm-3 col-12">
        <?php get_template_part('components/footer-list-link', 'full', [
            'title' => 'Marketing Digital',
            'list' => [
              'Publicidad digital',
              'Gestión de redes sociales',
              'Posicionamiento SEO',
              'Growth hacking ',
              'Marketing de contenidos'
              ],
            'href' => [
              '/evanzu_work/marketing-digital',
              '/evanzu_work/marketing-digital',
              '/evanzu_work/marketing-digital',
              '/evanzu_work/marketing-digital',
              '/evanzu_work/marketing-digital'
            ]
        ]); ?>
        <div class="my-5"></div>
        <?php get_template_part('components/footer-list-link', 'full', [
            'title' => 'Producción <br> Audiovisual',
            'list' => [
              'Spots & Videos',
              'Animación 2D',
              'Fotografía Profesional'
              ],
            'href' => [
              '/evanzu_work/produccion-audiovisual/',
              '/evanzu_work/produccion-audiovisual/',
              '/evanzu_work/produccion-audiovisual/'
            ]
        ]); ?>


        </div>
        <!----------------- Column ----------------->
        <!----------------- Column ----------------->
        <div class="col-sm-3 col-12">

        <?php get_template_part('components/footer-list-link', 'full', [
            'title' => 'Branding & Diseño',
            'list' => [
              'Logo & branding',
              'Diseño publicitario',
              'Merchandising & impresos',
              'Ilustración digital',
              'Diseño UX & UI'
              ],
            'href' => [
              '/evanzu_work/branding-diseno/',
              '/evanzu_work/branding-diseno/',
              '/evanzu_work/branding-diseno/',
              '/evanzu_work/branding-diseno/',
              '/evanzu_work/branding-diseno/'
            ]
        ]); ?>
         <div class="my-5"></div>
        <?php get_template_part('components/footer-list-link', 'full', [
            'title' => 'BTL & comunicación',
            'list' => [
              'BTL y Activaciones',
              'Eventos',
              'Relaciones Públicas',
              'Fuerza de ventas',
              'Anfitrionaje '
              ],
            'href' => [
              '/evanzu_work/evanzu_work/btl-comunicacion/',
              '/evanzu_work/evanzu_work/btl-comunicacion/',
              '/evanzu_work/evanzu_work/btl-comunicacion/',
              '/evanzu_work/evanzu_work/btl-comunicacion/',
              '/evanzu_work/evanzu_work/btl-comunicacion/'
            ]
        ]); ?>
        </div>
        <!----------------- Column ----------------->
        
        <!----------------- Column ----------------->
        <div id="footer-box-directions" class="col-sm-3 col-12">
        <div  class="text-light hurme-semi-bold-4 mt-3" style="font-size: 24.17px;"> Nuestras sedes</div>
        <!-- <?php get_template_part('components/box-footer-text', 'full', [
            'title' => 'Nuestras sedes',
            'description' => '',
        ]); ?> -->

        <?php get_template_part('components/footer-list-link', 'full', [
            'title' => 'Lima <a class="font-weight-light text-light undeline" href="#">MAPA</a>',
            'list' => [
              '<svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.67911 20.5497C8.52529 20.5497 8.36047 20.4838 8.23962 20.363L2.83423 14.9576C-0.384847 11.7385 -0.384847 6.4869 2.83423 3.26782C6.0533 0.048747 11.3049 0.048747 14.524 3.26782C17.7431 6.4869 17.7431 11.7385 14.524 14.9576L9.1186 20.363C8.99774 20.4948 8.83292 20.5497 8.67911 20.5497ZM8.67911 2.10324C6.8773 2.10324 5.08647 2.78441 3.71314 4.15773C0.977478 6.8934 0.977478 11.3539 3.71314 14.0896L8.67911 19.0556L13.6451 14.0896C16.3807 11.3539 16.3807 6.8934 13.6451 4.15773C12.2717 2.78441 10.4699 2.10324 8.67911 2.10324Z" fill="white"/>
              <path d="M8.679 11.9469C6.8772 11.9469 5.41602 10.4857 5.41602 8.68392C5.41602 6.88212 6.8772 5.4209 8.679 5.4209C10.4808 5.4209 11.9421 6.88212 11.9421 8.68392C11.9421 10.4857 10.4698 11.9469 8.679 11.9469ZM8.679 6.66239C7.56936 6.66239 6.65744 7.56329 6.65744 8.68392C6.65744 9.80455 7.55837 10.7055 8.679 10.7055C9.78865 10.7055 10.7006 9.80455 10.7006 8.68392C10.7006 7.56329 9.78865 6.66239 8.679 6.66239Z" fill="white"/>
              </svg> Ca. Enrique Barrón 310 Of. 1505 - Barranco
              ',
              '<svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.6233 19.8533H2.73488C1.25169 19.8533 0.0432129 18.6447 0.0432129 17.1615V3.46124C0.0432129 1.97805 1.25169 0.769531 2.73488 0.769531H10.6233C12.1065 0.769531 13.315 1.97805 13.315 3.46124V17.1615C13.315 18.6447 12.1065 19.8533 10.6233 19.8533ZM2.73488 2.01101C1.93285 2.01101 1.2847 2.65922 1.2847 3.46124V17.1615C1.2847 17.9636 1.93285 18.6118 2.73488 18.6118H10.6233C11.4253 18.6118 12.0735 17.9636 12.0735 17.1615V3.46124C12.0735 2.65922 11.4253 2.01101 10.6233 2.01101H2.73488Z" fill="white"/>
              <path d="M10.4035 5.9556H2.52615C2.18556 5.9556 1.8999 5.68092 1.8999 5.32935C1.8999 4.97778 2.17458 4.70312 2.52615 4.70312H10.4035C10.7441 4.70312 11.0298 4.97778 11.0298 5.32935C11.0298 5.68092 10.7551 5.9556 10.4035 5.9556Z" fill="white"/>
              <path d="M10.4035 15.0845H2.52615C2.18556 15.0845 1.8999 14.8098 1.8999 14.4583C1.8999 14.1177 2.17458 13.832 2.52615 13.832H10.4035C10.7441 13.832 11.0298 14.1067 11.0298 14.4583C11.0298 14.7988 10.7551 15.0845 10.4035 15.0845Z" fill="white"/>
              <path d="M8.54679 3.87747H4.39382C4.05324 3.87747 3.76758 3.6028 3.76758 3.25123C3.76758 2.89966 4.04225 2.625 4.39382 2.625H8.54679C8.88737 2.625 9.17303 2.89966 9.17303 3.25123C9.17303 3.6028 8.88737 3.87747 8.54679 3.87747Z" fill="white"/>
              <path d="M6.67923 17.9854C7.24959 17.9854 7.71197 17.523 7.71197 16.9527C7.71197 16.3823 7.24959 15.9199 6.67923 15.9199C6.10886 15.9199 5.64648 16.3823 5.64648 16.9527C5.64648 17.523 6.10886 17.9854 6.67923 17.9854Z" fill="white"/>
              </svg> +51 991188119
              ',
              '<svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.5566 14.9017H2.79033C1.31813 14.9017 0.131592 13.7042 0.131592 12.243V3.45368C0.131592 1.98147 1.32911 0.794922 2.79033 0.794922H16.5566C18.0288 0.794922 19.2153 1.99246 19.2153 3.45368V12.243C19.2153 13.7042 18.0288 14.9017 16.5566 14.9017ZM2.79033 2.03641C2.01028 2.03641 1.37308 2.67363 1.37308 3.45368V12.243C1.37308 13.023 2.01028 13.6602 2.79033 13.6602H16.5566C17.3366 13.6602 17.9738 13.023 17.9738 12.243V3.45368C17.9738 2.67363 17.3366 2.03641 16.5566 2.03641H2.79033Z" fill="white"/>
              <path d="M9.87676 10.7502C9.74492 10.7502 9.61312 10.7063 9.50325 10.6184L2.4498 5.22396C2.17514 5.01522 2.12022 4.61971 2.32897 4.35603C2.53771 4.08137 2.93321 4.02643 3.19688 4.23518L9.85476 9.33296L16.1171 4.24616C16.3808 4.02643 16.7763 4.07037 16.9961 4.33405C17.2158 4.59773 17.1719 4.99325 16.9082 5.21298L10.2723 10.6074C10.1624 10.7063 10.0196 10.7502 9.87676 10.7502Z" fill="white"/>
              <path d="M3.44963 12.8254C3.29581 12.8254 3.13099 12.7595 3.01014 12.6386C2.76843 12.3969 2.76843 12.0014 3.01014 11.7597L5.08662 9.68323C5.32833 9.44153 5.72383 9.44153 5.96553 9.68323C6.20724 9.92494 6.20724 10.3205 5.96553 10.5622L3.88905 12.6386C3.7682 12.7705 3.61443 12.8254 3.44963 12.8254Z" fill="white"/>
              <path d="M15.8974 12.8254C15.7436 12.8254 15.5788 12.7595 15.458 12.6386L13.3815 10.5622C13.1398 10.3205 13.1398 9.92494 13.3815 9.68323C13.6232 9.44153 14.0187 9.44153 14.2604 9.68323L16.3369 11.7597C16.5786 12.0014 16.5786 12.3969 16.3369 12.6386C16.216 12.7705 16.0622 12.8254 15.8974 12.8254Z" fill="white"/>
              </svg> info@evanzu.com
              '
              ],
              'href' => ['', '', '']
        ]); ?>

        <?php get_template_part('components/footer-list-link', 'full', [
            'title' => 'Huancayo <a class="font-weight-light text-light undeline" href="#">MAPA</a>',
            'list' => [
              '<svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.67911 20.5497C8.52529 20.5497 8.36047 20.4838 8.23962 20.363L2.83423 14.9576C-0.384847 11.7385 -0.384847 6.4869 2.83423 3.26782C6.0533 0.048747 11.3049 0.048747 14.524 3.26782C17.7431 6.4869 17.7431 11.7385 14.524 14.9576L9.1186 20.363C8.99774 20.4948 8.83292 20.5497 8.67911 20.5497ZM8.67911 2.10324C6.8773 2.10324 5.08647 2.78441 3.71314 4.15773C0.977478 6.8934 0.977478 11.3539 3.71314 14.0896L8.67911 19.0556L13.6451 14.0896C16.3807 11.3539 16.3807 6.8934 13.6451 4.15773C12.2717 2.78441 10.4699 2.10324 8.67911 2.10324Z" fill="white"/>
              <path d="M8.679 11.9469C6.8772 11.9469 5.41602 10.4857 5.41602 8.68392C5.41602 6.88212 6.8772 5.4209 8.679 5.4209C10.4808 5.4209 11.9421 6.88212 11.9421 8.68392C11.9421 10.4857 10.4698 11.9469 8.679 11.9469ZM8.679 6.66239C7.56936 6.66239 6.65744 7.56329 6.65744 8.68392C6.65744 9.80455 7.55837 10.7055 8.679 10.7055C9.78865 10.7055 10.7006 9.80455 10.7006 8.68392C10.7006 7.56329 9.78865 6.66239 8.679 6.66239Z" fill="white"/>
              </svg> Jr. Ancash 793 - Huancayo
              ',
              '<svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.6233 19.8533H2.73488C1.25169 19.8533 0.0432129 18.6447 0.0432129 17.1615V3.46124C0.0432129 1.97805 1.25169 0.769531 2.73488 0.769531H10.6233C12.1065 0.769531 13.315 1.97805 13.315 3.46124V17.1615C13.315 18.6447 12.1065 19.8533 10.6233 19.8533ZM2.73488 2.01101C1.93285 2.01101 1.2847 2.65922 1.2847 3.46124V17.1615C1.2847 17.9636 1.93285 18.6118 2.73488 18.6118H10.6233C11.4253 18.6118 12.0735 17.9636 12.0735 17.1615V3.46124C12.0735 2.65922 11.4253 2.01101 10.6233 2.01101H2.73488Z" fill="white"/>
              <path d="M10.4035 5.9556H2.52615C2.18556 5.9556 1.8999 5.68092 1.8999 5.32935C1.8999 4.97778 2.17458 4.70312 2.52615 4.70312H10.4035C10.7441 4.70312 11.0298 4.97778 11.0298 5.32935C11.0298 5.68092 10.7551 5.9556 10.4035 5.9556Z" fill="white"/>
              <path d="M10.4035 15.0845H2.52615C2.18556 15.0845 1.8999 14.8098 1.8999 14.4583C1.8999 14.1177 2.17458 13.832 2.52615 13.832H10.4035C10.7441 13.832 11.0298 14.1067 11.0298 14.4583C11.0298 14.7988 10.7551 15.0845 10.4035 15.0845Z" fill="white"/>
              <path d="M8.54679 3.87747H4.39382C4.05324 3.87747 3.76758 3.6028 3.76758 3.25123C3.76758 2.89966 4.04225 2.625 4.39382 2.625H8.54679C8.88737 2.625 9.17303 2.89966 9.17303 3.25123C9.17303 3.6028 8.88737 3.87747 8.54679 3.87747Z" fill="white"/>
              <path d="M6.67923 17.9854C7.24959 17.9854 7.71197 17.523 7.71197 16.9527C7.71197 16.3823 7.24959 15.9199 6.67923 15.9199C6.10886 15.9199 5.64648 16.3823 5.64648 16.9527C5.64648 17.523 6.10886 17.9854 6.67923 17.9854Z" fill="white"/>
              </svg> +51 64-588860
              ',
              '<svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.5566 14.9017H2.79033C1.31813 14.9017 0.131592 13.7042 0.131592 12.243V3.45368C0.131592 1.98147 1.32911 0.794922 2.79033 0.794922H16.5566C18.0288 0.794922 19.2153 1.99246 19.2153 3.45368V12.243C19.2153 13.7042 18.0288 14.9017 16.5566 14.9017ZM2.79033 2.03641C2.01028 2.03641 1.37308 2.67363 1.37308 3.45368V12.243C1.37308 13.023 2.01028 13.6602 2.79033 13.6602H16.5566C17.3366 13.6602 17.9738 13.023 17.9738 12.243V3.45368C17.9738 2.67363 17.3366 2.03641 16.5566 2.03641H2.79033Z" fill="white"/>
              <path d="M9.87676 10.7502C9.74492 10.7502 9.61312 10.7063 9.50325 10.6184L2.4498 5.22396C2.17514 5.01522 2.12022 4.61971 2.32897 4.35603C2.53771 4.08137 2.93321 4.02643 3.19688 4.23518L9.85476 9.33296L16.1171 4.24616C16.3808 4.02643 16.7763 4.07037 16.9961 4.33405C17.2158 4.59773 17.1719 4.99325 16.9082 5.21298L10.2723 10.6074C10.1624 10.7063 10.0196 10.7502 9.87676 10.7502Z" fill="white"/>
              <path d="M3.44963 12.8254C3.29581 12.8254 3.13099 12.7595 3.01014 12.6386C2.76843 12.3969 2.76843 12.0014 3.01014 11.7597L5.08662 9.68323C5.32833 9.44153 5.72383 9.44153 5.96553 9.68323C6.20724 9.92494 6.20724 10.3205 5.96553 10.5622L3.88905 12.6386C3.7682 12.7705 3.61443 12.8254 3.44963 12.8254Z" fill="white"/>
              <path d="M15.8974 12.8254C15.7436 12.8254 15.5788 12.7595 15.458 12.6386L13.3815 10.5622C13.1398 10.3205 13.1398 9.92494 13.3815 9.68323C13.6232 9.44153 14.0187 9.44153 14.2604 9.68323L16.3369 11.7597C16.5786 12.0014 16.5786 12.3969 16.3369 12.6386C16.216 12.7705 16.0622 12.8254 15.8974 12.8254Z" fill="white"/>
              </svg> contacto@evanzu.com
              '
              ],
            'href' => ['', '', '']
        ]); ?>

        <div class="my-3">
          <h2 id="footer-social-text" class="text-light hurme-semi-bold-4">Redes sociales</h2>
          <div class="d-flex justify-content-between w-50">
           <a>  <img  class="mx-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/yt.svg"> </a> 
           
            <img  class="mx-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.svg">
            <img  class="mx-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/in.svg">
            <img  class="mx-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/tweet.svg">
            <img  class="mx-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/tiktok.png">
            
          </div>
        </div>
        </div>
        <!----------------- Column ----------------->
      </div>
    </div>
  </div>
  <div class="bg-granate text-center py-3 text-white">
    <div class="footer-text">Evanzu - Agencia de Marketing y Publicidad - Lima/Perú</div>
    <div> Todos los derechos reservados - ©   Copyright &copy; <?php bloginfo('name');
                          echo ' ' . date('Y'); ?> </div>
  </div>
  <!-- /.container -->
</footer>


<!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://www.youtube.com/player_api"></script>


  <script src="<?php echo get_stylesheet_directory_uri();?>'/assets/js/navIcons-init.js'"></script>
   <script src="<?php echo get_stylesheet_directory_uri();?>'/assets/js/script.js'"></script>

</body>

</html>