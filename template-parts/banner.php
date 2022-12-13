<?php 

    $customizer_color = get_theme_mod('customize_color_one'); 
?>

<div class="banner-section">
    <img src="<?php the_field('banner_img') ?>" alt="">
    <!-- <h2 class="banner-text custom-banner">This is the banner section</h2> -->
    <h1 class="custom-banner banner-text" style="color: <?php echo esc_html($customizer_color);?>">Hello World</h1> 
</div>