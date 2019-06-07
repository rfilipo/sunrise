<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sunrise
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sunrise' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
                        if (has_custom_logo()){
			the_custom_logo();
                        } else {?>
                        <a href="http://127.0.0.1/" class="custom-logo-link" rel="home" itemprop="url"><img width="480" height="480" src="/wp-content/themes/sunrise/icon.png" class="custom-logo" alt="Sunrise" itemprop="logo"></a> 
                        <?php }
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$sunrise_description = get_bloginfo( 'description', 'display' );
			if ( $sunrise_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $sunrise_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	        <?php if ( is_front_page() && is_home() && get_header_image() ) : ?>
                <div id="custom-header-image-wrap">
			<?php the_header_image_tag(); ?>
                </div>
		<?php endif; ?>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sunrise' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
