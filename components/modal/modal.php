<style>
  .modal.modal-right .modal-dialog {
    max-width: 380px;
    min-height: calc(100vh - 0)
  }

  .modal.modal-right.show .modal-dialog {
    transform: translate(0, 0)
  }

  /*.modal.modal-right .modal-content{height:calc(100vh - 0);overflow-y:auto}*/
  .modal.modal-right .modal-dialog {
    transform: translate(100%, 0);
    margin: 0 0 0 auto
  }

  .mt-5c {
    margin-top: 5rem;
  }

  .form-control::placeholder {
    color: white;
    opacity: 0.6;
  }

  .mt-3_5 {
    margin-top: 2rem;
  }

  .bg-white-transparent {
    background: #ffffff;
  }

  .h-30 {
    height: 22rem;
  }

  @media only screen and (min-width: 992px) {
    .bg-white-transparent {
      background: transparent !important;
    }

    .h-30 {
      height: 30rem;
    }

  }

  @media only screen and (min-height: 750px) {
    .min-height {
    margin-top: -16.5rem !important;
    max-width: none !important;
    }

  }

  .min-height {
      margin-top: -0.5rem;
    }
  
</style>



<div id="myModalRight" class="modal fade modal-right mt-5c pr-0" tabindex="-1">
  <div class="modal-dialog mw-100">

    <div class="modal-content">
      <div class="modal-body" style="width: 100%; background: #ED1164;">
        <div class=" w-100 h-100">
          <div class="d-block d-lg-flex w-100">

            <div class="col-12 col-lg-6">
              <h2 class="text-light " style="font-weight: 900; font-size: 65px;">CONTÁCTANOS</h2>
              <form>
                <input type="text"
                  class="form-control rounded-0 mt-3_5 text-light input-form bg-transparent border-top-0 border-left-0 border-right-0"
                  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                <div class="d-flex">
                  <input type="email"
                    class="form-control rounded-0 mt-3_5 text-light w-50 input-form bg-transparent border-top-0 border-left-0 border-right-0"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
                  <input type="numb"
                    class="form-control rounded-0 mt-3_5 text-light w-50 ml-5 input-form bg-transparent border-top-0 border-left-0 border-right-0"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Celular">
                </div>
                <div class="d-flex">
                  <input type="text"
                    class="form-control rounded-0 mt-3_5 text-light w-50 input-form bg-transparent border-top-0 border-left-0 border-right-0"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Empresa">
                  <input type="text"
                    class="form-control rounded-0 mt-3_5 text-light w-50 ml-5 input-form bg-transparent border-top-0 border-left-0 border-right-0"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dirección">
                </div>
                <input type="text"
                  class="form-control rounded-0 mt-3_5 text-light input-form bg-transparent border-top-0 border-left-0 border-right-0"
                  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dejenos tu mensaje">
                <button class="bg-white py-2 px-5 border-0 my-4  font-weight-bold"
                  style="color: #ED1164; border-radius: 2.2rem;">Enviar mensaje</button>
              </form>

              <div class="h-30">
                <h4 class="text-yellow font-weight-bold">Nuestras Sedes</h4>
                <div class="d-flex pb-1 mb-lg-5">

                  <div class="pb-5 mr-5" style="width: 15.6rem">
                    <?php get_template_part('components/footer-list-link', 'full', [
                        'title' => 'Sede Lima',
                        'list' => [
                          '<svg width="17" height="21" viewBox="0 0 17 21" fill="yellow" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.67911 20.5497C8.52529 20.5497 8.36047 20.4838 8.23962 20.363L2.83423 14.9576C-0.384847 11.7385 -0.384847 6.4869 2.83423 3.26782C6.0533 0.048747 11.3049 0.048747 14.524 3.26782C17.7431 6.4869 17.7431 11.7385 14.524 14.9576L9.1186 20.363C8.99774 20.4948 8.83292 20.5497 8.67911 20.5497ZM8.67911 2.10324C6.8773 2.10324 5.08647 2.78441 3.71314 4.15773C0.977478 6.8934 0.977478 11.3539 3.71314 14.0896L8.67911 19.0556L13.6451 14.0896C16.3807 11.3539 16.3807 6.8934 13.6451 4.15773C12.2717 2.78441 10.4699 2.10324 8.67911 2.10324Z" fill="yellow"/>
                          <path d="M8.679 11.9469C6.8772 11.9469 5.41602 10.4857 5.41602 8.68392C5.41602 6.88212 6.8772 5.4209 8.679 5.4209C10.4808 5.4209 11.9421 6.88212 11.9421 8.68392C11.9421 10.4857 10.4698 11.9469 8.679 11.9469ZM8.679 6.66239C7.56936 6.66239 6.65744 7.56329 6.65744 8.68392C6.65744 9.80455 7.55837 10.7055 8.679 10.7055C9.78865 10.7055 10.7006 9.80455 10.7006 8.68392C10.7006 7.56329 9.78865 6.66239 8.679 6.66239Z" fill="yellow"/>
                          </svg> Ca. Enrique Barrón 310 Of. 1505 - Barranco
                          ',
                          '<svg width="14" height="20" viewBox="0 0 14 20" fill="yellow" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.6233 19.8533H2.73488C1.25169 19.8533 0.0432129 18.6447 0.0432129 17.1615V3.46124C0.0432129 1.97805 1.25169 0.769531 2.73488 0.769531H10.6233C12.1065 0.769531 13.315 1.97805 13.315 3.46124V17.1615C13.315 18.6447 12.1065 19.8533 10.6233 19.8533ZM2.73488 2.01101C1.93285 2.01101 1.2847 2.65922 1.2847 3.46124V17.1615C1.2847 17.9636 1.93285 18.6118 2.73488 18.6118H10.6233C11.4253 18.6118 12.0735 17.9636 12.0735 17.1615V3.46124C12.0735 2.65922 11.4253 2.01101 10.6233 2.01101H2.73488Z" fill="yellow"/>
                          <path d="M10.4035 5.9556H2.52615C2.18556 5.9556 1.8999 5.68092 1.8999 5.32935C1.8999 4.97778 2.17458 4.70312 2.52615 4.70312H10.4035C10.7441 4.70312 11.0298 4.97778 11.0298 5.32935C11.0298 5.68092 10.7551 5.9556 10.4035 5.9556Z" fill="yellow"/>
                          <path d="M10.4035 15.0845H2.52615C2.18556 15.0845 1.8999 14.8098 1.8999 14.4583C1.8999 14.1177 2.17458 13.832 2.52615 13.832H10.4035C10.7441 13.832 11.0298 14.1067 11.0298 14.4583C11.0298 14.7988 10.7551 15.0845 10.4035 15.0845Z" fill="yellow"/>
                          <path d="M8.54679 3.87747H4.39382C4.05324 3.87747 3.76758 3.6028 3.76758 3.25123C3.76758 2.89966 4.04225 2.625 4.39382 2.625H8.54679C8.88737 2.625 9.17303 2.89966 9.17303 3.25123C9.17303 3.6028 8.88737 3.87747 8.54679 3.87747Z" fill="yellow"/>
                          <path d="M6.67923 17.9854C7.24959 17.9854 7.71197 17.523 7.71197 16.9527C7.71197 16.3823 7.24959 15.9199 6.67923 15.9199C6.10886 15.9199 5.64648 16.3823 5.64648 16.9527C5.64648 17.523 6.10886 17.9854 6.67923 17.9854Z" fill="yellow"/>
                          </svg> +51 991188119
                          ',
                          '<svg width="20" height="15" viewBox="0 0 20 15" fill="yellow" xmlns="http://www.w3.org/2000/svg">
                          <path d="M16.5566 14.9017H2.79033C1.31813 14.9017 0.131592 13.7042 0.131592 12.243V3.45368C0.131592 1.98147 1.32911 0.794922 2.79033 0.794922H16.5566C18.0288 0.794922 19.2153 1.99246 19.2153 3.45368V12.243C19.2153 13.7042 18.0288 14.9017 16.5566 14.9017ZM2.79033 2.03641C2.01028 2.03641 1.37308 2.67363 1.37308 3.45368V12.243C1.37308 13.023 2.01028 13.6602 2.79033 13.6602H16.5566C17.3366 13.6602 17.9738 13.023 17.9738 12.243V3.45368C17.9738 2.67363 17.3366 2.03641 16.5566 2.03641H2.79033Z" fill="yellow"/>
                          <path d="M9.87676 10.7502C9.74492 10.7502 9.61312 10.7063 9.50325 10.6184L2.4498 5.22396C2.17514 5.01522 2.12022 4.61971 2.32897 4.35603C2.53771 4.08137 2.93321 4.02643 3.19688 4.23518L9.85476 9.33296L16.1171 4.24616C16.3808 4.02643 16.7763 4.07037 16.9961 4.33405C17.2158 4.59773 17.1719 4.99325 16.9082 5.21298L10.2723 10.6074C10.1624 10.7063 10.0196 10.7502 9.87676 10.7502Z" fill="yellow"/>
                          <path d="M3.44963 12.8254C3.29581 12.8254 3.13099 12.7595 3.01014 12.6386C2.76843 12.3969 2.76843 12.0014 3.01014 11.7597L5.08662 9.68323C5.32833 9.44153 5.72383 9.44153 5.96553 9.68323C6.20724 9.92494 6.20724 10.3205 5.96553 10.5622L3.88905 12.6386C3.7682 12.7705 3.61443 12.8254 3.44963 12.8254Z" fill="yellow"/>
                          <path d="M15.8974 12.8254C15.7436 12.8254 15.5788 12.7595 15.458 12.6386L13.3815 10.5622C13.1398 10.3205 13.1398 9.92494 13.3815 9.68323C13.6232 9.44153 14.0187 9.44153 14.2604 9.68323L16.3369 11.7597C16.5786 12.0014 16.5786 12.3969 16.3369 12.6386C16.216 12.7705 16.0622 12.8254 15.8974 12.8254Z" fill="yellow"/>
                          </svg> info@evanzu.com
                          '
                          ],
                          'href' => ['', '', '']
                      ]); ?>
                  </div>
                  <div class="ml-5">
                    <?php get_template_part('components/footer-list-link', 'full', [
                        'title' => 'Sede Huancayo',
                        'list' => [
                          '<svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.67911 20.5497C8.52529 20.5497 8.36047 20.4838 8.23962 20.363L2.83423 14.9576C-0.384847 11.7385 -0.384847 6.4869 2.83423 3.26782C6.0533 0.048747 11.3049 0.048747 14.524 3.26782C17.7431 6.4869 17.7431 11.7385 14.524 14.9576L9.1186 20.363C8.99774 20.4948 8.83292 20.5497 8.67911 20.5497ZM8.67911 2.10324C6.8773 2.10324 5.08647 2.78441 3.71314 4.15773C0.977478 6.8934 0.977478 11.3539 3.71314 14.0896L8.67911 19.0556L13.6451 14.0896C16.3807 11.3539 16.3807 6.8934 13.6451 4.15773C12.2717 2.78441 10.4699 2.10324 8.67911 2.10324Z" fill="yellow"/>
                          <path d="M8.679 11.9469C6.8772 11.9469 5.41602 10.4857 5.41602 8.68392C5.41602 6.88212 6.8772 5.4209 8.679 5.4209C10.4808 5.4209 11.9421 6.88212 11.9421 8.68392C11.9421 10.4857 10.4698 11.9469 8.679 11.9469ZM8.679 6.66239C7.56936 6.66239 6.65744 7.56329 6.65744 8.68392C6.65744 9.80455 7.55837 10.7055 8.679 10.7055C9.78865 10.7055 10.7006 9.80455 10.7006 8.68392C10.7006 7.56329 9.78865 6.66239 8.679 6.66239Z" fill="yellow"/>
                          </svg> Jr. Ancash 793 - Huancayo
                          ',
                          '<svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.6233 19.8533H2.73488C1.25169 19.8533 0.0432129 18.6447 0.0432129 17.1615V3.46124C0.0432129 1.97805 1.25169 0.769531 2.73488 0.769531H10.6233C12.1065 0.769531 13.315 1.97805 13.315 3.46124V17.1615C13.315 18.6447 12.1065 19.8533 10.6233 19.8533ZM2.73488 2.01101C1.93285 2.01101 1.2847 2.65922 1.2847 3.46124V17.1615C1.2847 17.9636 1.93285 18.6118 2.73488 18.6118H10.6233C11.4253 18.6118 12.0735 17.9636 12.0735 17.1615V3.46124C12.0735 2.65922 11.4253 2.01101 10.6233 2.01101H2.73488Z" fill="yellow"/>
                          <path d="M10.4035 5.9556H2.52615C2.18556 5.9556 1.8999 5.68092 1.8999 5.32935C1.8999 4.97778 2.17458 4.70312 2.52615 4.70312H10.4035C10.7441 4.70312 11.0298 4.97778 11.0298 5.32935C11.0298 5.68092 10.7551 5.9556 10.4035 5.9556Z" fill="yellow"/>
                          <path d="M10.4035 15.0845H2.52615C2.18556 15.0845 1.8999 14.8098 1.8999 14.4583C1.8999 14.1177 2.17458 13.832 2.52615 13.832H10.4035C10.7441 13.832 11.0298 14.1067 11.0298 14.4583C11.0298 14.7988 10.7551 15.0845 10.4035 15.0845Z" fill="yellow"/>
                          <path d="M8.54679 3.87747H4.39382C4.05324 3.87747 3.76758 3.6028 3.76758 3.25123C3.76758 2.89966 4.04225 2.625 4.39382 2.625H8.54679C8.88737 2.625 9.17303 2.89966 9.17303 3.25123C9.17303 3.6028 8.88737 3.87747 8.54679 3.87747Z" fill="yellow"/>
                          <path d="M6.67923 17.9854C7.24959 17.9854 7.71197 17.523 7.71197 16.9527C7.71197 16.3823 7.24959 15.9199 6.67923 15.9199C6.10886 15.9199 5.64648 16.3823 5.64648 16.9527C5.64648 17.523 6.10886 17.9854 6.67923 17.9854Z" fill="yellow"/>
                          </svg> +51 64-588860
                          ',
                          '<svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M16.5566 14.9017H2.79033C1.31813 14.9017 0.131592 13.7042 0.131592 12.243V3.45368C0.131592 1.98147 1.32911 0.794922 2.79033 0.794922H16.5566C18.0288 0.794922 19.2153 1.99246 19.2153 3.45368V12.243C19.2153 13.7042 18.0288 14.9017 16.5566 14.9017ZM2.79033 2.03641C2.01028 2.03641 1.37308 2.67363 1.37308 3.45368V12.243C1.37308 13.023 2.01028 13.6602 2.79033 13.6602H16.5566C17.3366 13.6602 17.9738 13.023 17.9738 12.243V3.45368C17.9738 2.67363 17.3366 2.03641 16.5566 2.03641H2.79033Z" fill="yellow"/>
                          <path d="M9.87676 10.7502C9.74492 10.7502 9.61312 10.7063 9.50325 10.6184L2.4498 5.22396C2.17514 5.01522 2.12022 4.61971 2.32897 4.35603C2.53771 4.08137 2.93321 4.02643 3.19688 4.23518L9.85476 9.33296L16.1171 4.24616C16.3808 4.02643 16.7763 4.07037 16.9961 4.33405C17.2158 4.59773 17.1719 4.99325 16.9082 5.21298L10.2723 10.6074C10.1624 10.7063 10.0196 10.7502 9.87676 10.7502Z" fill="yellow"/>
                          <path d="M3.44963 12.8254C3.29581 12.8254 3.13099 12.7595 3.01014 12.6386C2.76843 12.3969 2.76843 12.0014 3.01014 11.7597L5.08662 9.68323C5.32833 9.44153 5.72383 9.44153 5.96553 9.68323C6.20724 9.92494 6.20724 10.3205 5.96553 10.5622L3.88905 12.6386C3.7682 12.7705 3.61443 12.8254 3.44963 12.8254Z" fill="yellow"/>
                          <path d="M15.8974 12.8254C15.7436 12.8254 15.5788 12.7595 15.458 12.6386L13.3815 10.5622C13.1398 10.3205 13.1398 9.92494 13.3815 9.68323C13.6232 9.44153 14.0187 9.44153 14.2604 9.68323L16.3369 11.7597C16.5786 12.0014 16.5786 12.3969 16.3369 12.6386C16.216 12.7705 16.0622 12.8254 15.8974 12.8254Z" fill="yellow"/>
                          </svg> contacto@evanzu.com
                          '
                          ],
                          'href' => ['', '', '']
                      ]); ?>
                  </div>
                </div>
                <!----------------Social---------------->
                <div class="w-100 d-flex justify-content-center">
                  <div class="d-flex justify-content-around w-75 bg-red">
                    <img class="" style="height: 2rem"
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.svg">
                    <img class="" style="height: 2rem"
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/yt.svg">
                    <img class="" style="height: 2rem"
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.svg">
                    <img class="" style="height: 2rem"
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/in.svg">
                    <img class="" style="height: 2rem"
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/tweet.svg">
                  </div>
                </div>
              </div>
              <!----------------Social---------------->
            </div>

            <div class="col-12 col-lg-6 ">
            <img class="position-absolute d-none d-lg-block w-100 min-height" style="" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-modal.svg">
            <div class="position-absolute d-block text-center w-100 bg-white-transparent">
                <img style="margin-top: -2rem;" src="<?php echo get_template_directory_uri(); ?>/assets/images/asset-modal.png">
                <div class="d-flex justify-content-center w-100 bg-white-transparent">
                  <h3 class="text-right" style="color:#ED1164; ">
                    Con los pies <br>
                    en los zapatos del cliente, <br>
                    el corazón <br>
                    en el diseño & desarrollo, <br>
                    y la mente <br>
                    en la estrategia.
                  </h3>
                </div>
              </div>
              <div class="d-flex h-100 align-items-center justify-content-end" style="margin-right: -2rem;">
                <div class="position-relative close" style="z-index: 2; margin-right: -3.5rem;" type="button"
                  data-dismiss="modal" aria-label="Close">
                  <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-close.svg">
                </div>
                <svg class="position-relative" width="72" height="509" viewBox="0 0 72 509" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M71.6475 1.52588e-05V508.657C58.136 508.657 46.469 499.238 43.6095 486.032L6.39286 314.071C-2.13095 274.694 -2.13095 233.952 6.39286 194.574L43.6095 22.6138C46.4581 9.41877 58.136 1.52588e-05 71.6475 1.52588e-05Z"
                    fill="#ED1164" />
                </svg>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>