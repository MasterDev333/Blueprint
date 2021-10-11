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

        // Case: Logos.
        if( get_row_layout() == 'logos' ):
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
        // Case: Download layout.
        elseif( get_row_layout() == 'download' ): 
            $file = get_sub_field('file');
            // Do something...

        endif;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;

get_footer( );