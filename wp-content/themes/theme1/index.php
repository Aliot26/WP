<?php get_header();?>
<div class = "content-wrapper">
	<div class = "content-main">
		<div class = "content">
		
		<div id='slideshowHolder'>    
			<img src="<?php bloginfo('template_url');?>/images//img1.jpg" alt='' />            
			<img src="<?php bloginfo('template_url');?>/images//img1.jpg" alt='' />            
			<img src="<?php bloginfo('template_url');?>/images//img1.jpg" alt='' />            
		</div>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<div class = "articles">
				<div class = "articles-gen-img">
					<a href = "#"><img src = "<?php bloginfo('template_url');?>/images//post-img1.jpg" alt = "" /></a>
				</div>
				<div class = "articles-head">
					<span class = "article-date"><img src = "<?php bloginfo('template_url');?>/images//article-author.jpg" alt = "" /><span><?php the_author(); ?></span> <?php the_time('M jS, Y');?></span>
					<span class = "article-comment"><img src = "<?php bloginfo('template_url');?>/images//article-comment.jpg" alt = "" /><a href = "#"><?php comments_popup_link(); ?></a>
					</span>
				</div>
				<h2><a href = "#">Thanksgiving greeting card PSD</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum malesuada orci a commodo. Aenean dapibus urna quis nulla consequat sagittis. Quisque ut ultrices massa. Mauris felis felis, rutrum sit amet vehicula ut, tempus quis lectus. . </p>
				<p><a href = "#">Read More</a></p>
			</div>
<?php endwhile; ?>
<?php endif; ?>


			<div class = "pager">
				<a href = "#">1</a>
				<a href = "#">2</a>
				<a href = "#">3</a>
				<a href = "#">4</a>
				<span>of</span>
				<a href = "#">75</a>
				<a href = "#" class = "prev-next">Next</a>
			</div>
		</div>
		<?php get_sidebar() ;?>
	</div>
</div>
<?php get_footer();?>