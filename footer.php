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

<?php 
    $footer_logo = get_theme_mod('footer_logo');

    $instagram_icon = get_theme_mod('instagram_icon');
    $twitter_icon = get_theme_mod('twitter_icon');
    $facebook_icon = get_theme_mod('facebook_icon');
    $youtube_icon = get_theme_mod('youtube_icon');

    $instagram_url = get_theme_mod('ig_url');
    $twitter_url = get_theme_mod('twitter_url');
    $facebook_url = get_theme_mod('fb_url');
    $yt_url = get_theme_mod('yt_url');
?>
    <footer id="colophon" class="site-footer">
        <!-- LOGO ROW -->
        <div class="footerLogo">
            <a href="#"><img src="<?php echo esc_url($footer_logo)?>" alt="grxcelyn logo"></a>
        </div>
        <!-- SOCIAL MEDIA ROW -->
        <div class="socialMedia">
            <ul>
                <?php the_widget('footer-sidebar-2'); ?>
                <?php if($instagram_url && $instagram_icon):?>
                    <a href="<?php echo esc_url($instagram_url)?>"><li><img src="<?php echo esc_url($instagram_icon)?>" alt="instagram footer icon"></li></a>
                <?php endif; ?>

                <?php if($facebook_url && $facebook_icon):?>
                    <a href="<?php echo esc_url($facebook_url)?>"><li><img src="<?php echo esc_url($facebook_icon)?>" alt="facebook footer icon"></li></a>
                <?php endif; ?>

                <?php if($twitter_url && $twitter_icon):?>
                    <a href="<?php echo esc_url($twitter_url)?>"><li><img src="<?php echo esc_url($twitter_icon)?>" alt="twitter footer icon"></li></a>
                <?php endif; ?>

                <?php if($yt_url && $youtube_icon):?>
                    <a href="<?php echo esc_url($yt_url)?>"><li><img src="<?php echo esc_url($youtube_icon)?>" alt="youtube footer icon"></li></a>
                <?php endif; ?>
            </ul>
        </div>
        <!-- NAVIGATION MENU -->
        <?php
            wp_nav_menu(array(
                'menu' => 'Nav Menu',
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-menu',
                'menu_id' => 'footer-id'
            ))
        ?>
        <!-- COPYRIGHT -->
        <div class="footerCopyright" >
            <span>© Grxcelyn</span>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
