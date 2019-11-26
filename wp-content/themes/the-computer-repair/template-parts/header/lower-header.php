<?php
/**
 * The template part for header
 *
 * @package The Computer Repair 
 * @subpackage the-computer-repair
 * @since the-computer-repair 1.0
 */
?>
<?php if( get_theme_mod('the_computer_repair_topbar_hide_show',true) != ''){ ?>
	<div class="lower-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
				</div>
				<div class="col-lg-4 col-md-4">
				    <?php if( get_theme_mod( 'the_computer_repair_location') != '') { ?>
	          			<p><i class="fas fa-map-marker-alt"></i><?php echo esc_html(get_theme_mod('the_computer_repair_location',''));?></p>
	    			<?php } ?>
			    </div>
			    <div class="col-lg-2 col-md-2">
				    <?php if( get_theme_mod( 'the_computer_repair_call') != '') { ?>
	          			<p><i class="fas fa-phone"></i><?php echo esc_html(get_theme_mod('the_computer_repair_call',''));?></p>
	        		<?php }?>
			    </div>
			    <div class="col-lg-3 col-md-3">
				    <?php if( get_theme_mod( 'the_computer_repair_email') != '') { ?>
	          			<p><i class="fas fa-envelope"></i><?php echo esc_html(get_theme_mod('the_computer_repair_email',''));?></p>
	        		<?php }?>
			    </div>
			</div>
		</div>
	</div>
<?php } ?>