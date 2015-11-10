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
<?php $i = 1; ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <div>
		<a href = "<?php the_permalink();?>"><?php the_post_thumbnail() ;?></a>
		<h2><a href = "<?php the_permalink();?>"><?php the_title(); ?></a></h2>
		
		<?php $custom_fields = get_post_custom(get_the_ID());?>
		
		<!--- place, date, ticket -->
		<?php  if($custom_fields['place'][0]):?>
			<p class = "ex-home"><?php echo $custom_fields['place'][0];?></p>
		<?php endif; ?>
		<?php  if($custom_fields['date'][0]):?>
			<p class = "ex-note"><?php echo $custom_fields['date'][0];?></p>
		<?php endif; ?>
		<?php  if($custom_fields['ticket'][0]):?>
			<p class = "ex-buy"><?php echo $custom_fields['ticket'][0];?></p>
		<?php endif; ?>
		<!--- place, date, ticket -->		
		
		<?php the_excerpt();?>		
		<p><a href = "<?php the_permalink();?>" class = "readmore">buy tickets</a></p>
	</div> 
<?php if($i==3){
	echo "<div class='clear'></div>";
	$i = 0;
}
$i++;
?>	
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
			
		</div>
	
	</div>	
</div>
<?php get_footer(); ?>