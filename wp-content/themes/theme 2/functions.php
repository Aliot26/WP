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
?>