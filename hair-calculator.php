<?php 
/*
Plugin Name: Hair Calculator
Plugin URI: https://markobabovic.com/
Description: Hair Calculator
Author: Marko Babovic
Author URI: https://markobabovic.com/
Text Domain: hair-calculator
Domain Path: /languages/
Version: 1.0
*/

define("HAIR_PLUGIN_FILE",__FILE__);
define("HAIR_PLUGIN_DIR",dirname( __FILE__ ) );

include "includes/class.Core_Hair_Calculator_Plugin.php";
include "includes/class.Hair_Calculator_Plugin.php";
include "public/class.Hair_Calculator_Public.php";
include "includes/class.Hair_Calculator.php";

new Core_Hair_Calculator_Plugin();
new Hair_Calculator_Plugin();
new Hair_Calculator_Public();