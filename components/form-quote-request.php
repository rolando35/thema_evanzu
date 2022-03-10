<?php  
      global $parameters; 
      $directory_points = get_template_directory_uri() . '/assets/images/form-quote-request/point-group.svg';
?>
<div class="bg-pink-form w-60 rounded-pill mx-auto py-5">
  <div class="text-center">
    <div><img src="<?php echo $directory_points; ?>" /></div>
    
     <div class="position-relative w-50 text-left" style="margin-top: -8rem;  margin-left: 5rem;">
    <img  class="position-absolute" src="<?php echo $parameters['svg']; ?>" /></div>
    <span class="text-white"> <?php echo $parameters['title']?> </span>
    <img src="<?php echo $directory_points; ?>" />
  </div>
  <div class="bg-white w-80 mx-auto  rounded-pill row">
    <div class="col-12 col-sm-12 col-md-8">
      <div class="input-group mt-2">
        <input
          type="text"
          placeholder="Sitio Web"
          class="input-non-border form-control"
        />
        <input
          type="text "
          placeholder="E-mail"
          class="input-non-border form-control"
        />
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4">
      <button
        type="button"
        class="btn bg-red rounded-pill text-white my-1 p-2 btn-sm"
      >
        Solicita tu cotización

        <svg
          width="37"
          height="37"
          viewBox="0 0 37 37"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <rect
            x="0.418945"
            y="0.519531"
            width="36.5284"
            height="35.5917"
            rx="17.7959"
            fill="white"
            fill-opacity="0.3"
          />
        </svg>
      </button>
    </div>
  </div>
</div>
