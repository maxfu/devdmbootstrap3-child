<?php
function maxwell_customize_register($wp_customize){

    $wp_customize->add_section('maxwell_design_scheme', array(
        'title'    => __('Color Scheme', 'devdmbootstrap3'),
        'description' => '',
        'priority' => 120,
    ));

    //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('maxwell_theme_options[text_test]', array(
        'default'        => 'Arse!',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('maxwell_text_test', array(
        'label'      => __('Text Test', 'devdmbootstrap3'),
        'section'    => 'maxwell_color_scheme',
        'settings'   => 'maxwell_theme_options[text_test]',
    ));

    //  =============================
    //  = Radio Input               =
    //  =============================
    $wp_customize->add_setting('maxwell_theme_options[color_scheme]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control('maxwell_color_scheme', array(
        'label'      => __('Color Scheme', 'devdmbootstrap3'),
        'section'    => 'maxwell_color_scheme',
        'settings'   => 'maxwell_theme_options[color_scheme]',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));

    //  =============================
    //  = Checkbox                  =
    //  =============================
    $wp_customize->add_setting('maxwell_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control('display_header_text', array(
        'settings' => 'maxwell_theme_options[checkbox_test]',
        'label'    => __('Display Header Text'),
        'section'  => 'maxwell_color_scheme',
        'type'     => 'checkbox',
    ));


    //  =============================
    //  = Select Box                =
    //  =============================
     $wp_customize->add_setting('maxwell_theme_options[header_select]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));
    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'maxwell_theme_options[header_select]',
        'label'   => 'Select Something:',
        'section' => 'maxwell_color_scheme',
        'type'    => 'select',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));


    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('maxwell_theme_options[image_upload_test]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => __('Image Upload Test', 'devdmbootstrap3'),
        'section'  => 'maxwell_color_scheme',
        'settings' => 'maxwell_theme_options[image_upload_test]',
    )));

    //  =============================
    //  = File Upload               =
    //  =============================
    $wp_customize->add_setting('maxwell_theme_options[upload_test]', array(
        'default'           => 'arse',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'upload_test', array(
        'label'    => __('Upload Test', 'devdmbootstrap3'),
        'section'  => 'maxwell_color_scheme',
        'settings' => 'maxwell_theme_options[upload_test]',
    )));


    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('maxwell_theme_options[link_color]', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'devdmbootstrap3'),
        'section'  => 'maxwell_color_scheme',
        'settings' => 'maxwell_theme_options[link_color]',
    )));


    //  =============================
    //  = Page Dropdown             =
    //  =============================
    $wp_customize->add_setting('maxwell_theme_options[page_test]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('maxwell_page_test', array(
        'label'      => __('Page Test', 'devdmbootstrap3'),
        'section'    => 'maxwell_color_scheme',
        'type'    => 'dropdown-pages',
        'settings'   => 'maxwell_theme_options[page_test]',
    ));

    // =====================
    //  = Category Dropdown =
    //  =====================
    $categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('_s_f_slide_cat', array(
		'default'        => $default
	));
	$wp_customize->add_control( 'cat_select_box', array(
		'settings' => '_s_f_slide_cat',
		'label'   => 'Select Category:',
		'section'  => '_s_f_home_slider',
		'type'    => 'select',
		'choices' => $cats,
	));
}

add_action('customize_register', 'maxwell_customize_register');
?>
