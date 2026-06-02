<?php
/**
 * Title: 404
 * Slug: gadgetry/404
 * Inserter: no
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"metadata":{"name":"Content Area"},"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|32"}},"layout":{"type":"constrained"}} -->
	<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1} -->
				<h1 class="wp-block-heading has-text-align-center">
					<?php esc_html_e( '404', 'gadgetry' ); ?>
				</h1>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|16"},"blockGap":"var:preset|spacing|16"}},"layout":{"type":"constrained","contentSize":"600px","wideSize":""}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--16)">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}}},"textColor":"primary-500","fontSize":"medium"} -->
				<p class="has-text-align-center has-primary-500-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600">
					<?php esc_html_e( 'Page not found…', 'gadgetry' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">
					<?php esc_html_e( 'Sorry, the page you are looking for is not found. Check the typo in the URL or go to homepage.', 'gadgetry' ); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|32"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--32)">
			<!-- wp:button {"className":"is-style-gadgetry-button-type-1-style-1","style":{"border":{"width":"1px"}}} -->
			<div class="wp-block-button is-style-gadgetry-button-type-1-style-1">
			<a class="wp-block-button__link wp-element-button" style="border-width:1px" href="#"><?php esc_html_e( 'Go Back Home', 'gadgetry' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</main>
<!-- /wp:group -->
