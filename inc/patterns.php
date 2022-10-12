<?php
/**
 * Plugin Name:      Joe’s Block Patterns
 * Plugin URI:       https://casabona.org
 * Description:      This is a simple plugin with some common block patterns I’m using. 
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
function jc_block_patterns() {

	register_block_pattern(
		'jc-block-patterns/jc-content-upgrade',
		array(
			'title'       => __( 'Content Upgrade', 'jc-block-patterns' ),
			
			'description' => _x( 'A simple set of blocks to encourage people to join the membership', 'jc-block-patterns' ),
			
			'content'     => "<!-- wp:heading -->\r\n<h2>Testing Blocks</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:quote -->\r\n<blockquote class=\"wp-block-quote\"><p>Testing blocks </p><cite>me </cite></blockquote>\r\n<!-- /wp:quote -->\r\n\r\n<!-- wp:paragraph -->\r\n<p></p>\r\n<!-- /wp:paragraph -->",
			
			'categories'  => array( 'Nicepage' ),
		)
	);

	register_block_pattern(
		'jc-block-patterns/jc-banner-layout',
		array(
			'title'       => __( 'Banner Layout', 'jc-block-patterns' ),
			
			'description' => _x( 'A simple set of blocks to encourage people to join the membership', 'jc-block-patterns' ),
			
			'content'     => "<!-- wp:image -->\r\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:quote -->\r\n<blockquote class=\"wp-block-quote\"><p></p></blockquote>\r\n<!-- /wp:quote -->",
			
			'categories'  => array( 'buttons' ),
		)
	);

	register_block_pattern(
		'jc-block-patterns/jc-nicepage-copy',
		array(
			'title'       => __( 'NicePage Copy', 'jc-block-patterns' ),
			
			'description' => _x( 'A simple set of blocks to encourage people to join the membership', 'jc-block-patterns' ),
			
			'content'     => "<!-- wp:columns {\"verticalAlignment\":null,\"className\":\"container-1\"} -->\r\n<div class=\"wp-block-columns container-1\"><!-- wp:column {\"verticalAlignment\":\"center\",\"className\":\"column1\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center column1\"><!-- wp:heading {\"className\":\"benefits-heading\"} -->\r\n<h2 class=\"benefits-heading\">​Hosting solution with benefits.</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"className\":\"benefits-p\"} -->\r\n<p class=\"benefits-p\">​Turn your ideas into reality with Static.<br>With a lot of powerful features, we guarantee simplicity and clarity.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:buttons -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"border\":{\"radius\":\"0px\"}},\"className\":\"benefits-btn\"} -->\r\n<div class=\"wp-block-button benefits-btn\"><a class=\"wp-block-button__link\" style=\"border-radius:0px\">read more</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"column2\"} -->\r\n<div class=\"wp-block-column column2\"><!-- wp:columns {\"className\":\"column2\"} -->\r\n<div class=\"wp-block-columns column2\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"benefit-col1\"} -->\r\n<div class=\"wp-block-column benefit-col1\"><!-- wp:image {\"align\":\"center\",\"id\":49,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image aligncenter size-full\"><img src=\"http://thesetuppractice01.local/wp-content/uploads/2022/10/icons8-lock-50.png\" alt=\"<a target=\&quot;_blank\&quot; href=\&quot;https://icons8.com/icon/94/lock\&quot;\&gt;Lock</a\&gt; icon by <a target=\&quot;_blank\&quot; href=\&quot;https://icons8.com\&quot;\&gt;Icons8</a\&gt;\" class=\"wp-image-49\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:heading {\"textAlign\":\"center\"} -->\r\n<h2 class=\"has-text-align-center\">​SSL Certificate</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button -->\r\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">free</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\"} -->\r\n<p class=\"has-text-align-center\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button -->\r\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">more</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->\r\n\r\n<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"benefit-col2\"} -->\r\n<div class=\"wp-block-column benefit-col2\"><!-- wp:image {\"align\":\"center\",\"id\":50,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image aligncenter size-full\"><img src=\"http://thesetuppractice01.local/wp-content/uploads/2022/10/icons8-sort-window-50.png\" alt=\"\" class=\"wp-image-50\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:heading {\"textAlign\":\"center\"} -->\r\n<h2 class=\"has-text-align-center\">​Code Editor</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\"} -->\r\n<p class=\"has-text-align-center\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button -->\r\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">more</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"className\":\"benefit-col4\"} -->\r\n<div class=\"wp-block-column benefit-col4\"><!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"benefit-col3\"} -->\r\n<div class=\"wp-block-column benefit-col3\"><!-- wp:image {\"align\":\"center\",\"id\":51,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image aligncenter size-full\"><img src=\"http://thesetuppractice01.local/wp-content/uploads/2022/10/icons8-globe-100.png\" alt=\"\" class=\"wp-image-51\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:heading {\"textAlign\":\"center\"} -->\r\n<h2 class=\"has-text-align-center\">​Personal Domain</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\"} -->\r\n<p class=\"has-text-align-center\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button -->\r\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">more</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->\r\n\r\n<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"id\":52,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image aligncenter size-full\"><img src=\"http://thesetuppractice01.local/wp-content/uploads/2022/10/icons8-storage-64.png\" alt=\"\" class=\"wp-image-52\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button -->\r\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">free</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons -->\r\n\r\n<!-- wp:heading {\"textAlign\":\"center\"} -->\r\n<h2 class=\"has-text-align-center\">​Media Storage</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\"} -->\r\n<p class=\"has-text-align-center\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->\r\n\r\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button -->\r\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">more</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
			
			'categories'  => array( 'Nicepage' ),
		)
	);

	

}    

add_action( 'init', 'jc_block_patterns' );

?>