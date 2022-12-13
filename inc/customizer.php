<?php
/**
 * TheSetup-Practice01 Theme Customizer
 *
 * @package TheSetup-Practice01
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function thesetup_practice01_customize_register( $wp_customize ) {


	$wp_customize->add_section('footer_settings', array(
        'title' => 'Footer Settings',
    ));

    $wp_customize->add_section('fb_meta_tags', array(
        'title' => 'FB Meta Tags',
    ));

	$text_inputs = array(
        array('name' => 'footer_newsletter_title', 'label' => 'Footer Newsletter Title', 'section' => 'footer_settings', 'default' => ''),
        array('name' => 'footer_newsletter_subtitle', 'label' => 'Footer Newsletter Subtitle', 'section' => 'footer_settings', 'default' => ''),
		array('name' => 'footer_newsletter_shortcode', 'label' => 'Footer Newsletter Shortcode', 'section' => 'footer_settings', 'default' => ''),
        array('name' => 'fb_meta_tag', 'label' => 'FB Home Meta Tag', 'section' => 'fb_meta_tags', 'default' => '')
    );

    foreach($text_inputs as $text){
        add_text_input($wp_customize, $text['name'], $text['label'], $text['section'], $text['default']);
    }

	$url_inputs = array(
        array('name'=> 'fb_url', 'label' => 'Facebook Url', 'section' => 'footer_settings', 'default' => ''),
        array('name'=> 'twitter_url', 'label' => 'Twitter Url', 'section' => 'footer_settings', 'default' => ''),
        array('name'=> 'ig_url', 'label' => 'Instagram Url', 'section' => 'footer_settings', 'default' => ''),
        array('name'=> 'yt_url', 'label' => 'Youtube Url', 'section' => 'footer_settings', 'default' => ''),
        array('name'=> 'terms_and_conditions_url', 'label' => 'Terms and Conditions Url', 'section' => 'footer_settings', 'default' => ''),
    );

	foreach($url_inputs  as $url){
        add_url_input($wp_customize, $url['name'], $url['label'], $url['section'], $url['default']);
    }

	$images = array(
        array('name' => 'footer_logo', 'label' => 'Footer Logo', 'section' => 'footer_settings', 'default' => ''),
		array('name' => 'instagram_icon', 'label' => 'Social Media Icon - Instagram', 'section' => 'footer_settings', 'default' => ''),
		array('name' => 'twitter_icon', 'label' => 'Social Media Icon - Twitter', 'section' => 'footer_settings', 'default' => ''),
        array('name' => 'youtube_icon', 'label' => 'Social Media Icon - Youtube', 'section' => 'footer_settings', 'default' => ''),
		array('name' => 'facebook_icon', 'label' => 'Social Media Icon - Facebook', 'section' => 'footer_settings', 'default' => '')
    );

	foreach($images  as $image){
        add_image($wp_customize, $image['name'], $image['label'], $image['section']);
    }

	// END ADDED SECTION

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'thesetup_practice01_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'thesetup_practice01_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'thesetup_practice01_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function thesetup_practice01_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function thesetup_practice01_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function thesetup_practice01_customize_preview_js() {
	wp_enqueue_script( 'thesetup-practice01-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'thesetup_practice01_customize_preview_js' );



function add_text_input($wp_customize, $name, $label, $section, $default = ''){
    $wp_customize->add_setting($name,
        array(
            'default' => $default
        )
    );

}

function add_url_input($wp_customize, $name, $label, $section, $default = '') {
    $wp_customize->add_setting($name,
        array(
            'default' => $default,
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control($name,
        array(
            'label' => $label,
            'section' => $section,
            'settings' => $name,
            'type' => 'url'
        )
    );
}

function add_image($wp_customize, $name, $label, $section){
    $wp_customize->add_setting($name, array(
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $name , array(
        'label' => $label,
        'settings'  => $name,
        'section'   => $section
    ) ));
}