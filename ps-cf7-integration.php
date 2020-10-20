<?php
/*
  Plugin Name: Pure Spaces CF7 Hacks
  Plugin URI: https://sputznik.com/
  Description: Special hacks for pure spaces
  Version: 4.4
  Author: Samuel Thomas, Sputznik
  Author URI: https://sputznik.com/
 */

add_filter( "gscf7_special_mail_tags", "add_custom_mail_tag", 10, 2 );
function add_custom_mail_tag( $custom_mail_tags, $form_id ) {
	$custom_mail_tags[] = "_fbclid";
	return $custom_mail_tags;
}

add_filter("wpcf7_special_mail_tags", function( $output,  $name,  $html ) {
    if ( $name === "_fbclid" ) {
      return isset( $_GET['fbclid'] ) ? $_GET['fbclid'] : "";
    }
  	return $output;
}, 10, 3 );
