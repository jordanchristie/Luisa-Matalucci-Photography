<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luisa_Matalucci_Photography
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'luisamatalucciphotography' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<div class="site-branding">
				<?php
				the_custom_logo();
			
				$luisamatalucciphotography_description = get_bloginfo( 'description', 'display' );
				if ( $luisamatalucciphotography_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $luisamatalucciphotography_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		<!-- hero section -->
		<div class="hero-wrapper">
		<?php if (is_single() && has_post_thumbnail()) the_post_thumbnail('full'); ?>
		<?php if (is_home()) :?>
		<div id="hero-wrapper">
			<h1><?php the_field('hero_company_name') ?></h1>
		</div>
			<?php endif; ?>	
		</div>
		
	</header><!-- #masthead -->

	<!-- <div id="content" class="site-content"> -->
