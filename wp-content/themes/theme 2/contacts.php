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
				<img src = "images/contact.jpg" alt = "" />
				<h2>Contact Details</h2>				
				<p class = "address">18, Your Street, Yourareaname, Cityname,
Countyname, DE1 2WX, United Kingdom.
				</p>
				<p class = "phone">0800 900 0003
				</p>
				<p class = "mail">youremail@yoursite.com
				</p>
				<p class = "liciense">Registered photographer No. 09900-CCC
				</p>
				<p>VAT registered business number 455-5559-000</p>
			</div>
		</div>			
	</div>	
</div>
<?php get_footer('page'); ?>