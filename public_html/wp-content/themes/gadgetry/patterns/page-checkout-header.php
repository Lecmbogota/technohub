<?php
/**
 * Title: Checkout Header
 * Slug: gadgetry/page-checkout-header
 * Inserter: no
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"metadata":{"name":"Checkout Header"},"style":{"spacing":{"blockGap":"var:preset|spacing|16","margin":{"top":"var:preset|spacing|32"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--32)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|16","left":"var:preset|spacing|16"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--16)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:site-logo /-->

			<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary-500","fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:woocommerce/breadcrumbs {"fontSize":"xx-small","className":"is-style-default","textColor":"gray-1000","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-900"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}}} /-->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->