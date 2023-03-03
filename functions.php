
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
add_action('wp_ajax_nopriv_postulate','dcms_enviar_postulacion');
add_action('wp_ajax_postulate','dcms_enviar_postulacion');
add_action('wp_ajax_nopriv_cotization','dcms_enviar_cotization');
add_action('wp_ajax_cotization','dcms_enviar_cotization');

function dcms_enviar_contenido()
{
	$name = sanitize_text_field($_POST['nombre']);	
	$correo = sanitize_email ($_POST['correo']);	
	$telefono = sanitize_text_field($_POST['telefono']);	
	$empresa = sanitize_text_field($_POST['empresa']);
	$servicio = $_POST['servicio'];	
	$subservicio = $_POST['subservicio'];	
	$direccion =sanitize_text_field($_POST['direccion']);	
	$mensaje = sanitize_textarea_field($_POST['mensaje']);	

	// var_dump($_POST);
   # sleep(1);
	echo "<span style='color:white; font-size:1.5rem;'> Hola ".$name.", en breve nos contactaremos contigo, ¡gracias! </span> ";
	
   $to = "rolando@evanzu.com,ruth@evanzu.com";
   $subject = "Evanzu contacto";
   $message = "
    <html>
    	<head>
		<title>Email de contactanos EVANZU</title>
		</head>
		<body>
		<p>Contenido de formulario cotización</p>
		<table>
		<tr>
		<th>Nombre: ".$name."</th>
		<th>Correo: ".$correo."</th>
		</tr>
		<tr>
		<th>Telefono: ".$telefono."</th>
		<th>Empresa: ".$empresa."</th>
		</tr>
		<tr>
		<th>Servicio: ".$servicio."</th>
		<th>Sub servicio: ".$subservicio."</th>
		</tr>
		<tr>
		<th>Direccion: ".$direccion."</th>
		</tr>
		<tr>
		<th COLSPAN='2'>Mensaje: ".$mensaje."</th>
		</tr>
		</table>
		</body>
		</html>
";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <evanzu.com>' . "\r\n";   
	$send_form = mail($to,$subject,$message,$headers);
	if( $send_form  ){
		echo "<span class='text-red' style='font-size:2rem;'>  correo enviado <span> ";
		 global $wpdb;
				$wpdb->insert( 
					'ev_formulario_cotizacion', 
					array( 
						'nombre' => $name, 
						'email' => $correo, 
						'mensaje' => $mensaje,
						'empresa' => $empresa,
					    'servicio' => $servicio,
						'subservicio' => $subservicio,
						'direccion' => $direccion,
						'telefono' => $telefono
					), 
					array( 
						'%s', 
						'%s', 
						'%s',
						'%s', 
						'%s', 
						'%s',
						'%s', 
						'%s' 
					) 
			);
               
        $response_client = "<span style='font-size:1.5rem;'> Hola ".$name." en breve nos contactaremos contigo, ¡gracias!. </span> ";
		mail($correo,$subject,$response_client,$headers); 
	}else{echo "<span style='color:blue; font-size:12rem;'> error<span> ";} 
}

function dcms_enviar_postulacion()
{
	$fullname = $_POST['fullname'];
	$profile = $_POST['profile'];	
	$phone = $_POST['phone'];	
	$file = $_POST['file'];	
	$message = $_POST['message'];
  sleep(1);
	echo "<span style='color:white; font-size:1.5rem;'> Hola ".$fullname." en breve nos contactaremos contigo, ¡gracias!. </span> ";
	
	$to = "rolando@evanzu.com,ruth@evanzu.com";
    $subject = "Evanzu contacto";

   $message = "
    <html>
    	<head>
		<title>Email de contactanos EVANZU</title>
		</head>
		<body>
		<p>Contenido del Email</p>
		<table>
		<tr>
		<th>Nombre Completo: ".$fullname."</th>
		<th>Perfil: ".$profile."</th>
		<th>telefono:".$phone."</th>
		<th>CV:".$file."</th>
		<th>mensaje:".$message."</th>
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
	if( $correo ) echo "<span style='color: transparent; font-size:2rem;'>  correo enviado <span> ";
	// else echo "<span style='color:blue; font-size:2rem;'> error<span> ";
}

