<?php
/**
 * Demo Import.
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Demo Import Class
 *
 * @package gadgetry
 * @since 1.0
 */
class Demo_Import {

	/**
	 * Construct method.
	 *
	 * @package gadgetry
	 * @since 1.0
	 */
	public function __construct() {

		add_filter( 'advanced_import_demo_lists', array( $this, 'register_demo' ) );
	}

	/**
	 * Register demos.
	 *
	 * @since 1.0
	 * @return array
	 */
	public function register_demo() {

		$demo_lists = array(

			'demo-1' => array(
				'title'          => esc_html__( 'Main Demo', 'gadgetry' ),
				'is_pro'         => false,
				'type'           => 'e-commerce',
				'author'         => esc_html__( 'ArifyWeb', 'gadgetry' ),
				'keywords'       => array( 'shop', 'multipurpose' ),
				'categories'     => array( 'e-commerce', 'multipurpose' ),
				'template_url'   => array(
					'content' => get_template_directory_uri() . '/inc/admin/demo/demo-files/demo-1/content.json',
					'options' => get_template_directory_uri() . '/inc/admin/demo/demo-files/demo-1/options.json',
					'widgets' => get_template_directory_uri() . '/inc/admin/demo/demo-files/demo-1/widgets.json',
				),
				'screenshot_url' => get_template_directory_uri() . '/inc/admin/demo/demo-files/demo-1/demo-screenshot.webp',
				'demo_url'       => 'https://artifydemos.com/gadgetry/',
				'plugins'        => array(
					array(
						'name' => esc_html__( 'WooCommerce', 'gadgetry' ),
						'slug' => 'woocommerce',
					),
				),
			),
			'demo-2' => array(
				'title'          => esc_html__( 'Techno', 'gadgetry' ),
				'is_pro'         => false,
				'type'           => 'e-commerce',
				'author'         => esc_html__( 'ArifyWeb', 'gadgetry' ),
				'keywords'       => array( 'shop', 'multipurpose' ),
				'categories'     => array( 'e-commerce', 'multipurpose' ),
				'template_url'   => array(
					'content' => get_template_directory_uri() . '/inc/admin/demo/demo-files/demo-2/content.json',
					'options' => get_template_directory_uri() . '/inc/admin/demo/demo-files/demo-2/options.json',
					'widgets' => get_template_directory_uri() . '/inc/admin/demo/demo-files/demo-2/widgets.json',
				),
				'screenshot_url' => get_template_directory_uri() . '/inc/admin/demo/demo-files/demo-2/demo-screenshot.webp',
				'demo_url'       => 'https://artifydemos.com/gadgetry-techno/',
				'plugins'        => array(
					array(
						'name' => esc_html__( 'WooCommerce', 'gadgetry' ),
						'slug' => 'woocommerce',
					),
				),
			),
		);

		return $demo_lists;
	}
}
