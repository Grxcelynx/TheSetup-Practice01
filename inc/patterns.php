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
			
			'categories'  => array( 'buttons' ),
		)
	);

}    

add_action( 'init', 'jc_block_patterns' );

?>