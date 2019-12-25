<?php
/*
Plugin Name: YouTube Subscribers
Plugin URI: https://nortaldevs.com
Description: Display YouTube subscribe button and count
Version: 1.0.0
Author: MortalDevs
Author URI: https://mortaldevs.com
*/

// exit if access directly
if(!defined('ABSPATH')){
    exit;
}
// Load scripts
require_once(plugin_dir_path(__FILE__). '/includes/youtubesubs-scripts.php');
// Load class
require_once(plugin_dir_path(__FILE__). '/includes/youtubesubs-class.php');

// Register widget
function register_youtubesubs(){
    register_widget('Youtube_Subs_Widget');
}
// Hook in function
add_action('widgets_init','register_youtubesubs');