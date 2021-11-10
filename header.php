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
	<!-- Begin Cursor -->
	<div class="cursor">
		<svg width="69" height="53" viewBox="0 0 69 53" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M67.0156 26.4266L1.34375 26.4266M67.0156 26.4266L42.3887 51.2359M67.0156 26.4266L42.3887 1.61719" stroke="#141820" stroke-width="2.18906" stroke-linecap="round" stroke-linejoin="round"></path></svg>
	</div>
	<!-- End Cursor -->
	<!-- Begin Header  -->
	<header class="header<?php echo (get_field('header_style') == 'light') ? ' header--light' : ''; ?>">
		<nav class="header-nav">
			<?php 
			$header_style = get_field( 'header_style' ) ?: 'dark';
			// $logo = ( $header_style == 'dark' ) ? get_field( 'logo', 'options' ) : get_field( 'logo_white', 'options' );
			// $logo_mobile = ( $header_style == 'dark' ) ? get_field( 'logo_mobile', 'options' ) : get_field( 'logo_mobile_white', 'options' );
			?>
			<a href="#" class="logo-link">
				<?php if( $logo = get_field( 'logo', 'options' ) ): ?>
					<img class="header-logo header-logo--dark" src="<?php echo $logo; ?>" alt="Individual">
				<?php endif; ?>
				<?php if( $logo_white = get_field( 'logo_white', 'options' ) ): ?>
					<img class="header-logo header-logo--light" src="<?php echo $logo_white; ?>" alt="Individual">
				<?php endif; ?>
				<?php if( $logo_mobile = get_field( 'logo_mobile', 'options' ) ): ?>
					<img class="header-logo--mobile header-logo--dark" src="<?php echo $logo_mobile; ?>" alt="Individual">
				<?php endif; ?>
				<?php if( $logo_mobile_white = get_field( 'logo_mobile_white', 'options' ) ): ?>
					<img class="header-logo--mobile header-logo--light" src="<?php echo $logo_mobile_white; ?>" alt="Individual">
				<?php endif; ?>
			</a>
			<div class="header-menus">
				<div class="header-menus__top">
					<a href="#" class="header-menus__logo">
						<img src="<?php the_field( 'logo_mobile_white', 'options' ); ?>" alt="">
					</a>
					<button class="hamburger-close">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15 1L1 15M1.00001 1L15 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</button>
				</div>
				<?php 
				wp_nav_menu( array(
					'menu' => 'Main Menu',
					'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'menu_class'      => 'menu-items',
					'fallback_cb'     => false,
					'walker'          => new WP_Bootstrap_Navwalker(),
				) );
				$social = get_field( 'social', 'options' );
				?>
				<div class="header-social">
					<?php if( $social['title'] ) : ?>
						<p class="header-social__title"><?php echo $social['title']; ?></p>
					<?php endif; ?>
					<?php if( $social['instagram'] ) : ?>
						<a href="<?php echo $social['instagram']; ?>" class="header-social__link" id="header-social__insta">
							<svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<line x1="24.4614" y1="0.741258" x2="12.6012" y2="0.741258" stroke="#141820" stroke-width="1.48252" stroke-linecap="round"/>
								<line x1="24.4616" y1="6.19536" x2="0.741364" y2="6.19536" stroke="#141820" stroke-width="1.48252" stroke-linecap="round"/>
								<line x1="24.4616" y1="11.649" x2="8.15395" y2="11.649" stroke="#141820" stroke-width="1.48252" stroke-linecap="round"/>
							</svg>
						</a>
					<?php endif; ?>
					<?php if( $social['linkedin'] ) : ?>
						<a href="<?php echo $social['linkedin']; ?>" class="header-social__link" id="header-social__linkedin">
							<svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.342285 21.5474C0.342285 9.86049 9.81636 0.386414 21.5032 0.386414C33.1901 0.386414 42.6642 9.86049 42.6642 21.5474C42.6642 33.2342 33.1901 42.7083 21.5032 42.7083C9.81636 42.7083 0.342285 33.2342 0.342285 21.5474ZM11.1873 17.9764V32.1278H15.684V17.9764H11.1873ZM10.9228 13.4797C10.9228 14.9346 11.9808 15.9926 13.4356 15.9926C14.8904 15.9926 15.9485 14.9346 15.9485 13.4797C15.9485 12.0249 14.8904 10.9669 13.4356 10.9669C12.1131 10.9669 10.9228 12.0249 10.9228 13.4797ZM27.587 32.1278H31.8192V23.3989C31.8192 19.0345 29.1741 17.5797 26.6612 17.5797C24.4128 17.5797 22.8258 19.0345 22.429 19.9603V17.9764H18.1968V32.1278H22.6935V24.5892C22.6935 22.6054 24.0161 21.5474 25.3386 21.5474C26.6612 21.5474 27.587 22.2086 27.587 24.457V32.1278Z" fill="white"/>
							</svg>
						</a>
					<?php endif; ?>
				</div>
			</div>
			<button class="hamburger" type="button" tab-index="0" aria-label="Menu" role="button" aria-controls="navigation">
				<svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<line x1="24.4614" y1="0.741258" x2="12.6012" y2="0.741258" stroke="#141820" stroke-width="1.48252" stroke-linecap="round"/>
					<line x1="24.4616" y1="6.19536" x2="0.741364" y2="6.19536" stroke="#141820" stroke-width="1.48252" stroke-linecap="round"/>
					<line x1="24.4616" y1="11.649" x2="8.15395" y2="11.649" stroke="#141820" stroke-width="1.48252" stroke-linecap="round"/>
				</svg>
			</button>
		</nav>
	</header>
	<!-- End Header -->
	<!-- Begin Main -->
	<main id="main">