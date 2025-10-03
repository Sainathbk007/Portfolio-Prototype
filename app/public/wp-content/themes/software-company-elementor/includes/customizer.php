<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'slider',
        'settings'    => 'software_company_elementor_logo_resizer',
        'label'       => __( 'Logo Size', 'software-company-elementor' ),
        'section'     => 'title_tagline',
        'default'     => 150,
        'choices'     => [
            'min'   => 50,
            'max'   => 300,
            'step'  => 1,
        ],
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_enable_logo_text',
		'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'software_company_elementor_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'software-company-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'software-company-elementor' ),
			'off' => esc_html__( 'Disable', 'software-company-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'software_company_elementor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'software-company-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'software-company-elementor' ),
			'off' => esc_html__( 'Disable', 'software-company-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_site_tittle_transform_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Text Transform', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'software_company_elementor_site_tittle_transform',
		'section'     => 'title_tagline',
		'default'     => 'none',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'software-company-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'software-company-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'software-company-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'software-company-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '.logo a'),
				'property' => ' text-transform',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_logo_settings_premium_features',
		'section'     => 'title_tagline',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Unlock More Features in the Premium Version!', 'software-company-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customizable Text Logo', 'software-company-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Enhanced Typography Options', 'software-company-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Priority Support', 'software-company-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'software-company-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/software-wordpress-theme', 'software-company-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'software-company-elementor' ) .'</a></div>',
	) );

	// Theme color

	Kirki::add_section( 'software_company_elementor_theme_color_setting', array(
		'title'    => __( 'Color Option', 'software-company-elementor' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_theme_color',
		'label'       => __( 'Theme color', 'software-company-elementor'),
		'description'    => esc_html__( 'To customize the colors of the homepage, use the Elementor editor', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_theme_color_setting',
		'type'        => 'color',
		'default'     => '#ed2122',
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_second_theme_color',
		'label'       => __( 'Theme Second color', 'software-company-elementor'),
		'section'     => 'software_company_elementor_theme_color_setting',
		'type'        => 'color',
		'default'     => '#012122',
	) );

	// TYPOGRAPHY SETTINGS
	Kirki::add_panel( 'software_company_elementor_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'software-company-elementor' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'software_company_elementor_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'software-company-elementor' ),
		'panel'    => 'software_company_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_h1_typography_heading',
		'section'     => 'software_company_elementor_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'software_company_elementor_h1_typography_font',
		'section'   =>  'software_company_elementor_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );


	//Heading 2 Section

	Kirki::add_section( 'software_company_elementor_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'software-company-elementor' ),
		'panel'    => 'software_company_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_h2_typography_heading',
		'section'     => 'software_company_elementor_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'software_company_elementor_h2_typography_font',
		'section'   =>  'software_company_elementor_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'software_company_elementor_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'software-company-elementor' ),
		'panel'    => 'software_company_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_h3_typography_heading',
		'section'     => 'software_company_elementor_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'software_company_elementor_h3_typography_font',
		'section'   =>  'software_company_elementor_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'software_company_elementor_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'software-company-elementor' ),
		'panel'    => 'software_company_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_h4_typography_heading',
		'section'     => 'software_company_elementor_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'software_company_elementor_h4_typography_font',
		'section'   =>  'software_company_elementor_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'software_company_elementor_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'software-company-elementor' ),
		'panel'    => 'software_company_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_h5_typography_heading',
		'section'     => 'software_company_elementor_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'software_company_elementor_h5_typography_font',
		'section'   =>  'software_company_elementor_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'software_company_elementor_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'software-company-elementor' ),
		'panel'    => 'software_company_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_h6_typography_heading',
		'section'     => 'software_company_elementor_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'software_company_elementor_h6_typography_font',
		'section'   =>  'software_company_elementor_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'software_company_elementor_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'software-company-elementor' ),
		'panel'    => 'software_company_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_body_typography_heading',
		'section'     => 'software_company_elementor_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'software_company_elementor_body_typography_font',
		'section'   =>  'software_company_elementor_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	// Theme Options Panel
	Kirki::add_panel( 'software_company_elementor_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'software-company-elementor' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'software_company_elementor_section_header',array(
		'title' => esc_html__( 'Header Settings', 'software-company-elementor' ),
		'description'    => esc_html__( 'Here you can add header information.', 'software-company-elementor' ),
		'panel' => 'software_company_elementor_theme_options_panel',
		'tabs'  => [
			'header' => [
				'label' => esc_html__( 'Header', 'software-company-elementor' ),
			],
			'menu'  => [
				'label' => esc_html__( 'Menu', 'software-company-elementor' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'tab'      => 'header',
		'settings'    => 'software_company_elementor_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_section_header',
		'default'     => 0,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'software-company-elementor' ),
			'off' => esc_html__( 'Disable', 'software-company-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'software_company_elementor_menu_size_heading',
		'section'     => 'software_company_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_menu_size',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'software-company-elementor' ),
		'type'        => 'text',
		'tab'      => 'menu',
		'section'     => 'software_company_elementor_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'software_company_elementor_menu_text_transform_heading',
		'section'     => 'software_company_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'menu',
		'settings'    => 'software_company_elementor_menu_text_transform',
		'section'     => 'software_company_elementor_section_header',
		'default'     => 'capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'software-company-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'software-company-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'software-company-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'software-company-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_menu_color',
		'label'       => __( 'Menu Color', 'software-company-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'software_company_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_menu_hover_color',
		'label'       => __( 'Menu Hover Color', 'software-company-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'default'     => '#fff',
		'section'     => 'software_company_elementor_section_header',
		'transport' => 'auto',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a:hover', '#main-menu ul li a:hover', '#main-menu li:hover > a','#main-menu a:focus','#main-menu li.focus > a','#main-menu ul li.current-menu-item > a','#main-menu ul li.current_page_item > a','#main-menu ul li.current-menu-parent > a','#main-menu ul li.current_page_ancestor > a','#main-menu ul li.current-menu-ancestor > a'),
				'property' => 'color',
			),

		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_submenu_color',
		'label'       => __( 'Submenu Color', 'software-company-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'software_company_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#012122',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a', '#main-menu ul.sub-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_submenu_hover_color',
		'label'       => __( 'Submenu Hover Color', 'software-company-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'software_company_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_submenu_hover_background_color',
		'label'       => __( 'Submenu Hover Background Color', 'software-company-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'software_company_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#ed2122',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'software_company_elementor_header_announcement_heading',
		'section'     => 'software_company_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Announcement', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Text', 'software-company-elementor' ),
		'settings' => 'software_company_elementor_header_announcement',
		'section'  => 'software_company_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'software_company_elementor_enable_opening_hours_heading',
		'section'     => 'software_company_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Opening Hours', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'software_company_elementor_enable_opening_hours',
		'section'  => 'software_company_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'software_company_elementor_enable_socail_link',
		'section'     => 'software_company_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'tab'      => 'header',
		'section'     => 'software_company_elementor_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'software-company-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'software-company-elementor' ),
		'settings'     => 'software_company_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'software-company-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'software-company-elementor' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'software-company-elementor' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'software-company-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'software-company-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );
	
	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'software_company_elementor_logo_settings_premium_features_header',
		'section'     => 'software_company_elementor_section_header',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Enhance your header design now!', 'software-company-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customize your header background color', 'software-company-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Adjust icon and text font sizes', 'software-company-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Explore enhanced typography options', 'software-company-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'software-company-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/software-wordpress-theme', 'software-company-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'software-company-elementor' ) .'</a></div>',
	) );

	//ADDITIONAL SETTINGS

	Kirki::add_section( 'software_company_elementor_additional_setting',array(
		'title' => esc_html__( 'Additional Settings', 'software-company-elementor' ),
		'panel' => 'software_company_elementor_theme_options_panel',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'software-company-elementor' ),
			],
			'header-image'  => [
				'label' => esc_html__( 'Header Image', 'software-company-elementor' ),
			],
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_scroll_alignment_heading',
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Position', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'radio-buttonset',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_scroll_alignment',
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => 'right',
		'choices'     => [
			'left' => esc_html__( 'left', 'software-company-elementor' ),
			'center' => esc_html__( 'center', 'software-company-elementor' ),
			'right' => esc_html__( 'right', 'software-company-elementor' ),
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_scroller_border_radius_heading',
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Border Radius', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'slider',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_scroller_border_radius',
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => '3',
		'choices'     => [
			'min'  => 0,
			'max'  => 25,
			'step' => 1,
		],
		'output' => array(
			array(
				'element'  => '.scroll-up a',
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_cursor_outline_heading',
		'section'     => 'software_company_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dot Cursor', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_cursor_outline',
		'label'       => esc_html__( 'Enable or Disable Dot Cursor', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_progress_bar_heading',
		'section'     => 'software_company_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_progress_bar',
		'label'       => esc_html__( 'Enable or Disable Progress Bar', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_progress_bar_position_heading',
		'section'     => 'software_company_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar Position', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
		'active_callback'  => [
			[
				'setting'  => 'software_company_elementor_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_progress_bar_position',
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => 'top',
		'choices'     => [
			'top' => esc_html__( 'Top', 'software-company-elementor' ),
			'bottom' => esc_html__( 'Bottom', 'software-company-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'software_company_elementor_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_progress_bar_color_heading',
		'section'     => 'software_company_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar Color', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
		'active_callback'  => [
			[
				'setting'  => 'software_company_elementor_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_progress_bar_color',
		'tab'      => 'general',
		'label'       => __( 'Color', 'software-company-elementor' ),
		'type'        => 'color',
		'section'     => 'software_company_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#ed2122',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '#elemento-progress-bar',
				'property' => 'background-color',
			),
		),
		'active_callback'  => [
			[
				'setting'  => 'software_company_elementor_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_single_page_layout_heading',
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'software_company_elementor_single_page_layout',
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'software-company-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'software-company-elementor' ),
			'One Column' => esc_html__( 'One Column', 'software-company-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'software_company_elementor_header_background_attachment_heading',
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'header-image',
		'settings'    => 'software_company_elementor_header_background_attachment',
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'software-company-elementor' ),
			'fixed' => esc_html__( 'Fixed', 'software-company-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'software_company_elementor_header_image_height_heading',
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image height', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_header_image_height',
		'tab'      => 'header-image',
		'label'       => __( 'Image Height', 'software-company-elementor' ),
		'description'    => esc_html__( 'Enter a value in pixels. Example:500px', 'software-company-elementor' ),
		'type'        => 'text',
		'default'    => [
			'desktop' => '550px',
			'tablet'  => '350px',
			'mobile'  => '200px',
		],
		'responsive' => true,
		'section'     => 'software_company_elementor_additional_setting',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.header-image-box'),
				'property' => 'height',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'software_company_elementor_header_overlay_heading',
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'software-company-elementor' ),
		'type'        => 'color',
		'tab'      => 'header-image',
		'section'     => 'software_company_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000080',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'software_company_elementor_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'software_company_elementor_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'software_company_elementor_blog_post',array(
		'title' => esc_html__( 'Post Settings', 'software-company-elementor' ),
		'description'    => esc_html__( 'Here you can add post information.', 'software-company-elementor' ),
		'panel' => 'software_company_elementor_theme_options_panel',
		'tabs'  => [
			'blog-post' => [
				'label' => esc_html__( 'Blog Post', 'software-company-elementor' ),
			],
			'single-post'  => [
				'label' => esc_html__( 'Single Post', 'software-company-elementor' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'software_company_elementor_enable_post_animation_heading',
		'section'     => 'software_company_elementor_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Animation', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'software_company_elementor_enable_post_animation',
		'label'       => esc_html__( 'Enable or Disable Blog Post Animation', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'software_company_elementor_post_layout_heading',
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'blog-post',
		'settings'    => 'software_company_elementor_post_layout',
		'section'     => 'software_company_elementor_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'software-company-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'software-company-elementor' ),
			'One Column' => esc_html__( 'One Column', 'software-company-elementor' ),
			'Three Columns' => esc_html__( 'Three Columns', 'software-company-elementor' ),
			'Four Columns' => esc_html__( 'Four Columns', 'software-company-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'software_company_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'software_company_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'software_company_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'software_company_elementor_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'software_company_elementor_length_setting_heading',
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'tab'      => 'blog-post',
		'settings'    => 'software_company_elementor_length_setting',
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
						'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'software_company_elementor_show_pagination_heading',
		'section'     => 'software_company_elementor_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Pagination', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'software_company_elementor_show_pagination',
		'label'       => esc_html__( 'Enable or Disable Blog Post Pagination', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'software_company_elementor_single_post_date_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Date', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'software_company_elementor_single_post_author_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Author', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'software_company_elementor_single_post_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Comment', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'software-company-elementor' ),
		'settings'    => 'software_company_elementor_single_post_tag',
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'software-company-elementor' ),
		'settings'    => 'software_company_elementor_single_post_category',
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'software_company_elementor_post_comment_show_hide',
		'label'       => esc_html__( 'Show / Hide Comment Box', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'software_company_elementor_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'software_company_elementor_single_post_radius',
		'section'     => 'software_company_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'software-company-elementor' ),
		'type'        => 'text',
		'tab'      => 'single-post',
		'section'     => 'software_company_elementor_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'software_company_elementor_show_related_post_heading',
		'section'     => 'software_company_elementor_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Related post', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'software_company_elementor_show_related_post',
		'label'       => esc_html__( 'Enable or Disable Related post', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'software_company_elementor_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'software-company-elementor' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'software-company-elementor' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'software_company_elementor_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'software-company-elementor' ),
		'settings'    => 'software_company_elementor_shop_page_layout',
		'section'     => 'software_company_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'software-company-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'software-company-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'software_company_elementor_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'software-company-elementor' ),
		'settings'    => 'software_company_elementor_products_per_row',
		'section'     => 'software_company_elementor_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'software-company-elementor' ),
		'settings'    => 'software_company_elementor_products_per_page',
		'section'     => 'software_company_elementor_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'software_company_elementor_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'software-company-elementor' ),
		'settings'    => 'software_company_elementor_single_product_sidebar_layout',
		'section'     => 'software_company_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'software-company-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'software-company-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'software_company_elementor_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_products_button_border_radius_heading',
		'section'     => 'software_company_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'software_company_elementor_products_button_border_radius',
		'section'     => 'software_company_elementor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_sale_badge_position_heading',
		'section'     => 'software_company_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'software_company_elementor_sale_badge_position',
		'section'     => 'software_company_elementor_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'software-company-elementor' ),
			'left' => esc_html__( 'Left', 'software-company-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_products_sale_font_size_heading',
		'section'     => 'software_company_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'software_company_elementor_products_sale_font_size',
		'section'     => 'software_company_elementor_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_show_related_product_heading',
		'section'     => 'software_company_elementor_woocommerce_settings',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Related Product', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'software_company_elementor_show_related_product',
		'label'       => esc_html__( 'Enable or Disable Related Product', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	// No Results Page Settings

	Kirki::add_section( 'software_company_elementor_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'software-company-elementor' ),
		'panel'    => 'software_company_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_page_not_found_title_heading',
		'section'     => 'software_company_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'software_company_elementor_page_not_found_title',
		'section'  => 'software_company_elementor_no_result_section',
		'default'  => esc_html__('404 Error!', 'software-company-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_page_not_found_text_heading',
		'section'     => 'software_company_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'software_company_elementor_page_not_found_text',
		'section'  => 'software_company_elementor_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'software-company-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'     => 'custom',
		'settings' => 'software_company_elementor_page_not_found_line_break',
		'section'  => 'software_company_elementor_no_result_section',
		'default'  => '<hr>',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_no_results_title_heading',
		'section'     => 'software_company_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'software_company_elementor_no_results_title',
		'section'  => 'software_company_elementor_no_result_section',
		'default'  => esc_html__('Nothing Found', 'software-company-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_no_results_content_heading',
		'section'     => 'software_company_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'software_company_elementor_no_results_content',
		'section'  => 'software_company_elementor_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'software-company-elementor'),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'software_company_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'software-company-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'software-company-elementor' ),
		'panel'    => 'software_company_elementor_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_show_footer_widget_heading',
		'section'     => 'software_company_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'software_company_elementor_show_footer_widget',
		'label'       => esc_html__( 'Footer Widget', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'software_company_elementor_show_footer_copyright',
		'label'       => esc_html__( 'Footer Copyright', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_footer_text_heading',
		'section'     => 'software_company_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'software_company_elementor_footer_text',
		'section'  => 'software_company_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_footer_enable_heading',
		'section'     => 'software_company_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'software_company_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'software-company-elementor' ),
			'off' => esc_html__( 'Disable', 'software-company-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_footer_background_widget_heading',
		'section'     => 'software_company_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'software_company_elementor_footer_background_widget',
		'type'        => 'background',
		'section'     => 'software_company_elementor_footer_section',
		'default'     => [
			'background-color'      => 'rgba(1, 33, 34,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_footer_widget_alignment_heading',
		'section'     => 'software_company_elementor_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Alignment', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'software_company_elementor_footer_widget_alignment',
		'section'     => 'software_company_elementor_footer_section',
		'default'     =>[
			'desktop' => 'left',
			'tablet'  => 'left',
			'mobile'  => 'center',
		],
		'responsive' => true,
		'label'       => __( 'Widget Alignment', 'software-company-elementor' ),
		'transport' => 'auto',
		'choices'     => [
			'center' => esc_html__( 'center', 'software-company-elementor' ),
			'right' => esc_html__( 'right', 'software-company-elementor' ),
			'left' => esc_html__( 'left', 'software-company-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.footer-area',
				'property' => 'text-align',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_footer_copright_color_heading',
		'section'     => 'software_company_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#012122',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_footer_copright_text_color_heading',
		'section'     => 'software_company_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_logo_settings_premium_features_footer',
		'section'     => 'software_company_elementor_footer_section',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Elevate your footer with premium features:', 'software-company-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Tailor your footer layout', 'software-company-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Integrate an email subscription form', 'software-company-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Personalize social media icons', 'software-company-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'software-company-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/software-wordpress-theme', 'software-company-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'software-company-elementor' ) .'</a></div>',
	) );

	// Footer Social Icons Section

	Kirki::add_section( 'software_company_elementor_footer_social_media_section', array(
		'title'          => esc_html__( 'Footer Social Icons', 'software-company-elementor' ),
		'panel'    => 'software_company_elementor_theme_options_panel',
		'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_footer_social_icon_hide_heading',
		'section'     => 'software_company_elementor_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable or Disable your Footer Social Icon', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'software_company_elementor_footer_social_icon_hide',
		'label'       => esc_html__( 'Enable or Disable Social Icon.', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_footer_social_media_section',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'software_company_elementor_enable_footer_socail_link_align_heading',
		'section'     => 'software_company_elementor_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Text Align', 'software-company-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'software_company_elementor_enable_footer_socail_link_align',
		'type'        => 'select',
		'priority'    => 10,
		'label'       => __( 'Text Align', 'software-company-elementor' ),
		'section'     => 'software_company_elementor_footer_social_media_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'software-company-elementor' ),
			'right' => esc_html__( 'right', 'software-company-elementor' ),
			'left' => esc_html__( 'left', 'software-company-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '.footer-links'),
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'priority'    => 10,
		'settings'    => 'software_company_elementor_enable_footer_socail_link',
		'section'     => 'software_company_elementor_footer_social_media_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Link', 'software-company-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'priority'    => 10,
		'section'     => 'software_company_elementor_footer_social_media_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Social Icons', 'software-company-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'software-company-elementor' ),
		'settings'     => 'software_company_elementor_social_links_settings_footer',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'software-company-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'software-company-elementor' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'software-company-elementor' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'software-company-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'software-company-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );	

}