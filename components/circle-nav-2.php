<li class="nav-item mx-lg-3 text-center li-circle">
	<a
		class="<?php echo $args['active'];?>"
		data-toggle="pill"
		href="<?php echo $args['href'];?>"
	>
		<div class="circle-nav">
			<img style="display: inline-block; width: 70px; height: 70px" src="<?php echo $args["path"] . $args['svg'];  ?>"
			/>
		</div>
		<div>
		</div>
		<div class="title-circle-nav text-gray">
			<?php 
        echo $args['title'];    
       ?>
		</div>
	</a>
</li>
