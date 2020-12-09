<?php
/*
Plugin Name: Init Pacific Mall
Plugin URI: https://wpbook-pacificmall.work/
Description: Init Pacific Mall site.
Version: 1.0.0
Author: Pacific Mall
Author URI: https://wpbook-pacificmall.work/
*/

class PACIFICMALL {
    public function __construct() { 
        add_action( 'wp_install', array( $this, 'init_permalink_structure' ) );
    }   
    public function init_permalink_structure() {
        update_option( 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/' );
    }   
}
$PACIFICMALL = new PACIFICMALL();
