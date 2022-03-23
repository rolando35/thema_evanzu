<?php $width_image = $arg['image'] == '' ? '96px' : 'auto' ?>
<div class="d-flex flex-column my-1 my-lg-0 align-self-lg-end">
	<div class="d-flex flex-column-reverse align-items-center flex-lg-row">
		<div
			class="align-self-center text-center text-lg-right p-2 pr-lg-3 pb-lg-0 text-service"
		>
        <?php echo $args["text"]; ?>
		</div>
		<div class="align-self-lg-end" style="width: <?php echo $width_image; ?>" >
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
