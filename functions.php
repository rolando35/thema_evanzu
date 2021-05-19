
<?php

// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', 
  					array(), 
  					'4.5.2'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');


// Incluir Bootstrap JS y dependencia popper
function bootstrap_js() {
	wp_enqueue_script( 'popper_js', 
  					'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', 
  					array(), 
  					'1.16.0', 
  					true); 
	wp_enqueue_script( 'bootstrap_js', 
  					'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', 
  					array('jquery','popper_js'), 
  					'4.5.2', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');


//llamar al archivo de custimización
require_once(trailingslashit(get_template_directory()) . 'inc/customize.php');


//menu

add_action( 'after_setup_theme', 'raiola_registrar_menu' );
function raiola_registrar_menu() {
    register_nav_menu( 'menu-principal', 'Menu Principal' );
}

//clase css

add_filter('nav_menu_css_class' , 'raiola_nav_class' , 10 , 2);
 
function raiola_nav_class($classes, $item){
    $classes[] = 'nav-link';
    return $classes;
}

// css personalizado
add_action( 'wp_enqueue_scripts', 'custom_enqueue_styles');

function custom_enqueue_styles() {
	wp_enqueue_style( 'custom-style', 
					  get_stylesheet_directory_uri() . '/assets/css/custom.css', 
					  array(), 
					  wp_get_theme()->get('Version')
					);
}

// Mansonry

function bps_masonry () {
	wp_enqueue_script('masonry-js', '//unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery'));
	wp_enqueue_script('masonry-init', get_stylesheet_directory_uri() . '/assets/js/masonry-init.js', array('masonry'), 1, true); 
	}
	
	add_action( 'wp_enqueue_scripts', 'bps_masonry' );

	add_theme_support('post-thumbnails');
	function setup_types() {
		register_post_type('mytype', array(
			'label' => __('My type'),
			'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
			'show_ui' => true,
		));
	}
	add_action('init', 'setup_types');


//custom post type 
	function team() {
		$labels= array(
			'name'    =>_x('Team evanzu', 'travel-booking'),
			'singular_name'  =>_x('url integrante', 'travel-booking'),
			'alojamiento_name' =>_x('Slider', 'travel-booking'),
			'name_admin_bar' =>_x('Slider', 'travel-booking'),
			'add_new'   =>_x('Añadir nuevo integrante', 'travel-booking'),
			'add_new_item'  =>__('Añadir nuevo integrante', 'travel-booking'),
			'new_item'   =>__('Imagenes', 'travel-booking'),
			'edit_item'   =>__('Editar Imagen', 'travel-booking'),
			'view_item'   =>__('Ver Imagen', 'travel-booking'),
			'all_items'   =>__('Listado equipo evanzu', 'travel-booking'),
			'search_items'  =>__('Buscar Imagenes', 'travel-booking'),
			'parent_item_colon' =>__('Parent Intercambio', 'travel-booking'),
			'not_found'   =>__('No se han encontrado intercambios de alojamiento', 'travel-booking'),
			'not_found_in_trash'=>__('No se han encontrado intercambio de alojamiento en la papelera', 'travel-booking')
		   );
			 $args= array(
			'labels'   =>$labels,
			'description'  =>__('Description','travel-booking'),
			'public'   =>true,
			'publicly_queryable' =>true,
			'show_ui'   =>true,
			'show_in_menu'  =>true,
			'query_bar'   =>true,
			'rewrite'   =>array('slug' =>'Imagen'),
			'capability_type' =>'post',
			'has_archive'  =>true,
			'hierarchical'  =>false,
			'menu_position' =>5,
			'menu_icon'    => 'dashicons-id-alt',
			'supports'   =>array('slug' =>'title','editor','thumbnail'),
			'rewrite'   =>array( 'post_tag'),
		   );
		register_post_type('team',$args );
	}
	add_action('init', 'team',4);
	
	// nuevos menus /////

	if ( ! function_exists( 'marabelia_menus' ) ) {// Register Navigation Menus
		function marabelia_menus() {$locations = array(
		'footer' => __( 'Menu ubicado en footer', 'text_domain' ),
		'topbar' => __( 'menu ubicado en topbar', 'text_domain' ),);
		register_nav_menus( $locations );}add_action( 'init', 'marabelia_menus' );}
?>
