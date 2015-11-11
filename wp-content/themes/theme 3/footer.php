	<div class="footer">
		<p class="copy">Copyright 2012. All Right Reserved MonkeeThemes.</p>
		<p class="fmenu">
			<a href="#">Home</a> |
			<a href="#">About</a> |
			<a href="#">Sitemap</a> |
			<a href="#">Contact</a>
		</p>
	</div>
</div>
	<script>
	$(function() {
		
		$( "#accordion" ).accordion();
		$( "#tabs" ).tabs();		
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
		
	});
	</script>
		<script>
		$(function(){
		jQuery.noConflict();
			$(window).load(function(){
				$('#slide_2').liSlidik({
					auto:3000,
					duration: 1000
				});
			})
		});
		</script>
<?php wp_footer();?>
</body>
</html>
