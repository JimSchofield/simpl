<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simpl
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Bungee|Rasa" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simpl' ); ?></a>

	<header id="masthead" class="header">
		
			<nav id="site-navigation" class="main-navigation">
				<div class="header-inner">
					<div class="header-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="header-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<div class="header-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
							<?php
						endif;
						$simpl_description = get_bloginfo( 'description', 'display' );
						if ( $simpl_description || is_customize_preview() ) :
							?>
							<p class="header-description noMargin"><?php echo $simpl_description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
						<button class="header-menu-icon menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" class="hamburger">
								<path d="M0 0h24v24H0z" fill="none"/>
								<path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
							</svg>
							<svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" class="close-icon">
								<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
								<path d="M0 0h24v24H0z" fill="none"/>
							</svg>
						</button>
					</div><!-- .header-branding -->
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #header-navigation -->
		</header><!-- #masthead -->

	<div id="content" class="site-content">
