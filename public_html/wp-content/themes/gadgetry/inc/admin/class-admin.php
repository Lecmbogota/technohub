<?php
/**
 * Manage admin area.
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Admin Class
 */
class Admin {

	/**
	 * Instance member.
	 *
	 * @var object|null
	 * @since 1.0
	 */
	private static $instance = null;

	/**
	 * Instance method.
	 *
	 * @package gadgetry
	 * @since 1.0
	 */
	public static function get_instance() {

		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Construct method.
	 *
	 * @package gadgetry
	 * @since 1.0
	 */
	public function __construct() {

		add_action( 'after_setup_theme', array( $this, 'includes' ) );

		add_action( 'after_setup_theme', array( $this, 'init' ) );
	}

	/**
	 * Include admin classes.
	 *
	 * @package gadgetry
	 * @since 1.0
	 */
	public function includes() {

		require_once __DIR__ . '/admin-functions.php';

		require_once __DIR__ . '/classes/class-notices.php';
		require_once __DIR__ . '/classes/class-demo-import.php';
		require_once __DIR__ . '/classes/class-theme-page.php';
	}

	/**
	 * Initialize admin classes.
	 *
	 * @package gadgetry
	 * @since 1.0
	 */
	public function init() {

		new Notices();

		new Demo_Import();

		new Theme_Page();
	}
}

new Admin();
