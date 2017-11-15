<?php 
/**
 * Plugins configuration example 
 *
 * @var array
 */
 $plugins = array(
	 'cherry-testi' => array(
		 'name' => esc_html__( 'Cherry Testimonials', 'webbox' ),
		 'access' => 'skins',
	 ),
	 'power-builder-integrator' => array(
		 'name' => esc_html__( 'Power Builder Integrator', 'webbox' ),
		 'source' => 'remote',
		 'path' => 'https://github.com/templatemonster/power-builder-integrator/archive/v1.0.11.zip',
		 'access' => 'skins',
	 ),
	 'power-builder' => array(
		 'name' => esc_html__( 'Power Builder', 'webbox' ),
		 'source' => 'local',
		 'path' => WEBBOX_THEME_DIR . '/assets/includes/plugins/power-builder.zip',
		 'access' => 'skins',
	 ),
	 'cherry-data-importer' => array(
		 'name' => esc_html__( 'Cherry Data Importer', 'webbox' ),
		 'source' => 'remote',
		 'path' => 'https://github.com/CherryFramework/cherry-data-importer/archive/master.zip',
		 'access' => 'base',
	 ),

 );

/**
 * Skins configuration example
 *
 * @var array
 */

 $skins = array(
    'base' => array(
        'cherry-data-importer',
    ),
    'advanced' => array(
        'default' => array(
            'full'  => array(
                'cherry-testi',
                'power-builder-integrator',
                'power-builder',                 
            ),
            'lite'  => false,
            'demo'  => 'http://ld-wp.template-help.com/wordpress_63548',
            'thumb' => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.png',
            'name'  => esc_html__( 'Webbox', 'webbox' ),
        ),
         
         
    ),
);


 $texts = array(
    'theme-name' => 'Webbox'
);