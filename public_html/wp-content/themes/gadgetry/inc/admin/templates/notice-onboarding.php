<?php
/**
 * Onboarding notice.
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$dismiss_url = wp_nonce_url(
	remove_query_arg( array( 'activated' ), add_query_arg( 'gadgetry-hide-notice', 'welcome' ) ),
	'gadgetry_hide_notices_nonce',
	'_gadgetry_notice_nonce'
);

$caption_text1 = '';

$caption_text2 = __( 'The "Get Started" link will take you to a page with additional setup options, including a step-by-step guide to building your site manually.', 'gadgetry' );

$ai_plugin_path = 'advanced-import/advanced-import.php';

$ai_plugin_status = plugin_installation_status( $ai_plugin_path );

if ( 'not-installed' === $ai_plugin_status ) {

	$caption_text1 = __( 'Clicking this button will install the "Advanced Import" plugin allowing you to import the demo site.', 'gadgetry' );

} elseif ( 'installed' === $ai_plugin_status ) {

	$caption_text1 = __( 'Clicking this button will activate the "Advanced Import" plugin allowing you to import the demo site.', 'gadgetry' );

} else {

	$caption_text1 = __( 'IMPORTANT: Dismiss this notice (by clicking the close icon on the top right) if you already imported the demo site or if it is not a fresh installation.', 'gadgetry' );

	$caption_text2 = '';

}
?>

<div class="gadgetry-notice__content">
	<div class="gadgetry-notice__text">

		<h2><?php esc_html_e( 'Welcome to Gadgetry Theme!', 'gadgetry' ); ?> </h2>

		<p><?php esc_html_e( 'Get started quickly with direct demo import or explore get started guides.', 'gadgetry' ); ?> </p>

	</div>

	<div class="gadgetry-buttons">

		<?php plugin_installation_button( $ai_plugin_path ); ?>

	</div>

	<div class="gadgetry-notice__caption">

		<p>↳ <?php echo esc_html( $caption_text1 ); ?></p>
		<p><?php echo esc_html( $caption_text2 ); ?></p>
	</div>
</div>

<a class="gadgetry-notice-dismiss notice-dismiss" href="<?php echo esc_url( $dismiss_url ); ?>">

	<?php esc_html_e( 'Dismiss', 'gadgetry' ); ?>
</a>
