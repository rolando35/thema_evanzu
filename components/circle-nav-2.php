<li class="nav-item mx-lg-3 text-center li-circle" style="z-index: 17;">
	<a
		class="link-circle <?php echo isset($args["active"]) ? "active" : "";?>"
		data-toggle="pill"
		href="<?php echo $args['href'];?>"
	>
		<div class="circle-nav <?php echo isset($args["active"]) ? "bg-red" : "";?>">
			<img style="display: inline-block; width: 70px; height: 70px" src="<?php echo $args["path"] . $args['svg'];  ?>"
			/>
		</div>
		<div class="line-nav <?php echo isset($args["active"]) ? "bg-red" : "";?>" >
		</div>
		<div class="title-circle-nav <?php echo isset($args["active"]) ? "title-circle-nav-active" : "";?>">
			<?php 
        echo $args['title'];    
       ?>
		</div>
	</a>
</li>
