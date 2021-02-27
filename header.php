<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dim
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dim' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="mobile-menu">
			<button id="menu-open" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
			<nav id="mobile-site-navigation" class="main-navigation">
				<button id="menu-close" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-times"></i></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
		<div id="desktop-menu">
			<nav id="site-navigation" class="main-navigation">
				<div class="desktop-nav-brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
				<div class="desktop-nav-pages">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</div>
			</nav><!-- #site-navigation -->
		</div>

		<!-- Big image -->
		<?php if ( is_front_page() && !is_home() ) : ?>
			<div class="header-image" style="background-image: url('<?php header_image(); ?>');"></div>
			<div class="big-site-branding">
				<div class="wrapper">
					<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
					<p class="site-description"><?php bloginfo( 'description' ) ?></p>
				</div>
			</div>
			<div class="arrow-wrapper">
				<i class="fas fa-arrow-down" id="header-arrow-down"></i>
			</div>
		<?php endif; ?>
	</header><!-- #masthead -->
