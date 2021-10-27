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
			// $logo = ( $header_style == 'dark' ) ? get_field( 'logo', 'options' ) : get_field( 'logo_white', 'options' );
			// $logo_mobile = ( $header_style == 'dark' ) ? get_field( 'logo_mobile', 'options' ) : get_field( 'logo_mobile_white', 'options' );
			?>
			<a href="<?php echo esc_url(home_url()); ?>" class="logo-link">
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
					<a href="<?php echo esc_url(home_url()); ?>">
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
							<svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21.2454 25.2505C19.2616 25.2505 17.5422 23.6634 17.5422 21.5473C17.5422 19.5635 19.1293 17.8442 21.2454 17.8442C23.2292 17.8442 24.9486 19.4313 24.9486 21.5473C24.9486 23.5312 23.2292 25.2505 21.2454 25.2505Z" fill="white"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M25.7421 12.5539H16.7487C15.6907 12.6862 15.1616 12.8185 14.7649 12.9507C14.2359 13.083 13.8391 13.3475 13.4423 13.7443C13.1284 14.0582 12.98 14.3722 12.8007 14.7517C12.7535 14.8517 12.7039 14.9565 12.6488 15.0668C12.6283 15.1282 12.6047 15.1927 12.5794 15.2619C12.441 15.6399 12.252 16.1563 12.252 17.0506V26.044C12.3843 27.1021 12.5165 27.6311 12.6488 28.0279C12.781 28.5569 13.0455 28.9537 13.4423 29.3504C13.7563 29.6644 14.0702 29.8127 14.4497 29.992C14.5498 30.0393 14.6545 30.0888 14.7649 30.144C14.8263 30.1644 14.8908 30.1881 14.96 30.2134C15.338 30.3517 15.8543 30.5407 16.7487 30.5407H25.7421C26.8002 30.4085 27.3292 30.2762 27.7259 30.144C28.255 30.0117 28.6517 29.7472 29.0485 29.3504C29.3625 29.0365 29.5108 28.7225 29.6901 28.343C29.7374 28.243 29.7868 28.1383 29.842 28.0279C29.8625 27.9665 29.8861 27.902 29.9114 27.8328C30.0498 27.4548 30.2388 26.9384 30.2388 26.044V17.0506C30.1066 15.9926 29.9743 15.4636 29.842 15.0668C29.7098 14.5378 29.4453 14.141 29.0485 13.7443C28.7345 13.4303 28.4206 13.282 28.0411 13.1027C27.9412 13.0554 27.8362 13.0058 27.7259 12.9507C27.6646 12.9303 27.6 12.9066 27.5308 12.8813C27.1528 12.743 26.6365 12.5539 25.7421 12.5539ZM21.2454 15.8603C18.0713 15.8603 15.5584 18.3732 15.5584 21.5473C15.5584 24.7215 18.0713 27.2343 21.2454 27.2343C24.4196 27.2343 26.9324 24.7215 26.9324 21.5473C26.9324 18.3732 24.4196 15.8603 21.2454 15.8603ZM28.3872 15.7281C28.3872 16.4585 27.7951 17.0506 27.0647 17.0506C26.3342 17.0506 25.7421 16.4585 25.7421 15.7281C25.7421 14.9977 26.3342 14.4055 27.0647 14.4055C27.7951 14.4055 28.3872 14.9977 28.3872 15.7281Z" fill="white"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.0844727 21.5474C0.0844727 9.86049 9.55855 0.386414 21.2454 0.386414C32.9323 0.386414 42.4063 9.86049 42.4063 21.5474C42.4063 33.2342 32.9323 42.7083 21.2454 42.7083C9.55855 42.7083 0.0844727 33.2342 0.0844727 21.5474ZM16.7487 10.5701H25.7421C26.9324 10.7024 27.7259 10.8346 28.3872 11.0991C29.1808 11.4959 29.7098 11.7604 30.3711 12.4217C31.0323 13.083 31.4291 13.7443 31.6936 14.4055C31.9581 15.0668 32.2226 15.8603 32.2226 17.0506V26.044C32.0904 27.2344 31.9581 28.0279 31.6936 28.6892C31.2969 29.4827 31.0323 30.0117 30.3711 30.673C29.7098 31.3343 29.0485 31.731 28.3872 31.9956C27.7259 32.2601 26.9324 32.5246 25.7421 32.5246H16.7487C15.5584 32.3923 14.7649 32.2601 14.1036 31.9956C13.3101 31.5988 12.781 31.3343 12.1198 30.673C11.4585 30.0117 11.0617 29.3504 10.7972 28.6892C10.5327 28.0279 10.2682 27.2344 10.2682 26.044V17.0506C10.4004 15.8603 10.5327 15.0668 10.7972 14.4055C11.194 13.612 11.4585 13.083 12.1198 12.4217C12.781 11.7604 13.4423 11.3636 14.1036 11.0991C14.7649 10.8346 15.5584 10.5701 16.7487 10.5701Z" fill="white"/>
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