<?php
/**
 * Template part for top panel in header (style-4 layout).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Webbox
 */

// Don't show top panel if all elements are disabled.
if ( ! webbox_is_top_panel_visible() ) {
	return;
}
$message                  = get_theme_mod( 'top_panel_text', webbox_theme()->customizer->get_default( 'top_panel_text' ) );
$menu                     = has_nav_menu( 'top' ) && get_theme_mod( 'top_menu_visibility', webbox_theme()->customizer->get_default( 'top_menu_visibility' ) );
$contact_block_visibility = get_theme_mod( 'header_contact_block_visibility', webbox_theme()->customizer->get_default( 'header_contact_block_visibility' ) );
$social_menu_visibility   = get_theme_mod( 'header_social_links', webbox_theme()->customizer->get_default( 'header_social_links' ) );
?>

<div class="top-panel <?php echo webbox_get_invert_class_customize_option( 'top_panel_bg' ); ?>">
	<div class="top-panel__container container">
		<div class="top-panel__top">
			<div class="top-panel__left">
				<?php webbox_top_message( '<div class="top-panel__message">%s</div>' ); ?>
				<?php if ( empty( $message ) ) {
					webbox_contact_block( 'header' );
				} ?>
			</div>
			<div class="top-panel__right">
				<?php webbox_top_menu(); ?>
				<?php webbox_social_list( 'header' ); ?>
				<?php if ( ! $menu && ! $social_menu_visibility && ! empty( $message ) ) {
					webbox_contact_block( 'header' );
				} ?>
			</div>
		</div>

		<?php if ( $contact_block_visibility && ! empty( $message ) && ( $menu || $social_menu_visibility ) ) : ?>
			<div class="top-panel__bottom">
				<?php webbox_contact_block( 'header' ); ?>
			</div>
		<?php endif; ?>
	</div>
</div><!-- .top-panel -->
