 <?php
function customize_btl_page($wp_customize)
{
  ///////////// Galeri  software qdevelopement  //////////////

$wp_customize -> add_panel('Page_btl',array(
        'title' => __("Edita la página btl de Software"),
        'description' => __("Puedes editar algunas secciones la página diseño grafico"),
        'priority' => 15,
    ));

      $wp_customize->add_section('desarrollo_btl', array(
        'panel' =>'Page_btl',
        'priority'             => 11,
        'capability'         => 'edit_theme_options',
        'title'                => __('Galeria', 'd5-business-line'),
        'description'          => ''
    ));
 

    $wp_customize->add_setting('btl[galleri-image-one-btl]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-one-btl', array(
        'label'                => __('Imagen de galeria uno', ''),
        'section'              => 'desarrollo_btl',
        'settings'             => 'btl[galleri-image-one-btl]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));



    $wp_customize->add_setting('btl[galleri-image-two-btl]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-two-btl', array(
        'label'                => __('Imagen de galeria dos', ''),
        'section'              => 'desarrollo_btl',
        'settings'             => 'btl[galleri-image-two-btl]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('btl[galleri-image-three-btl]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-three-btl', array(
        'label'                => __('Imagen de galeria tres', ''),
        'section'              => 'desarrollo_btl',
        'settings'             => 'btl[galleri-image-three-btl]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('btl[galleri-image-four-btl]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-four-btl', array(
        'label'                => __('Imagen de galeria cuatro', ''),
        'section'              => 'desarrollo_btl',
        'settings'             => 'btl[galleri-image-four-btl]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));


    $wp_customize->add_setting('btl[galleri-image-five-btl]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-five-btl', array(
        'label'                => __('Imagen de galeria cinco', ''),
        'section'              => 'desarrollo_btl',
        'settings'             => 'btl[galleri-image-five-btl]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

     $wp_customize->add_setting('btl[galleri-image-six-btl]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-six-btl', array(
        'label'                => __('Imagen de galeria seis', ''),
        'section'              => 'desarrollo_btl',
        'settings'             => 'btl[galleri-image-six-btl]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('btl[galleri-image-seven-btl]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-seven-btl', array(
        'label'                => __('Imagen de galeria siete', ''),
        'section'              => 'desarrollo_btl',
        'settings'             => 'btl[galleri-image-seven-btl]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('btl[galleri-image-eight-btl]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eight-btl', array(
        'label'                => __('Imagen de galeria ocho', ''),
        'section'              => 'desarrollo_btl',
        'settings'             => 'btl[galleri-image-eight-btl]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
    
    $wp_customize->add_setting('btl[galleri-image-nine-btl]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-nine-btl', array(
        'label'                => __('Imagen de galeria nueve', ''),
        'section'              => 'desarrollo_btl',
        'settings'             => 'btl[galleri-image-nine-btl]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('btl[galleri-image-ten-btl]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-ten-btl', array(
        'label'                => __('Imagen de galeria diez', ''),
        'section'              => 'desarrollo_btl',
        'settings'             => 'btl[galleri-image-ten-btl]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
    

}

add_action('customize_register', 'customize_btl_page');

?> 