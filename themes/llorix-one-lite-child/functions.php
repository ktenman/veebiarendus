<?php
	add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
	function enqueue_parent_styles() {
		wp_enqueue_style( 'llorix-one-lite', get_template_directory_uri().'/style.css' );
		wp_enqueue_style( 'llorix-one-lite', get_template_directory_uri().'/rtl.css' );
	}
?>