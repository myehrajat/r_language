<?php
/**
 * @package RentIt_Language
 * @version 1.0
 */
/*
Plugin Name: RentIt Language
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: this plugin change theme language!
Version: 1.0
Author URI: https://ma.tt/
Text Domain: RentIt_Language
*/
function load_fa_language(){
	//load translation
	$domain = 'rentit';
	$path =get_stylesheet_directory(). '/languages/'; // adjust to the location of your .mo file
	
	$locale = apply_filters( 'theme_locale', 'fa_IR' , $domain );
	load_textdomain( $domain, $path . $locale . '.mo' );
	//end load translation

}
load_fa_language();
//put your translation to language folder of theme