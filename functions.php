<?php

function register_my_menus() {
  register_nav_menus(
    array( 'top_nav' => __( 'Header Nav' ), 'bottom_nav' => __( 'Footer Nav')
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );

add_image_size( 'author-thumbnail', 180, 180, true );

function wpt_person_posttype() {
  register_post_type( 'person',
    array(
      'labels' => array(
        'name' => __( 'People' ),
        'singular_name' => __( 'Person' ),
        'add_new' => __( 'Add New Person' ),
        'add_new_item' => __( 'Add New Person' ),
        'edit_item' => __( 'Edit Person' ),
        'new_item' => __( 'Add New Person' ),
        'view_item' => __( 'View Person' ),
        'search_items' => __( 'Search People' ),
        'not_found' => __( 'No people found' ),
        'not_found_in_trash' => __( 'No people found in trash' )
      ),
      'public' => true,
      'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'capability_type' => 'post',
      'rewrite' => array("slug" => "people"), // Permalinks format
      'menu_position' => 5,
      'taxonomies' => array( 'post_tag', 'category'),
      'can_export' => true,
    )
  );
}
add_action( 'init', 'wpt_person_posttype');

function wpt_partners_posttype() {
  register_post_type( 'partners',
    array(
      'labels' => array(
        'name' => __( 'Partners' ),
        'singular_name' => __( 'Partner' ),
        'add_new' => __( 'Add New Partner' ),
        'add_new_item' => __( 'Add New Partner' ),
        'edit_item' => __( 'Edit Partner' ),
        'new_item' => __( 'Add New Partner' ),
        'view_item' => __( 'View Partner' ),
        'search_items' => __( 'Search Partners' ),
        'not_found' => __( 'No partners found' ),
        'not_found_in_trash' => __( 'No partners found in trash' )
        ),
      'public' => true,
      'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'capability_type' => 'post',
      'rewrite' => array("slug" => "partners"), // Permalinks format
      'menu_position' => 6,
      'taxonomies' => array( 'post_tag', 'category'),
      'can_export' => true,
    )
  );
}
add_action( 'init', 'wpt_partners_posttype');

function wpt_campaign_posttype() {
  register_post_type( 'campaign_update',
    array(
      'labels' => array(
        'name' => __( 'Campaign Updates' ),
        'singular_name' => __( 'Campaign Update' ),
        'add_new' => __( 'Add New Campaign Update' ),
        'add_new_item' => __( 'Add New Campaign Update' ),
        'edit_item' => __( 'Edit Campaign Update' ),
        'new_item' => __( 'Add New Campaign Update' ),
        'view_item' => __( 'View Campaign Update' ),
        'search_items' => __( 'Search Campaign Updates' ),
        'not_found' => __( 'No campaign updates found' ),
        'not_found_in_trash' => __( 'No campaign updates found in trash' )
      ),
      'public' => true,
      'supports' => array( 'title', 'editor', 'excerpt', 'comments' ),
      'capability_type' => 'post',
      'rewrite' => array("slug" => "campaigns"), // Permalinks format
      'menu_position' => 7,
      'taxonomies' => array( 'post_tag', 'category'),
      'can_export' => true,
    )
  );
}
add_action( 'init', 'wpt_campaign_posttype');

function wpt_announcement_posttype() {
  register_post_type( 'announcement',
    array(
      'labels' => array(
        'name' => __( 'Announcements' ),
        'singular_name' => __( 'Announcement' ),
        'add_new' => __( 'Add New Announcement' ),
        'add_new_item' => __( 'Add New Announcement' ),
        'edit_item' => __( 'Edit Announcement' ),
        'new_item' => __( 'Add New Announcement' ),
        'view_item' => __( 'View Announcement' ),
        'search_items' => __( 'Search Announcements' ),
        'not_found' => __( 'No announcements found' ),
        'not_found_in_trash' => __( 'No announcements found in trash' )
      ),
      'public' => true,
      'supports' => array( 'title', 'editor', 'comments', 'custom-fields' ),
      'capability_type' => 'post',
      'rewrite' => array("slug" => "announcements"), // Permalinks format
      'menu_position' => 8,
      'taxonomies' => array( 'post_tag', 'category'),
      'can_export' => true,
    )
  );
}
add_action( 'init', 'wpt_announcement_posttype');

function kia_subtitle($title){
if(function_exists('the_subtitle')) the_subtitle();
}

add_filter('thematic_postheader_posttitle','kia_subtitle');

include 'demo.php';

add_filter( 'wpcf7_form_class_attr', 'your_custom_form_class_attr' );
function your_custom_form_class_attr( $class ) {
    $class .= ' well';
    return $class;
}

function custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
