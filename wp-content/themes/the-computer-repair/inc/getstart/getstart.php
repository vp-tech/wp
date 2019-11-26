<?php
//about theme info
add_action( 'admin_menu', 'the_computer_repair_gettingstarted' );
function the_computer_repair_gettingstarted() {    	
	add_theme_page( esc_html__('About The Computer Repair', 'the-computer-repair'), esc_html__('About The Computer Repair', 'the-computer-repair'), 'edit_theme_options', 'the_computer_repair_guide', 'the_computer_repair_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function the_computer_repair_admin_theme_style() {
   wp_enqueue_style( 'the-computer-repair-font', the_computer_repair_admin_font_url(), array() );
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getstart/getstart.css');
   wp_enqueue_script('tabs', get_template_directory_uri() . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'the_computer_repair_admin_theme_style');

// Theme Font URL
function the_computer_repair_admin_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Muli:300,400,600,700,800,900';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//guidline for about theme
function the_computer_repair_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'the-computer-repair' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to The Computer Repair Theme', 'the-computer-repair' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','the-computer-repair'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy The Computer Repair at 20% Discount','the-computer-repair'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','the-computer-repair'); ?> ( <span><?php esc_html_e('vwpro20','the-computer-repair'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'the-computer-repair' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'computer_lite')"><?php esc_html_e( 'Getting Started', 'the-computer-repair' ); ?></button>		  
		  <button class="tablinks" onclick="openCity(event, 'computer_pro')"><?php esc_html_e( 'Get Premium', 'the-computer-repair' ); ?></button>
		  <button class="tablinks" onclick="openCity(event, 'free_pro')"><?php esc_html_e( 'Support', 'the-computer-repair' ); ?></button>
		</div>

		<!-- Tab content -->
		<div id="computer_lite" class="tabcontent open">
			<h3><?php esc_html_e( 'Lite Theme Information', 'the-computer-repair' ); ?></h3>
			<hr class="h3hr">
		  	<p><?php esc_html_e('Computer repair is a WP theme in high demand as of today and has been extremely beneficial since its inception in the market for the computer repair and services. It is responsive to the core with multipurpose capabilities and is a fine tool for computer, mobile phones, tablet, Mac, Windows, electronics, digital, software, desktop. online support, maintenance, services, consulting, training, help desk, IT Solutions, Infrastructure, software cleaning, junk removal, renovation, cleaning, computer, digital, repair, handyman. Because of the features like user friendliness, CTA, personalization options, testimonial sections, SEO friendliness, optimised codes, retina ready, Bootstrap framework and much more, it is a much demandable theme for the electronics fixing services as well as cellular repair center. Computer repair is interactive with customization options and secondly it is translation ready making it a preferable choice for the laptop repair service companies and for the companies that are into the business of home repair. If such companies want the online presence and excellence in business, Computer repair theme will play a good role in this. It is good for all repairs like smart phone repair, desktop repair, iPad repair, tablet repair, printer repair, data recovery and game console repair. It is very professional, clean and possesses design of high quality.','the-computer-repair'); ?></p>
		  	<div class="col-left-inner">
		  		<h4><?php esc_html_e( 'Theme Documentation', 'the-computer-repair' ); ?></h4>
				<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'the-computer-repair' ); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'the-computer-repair' ); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Theme Customizer', 'the-computer-repair'); ?></h4>
				<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'the-computer-repair'); ?></p>
				<div class="info-link">
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'the-computer-repair'); ?></a>
				</div>
				<hr>				
				<h4><?php esc_html_e('Having Trouble, Need Support?', 'the-computer-repair'); ?></h4>
				<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'the-computer-repair'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'the-computer-repair'); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Reviews & Testimonials', 'the-computer-repair'); ?></h4>
				<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'the-computer-repair'); ?>  </p>
				<div class="info-link">
					<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'the-computer-repair'); ?></a>
				</div>
		  		<div class="link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'the-computer-repair' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-image"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','the-computer-repair'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-images-alt"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=the_computer_repair_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','the-computer-repair'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=the_computer_repair_topbar') ); ?>" target="_blank"><?php esc_html_e('Topbar Settings','the-computer-repair'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=the_computer_repair_services_section') ); ?>" target="_blank"><?php esc_html_e('Our Services','the-computer-repair'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-editor-aligncenter"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','the-computer-repair'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','the-computer-repair'); ?></a>
							</div>
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=the_computer_repair_left_right') ); ?>" target="_blank"><?php esc_html_e('Blog Layout','the-computer-repair'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=the_computer_repair_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','the-computer-repair'); ?></a>
							</div>
						</div>
					</div>
				</div>
		  	</div>
			<div class="col-right-inner">
				<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','the-computer-repair'); ?></h3>
			  	<hr class="h3hr">
				<p><?php esc_html_e('Follow these instructions to setup Home page.','the-computer-repair'); ?></p>
                <ul>
                	<li><?php esc_html_e('1. Create a Page to set template:  Go to ','the-computer-repair'); ?>
                  	<b><?php esc_html_e('Dashboard &gt;&gt; Pages &gt;&gt; Add New Page','the-computer-repair'); ?></b>.
                  	<p><?php esc_html_e('Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.','the-computer-repair'); ?></p></li>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p></p><span class="strong"><?php esc_html_e('2. Set the front page:','the-computer-repair'); ?></span><?php esc_html_e(' Go to ','the-computer-repair'); ?>
				  	<b><?php esc_html_e(' Settings -&gt; Reading --&gt; Set the front page display static page to home page ','the-computer-repair'); ?></b></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with this, you can see all the demo content on front page. ','the-computer-repair'); ?></p>
                </ul>
		  	</div>
		</div>	

		<div id="computer_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'the-computer-repair' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Get the Computer Repair WordPress theme from us at affordable price and this is a very good step for the startup or for any kind of established business related to the Computer Repair or precious or semi-precious metals that include gold and diamonds. One of the best things about this theme is that it is responsive to the core apart from being multipurpose and all this a significant choice to take the Computer Repair business on the path of global expansion. With significant features like CTA, Bootstrap framework, interactive nature as well as clean code, Computer Repair WordPress theme is a preferred choice for making the gift shop or a Computer Repair store with the potential to grow. The best part of this WP theme is that it can be used for any type of online store and not just related to Computer Repair. It is also good for the online store for fashion.','the-computer-repair'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'the-computer-repair'); ?></a>
					<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'the-computer-repair'); ?></a>
					<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'the-computer-repair'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'the-computer-repair' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'the-computer-repair'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'the-computer-repair'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'the-computer-repair'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'the-computer-repair'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'the-computer-repair'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'the-computer-repair'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'the-computer-repair'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'the-computer-repair'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'the-computer-repair'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'the-computer-repair'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'the-computer-repair'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Contact us Page Template', 'the-computer-repair'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'the-computer-repair'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Blog Templates & Layout', 'the-computer-repair'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'the-computer-repair'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Page Templates & Layout', 'the-computer-repair'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'the-computer-repair'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Full Documentation', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Latest WordPress Compatibility', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support 3rd Party Plugins', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Secure and Optimized Code', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Exclusive Functionalities', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Enable / Disable', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Google Font Choices', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Gallery', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Simple & Mega Menu Option', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Shortcodes', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Premium Membership', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Budget Friendly Value', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Priority Error Fixing', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Feature Addition', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('All Access Theme Pass', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Seamless Customer Support', 'the-computer-repair'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( THE_COMPUTER_REPAIR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'the-computer-repair'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'the-computer-repair'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'the-computer-repair'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'the-computer-repair'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'the-computer-repair'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'the-computer-repair'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'the-computer-repair'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'the-computer-repair'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'the-computer-repair'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'the-computer-repair'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'the-computer-repair'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'the-computer-repair'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','the-computer-repair'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'the-computer-repair'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'the-computer-repair'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'the-computer-repair'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>