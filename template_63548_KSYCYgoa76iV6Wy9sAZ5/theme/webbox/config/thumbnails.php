<?php
/**
 * Thumbnails configuration.
 *
 * @package Webbox
 */

add_action( 'after_setup_theme', 'webbox_register_image_sizes', 5 );
/**
 * Register image sizes.
 */
function webbox_register_image_sizes() {
	set_post_thumbnail_size( 418, 315, true );

	// Registers a new image sizes.
	add_image_size( 'webbox-thumb-s', 150, 150, true );
	add_image_size( 'webbox-slider-thumb', 158, 88, true );
	add_image_size( 'webbox-thumb-m', 400, 400, true );
	add_image_size( 'webbox-thumb-masonry', 418, 9999 );
	add_image_size( 'webbox-thumb-l', 886, 668, true );
	add_image_size( 'webbox-thumb-l-2', 886, 315, true );
	add_image_size( 'webbox-thumb-xl', 1920, 1080, true );
	add_image_size( 'webbox-author-avatar', 512, 512, true );
	add_image_size( 'webbox-thumb-1355-1020', 1355, 1020, true );
}
