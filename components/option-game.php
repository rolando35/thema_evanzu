<?php 
    global $game; 
?>
<div
	class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column align-items-center"
>
	<div
		class="mb-2"
		style="
			padding: 0.7rem;
			background: #f798bc;
			border-radius: 50%;
			width: 10.2rem;
		"
	>
		<img src="<?php echo $game["path"] . $game["image"] ?>" class="img-fluid" />
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
	<p class="text-red" style="font-size: 1.2rem;"><?php echo $game["title"]; ?></p>
</div>
