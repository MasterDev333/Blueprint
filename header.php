<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Begin Header  -->
	<header class="header<?php echo (get_field('header_style') == 'light') ? ' header--light' : ''; ?>">
		<nav class="header-nav">
			<?php 
			$header_style = get_field( 'header_style' ) ?: 'dark';
			$logo = ( $header_style == 'dark' ) ? get_field( 'logo', 'options' ) : get_field( 'logo_white', 'options' );
			$logo_mobile = ( $header_style == 'dark' ) ? get_field( 'logo_mobile', 'options' ) : get_field( 'logo_mobile_white', 'options' );
			?>
			<?php if ($logo || $logo_mobile) : ?>
				<a href="<?php echo esc_url(home_url()); ?>" class="logo-link">
					<?php if ($logo) : ?>
					<img class="header-logo" src="<?php echo $logo; ?>" alt="Individual">
					<?php endif; ?>
					<?php if ($logo_mobile) : ?>
					<img class="header-logo--mobile" src="<?php echo $logo_mobile; ?>" alt="Individual">
					<?php endif; ?>
				</a>
			<?php endif; ?>
			<?php 
			wp_nav_menu( array(
				'menu' => 'Main Menu',
				'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'menu_class'      => 'menu-items',
				'fallback_cb'     => false,
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
			?>
			<button class="hamburger" type="button" tab-index="0" aria-label="Menu" role="button" aria-controls="navigation">
				<svg width="30" height="17" viewBox="0 0 30 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<line x1="29" y1="1" x2="15.1176" y2="1" stroke="#141820" stroke-width="2" stroke-linecap="round"/>
					<line x1="29" y1="8.41064" x2="1" y2="8.41065" stroke="#141820" stroke-width="2" stroke-linecap="round"/>
					<line x1="29" y1="15.8218" x2="9.82353" y2="15.8218" stroke="#141820" stroke-width="2" stroke-linecap="round"/>
				</svg>
			</button>
		</nav>
	</header>
	<!-- End Header -->
	<!-- Begin Main -->
	<main id="main">