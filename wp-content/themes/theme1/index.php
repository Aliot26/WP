<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Тема WordPress для блога</title>
<?php wp_head();?>
</head>
<body>
<div class = "head-wrapper">
	<div class = "head">
		<div class = "logo"><a href = "index.html>"><img src = "images/logo.jpg" alt = ""  /></a></div>
		<div class = "banner"><img src = "images/728x90.jpg" alt = "" /></div>
	</div>
</div>
<div class = "menu-wrapper">
	<div class = "menu-main">
		<ul class = "menu">
			<li><a href = "#">Home</a></li>
			<li><a href = "#">About Me</a></li>
			<li><a href = "#">Design Services</a></li>
			<li><a href = "#">Request Quote</a></li>
			<li><a href = "#">Advertise </a></li>
			<li><a href = "#">Contact Me</a></li>
		</ul>
		<ul class = "icon-social">
			<li><a href = "#"><img src = "images/ico-vk.png" alt = "" /></a></li>
			<li><a href = "#"><img src = "images/ico-youtube.png" alt = "" /></a></li>
			<li><a href = "#"><img src = "images/ico-facebook.png" alt = "" /></a></li>
			<li><a href = "#"><img src = "images/ico-twitter.png" alt = "" /></a></li>
		</ul>
	</div>
</div>
<div class = "content-wrapper">
	<div class = "content-main">
		<div class = "content">
		
		<div id='slideshowHolder'>    
			<img src="images/img1.jpg" alt='' />            
			<img src="images/img1.jpg" alt='' />            
			<img src="images/img1.jpg" alt='' />            
		</div>
		
			<div class = "articles">
				<div class = "articles-gen-img">
					<a href = "#"><img src = "images/post-img1.jpg" alt = "" /></a>
				</div>
				<div class = "articles-head">
					<span class = "article-date"><img src = "images/article-author.jpg" alt = "" /><span>Admin</span> - Nov 28th, 2010</span>
					<span class = "article-comment"><img src = "images/article-comment.jpg" alt = "" /><a href = "#">10 Comments</a>
					</span>
				</div>
				<h2><a href = "#">Thanksgiving greeting card PSD</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum malesuada orci a commodo. Aenean dapibus urna quis nulla consequat sagittis. Quisque ut ultrices massa. Mauris felis felis, rutrum sit amet vehicula ut, tempus quis lectus. . </p>
				<p><a href = "#">Read More</a></p>
			</div>
			<div class = "articles">
				<div class = "articles-gen-img">
					<a href = "#"><img src = "images/post-img2.jpg" alt = "" /></a>
				</div>
				<div class = "articles-head">
					<span class = "article-date"><img src = "images/article-author.jpg" alt = "" /><span>Admin</span> - Nov 28th, 2010</span>
					<span class = "article-comment"><img src = "images/article-comment.jpg" alt = "" /><a href = "#">10 Comments</a>
					</span>
				</div>
				<h2><a href = "#">Vintage business card PSD (front & back)</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum malesuada orci a commodo. Aenean dapibus urna quis nulla consequat sagittis. Quisque ut ultrices massa. Mauris felis felis, rutrum sit amet vehicula ut, tempus quis lectus. . </p>
				<p><a href = "#">Read More</a></p>
			</div>
						<div class = "articles">
				<div class = "articles-gen-img">
					<a href = "#"><img src = "images/post-img3.jpg" alt = "" /></a>
				</div>
				<div class = "articles-head">
					<span class = "article-date"><img src = "images/article-author.jpg" alt = "" /><span>Admin</span> - Nov 28th, 2010</span>
					<span class = "article-comment"><img src = "images/article-comment.jpg" alt = "" /><a href = "#">10 Comments</a>
					</span>
				</div>
				<h2><a href = "#">Request a quote form PSD in 3 colors</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum malesuada orci a commodo. Aenean dapibus urna quis nulla consequat sagittis. Quisque ut ultrices massa. Mauris felis felis, rutrum sit amet vehicula ut, tempus quis lectus. . </p>
				<p><a href = "#">Read More</a></p>
			</div>
						<div class = "articles">
				<div class = "articles-gen-img">
					<a href = "#"><img src = "images/post-img4.jpg" alt = "" /></a>
				</div>
				<div class = "articles-head">
					<span class = "article-date"><img src = "images/article-author.jpg" alt = "" /><span>Admin</span> - Nov 28th, 2010</span>
					<span class = "article-comment"><img src = "images/article-comment.jpg" alt = "" /><a href = "#">10 Comments</a>
					</span>
				</div>
				<h2><a href = "#">PSD book template & icons</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum malesuada orci a commodo. Aenean dapibus urna quis nulla consequat sagittis. Quisque ut ultrices massa. Mauris felis felis, rutrum sit amet vehicula ut, tempus quis lectus. . </p>
				<p><a href = "#">Read More</a></p>
			</div>
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
		<div class = "sidebar">
			<div class = "sidebar-widget">
				<div class = "search-main">
					<form action = "" method = "get">
						<input class = "search-txt" type = "text" name = "search" value = "Поиск" onfocus = "if(this.value=='Поиск')this.value=''" onblur="if(this.value=='')this.value='Поиск'"/>
						<input type = "image" src = "images/search-btn.jpg" />
					</form>
				</div> 
			</div>
			<div class = "sidebar-widget">
				<ul class = "ads-main">
					<li><a href = "#"><img src = "images/ads1.jpg" alt = "" /></a></li>
					<li><a href = "#"><img src = "images/ads2.jpg" alt = "" /></a></li>
					<li><a href = "#"><img src = "images/ads3.jpg" alt = "" /></a></li>
					<li><a href = "#"><img src = "images/ads4.jpg" alt = "" /></a></li>
				</ul>
			</div>
			<div class = "sidebar-widget">
				<h3>Categories</h3>
				<ul class = "side-categories">
					<li><a href = "#">Backgrounds</a></li>
					<li><a href = "#">Brushes</a></li>
					<li><a href = "#">Design Articles</a></li>
					<li><a href = "#">Fonts</a></li>
					<li><a href = "#">Free PSD Files</a></li>
					<li><a href = "#">Icons</a></li>
					<li><a href = "#">Logos</a></li>
					<li><a href = "#">Patterns</a></li>
					<li><a href = "#">Textures</a></li>
					<li><a href = "#">Tools & Utilities</a></li>					
				</ul>
				<ul class = "side-categories">
					<li><a href = "#">Backgrounds</a></li>
					<li><a href = "#">Brushes</a></li>
					<li><a href = "#">Design Articles</a></li>
					<li><a href = "#">Fonts</a></li>
					<li><a href = "#">Free PSD Files</a></li>
					<li><a href = "#">Icons</a></li>
					<li><a href = "#">Logos</a></li>
					<li><a href = "#">Patterns</a></li>
					<li><a href = "#">Textures</a></li>
					<li><a href = "#">Tools & Utilities</a></li>					
				</ul>
			</div>
			<div class = "sidebar-widget">
				<h3>Latest Posts</h3>
				<div class = "post">
					<p class = "latest-post">
						<img src = "images/latest-post1.jpg" alt = "" />
						<a href = "#">Request a quote form PSD in 3 colors</a>
					</p>
					<p class = "latest-post">
						<img src = "images/latest-post1.jpg" alt = "" />
						<a href = "#">Thanksgiving greeting card PSD</a>
					</p>
					<p class = "latest-post">
						<img src = "images/latest-post1.jpg" alt = "" />
						<a href = "#">Vintage business card PSD(front&back)</a>
					</p>
					<p class = "latest-post">
						<img src = "images/latest-post1.jpg" alt = "" />
						<a href = "#">Free xHTML/CSS website template</a>
					</p>
					<p class = "latest-post">
						<img src = "images/latest-post1.jpg" alt = "" />
						<a href = "#">fruit illustration, fresh lemon PSD</a>
					</p>
					<p class = "latest-post">
						<img src = "images/latest-post1.jpg" alt = "" />
						<a href = "#">Wooden speakers PSD & icons</a>
					</p>
				</div>
			</div>
			<div class = "sidebar-widget">
				<div class = "facebook">
					<img src = "images/facebook.jpg" alt = "" />
				</div>
			</div>
		</div>
	</div>
