<?php
/**
 * Register custom block styles.
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Register block styles.
 */

if ( ! function_exists( 'wc_block_styles' ) ) :

	/**
	 * Register custom WooCommerce block styles
	 *
	 * @since 1.0
	 * @return void
	 */
	function wc_block_styles() {

		// Define Product add to cart styles 1 to apply to multiple WooCommerce blocks.
		$wc_product_styles = array(
			array(
				'name'  => 'gadgetry-product-button-type-1-style-1',
				'label' => __( 'Button to Link (Gadgetry)', 'gadgetry' ),
			),
		);

		$block_styles = array(
			'woocommerce/breadcrumbs'                     => array(
				array(
					'name'         => 'gadgetry-breadcrumbs-style-1',
					'label'        => __( 'Center', 'gadgetry' ),
					'inline_style' => '.is-style-gadgetry-breadcrumbs-style-1 .woocommerce-breadcrumb {
											text-align: center;
										}',
				),
				array(
					'name'         => 'gadgetry-breadcrumbs-style-2',
					'label'        => __( 'Right', 'gadgetry' ),
					'inline_style' => '.is-style-gadgetry-breadcrumbs-style-2 .woocommerce-breadcrumb {
											text-align: right;
										}',
				),
			),
			'woocommerce/product-details'                 => array(
				array(
					'name'  => 'gadgetry-product-details-style-1',
					'label' => __( 'Vertical Tabs  (Gadgetry)', 'gadgetry' ),
				),
			),
			'woocommerce/add-to-cart-form'                => array(
				array(
					'name'  => 'gadgetry-add-to-cart-form-type-1-style-1',
					'label' => esc_html__( 'Fill/Border', 'gadgetry' ),
				),
			),
			'woocommerce/product-collection'              => array(
				array(
					'name'  => 'gadgetry-product-collection-type-1-style-1',
					'label' => esc_html__( 'Button to Link', 'gadgetry' ),
				),
			),
			'woocommerce/product-button'                  => array(
				array(
					'name'  => 'gadgetry-related-product-button-type-1-style-1',
					'label' => esc_html__( 'Button to Link', 'gadgetry' ),
				),
			),
			// Assigning the same styles to multiple wc product blocks.
			'woocommerce/all-products'                    => $wc_product_styles,
			'woocommerce/product-on-sale'                 => $wc_product_styles,
			'woocommerce/product-best-sellers'            => $wc_product_styles,
			'woocommerce/product-new'                     => $wc_product_styles,
			'woocommerce/product-top-rated'               => $wc_product_styles,
			'woocommerce/products-by-attribute'           => $wc_product_styles,
			'woocommerce/cart-cross-sells-products-block' => $wc_product_styles,
		);

		foreach ( $block_styles as $block => $styles ) {
			foreach ( $styles as $style ) {
				$style_args = array(
					'name'  => $style['name'],
					'label' => $style['label'],
				);

				// Add 'inline_style' if it exists.
				if ( isset( $style['inline_style'] ) ) {
					$style_args['inline_style'] = $style['inline_style'];
				}

				register_block_style( $block, $style_args );
			}
		}
	}

endif;

add_action( 'init', GADGETRY_NS . 'wc_block_styles' );
