<?php
/*
Plugin Name: Raptorize It
Plugin URI: http://jakespurlock.com/wordpress/raptor
Description: You're sitting at your desk, coding up a 500 page site, knee-deep in Extreme Cheddar Doritos sipping on a liter of Code Red Mountain Dew when you realize...this page would be so muc more awesome with a VELOCIRAPTOR. You immediately scramble home to grab your Jurassic Park DVDs so can screencap a Velociraptor attack, but then you realize how hard it would be to make an awesome raptor run across the site you were coding. Plus, how are you going to get that trademark velociraptor screech?
Author: Jake Spurlock
Version: 0.5.1
Author URI: http://jakespurlock.com/
*/

add_action('init', 'raptor_me');

function raptor_me(){

wp_enqueue_script('raptorize', WP_PLUGIN_URL . '/raptorize-it/jquery.raptorize.1.0.js', array('jquery'), '1.0' );

}

add_action('wp_head', 'raptor_head');

function raptor_head(){ ?>
<!-- For the button version -->
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.button').raptorize();
	});
</script>

<!-- For the Konami Code version -->
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.button').raptorize({
			'enterOn' : 'konami-code'
		});
	});
</script>
<?php } ?>