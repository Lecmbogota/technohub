<?php

/**
 * Theme Admin Menu and Page.
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Theme_Page Class
 *
 * @package gadgetry
 * @since 1.0
 */
class Theme_Page {

	/**
	 * Construct method.
	 *
	 * @package gadgetry
	 * @since 1.0
	 */
	public function __construct() {

		add_action( 'admin_menu', array( $this, 'add_theme_page' ) );
	}

	/**
	 * Add theme menu and page.
	 *
	 * @package gadgetry
	 * @since 1.0
	 */
	public function add_theme_page() {

		add_theme_page(
			esc_html__( 'Gadgetry Theme', 'gadgetry' ),
			esc_html__( 'Gadgetry', 'gadgetry' ),
			'edit_theme_options',
			'gadgetry-settings',
			array( $this, 'render_settings_page' )
		);
	}

	/**
	 * Render settings page html element.
	 *
	 * @package gadgetry
	 * @since 1.0
	 */
	public function render_settings_page() {

		get_admin_template( 'theme-page' );
	}
}
