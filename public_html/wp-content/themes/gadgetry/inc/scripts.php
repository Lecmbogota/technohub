<?php
/**
 * Load CSS and JavaScripts.
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue frontend styles/scripts.
 */
if ( ! function_exists( 'enqueue_front_scripts' ) ) :

	/**
	 * Enqueue frontend styles/scripts.
	 *
	 * @since 1.0
	 * @return void
	 */
	function enqueue_front_scripts() {

		$suffix = get_script_suffix();

		$style_folder = get_assets_folder_name_by_minification();

		// Load main style.
		wp_enqueue_style( GADGETRY_SLUG, get_template_directory_uri() . '/assets/css/' . $style_folder . '/style' . $suffix . '.css', array(), GADGETRY_VERSION );

		// RTL support.
		wp_style_add_data( GADGETRY_SLUG, 'rtl', 'replace' );

		// Load styles for WC.
		if ( class_exists( 'woocommerce' ) ) {

			wp_enqueue_style( 'gadgetry-wc', get_template_directory_uri() . '/assets/css/' . $style_folder . '/wc' . $suffix . '.css', array(), GADGETRY_VERSION );

			// RTL support.
			wp_style_add_data( 'gadgetry-wc', 'rtl', 'replace' );
		}
	}
endif;

add_action( 'wp_enqueue_scripts', GADGETRY_NS . 'enqueue_front_scripts' );


/**
 * Register pattern categories.
 */
if ( ! function_exists( 'register_pattern_categories' ) ) :

	/**
	 * Register pattern categories.
	 *
	 * @since 1.0
	 * @return void
	 */
	function register_pattern_categories() {

		register_block_pattern_category(
			'gadgetry-pages',
			array(
				'label' => esc_html__( '1. Pages (Gadgetry)', 'gadgetry' ),
			)
		);

		register_block_pattern_category(
			'gadgetry-woo',
			array(
				'label' => esc_html__( '2. WooCommerce (Gadgetry)', 'gadgetry' ),
			)
		);

		register_block_pattern_category(
			'gadgetry-advertisements',
			array(
				'label' => esc_html__( '3. Advertisements (Gadgetry)', 'gadgetry' ),
			)
		);
	}
endif;

add_action( 'init', GADGETRY_NS . 'register_pattern_categories' );


/** ======================================== Admin Scripts ======================================== */

if ( ! function_exists( 'enqueue_admin_scripts' ) ) :

	/**
	 * Load admin scripts
	 *
	 * @since 1.0
	 * @return void
	 */
	function enqueue_admin_scripts() {

		wp_enqueue_style( 'gadgetry-admin', get_template_directory_uri() . '/assets/admin/css/admin.css', array(), GADGETRY_VERSION );
	}
endif;

add_action( 'admin_enqueue_scripts', GADGETRY_NS . 'enqueue_admin_scripts' );

if ( ! function_exists( 'enqueue_editor_scripts' ) ) :

	/**
	 * Load editor scripts
	 *
	 * @since 1.0
	 * @return void
	 */
	function enqueue_editor_scripts() {

		$suffix = get_script_suffix();

		$style_folder = get_assets_folder_name_by_minification();

		add_editor_style( 'assets/css/' . $style_folder . '/editor-style' . $suffix . '.css' );

		add_editor_style( 'assets/css/' . $style_folder . '/wc' . $suffix . '.css' );
	}
endif;

add_action( 'after_setup_theme', GADGETRY_NS . 'enqueue_editor_scripts' );
