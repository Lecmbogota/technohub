<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mdvadmin_16964' );

/** Database username */
define( 'DB_USER', 'mdvadmin_16964' );

/** Database password */
define( 'DB_PASSWORD', '50655ef2d6d2843d3fa1' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tgEtb;JnpJ@8Z,WW:x4/i$!-vz)Emj<4 k`]r=j#:D0G-92c.^xzK_Fd)=lPbRbx' );
define( 'SECURE_AUTH_KEY',  'Y}BE^7=$uz%`Ur=FhxL]:QV1b7y ;!`Y4`2YP?Dx~Ltj70_>v^/k2,h)!vB)e~^g' );
define( 'LOGGED_IN_KEY',    '3?h1#JNj{~c3zh3=5ZB5>~#_/vb~EDX!D^J^$q^tGRAJ;)zS@_!/t~FI.%;c65j0' );
define( 'NONCE_KEY',        'xTMl`ffS3u+i}1exx:%`m>uV+/Y#-Dq(2OG|RNfx_.WYdOI9;2Q`G!5Nq#XA5gt&' );
define( 'AUTH_SALT',        'nf![6id6qx4/d_qOObA3PFke9Q-GfQWOi1Nd@ h>xwbo`H4p#;OT0Y)e(=X.NZd)' );
define( 'SECURE_AUTH_SALT', 'F^=2N*I>_MFpQ~6_iOWSU^~mQ>OhY/gcP;S4Gpyf8WO8Iml6z4Hl1mm/j:eke]T*' );
define( 'LOGGED_IN_SALT',   '#2:(EvROkJ<.KdSdh]P]n8RfP_5s%3oz.03D|F5^[UE*=^2*JOdTxgEd7~WLM62*' );
define( 'NONCE_SALT',       'wO8`zQP&Lzr<Idwy-0)|L(Hx,H}Khh yC~}<GaE0spdyPOX82Ap%I t%}{ze_lEZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_VaCBi_';


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';