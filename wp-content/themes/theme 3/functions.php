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
		'phone',//$id название опции
		'Телефон',//$title заголовок поля
		'display_phone',//$callback 
		'general'//$page страница в которую добавляется поле
	);
	//регистрирует новую опцию и callback функцию(функцию обратного вызова) для обработки значения опции при ее сохранении в БД
	// $option_group, $option_name, $sanitize_callback
	register_setting(
		'general',// $option_group название группы, к которой будет принадлежать опция. Это название должно совпадать с названием группы в add_settings_field
		'my_phone' // $option_name название опции, которая будет сохраняться в БД
	);
}
add_action('admin_init', 'my_more_options');
function display_phone(){
	echo "<input class='regular-text code' name='my_phone' type='text' value='". esc_attr(get_option('my_phone')) ."'>";
}


/**
*add widget
*/
register_sidebar(array(
				'name' => 'Иконки в header',
				'id' => 'icons_header',
				'description' => 'Используйте виджет Текст для добавления HTML кода иконок',
				'before_widget' => '',				
				'after_widget' => '' ));
?>