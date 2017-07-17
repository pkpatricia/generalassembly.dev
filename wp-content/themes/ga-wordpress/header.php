<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GA_Wordpress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge =1">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skel.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-mobile.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-wide.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-noscript.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.dropotron.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrolly.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollgress.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/skel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/skel-layers.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ga-wordpress' ); ?></a>

	<header id="masthead" class="site-header size size2" role="banner">

		<?php if ( has_nav_menu ( 'primary' ) ) : ?>

			<nav id="site-navigation" class="main-navigation clear" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'ga-wordpress' ); ?></button>

				<div class="all-menus centered">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu','menu_class' => 'nav-menu' ) ); ?>
				</div>
					
			</nav><!-- #site-navigation -->
		<?php endif; ?>	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
