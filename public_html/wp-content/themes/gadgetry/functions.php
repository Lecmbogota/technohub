<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

const GADGETRY_VERSION = '1.0.8';

const GADGETRY_DIR  = __DIR__ . DIRECTORY_SEPARATOR;
const GADGETRY_NS   = __NAMESPACE__ . '\\';
const GADGETRY_SLUG = 'gadgetry';

require_once GADGETRY_DIR . 'inc/helpers.php';
require_once GADGETRY_DIR . 'inc/setup.php';
require_once GADGETRY_DIR . 'inc/scripts.php';

// Block Styles.
require_once GADGETRY_DIR . 'inc/block-styles.php';

// Woo Block Styles.
require_once GADGETRY_DIR . 'inc/wc-block-styles.php';

/**
 * Admin notices, theme pages, etc.
 */
if ( is_admin() ) {

	require_once GADGETRY_DIR . 'inc/admin/class-admin.php';
}