</div>
<div class = "footer-info-wrapper">
	<div class = "footer-info-main">
		<div class = "footer-info">
			<h3>About</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut purus odio, quis rutrum nibh. Etiam nec tellus malesuada odio tincidunt fringilla quis vitae nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla malesuada convallis. Morbi laoreet volutpat rhoncus.</p>
		</div>
		<div class = "footer-info">
			<h3>Browse</h3>
			<ul>
				<li><a href = "#">Home</a></li>
				<li><a href = "#">About Me</a></li>
				<li><a href = "#">Design Services</a></li>
				<li><a href = "#">Request Quote</a></li>
				<li><a href = "#">Advertise </a></li>
				<li><a href = "#">Contact Me</a></li>			
			</ul>
		</div>
		<div class = "footer-info">
			<h3>Write for us</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut purus odio, quis rutrum nibh. Etiam nec tellus malesuada odio tincidunt fringilla quis vitae nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla malesuada convallis.</p>
			<p><a href = "#">Contact Us Now</a></p>
		</div>
	</div>
</div>
<div class = "footer-copy">
	<p class = "copy">Copyright © 2010 All Rights Reserved</p>
	<p class = "by-st">Designed by <a href = "#">GraphicsFuel.com</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered by <a href = "#">Wordpress</a>
</p>
</div>
<script>
	$(document).ready( function(){
		$('#slideshowHolder').jqFancyTransitions({ navigation: true, width: 594, height: 279 });
	});
</script>
<?php wp_footer(); ?>
</body>
</html>