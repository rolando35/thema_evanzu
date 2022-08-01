<div class="d-flex flex-column my-1 mt-lg-0 mb-lg-5">
	<div class="d-flex flex-column align-items-center flex-lg-row ">
		<div style="<?php echo isset($args["tall"]) ? $args["tall"] : '';?>" class="align-self-lg-end">
			<img class="image-service" src="<?php echo $args["image"]; ?>"
			/>
		</div>
		<div
			class="align-self-center text-center text-lg-left p-2 pl-lg-3 pb-lg-0 text-service"
		>
			<div class="hurme-semi-bold-4 text-gray-black">
				<?php echo $args["title"]; ?>
			</div>
			<div class="service-braning-text-left">
				<?php echo $args["text"]; ?>
			</div>
        
		</div>
	</div>
	<div class="d-none d-lg-flex justify-content-end container-line-left-service"
	>
		<div class="line-left-service">
			<img src="<?php echo $args["line"]; ?>" class="img-fluid" />
		</div>
	</div>
</div>
