<?php
/**
 * Notices.
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Notices Class
 *
 * @package gadgetry
 * @since 1.0
 */
class Notices {

	/**
	 * Construct method.
	 *
	 * @package gadgetry
	 * @since 1.0
	 */
	public function __construct() {

		add_action( 'admin_notices', array( $this, 'welcome_notice' ) );

		add_action( 'wp_loaded', array( $this, 'update_dismiss_notice_option' ) );
	}

	/**
	 * Show welcome notice on theme activation
	 *
	 * @package gadgetry
	 * @since 1.0
	 */
	public function welcome_notice() {

		$is_dismiss_button_clicked = get_option( 'gadgetry_admin_notice_welcome' );

		$current_screen = get_current_screen();

		$hide_notice_pages_id = array( 'appearance_page_gadgetry-settings', 'appearance_page_advanced-import', 'update' );

		// Do not display to notice in some pages.
		if ( in_array( $current_screen->id, $hide_notice_pages_id ) ) {

			return;
		}

		// Return, if dismiss icon clicked.
		if ( $is_dismiss_button_clicked ) {

			return;
		}

		$args = array(
			'type'               => 'info',
			'dismissible'        => true,
			'paragraph_wrap'     => false,
			'additional_classes' => array( 'gadgetry-notice', 'gadgetry-welcome-notice' ),
		);

		$message = $this->render_notice_markup();

		wp_admin_notice( $message, $args );
	}

	/**
	 * Load welcome message content.
	 *
	 * @package gadgetry
	 * @since 1.0
	 */
	public function render_notice_markup() {

		ob_start();

		get_admin_template( 'notice-onboarding' );

		$message = ob_get_clean();

		return $message;
	}


	/**
	 * Dismiss welcome notice
	 *
	 * Save nag value in database when user clicks on dismiss button.
	 * To check later the value while outputting the notice markup.
	 *
	 * @package gadgetry
	 * @since 1.0
	 */
	public function update_dismiss_notice_option() {

		if ( isset( $_GET['gadgetry-hide-notice'] ) && isset( $_GET['_gadgetry_notice_nonce'] ) ) {

			// Check the nonce.
			if ( ! wp_verify_nonce( sanitize_key( wp_unslash( $_GET['_gadgetry_notice_nonce'] ) ), 'gadgetry_hide_notices_nonce' ) ) {

				wp_die( esc_html__( 'Action failed. Please refresh the page and retry.', 'gadgetry' ) );
			}

			if ( ! current_user_can( 'manage_options' ) ) {

				wp_die( esc_html__( 'Cheatin&#8217; huh?', 'gadgetry' ) );
			}

			$hide_notice = sanitize_text_field( wp_unslash( $_GET['gadgetry-hide-notice'] ) );

			// Save the nag value.
			if ( 'welcome' === $hide_notice ) {

				update_option( 'gadgetry_admin_notice_' . $hide_notice, 1 );
			}
		}
	}
}
