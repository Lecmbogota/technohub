<?php
/**
 * Title: Banner (T3S1)
 * Slug: gadgetry/banner-type-3-style-1
 * Categories: banner
 * Viewport width: 1280
 * Description: A hero section with a title, a paragraph, a CTA button, and image.
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32)">
	<!-- wp:group {"align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"gradient":"linear-gradient(135deg,rgb(241,39,17) 0%,rgb(245,175,25) 100%)"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide has-background" style="border-radius:16px;background:linear-gradient(135deg,rgb(241,39,17) 0%,rgb(245,175,25) 100%);padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|32"}}} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}}},"textColor":"gray-100"} -->
					<h1 class="wp-block-heading has-gray-100-color has-text-color has-link-color"><?php esc_html_e( 'Dominate the Game', 'gadgetry' ); ?></h1>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}}},"textColor":"gray-100"} -->
					<p class="has-gray-100-color has-text-color has-link-color"><?php esc_html_e( 'Immerse yourself in gaming with this high-performance PC and stunning display for ultimate visual clarity and responsiveness.', 'gadgetry' ); ?></p>
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

			<!-- wp:column {"verticalAlignment":"center","width":""} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-800x500.webp' ) ); ?>" alt="" />
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->