<?php
/**
 * Template part to display a single post while in a layout posts loop
 *
 * @package Webbox
 * @subpackage widgets
 */

printf( '<div class="widget-fpblock__container widget-fpblock__items widget-fpblock__item %1$s">%2$s</div>', esc_attr( $classes ), join( '', $_data ) );
