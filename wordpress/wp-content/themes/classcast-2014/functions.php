<?php

	function classcast_setup() {
		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary'   => __( 'Top primary menu', 'classcast' ),
			'footer'   => __( 'Footer menu', 'classcast' ),
			'tinyfooter'   => __( 'Tinyfooter menu', 'classcast' ),
			'heronav'   => __( 'Heronav menu', 'classcast' ),
			'drop'   => __( 'Drop menu', 'classcast' ),
		) );
	}
	add_action( 'after_setup_theme', 'classcast_setup' );


function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __(' more...', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// add_action('init', 'cptui_register_my_cpt_job');
// function cptui_register_my_cpt_job() {
// register_post_type('job', array(
// 'label' => 'Jobs',
// 'description' => '',
// 'public' => true,
// 'show_ui' => true,
// 'show_in_menu' => true,
// 'capability_type' => 'post',
// 'map_meta_cap' => true,
// 'hierarchical' => false,
// 'rewrite' => array('slug' => 'job', 'with_front' => true),
// 'query_var' => true,
// 'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
// 'labels' => array (
//   'name' => 'Jobs',
//   'singular_name' => 'Job',
//   'menu_name' => 'Jobs',
//   'add_new' => 'Add Job',
//   'add_new_item' => 'Add New Job',
//   'edit' => 'Edit',
//   'edit_item' => 'Edit Job',
//   'new_item' => 'New Job',
//   'view' => 'View Job',
//   'view_item' => 'View Job',
//   'search_items' => 'Search Jobs',
//   'not_found' => 'No Jobs Found',
//   'not_found_in_trash' => 'No Jobs Found in Trash',
//   'parent' => 'Parent Job',
// )
// ) ); }
// add_action('init', 'cptui_register_my_cpt_press');
// function cptui_register_my_cpt_press() {
// register_post_type('press', array(
// 'label' => 'Press',
// 'description' => '',
// 'public' => true,
// 'show_ui' => true,
// 'show_in_menu' => true,
// 'capability_type' => 'post',
// 'map_meta_cap' => true,
// 'hierarchical' => false,
// 'rewrite' => array('slug' => 'press', 'with_front' => true),
// 'query_var' => true,
// 'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
// 'labels' => array (
//   'name' => 'Press',
//   'singular_name' => 'Press',
//   'menu_name' => 'Press',
//   'add_new' => 'Add Press',
//   'add_new_item' => 'Add New Press',
//   'edit' => 'Edit',
//   'edit_item' => 'Edit Press',
//   'new_item' => 'New Press',
//   'view' => 'View Press',
//   'view_item' => 'View Press',
//   'search_items' => 'Search Press',
//   'not_found' => 'No Press Found',
//   'not_found_in_trash' => 'No Press Found in Trash',
//   'parent' => 'Parent Press',
// )
// ) ); }

 
function get_custom_post_type_template($single_template) {
	global $post;

	if ($post->post_type == 'custom-post-type') {
		$single_template = dirname( __FILE__ ) . '/single-template.php';
	}

	return $single_template;
}
 
add_filter( "single_template", "get_custom_post_type_template" );

/**
*
*/
function getManageCustomerRegisterURL() {
	switch(ENVIRONMENT) {
		case "DEVELOPMENT":
			return 'http://manage.classcast.dev:3000/manage/customer/register';

		case "STAGING":
			return 'https://staging-manage.simplecue.com/manage/customer/register';

		case "PRODUCTION":
			return 'https://manage.classcast.co/manage/customer/register';

		default:
			return 'https://staging-manage.simplecue.com/manage/customer/register';
	}
}


function get_blog_subscribe_form(){
	return '
	
<div class="cc-blog-subscribe-section">
  <div class="w-container">
    <div class="cc-blog-subscribe-tile">
      <div class="w-row">
        <div class="w-col w-col-5 w-col-small-5">
          <h5 class="cc-blog-subscribe-text">Get tips and ideas on<br><strong>fitness</strong> and&nbsp;<strong>technology</strong>&nbsp;&gt;</h5>
        </div>
        <div class="w-col w-col-7 w-col-small-7">
          <div class="w-form cc-blog-subscribe-form">
            <form id="wf-form-Blog-Subscribe-Form" name="wf-form-Blog-Subscribe-Form" data-name="Blog Subscribe Form" action="//classcast.us2.list-manage.com/subscribe/post?u=1c01ae6d41b7efa731691c63a&amp;amp;id=7817767906" method="post">
              <div class="w-row">
                <div class="w-col w-col-7 w-col-small-6">
                  <input class="w-input cc-input cc-blog-subscribe-input" id="EMAIL" type="email" placeholder="Enter your email address" name="EMAIL" data-name="EMAIL" required="required">
                </div>
                <div class="w-col w-col-5 w-col-small-6">
                  <input class="w-button cc-button-s cc-blog-subscribe-button" type="submit" value="Subscribe To Blog" data-wait="Please wait...">
                </div>
              </div>
              <div class="w-embed">
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;">
                  <input type="text" name="b_1c01ae6d41b7efa731691c63a_7817767906" tabindex="-1" value="">
                </div>
              </div>
            </form>
            <div class="w-form-done cc-blog-subscribe-success">
              <p>Please check your emails and confirm your blog subscription.</p>
            </div>
            <div class="w-form-fail">
              <p>Oops! Something went wrong while submitting the form :(</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

	';
}