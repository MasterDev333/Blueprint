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
			<?php if( !is_page_template( 'page-templates/privacy.php' ) ): ?>
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
							<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.3903 22.7836C17.5725 22.7836 15.997 21.3294 15.997 19.3903C15.997 17.5725 17.4513 15.997 19.3903 15.997C21.2082 15.997 22.7836 17.4513 22.7836 19.3903C22.7836 21.2082 21.2082 22.7836 19.3903 22.7836Z" fill="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M23.5108 11.1494H15.2699C14.3004 11.2706 13.8156 11.3918 13.452 11.513C12.9673 11.6342 12.6037 11.8766 12.2401 12.2401C11.9525 12.5278 11.8165 12.8155 11.6522 13.1633C11.6089 13.2549 11.5636 13.351 11.513 13.452C11.4943 13.5083 11.4726 13.5674 11.4494 13.6308C11.3226 13.9772 11.1494 14.4503 11.1494 15.2699V23.5108C11.2706 24.4803 11.3918 24.965 11.513 25.3286C11.6342 25.8134 11.8766 26.1769 12.2401 26.5405C12.5278 26.8282 12.8155 26.9641 13.1633 27.1284C13.255 27.1718 13.3509 27.2171 13.452 27.2676C13.5083 27.2864 13.5674 27.308 13.6308 27.3312C13.9772 27.458 14.4504 27.6312 15.2699 27.6312H23.5108C24.4803 27.51 24.9651 27.3888 25.3286 27.2676C25.8134 27.1465 26.1769 26.9041 26.5405 26.5405C26.8282 26.2528 26.9641 25.9651 27.1284 25.6174C27.1717 25.5257 27.2171 25.4298 27.2677 25.3286C27.2864 25.2724 27.308 25.2132 27.3313 25.1498C27.458 24.8035 27.6312 24.3303 27.6312 23.5108V15.2699C27.51 14.3004 27.3888 13.8156 27.2677 13.452C27.1465 12.9673 26.9041 12.6037 26.5405 12.2401C26.2528 11.9525 25.9651 11.8165 25.6174 11.6522C25.5258 11.609 25.4296 11.5635 25.3286 11.513C25.2724 11.4943 25.2132 11.4726 25.1498 11.4494C24.8035 11.3226 24.3303 11.1494 23.5108 11.1494ZM19.3903 14.1792C16.4818 14.1792 14.1792 16.4818 14.1792 19.3903C14.1792 22.2989 16.4818 24.6015 19.3903 24.6015C22.2989 24.6015 24.6015 22.2989 24.6015 19.3903C24.6015 16.4818 22.2989 14.1792 19.3903 14.1792ZM25.9346 14.058C25.9346 14.7273 25.392 15.2699 24.7227 15.2699C24.0534 15.2699 23.5108 14.7273 23.5108 14.058C23.5108 13.3887 24.0534 12.8461 24.7227 12.8461C25.392 12.8461 25.9346 13.3887 25.9346 14.058Z" fill="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0 19.3903C0 8.68135 8.68135 0 19.3903 0C30.0993 0 38.7807 8.68135 38.7807 19.3903C38.7807 30.0993 30.0993 38.7807 19.3903 38.7807C8.68135 38.7807 0 30.0993 0 19.3903ZM15.2699 9.33159H23.5108C24.6015 9.45278 25.3286 9.57397 25.9346 9.81635C26.6617 10.1799 27.1465 10.4223 27.7524 11.0282C28.3584 11.6342 28.7219 12.2401 28.9643 12.8461C29.2067 13.452 29.4491 14.1792 29.4491 15.2699V23.5108C29.3279 24.6015 29.2067 25.3286 28.9643 25.9346C28.6007 26.6617 28.3584 27.1465 27.7524 27.7524C27.1465 28.3584 26.5405 28.7219 25.9346 28.9643C25.3286 29.2067 24.6015 29.4491 23.5108 29.4491H15.2699C14.1792 29.3279 13.452 29.2067 12.8461 28.9643C12.119 28.6007 11.6342 28.3584 11.0283 27.7524C10.4223 27.1465 10.0587 26.5405 9.81636 25.9346C9.57398 25.3286 9.3316 24.6015 9.3316 23.5108V15.2699C9.45279 14.1792 9.57398 13.452 9.81636 12.8461C10.1799 12.119 10.4223 11.6342 11.0283 11.0282C11.6342 10.4223 12.2401 10.0587 12.8461 9.81635C13.452 9.57397 14.1792 9.33159 15.2699 9.33159Z" fill="white"/>
							</svg>
						</a>
					<?php endif; ?>
					<?php if( $social['linkedin'] ) : ?>
						<a href="<?php echo $social['linkedin']; ?>" class="header-social__link" id="header-social__linkedin">
							<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0 19.3903C0 8.68135 8.68135 0 19.3903 0C30.0993 0 38.7807 8.68135 38.7807 19.3903C38.7807 30.0993 30.0993 38.7807 19.3903 38.7807C8.68135 38.7807 0 30.0993 0 19.3903ZM9.93754 16.1182V29.0855H14.058V16.1182H9.93754ZM9.69517 11.9978C9.69517 13.3309 10.6647 14.3004 11.9978 14.3004C13.3309 14.3004 14.3004 13.3309 14.3004 11.9978C14.3004 10.6647 13.3309 9.69517 11.9978 9.69517C10.7859 9.69517 9.69517 10.6647 9.69517 11.9978ZM24.9651 29.0855H28.8431V21.087C28.8431 17.0877 26.4193 15.7546 24.1167 15.7546C22.0565 15.7546 20.6022 17.0877 20.2387 17.9361V16.1182H16.3606V29.0855H20.481V22.1777C20.481 20.3599 21.6929 19.3903 22.9048 19.3903C24.1167 19.3903 24.9651 19.9963 24.9651 22.0565V29.0855Z" fill="white"/>
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
			<?php endif; ?>
		</nav>
	</header>
	<!-- End Header -->
	<!-- Begin Main -->
	<main id="main">