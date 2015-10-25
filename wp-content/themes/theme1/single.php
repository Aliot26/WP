<?php get_header();?>
<div class = "content-wrapper">
	<div class = "content-main">
		<div class = "content">
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<div class = "articles">
				<div class = "articles-head">
				
					<span class = "article-date"><img src = "<?php bloginfo('template_url');?>/images/article-author.jpg" alt = "" /><span><?php the_author(); ?></span> <?php the_time('M jS, Y');?></span>
					<span class = "article-comment"><img src = "<?php bloginfo('template_url');?>/images/article-comment.jpg" alt = "" /><a href = "#"><?php comments_popup_link(); ?></a>
					</span>
				</div>
				<h2><?php the_title(); ?></h2>
				<p><?php the_content();?> </p>				
			</div>
<?php endwhile; ?>
<?php endif; ?>
			<div class = "pager">
			<?php previous_post_link('<span></span> %link'); next_post_link('<span></span> %link');?>
			</div>
		</div>
		<?php get_sidebar() ;?>
	</div>
</div>
<?php get_footer();?>