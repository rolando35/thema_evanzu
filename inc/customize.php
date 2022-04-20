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



    //////galeria/////////////////////
    
    $wp_customize->add_section('home_galeria', array(
        'panel' =>'home_site',
        'priority'             => 12,
        'capability'         => 'edit_theme_options',
        'title'                => __('Galeria incio', 'd5-business-line'),
        'description'          => ''
    ));

  
    $wp_customize->add_setting('home[galleria-image-one]', array(  
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-one', array(
        'label'                => __('Imagen de galeria uno', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-one]',
        'description'       => __('Sube una imagen para la galeria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));


    $wp_customize->add_setting('home[galleria-image-two]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-two', array(
        'label'                => __('Imagen de galeria dos', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-two]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

   

    $wp_customize->add_setting('home[galleria-image-three]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-three', array(
        'label'                => __('Imagen de galeria tres', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-three]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));


    $wp_customize->add_setting('home[galleria-image-four]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-four', array(
        'label'                => __('Imagen de galeria cuatro', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-four]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));





    $wp_customize->add_setting('home[galleria-image-five]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-five', array(
        'label'                => __('Imagen de galeria cinco', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-five]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

    

    $wp_customize->add_setting('home[galleria-image-six]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-six', array(
        'label'                => __('Imagen de galeria seis', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-six]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

   
    $wp_customize->add_setting('home[galleria-image-seven]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-seven', array(
        'label'                => __('Imagen de galeria siete', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-seven]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

    $wp_customize->add_setting('home[galleria-image-eight]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-eight', array(
        'label'                => __('Imagen de galeria ocho', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-eight]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

    
    $wp_customize->add_setting('home[galleria-image-nine]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-nine', array(
        'label'                => __('Imagen de galeria nueve', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-nine]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

     
      
    $wp_customize->add_setting('home[galleria-image-teen]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-teen', array(
        'label'                => __('Imagen de galeria diez', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-teen]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));


      
    $wp_customize->add_setting('home[galleria-image-eleven]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-eleven', array(
        'label'                => __('Imagen de galeria once', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-eleven]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

    
     
    $wp_customize->add_setting('home[galleria-image-twelve]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-twelve', array(
        'label'                => __('Imagen de galeria doce', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-twelve]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

   

    $wp_customize->add_setting('home[galleria-image-thirteen]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-thirteen', array(
        'label'                => __('Imagen de galeria trece', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-thirteen]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));


    $wp_customize->add_setting('home[galleria-image-fourteen]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-fourteen', array(
        'label'                => __('Imagen de galeria catorce', ''),
        'section'              => 'home_galeria',
        'settings'             => 'home[galleria-image-fourteen]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));
   
    
    // $wp_customize->add_setting('home[galleria-image-fifteen]', array(
   
    //     'capability'        => 'edit_theme_options',
    //     'sanitize_callback' => 'esc_url',
    //     'type'               => 'option'

    // ));

    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleria-image-fifteen', array(
    //     'label'                => __('Imagen de galeria Quince', ''),
    //     'section'              => 'home_galeria',
    //     'settings'             => 'home[galleria-image-fifteen]',
    //     'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    // )));


      /*********foooter********************** */

    //   $wp_customize->add_section('generales', array(
    //     'panel' =>'home_site',
    //     'priority'             => 11,
    //     'capability'         => 'edit_theme_options',
    //     'title'                => "Campo para descripción",
    //     'description'          => ''
    // ));

    // $wp_customize->add_setting('evanzu[generales-image]', array(
    //     'default'           => get_template_directory_uri() . '/assets/images/slides/1_slider.png',
    //     'capability'        => 'edit_theme_options',
    //     'type'               => 'option'

    // ));

    // $wp_customize->add_control('general_control', array(
    //     'label'      => "Dirección",
    //     'section'    => 'generales',
    //     'settings'   => 'evanzu[generales-image]',
    //     'type'=> 'textarea'
    // ));


}
add_action('customize_register', 'evanzu_customize_register');

?>