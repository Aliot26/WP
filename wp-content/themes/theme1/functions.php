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

/*
**thumbnail support
*/
add_theme_support('post-thumbnails');
set_post_thumbnail_size(180,180);
/**
*add widget
*/
register_sidebar(array(
				'name' => 'MENU',
				'id' => 'menu_header',
				'before_widget' => '',
				'after_widget' => '' ));
				
register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class = "sidebar-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'));

register_sidebar( array(
		'name' => 'Footer',
		'id' => 'footer',
		'before_widget' => '<div class = "footer-info">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'));		
/*
		'description' => '',
		'class' => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => "</li>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n",
	) );
	
*/
function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = ' '; //текст ссылки "Предыдущая страница"
  $a['next_text'] = 'Next'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="navigation">';  
  if ($total == 1 && $max > 1) $pages = '<span class="pages">of ' . $max . '</span>'."\r\n";
  echo paginate_links($a) . $pages ;
  if ($max > 1) echo '</div>';
}
