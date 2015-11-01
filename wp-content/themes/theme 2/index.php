<?php get_header();?>
	<div class = "content-main">
		<!-- Elastislide Carousel -->
		
<?php if(!dynamic_sidebar('slider_index')):?>
	<ul id="carousel" class="elastislide-list">
		<li>For Slider</li>
	</ul>
<?php endif;?>
		
		<!-- End Elastislide Carousel -->
		<div class = "content-main-block">
<?php $args = array('post_type' => array('page', 'post'), 
					'meta_key' => 'order',
					'orderby' => 'meta_value_num',
					'order' => 'ASC',
					'posts_per_page' => 3); ?>		
<?php $page_index = new WP_Query($args);?>

<?php if ($page_index->have_posts()) :  while ($page_index->have_posts()) : $page_index->the_post(); ?>
<div>
	<a href = "<?php the_permalink();?>"><?php the_post_thumbnail('full'); ?></a>
	<h2><a href = "<?php the_permalink();?>"><?php echo get_post_meta(get_the_ID(), 'title', true); ?></a></h2>
	<?php the_excerpt(); ?>
	<p><a href = "<?php the_permalink();?>" class = "readmore">read more</a></p>
</div>       
<?php endwhile; ?>
<?php else: ?>
<div>
	<p>Add pages and posts to custom field "title"  with the desired title to display on the main page</p>
	<p>Second custom field "order" will be used for sorting</p>
</div>
<div>
	<p>Add pages and posts to custom field "title"  with the desired title to display on the main page</p>
	<p>Second custom field "order" will be used for sorting</p>
</div>
<div>
	<p>Add pages and posts to custom field "title"  with the desired title to display on the main page</p>
	<p>Second custom field "order" will be used for sorting</p>
</div>
<?php endif; ?>
		
		</div>				
	</div>	 
</div>
<?php get_footer();?>