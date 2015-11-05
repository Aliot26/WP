<?php get_header(); ?>
	<div class = "content-main">
		<!-- Elastislide Carousel -->		
<?php if(!dynamic_sidebar('slider_index')):?>
	<ul id="carousel" class="elastislide-list">
		<li>For Slider</li>
	</ul>
<?php endif;?>		
		<!-- End Elastislide Carousel -->	
		
		<div class = "content-left">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class = "portfolio-image">
	<a href = "<?php the_permalink();?>"><?php the_post_thumbnail('spec_thumb');?></a>
</div>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
		</div>
<?php get_sidebar(); ?>		
	</div>	
</div>
<?php get_footer(); ?>