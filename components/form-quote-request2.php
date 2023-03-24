<style>
	p.error{ color: red; font-size: 0.8em; }
	.w-35 {
      width: 35%;
    }
	.form-controls-service {
		display: block;
		width: 100%;
		height: calc(1.5em + 0.75rem + 2px);
		padding: 0.375rem 0.75rem;
		font-size: 1rem;
		font-weight: 400;
		line-height: 1.5;
		color: #fff;
		background-color: #fd73a7;
		background-clip: padding-box;
		border: 1px solid #ced4da;
		border-radius: 0.25rem;
		transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		}
	.form-controls-service::placeholder {
		color: white;
		opacity: 0.6;
		}
    
input[type="radio"] {
  accent-color: #fd73a7;
}

input[type="text"]:focus {
  border: 3px solid red !important;
}

.form-service {
  border-radius: 13px;
}

#submit {
    border-radius: 23px !important;
    background: white !important;
    color: #ed1164 !important;
    padding: 0.8% !important;
    margin-top: 1.5% !important;
    border: solid 1px !important;
}

#circle-icon {
  border-radius: 50%;
  background-color: #fd73a7;
  padding: 8px 6px;
}

@media only screen and (max-width: 600px) {

	.form-service {
      width: 70%;
	}
	
	.w-35 {
	  width: 100%;
	  margin: 1% 0%;
    }
}

</style>


<div class="bg-smooth-gray box-container-contact">
	<?php $directory_points =  get_template_directory_uri().'/assets/images/form-quote-request/point-group.svg'; ?> 

	  <form action="" id="<?php echo $args['idform' ]; ?>" class="bg-red form-service align-content-center container">
			<div class="">
					  <div class="d-flex flex-column flex-lg-row justify-content-center">
					     <div class="my-4 text-center text-white hurme-simple-black <?php echo $args['titleClass']; ?>">
                              <?php echo $args['title']; ?>	
						 </div>
							
							
						</div>
				 
				   <div class=" d-flex flex-column flex-lg-row justify-content-center"	>								
							<div class="w-35 mr-0 mr-lg-2">
								<input
									type="text"
									id="mail"
									placeholder="E-mail"
									class="form-controls-service w-100"
									name="mail"
								/>
							</div>
							<div class="w-35 ml-0 ml-lg-2">
								<input
									type="text"
									id="cellphone"
									placeholder="Celular"
									class="form-controls-service w-100"
									name="cellphone"
								/>
							</div>
					</div>
					<div class="d-flex flex-column flex-lg-row justify-content-center my-3"	>								
							<div class="w-35 mr-0 mr-lg-2 input-group input-group-lg">
								<input
									type="text"
									id="name"
									placeholder="Nombre"
									class="form-controls-service w-100"
									name="name"
								/>
							</div>
							<div class="w-35 ml-0 ml-lg-2 input-group input-group-lg">
								<input
									type="text"
									id="subservice"
									placeholder="Sub-servicio"
									class="form-controls-service w-100"
									name="subservice"
								/>
							</div>
					</div>

					<div class="text-white w-75 mx-auto pl-3">
                       Presupuesto:
					</div>
					
					<div class="d-flex flex-column flex-lg-row justify-content-center my-3"	>	
                            <div class="form-check  mx-3">
								<input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">
								<label class="form-check-label text-white" for="radio1">
									 500 USD - 1,500 USD
								</label>
								</div>
						<div class="form-check mx-3">
							<input type="radio" class="form-check-input" id="radio2" name="optradio" value="option1">
							<label class="form-check-label text-white" for="radio2">
								1,500 USD - 2,500 USD
							</label>
						</div>

						<div class="form-check  mx-3">
							<input type="radio" class="form-check-input" id="radio3" name="optradio" value="option1">
							<label class="form-check-label text-white" for="radio3">
								2,500 USD a más
							</label>
						</div>
					</div>


					<div class="d-flex flex-column flex-lg-row justify-content-center my-5">
						<button
							type="submit"
							class="submit btn rounded-pill text-white my-1 p-2 btn-sm button-contact"
							id="submit"
						>
							<span class="hurme-bold-4">Solicita tu cotización</span>
                            <span id="circle-icon">
								<svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.72217 6.76643H17.1765M17.1765 6.76643L12.025 1.61499M17.1765 6.76643L12.025 11.9179" stroke="white" stroke-width="2.57572" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

							</span>
							
						</button>
				    </div>	
				</div>  
			     
		</form>
				<div id="<?php echo $args['idparagraph']; ?>" class="success_msg" style="display:none; margin-top:2%;font-size: 1rem;text-align:center;">Message Sent Successfully</div>
				<div class="error_msg" style="display:none">Message Not Sent, There is some error.</div>
  </div>

 <!-- <div class="bg-red box-container-contact">
	<?php /* $directory_points =
     get_template_directory_uri() .
     '/assets/images/form-quote-request/point-group.svg'; */?>

	<div class="container">
		<div class="row justify-content-center">
			<div
				class="d-flex flex-column align-items-center bg-pink-form rounded-pill container-contact"
			>
				<div
					class="row flex-column-reverse flex-lg-row align-items-center row-first justify-content-lg-center"
				>
					<div class="align-self-center d-none d-lg-block points-element">
						<img src="<?php echo $directory_points; ?>" />
					</div>
					<div class="d-flex flex-column-reverse flex-lg-row align-items-center group-title-contact">
						<div class="<?php echo isset($args['imgClass'])? $args["imgClass"]: ''; ?>">
							<img src="<?php echo $args['image']; ?>"/>
						</div>
						<div
							class="d-none d-sm-block text-white hurme-simple-black <?php echo $args['titleClass']; ?>"
						>
							<?php echo $args['title']; ?>
						</div>
					</div>

					<div class="align-self-center d-none d-lg-block points-element">
						<img src="<?php echo $directory_points; ?>" />
					</div>
				</div>

				<form action="" id="<?php echo $args[
        'idform'
    ]; ?>" class="row bg-white rounded-pill row-second flex-column flex-lg-row align-content-center">
					<div
						class="d-flex pt-3 pb-1 pt-md-2 pt-lg-0 pb-lg-0 w-80 flex-column flex-lg-row align-items-center justify-content-center"
					>
						<div
							class="input-group input-group-contact d-flex flex-column flex-lg-row justify-content-center"
						>
							<div class="w-14 mr-0 mr-lg-2">
								<input
									type="text"
									id="<?php echo $args['idwebsite']; ?>"
									placeholder="Sitio Web"
									class="<?php echo $args['idwebsite']; ?> input-non-border form-controls w-100"
									name="<?php echo $args['idwebsite']; ?>"
								/>
							</div>
							<div class="w-14 ml-0 ml-lg-2">
								<input
									type="text"
									id="<?php echo $args['idemail']; ?>"
									placeholder="E-mail"
									class="<?php echo $args['idemail']; ?> input-non-border form-controls w-100"
									name="<?php echo $args['idemail']; ?>"
								/>
							</div>
						</div>
					</div>

					<div class="text-center">
						<button
							type="submit"
							class="submit btn rounded-pill text-white my-1 p-2 btn-sm button-contact"
							id="submit"
						>
							<span class="hurme-bold-4">Solicita tu cotización</span>

							<svg
								width="37"
								height="37"
								viewBox="0 0 37 37"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<rect
									x="0.347656"
									y="0.514893"
									width="36.5284"
									height="35.5917"
									rx="17.7959"
									fill="white"
									fill-opacity="0.3"
								/>
								<path
									d="M10.6523 17.4913C9.94108 17.4913 9.36448 18.0679 9.36448 18.7791C9.36448 19.4904 9.94108 20.067 10.6523 20.067V17.4913ZM26.1067 18.7791L27.0173 19.6898C27.5202 19.1868 27.5202 18.3714 27.0173 17.8685L26.1067 18.7791ZM21.8659 12.717C21.3629 12.2141 20.5475 12.2141 20.0446 12.717C19.5416 13.22 19.5416 14.0354 20.0446 14.5383L21.8659 12.717ZM20.0446 23.0199C19.5416 23.5228 19.5416 24.3383 20.0446 24.8412C20.5475 25.3442 21.3629 25.3442 21.8659 24.8412L20.0446 23.0199ZM10.6523 20.067H26.1067V17.4913H10.6523V20.067ZM27.0173 17.8685L21.8659 12.717L20.0446 14.5383L25.196 19.6898L27.0173 17.8685ZM25.196 17.8685L20.0446 23.0199L21.8659 24.8412L27.0173 19.6898L25.196 17.8685Z"
									fill="white"
								/>
							</svg>
						</button>
					</div>
				</form>
				<div id="<?php echo $args['idparagraph']; ?>" class="success_msg" style="display:none; margin-top:2%;font-size: 1rem;text-align:center;">Message Sent Successfully</div>
				<div class="error_msg" style="display:none">Message Not Sent, There is some error.</div>
			</div>
		</div>
	</div>
