<?php 
       global $data;       
?>
<li class="nav-item mx-1 text-center li-circle">
  <a class="<?php echo $data['active'];?>" data-toggle="pill" href="<?php echo $data['href'];?>">
    <div class="circle-nav <?php echo $data['center']?>">
      <img
        style="display: inline-block; width: 70px; height: 70px"
        src="<?php echo $data['svg'];  ?>"
      />
    </div>
    <div class="title-circle-nav text-gray">
      <?php 
        echo $data['title'];    
       ?>
    </div>
  </a>
</li>

<!-- <div  class='circle-nav'>
    <?php 
       // global $data; 
       // echo $data['svg'];    
       ?>   
</div>
<div class="title-circle-nav text-gray">
     <?php 
       // echo $data['title'];    
       ?>  
</div> -->
