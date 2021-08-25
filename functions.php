<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
add_action( 'wp_ajax_elegibilty_for_completion_letter', 'elegibilty_for_completion_letter' );

function theme_enqueue_scripts() {
	wp_register_script('mehdi_theme_ajax_request', get_theme_file_uri('/js/main.js'), false, '1.0.0', true );
	wp_enqueue_script( 'mehdi_theme_ajax_request');
	wp_localize_script( 'mehdi_theme_ajax_request', 'wp_mehdi_ajax_obj', array('ajax_url' => admin_url('admin-ajax.php')) );
}

function elegibilty_for_completion_letter(){
	if(isset($_POST['var'])){
		$res = "var is coming from backend";
		wp_send_json_success($res);
		//Close the ajax request
		wp_die();
	}
}
