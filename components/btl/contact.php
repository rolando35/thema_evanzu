<!--------------------logo-top-contact------------------------->
<div class="text-center d-none d-lg-block">
	<img
		src="<?php echo $args["path_img"]; ?>Ilustración-de-Activación-BTL.png"
        title="Servicio de Activación BTL"
        alt="Megafono en iconos para activaciones BTL"
        class="logo-top-contact"
	/>
</div>
<!--------------------logo-top-contact------------------------->

<!--------------------bola-Right------------------------->
<?php
    get_template_part('components/border-circle','full', 
    array(
        'color' => '#01A5EC', 
        'position' => 'right'
    )); 
?>
<!--------------------bola-Right------------------------->

<section class="section-contact">
	<?php  
		get_template_part('components/form-quote-request2','full', array (
            'image' => $args["path_img"].'girl-icon.svg',
            'title'=> $args["title"],
            'idwebsite' => $args["idwebsite"],
            'idemail' => $args["idemail"],
            'idform' => $args["idform"],
            'idparagraph' => $args["idparagraph"],
            'imgClass' => $args["imgClass"],
            'titleClass' => $args["titleClass"]
        ));
    ?>
</section>
