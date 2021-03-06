<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package baya-rose
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<script src="wp-content/themes/baya-rose/js/burger-menu.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'baya-rose' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); ?></a>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<div id="menu">
				<div class="menu-container" id="nav-textes">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary',
						)
					);
					?>
				</div>
				<div class="menu-container" id="nav-icons">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-nav',
							'menu_id'        => 'menu-nav-icons',
						)
					);
					?>
				</div>
			</div>	
			<div id="mobile-menu">
				<div class="menu-container" id="nav-mobile-icons">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-icons-mobile',
							'menu_id'        => 'menu-icons-mobile',
						)
					);
					?>
				</div>
				<i class="fas fa-bars"></i>
				<div class="menu-container" id="nav-mobile">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-mobile',
							'menu_id'        => 'menu-mobile',
						)
					);
					?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
