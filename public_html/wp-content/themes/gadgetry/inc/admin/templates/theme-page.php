<?php
/**
 * Theme page markup.
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$tab_name  = 'get-started';
$tab_param = '';
$base_path = admin_url( 'themes.php?page=gadgetry-settings' );

$tab_items = array(
	'get-started' => __( 'Get Started', 'gadgetry' ),
	'resources'   => __( 'Help Resources', 'gadgetry' ),
);

if ( isset( $_GET['gadgetry_theme_page_tab'] ) ) {

	$key = sanitize_text_field( wp_unslash( $_GET['gadgetry_theme_page_tab'] ) );

	if ( isset( $_GET[ '_gadgetry_theme_page_tab_' . $key . '_nonce' ] ) ) {

		if ( ! wp_verify_nonce( sanitize_key( wp_unslash( $_GET[ '_gadgetry_theme_page_tab_' . $key . '_nonce' ] ) ), 'gadgetry_dashboard_tab_' . $key ) ) {

			wp_die( esc_html__( 'Action failed. Please refresh the page and retry.', 'gadgetry' ) );
		}

		if ( ! current_user_can( 'manage_options' ) ) {

			wp_die( esc_html__( 'Cheatin&#8217; huh?', 'gadgetry' ) );
		}

		$tab_param = $key;

	}
}

if ( array_key_exists( $tab_param, $tab_items ) ) {

	// Get the tab name from URL param.
	$tab_name = isset( $tab_param ) ? wp_unslash( $tab_param ) : 'dashboard';
}
?>

<div class="wrap gadgetry-settings-wrapper">

	<div class="gadgetry-header">

		<div class="gadgetry-row gadgetry-header-top">

			<div class="gadgetry-container">

				<div class="gadgetry-identity">

					<img class="gadgetry-logo" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/gadgetry-logo.webp" alt="<?php esc_attr_e( 'Gadgetry Logo', 'gadgetry' ); ?>" />

					<div class="gadgetry-info">

						<h1 class="gadgetry-version">
							<?php

							printf(
								/* Translators: %1$s - Page title, %2$s - Theme version number */
								esc_html__( '%1$s v%2$s', 'gadgetry' ),
								esc_html( get_admin_page_title() ),
								esc_html( GADGETRY_VERSION )
							);
							?>
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /.gadgetry-header -->

	<div class="gadgetry-db-main">

		<div class="gadgetry-tabs">

			<div class="gadgetry-row nav-tab-wrapper">

				<div class="gadgetry-container">

					<div class="gadgetry-tabs__nav">

						<?php
						foreach ( $tab_items as $key => $value ) {

							$active_tab_class = ( $tab_name === $key ) ? 'gadgetry-nav-item__active' : '';

							$tab_url_param = ( 'dashboard' === $key ) ? '' : $key;

							$tab_path = $base_path;

							if ( 'dashboard' !== $key ) {

								$tab_path = wp_nonce_url(
									add_query_arg(
										array(
											'gadgetry_theme_page_tab' => $tab_url_param,
										),
										$base_path
									),
									'gadgetry_dashboard_tab_' . $key,
									'_gadgetry_theme_page_tab_' . $key . '_nonce',
								);
							}
							?>

							<div class="gadgetry-nav-item <?php echo esc_attr( $active_tab_class ); ?>">

								<a href="<?php echo esc_url( $tab_path ); ?>"><?php echo esc_html( $value ); ?></a>
							</div>

							<?php
						}
						?>

					</div>

				</div>
			</div>

			<div class="gadgetry-row gadgetry-tabs_content tab-content">

				<div class="gadgetry-container">
					<?php
					$template = 'tab-' . $tab_name;

					get_admin_template( $template );
					?>
				</div>
			</div>

		</div>
	</div>
</div>
