<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title><?php bloginfo('name'); wp_title(); ?></title>
<?php wp_head();?>
</head>
<body>
<div class = "head-wrapper">
	<div class = "head">
		<div class = "logo"><a href = "/"><img src = "<?php bloginfo('template_url');?>/images/logo.jpg" alt = ""  /></a></div>
		<div class = "banner">
<?php $banner = new WP_Query(array('post_type' => 'banner','posts_per_page' => 1));?>	
<?php if ($banner->have_posts()) :  while ($banner->have_posts()) : $banner->the_post(); ?>	
	<?php the_post_thumbnail('full'); ?>
<?php endwhile; ?>
<?php else: ?>
	<p>Место для баннера 728x90</p>
<?php endif; ?>
		<!--<img src = "<?php bloginfo('template_url');?>/images/728x90.jpg" alt = "" />-->
		</div>
	</div>
</div>
<div class = "menu-wrapper">
	<div class = "menu-main">
<?php if(!dynamic_sidebar('menu_header')): ?>
<span>this area is for the widget menu</span>
<?php endif; ?>

		<ul class = "icon-social">
			<li><a href = "#"><img src = "<?php bloginfo('template_url');?>/images/ico-vk.png" alt = "" /></a></li>
			<li><a href = "#"><img src = "<?php bloginfo('template_url');?>/images/ico-youtube.png" alt = "" /></a></li>
			<li><a href = "#"><img src = "<?php bloginfo('template_url');?>/images/ico-facebook.png" alt = "" /></a></li>
			<li><a href = "#"><img src = "<?php bloginfo('template_url');?>/images/ico-twitter.png" alt = "" /></a></li>
		</ul>
	</div>
</div>