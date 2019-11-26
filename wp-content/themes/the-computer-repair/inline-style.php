<?php

	$the_computer_repair_first_color = get_theme_mod('the_computer_repair_first_color');

	$custom_css = '';

	/*------------------------------ Global First Color -----------*/
	
	if($the_computer_repair_first_color != false){
		$custom_css .='.cart-value,.top-btn a,.more-btn a,input[type="submit"],#sidebar h3,.pagination .current,.pagination a:hover,#sidebar .custom-social-icons i, #footer .custom-social-icons i,#sidebar .tagcloud a:hover,#footer .tagcloud a:hover,#footer-2,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,.box-content:hover a,#comments input[type="submit"],nav.woocommerce-MyAccount-navigation ul li,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .scrollup i, #comments a.comment-reply-link, .toggle-nav i{';
			$custom_css .='background-color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}
	if($the_computer_repair_first_color != false){
		$custom_css .='#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,.box-content:hover{';
			$custom_css .='border-color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}
	if($the_computer_repair_first_color != false){
		$custom_css .='a ,.lower-bar i,.post-main-box:hover h3,#sidebar ul li a:hover,#footer .custom-social-icons i:hover, #footer li a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.post-main-box:hover h3 a, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .main-navigation ul.sub-menu a:hover, .main-navigation a:hover{';
			$custom_css .='color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}	
	if($the_computer_repair_first_color != false){
		$custom_css .='.main-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}
	if($the_computer_repair_first_color != false){
		$custom_css .='.lower-bar,#footer h3:after,.heading-box hr, .header-fixed, .main-navigation ul ul{';
			$custom_css .='border-bottom-color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}

	$custom_css .='@media screen and (max-width:1000px) {';
		if($the_computer_repair_first_color != false){
			$custom_css .='.search-box i{
			background-color:'.esc_html($the_computer_repair_first_color).';
			}';
		}
	$custom_css .='}';

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'the_computer_repair_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'the_computer_repair_slider_opacity_color','0.5');
	if($theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'the_computer_repair_slider_content_option','Left');
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2{';
			$custom_css .='text-align:left; left:10%; right:55%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2{';
			$custom_css .='text-align:right; left:55%; right:10%;';
		$custom_css .='}';
	}