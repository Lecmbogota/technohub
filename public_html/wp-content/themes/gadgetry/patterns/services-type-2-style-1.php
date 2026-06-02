<?php
/**
 * Title: Four Column with icon (T2S1)
 * Slug: gadgetry/services-type-2-style-1
 * Categories: services, call-to-action, banner
 * Description: Service Process with four column and icons.
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"metadata":{"name":"Process"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"border":{"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|16","left":"var:preset|spacing|16"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%">
			<!-- wp:image {"width":"32px","height":"32px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-truck.svg' ) ); ?>" alt="" style="object-fit:cover;width:32px;height:32px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","fontSize":"x-small"} -->
				<h2 class="wp-block-heading has-text-align-center has-x-small-font-size"><?php esc_html_e( 'Free Shipping', 'gadgetry' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><?php esc_html_e( 'Orders above $200', 'gadgetry' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%">
			<!-- wp:image {"width":"32px","height":"32px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-money.svg' ) ); ?>" alt="" style="object-fit:cover;width:32px;height:32px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","fontSize":"x-small"} -->
				<h2 class="wp-block-heading has-text-align-center has-x-small-font-size"><?php esc_html_e( 'Money-back', 'gadgetry' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><?php esc_html_e( '30 day Guarantee', 'gadgetry' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%">
			<!-- wp:image {"width":"32px","height":"32px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-phone.svg' ) ); ?>" alt="" style="object-fit:cover;width:32px;height:32px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","fontSize":"x-small"} -->
				<h2 class="wp-block-heading has-text-align-center has-x-small-font-size"><?php esc_html_e( 'Premium Support', 'gadgetry' ); ?>	</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><?php esc_html_e( 'Phone and email support', 'gadgetry' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%">
			<!-- wp:image {"width":"32px","height":"32px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-lock.svg' ) ); ?>" alt="" style="object-fit:cover;width:32px;height:32px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","fontSize":"x-small"} -->
				<h2 class="wp-block-heading has-text-align-center has-x-small-font-size"><?php esc_html_e( 'Secure Payments', 'gadgetry' ); ?>	</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><?php esc_html_e( 'Secured by Stripe', 'gadgetry' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
