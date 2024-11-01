<?php
/**
* Plugin name: Viet contact
* Plugin URL: https://www.caodem.com
* Description: Tạo nút liên hệ cho website của bạn.
* Domain Path: /languages
* Version: 1.3.2
* Author: ihoan caodem.com
* Author URL: https://www.caodem.com
* License: GPLv3 or later
/**
* Tạo nút liên hệ cho website của bạn.
*/
// Add css va js o header 
function Viet_contact_addjscss_head() {
wp_enqueue_script( 'Viet-contact-js', plugins_url( 'js/viet-contact.js', __FILE__ ), array(), '1.0', true);
wp_enqueue_style( 'Viet-contact-css', plugins_url( 'css/viet-contact.css', __FILE__ ), array(), '1.0');
}
add_action( 'wp_enqueue_scripts', 'Viet_contact_addjscss_head' );

$vietcontact_options = get_option('vietcontact_settings');
// trinh quan ly admin
include( plugin_dir_path( __FILE__ ) . 'inc/vietcontact-admin.php');
include( plugin_dir_path( __FILE__ ) . 'inc/vietcontact-content.php');
// the ngon ngu
function Viet_contact_load_textdomain() {
  load_plugin_textdomain( 'viet-contact', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' ); 
}
add_action( 'plugins_loaded', 'Viet_contact_load_textdomain' );
