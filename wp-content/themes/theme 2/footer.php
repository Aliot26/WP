<div class = "footer-wrapper">
	<div class = "footer-main">
		<div class = "footer-left">
			<a href = "/"><img src = "<?php bloginfo('template_url');?>/images/logo-ftr.png" alt = "" /></a>
			<p>copyright 2015 <a href = "#">www.yoururl.com</a></p>
		</div>
		<div class = "footer-right">
<?php $icon = new WP_Query(array('post_type' => 'icon','posts_per_page' => 3));?>	
<?php if ($icon->have_posts()) :  while ($icon->have_posts()) : $icon->the_post(); ?>	
	<a href = "<?php echo the_title();?>"><?php the_post_thumbnail('full'); ?></a>
<?php endwhile; ?>
<?php else: ?>
	<p>Место для баннера 728x90</p>
<?php endif; ?>					
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquerypp.custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.elastislide.js"></script>
<script type="text/javascript">
	
	$( '#carousel' ).elastislide();
												
</script>
<?php wp_footer();?>
</body>
</html>