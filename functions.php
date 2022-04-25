
<?php

// Incluir Bootstrap CSS
function bootstrap_css()
{
	wp_enqueue_style(
		'bootstrap_css',
		'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
		array(),
		'4.5.2'
	);
}
add_action('wp_enqueue_scripts', 'bootstrap_css');


// Incluir Bootstrap JS y dependencia popper
function enqueue_load_bootstrap() {

    // Add popper js
    wp_register_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', ['jquery'], NULL, true );
    wp_enqueue_script( 'popper-js' );

    // Add bootstrap js
    wp_register_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['jquery'], NULL, true );
    wp_enqueue_script( 'bootstrap-js' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_load_bootstrap' );


add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
}

//llamar al archivo de custimización

require_once(trailingslashit(get_template_directory()) . 'inc/customize.php');
require_once(trailingslashit(get_template_directory()) . 'inc/customize_marketing.php');
require_once(trailingslashit(get_template_directory()) . 'inc/customize_software.php');
require_once(trailingslashit(get_template_directory()) . 'inc/customize_diseño.php');
require_once(trailingslashit(get_template_directory()) . 'inc/customize_btl.php');
require_once(trailingslashit(get_template_directory()) . 'inc/customize_audio_visual.php');


/*** fin de data ****/
//clase css

add_filter('nav_menu_css_class', 'raiola_nav_class', 10, 2);

function raiola_nav_class($classes, $item)
{
	$classes[] = 'nav-link';
	return $classes;
}

// css personalizado
add_action('wp_enqueue_scripts', 'custom_enqueue_styles');

function custom_enqueue_styles()
{
	wp_enqueue_style(
		'custom-style',
		get_stylesheet_directory_uri() . '/assets/css/custom.css',
		array(),
		wp_get_theme()->get('Version')
	);
}

// Mansonry

function bps_masonry()
{
	wp_register_script('masonry-js', '//unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery'));
	wp_enqueue_script('masonry-init', get_stylesheet_directory_uri() . '/assets/js/masonry-init.js', array('masonry'), 1, true);
}

add_action('wp_enqueue_scripts', 'bps_masonry');

// NavIcons
add_action('wp_enqueue_scripts', 'bps_nav_icons');

function bps_nav_icons()
{
	wp_enqueue_script('nav-icons-init', get_stylesheet_directory_uri() . '/assets/js/navIcons-init.js', array(), 1, true);
	// wp_enqueue_script('nav-icons-init');
}



// add_action('wp_enqueue_scripts', 'tutsplus_enqueue_custom_js');
// function tutsplus_enqueue_custom_js() {
//     wp_enqueue_script('custom', get_stylesheet_directory_uri().'/scripts/custom.js');
// }

// listFooter
function list_footer_icon($icon, $href)
{
	$hrefs = empty($href) ? '' : "href = $href";
	return("<li class='text-light' style='font-size: 18px;'><i><a $hrefs class='text-light'>$icon</a></i></li>");
}




add_theme_support('post-thumbnails');
function setup_types()
{
	register_post_type('mytype', array(
		'label' => __('My type'),
		'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
		'show_ui' => true,
	));
}
add_action('init', 'setup_types');


//custom post type 
function team()
{
	$labels = array(
		'name'    => _x('Team evanzu', 'travel-booking'),
		'singular_name'  => _x('url integrante', 'travel-booking'),
		'alojamiento_name' => _x('Slider', 'travel-booking'),
		'name_admin_bar' => _x('Slider', 'travel-booking'),
		'add_new'   => _x('Añadir nuevo integrante', 'travel-booking'),
		'add_new_item'  => __('Añadir nuevo integrante', 'travel-booking'),
		'new_item'   => __('Imagenes', 'travel-booking'),
		'edit_item'   => __('Editar Imagen', 'travel-booking'),
		'view_item'   => __('Ver Imagen', 'travel-booking'),
		'all_items'   => __('Listado equipo evanzu', 'travel-booking'),
		'search_items'  => __('Buscar Imagenes', 'travel-booking'),
		'parent_item_colon' => __('Parent Intercambio', 'travel-booking'),
		'not_found'   => __('No se han encontrado intercambios de alojamiento', 'travel-booking'),
		'not_found_in_trash' => __('No se han encontrado intercambio de alojamiento en la papelera', 'travel-booking')
	);
	$args = array(
		'labels'   => $labels,
		'description'  => __('Description', 'travel-booking'),
		'public'   => true,
		'publicly_queryable' => true,
		'show_ui'   => true,
		'show_in_menu'  => true,
		'query_bar'   => true,
		'rewrite'   => array('slug' => 'Imagen'),
		'capability_type' => 'post',
		'has_archive'  => true,
		'hierarchical'  => false,
		'menu_position' => 5,
		'menu_icon'    => 'dashicons-id-alt',
		'supports'   => array('slug' => 'title', 'editor', 'thumbnail'),
		'rewrite'   => array('post_tag'),
	);
	register_post_type('team', $args);
}
add_action('init', 'team', 4);


//menu

add_action('after_setup_theme', 'raiola_registrar_menu');
function raiola_registrar_menu()
{
	register_nav_menu('menu-principal', 'Menu Principal');
}


// nuevos menus /////

if (!function_exists('marabelia_menus')) { // Register Navigation Menus
	function marabelia_menus()
	{
		$locations = array(
			'footer' => __('Menu ubicado en el footer', 'text_domain'),
			'redes-sociales' => __('links redes sociales en el footer', 'text_domain'),
			'servicios' => __('links servicios en el footer', 'text_domain'),
		);
		register_nav_menus($locations);
	}
	add_action('init', 'marabelia_menus');
}


////////formulario de envio/////


// Insertar Javascript js y enviar ruta admin-ajax.php
add_action('wp_enqueue_scripts', 'dcms_insertar_js');

function dcms_insertar_js(){
	// if (!is_home()) return;
	wp_register_script('dcms_miscript',get_stylesheet_directory_uri(). '/assets/js/script.js', array('jquery'), '1', true );
	wp_enqueue_script('dcms_miscript');
	wp_localize_script('dcms_miscript','dcms_vars',['ajaxurl'=>admin_url('admin-ajax.php')]);
}


//Devolver datos a archivo js
add_action('wp_ajax_nopriv_dcms_ajax_readmore','dcms_enviar_contenido');
add_action('wp_ajax_dcms_ajax_readmore','dcms_enviar_contenido');

function dcms_enviar_contenido()
{
	$name = $_POST['nombre'];	
    sleep(1);
	echo "<span style='color:white; font-size:2rem;'> Hola: ".$name ." en breve nos comunicaremos, gracias. <span> ";
	
	$to = "rolando@evanzu.com";
    $subject = "Evanzu contacto";

   $message = "
    <html>
    	<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th> 
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <rolando@evanzu.com>' . "\r\n";   
$correo = mail($to,$subject,$message,$headers);
if( $correo ) echo "<span style='color:white; font-size:2rem;'>  correo enviado <span> ";
else echo "<span style='color:blue; font-size:2rem;'> error<span> ";
}

?>
