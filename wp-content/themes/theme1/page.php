<?php get_header();?>
<div class = "content-wrapper">
	<div class = "content-main">
		<div class = "content">
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<div class = "articles">

				<h2><?php the_title(); ?></h2>
				<p><?php the_content();?> </p>				
			</div>
<?php endwhile; ?>
<?php endif; ?>
		</div>
		<?php get_sidebar() ;?>
	</div>
</div>
<?php get_footer();?>