<?php
/**
 * The header for our theme.
 *
 * @package QOD_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					
				<div class = "logo">
				
					<button id= "nav-bar" class="hide" href=""><img class="nav-butom" src="<?php echo get_template_directory_uri();?>../../metcon/assets/images/logo/burguer-menu.svg" alt=""></button>
					<a href="/metcon">
						<img  src= "<?php echo get_template_directory_uri();?>../../metcon/assets/images/logo/logo-gold.svg" alt="">
						</a>
				</div>


					
					<div id="secondary" class="social-container" role="complementary">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div><!-- #secondary -->
					
					<div class="menu-main-navigation-container">
			
						<?php wp_nav_menu( array( 'container'=> 'ul','theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class'=> 'header-navigation' ) ); ?>
					</div>
				</div>


				</div><!-- .site-branding -->
			</header><!-- #masthead -->

			

			<div id="content" class="site-content ">
