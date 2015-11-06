<?php
/**
*	menu
**/
register_nav_menu('menu', 'Primary Menu');
/**
*	slider
**/
register_sidebar(array(
        'name' => 'Slider on the main page',
        'id' => 'slider_index', 
		'description' => 'Добавьте слайдер через виджет Текст',
        'before_widget' => '',
        'after_widget' => ''        
    ));
/**
*	footer
**/	
register_sidebar(array(
        'name' => 'Footer',
        'id' => 'footer', 
		'description' => 'Добавьте ссылки на соцсети через виджет Текст',
        'before_widget' => '',
        'after_widget' => ''        
    ));
/**
*	thumbnails
**/	
add_theme_support('post-thumbnails');
add_image_size( 'spec_thumb', 270, 115, true );
add_theme_support( 'custom-background' );
/**
*	social_icon
**/	

function icon_posts(){
  $labels = array(
	'name' => 'Иконки', // Основное название типа записи
	'singular_name' => 'Иконка', // отдельное название записи типа Book
	'add_new' => 'Добавить новую',
	'add_new_item' => 'Добавить новую иконку',
	'edit_item' => 'Редактировать иконку',
	'new_item' => 'Новая иконка',
	'view_item' => 'Посмотреть иконку',
	'search_items' => 'Найти иконку',
	'not_found' =>  'Иконка не найдена',
	'not_found_in_trash' => 'В корзине иконки не найдено',
	'parent_item_colon' => '',
	'menu_name' => 'Иконки'
  );
  $args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'has_archive' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'supports' => array('title','thumbnail')
  );
  register_post_type('icon',$args);
}
add_action('init', 'icon_posts');


?>