function dcms_enviar_cotization()
{
	$website = $_POST['website'];
	$email = $_POST['email'];
	$service = $_POST['service'];
	$subservice = $_POST['subService'];

	echo "<div style='color:white; font-size:1.5rem;'> En breve nos contactaremos contigo. ¡Gracias! </div> ";
	
	$to = "rolando@evanzu.com,ruth@evanzu.com";
    $subject = "Evanzu contacto";

   $message = "
    <html>
    	<head>
		<title>Email de contactanos EVANZU</title>
		</head>
		<body>
		<p>Contenido del Email</p>
		<table>
		<tr>
		 <th>Sitio Web: ".$service."</th>
		 <th> > </th>
		 <th>Correo: ".$subservice."</th>
		</tr>
		<tr>
		  <th>Sitio Web: ".$website."</th>
		</tr>
		<tr>
		  <th>Correo: ".$email."</th>
		</tr>
		</table>
		</body>
		</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <Evanzu>' . "\r\n";   
$correo = mail($to,$subject,$message,$headers);
if( $correo ){
	mail($email,$subject,'Hola nos contactado con ustedes',$headers); 
} 
 else echo "<span style='color:red; font-size:2rem;'> Error correo no enviado <span> ";
}

//////////// add action class menu/////
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
//////////get alt and title with the name edit image"/////////

add_action( 'add_attachment', 'dgv_imagenes_meta' );
function dgv_imagenes_meta( $post_ID ) {

	// Comprobar si el archivo subido es una imagen

	if ( wp_attachment_is_image( $post_ID ) ) {

		$my_image_title = get_post( $post_ID )->post_title;

		// Limpiar título: quitar guiones, barras bajas, espacios, etc:
		$my_image_title = preg_replace( '%\s*[-_\s]+\s*%', ' ',  $my_image_title );

		// Capitalizar la primera letra de cada palabra (eliminar o comentar la líne de debajo si no queremos esa función):
		$my_image_title = ucwords( strtolower( $my_image_title ) );

		// Crear un array con las meta etiquetas de la imagen (Título, Descripción y Leyenda)
		// Nota: comenta o descomenta las líneas que no necesites
		$my_image_meta = array(
			'ID'		=> $post_ID,
			'post_title'	=> $my_image_title,		// Aplicamos los cambios definidos para limpiar el título
			//'post_excerpt'	=> $my_image_title,		// Aplicamos el título en el campo de leyenda
			//'post_content'	=> $my_image_title,		// Aplicamos el título en el campo de descripción
		);

		// Definimos el título en la etiqueta Alt
		update_post_meta( $post_ID, '_wp_attachment_image_alt', $my_image_title );

		// Definimos el título en las etiquetas Title, Excerpt, Content.
		wp_update_post( $my_image_meta );
	}
}


add_action( 'category_add_form_fields', 'add_category_image', 10, 2 );
function add_category_image ( $taxonomy ) {
?>
    <div class="form-field term-group">

        <label for="image_id"><?php _e('Imagen categoría', 'taxt-domain'); ?></label>
        <input type="hidden" id="image_id" name="image_id" class="custom_media_url" value="">

        <div id="image_wrapper"></div>

        <p>
            <input type="button" class="button button-secondary taxonomy_media_button" id="taxonomy_media_button" name="taxonomy_media_button" value="<?php _e( 'Agregar Imagenes', 'taxt-domain' ); ?>">
            <input type="button" class="button button-secondary taxonomy_media_remove" id="taxonomy_media_remove" name="taxonomy_media_remove" value="<?php _e( 'Eliminar Imagenes', 'taxt-domain' ); ?>">
        </p>

    </div>
<?php
}

add_action( 'created_category', 'save_category_image', 10, 2 );
function save_category_image ( $term_id, $tt_id ) {
    if( isset( $_POST['image_id'] ) && '' !== $_POST['image_id'] ){
     $image = $_POST['image_id'];
     add_term_meta( $term_id, 'category_image_id', $image, true );
    }
}


add_action( 'category_edit_form_fields', 'update_category_image', 10, 2 );
function update_category_image ( $term, $taxonomy ) { ?>
    <tr class="form-field term-group-wrap">
        <th scope="row">
            <label for="image_id"><?php _e( 'Image', 'taxt-domain' ); ?></label>
        </th>
        <td>

            <?php $image_id = get_term_meta ( $term -> term_id, 'image_id', true ); ?>
            <input type="hidden" id="image_id" name="image_id" value="<?php echo $image_id; ?>">

            <div id="image_wrapper">
            <?php if ( $image_id ) { ?>
               <?php echo wp_get_attachment_image ( $image_id, 'thumbnail' ); ?>
            <?php } ?>

            </div>

            <p>
                <input type="button" class="button button-secondary taxonomy_media_button" id="taxonomy_media_button" name="taxonomy_media_button" value="<?php _e( 'Add Image', 'taxt-domain' ); ?>">
                <input type="button" class="button button-secondary taxonomy_media_remove" id="taxonomy_media_remove" name="taxonomy_media_remove" value="<?php _e( 'Remove Image', 'taxt-domain' ); ?>">
            </p>

        </div></td>
    </tr>
<?php
}

