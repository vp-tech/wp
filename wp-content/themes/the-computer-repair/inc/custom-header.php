<?php
/**
 * @package The Computer Repair
 * Setup the WordPress core custom header feature.
 *
 * @uses the_computer_repair_header_style()
*/
function the_computer_repair_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'the_computer_repair_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'the_computer_repair_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'the_computer_repair_custom_header_setup' );

if ( ! function_exists( 'the_computer_repair_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see the_computer_repair_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'the_computer_repair_header_style' );

function the_computer_repair_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        .home-page-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'the-computer-repair-basic-style', $custom_css );
	endif;
}
endif;