<?php

  $software_company_elementor_theme_custom_setting_css = '';

	// Global Color
	$software_company_elementor_theme_color = get_theme_mod('software_company_elementor_theme_color', '#ed2122');
	$software_company_elementor_second_theme_color = get_theme_mod('software_company_elementor_second_theme_color', '#012122');

	$software_company_elementor_theme_custom_setting_css .=':root {';
		$software_company_elementor_theme_custom_setting_css .='--primary-theme-color: '.esc_attr($software_company_elementor_theme_color ).'!important;';
		$software_company_elementor_theme_custom_setting_css .='--secondary-theme-color: '.esc_attr($software_company_elementor_second_theme_color ).'!important;';
	$software_company_elementor_theme_custom_setting_css .='}';

	// Scroll to top alignment
	$software_company_elementor_scroll_alignment = get_theme_mod('software_company_elementor_scroll_alignment', 'right');

    if($software_company_elementor_scroll_alignment == 'right'){
        $software_company_elementor_theme_custom_setting_css .='.scroll-up{';
            $software_company_elementor_theme_custom_setting_css .='right: 30px;!important;';
			$software_company_elementor_theme_custom_setting_css .='left: auto;!important;';
        $software_company_elementor_theme_custom_setting_css .='}';
    }else if($software_company_elementor_scroll_alignment == 'center'){
        $software_company_elementor_theme_custom_setting_css .='.scroll-up{';
            $software_company_elementor_theme_custom_setting_css .='left: calc(50% - 10px) !important;';
        $software_company_elementor_theme_custom_setting_css .='}';
    }else if($software_company_elementor_scroll_alignment == 'left'){
        $software_company_elementor_theme_custom_setting_css .='.scroll-up{';
            $software_company_elementor_theme_custom_setting_css .='left: 30px;!important;';
			$software_company_elementor_theme_custom_setting_css .='right: auto;!important;';
        $software_company_elementor_theme_custom_setting_css .='}';
    }

    // Related Product

	$software_company_elementor_show_related_product = get_theme_mod('software_company_elementor_show_related_product', true );

	if($software_company_elementor_show_related_product != true){
		$software_company_elementor_theme_custom_setting_css .='.related.products{';
			$software_company_elementor_theme_custom_setting_css .='display: none;';
		$software_company_elementor_theme_custom_setting_css .='}';
	}	