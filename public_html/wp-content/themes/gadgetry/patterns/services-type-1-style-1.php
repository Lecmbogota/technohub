<?php
/**
 * Title: Offer Services (T1S1)
 * Slug: gadgetry/services-type-1-style-1
 * Categories: services, call-to-action, banner
 * Description: Offer Service with backgournd image.
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"color":{"background":"#000000"},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-1920x1200.webp' ) ); ?>","id":967,"source":"file","title":"Placeholder Image"},"backgroundPosition":"50% 50%"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#000000;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|32"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}}},"textColor":"gray-100","fontSize":"xxx-large"} -->
			<h2 class="wp-block-heading alignwide has-gray-100-color has-text-color has-link-color has-xxx-large-font-size"><?php esc_html_e( 'Find Your Perfect Laptop: Power & Portability', 'gadgetry' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-500"}}},"typography":{"textTransform":"uppercase"}},"textColor":"gray-500"} -->
				<p class="has-gray-500-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e( 'MEGA DEAL', 'gadgetry' ); ?>							</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}}},"textColor":"gray-100","fontSize":"x-large"} -->
				<p class="has-gray-100-color has-text-color has-link-color has-x-large-font-size"><strong><?php esc_html_e( '20% OFF', 'gadgetry' ); ?></strong></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-gadgetry-button-whiteblack-type-1-style-1"} -->
				<div class="wp-block-button is-style-gadgetry-button-whiteblack-type-1-style-1">
					<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Shop Now', 'gadgetry' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->