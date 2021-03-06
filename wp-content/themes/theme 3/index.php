<?php get_header(); ?>
<?php $args = array('post_type' => 'slider', 					
					'order' => 'ASC'); ?>	
<?php $slider = new WP_Query($args);?>
<?php if ($slider->have_posts()) : ?>
	<div class = "slider">
		<ul id="slide_2" class="slidik">
<?php while ($slider->have_posts()) : $slider->the_post(); ?>
       <li class="">
			<div class = "slide-content">
				<?php the_content() ;?>				
			</div>
			<?php the_post_thumbnail('full') ;?>
		</li>       
        <a data-slidik="slide_2" class="next" href="#">Next</a>
        <a data-slidik="slide_2" class="prev" href="#">Prev</a>        
        <div data-slidik="slide_2" class="dotted"></div>	       
<?php endwhile; ?>
		</ul>
	</div>
<?php else : ?>
<div><h2>Место для слайдера</h2></div>
<?php endif; ?>
	
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <div class = "underslider">
		<h2><?php the_title() ;?></h2>	
		<?php the_content() ;?>	
	</div>
<?php endwhile; ?>
<?php endif; ?>	
	<div class="content-main">
<?php 
$id = 18;
$args = array(
			'cat' => $id,
			'posts_per_page' => 4
			);
$posts_about = new WP_Query($args);
?> 
		
<?php if ($posts_about->have_posts()) : ?>
	<div class="four-columns">
<?php while ($posts_about->have_posts()) : $posts_about->the_post(); ?>
        <div>
<h2><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h2>
<?php the_excerpt(); ?>
		</div>
<?php endwhile; ?>
	</div>	
<?php else: ?>
<?php endif; ?>	
			<!--
			
				<h2><span>Flexibility
				<p>Fusce dapibus, tellus ac cursus como, tortor mauris condimentum nibh, ut fermentum massa justo sit amet isus.</p>
			
			<div>
				<h2><span>Mobile Friendly</span></h2>
				<p>Fusce dapibus, tellus ac cursus como, tortor mauris condimentum nibh, ut fermentum massa justo sit amet isus</p>
			
			<div>
				<h2><span>Very Powerful</span></h2>
				<p>Fusce dapibus, tellus ac cursus como, tortor mauris condimentum nibh, ut fermentum massa justo sit amet isus</p>
			</div>
			<div>
				<h2><span>Drag Modules</span></h2>
				<p>Fusce dapibus, tellus ac cursus como, tortor mauris condimentum nibh, ut fermentum massa justo sit amet isus</p>
			</div>
		</div>-->
		<h2 class="center-n"><span class="center-text">Our Latest Work</span><span class="right-text"><a herf="#">/ View All Portfolio</a></span></h2>
		<div class="latest-work-img">
			<div class="work">
				<a class="work-href" href="#">
					<div class="work-short">
						<img src="<?php bloginfo('template_url');?>/images//lastworks.png" alt="" />
						<h3>Parturient Purus Bibendum</h3>
						<p>Photoshop, Lightroom</p>
					</div>
					<img class="work-img" src="<?php bloginfo('template_url');?>/images//lastworks1.jpg" alt="" />
				</a>
			</div>
			<div class="work">
				<a class="work-href" href="#">
					<div class="work-short">
						<img src="<?php bloginfo('template_url');?>/images//lastworks.png" alt="" />
						<h3>Parturient Purus Bibendum</h3>
						<p>Photoshop, Lightroom</p>
					</div>
					<img class="work-img" src="<?php bloginfo('template_url');?>/images//lastworks2.jpg" alt="" />
				</a>
			</div>
			<div class="work">
				<a class="work-href" href="#">
					<div class="work-short">
						<img src="<?php bloginfo('template_url');?>/images//lastworks.png" alt="" />
						<h3>Parturient Purus Bibendum</h3>
						<p>Photoshop, Lightroom</p>
					</div>
					<img class="work-img" src="<?php bloginfo('template_url');?>/images//lastworks4.jpg" alt="" />
				</a>
			</div>
			<div class="work">
				<a class="work-href" href="#">
					<div class="work-short">
						<img src="<?php bloginfo('template_url');?>/images//lastworks.png" alt="" />
						<h3>Parturient Purus Bibendum</h3>
						<p>Photoshop, Lightroom</p>
					</div>
					<img class="work-img" src="<?php bloginfo('template_url');?>/images//lastworks3.jpg" alt="" />
				</a>
			</div>
		</div>
		<div class="acc-tab">
			<div class="why-us">
				<!-- Accordion -->
				<h2 class="center-n"><span class="center-text">Why Choose Us</span></h2>
				<div id="accordion">
					<h3>Accordion Title 1</h3>
					<div class="acc">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </div>
					<h3>Accordion Title 2</h3>
					<div class="acc">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </div>
					<h3>Accordion Title 3</h3>
					<div class="acc">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</div>
				</div>
				
			</div>
			<div class="our-services">
				<!-- Tabs -->
				<h2 class="center-n"><span class="center-text">Our Services</span></h2>
				<div id="tabs">
					<ul>
						<li><a href="#tabs-1">Tab Title 1</a></li>
						<li><a href="#tabs-2">Tab Title 2</a></li>
						<li><a href="#tabs-3">Tab Title 3</a></li>
						<li><a href="#tabs-4">Tab Title 4</a></li>
					</ul>
					<div id="tabs-1"><img class="img-tab" src="<?php bloginfo('template_url');?>/images//tab-img.jpg" alt="" />Cum sociis natoque penatibus et magnis dis partent montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis disamet non magna.</div>
					<div id="tabs-2">Cum sociis natoque penatibus et magnis dis partent montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis disamet non magna.</div>
					<div id="tabs-3">Cum sociis natoque penatibus et magnis dis partent montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis disamet non magna.</div>
					<div id="tabs-4">Cum sociis natoque penatibus et magnis dis partent montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis disamet non magna.</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer();?>