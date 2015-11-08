<?php get_header('portfolio-page');?>
	<div class = "content-main">
	<div class="fon-single">
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<?php $category = get_the_category(); ?>
<?php if($category[0]->cat_name != "Portfolio"): ?>
<h2><?php the_title(); ?></h2>
<?php endif; ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
		
	</div>		
	</div>	
</div>
<?php get_footer('portfolio-page');?>