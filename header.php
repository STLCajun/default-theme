<!DOCTYPE html>
<html>
	<head>
			<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
			
			<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
			
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5.js"></script>
			
			<script>
				$(window).load(function() {
					$("ul li:last-child").addClass("last");
					
				});
			
			</script>
			
			<!-- FancyBox - http://www.fancyapps.com/fancybox/#instructions -->
			<!-- 
				<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fancybox/source/jquery.fancybox.pack.js"></script>
				<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
				<link href="<?php bloginfo('template_directory'); ?>/js/fancybox/source/jquery.fancybox.css" type="text/css" rel="stylesheet" />
				
				<script type="text/javascript">
					$(document).ready(function() {
						$(".fancybox").fancybox();
						});
						
						$('.fancybox-media').fancybox({
								openEffect  : 'none',
								closeEffect : 'none',
								helpers : {
									media : {}
								}
							});

						$('a[href^="https://vimeo.com"],a[href^="https://www.vimeo.com"]').fancybox({
								openEffect  : 'none',
								closeEffect : 'none',
								helpers : {
									media : {}
								}
							});
						
				</script>
			-->
			
			<!-- Nivo Slider - http://nivo.dev7studios.com/support/jquery-plugin-usage/ -->
			<!--
				<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
				<link href="<?php bloginfo('template_directory'); ?>/js/nivo-slider/nivo-slider.css" type="text/css" rel="stylesheet" />

				<script type="text/javascript">
					// Be sure to un-comment lines in the CSS file.
					$(window).load(function() {
				    	$('#slider').nivoSlider({
				    								effect:'fade',
				    							    directionNav: false,
											        controlNav: false
											   });
						});
				</script>				
			
			-->				
			
			
			<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</nav>
		</header>
		<div class="content">
