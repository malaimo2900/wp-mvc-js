<?php

/**
 *  @package wp-mvc-js
 **/


class WPMVCJS {

	public function init() {
		if (class_exists('WPJSPKG')) {
			WPJSPKG::addScript('mvc-js', 'WordPress MVC JavaScript', WP_MVC_JS_URL, '0.1');
		}
		add_action('admin_notices', array($this, "wp_mvc_js_adminnotice"));
	}

	
	function wp_mvc_js_adminnotice(){
		if (!class_exists('WPJSPKG')){
			echo '<div class="updated">
                <p>Please add the WordPress JavaScript Package Plugin</p></div>';
		}
	}
}
