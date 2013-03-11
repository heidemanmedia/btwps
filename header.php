<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <title><?php bloginfo('name');?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- THE CSS -->
	<link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/style.css" type="text/css"	rel="stylesheet">
	
	<!-- THE FONT -->
	
	
	<!-- JAVASCRIPT -->
	<script src="<?php bloginfo('template_url');?>/js/bootstrap.js" type="text/javascript"> </script>
	
	<!-- JQUERY -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
	<script src="http://twitter.github.com/bootstrap/assets/js/jquery.js" type="text/javascript"></script>

	<script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
	
	<!-- PHONE ICON -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url');?>/img/icon.png">
	
	<!-- IMPORT STYLE EN JAVASCRIPT FROM PLUGINS. -->
	<?php wp_head();?>
	
	<!-- GOOGLE ANALYTICS -->
	
</head>

<body>

	<div class="container">
	
		<!-- NAVIGATION -->
		<div id="inner-header" class="clearfix">
				
				<div class="navbar navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container-fluid nav-container">
							<nav role="navigation">
								<a class="brand" id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
								
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
								</a>
								
								<div class="nav-collapse">
									<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
								</div>
								
							</nav>
						</div>
					</div>
				</div>
			
			</div> <!-- end #inner-header -->
  		
  		<!-- CUSTOM HEADER FROM BACKEND -->
  		<div class="header">
  			<?php $header_image = get_header_image();
	  			if ( ! empty( $header_image ) ) : ?>
	  			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	  			<img src="<?php echo esc_url( $header_image ); ?>
	  			" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
	  			</a>
	  			<?php endif; ?>
  		</div>	
  		
  		<!-- BREADCRUMB -->
  		<div class="breadcrumb">
  			<?php if(function_exists('bavota_breadcrumbs')) bavota_breadcrumbs(); ?>
  		</div>
  		
  		
  		
  		
