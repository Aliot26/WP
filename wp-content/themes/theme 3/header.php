<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); wp_title();?></title>
<?php wp_head();?>
</head>
<body>
<div class = "karkas">
	<div class = "header">
		<a href = "#"><img class = "logo" src = "<?php bloginfo('template_url');?>/images/logo2.png" alt = "" /></a>
		<p class = "head-contact">
			<img src = "<?php bloginfo('template_url');?>/images/mail.jpg" alt = "" /><a href = "mailto:<?php bloginfo('admin_email');?>"><?php bloginfo('admin_email');?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "<?php bloginfo('template_url');?>/images/phone.png" alt = "" style = "margin-bottom: -3px"; /> 020 72046 404
		</p>
		<div class = "head-social">
			<a href = "#"><img src = "<?php bloginfo('template_url');?>/images/social1.jpg" alt = "" /></a>
			<a href = "#"><img src = "<?php bloginfo('template_url');?>/images/social2.jpg" alt = "" /></a>
			<a href = "#"><img src = "<?php bloginfo('template_url');?>/images/social3.jpg" alt = "" /></a>
			<a href = "#"><img src = "<?php bloginfo('template_url');?>/images/social4.jpg" alt = "" /></a>
			<a href = "#"><img src = "<?php bloginfo('template_url');?>/images/social5.jpg" alt = "" /></a>
			<a href = "#"><img src = "<?php bloginfo('template_url');?>/images/social6.jpg" alt = "" /></a>
			<a href = "#"><img src = "<?php bloginfo('template_url');?>/images/social7.jpg" alt = "" /></a>
		</div>	
		<div class = "menu-block">		
			<ul>                                                                      
				<li><a href = "/">Home</a></li>
				<li><a href = "about.html">About Us</a></li>
				<li><a href = "team.html">The Team</a></li>
				<li><a href = "testimonials.html">Testimonials</a></li>
				<li><a href = "work.html">Our Work</a></li>
				<li><a href = "videos.html">Our Videos</a></li>
				<li><a href = "blog.html">Blog</a></li>
				<li><a href = "contact.html">Contact</a></li>
			</ul>
			<div class = "search">
				<form action = "">	
					<input class="search-txt" type="text" name="search" value="Search.." onfocus="if(this.value=='Search..')this.value=''" onblur="if(this.value=='')this.value='Search..'" />
                        <input type="image" src="<?php bloginfo('template_url');?>/images//search.png" />
				</form>
			</div>
		</div>
	</div>