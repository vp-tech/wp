<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package The Computer Repair
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
	  	<meta charset="<?php bloginfo( 'charset' ); ?>">
	  	<meta name="viewport" content="width=device-width">
	  	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'the-computer-repair' ) ); ?>">
	  	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<header role="banner">
    		<a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'the-computer-repair' ); ?></a>

			<div class="home-page-header">
				<?php get_template_part('template-parts/header/top-header'); ?>
				<?php get_template_part('template-parts/header/middle-header'); ?>
				<?php get_template_part('template-parts/header/lower-header'); ?>
			</div>
		</header>

		<?php if(get_theme_mod('the_computer_repair_loader_enable',true)==1){ ?>
	  		<div id="preloader">
			    <div id="status">
			      <?php $theme_lay = get_theme_mod( 'the_computer_repair_loader_icon','Two Way');
			        if($theme_lay == 'Two Way'){ ?>
			        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/two-way.gif" alt="" role="img"/>
			      <?php }else if($theme_lay == 'Dots'){ ?>
			        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dots.gif" alt="" role="img"/>
			      <?php }else if($theme_lay == 'Rotate'){ ?>
			        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/rotate.gif" alt="" role="img"/>          
			      <?php } ?>
			    </div>
		  	</div>
		<?php } ?>