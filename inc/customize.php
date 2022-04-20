<?php
// add_theme_support( 'custom-logo', array(
//     //ALTO
//     'height'      => 50,
//     //ANCHO
//     'width'       => 250,
//     //PERMITIR FLEXIBILIDAD EN EL TAMAÑO
//     'flex-height' => true,
//     'flex-width'  => true,
//     //
//     'header-text' => array( 'site-title', 'site-description' ),
// ) );

function evanzu_customize_register($wp_customize)
{
    $wp_customize -> add_panel('home_site',array(
        'title' => __("Edita el inicio de la página"),
        'description' => __("Puedes editar todo respecto al home desde aqui"),
        'priority' => 10,
    ));


    //  $wp_customize -> add_panel('btl_site',array(
    //     'title' => __("Edita la página BTL"),
    //     'description' => __("Puedes editar todo respecto al home desde aqui"),
    //     'priority' => 15,
    // ));


    //////galeria/////////////////////
    $wp_customize->add_section('evanzu_galeria', array(
        'panel' =>'home_site',
        'priority'             => 11,
        'capability'         => 'edit_theme_options',
        'title'                => __('Galeria home', 'd5-business-line'),
        'description'          => ''
    ));


     $wp_customize->add_section('evanzu_galeria', array(
        'panel' =>'btl_site',
        'priority'             => 11,
        'capability'         => 'edit_theme_options',
        'title'                => __('Galeria', 'd5-business-line'),
        'description'          => ''
    ));

  
    $wp_customize->add_setting('evanzu[galleri-image-one]', array(
    
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-one', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-one]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));


    // $wp_customize->add_setting('evanzu[galleri-image-two]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));


    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-two', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-two]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));

   

    // $wp_customize->add_setting('evanzu[galleri-image-three]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));


    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-three', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-three]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));


    // $wp_customize->add_setting('evanzu[galleri-image-four_new]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));


    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-four_new', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-four_new]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    // )));





    // $wp_customize->add_setting('evanzu[galleri-image-five]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));


    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-five', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-five]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));

    

    // $wp_customize->add_setting('evanzu[galleri-image-six]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));


    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-six', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-six]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));

   
    // $wp_customize->add_setting('evanzu[galleri-image-seven]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));


    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-seven', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-seven]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));

    // $wp_customize->add_setting('evanzu[galleri-image-eight]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));


    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eight', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-eight]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));

    
    // $wp_customize->add_setting('evanzu[galleri-image-nine]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));


    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-nine', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-nine]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));

     
      
    // $wp_customize->add_setting('evanzu[galleri-image-teen]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));


    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-teen', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-teen]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));


      
    // $wp_customize->add_setting('evanzu[galleri-image-eleven]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));


    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eleven', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-eleven]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));

    
     
    // $wp_customize->add_setting('evanzu[galleri-image-twelve]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));

    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-twelve', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-twelve]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));

   
        
    // $wp_customize->add_setting('evanzu[galleri-image-twelve]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));

    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-twelve', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-twelve]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));


    // $wp_customize->add_setting('evanzu[galleri-image-thirteen]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));

    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-thirteen', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-thirteen]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));


    // $wp_customize->add_setting('evanzu[galleri-image-fourteen]', array(
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));

    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-fourteen', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-fourteen]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));
   
    // $wp_customize->add_setting('evanzu[galleri-image-fifteen]', array(
   
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));

    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-fifteen', array(
    //     'label'                => __('Imagen de galeria', ''),
    //     'section'              => 'evanzu_galeria',
    //     'settings'             => 'evanzu[galleri-image-fifteen]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));


      /*********foooter********************** */

      $wp_customize->add_section('generales', array(
        'panel' =>'home_site',
        'priority'             => 11,
        'capability'         => 'edit_theme_options',
        'title'                => "Campo para descripción",
        'description'          => ''
    ));

    $wp_customize->add_setting('evanzu[generales-image]', array(
        'default'           => get_template_directory_uri() . '/assets/images/slides/1_slider.png',
        'capability'        => 'edit_theme_options',
        'type'               => 'option'

    ));

    $wp_customize->add_control('general_control', array(
        'label'      => "Dirección",
        'section'    => 'generales',
        'settings'   => 'evanzu[generales-image]',
        'type'=> 'textarea'
    ));


}
add_action('customize_register', 'evanzu_customize_register');

?>