add_action( 'edited_category', 'updated_category_image', 10, 2 );
function updated_category_image ( $term_id, $tt_id ) {
    if( isset( $_POST['image_id'] ) && '' !== $_POST['image_id'] ){
        $image = $_POST['image_id'];
        update_term_meta ( $term_id, 'image_id', $image );
    } else {
        update_term_meta ( $term_id, 'image_id', '' );
    }
}

add_action( 'admin_enqueue_scripts', 'load_media' );
function load_media() {
    wp_enqueue_media();
}

add_action( 'admin_footer', 'add_custom_script' );
function add_custom_script() {
    ?> <script>jQuery(document).ready( function($) {
            function taxonomy_media_upload(button_class) {
                var custom_media = true,
                original_attachment = wp.media.editor.send.attachment;
                $('body').on('click', button_class, function(e) {
                    var button_id = '#'+$(this).attr('id');
                    var send_attachment = wp.media.editor.send.attachment;
                    var button = $(button_id);
                    custom_media = true;
                    wp.media.editor.send.attachment = function(props, attachment){
                        if ( custom_media ) {
                            $('#image_id').val(attachment.id);
                            $('#image_wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
                            $('#image_wrapper .custom_media_image').attr('src',attachment.url).css('display','block');
                        } else {
                            return original_attachment.apply( button_id, [props, attachment] );
                        }
                    }
                    wp.media.editor.open(button);
                    return false;
                });
            }
            taxonomy_media_upload('.taxonomy_media_button.button'); 
            $('body').on('click','.taxonomy_media_remove',function(){
                $('#image_id').val('');
                $('#image_wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
            });

            $(document).ajaxComplete(function(event, xhr, settings) {
                var queryStringArr = settings.data.split('&');
                if( $.inArray('action=add-tag', queryStringArr) !== -1 ){
                    var xml = xhr.responseXML;
                    $response = $(xml).find('term_id').text();
                    if($response!=""){
                        $('#image_wrapper').html('');
                    }
                }
            });
        });</script> <?php 
}

add_action( 'manage_category_custom_column', 'display_image_column_value' , 10, 3); 
function display_image_column_value( $columns, $column, $id ) {
    if ( 'category_image' == $column ) {
    	$image_id = esc_html( get_term_meta($id, 'image_id', true) );
    	
        $columns = wp_get_attachment_image ( $image_id, array('50', '50') );
    }
    return $columns;
}

$image_id = get_term_meta ( $term_id, 'image_id', true );
echo wp_get_attachment_image ( $image_id, 'full' );

add_action( 'admin_menu', 'formulario_contacto_menu' );

function formulario_contacto_menu() {
    add_menu_page( 'Formulario de cotizacion', 'Formulario de cotización', 'manage_options', 'formulario-contacto', 'formulario_contacto_pagina' );
}
 
function formulario_contacto_pagina() {
    global $wpdb;
	
	  $registros = $wpdb->get_results( "SELECT * FROM ev_formulario_cotizacion" );
	//    echo "Registro #1. Nombre: " . $registros[0]->nombre . ", Email: " . $registros[0]->email . "<br/>";
    echo '<h1 class="wp-heading-inline">Contenido Formulario</h1>
                     <div style="margin: 10px 20px;">';
   	echo  $result = '';
		foreach ($registros as $item) {
			$result .= '<tr>
				<td class="title column-title has-row-actions column-primary page-title">'.$item->id.'</td>
				<td>'.$item->nombre.'</td>
				<td>'.$item->email.'</td>
				<td>'.$item->empresa.'</td>
				<td>'.$item->telefono.'</td>
				<td>'.$item->mensaje.'</td>
				<td>'.$item->servicio.'</td>
				<td>'.$item->subservicio.'</td>
				<td>'.$item->direccion.'</td>
				<td>'.$item->fecha.'</td>
			</tr>';
		}

		echo $template = '<table  class="wp-list-table widefat fixed striped table-view-list pages">
					<thead>
		             <tr class="iedit author-self level-0  type-page status-publish hentry">
			            <th scope="col" class="manage-column">ID</th>
			            <th scope="col" class="manage-column">Nombre</th>
						<th scope="col" class="manage-column">Correo</th>
						<th scope="col" class="manage-column">Empresa</th>
						<th scope="col" class="manage-column">Telefono</th>
						<th scope="col" class="manage-column">Mensaje</th>
						<th scope="col" class="manage-column">Servicio</th>
						<th scope="col" class="manage-column">Sub Servicio</th>
						<th scope="col" class="manage-column">Dirección</th>
						<th scope="col" class="manage-column">Fecha</th>
					  </tr>
					</thead>
					<tbody>
					 '.$result.'
					 </tbody>
			        </table> </div>';
  
}
?>

