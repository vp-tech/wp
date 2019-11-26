<?php
/**
 * The template part for top header
 *
 * @package The Computer Repair 
 * @subpackage the-computer-repair
 * @since the-computer-repair 1.0
 */
?>

<div class="middle-header <?php if( get_theme_mod( 'the_computer_repair_sticky_header') != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4">
        <div class="logo">
          <?php if( has_custom_logo() ){ the_computer_repair_the_custom_logo();
            }else{ ?>
              <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h1>
              <?php $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) : ?>
              <p class="site-description"><?php echo esc_html($description); ?></p>
          <?php endif; } ?>
        </div>
      </div>
      <div class="<?php if(get_theme_mod('the_computer_repair_header_search')) { ?>col-lg-8 col-md-6 col-6" <?php } else { ?>col-lg-9 col-md-9" <?php } ?> >
        <?php get_template_part( 'template-parts/header/navigation' ); ?>
      </div>
      <?php if( get_theme_mod( 'the_computer_repair_header_search') != '') { ?>
        <div class="col-lg-1 col-md-2 col-6">
          <div class="search-box">
            <span><i class="fas fa-search"></i></span>
          </div>
        </div>
      <?php }?>
    </div>
    <div class="serach_outer">
      <div class="closepop"><i class="far fa-window-close"></i></div>
      <div class="serach_inner">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</div>