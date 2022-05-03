<style>
	p.error{ color: red; font-size: 0.8em; }
</style>
<div class="bg-red box-container-contact">
	<?php $directory_points =
     get_template_directory_uri() .
     '/assets/images/form-quote-request/point-group.svg'; ?>

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
					<div class="image-contact">
						<img src="<?php echo $args['image']; ?>"/>
					</div>
					<div
						class="d-none d-sm-block hurme-simple text-white text-left mt-lg-n3 title-contact"
					>
						<?php echo $args['title']; ?>
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
							class="input-group input-group-contact d-flex flex-column flex-lg-row justify-content-between"
						>
							<div class="w-50">
								<input
									type="text"
									id="<?php echo $args['idwebsite']; ?>"
									placeholder="Sitio Web"
									class="<?php echo $args['idwebsite']; ?> input-non-border form-control w-100"
									name="<?php echo $args['idwebsite']; ?>"
								/>
							</div>
							<div class="w-50">
								<input
									type="text"
									id="<?php echo $args['idemail']; ?>"
									placeholder="E-mail"
									class="<?php echo $args['idemail']; ?> input-non-border form-control w-100"
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
							<span><strong>Solicita tu cotización</strong></span>

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
				<div id="<?php echo $args['idparagraph']; ?>" class="success_msg" style="display:none; font-size: 1rem">Message Sent Successfully</div>
				<div class="error_msg" style="display:none">Message Not Sent, There is some error.</div>
			</div>
		</div>
	</div>
</div>

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
          
          $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: "post",
            data: {
              action: "cotization",
              website,
              email
            },
            beforeSend: function () {
              $("#<?php echo $args['idparagraph']; ?>").show()
              $("#<?php echo $args['idparagraph']; ?>").html("<span style='color:white;font-size:1rem;'>Cargando ...</span>")
            },
            success: function (resultado) {
                $("#<?php echo $args['idparagraph']; ?>").show(); 
                $("#<?php echo $args['idparagraph']; ?>").html(resultado);
            },
          });
          return false
        },
        errorElement : 'p'
      });

    })(jQuery);

</script> 
