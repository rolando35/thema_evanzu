<style>
  .toggle-position{
    position: initial;
    cursor: pointer;
    transition: all 0.4s ease-in-out;
  }
  .toggle-position:hover{
    position: inherit;
    transform: scale(1.02);
  }
  .toggle{
    position: absolute;
  }
  .toggle:hover{
    position: fixed;
  }
</style>

<div class="container">
  <div class="d-md-flex justify-content-center flex-md-row mb-2">
    <div class="">
      <!--  -->
    <div class="m-1">
          <div ></div>
          <img class="toggle" src="<?php echo get_option("branding")["galleri-image-five"]; ?>">
          <img class="toggle-position" src="<?php echo get_option("branding_hover")["galleri-image-five"]; ?>">
      </div>
      <div
        class="d-md-flex justify-content-center flex-md-row  mb-2"
      >
        <div class="m1">
            <img class="toggle" src="<?php echo get_option("branding")["galleri-image-six"]; ?>">
            <img class="toggle-position" src="<?php echo get_option("branding_hover")["galleri-image-six"]; ?>">
        </div>
        <div class="">
          <div class="m-1">
              <img class="toggle" src="<?php echo get_option("branding")["galleri-image-seven"]; ?>">
              <img class="toggle-position" src="<?php echo get_option("branding_hover")["galleri-image-seven"]; ?>">
          </div>
          <div class="m-1">
              <img class="toggle" src="<?php echo get_option("branding")["galleri-image-eight"]; ?>">
              <img class="toggle-position" src="<?php echo get_option("branding_hover")["galleri-image-eight"]; ?>">
          </div>
        </div>
      </div>
    </div>

    <div class="">
      <div class="m-1 position-relative">
        <img class="toggle" src="<?php echo get_option("branding")["galleri-image-one"]; ?>">
        <img class="toggle-position" src="<?php echo get_option("branding_hover")["galleri-image-one"]; ?>">
      </div>

      <div class="d-md-flex justify-content-center flex-md-row">
        
        <div class="m-1">
          <img class="toggle" src="<?php echo get_option("branding")["galleri-image-two"]; ?>">
          <img class="toggle-position" src="<?php echo get_option("branding_hover")["galleri-image-two"]; ?>">
        </div>
        <div class="">
          <div class="m-1">
            <img class="toggle" src="<?php echo get_option("branding")["galleri-image-three"]; ?>">
            <img class="toggle-position" src="<?php echo get_option("branding_hover")["galleri-image-three"]; ?>">
        </div>
          <div class="m-1">
            <img class="toggle" src="<?php echo get_option("branding")["galleri-image-four"]; ?>">
            <img class="toggle-position" src="<?php echo get_option("branding_hover")["galleri-image-four"]; ?>">
        </div>
        </div>
      </div>

      <div style="background-image:url()" class="m-1">
        <img class="toggle" src="<?php echo get_option("branding")["galleri-image-nine"]; ?>">
        <img class="toggle-position" src="<?php echo get_option("branding_hover")["galleri-image-nine"]; ?>">
      </div>
    </div>
  </div>

  <div class="d-md-flex justify-content-center flex-md-row b mb-3">
    <div class="m-1">
      <img class="toggle" src="<?php echo get_option("branding")["galleri-image-teen"]; ?>">
      <img class="toggle-position" src="<?php echo get_option("branding_hover")["galleri-image-teen"]; ?>">
      </div>
    <div class="m-1">
      <img class="toggle" src="<?php echo get_option("branding")["galleri-image-eleven"]; ?>">
      <img class="toggle-position" src="<?php echo get_option("branding_hover")["galleri-image-eleven"]; ?>">
      </div>
    <div class="m-1 ">
      <img src="<?php echo get_option("branding")["galleri-image-twelve"]; ?>">
      <!-- <img class="toggle-position" src="<?php //echo get_option("branding_hover")["galleri-image-twelve"]; ?>"> -->
    </div>
  </div>
</div>
