<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'the_computer_repair_before_slider' ); ?>

  <?php if( get_theme_mod( 'the_computer_repair_slider_hide_show',true) != '') { ?>

  <section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
      <?php $the_computer_repair_pages = array();
        for ( $count = 1; $count <= 4; $count++ ) {
          $mod = intval( get_theme_mod( 'the_computer_repair_slider_page' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $the_computer_repair_pages[] = $mod;
          }
        }
        if( !empty($the_computer_repair_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $the_computer_repair_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
      ?>     
      <div class="carousel-inner" role="listbox">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <h2><?php the_title(); ?></h2><p><?php $excerpt = get_the_excerpt(); echo esc_html( the_computer_repair_string_limit_words( $excerpt, esc_attr(get_theme_mod('the_computer_repair_slider_excerpt_number','30')))); ?></p>
                <div class="more-btn">
                  <a href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e( 'READ MORE', 'the-computer-repair' ); ?><span class="screen-reader-text"><?php esc_html_e( 'READ MORE','the-computer-repair' );?></span></a>
                </div>
              </div>
            </div>
          </div>
        <?php $i++; endwhile; 
        wp_reset_postdata();?>
      </div>
      <?php else : ?>
          <div class="no-postfound"></div>
      <?php endif;
      endif;?>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
        <span class="screen-reader-text"><?php esc_attr_e( 'Previous','the-computer-repair' );?></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
        <span class="screen-reader-text"><?php esc_attr_e( 'Next','the-computer-repair' );?></span>
      </a>
    </div>
    <div class="clearfix"></div>
  </section>
  <?php } ?>

  <?php do_action( 'the_computer_repair_after_slider' ); ?>

  <section id="serv-section">
    <div class="container">
      <div class="heading-box">
        <?php if( get_theme_mod( 'the_computer_repair_section_title') != '') { ?>
          <h3><?php echo esc_html(get_theme_mod('the_computer_repair_section_title',''));?></h3>
          <hr>
        <?php } ?>
        <?php if( get_theme_mod( 'the_computer_repair_section_text') != '') { ?>
          <p><?php echo esc_html(get_theme_mod('the_computer_repair_section_text',''));?></p>
        <?php } ?>      
      </div>
      <div class="row">
        <?php
          $catData =  get_theme_mod('the_computer_repair_our_services','');
          if($catData){
          $page_query = new WP_Query(array( 'category_name' => esc_html($catData,'the-computer-repair'))); ?>
          <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
          <div class="col-md-4 col-sm-6">
            <div class="box">
              <?php the_post_thumbnail(); ?>
              <div class="box-content">
                <h4 class="title"><?php the_title(); ?></h4>
                <div class="serv-btn">
                  <a href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e( 'READ MORE', 'the-computer-repair' ); ?><span class="screen-reader-text"><?php esc_html_e( 'READ MORE','the-computer-repair' );?></span></a>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile;
          wp_reset_postdata();
        } ?>
      </div>
    </div>
  </section>

  <?php do_action( 'the_computer_repair_after_second_section' ); ?>

  <div class="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
