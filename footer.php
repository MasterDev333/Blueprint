</main>
<?php
$social = get_field( 'social', 'options' );
$footer_text = get_field( 'footer_text', 'options' ); 
$footer_style = get_field( 'footer_style' ) ?: 'normal';
?>
<footer class="footer footer--<?php echo $footer_style; ?>">
    <div class="footer-top">
        <div class="container a-up">
            <?php if( $social['title'] ) : ?>
                <p class="footer-top__title"><?php echo $social['title']; ?></p>
            <?php endif; ?>
            <?php if( $social['instagram'] ) : ?>
                <a href="<?php echo $social['instagram']; ?>" class="footer-social" id="footer-social__insta" target="_blank">
                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29 34.075C26.2812 34.075 23.925 31.9 23.925 29C23.925 26.2812 26.1 23.925 29 23.925C31.7188 23.925 34.075 26.1 34.075 29C34.075 31.7187 31.7188 34.075 29 34.075Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M35.1625 16.675H22.8375C21.3875 16.8562 20.6625 17.0375 20.1188 17.2187C19.3938 17.4 18.85 17.7625 18.3063 18.3062C17.876 18.7365 17.6727 19.1668 17.427 19.6868C17.3622 19.8239 17.2943 19.9676 17.2188 20.1187C17.1907 20.2029 17.1583 20.2913 17.1236 20.3861C16.934 20.9042 16.675 21.6118 16.675 22.8375V35.1625C16.8563 36.6125 17.0375 37.3375 17.2188 37.8812C17.4 38.6062 17.7625 39.15 18.3063 39.6937C18.7365 40.124 19.1668 40.3273 19.6868 40.573C19.824 40.6378 19.9674 40.7056 20.1188 40.7812C20.2029 40.8093 20.2913 40.8417 20.3861 40.8764C20.9042 41.066 21.6118 41.325 22.8375 41.325H35.1625C36.6125 41.1437 37.3375 40.9625 37.8812 40.7812C38.6062 40.6 39.15 40.2375 39.6937 39.6937C40.124 39.2635 40.3273 38.8332 40.573 38.3132C40.6378 38.176 40.7056 38.0325 40.7812 37.8812C40.8093 37.7971 40.8417 37.7087 40.8764 37.6139C41.066 37.0958 41.325 36.3882 41.325 35.1625V22.8375C41.1437 21.3875 40.9625 20.6625 40.7812 20.1187C40.6 19.3937 40.2375 18.85 39.6937 18.3062C39.2635 17.876 38.8332 17.6727 38.3132 17.427C38.1762 17.3623 38.0323 17.2943 37.8812 17.2187C37.7971 17.1907 37.7087 17.1583 37.6139 17.1236C37.0958 16.934 36.3882 16.675 35.1625 16.675ZM29 21.2062C24.65 21.2062 21.2062 24.65 21.2062 29C21.2062 33.35 24.65 36.7937 29 36.7937C33.35 36.7937 36.7937 33.35 36.7937 29C36.7937 24.65 33.35 21.2062 29 21.2062ZM38.7875 21.025C38.7875 22.026 37.976 22.8375 36.975 22.8375C35.974 22.8375 35.1625 22.026 35.1625 21.025C35.1625 20.024 35.974 19.2125 36.975 19.2125C37.976 19.2125 38.7875 20.024 38.7875 21.025Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 29C0 12.9837 12.9837 0 29 0C45.0163 0 58 12.9837 58 29C58 45.0163 45.0163 58 29 58C12.9837 58 0 45.0163 0 29ZM22.8375 13.9562H35.1625C36.7937 14.1375 37.8812 14.3187 38.7875 14.6812C39.875 15.225 40.6 15.5875 41.5062 16.4937C42.4125 17.4 42.9563 18.3062 43.3188 19.2125C43.6813 20.1187 44.0437 21.2062 44.0437 22.8375V35.1625C43.8625 36.7937 43.6813 37.8812 43.3188 38.7875C42.775 39.875 42.4125 40.6 41.5062 41.5062C40.6 42.4125 39.6937 42.9562 38.7875 43.3187C37.8812 43.6812 36.7937 44.0437 35.1625 44.0437H22.8375C21.2063 43.8625 20.1188 43.6812 19.2125 43.3187C18.125 42.775 17.4 42.4125 16.4938 41.5062C15.5875 40.6 15.0438 39.6937 14.6813 38.7875C14.3188 37.8812 13.9562 36.7937 13.9562 35.1625V22.8375C14.1375 21.2062 14.3188 20.1187 14.6813 19.2125C15.225 18.125 15.5875 17.4 16.4938 16.4937C17.4 15.5875 18.3063 15.0437 19.2125 14.6812C20.1188 14.3187 21.2063 13.9562 22.8375 13.9562Z" fill="white"/>
                    </svg>
                    <span>Instagram</span>
                </a>
            <?php endif; ?>
            <?php if( $social['linkedin'] ) : ?>
                <a href="<?php echo $social['linkedin']; ?>" class="footer-social" id="footer-social__linkedin" target="_blank">
                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 29C0 12.9837 12.9837 0 29 0C45.0163 0 58 12.9837 58 29C58 45.0163 45.0163 58 29 58C12.9837 58 0 45.0163 0 29ZM14.8625 24.1063V43.5H21.025V24.1063H14.8625ZM14.5 17.9438C14.5 19.9375 15.95 21.3875 17.9438 21.3875C19.9375 21.3875 21.3875 19.9375 21.3875 17.9438C21.3875 15.95 19.9375 14.5 17.9438 14.5C16.1313 14.5 14.5 15.95 14.5 17.9438ZM37.3375 43.5H43.1375V31.5375C43.1375 25.5562 39.5125 23.5625 36.0687 23.5625C32.9875 23.5625 30.8125 25.5562 30.2687 26.825V24.1063H24.4688V43.5H30.6312V33.1688C30.6312 30.45 32.4437 29 34.2562 29C36.0687 29 37.3375 29.9062 37.3375 32.9875V43.5Z" fill="white"/>
                    </svg>
                    <span>Linkedin</span>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="footer-main">
        <img class="footer-shape a-up" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_shape.svg" alt="">
        <a href="<?php echo esc_url( home_url( ) ); ?>"><img class="footer-logo a-up" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.svg" alt="Individual"></a>
        <?php if( $footer_text ) : ?>
            <p class="footer-text a-up"><?php echo $footer_text; ?></p>
        <?php endif; ?>
    </div>
    <div class="footer-bottom">
        <?php if( have_rows( 'footer_links', 'options' ) ) : ?>
            <?php while( have_rows( 'footer_links', 'options' ) ) : the_row( ); 
                $link = get_sub_field( 'link' ); ?>
                <a href="<?php echo $link['url']; ?>" class="footer-link" target="<?php echo $link['target']; ?>">
                    <?php echo $link['title']; ?>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
        <p class="footer-copy">&copy; <?php echo date('Y'); ?> Individual, Inc.</p>
    </div>
</footer>

<!-- Popup -->
<div class="popup">
    <button class="popup-close">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 5L4.99999 19M5 5L19 19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
    <div class="popup-inner">
        <?php if( $connect_heading = get_field( 'connect_heading', 'options' ) ): ?>
        <h2 class="popup-header"><?php echo $connect_heading; ?></h2>
        <?php endif; ?>
        <?php if( $form_code = get_field( 'form_code', 'options' ) ): ?>
        <div class="popup-form">
            <?php echo $form_code; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php wp_footer(); ?>

