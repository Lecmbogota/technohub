<?php
/**
 * Title: Coming Soon (T1S1)
 * Slug: gadgetry/coming-soon-type-1-style-1
 * Categories: media
 * Description: Coming soon with heading and days, hours, minutes and seconds
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Area"},"style":{"spacing":{"blockGap":"var:preset|spacing|32"}},"backgroundColor":"primary-500","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-primary-500-background-color has-background">
	<!-- wp:woocommerce/coming-soon {"className":"woocommerce-coming-soon-entire-site wp-block-woocommerce-background-color"} -->
	<div class="wp-block-woocommerce-coming-soon woocommerce-coming-soon-entire-site wp-block-woocommerce-background-color">
		<!-- wp:cover {"dimRatio":0,"overlayColor":"gray-100","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"center","layout":{"type":"constrained"}} -->
		<div class="wp-block-cover aligncenter is-light" style="min-height:100vh">
			<span aria-hidden="true" class="wp-block-cover__background has-gray-100-background-color has-background-dim-0 has-background-dim"></span>
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|16","margin":{"bottom":"var:preset|spacing|32"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
				<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--32)">
					<!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}}},"textColor":"gray-100"} -->
					<h1 class="wp-block-heading has-text-align-center has-gray-100-color has-text-color has-link-color"><?php esc_html_e( 'Coming Soon', 'gadgetry' ); ?></h1>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"gray-100","fontSize":"small"} -->
					<p class="has-text-align-center has-gray-100-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Pardon our dust! We\'re working on something amazing — check back soon!', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"textAlign":"center","className":"is-style-gadgetry-button-whiteblack-type-1-style-1"} -->
					<div class="wp-block-button is-style-gadgetry-button-whiteblack-type-1-style-1">
						<a class="wp-block-button__link has-text-align-center wp-element-button" href="#"><?php esc_html_e( 'Notify Me', 'gadgetry' ); ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:woocommerce/coming-soon -->
</main>
<!-- /wp:group -->