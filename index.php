<?php

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * Passes translations to JavaScript.
 */
function test_esnext_register_block() {

	// automatically load dependencies and version
	$asset_file = include( plugin_dir_path( __FILE__ ) . 'index.php');

	wp_register_script(
		'test-esnext',
		plugins_url( 'index.js', __FILE__ ),
		$asset_file['dependencies'],
		$asset_file['version']
	);

	register_block_type( 'test/test-esnext', array(
		'editor_script' => 'test-esnext',
	) );

}
add_action( 'init', 'test_esnext_register_block' );
