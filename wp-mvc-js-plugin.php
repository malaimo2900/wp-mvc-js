<?php
/**
 * Plugin Name: WP-MVC-JS
 * Plugin URI: http://www.github.com/malaimo2900/wp-mvc-js
 * Description: A MVC interface using backbone, angular and ember
 * Version: 0.1
 * Author URI: http://blog.quantum-foam.org
 */




defined('ABSPATH') or die("Please do not run script directly.");

define('WP_JSPKG_PLUGIN_DEBG', TRUE);

define('WP_MVC_JS_PATH', realpath(__DIR__));
define('WP_MVCJS_PLUGIN_URL', plugins_url( '' , WP_MVC_JS_PATH ) );
define('WP_MVC_JS_URL',  WP_MVCJS_PLUGIN_URL . '/js/App.js' );


require_once(WP_MVC_JS_PATH. "/includes/wp-mvc-js-main.php");


$mvcjs = new WPMVCJS();
$mvcjs->init();


?>