<?php
/**
 * Title: Information Bar (T1S1)
 * Slug: gadgetry/info-bar-type-1-style-1
 * Categories: text
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|16","right":"var:preset|spacing|16"},"blockGap":"var:preset|spacing|16"},"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}}},"backgroundColor":"alert-warning-500","textColor":"gray-100","fontSize":"xxx-small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-gray-100-color has-alert-warning-500-background-color has-text-color has-background has-link-color has-xxx-small-font-size" style="padding-top:var(--wp--preset--spacing--12);padding-right:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--16)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}}},"textColor":"primary-500"} -->
	<p class="has-text-align-center has-primary-500-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php esc_html_e( '🎉 Flash Sale! Enjoy', 'gadgetry' ); ?><strong><?php esc_html_e( '20% OFF', 'gadgetry' ); ?></strong><?php esc_html_e( 'storewide—today only! Don’t miss out! 🛍️', 'gadgetry' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-gadgetry-button-blackwhite-type-1-style-1","style":{"typography":{"fontStyle":"italic","fontWeight":"600"},"border":{"radius":"50px"},"spacing":{"padding":{"left":"var:preset|spacing|12","right":"var:preset|spacing|12","top":"var:preset|spacing|2","bottom":"var:preset|spacing|2"}}},"fontSize":"xxx-small"} -->
		<div class="wp-block-button is-style-gadgetry-button-blackwhite-type-1-style-1">
			<a class="wp-block-button__link has-xxx-small-font-size has-custom-font-size wp-element-button" href="#" style="border-radius:50px;padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--12);font-style:italic;font-weight:600"><?php esc_html_e( 'Shop Now', 'gadgetry' ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->