<?php
/**
 * Plugin Name:     Jetpack Popular Posts
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     jetpack-popular-posts
 * Domain Path:     /languages
 * Version:         0.1.1
 *
 * @package         Jetpack_Popular_Posts
 */

require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-popular-posts-widget.php';

add_action('widgets_init', function() {
	// var_dump('hoge');
	// global $wp_filter;
	// print_r($wp_filter);
	// exit;
	register_widget( 'WPP_Widget' );
});


