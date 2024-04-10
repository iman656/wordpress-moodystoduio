<?php

/*
**
**
*/
if(!defined('ABSPATH')){
    exit;
}

require_once("init.php");
require_once("Vite.php");


//Initialize theme
require_once(get_template_directory() . "/init.php");


function moody_studio_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'moody_studio_add_woocommerce_support' );