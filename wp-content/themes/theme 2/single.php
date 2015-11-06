<?php get_header();?>
	<div class = "content-main">
	<div class="fon-single">
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
		<!--<ul id="slide_2" class="slidik">
			<li class="show"><img alt="Maecenas mi massa, interdum at sagittis eu, imperdiet a dui. Duis sit amet tortor leo. Fusce tempor pellentesque mollis. Sed tincidunt elit sit amet ipsum fermentum venenatis." src="images/portfolio/1.jpg"></li>
			<li><img alt="Maecenas mi massa, interdum at sagittis eu, imperdiet a dui. Duis sit amet tortor leo. Fusce tempor pellentesque mollis. Sed tincidunt elit sit amet ipsum fermentum venenatis." src="images/portfolio/2.jpg"></li>
			<li><img alt="Maecenas mi massa, interdum at sagittis eu, imperdiet a dui. Duis sit amet tortor leo. Fusce tempor pellentesque mollis. Sed tincidunt elit sit amet ipsum fermentum venenatis." src="images/portfolio/3.jpg"></li>
			<li><img alt="Maecenas mi massa, interdum at sagittis eu, imperdiet a dui. Duis sit amet tortor leo. Fusce tempor pellentesque mollis. Sed tincidunt elit sit amet ipsum fermentum venenatis." src="images/portfolio/4.jpg"></li>
			<a data-slidik="slide_2" class="next" href="#">Next</a>
			<a data-slidik="slide_2" class="prev" href="#">Prev</a>
			<div class="captionWrap"><div data-slidik="slide_2" class="caption"></div></div>
			<div class="portfolio-close"><a href="portfolio.html"></a></div>
			
		</ul>-->   
	</div>		
	</div>	
</div>
<?php get_footer();?>