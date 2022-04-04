<?php
function customize_marketing($wp_customize)
{
  
            $wp_customize -> add_panel('Page_marqueting',array(
                'title' => __("Edita la página Marqueting digital"),
                'description' => __("Puedes editar algunas secciones la página Marketing digital"),
                'priority' => 12,
            ));


                $wp_customize->add_section('evanzu_marqueting', array(
                    'panel' =>'Page_marqueting',
                    'priority'             => 11,
                    'capability'         => 'edit_theme_options',
                    'title'                => __('Carrusel', 'd5-business-line'),
                    'description'          => ''
                ));

                        $wp_customize->add_setting('evanzu[carrusell-image-one]', array(
                            'default'           => get_template_directory_uri() . '/assets/images/home/dto.png',
                            'capability'        => 'edit_theme_options',
                            'sanitize_callback' => 'esc_url',
                            'type'               => 'option'

                        ));

                        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carrusell-image-one', array(
                            'label'                => __('Imagen de slider', ''),
                            'section'              => 'evanzu_marqueting',
                            'settings'             => 'evanzu[carrusell-image-one]',
                            'description'       => __('Sube una imagen para el slider de la página marequeting digital', '')

                        )));
    
 

                    $wp_customize->add_setting('evanzu[carrusell-image-two]', array(
                        'default'           => get_template_directory_uri() . '/assets/images/home/dto.png',
                        'capability'        => 'edit_theme_options',
                        'sanitize_callback' => 'esc_url',
                        'type'               => 'option'

                    ));

                    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carrusell-image-two', array(
                        'label'                => __('Imagen de slider', ''),
                        'section'              => 'evanzu_marqueting',
                        'settings'             => 'evanzu[carrusell-image-two]',
                        'description'       => __('Sube una imagen para el slider de la página marequeting digital', '')

                    )));

                    ///////Galeria/////////

                       
        $wp_customize->add_section('marketing_galeria', array(
        'panel' =>'Page_marqueting',
        'priority'             => 11,
        'capability'         => 'edit_theme_options',
        'title'                => __('Galeria', 'd5-business-line'),
        'description'          => ''
    ));
 

    $wp_customize->add_setting('marketing[galleri-image-one]', array(
    
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-one', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing[galleri-image-one]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));


    $wp_customize->add_setting('marketing[galleri-image-two]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-two', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing[galleri-image-two]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

   

    $wp_customize->add_setting('marketing[galleri-image-three]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-three', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing[galleri-image-three]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));


    $wp_customize->add_setting('marketing[galleri-image-four_new]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-four_new', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing[galleri-image-four_new]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));





    $wp_customize->add_setting('marketing[galleri-image-five]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-five', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing[galleri-image-five]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

    

    $wp_customize->add_setting('marketing[galleri-image-six]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-six', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing[galleri-image-six]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

   
    $wp_customize->add_setting('marketing[galleri-image-seven]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-seven', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing[galleri-image-seven]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

    $wp_customize->add_setting('marketing[galleri-image-eight]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eight', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing[galleri-image-eight]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

    
    $wp_customize->add_setting('marketing[galleri-image-nine]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-nine', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing[galleri-image-nine]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

     
      
    $wp_customize->add_setting('marketing[galleri-image-teen]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-teen', array(
        'label'                => __('Base imagén de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing[galleri-image-teen]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));


    /////////Galeria Branding/////////////

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

<<<<<<< HEAD
=======
    /////////////// Galeri  software qdevelopement  //////////////
      
    $wp_customize -> add_panel('Page_desarrollo',array(
        'title' => __("Edita la página Desarrollo de Software"),
        'description' => __("Puedes editar algunas secciones la página diseño grafico"),
        'priority' => 15,
    ));
>>>>>>> 930ff99a9203c8221fe5f7451fa04497c5266319

    /////////////branding galer hover ///////////


    $wp_customize->add_section('branding_galeria_hover', array(
        'panel' =>'Page_branding',
        'priority'             => 15,
        'capability'         => 'edit_theme_options',
        'title'                => __('Galeria hover', 'd5-business-line'),
        'description'          => ''
    ));
 

    $wp_customize->add_setting('branding_hover[galleri-image-one-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-one-hover', array(
        'label'                => __('Imagen de galeria uno', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-one-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));


    $wp_customize->add_setting('branding_hover[galleri-image-two-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-two-hover', array(
        'label'                => __('Imagen de galeria dos', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-two-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('branding_hover[galleri-image-three-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-three-hover', array(
        'label'                => __('Imagen de galeria Tres', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-three-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('branding_hover[galleri-image-four-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-four-hover', array(
        'label'                => __('Imagen de galeria cuatro', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-four-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));


    $wp_customize->add_setting('branding_hover[galleri-image-five-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-five-hover', array(
        'label'                => __('Imagen de galeria cinco' , ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-five-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

     $wp_customize->add_setting('branding_hover[galleri-image-six-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-six-hover', array(
        'label'                => __('Imagen de galeria seis', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-six-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('branding_hover[galleri-image-seven-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-seven-hover', array(
        'label'                => __('Imagen de galeria siete', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-seven-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('branding_hover[galleri-image-eight-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eight-hover', array(
        'label'                => __('Imagen de galeria ocho', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-eight-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
    
     $wp_customize->add_setting('branding_hover[galleri-image-nine-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-nine-hover', array(
        'label'                => __('Imagen de galeria nueve', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-nine-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
   

     $wp_customize->add_setting('branding_hover[galleri-image-teens-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-teens-hover', array(
        'label'                => __('Imagen de galeria teens', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-teens-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));



    $wp_customize->add_setting('branding_hover[galleri-image-eleven-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eleven-hover', array(
        'label'                => __('Imagen de galeria once', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-eleven-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

$wp_customize->add_setting('branding_hover[galleri-image-twelve-hover]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-twelve-hover', array(
        'label'                => __('Imagen de galeria doce', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-twelve-hover]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));


    
    /////////////// Galeri  software qdevelopement  //////////////

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
add_action('customize_register', 'customize_marketing');




?>