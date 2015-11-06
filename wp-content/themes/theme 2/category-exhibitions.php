<?php get_header(); ?>
	<div class = "content-main">
		<!-- Elastislide Carousel -->		
<?php if(!dynamic_sidebar('slider_index')):?>
	<ul id="carousel" class="elastislide-list">
		<li>For Slider</li>
	</ul>
<?php endif;?>		
		<!-- End Elastislide Carousel -->	
		
		<div class = "content-main-block">
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <div>
		<a href = "<?php the_permalink();?>"><?php the_post_thumbnail() ;?></a>
		<h2><a href = "<?php the_permalink();?>"><?php the_title(); ?></a></h2>
		<p class = "ex-home">King’s Museum, Kensington, London</p>
		<p class = "ex-note">Tues 26th April 2015 - Sat 30th April 2015<br>8am to 9pm with free refreshments.</p>
		<p class = "ex-buy">Buy tickets from <a href = "#">TicketMaster</a></p>
		<?php the_excerpt();?>		
		<p><a href = "<?php the_permalink();?>" class = "readmore">buy tickets</a></p>
	</div>   
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
			
		</div>
	
	</div>	
</div>
<?php get_footer(); ?>