<!DOCTYPE>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">	
	<?php wp_head(); ?>
</head>
<style>
	header{
		background-image: url(<?php echo get_theme_mod('banner_background', get_bloginfo('template_url') . '/inc/img/banner-stock-darkened.jpg'); ?>);
	}

</style>
<body>
	<header>
		<div class="container header-container">
			<div class="row">
				<div class="col-md-12">
 					<h1><?php echo get_theme_mod('banner_title', 'sparky'); ?></h1>
 					<h3><?php echo get_theme_mod('banner_description', 'Simple And Fun To Use!'); ?></h3>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		  
		    	<?php
				    wp_nav_menu( array(
				        'menu'              => 'primary',
				        'theme_location'    => 'primary',
				        'container'         => 'div',
				        'container_class'   => 'collapse navbar-collapse',
				      	'container_id'      => 'bs-example-navbar-collapse-1',
				        'menu_class'        => 'nav navbar-nav'
				    ));
				?>
		    
		    
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	