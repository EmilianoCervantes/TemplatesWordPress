<?php
/**
 * Template part for style-5 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Webbox
 */
?>
<div class="header-container_wrap container">
	<div class="header-container__flex">
		<div class="site-branding">
			<?php webbox_header_logo() ?>
			<?php webbox_site_description(); ?>
		</div>
		<?php webbox_main_menu(); ?>
		<?php webbox_header_btn(); ?>
	</div>
</div>
