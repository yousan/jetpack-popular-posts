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

//add_action('widgets_init', function() {
//	// var_dump('hoge');
//	// global $wp_filter;
//	// print_r($wp_filter);
//	// exit;
//	register_widget( 'WPP_Widget' );
//});


/*
 * The code that runs during plugin activation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-popular-posts-activator.php';
register_activation_hook( __FILE__, array('WPP_Activator', 'activate') );

/*
 * The code that runs during plugin activation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-popular-posts-deactivator.php';
register_deactivation_hook( __FILE__, array('WPP_Deactivator', 'deactivate') );

/*
 * The core plugins class.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-popular-posts.php';

/*
 * Begin execution of the plugin.
 */
$wordpress_popular_posts = new WordPressPopularPosts();
$wordpress_popular_posts->run();
