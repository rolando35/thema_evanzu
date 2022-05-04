<div class="d-flex flex-column my-1 my-lg-0 align-self-lg-end">
	<div class="d-flex flex-column-reverse align-items-center flex-lg-row">
		<div style="<?php echo isset($args["tall"]) ? $args["tall"] : '';?>"
			class="align-self-center text-center text-lg-right p-2 pr-lg-3 pb-lg-0 text-service "
		>
		     <div class="hurme-semi-bold-4 text-gray-black">
				 <?php echo $args["title"]; ?>
			 </div>
	     	<div class="service-braning-text-rigth">
	           	<?php echo $args["text"]; ?>
			</div>
		</div>
		<div class="align-self-lg-end">
			<img class="image-service" src="<?php echo $args["image"]; ?>"
			/>
		</div>
	</div>
	<div class="d-none d-lg-flex justify-content-start container-line-right-service"
	>
		<div class="line-right-service">
			<img src="<?php echo $args["line"];?>" />
		</div>
	</div>
</div>