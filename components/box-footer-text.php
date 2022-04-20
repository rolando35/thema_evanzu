<style>
  .width-12 {
    width: 12.4rem;
  }
</style>
<?php
  $display = $args['description'] == '' ? 'none' : 'block';
?>
<div class="mt-5">
  <h2 class="text-light font-weight-bold" style="font-size: 24.17px;"><?php echo $args['title'] ?></h2>
  <p class="text-light width-12 d-<?php echo $display ?>"><i><?php echo $args['description'] ?></i></p>
</div>