<?php
/**
 * Template part for style-3 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Webbox
 */
?>
<div class="header-container_wrap container">
	<?php webbox_vertical_main_menu(); ?>
	<div class="header-container__flex">
		<div class="site-branding">
			<?php webbox_header_logo() ?>
			<?php webbox_site_description(); ?>
		</div>

		<div class="header-icons">
			<?php webbox_header_search( '<div class="header-search"><span class="search-form__toggle"></span>%s<span class="search-form__close"></span></div>' ); ?>
			<?php webbox_vertical_menu_toggle( 'main-menu' ); ?>
			<?php webbox_header_btn(); ?>
		</div>

	</div>
</div>
