<?php

// Enqueue styles/scripts
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'theme-style',
		get_stylesheet_directory_uri() . '/res/build/index.css',
		[],
		filemtime(get_stylesheet_directory() . '/res/build/index.css'),
	);

	wp_enqueue_script(
		'theme-script',
		get_stylesheet_directory_uri() . '/res/build/index.js',
		[],
		filemtime(get_stylesheet_directory() . '/res/build/index.js'),
		true,
	);
});

// Remove Wordpress
add_filter(
	'wp_enqueue_scripts',
	function () {
		wp_deregister_style('classic-theme-styles');
		wp_dequeue_style('classic-theme-styles');
		wp_dequeue_style('wp-block-library');
	},
	100,
);
