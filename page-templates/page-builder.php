<?php
/*
Template Name: Page Builder
Template Post Type: page
*/
get_header( );
// Check value exists.
if( have_rows('modules') ):

    // Loop through rows.
    while ( have_rows('modules') ) : the_row();
        // Case Home Banner
        if( get_row_layout() == 'home_banner' ): ?>
            <section class="section home-banner" id="<?php the_sub_field( 'id' ); ?>" data-color="black">
                <div class="home-banner__slider a-right">
                    <?php if( $down_images = get_sub_field( 'down_images') ): ?>
                    <div class="home-main__slider">
                        <?php foreach( $down_images as $image ): 
                        $img_url = $image['sizes']['home-banner'];
                        $img_url_2x = $image['sizes']['home-banner-2x']; ?> 
                            <div class="home-main__slide">
                                <img src="<?php echo $img_url; ?>" srcset="<?php echo $img_url_2x; ?> 2x" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <?php if( $up_images = get_sub_field( 'up_images') ): ?>
                    <div class="home-sub__slider a-left">
                        <?php foreach( $up_images as $image ): 
                        $img_url = $image['sizes']['home-slider'];
                        $img_url_2x = $image['sizes']['home-slider-2x']; ?> 
                            <div class="home-sub__slide">
                                <img src="<?php echo $img_url; ?>" srcset="<?php echo $img_url_2x; ?> 2x" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if( $content = get_sub_field( 'content' ) ): ?>
                <div class="home-banner__content a-up sp-headline slide h-1">
                    <span><?php echo $content; ?></span>
                    <?php if( have_rows( 'dynamic_text' ) ): ?>
                    <span class="sp-words-wrapper">
                        <?php while( have_rows( 'dynamic_text' ) ): the_row( );
                            if( $text = get_sub_field( 'text' ) ): ?>
                            <b class="<?php echo get_row_index() == 1 ? 'is-visible' : 'is-hidden'; ?>">
                                <?php echo $text; ?>
                            </b>
                        <?php endif;
                        endwhile; ?>
                    </span>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </section>

        <?php
        // Case: Logos.
        elseif( get_row_layout() == 'logos' ):
            $id = get_sub_field( 'id' );
            $heading = get_sub_field( 'heading' );
            $style = get_sub_field( 'style' ); ?>
            <section class="section logos-module logos-module--<?php echo $style; ?>" id="<?php echo $id; ?>" data-color="black"> 
                <div class="container">
                    <?php if( $heading ) : ?>
                        <h2 class="section-title a-up"><?php echo $heading; ?></h2>
                    <?php endif; ?>
                </div>
                <?php if( have_rows( 'logos' )) : ?>
                    <div class="logos-module__carousel">
                        <div class="logos-module__slider slick-carousel a-up a-delay-1">
                            <?php while( have_rows( 'logos' ) ) : the_row(); 
                            $logo = get_sub_field( 'logo' );?>
                            <div class="logos-module__link">
                                <img src="<?php echo $logo['sizes']['logo-slider']; ?>" 
                                    srcset="<?php echo $logo['sizes']['logo-slider-2x']; ?> 2x"
                                    alt="">
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </section>         
            
        <?php
        // Case: Content
        elseif( get_row_layout() == 'content' ): 
            $id = get_sub_field( 'id' );
            $heading = get_sub_field( 'heading' ); 
            $content = get_sub_field( 'content' );?>
            <section class="section content-module full-height" id="<?php echo $id; ?>" data-color="black"  data-id="<?php echo get_row_index(); ?>">
                <div class="container">
                    <?php if( $heading ): ?>
                        <h2 class="section-title a-up"><?php echo $heading; ?></h2>
                    <?php endif; ?>
                    <?php if( $content ): ?>
                        <div class="content-module__content a-up a-delay-1">
                            <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

        <?php
        // Case : SVG Block
        elseif( get_row_layout() == 'svg_block' ): 
            $top = get_sub_field( 'top' );
            $bottom = get_sub_field( 'bottom' );
            $marquee_text = get_sub_field( 'gradient_marquee' ); ?>
            <section class="svg-section">
                <div class="section svg-block svg-block--top" id="<?php echo $top['id']; ?>" data-color="black">
                    <div class="container">
                        <?php if( $top['title'] ): ?>
                            <h2 class="section-title a-up"><?php echo $top['title']; ?></h2>
                        <?php endif; ?>
                        <div class="svg-block__inner">
                            <div class="svg-block__content a-up a-delay-1">
                                <?php if( $top['content'] ): ?>
                                    <div class="svg-block__text">
                                        <?php echo $top['content']; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="svg-block__image a-up a-delay-2">
                                <?php if( $top['image'] ): ?>
                                    <img src="<?php echo $top['image']; ?>" alt="">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section svg-block svg-block--bottom" id="<?php echo $bottom['id']; ?>" data-color="white">
                    <div class="container">
                        <?php if( $bottom['title'] ): ?>
                            <h2 class="section-title a-up"><?php echo $bottom['title']; ?></h2>
                        <?php endif; ?>
                        <div class="svg-block__inner">
                            <div class="svg-block__image a-up a-delay-1">
                                <?php if( $bottom['image'] ): ?>
                                    <img src="<?php echo $bottom['image']; ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="svg-block__content a-up a-delay-2">
                                <?php if( $bottom['content'] ): ?>
                                    <div class="svg-block__text">
                                        <?php echo $bottom['content']; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if( $marquee_text ): ?>
                    <!-- <div class="marquee">
                        <ul id="marquee">
                            <li>
                                <p class="marquee-text"><?php echo $marquee_text; ?></p>
                            </li>
                        </ul>
                    </div> -->
                    <!-- <marquee direction="up" scrollamount="15" loop="true" class="marquee">
                        <span class="marquee-text"><?php echo $marquee_text; ?></span>
                    </marquee> -->
                <?php endif; ?>
            </section>
        <?php
        // Case: Media
        elseif( get_row_layout() == 'media_content' ): ?>
            <section class="section media-content media-content--<?php echo get_sub_field('direction') ?: 'left'; ?> full-height" 
                    data-id="<?php echo get_row_index(); ?>"  
                    style="background-color: <?php the_sub_field( 'media_background' ); ?>" 
                    data-color="white">
                <div class="col media-content__image">
                    <?php if( $lottie = get_sub_field( 'lottie' ) ): ?>
                        <dotlottie-player src="<?php echo $lottie; ?>"  background="transparent"  speed="1" loop autoplay></dotlottie-player>
                    <?php else: ?>
                        <?php if( $image = get_sub_field( 'media' ) ): ?>
                            <img class="a-up" src="<?php echo $image; ?>" alt="">
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="col media-content__content <?php echo 'media-content__content--' . get_sub_field( 'content_color' ); ?>" style="background-color: <?php the_sub_field( 'content_background' ); ?>">
                    <div class="media-content__content--inner">
                        <?php if( $number = get_sub_field( 'number' ) ): ?>
                            <div class="media-content__number a-up"><?php echo $number; ?></div>
                        <?php endif; ?>
                        <?php if( $title = get_sub_field( 'heading' ) ): ?>
                            <h2 class="media-content__heading a-up a-delay-1"><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <?php if( $desc = get_sub_field( 'description' ) ): ?>
                            <p class="media-content__desc a-up a-delay-2"><?php echo $desc; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

        <?php
        // Case: Slider.
        elseif( get_row_layout() == 'slider' ): 
            $id = get_sub_field( 'id' );
            $heading = get_sub_field( 'heading' );
            if( have_rows( 'slides' ) ): ?>
                <section class="section slider" id="<?php echo $id; ?>" data-color="black">
                    <div class="container">
                        <?php if( $heading ): ?>
                            <h2 class="section-title a-up"><?php echo $heading; ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="slides slick-carousel">
                        <?php while( have_rows( 'slides' ) ): the_row( );
                            $image = get_sub_field( 'image' );
                            $img_url = $image['sizes']['slide'];
                            $img_url_2x = $image['sizes']['slide-2x'];
                            $name = get_sub_field( 'name' );
                            $info = get_sub_field( 'info' );
                            $bio = get_sub_field( 'bio' );
                            $testimonial = get_sub_field( 'testimonial' );
                            $background = get_sub_field( 'background' ); 
                            ?>
                            <div class="slide-wrapper">
                                <div class="slide" data-bg="<?php echo $background; ?>">
                                    <div class="slide-img">
                                        <img src="<?php echo $img_url; ?>" 
                                            <?php echo $img_url_2x ? 'srcset="' . $img_url . ' 2x"' : ''; ?>
                                            alt="">
                                    </div>
                                    <div class="slide-content">
                                        <?php if( $name ): ?>
                                            <div class="slide-content__name a-up"><?php echo $name; ?></div>
                                        <?php endif; ?> 
                                        <?php if( $info ): ?>
                                            <div class="slide-content__info a-up a-delay-1"><?php echo $info; ?></div>
                                        <?php endif; ?>
                                        <hr class="a-up a-delay-2">
                                        <?php if( $bio ): ?>
                                            <div class="slide-content__bio a-up a-delay-3"><?php echo $bio; ?></div>
                                        <?php endif; ?>
                                        <?php if( $testimonial ): ?>
                                            <div class="slide-content__testimonial a-up a-delay-4"><?php echo $testimonial; ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                </section>
            <?php endif; ?>

        <?php 
        // Case: Accordion
        elseif( get_row_layout() == 'accordions' ): 
            $theme = get_sub_field( 'theme' ) ?: 'dark'; 
            $color = $theme == 'dark' ? 'white' : 'black'; ?>
            <section class="section accordions accordions--<?php echo $theme; ?>" data-color="<?php echo $color; ?>" id="<?php the_sub_field( 'id' ); ?>">
                <div class="container">
                    <?php if( $heading = get_sub_field( 'heading' ) ): ?>
                        <h2 class="section-title a-up"><?php echo $heading; ?></h2>
                    <?php endif; ?>
                </div>
                <?php if( have_rows( 'accordions' ) ): 
                    while( have_rows( 'accordions') ): the_row( ); ?>
                    <div class="accordion a-up a-delay-<?php echo get_row_index(); ?>" id="accordion-<?php echo get_row_index(); ?>">
                        <div class="container">
                            <div class="accordion-header">
                                <?php if( $title = get_sub_field( 'title' ) ): ?>
                                    <div class="accordion-title"><?php echo $title; ?></div>
                                <?php endif; ?>
                                <?php if( $sub_title = get_sub_field( 'sub_title' ) ): ?>
                                    <div class="accordion-subtitle"><?php echo $sub_title; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="accordion-content">
                                <?php if( have_rows( 'content_row' ) ): 
                                    while( have_rows( 'content_row' ) ) : the_row( ); ?>
                                    <div class="accordion-content__inner">
                                        <?php if( $image = get_sub_field( 'image' ) ): ?>
                                        <div class="accordion-content__image">
                                            <img src="<?php echo $image; ?>" alt="">
                                        </div>
                                        <?php endif; ?>
                                        <?php if( $content = get_sub_field( 'content' ) ): ?>
                                        <div class="accordion-content__text">
                                            <?php echo $content; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                        <style>
                            #accordion-<?php echo get_row_index( ); ?>.active,
                            #accordion-<?php echo get_row_index( ); ?>.hover {
                                background: <?php the_sub_field( 'background_gradient' ); ?>
                            }
                        </style>
                    </div>
                <?php endwhile;
                endif; ?>
            </section>

        <?php 
        // Case: Blueprint Hero
        elseif( get_row_layout() == 'blueprint_banner' ): 
            $id = get_sub_field( 'id' ) ?: 'blueprint-banner';
            $image = get_sub_field( 'image' ); 
            $mobile_top = get_sub_field( 'mobile_bg_top' ); 
            $mobile_bottom = get_sub_field( 'mobile_bg_bottom' ); ?>
            <section class="section blueprint-banner" id="<?php echo $id; ?>" data-color="white">
                <div class="blueprint-banner__content">
                    <?php if( $heading = get_sub_field( 'heading' ) ): ?>
                        <h1 class="blueprint-banner__heading a-up"><?php echo $heading; ?></h1>
                    <?php endif; ?>
                    <?php if( $description = get_sub_field( 'description' ) ): ?>
                        <p class="blueprint-banner__desc a-up a-delay-1"><?php echo $description; ?></p>
                    <?php endif; ?>
                </div>
            </section>
            <style>
                @media only screen and (max-width: 768px) {
                    #<?php echo $id; ?> {
                        background-image: url(<?php echo $mobile_top; ?>), url(<?php echo $mobile_bottom; ?>);
                    }   
                }
                @media only screen and (min-width: 769px) {
                    #<?php echo $id; ?> {
                        background-image: url(<?php echo $image; ?>);
                    }   
                }
            </style>
        <?php
        // Case: Blueprint Experience
        elseif( get_row_layout() == 'blueprint_experience' ): 
            $id = get_sub_field( 'id' ) ?: 'blueprint-experience';
            $left_image = get_sub_field( 'left_image' );
            $right_image = get_sub_field( 'right_image' ); 
            $mobile_bg = get_sub_field( 'mobile_bg' ); ?>
            <section class="section blueprint-experience"
                    id="<?php echo $id; ?>"
                    data-color="black">
                <div class="container">
                    <div class="blueprint-experience__content">
                        <?php if( $heading = get_sub_field( 'heading' ) ): ?>
                            <h2 class="section-title blueprint-experience__title a-up"><?php echo $heading; ?></h2>
                        <?php endif; ?>
                        <?php if( $content = get_sub_field( 'content' ) ): ?>
                            <div class="blueprint-experience__text a-up a-delay-1">
                                <?php echo $content; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <style>
                @media only screen and (max-width: 768px) {
                    #<?php echo $id; ?> {
                        background-image: url(<?php echo $mobile_bg; ?>);
                    }
                }
                @media only screen and (min-width: 769px) {
                    #<?php echo $id; ?> {
                        background-image: url(<?php echo $left_image; ?>), url(<?php echo $right_image; ?>);
                    }
                }
            </style>
        <?php
        // Case: Contact
        elseif( get_row_layout() == 'contact' ): ?>
            <section class="section section-contact"
                    id="<?php the_sub_field( 'id' ); ?>"
                    data-color="black">
                <div class="container">
                    <?php if( $heading = get_sub_field( 'heading' ) ): ?>
                        <h2 class="section-contact__heading"><?php echo $heading; ?></h2>
                    <?php endif; ?>
                    <?php if( $cta = get_sub_field( 'cta' ) ): ?>
                        <a href="<?php echo $cta['url']; ?>" 
                            class="btn btn-black btn-contact"
                            target="<?php echo $cta['target']; ?>">
                            <?php echo $cta['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </section>

        <?php
        endif;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;

get_footer( );