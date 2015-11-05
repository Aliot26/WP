<?php get_header('page'); ?>
	<div class = "content-main" style = "margin:60px 0 0 0">	
		<div class = "content-left">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h2><?php the_title() ?></h2>
<?php the_content(); ?>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
		</div>
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
			<!--
				<a href = "#"><img src = "images/about-Me.jpg" alt = "" /></a>
				<h2><a href = "#">Skill Set</a></h2>				
				<p>Sed dolor ligula, tempus vitae malesuada utescu congue vitae diam. Integer non nisl est. Suspen isse at diam turpis, ut mattis velit. Praesent vel est non augue pretium condimentum at in mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in varius ante. Etiam et nisi eget velit dignissim gravida ac nec quam. Aenean imperdiet massa quis diam tempunec.
				</p>				
				<p><a href = "#" class = "readmore"> read more</a></p>-->
			</div>
		</div>			
	</div>	
</div>
<?php get_footer('page'); ?>