<?php
/**
 * Template part for style-4 header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Webbox
 */

$search       = get_theme_mod( 'header_search', webbox_theme()->customizer->get_default( 'header_search' ) );
?>
<div class="header-container_wrap container">
	<div class="header-container__flex">
		<div class="site-branding">
			<?php webbox_header_logo() ?>
			<?php webbox_site_description(); ?>
		</div>

		<?php webbox_main_menu(); ?>
		
		<?php if ( $search ) : ?>
		<div class="header-icons divider">
			<?php webbox_header_search( '<div class="header-search"><span class="search-form__toggle"></span>%s<span class="search-form__close"></span></div>' ); ?>
		</div>
		<?php endif; ?>

		<?php webbox_header_btn(); ?>
	</div>
</div>
