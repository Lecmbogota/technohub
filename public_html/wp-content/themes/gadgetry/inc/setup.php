<?php
/**
 * After theme setup.
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Setting up the theme.
 *
 * @since 1.0
 * @return void
 */
function after_setup() {

	remove_theme_support( 'core-block-patterns' );

	/*
	* Make theme translation ready.
	*/
	load_theme_textdomain( 'gadgetry', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', GADGETRY_NS . 'after_setup' );
