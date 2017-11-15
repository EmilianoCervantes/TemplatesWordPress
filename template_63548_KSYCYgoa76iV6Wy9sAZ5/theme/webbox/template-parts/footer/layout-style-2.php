<?php
/**
 * The template for displaying the style-2 footer layout.
 *
 * @package Webbox
 */

?>
<div class="footer-container <?php echo webbox_get_invert_class_customize_option( 'footer_bg' ); ?>">
	<div class="site-info container">
		<?php
			webbox_footer_logo();
			webbox_footer_menu();
			webbox_contact_block( 'footer' );
			webbox_social_list( 'footer' );
			webbox_footer_copyright();
		?>
	</div><!-- .site-info -->
</div><!-- .container -->
