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

    /////////////// Galeri  software qdevelopement  //////////////
      
    $wp_customize -> add_panel('Page_desarrollo',array(
        'title' => __("Edita la página Desarrollo de Software"),
        'description' => __("Puedes editar algunas secciones la página diseño grafico"),
        'priority' => 15,
    ));

    /////////////branding galer hover ///////////


    $wp_customize->add_section('branding_galeria_hover', array(
        'panel' =>'Page_branding',
        'priority'             => 15,
        'capability'         => 'edit_theme_options',
        'title'                => __('Galeria hover', 'd5-business-line'),
        'description'          => ''
    ));
 

    $wp_customize->add_setting('branding_hover[galleri-image-one]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-one', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-one]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));



    $wp_customize->add_setting('branding_hover[galleri-image-two]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-two', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-two]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('branding_hover[galleri-image-three]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-three', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-three]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('branding_hover[galleri-image-four]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-four', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-four]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));


    $wp_customize->add_setting('branding_hover[galleri-image-five]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-five', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-five]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

     $wp_customize->add_setting('branding_hover[galleri-image-six]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-six', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-six]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('branding_hover[galleri-image-seven]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-seven', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-seven]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

    $wp_customize->add_setting('branding_hover[galleri-image-eight]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eight', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-eight]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
    
     $wp_customize->add_setting('branding_hover[galleri-image-nine]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-nine', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-nine]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
   

      $wp_customize->add_setting('branding_hover[galleri-image-teen]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-teen', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-teen]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
   

    $wp_customize->add_setting('branding_hover[galleri-image-eleven]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eleven', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-eleven]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));


     $wp_customize->add_setting('branding_hover[galleri-image-last]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-last', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'branding_galeria_hover',
        'settings'             => 'branding_hover[galleri-image-twelve]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));

}
add_action('customize_register', 'customize_marketing');

?>