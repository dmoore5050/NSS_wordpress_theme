<?php
/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = '';

global $meta_boxes;

$meta_boxes = array();

// 1st meta box
$meta_boxes[] = array(
	'id' => 'links',
	'title' => 'links',
	'pages' => array( 'person', 'slider' ),
	'context' => 'normal',
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			'name'		=> 'Twitter Account',
			'id'		=> $prefix . 'Twitter',
			'desc'		=> '@marcusfulbright',
			'type'		=> 'text',

		),

		// TEXT
		array(
			'name'		=> 'Twitter Link',
			'id'		=> $prefix . 'twitterLink',
			'type'		=> 'text',
			'desc'		=> 'twitter.com/marcusfulbright'
		),

		// TEXT
		array(
			'name'		=> 'Personal Link',
			'id'		=> $prefix . 'personalLink',
			'type'		=> 'text',
			'desc'		=> 'www.mywebsite.com'
		),
));


/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'YOUR_PREFIX_register_meta_boxes' );
