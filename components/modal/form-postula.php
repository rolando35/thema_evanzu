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
    margin: 0 0 0 auto;
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
  #src-file1::before {
    content: 'Adjuntar CV';
}

input[type="file"]#src-file1 {
 width: 0.1px;
 height: 0.1px;
 opacity: 0;
 overflow: hidden;
 position: absolute;
 z-index: -1;
 }

label[for="src-file1"] {
    cursor: pointer;
 }

.mt-n1-19{
  margin-top: -19rem;
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
  .mt-n1-19{
    margin-top: -4rem;
  }

}
</style>

<div id="myModalBottom" class="modal fade modal-right mt-5c pr-0" tabindex="-1">
  <div class="modal-dialog mw-100">

    <div class="modal-content" style="height: 100vh">
      <div class="modal-body bg-yellow py-5" style="width: 100%;">
        <div class=" w-100 h-100">
          <div class="d-block d-lg-flex w-100">

            <div class="col-12 col-lg-7" style="z-index: 2">
              <h2 class="text-light " style="font-weight: 900; font-size: 50px;">Queremos conocer tu perfil</h2>
              <h5 class="text-light font-weight-light"><i>Déjanos tus datos y te contactámos</i></h5>
              <form>
                <input type="text"
                  class="form-control rounded-0 mt-3_5 text-light input-form bg-transparent border-top-0 border-left-0 border-right-0"
                  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombres y Apellidos">
                <div class="d-flex">
                  <input type="text"
                    class="form-control rounded-0 mt-3_5 text-light w-50 input-form bg-transparent border-top-0 border-left-0 border-right-0"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Perfil profesional">
                  <input type="numb"
                    class="form-control rounded-0 mt-3_5 text-light w-50 ml-5 input-form bg-transparent border-top-0 border-left-0 border-right-0"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Celular">
                </div>
                
                <div class="mt-3_5">
                    
                    <div class="
                        position-absolute
                        px-2
                        d-flex
                        w-100
                        justify-content-between
                        mt-2
                        ">
                    <h8 class="
                        text-light 
                        font-weight-light
                       
                        "
                        style="opacity: 0.6; z-index: 1;"
                    >Adjuntar CV</h8>
                    <div class="py-0 px-3 d-flex mr-4" style="background: rgba(251, 152, 0, 0.42);
                        border-radius: 2.2rem; 
                    ">
                        <p class="
                        text-light 
                        font-weight-light
                        my-0
                        "
                        style="opacity: 0.6; z-index: 1;">
                            Archivo.pdf
                        </p>
                        <img class="my-0 ml-2" src="<?php echo get_template_directory_uri() ?>/assets/images/clip.svg">
                        
                    </div>
                    </div>
                    <label 
                    class="form-control
                        rounded-0
                        text-light
                        w-100
                        input-form
                        bg-transparent
                        border-top-0
                        border-left-0
                        border-right-0
                        position-relative
                        "
                        style="z-index: 2"
                        for="src-file1"
                    ></label>
                    <input 
                    lang="es"
                    type="file"
                    id="src-file1"
                    aria-describedby="selectFile"
                    accept=".pdf"
                    >
                </div>
                
                <input type="text"
                  class="form-control rounded-0 mt-3_5 text-light input-form bg-transparent border-top-0 border-left-0 border-right-0"
                  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dejenos tu mensaje">
                <button class="bg-white py-2 px-5 border-0 my-4  font-weight-bold"
                  style="color: #ED1164; border-radius: 2.2rem;">Enviar mensaje</button>
              </form>
              <!----------------Social---------------->
            </div>

            <div class="col-12 col-lg-5 ">
              <img class="position-absolute d-none d-lg-block mt-n1-19" style="max-width: none" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-form-postula.svg">
              <div class="position-absolute d-block text-center bg-white-transparent" style="margin-left: -34rem">
                <img style="margin-top: -2rem;" src="<?php echo get_template_directory_uri(); ?>/assets/images/form-postula.png">
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
                    fill="rgba(251, 152, 0, 0.42)" />
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