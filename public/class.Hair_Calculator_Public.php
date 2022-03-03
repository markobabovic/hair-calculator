<?php

class Hair_Calculator_Public {

	public function __construct() {
		add_action( "wp_enqueue_scripts", array( $this , "wp_enqueue_scripts" ) );
    }

	public function wp_enqueue_scripts() {
		global $post;
		
		wp_enqueue_style( "calc_font" , "https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500&display=swap" );
		wp_enqueue_style( "calc_public-css" , plugins_url( "/public/css/style.min.css" , HAIR_PLUGIN_FILE ) );
		wp_enqueue_script( "calc_app-public_js" , plugins_url( "/public/js/app-public.js", HAIR_PLUGIN_FILE ) , array( "jquery" ), false, true );
	}

}