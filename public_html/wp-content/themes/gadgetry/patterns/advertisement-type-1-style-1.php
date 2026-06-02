<?php
/**
 * Title: Advertisement (T1S1)
 * Slug: gadgetry/advertisement-type-1-style-1
 * Categories: gadgetry-advertisements
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}},"border":{"radius":"4px"},"dimensions":{"minHeight":""},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-1920x1200.webp' ) ); ?>","source":"file","title":"Placeholder Image"},"backgroundPosition":"50% 0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="border-radius:4px;padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16)">
		<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}},"typography":{"textTransform":"capitalize"}},"textColor":"gray-100","fontSize":"medium"} -->
		<p class="has-text-align-center has-gray-100-color has-text-color has-link-color has-medium-font-size" style="text-transform:capitalize"><strong><?php esc_html_e( 'Advertisement', 'gadgetry' ); ?></strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-500"}}},"typography":{"textTransform":"uppercase"}},"textColor":"gray-500","fontSize":"x-small"} -->
		<p class="has-text-align-center has-gray-500-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e( '1280 x 95', 'gadgetry' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
