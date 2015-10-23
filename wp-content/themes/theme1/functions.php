<?php
/**
*loadable scripts and styles
*/
function load_style_script(){
	wp_enqueue_script('jquery_my', get_template_directory_uri() . '/js/jquery-1.10.1.min.js');
	wp_enqueue_script('jqFancyTransitions', get_template_directory_uri() . '/js/jqFancyTransitions.1.8.min.js');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
/**
*loaded scripts and styles
*/
add_action('wp_enqueue_scripts', 'load_style_script');
/**
*add widget
*/
register_sidebar(array(
				'name' => 'MENU',
				'id' => 'menu_header',
				'before_widget' => '',
				'after_widget' => '' ));