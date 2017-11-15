<?php
/**
 * Menus configuration.
 *
 * @package Webbox
 */

add_action( 'after_setup_theme', 'webbox_register_menus', 5 );
/**
 * Register menus.
 */
function webbox_register_menus() {

	register_nav_menus( array(
		'top'          => esc_html__( 'Top', 'webbox' ),
		'main'         => esc_html__( 'Main', 'webbox' ),
		'main_landing' => esc_html__( 'Landing Main', 'webbox' ),
		'footer'       => esc_html__( 'Footer', 'webbox' ),
		'social'       => esc_html__( 'Social', 'webbox' ),
	) );
}
