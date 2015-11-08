<?php
/*
Template Name: Contact page
*/
?>
<?php get_header('page'); ?>
	<div class = "content-main" style = "margin:60px 0 0 0">	
		<div class = "content-left">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><?php the_title();?></h2>
<div class = "contact-form">
	<?php the_content(); ?>
</div>
<?php endwhile;?>
<?php else: ?>
<?php endif; ?>			
		</div>
		<div class = "sidebar">
			<div>
			
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<?php the_post_thumbnail(); ?>
<h2>Contact Details</h2>
<?php $custom_fields = get_post_custom(get_the_ID()); ?>
<?php 
foreach ($custom_fields as $key => $value){
	
	if(!preg_match('#^_#', $key)){
		echo "<p class = '{$key}'>{$value[0]}</p>";
	}
}
?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
			<!--<img src = "images/contact.jpg" alt = "" />
								
				<p class = "address">18, Your Street, Yourareaname, Cityname,
Countyname, DE1 2WX, United Kingdom.
				</p>
				<p class = "phone">0800 900 0003
				</p>
				<p class = "mail">youremail@yoursite.com
				</p>
				<p class = "liciense">Registered photographer No. 09900-CCC
				</p>
				<p>VAT registered business number 455-5559-000</p>-->
			</div>
		</div>			
	</div>	
</div>
<?php get_footer('page'); ?>