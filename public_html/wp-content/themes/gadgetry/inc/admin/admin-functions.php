<?php
/**
 * Admin helper functions.
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Load admin template files.
 *
 * @since 1.0
 *
 * @return void.
 */
function get_admin_template( $template_name ) {

	$template_path = 'inc/admin/templates/' . sanitize_file_name( $template_name ) . '.php';

	$template = locate_template( $template_path );

	if ( $template ) {

		include $template;
	} else {

		wp_die(
			sprintf(
				/* Translators: %1$s - Opening html p tag, %2$s - Closing html p tag */
				esc_html__( '%1$sCould not load the content.%2$s', 'gadgetry' ),
				'<p>',
				'</p>'
			)
		);
	}
}

/**
 * Button to install/activate plugin.
 *
 * @since 1.0
 *
 * @return void.
 */
function plugin_installation_button( $plugin_path, $link_target = '' ) {

	$button_text = '';

	$button_link = '#';

	$button_class = 'gadgetry-button gadgetry-button--primary gadgetry-get-started-button';

	$plugin_status = plugin_installation_status( $plugin_path );

	// Plugin installation status.
	$button_class .= ' gadgetry-get-started-button--plugin-' . $plugin_status;

	$target = $link_target ? 'target=' . $link_target : '';

	if ( 'not-installed' === $plugin_status ) {

		if ( ! current_user_can( 'install_plugins' ) ) {

			return;
		}

		$button_text = __( 'Install Demo Import', 'gadgetry' );

		$button_link = wp_nonce_url(
			add_query_arg(
				array(
					'action' => 'install-plugin',
					'plugin' => 'advanced-import',
				),
				admin_url( 'update.php' )
			),
			'install-plugin_advanced-import'
		);

	} elseif ( 'installed' === $plugin_status ) {

		if ( ! current_user_can( 'activate_plugins' ) ) {

			return;
		}

		$button_text = __( 'Activate Demo Import', 'gadgetry' );

		$button_link = wp_nonce_url(
			add_query_arg(
				array(
					'action' => 'activate',
					'plugin' => $plugin_path,
				),
				admin_url( 'plugins.php' )
			),
			'activate-plugin_' . $plugin_path
		);

	} else {

		$button_text = __( 'Start Demo Import', 'gadgetry' );

		$button_link = add_query_arg(
			array(
				'page' => 'advanced-import',
			),
			admin_url( 'themes.php' )
		);

	}
	?>
	<a
		class="<?php echo esc_attr( $button_class ); ?>"
		href="<?php echo esc_url( $button_link ); ?>"
		<?php echo esc_attr( $target ); ?>>
		<?php echo esc_html( $button_text ); ?>
	</a>
	<?php
}
