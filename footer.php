<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TheSetup-Practice01
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footerBox">
        	<?php
            	wp_nav_menu(array(
                	'menu' => 'Nav Menu',
                	'theme_location' => 'footer-menu',
                	'menu_class' => 'footer-menu',
                	'menu_id' => 'footer-id'
            	))
        	?>

        </div>
        
		<div class="footerBox">
            <p>&copy; Grxcelyn Development</p>
        </div>
        <div class="footerBox">
            <div class="socialMedia">
                <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>
                <a href="https://twitter.com/i/flow/login" target="_blank"><i class="fa-brands fa-twitter-square fa-2x"></i></a>
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-square fa-2x"></i></a>
            </div>
        </div>
		
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'thesetup-practice01' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'thesetup-practice01' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'thesetup-practice01' ), 'thesetup-practice01', '<a href="http://underscores.me/">Grxcelyn</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
