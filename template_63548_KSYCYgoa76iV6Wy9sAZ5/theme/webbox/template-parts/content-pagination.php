<?php
/**
 * Template part for posts pagination.
 *
 * @package Webbox
 */
the_posts_pagination( apply_filters( 'webbox_content_posts_pagination',
	array(
		'prev_text' => '<i class="linearicon linearicon-arrow-left"></i>',
		'next_text' => '<i class="linearicon linearicon-arrow-right"></i>',
	)
) );
