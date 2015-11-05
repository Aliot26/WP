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
<?php get_sidebar(); ?>			
	</div>	
</div>
<?php get_footer('page'); ?>