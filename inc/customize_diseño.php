<?php

function customize_diseño_page($wp_customize){

   $wp_customize -> add_panel('Page_branding',array(
        'title' => __("Edita la página Diseño grafico"),
        'description' => __("Puedes editar algunas secciones la página diseño grafico"),
        'priority' => 12,
    ));

      $wp_customize->add_section('branding_galeria', array(
        'panel' =>'Page_branding',
        'priority'             => 11,
        'capability'         => 'edit_theme_options',
        'title'                => __('Galeria', 'd5-business-line'),
        'description'          => ''
    ));
 

    $wp_customize->add_setting('branding[galleri-image-one]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-one', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria',
        'settings'             => 'branding[galleri-image-one]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));



    $wp_customize->add_setting('branding[galleri-image-two]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-two', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria',
        'settings'             => 'branding[galleri-image-two]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('branding[galleri-image-three]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-three', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria',
        'settings'             => 'branding[galleri-image-three]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('branding[galleri-image-four]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-four', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria',
        'settings'             => 'branding[galleri-image-four]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));


    $wp_customize->add_setting('branding[galleri-image-five]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-five', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria',
        'settings'             => 'branding[galleri-image-five]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

     $wp_customize->add_setting('branding[galleri-image-six]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-six', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria',
        'settings'             => 'branding[galleri-image-six]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('branding[galleri-image-seven]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-seven', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria',
        'settings'             => 'branding[galleri-image-seven]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('branding[galleri-image-eight]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eight', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria',
        'settings'             => 'branding[galleri-image-eight]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
    
     $wp_customize->add_setting('branding[galleri-image-nine]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-nine', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria',
        'settings'             => 'branding[galleri-image-nine]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
   

      $wp_customize->add_setting('branding[galleri-image-teen]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-teen', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria',
        'settings'             => 'branding[galleri-image-teen]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
   

    $wp_customize->add_setting('branding[galleri-image-eleven]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eleven', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria',
        'settings'             => 'branding[galleri-image-eleven]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));


     $wp_customize->add_setting('branding[galleri-image-twelve]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-twelve', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria',
        'settings'             => 'branding[galleri-image-twelve]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
   
}
add_action('customize_register', 'customize_diseño_page');

?> 