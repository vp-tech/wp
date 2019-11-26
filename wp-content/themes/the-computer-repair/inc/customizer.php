<?php
/**
 * The Computer Repair Theme Customizer
 *
 * @package The Computer Repair
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function the_computer_repair_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'the_computer_repair_custom_controls' );

function the_computer_repair_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/customize-homepage/class-customize-homepage.php' );

	//add home page setting pannel
	$wp_customize->add_panel( 'the_computer_repair_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'the-computer-repair' ),
	) );

	// Layout
	$wp_customize->add_section( 'the_computer_repair_left_right', array(
    	'title'      => __( 'General Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_panel_id'
	) );

	$wp_customize->add_setting('the_computer_repair_width_option',array(
        'default' => __('Full Width','the-computer-repair'),
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control(new The_Computer_Repair_Image_Radio_Control($wp_customize, 'the_computer_repair_width_option', array(
        'type' => 'select',
        'label' => __('Width Layouts','the-computer-repair'),
        'description' => __('Here you can change the width layout of Website.','the-computer-repair'),
        'section' => 'the_computer_repair_left_right',
        'choices' => array(
            'Full Width' => get_template_directory_uri().'/assets/images/full-width.png',
            'Wide Width' => get_template_directory_uri().'/assets/images/wide-width.png',
            'Boxed' => get_template_directory_uri().'/assets/images/boxed-width.png',
    ))));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('the_computer_repair_theme_options',array(
        'default' => __('Right Sidebar','the-computer-repair'),
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'	        
	) );
	$wp_customize->add_control('the_computer_repair_theme_options', array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','the-computer-repair'),
        'description' => __('Here you can change the sidebar layout for posts. ','the-computer-repair'),
        'section' => 'the_computer_repair_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','the-computer-repair'),
            'Right Sidebar' => __('Right Sidebar','the-computer-repair'),
            'One Column' => __('One Column','the-computer-repair'),
            'Three Columns' => __('Three Columns','the-computer-repair'),
            'Four Columns' => __('Four Columns','the-computer-repair'),
            'Grid Layout' => __('Grid Layout','the-computer-repair')
        ),
	));

	$wp_customize->add_setting('the_computer_repair_page_layout',array(
        'default' => __('One Column','the-computer-repair'),
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_page_layout',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','the-computer-repair'),
        'description' => __('Here you can change the sidebar layout for pages. ','the-computer-repair'),
        'section' => 'the_computer_repair_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','the-computer-repair'),
            'Right Sidebar' => __('Right Sidebar','the-computer-repair'),
            'One Column' => __('One Column','the-computer-repair')
        ),
	) );

	//Pre-Loader
	$wp_customize->add_setting( 'the_computer_repair_loader_enable',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_loader_enable',array(
        'label' => esc_html__( 'Pre-Loader','the-computer-repair' ),
        'section' => 'the_computer_repair_left_right'
    )));

	$wp_customize->add_setting('the_computer_repair_loader_icon',array(
        'default' => __('Two Way','the-computer-repair'),
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_loader_icon',array(
        'type' => 'select',
        'label' => __('Pre-Loader Type','the-computer-repair'),
        'section' => 'the_computer_repair_left_right',
        'choices' => array(
            'Two Way' => __('Two Way','the-computer-repair'),
            'Dots' => __('Dots','the-computer-repair'),
            'Rotate' => __('Rotate','the-computer-repair')
        ),
	) );

	//Top Bar
	$wp_customize->add_section( 'the_computer_repair_topbar', array(
    	'title'      => __( 'Top Bar Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_panel_id'
	) );

	$wp_customize->add_setting( 'the_computer_repair_topbar_hide_show',array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));  
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_topbar_hide_show',
       array(
          'label' => esc_html__( 'Show / Hide Topbar','the-computer-repair' ),
          'section' => 'the_computer_repair_topbar'
    )));

    //Sticky Header
	$wp_customize->add_setting( 'the_computer_repair_sticky_header',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_sticky_header',array(
        'label' => esc_html__( 'Sticky Header','the-computer-repair' ),
        'section' => 'the_computer_repair_topbar'
    )));

	$wp_customize->add_setting( 'the_computer_repair_header_search',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));  
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_header_search',array(
      	'label' => esc_html__( 'Show / Hide Search','the-computer-repair' ),
      	'section' => 'the_computer_repair_topbar'
    )));

	$wp_customize->add_setting('the_computer_repair_location',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_location',array(
		'label'	=> __('Add Location','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '123 Dummy street lorem ipsum, USA', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_call',array(
		'label'	=> __('Add Phone Number','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '+00 1234 567 890', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_email',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_email',array(
		'label'	=> __('Add Email Address','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'example@gmail.com', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_top_btn_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_top_btn_text',array(
		'label'	=> __('Add Button Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'FREE EVALUATION', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_top_btn_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('the_computer_repair_top_btn_url',array(
		'label'	=> __('Add Button URL','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'https://example.com/', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'url'
	));
    
	//Slider
	$wp_customize->add_section( 'the_computer_repair_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_panel_id'
	) );

	$wp_customize->add_setting( 'the_computer_repair_slider_hide_show',array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));  
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_slider_hide_show',array(
          'label' => esc_html__( 'Show / Hide Slider','the-computer-repair' ),
          'section' => 'the_computer_repair_slidersettings'
    )));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'the_computer_repair_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'the_computer_repair_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'the_computer_repair_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'the-computer-repair' ),
			'description' => __('Slider image size (1600 x 600)','the-computer-repair'),
			'section'  => 'the_computer_repair_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//content layout
	$wp_customize->add_setting('the_computer_repair_slider_content_option',array(
        'default' => __('Left','the-computer-repair'),
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control(new The_Computer_Repair_Image_Radio_Control($wp_customize, 'the_computer_repair_slider_content_option', array(
        'type' => 'select',
        'label' => __('Slider Content Layouts','the-computer-repair'),
        'section' => 'the_computer_repair_slidersettings',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/slider-content1.png',
            'Center' => get_template_directory_uri().'/assets/images/slider-content2.png',
            'Right' => get_template_directory_uri().'/assets/images/slider-content3.png',
    ))));

    //Slider excerpt
	$wp_customize->add_setting( 'the_computer_repair_slider_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'the_computer_repair_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','the-computer-repair' ),
		'section'     => 'the_computer_repair_slidersettings',
		'type'        => 'range',
		'settings'    => 'the_computer_repair_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('the_computer_repair_slider_opacity_color',array(
      'default'              => 0.5,
      'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));

	$wp_customize->add_control( 'the_computer_repair_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','the-computer-repair' ),
	'section'     => 'the_computer_repair_slidersettings',
	'type'        => 'select',
	'settings'    => 'the_computer_repair_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','the-computer-repair'),
      '0.1' =>  esc_attr('0.1','the-computer-repair'),
      '0.2' =>  esc_attr('0.2','the-computer-repair'),
      '0.3' =>  esc_attr('0.3','the-computer-repair'),
      '0.4' =>  esc_attr('0.4','the-computer-repair'),
      '0.5' =>  esc_attr('0.5','the-computer-repair'),
      '0.6' =>  esc_attr('0.6','the-computer-repair'),
      '0.7' =>  esc_attr('0.7','the-computer-repair'),
      '0.8' =>  esc_attr('0.8','the-computer-repair'),
      '0.9' =>  esc_attr('0.9','the-computer-repair')
	),
	));
 
	//Our Services section
	$wp_customize->add_section( 'the_computer_repair_services_section' , array(
    	'title'      => __( 'Our Services', 'the-computer-repair' ),
		'priority'   => null,
		'panel' => 'the_computer_repair_panel_id'
	) );

	$wp_customize->add_setting('the_computer_repair_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_section_title',array(
		'label'	=> __('Add Section Title','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Our Services', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_services_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_section_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_section_text',array(
		'label'	=> __('Add Section Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'lorem ipsum is dummy text', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_services_section',
		'type'=> 'text'
	));

	$categories = get_categories();
	$cat_post = array();
	$cat_post[]= 'select';
	$i = 0;	
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('the_computer_repair_our_services',array(
		'default'	=> 'select',
		'sanitize_callback' => 'the_computer_repair_sanitize_choices',
	));
	$wp_customize->add_control('the_computer_repair_our_services',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Services','the-computer-repair'),
		'description' => __('Image Size (280 x 180)','the-computer-repair'),
		'section' => 'the_computer_repair_services_section',
	));

	//Blog Post
	$wp_customize->add_section('the_computer_repair_blog_post',array(
		'title'	=> __('Blog Post Settings','the-computer-repair'),
		'panel' => 'the_computer_repair_panel_id',
	));	

	$wp_customize->add_setting( 'the_computer_repair_toggle_postdate',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_toggle_postdate',array(
        'label' => esc_html__( 'Post Date','the-computer-repair' ),
        'section' => 'the_computer_repair_blog_post'
    )));

    $wp_customize->add_setting( 'the_computer_repair_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_toggle_author',array(
		'label' => esc_html__( 'Author','the-computer-repair' ),
		'section' => 'the_computer_repair_blog_post'
    )));

    $wp_customize->add_setting( 'the_computer_repair_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_toggle_comments',array(
		'label' => esc_html__( 'Comments','the-computer-repair' ),
		'section' => 'the_computer_repair_blog_post'
    )));

    $wp_customize->add_setting( 'the_computer_repair_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'the_computer_repair_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','the-computer-repair' ),
		'section'     => 'the_computer_repair_blog_post',
		'type'        => 'range',
		'settings'    => 'the_computer_repair_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Content Craetion
	$wp_customize->add_section( 'the_computer_repair_content_section' , array(
    	'title' => __( 'Customize Home Page Settings', 'the-computer-repair' ),
		'priority' => null,
		'panel' => 'the_computer_repair_panel_id'
	) );

	$wp_customize->add_setting('the_computer_repair_content_creation_main_control', array(
		'sanitize_callback' => 'esc_html',
	) );

	$homepage= get_option( 'page_on_front' );

	$wp_customize->add_control(	new The_Computer_Repair_Content_Creation( $wp_customize, 'the_computer_repair_content_creation_main_control', array(
		'options' => array(
			esc_html__( 'First select static page in homepage setting for front page.Below given edit button is to customize Home Page. Just click on the edit option, add whatever elements you want to include in the homepage, save the changes and you are good to go.','the-computer-repair' ),
		),
		'section' => 'the_computer_repair_content_section',
		'button_url'  => admin_url( 'post.php?post='.$homepage.'&action=edit'),
		'button_text' => esc_html__( 'Edit', 'the-computer-repair' ),
	) ) );

	//Footer Text
	$wp_customize->add_section('the_computer_repair_footer',array(
		'title'	=> __('Footer Settings','the-computer-repair'),
		'panel' => 'the_computer_repair_panel_id',
	));	
	
	$wp_customize->add_setting('the_computer_repair_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_computer_repair_footer_text',array(
		'label'	=> __('Copyright Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Copyright 2019, .....', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_footer',
		'type'=> 'text'
	));	

	$wp_customize->add_setting( 'the_computer_repair_hide_show_scroll',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));  
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_hide_show_scroll',array(
      	'label' => esc_html__( 'Show / Hide Scroll To Top','the-computer-repair' ),
      	'section' => 'the_computer_repair_footer'
    )));

	$wp_customize->add_setting('the_computer_repair_scroll_top_alignment',array(
        'default' => __('Right','the-computer-repair'),
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control(new The_Computer_Repair_Image_Radio_Control($wp_customize, 'the_computer_repair_scroll_top_alignment', array(
        'type' => 'select',
        'label' => __('Scroll To Top','the-computer-repair'),
        'section' => 'the_computer_repair_footer',
        'settings' => 'the_computer_repair_scroll_top_alignment',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/layout1.png',
            'Center' => get_template_directory_uri().'/assets/images/layout2.png',
            'Right' => get_template_directory_uri().'/assets/images/layout3.png'
    ))));
}

add_action( 'customize_register', 'the_computer_repair_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class The_Computer_Repair_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'The_Computer_Repair_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new The_Computer_Repair_Customize_Section_Pro( $manager,'example_1', array(
			'priority'   => 1,
			'title'    => esc_html__( 'Computer Repair Pro', 'the-computer-repair' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'the-computer-repair' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/computer-repair-wordpress-theme/'),
		)));

		$manager->add_section(new The_Computer_Repair_Customize_Section_Pro($manager,'example_2',array(
			'priority'   => 1,
			'title'    => esc_html__( 'Documentation', 'the-computer-repair' ),
			'pro_text' => esc_html__( 'DOCS', 'the-computer-repair' ),
			'pro_url'  => admin_url('themes.php?page=the_computer_repair_guide'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'the-computer-repair-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'the-computer-repair-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
The_Computer_Repair_Customize::get_instance();