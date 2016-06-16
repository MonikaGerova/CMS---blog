<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" media="all" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
</head>
<body  <?php body_class($class);?>>
	
<div id="wrapper"><!-- #wrapper -->
	<header><!-- header -->
		<h1>
			<a href="<?php bloginfo('url'); ?>" style="color: <?php header_textcolor()?>;"  title="<?php bloginfo('description'); ?>" >
				<?php bloginfo('name'); ?>
			</a>
		</h1>
		<?php get_search_form(true ); ?>
		<!--<h2>Your compelling tag line goes here</h2>	-->
		<img src="<?php header_image(); ?>" height="200" width="940" alt="" />   <!-- header image -->				
	</header><!-- end of header -->
	<nav><!-- top nav -->
		<?php wp_nav_menu(
			array(
				'theme_location' => 'top-site-menu',
				'container_class' => 'menu',
				'menu_id'        => 'ul',
				'depth'           => 2,
				'attribute'			=> "title"
			));
		?>
		
	</nav><!-- end of top nav -->
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"> <!-- #content -->
			
				