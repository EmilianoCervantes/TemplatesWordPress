<?php
/**
 * Default manifest file
 *
 * @var array
 */
$settings = array(
	'xml' => false,
	'advanced_import' => array(
	    'default' => array(
	        'label'    => esc_html__( 'Default', 'webbox' ),
	        'full'     => get_template_directory() . '/assets/demo-content/default/default-full.xml',
	        'lite'     => get_template_directory() . '/assets/demo-content/default/default-full.xml',
	        'thumb'    => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.png',
	        'demo_url' => 'https://ld-wp.template-help.com/wordpress_63548',
	    ),
	),
	'slider' => false,
	'import' => array(
	    'chunk_size' => 5,
	),
	'export' => array(
	    'options' => array(
	        'mprm_settings',
	        'bp-pages',
	        'bp-active-components',
	        'mp_timetable_general',
	        'woocommerce_default_country',
	        'woocommerce_shop_page_id',
	        'woocommerce_default_catalog_orderby',
	        'shop_catalog_image_size',
	        'shop_single_image_size',
	        'shop_thumbnail_image_size',
	        'woocommerce_cart_page_id',
	        'woocommerce_checkout_page_id',
	        'woocommerce_terms_page_id',
	        'tm_woowishlist_page',
	        'tm_woocompare_page',
	        'tm_woocompare_enable',
	        'tm_woocompare_show_in_catalog',
	        'tm_woocompare_show_in_single',
	        'tm_woocompare_compare_text',
	        'tm_woocompare_remove_text',
	        'tm_woocompare_page_btn_text',
	        'tm_woocompare_show_in_catalog',
	        'cherry_projects_options',
	        'cherry_projects_options_default',
	        'cherry-team',
	        'cherry-team_default',
	        'cherry-services',
	        'cherry-services_default',
	    ),
	    'tables' => array(
	        'mp_timetable_data',
	    ),
	),
);