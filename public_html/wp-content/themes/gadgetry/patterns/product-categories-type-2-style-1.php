<?php
/**
 * Title: Feature Categories List (T2S1)
 * Slug: gadgetry/product-categories-type-2-style-1
 * Categories: gadgetry-woo
 * Description: Feature Category list in 2 columns.
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"metadata":{"name":"Feature Category"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"metadata":{"categories":["woo-commerce"],"patternName":"woocommerce-blocks/featured-category-triple","name":"Featured Category Double"},"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0px","bottom":"0px"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-800x500.webp' ) ); ?>","alt":"","dimRatio":30,"overlayColor":"black","isUserOverlayColor":true,"minHeightUnit":"px","contentPosition":"bottom center","className":"is-light has-white-color","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|32"},"blockGap":"var:preset|spacing|8"},"dimensions":{"aspectRatio":"16/9"}}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-center is-light has-white-color" style="padding-bottom:var(--wp--preset--spacing--32)">
				<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span>
				<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-800x500.webp' ) ); ?>" data-object-fit="cover"/>
				<div class="wp-block-cover__inner-container">
					<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
					<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Cameras', 'gadgetry' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"fontSize":"x-small"} -->
					<p class="has-text-align-center has-link-color has-x-small-font-size"><a href="#"><?php esc_html_e( 'Shop Now', 'gadgetry' ); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-800x500.webp' ) ); ?>","alt":"","dimRatio":30,"overlayColor":"black","isUserOverlayColor":true,"minHeightUnit":"px","contentPosition":"bottom center","className":"is-light has-white-color","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|32"},"blockGap":"var:preset|spacing|8"},"dimensions":{"aspectRatio":"16/9"}}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-center is-light has-white-color" style="padding-bottom:var(--wp--preset--spacing--32)">
				<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span>
				<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-800x500.webp' ) ); ?>" data-object-fit="cover"/>
				<div class="wp-block-cover__inner-container">
					<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
					<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Smartphone & Tablets', 'gadgetry' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"fontSize":"x-small"} -->
					<p class="has-text-align-center has-link-color has-x-small-font-size"><a href="#"><?php esc_html_e( 'Shop Now', 'gadgetry' ); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->