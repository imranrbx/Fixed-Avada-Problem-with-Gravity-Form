<?php
/*
	* Plugin Name: Avada jQuery Patch
	* Description: Fix Jquery Error
	* Author: Imran Qasim
	* Author URI: https://fiverr.com/itsmeleo
	* Plugin URI: https://fiverr.com/itmeleo
*/
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
   wp_deregister_script('jquery' );
   wp_dequeue_script('jquery' );
   wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', array(), '1.12.4', true );
   wp_deregister_script('main' );
   wp_dequeue_script('main' );
   wp_register_script( 'main', plugin_dir_url(__FILE)) )."/main.js", array('jquery'), "4.5.1", true );
   wp_enqueue_script('main' );
