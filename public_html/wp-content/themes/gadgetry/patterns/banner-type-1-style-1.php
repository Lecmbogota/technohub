<?php
/**
 * Title: Banner (T1S1)
 * Slug: gadgetry/banner-type-1-style-1
 * Categories: banner, call-to-action, featured
 * Viewport width: 1280
 * Description: A hero section with a title, a paragraph, a CTA button, and an image.
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"metadata":{"name":"Banner"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"color":{"background":"#000000"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#000000;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|32"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}}},"textColor":"gray-100"} -->
				<h1 class="wp-block-heading has-gray-100-color has-text-color has-link-color"><?php esc_html_e( 'Super Powerful Portable Sound', 'gadgetry' ); ?></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-500"}}}},"textColor":"gray-500"} -->
				<p class="has-gray-500-color has-text-color has-link-color"><?php esc_html_e( 'Experience superior sound quality on the go. Our portable speakers deliver powerful audio wherever you are.', 'gadgetry' ); ?></p>
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

		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
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
