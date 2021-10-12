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
            <section class="section home-banner">
            </section>

        <?php
        // Case: Logos.
        elseif( get_row_layout() == 'logos' ):
            $id = get_sub_field( 'id' );
            $heading = get_sub_field( 'heading' );
            $style = get_sub_field( 'style' ); ?>
            <section class="section logos-module logos-module--<?php echo $style; ?>" id="<?php echo $id; ?>">
                <div class="container">
                    <?php if( $heading ) : ?>
                        <h2 class="section-title a-up"><?php echo $heading; ?></h2>
                    <?php endif; ?>
                </div>
                <?php if( have_rows( 'logos' )) : ?>
                    <div class="logos-module__slider a-up a-delay-1">
                        <?php while( have_rows( 'logos' ) ) : the_row(); 
                        $link = get_sub_field( 'link' );
                        $logo = get_sub_field( 'logo' );
                        $logo_2x = get_sub_field( 'logo_2x' ); ?>
                        <a href="<?php echo $link; ?>" class="logos-module__link" target="__blank">
                            <img src="<?php echo $logo; ?>" 
                                <?php echo $logo_2x ? 'srcset="' . $logo_2x . ' 2x"' : ''; ?>
                                alt="">
                        </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </section>                
       
        <?php
        // Case: Slider.
        elseif( get_row_layout() == 'slider' ): 
            $id = get_sub_field( 'id' );
            $heading = get_sub_field( 'heading' );
            if( have_rows( 'slides' ) ): ?>
                <section class="section slider">
                    <div class="container">
                        <?php if( $heading ): ?>
                            <h2 class="section-title a-up"><?php echo $heading; ?></h2>
                        <?php endif; ?>
                        <div class="slides">
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
                            <div class="slide" data-bg="<?php echo $background; ?>">
                                <div class="slide-img">
                                    <div class="img-a">
                                        <div class="img-a-img">
                                            <img src="<?php echo $img_url; ?>" 
                                                <?php echo $img_url_2x ? 'srcset="' . $img_url . ' 2x"' : ''; ?>
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-content">
                                    <?php if( $name ): ?>
                                        <div class="slide-content__name"><?php echo $name; ?></div>
                                    <?php endif; ?> 
                                    <?php if( $info ): ?>
                                        <div class="slide-content__info"><?php echo $info; ?></div>
                                    <?php endif; ?>
                                    <hr>
                                    <?php if( $bio ): ?>
                                        <div class="slide-content__bio"><?php echo $bio; ?></div>
                                    <?php endif; ?>
                                    <?php if( $testimonial ): ?>
                                        <div class="slide-content__testimonial"><?php echo $testimonial; ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    </div>
                </section>
            <?php endif;
        endif;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;

get_footer( );