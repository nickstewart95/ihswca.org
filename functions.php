<?php

// Enqueue styles/scripts
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'theme-style',
		get_stylesheet_directory_uri() . '/res/build/index.css',
		[],
		filemtime(get_stylesheet_directory() . '/res/build/index.css'),
	);

	wp_enqueue_style(
		'font',
		'https://fonts.googleapis.com/css2?family=Hind&family=Open+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap',
		[],
		'1.0.0',
	);

	wp_enqueue_script(
		'theme-script',
		get_stylesheet_directory_uri() . '/res/build/index.js',
		[],
		filemtime(get_stylesheet_directory() . '/res/build/index.js'),
		true,
	);
});

// Remove Wordpress block styles
add_filter(
	'wp_enqueue_scripts',
	function () {
		wp_deregister_style('classic-theme-styles');
		wp_dequeue_style('classic-theme-styles');
		wp_dequeue_style('wp-block-library');
	},
	100,
);

// Register menus
register_nav_menus([
	'header-navigation' => 'Header Navigation',
	'footer-popular-pages' => 'Footer - Popular Pages',
	'footer-wrestling-links' => 'Footer - Wrestling Links',
	'footer-about' => 'Footer - About',
]);

//Google Embed Shortcode
add_action('google-doc', function ($atts) {
	// Attributes
	$attributes = shortcode_atts(
		[
			'src' => '#',
		],
		$atts,
	);

	$source = $attributes['soruce'];

	return <<<HTML
		<div class="google-doc-src">
			<span class="logo">Google Embed</span>
			<span class="url"><a href="$source">Expand</a></span>
			<div class="clearfix"></div>
		</div>
		<iframe src="$source" class="iframe"></iframe>
	HTML;
});
