<?php
/**
 * Title: Media text with right image (T1S1)
 * Slug: gadgetry/media-type-1-style-1
 * Categories: media, call-to-action
 * Description: Media text section with title, offer, button and right image.
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"style":{"color":{"background":"#000000"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#000000">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|32","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}}},"textColor":"gray-100","fontSize":"xxx-large"} -->
				<h2 class="wp-block-heading has-gray-100-color has-text-color has-link-color has-xxx-large-font-size"><?php esc_html_e( 'Immerse Superior Sound Quality with Our Headphones', 'gadgetry' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-500"}}},"typography":{"textTransform":"uppercase"}},"textColor":"gray-500"} -->
				<p class="has-gray-500-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e( 'Gadgetry CX 20QF-67XOX', 'gadgetry' ); ?></p>
						<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-gadgetry-button-whiteblack-type-1-style-1"} -->
					<div class="wp-block-button is-style-gadgetry-button-whiteblack-type-1-style-1">
						<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Starting at $59', 'gadgetry' ); ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-800x500.webp' ) ); ?>" alt=""/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
