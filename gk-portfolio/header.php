<?php
/**
 *
 * The Header template for our theme
 *
 **/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<!--[if lte IE 8]>
	<div id="ie-toolbar"><div><?php _e('You\'re using an unsupported version of Internet Explorer. Please upgrade your browser for the best user experience on our site. Thank you.', 'gk-portfolio') ?></div></div>
	<![endif]-->
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php if( get_theme_mod('portfolio_logo', '')  !== '') : ?>
					<img src="<?php echo esc_url_raw(get_theme_mod('portfolio_logo', '')); ?>" alt="<?php bloginfo( 'name' ); ?>" />
				<?php else: ?>
					<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
					<?php if(trim(get_bloginfo('description')) != '' || is_customize_preview()) : ?>
					<h2 class="site-description"><?php bloginfo('description'); ?></h2>
					<?php endif; ?>
				<?php endif; ?>
			</a>
			
			<?php if(get_theme_mod('portfolio_show_topbar_search', '') != '') : ?>
			<form role="search" method="get" class="search-topbar" action="<?php echo esc_url(home_url( '/' )); ?>">
				<label>
					<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'gk-portfolio' ); ?></span>
					<input type="search" class="search-topbar-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder', 'gk-portfolio' ); ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'gk-portfolio' ); ?>" />
				</label>
			</form>
			<?php endif; ?>
			
			<?php if(get_theme_mod('portfolio_show_topbar_social', '') != '') : ?>
			<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'social-menu-topbar')); ?>
			<?php endif; ?>
		</header><!-- #masthead -->
				
		<div id="main" class="site-main">
			<div id="page" class="hfeed site">
		
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->