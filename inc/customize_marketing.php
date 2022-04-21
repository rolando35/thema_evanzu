<?php
function customize_page_marketing($wp_customize)
{
            $wp_customize -> add_panel('PageMarqueting',array(
                'title' => __("Edita la página Marqueting digital"),
                'description' => __("Puedes editar algunas secciones la página Marketing digital"),
                'priority' => 12,
            ));


                $wp_customize->add_section('evanzu_marqueting', array(
                    'panel' =>'PageMarqueting',
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

                    /////Galeria/////////

                       
    $wp_customize->add_section('marketing_galeria', array(
        'panel' =>'PageMarqueting',
        'priority'             => 11,
        'capability'         => 'edit_theme_options',
        'title'                => __('Galeria', 'd5-business-line'),
        'description'          => ''
    ));
 

    $wp_customize->add_setting('marketing_page[galleri-image-one]', array(
    
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-one', array(
        'label'                => __('Imagen de galeria uno', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing_page[galleri-image-one]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));


    $wp_customize->add_setting('marketing_page[galleri-image-two]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-two', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing_page[galleri-image-two]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

   

    $wp_customize->add_setting('marketing_page[galleri-image-three]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-three', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing_page[galleri-image-three]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));


    $wp_customize->add_setting('marketing_page[galleri-image-four_new]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-four_new', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing_page[galleri-image-four_new]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));





    $wp_customize->add_setting('marketing_page[galleri-image-five]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-five', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing_page[galleri-image-five]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

    

    $wp_customize->add_setting('marketing_page[galleri-image-six]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-six', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing_page[galleri-image-six]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

   
    $wp_customize->add_setting('marketing_page[galleri-image-seven]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-seven', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing_page[galleri-image-seven]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

    $wp_customize->add_setting('marketing_page[galleri-image-eight]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-eight', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing_page[galleri-image-eight]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

    
    $wp_customize->add_setting('marketing_page[galleri-image-nine]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-nine', array(
        'label'                => __('Imagen de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing_page[galleri-image-nine]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')

    )));

     
      
    $wp_customize->add_setting('marketing_page[galleri-image-teen]', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'type'               => 'option'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galleri-image-teen', array(
        'label'                => __('Base imagén de galeria', ''),
        'section'              => 'marketing_galeria',
        'settings'             => 'marketing_page[galleri-image-teen]',
        'description'       => __('Sube una imagen para la geleria de la página de incio. Se recomienda una imagen de 2000px X 900px', '')
    )));
  
}
add_action('customize_register', 'customize_page_marketing');

?>