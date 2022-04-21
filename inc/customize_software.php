 <?php
function customize_software_page($wp_customize)
{
  ///////////// Galeri  software qdevelopement  //////////////

$wp_customize -> add_panel('Page_desarrollo',array(
        'title' => __("Edita la página Desarrollo de Software"),
        'description' => __("Puedes editar algunas secciones la página diseño grafico"),
        'priority' => 15,
    ));

      $wp_customize->add_section('desarrollo_galeria', array(
        'panel' =>'Page_desarrollo',
        'priority'             => 11,
        'capability'         => 'edit_theme_options',
        'title'                => __('Galeria', 'd5-business-line'),
        'description'          => ''
    ));
 

    $wp_customize->add_setting('desarrollo[galleri-image-one-dev]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-one-dev', array(
        'label'                => __('Imagen de galeria uno', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-one-dev]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));



    $wp_customize->add_setting('desarrollo[galleri-image-two-dev]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-two-dev', array(
        'label'                => __('Imagen de galeria dos', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-two-dev]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('desarrollo[galleri-image-three-dev]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-three-dev', array(
        'label'                => __('Imagen de galeria tres', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-three-dev]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('desarrollo[galleri-image-four-dev]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-four-dev', array(
        'label'                => __('Imagen de galeria cuatro', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-four-dev]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));


    $wp_customize->add_setting('desarrollo[galleri-image-five-dev]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-five-dev', array(
        'label'                => __('Imagen de galeria cinco', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-five-dev]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

     $wp_customize->add_setting('desarrollo[galleri-image-six-dev]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-six-dev', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-six-dev]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('desarrollo[galleri-image-seven-dev]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-seven-dev', array(
        'label'                => __('Imagen de galeria seis', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-seven-dev]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('desarrollo[galleri-image-eight-dev]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eight-dev', array(
        'label'                => __('Imagen de galeria ocho', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-eight-dev]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
    
     $wp_customize->add_setting('desarrollo[galleri-image-nine-a-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-nine-a-hover', array(
        'label'                => __('Imagen de galeria A', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-nine-a-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
   


     $wp_customize->add_setting('desarrollo[galleri-image-nine-b-dev]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-nine-b-dev', array(
        'label'                => __('Imagen de galeria B', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-nine-b-dev]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));




    $wp_customize->add_setting('desarrollo[galleri-image-teen-dev]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-teen-dev', array(
        'label'                => __('Imagen de galeria dies', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-teen-dev]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
   

    $wp_customize->add_setting('desarrollo[galleri-image-eleven-dev]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eleven-dev', array(
        'label'                => __('Imagen de galeria once', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-eleven-dev]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));


     $wp_customize->add_setting('desarrollo[galleri-image-twelve-dev]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-twelve-dev', array(
        'label'                => __('Imagen de galeria doce', ''),
        'section'              => 'desarrollo_galeria',
        'settings'             => 'desarrollo[galleri-image-twelve-dev]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

}

add_action('customize_register', 'customize_software_page');

?> 