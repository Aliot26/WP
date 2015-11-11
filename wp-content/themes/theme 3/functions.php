<?php
/**
*loadable scripts and styles
*/
function load_style_script(){
	wp_enqueue_script('jquery_my', get_template_directory_uri() . '/js/jquery-1.8.min.js');
	wp_enqueue_script('jquery_lislidik', get_template_directory_uri() . '/js/jquery.liSlidik.js');
	wp_enqueue_script('jquery_my2', get_template_directory_uri() . '/js/jquery-1.8.3.js');
	wp_enqueue_script('jquery_ui', get_template_directory_uri() . '/js/jquery-ui-1.9.2.custom.js');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style-lislidik', get_template_directory_uri() . '/css/liSlidik.css');
	wp_enqueue_style('style-ui', get_template_directory_uri() . '/css/ui-lightness/jquery-ui-1.9.2.custom.css');
	wp_enqueue_style('style-black', get_template_directory_uri() . '/css/liSlidik.blackClasic.css');
}

/**
*loaded scripts and styles
*/
add_action('wp_enqueue_scripts', 'load_style_script');

/**
*options
**/
function my_more_options(){
	//создать поле опции
	// $id, $title, $callback, $page, $section, $args 
	add_settings_field(
		'phone',//$id
		'Телефон',//$title
		'display_phone',//$callback
		'general'//$page
	);
	//регистрирует новую опцию и callback функцию(функцию обратного вызова) для обработки значения опции при ее сохранении в БД
	// $option_group, $option_name, $sanitize_callback
	register_setting();
}

?>