<?php
function software_development_customize($wp_customize)
{
   $wp_customize -> add_panel('page_software_development',array(
    'title' => __('Edita la página de desarrollo y software'),
    'description' => __('Puedes editar algunas secciones de la página desarrollo & software'),
    'priority' => 19,
));


        $wp_customize->add_setting('campo_texto_development[uno]',array(
             'type'=> 'theme_mod',
             'capability'=>'edit_theme_options',
        ));
        $wp_customize->add_control('campo_texto',array(
            'label'=>_('Ejemplo input','textdomain'),
            'section'=>'software_development',
            'setting'=> 'campo_texto_development[uno]',
            'priority'=>17,
            'type'=>'option',     
        ));                            

//        $wp_customize->add_section('software_development', array(
//             'panel' =>'page_software_development',
//             'priority'  => 19,
//             'capability'  => 'edit_theme_options',
//             'title'      => __('Galeria', 'textdomain'),
//             'description'  => 'Ingresa los datos de la galería',
//         ));

//         $wp_customize->add_setting('campo_texto_development[uno_texto_development]',array(
//              'type'=> 'theme_mod',
//              'capability'=>'edit_theme_options',
//         ));
//         $wp_customize->add_control('campo_texto',array(
//             'label'=>_('Ejemplo input','textdomain'),
//             'section'=>'software_development',
//             'setting'=> 'campo_texto_development[uno_texto_development]',
//             'priority'=>19,
//             'type'=>'option',     
//         ));                            

// }
// add_action('customize_register', 'software_development_customize');
?>