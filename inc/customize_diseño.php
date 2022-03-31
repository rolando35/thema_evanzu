<?php
function customize_diseño_grafico($wp_customize)
{
  
   $wp_customize -> add_panel('page_diseño_grafico',array(
    'title' => __('Edita la página de diseño grafico'),
    'description' => __('Puedes editar algunas secciones la página diseño gráfico','textdomain'),
    'priority' => 10,
    'capability'=> 'edit_theme_options',
));

       $wp_customize->add_section('diseño', array(
            'panel' =>'page_diseño_grafico',
            'priority'  => 11,
            'capability'  => 'edit_theme_options',
            'title'      => __('Galeria', 'textdomain'),
            'description'  => 'Ingresa los datos de la galería',
        ));

        $wp_customize->add_setting('campo_texto[uno]',array(
             'type'=> 'theme_mod',
             'capability'=>'edit_thme_options',
        ));
        $wp_customize->add_control('campo_texto',array(
            'label'=>_('Ejemplo input','textdomain'),
            'section'=>'diseño',
            'setting'=> 'campo_texto[uno]',
            'priority'=>10,
            'type'=>'text',
            
        )); 
        

}
add_action('customize_register', 'customize_diseño_grafico');
?>