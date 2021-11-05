<?php
/*
Template Name: Privacy
Template Post Type: page
*/
get_header( ); ?>
<?php if( have_posts( ) ): 
    while( have_posts( ) ): the_post( ); ?>
    <section class="section privacy" data-color="black">
        <div class="container">
            <h1 class="privacy-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </section>
    <?php endwhile;
endif; ?>
<?php get_footer(); ?>