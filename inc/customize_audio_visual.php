<?php
function customize_audio_visual_page($wp_customize)
{
  ///////////// Galeri  audio visual  //////////////

    $wp_customize -> add_panel('Page_audio',array(
        'title' => __("Edita la página de audio visual"),
        'description' => __("Puedes editar algunas secciones de la página audio visual"),
        'priority' => 16,
    ));

      $wp_customize->add_section('gallery_audio_visual', array(
        'panel' =>'Page_audio',
        'priority'             => 11,
        'capability'         => 'edit_theme_options',
        'title'                => __('Galeria', 'd5-business-line'),
        'description'          => ''
    ));
 

    $wp_customize->add_setting('audiovisual[galleri-image-one-audiovisual]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-one-audiovisual', array(
        'label'                => __('Imagen de galeria uno', ''),
        'section'              => 'gallery_audio_visual',
        'settings'             => 'audiovisual[galleri-image-one-audiovisual]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));



    $wp_customize->add_setting('audiovisual[galleri-image-two-audiovisual]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-two-audiovisual', array(
        'label'                => __('Imagen de galeria dos', ''),
        'section'              => 'gallery_audio_visual',
        'settings'             => 'audiovisual[galleri-image-two-audiovisual]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('audiovisual[galleri-image-three-audiovisual]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-three-audiovisual', array(
        'label'                => __('Imagen de galeria tres', ''),
        'section'              => 'gallery_audio_visual',
        'settings'             => 'audiovisual[galleri-image-three-audiovisual]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('audiovisual[galleri-image-four-audiovisual]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-four-audiovisual', array(
        'label'                => __('Imagen de galeria cuatro', ''),
        'section'              => 'gallery_audio_visual',
        'settings'             => 'audiovisual[galleri-image-four-audiovisual]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));


    $wp_customize->add_setting('audiovisual[galleri-image-five-audiovisual]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-five-audiovisual', array(
        'label'                => __('Imagen de galeria cinco', ''),
        'section'              => 'gallery_audio_visual',
        'settings'             => 'audiovisual[galleri-image-five-audiovisual]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('audiovisual[galleri-image-six-audiovisual]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-six-audiovisual', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'gallery_audio_visual',
        'settings'             => 'audiovisual[galleri-image-six-audiovisual]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('audiovisual[galleri-image-seven-audiovisual]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-seven-audiovisual', array(
        'label'                => __('Imagen de galeria seis', ''),
        'section'              => 'gallery_audio_visual',
        'settings'             => 'audiovisual[galleri-image-seven-audiovisual]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('audiovisual[galleri-image-eight-audiovisual]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eight-audiovisual', array(
        'label'                => __('Imagen de galeria ocho', ''),
        'section'              => 'gallery_audio_visual',
        'settings'             => 'audiovisual[galleri-image-eight-audiovisual]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
    
    $wp_customize->add_setting('audiovisual[galleri-image-nine-audiovisual]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-nine-audiovisual', array(
        'label'                => __('Imagen de galeria nueve', ''),
        'section'              => 'gallery_audio_visual',
        'settings'             => 'audiovisual[galleri-image-nine-audiovisual]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
    

}

add_action('customize_register', 'customize_audio_visual_page');

?> 