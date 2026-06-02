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

if ( ! function_exists( 'block_styles' ) ) :

	/**
	 * Register custom block styles
	 *
	 * @since 1.0
	 * @return void
	 */
	function block_styles() {
		$block_styles = array(
			'core/button'               => array(
				array(
					'name'  => 'gadgetry-button-ghost-type-1-style-1',
					'label' => __( 'Ghost', 'gadgetry' ),
				),
				array(
					'name'  => 'gadgetry-button-linkonly-type-1-style-1',
					'label' => __( 'Link Only 1', 'gadgetry' ),
				),
				array(
					'name'  => 'gadgetry-button-blackwhite-type-1-style-1',
					'label' => __( 'Black/White', 'gadgetry' ),
				),
				array(
					'name'  => 'gadgetry-button-whiteblack-type-1-style-1',
					'label' => __( 'White/Black', 'gadgetry' ),
				),
				array(
					'name'  => 'gadgetry-button-shadow-type-1-style-1',
					'label' => __( 'Shadow 1', 'gadgetry' ),
				),
				array(
					'name'  => 'gadgetry-button-shadow-type-1-style-2',
					'label' => __( 'Shadow 2', 'gadgetry' ),
				),
				array(
					'name'  => 'gadgetry-button-shadow-type-1-style-3',
					'label' => __( 'Shadow 3', 'gadgetry' ),
				),
				array(
					'name'  => 'gadgetry-button-iconleft-type-1-style-1',
					'label' => __( 'Store Icon on Left', 'gadgetry' ),
				),
				array(
					'name'  => 'gadgetry-button-iconleft-type-1-style-2',
					'label' => __( 'Support Icon on Left', 'gadgetry' ),
				),
			),
			'core/latest-posts'         => array(
				array(
					'name'  => 'gadgetry-latest-posts-type-1-style-1',
					'label' => __( 'Highlight First Post', 'gadgetry' ),
				),
			),
			'core/search'               => array(
				array(
					'name'  => 'gadgetry-search-type-1-style-1',
					'label' => __( 'Style 1', 'gadgetry' ),
				),
				array(
					'name'  => 'gadgetry-search-type-1-style-2',
					'label' => __( 'Style 2', 'gadgetry' ),
				),
			),
			'core/query-pagination'     => array(
				array(
					'name'  => 'gadgetry-query-pagination-type-1-style-1',
					'label' => __( 'Button (Active)', 'gadgetry' ),
				),
			),
			'core/post-navigation-link' => array(
				array(
					'name'  => 'gadgetry-post-navigation-link-type-1-style-1',
					'label' => __( 'Style 1', 'gadgetry' ),
				),
			),
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

add_action( 'init', GADGETRY_NS . 'block_styles' );
