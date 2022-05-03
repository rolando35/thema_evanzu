<style>
  .modal.modal-right .modal-dialog {
    max-width: 380px;
    min-height: calc(100vh - 0)
  }

  .modal.modal-right.show .modal-dialog {
    transform: translate(0, 0)
  }

  span.error{ color: white; font-size: 0.8em; }
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

  .form-control {
    border-bottom: 1px solid white;
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
  #file::before {
    content: 'Adjuntar CV';
}

input[type="file"]#file {
 width: 0.1px;
 height: 0.1px;
 opacity: 0;
 overflow: hidden;
 position: absolute;
 z-index: -1;
 }

label[for="file"] {
    cursor: pointer;
 }

.mt-n1-19{
  margin-top: -16rem;
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

::placeholder {
  color: white;
}
</style>

<div id="myModalBottom" class="modal fade modal-right mt-5c pr-0 hurme-simple-4" tabindex="-1">
  <div class="modal-dialog mw-100">
    <div class="modal-content" style="height: 100vh">
      <div class="modal-body bg-yellow py-5" style="width: 100%;">
        <div class=" w-100 h-100">
          <div class="px-5 d-block d-lg-flex w-100">
            <div class="col-12 col-lg-7 px-5" style="z-index: 2">
              <h2 class="text-light " style="font-weight: 900; font-size: 50px;">Queremos conocer tu perfil</h2>
              <h5 class="text-light font-weight-light"><i>Déjanos tus datos y te contactámos</i></h5>
              <form id="postulation" action="" class="text-left mr-5 pr-5" method="post">
                <input type="text"
                  class="fullname form-control rounded-0 mt-3_5 text-light input-form bg-transparent border-top-0 border-left-0 border-right-0"
                  id="fullname" aria-describedby="emailHelp" placeholder="Nombres y Apellidos" name="fullname">
                <div class="d-flex">
                  <div class="w-50">
                    <input type="text"
                      class="profile form-control rounded-0 mt-3_5 text-light w-100  input-form bg-transparent border-top-0 border-left-0 border-right-0"
                      id="profile" aria-describedby="emailHelp" placeholder="Perfil profesional" name="profile">
                  </div>
                  <div class="w-50 ml-5">
                    <input type="numb"
                      class="phone form-control rounded-0 mt-3_5 text-light w-100 input-form bg-transparent border-top-0 border-left-0 border-right-0"
                      id="phone" aria-describedby="emailHelp" placeholder="Celular" name="phone">
                  </div>
                  
                </div>
                
                <div class="mt-3_5">
                    
                    <div class=" position-absolute d-flex w-100 justify-content-between mt-2" style="padding: 0 4.5rem 0 0.5rem">
                      <h8  class="text-light font-weight-light" style="opacity: 0.6; z-index: 1;">Adjuntar CV</h8>
                      <div class="py-0 px-3 d-flex" style="background: rgba(251, 152, 0, 0.42); border-radius: 2.2rem; margin-right: 8rem;">
                          <p class=" text-light  font-weight-light my-0"
                          style="opacity: 0.6; z-index: 1;">
                              Archivo.pdf
                          </p>
                          <img class="my-0 ml-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/clip.svg">
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
                        for="file"
                    ></label>
                    <input 
                    lang="es"
                    type="file"
                    id="file"
                    aria-describedby="selectFile"
                    accept=".pdf"
                    name="file"
                    class="file"
                    >
                </div>
                
                <input type="text"
                  class="message form-control rounded-0 mt-3_5 text-light input-form bg-transparent border-top-0 border-left-0 border-right-0"
                  id="message" aria-describedby="emailHelp" placeholder="Dejenos tu mensaje" name="message">
                <button type="submit" class="submit bg-white py-2 px-5 border-0 my-4  font-weight-bold"
                  style="color: #ED1164; border-radius: 2.2rem;">Enviar mensaje</button>
              </form>
              <div id="success" class="success_msg" style="display:none">Message Sent Successfully</div>
              <div class="error_mssg" style="display:none">Message Not Sent, There is some error.</div>
              <!----------------Social---------------->
            </div>

            <div class="col-12 col-lg-5 ">
              <img class="position-absolute d-none d-lg-block mt-n1-19" style="max-width: none; margin-left: -7rem;" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-form-postula.svg">
              <div class="position-absolute d-block text-center bg-white-transparent" style="margin-left: -34rem">
                <img style="margin-top: -2rem;" src="<?php echo get_template_directory_uri(); ?>/assets/images/form-postula.png">
              </div>

              <div class="d-flex h-100 align-items-center justify-content-end" style="margin-right: -2rem;">
                <div class="position-relative close" style="z-index: 2; margin-right: -3.5rem;" type="button"
                  data-dismiss="modal" aria-label="Close">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-close.svg">
                </div>
                <svg  style="margin-right: -3rem;" class="position-relative" width="72" height="509" viewBox="0 0 72 509" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M71.6475 1.52588e-05V508.657C58.136 508.657 46.469 499.238 43.6095 486.032L6.39286 314.071C-2.13095 274.694 -2.13095 233.952 6.39286 194.574L43.6095 22.6138C46.4581 9.41877 58.136 1.52588e-05 71.6475 1.52588e-05Z"
                    fill="#FBC000" />
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>

    (function ($) {

      $("#postulation").validate({
        rules: {
            fullname: {
            required: true,
            minlength: 6
          },
          profile: {
            required: true,
          },
          phone: {
            required: true,
            number: true,
            minlength: 9,
          },
          file: {
            required: true,
          },
          message: {
            required: true,
            minlength: 20
          }
        },
        messages : {
            fullname: {
            required: "Este campo es obligatorio*.",
            minlength: "Como mínimo tiene que tener 6 caracteres."
          },
          profile: {
              required: "Este campo es obligatorio*.",
          },
          phone: {
            required: "Este campo es obligatorio*.",
            number: "Por favor ingrese solo valores numéricos.",
            minlength: 'Tiene que tener 9 dígitos.'
          },
          file: {
            required: "Este campo es obligatorio*.",
          },
          message: {
            required: "Este campo es obligatorio*.",
            minlength: "Como mínimo tiene que tener 20 caracteres."
          }
        },
        submitHandler: function (e) {
          var fullname = $("#fullname").val()
          var profile =  $("#profile").val()
          var phone =  $("#phone").val()
          var file =  $("#file").val()
          var message =  $("#message").val()
          
          $.ajax({
            url: '<?php  echo admin_url('admin-ajax.php') ?>',
            type: "post",
            data: {
              action: "postulate",
              fullname,
              profile,
              phone,
              file,
              message
            },
            beforeSend: function () {
              $("#success").show()
              $("#success").html("<span style='color:white;font-size:2rem;'>Cargando ...</span>")
            },
            success: function (resultado) {
                $("#success").show()
                $("#success").html(resultado)
            },
          });
          return false
        },
        errorElement : 'span'
      });

})(jQuery);
</script>