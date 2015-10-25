<?php get_header();?>
<div class = "content-wrapper">
	<div class = "content-main">
		<div class = "content">
		
		<div id='slideshowHolder'>    
			<img src="<?php bloginfo('template_url');?>/images/img1.jpg" alt='' />            
			<img src="<?php bloginfo('template_url');?>/images/img1.jpg" alt='' />            
			<img src="<?php bloginfo('template_url');?>/images/img1.jpg" alt='' />            
		</div>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<div class = "articles">
				<div class = "articles-gen-img">
					<a href="<?php the_permalink(); ?>">
					<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail(); ?>
					<?php else: ?><img src="<?php bloginfo('template_url');?>/images/no_img.jpg" alt = "" />
					<?php endif; ?>						
					</a>
				</div>
				<div class = "articles-head">
					<span class = "article-date"><img src = "<?php bloginfo('template_url');?>/images/article-author.jpg" alt = "" /><span><?php the_author(); ?></span> <?php the_time('M jS, Y');?></span>
					<span class = "article-comment"><img src = "<?php bloginfo('template_url');?>/images/article-comment.jpg" alt = "" /><a href = "#"><?php comments_popup_link(); ?></a>
					</span>
				</div>
				<h2><a href = "<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>
				<p><?php the_excerpt();?> </p>
				<p><a href = "<?php the_permalink() ;?>">Read More</a></p>
			</div>
<?php endwhile; ?>
<?php endif; ?>


			<div class = "pager">
				<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
			</div>
		</div>
		<?php get_sidebar() ;?>
	</div>
</div>
<?php get_footer();?>