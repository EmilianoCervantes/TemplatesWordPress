<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Webbox
 */

$footer_contact_block_visibility = get_theme_mod( 'footer_contact_block_visibility', webbox_theme()->customizer->get_default( 'footer_contact_block_visibility' ) );
?>

<div class="footer-container <?php echo webbox_get_invert_class_customize_option( 'footer_bg' ); ?>">
	<div class="site-info container">
		<div class="site-info-wrap">
			<?php webbox_footer_logo(); ?>
			<?php webbox_footer_menu(); ?>

			<?php if ( $footer_contact_block_visibility ) : ?>
			<div class="site-info__bottom">
			<?php endif; ?>
				<?php webbox_footer_copyright(); ?>
				<?php webbox_contact_block( 'footer' ); ?>
			<?php if ( $footer_contact_block_visibility ) : ?>
			</div>
			<?php endif; ?>

			<?php webbox_social_list( 'footer' ); ?>
		</div>

	</div><!-- .site-info -->
</div><!-- .container -->
