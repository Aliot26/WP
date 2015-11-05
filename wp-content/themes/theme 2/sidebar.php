		<div class = "sidebar">
			<div>
<?php $args = array(
					'post-type' => 'post',
					'orderby' => 'rand',
					'category_name' => 'exhibitions,photo_shoot',
					'posts_per_page' => 1);?>
<?php $rand_post = new WP_Query($args); ?>
<?php if ($rand_post->have_posts()) :  while ($rand_post->have_posts()) : $rand_post->the_post(); ?>
<a href = "<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
<h2><a href = "<?php the_permalink();?>"><?php the_title();?></a></h2> 
<?php the_excerpt(); ?> 
<p><a href = "<?php the_permalink();?>" class = "readmore"> read more</a></p>     
<?php endwhile; ?>
<?php else:?>
<?php endif; ?>				
			</div>
		</div>	