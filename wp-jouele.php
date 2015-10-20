<?php
/**
 * @package wp-jouele
 */
/*
Plugin Name: Jouele for Wordpress
Plugin URI: https://github.com/beshur/wp-jouele
Description: Insert audio files with a great Jouele player. Jouele player by Ilya Birman (https://github.com/ilyabirman/Jouele).
Author: alexbuznik
Author URI: http://buznik.com/
License: GPLv2 or later
Text Domain: wp-jouele
*/

/*

*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


function load_static() {

	wp_enqueue_script( 'jplayer', plugins_url( 'jouele/jquery.jplayer.min.js', __FILE__ ), array('jquery',), '2.1.0', true );
	wp_enqueue_script( 'jouele', plugins_url( 'jouele/jouele.js', __FILE__ ), array('jquery',), null, true );
	wp_enqueue_style( 'jouele', plugins_url( 'jouele/jouele.css', __FILE__ ), null, null );

}
add_action( 'init', 'load_static' );


