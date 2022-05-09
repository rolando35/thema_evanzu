<?php 
    global $game; 
?>
<div
	class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column align-items-center"
>
	<div
		class="mb-2 image-circle-game"
	>
		<img src="<?php echo $game["path"] . $game["image"] ?>" class="img-fluid" title="<?php echo $game["attrTitle"]; ?>" alt="<?php echo $game["attrAlt"] ?>" />
	</div>
	<div><img src="<?php echo $game["path"] . $game["icon"]; ?>" /></div>
	<div>
		<svg
			width="54"
			height="2"
			viewBox="0 0 54 2"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<path
				d="M1 1H53"
				stroke="#ED1164"
				stroke-width="2"
				stroke-linecap="round"
			/>
		</svg>
	</div>
	<p class="text-title-game text-red"><?php echo $game["title"]; ?></p>
</div>