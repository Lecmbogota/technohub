<?php
/**
 * Helpers functions.
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Checks whether script debug mode is enabled.
 *
 * Useful to load minified / unminified script file depending on the
 * SCRIPT_DEBUG constant
 *
 * @since 1.0
 *
 * @return bool True if script debug mode is enabled, false otherwise.
 */
function is_script_debug() {

	return ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG );
}

/**
 * Gets the script suffix based on script debug mode.
 *
 * Use it to add '.min' suffix while SCRIPT_DEBUG is false.
 *
 * @since 1.0
 *
 * @return string The script suffix (empty string or '.min').
 */
function get_script_suffix() {

	return is_script_debug() ? '' : '.min';
}

/**
 * Gets the asset folder name based on script debug mode.
 *
 * Use it to add folder name to the script file
 * 'minified' if script debug is disabled
 * 'unminified' otherwise.
 *
 * @since 1.0
 *
 * @return string The script suffix (empty string or '.min').
 */
function get_assets_folder_name_by_minification() {

	return get_script_suffix() ? 'minified' : 'unminified';
}

/**
 * Check and return status of the plugin installation.
 *
 * @since 1.0
 *
 * @return string "Not Installed", "Installed", "Activated"
 */
function plugin_installation_status( $plugin_path ) {

	$status = '';

	if ( is_plugin_active( $plugin_path ) ) {

		$status = 'activated';
	} elseif ( file_exists( WP_PLUGIN_DIR . '/' . $plugin_path ) ) {

		$status = 'installed';
	} else {

		$status = 'not-installed';
	}

	return $status;
}
