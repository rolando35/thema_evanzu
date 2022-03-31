<h2 class="text-light font-weight-bold mt-5" style="font-size: 24.17px;"><?php echo $args['title'] ?></h2>
<ul class="list-unstyled m-0">
  <?php 
    $isEmpty = empty($args['href']) ? '' : $args['href'];
    $items_fo = (array_map("list_footer_icon", $args['list'], $isEmpty));
    foreach($items_fo as $item_fo) {
      echo $item_fo;
    }
  ?>
</ul>