</div> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>

    (function ($) {
        
        $("#<?php echo $args['idform']; ?>").validate({
        rules: {
					<?php echo $args['idwebsite']; ?>: {
            required: true,
            minlength: 10
          },
          <?php echo $args['idemail']; ?>: {
            required: true,
            email: true
          }
        },
        messages : {
          <?php echo $args['idwebsite']; ?>: {
            required: "Este campo es obligatorio*.",
            minlength: "Como mínimo tiene que tener 10 caracteres"
          },
					<?php echo $args['idemail']; ?>: {
              required: "Este campo es obligatorio*.",
              email: "El correo tiene que tener un formato: abc@domain.tld"
          }
        },

        submitHandler: function (e) {
          var website = $("#<?php echo $args['idwebsite']; ?>").val();
          var email =  $("#<?php echo $args['idemail']; ?>").val()
		  var service = "#<?php echo $args['idwebsite']; ?>"
		  var subService = "#<?php echo $args['idform']; ?>"
          
          $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: "post",
            data: {
              action: "cotization",
              website,
              email,
			  service,
			  subService
            },
            beforeSend: function () {
              $("#<?php echo $args['idparagraph']; ?>").show()
              $("#<?php echo $args['idparagraph']; ?>").html("<span style='color:white;font-size:1rem;'>Cargando ...</span>")
            },
            success: function (resultado) {
                $("#<?php echo $args['idparagraph']; ?>").show(); 
                $("#<?php echo $args['idparagraph']; ?>").html(resultado);
				$("#submit").attr("disabled", true);
            },
          });
          return false
        },
        errorElement : 'p'
      });

    })(jQuery);

</script> 
