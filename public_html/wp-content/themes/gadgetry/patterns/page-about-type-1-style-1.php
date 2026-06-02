<?php
/**
 * Title: About Page (T1S1)
 * Slug: gadgetry/page-about-type-1-style-1
 * Categories: gadgetry-pages
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|32"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading -->
				<h2 class="wp-block-heading"><?php esc_html_e( 'Welcome to Gadgetry', 'gadgetry' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Our Ultimate Destination for Cutting-Edge Technology', 'gadgetry' ); ?></p>
				<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'At Gadgetry, we\'re passionate about bringing you the latest in innovative technology. Whether you\'re a tech enthusiast, a gadget lover, or simply someone looking to upgrade their everyday essentials, you\'ve come to the right place.', 'gadgetry' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-1920x1200.webp' ) ); ?>","alt":"Placeholder Image","dimRatio":50,"isUserOverlayColor":true,"minHeight":550,"customGradient":"linear-gradient(176deg,rgba(7,146,227,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"4px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover alignwide has-custom-content-position is-position-bottom-center" style="border-radius:4px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);min-height:550px">
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(176deg,rgba(7,146,227,0) 0%,rgb(0,0,0) 100%)"></span>
				<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-1920x1200.webp' ) ); ?>" data-object-fit="cover"/>
				<div class="wp-block-cover__inner-container">
					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"80px"}}} -->
						<div class="wp-block-button is-style-outline">
							<a class="wp-block-button__link wp-element-button" style="border-radius:80px" href="#"><?php esc_html_e( 'Shop Now', 'gadgetry' ); ?></a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80","margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|120"}}}} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%">
					<!-- wp:heading {"fontSize":"x-large"} -->
					<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Explore Our Extensive Range', 'gadgetry' ); ?></h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"66.66%"} -->
				<div class="wp-block-column" style="flex-basis:66.66%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Discover a curated selection of top-of-the-line gadgets that cater to every aspect of your modern lifestyle. From state-of-the-art smartphones and sleek laptops to smart home devices and wearable tech, we\'ve got it all. Our product lineup is sourced from renowned brands known for their quality, reliability, and innovation.', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|120"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"bottom":"var:preset|spacing|32"}}}} -->
			<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--32);flex-basis:33.33%">
				<!-- wp:heading {"fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Why Choose Gadgetry?', 'gadgetry' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Our product lineup is sourced from renowned brands known for their quality, reliability, and innovation.', 'gadgetry' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|32"}}} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Quality Assurance:', 'gadgetry' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'We handpick products that meet stringent quality standards, ensuring you get the best of what technology has to offer.', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Expert Guidance:', 'gadgetry' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Our team of tech enthusiasts is here to guide you through your purchase journey. Whether you need advice on specifications or comparisons between models, we\'re here to help.', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Customer Satisfaction:', 'gadgetry' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Your satisfaction is our priority. We strive to provide a seamless shopping experience from browsing to delivery, backed by responsive customer support.', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

