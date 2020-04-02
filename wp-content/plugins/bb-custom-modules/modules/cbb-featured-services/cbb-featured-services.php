<?php

class CbbFeaturedServicesModule extends FLBuilderModule {

	public function __construct() {
		parent::__construct([
			'name'        => __( 'Featured Services', 'cbb' ),
			'description' => __( 'A module with repeatable fields for featured services.', 'cbb' ),
			'icon'        => 'banner.svg',
			'category'    => __( 'Layout', 'cbb' ),
			'dir'         => CBB_MODULES_DIR . 'modules/cbb-featured-services/',
			'url'         => CBB_MODULES_URL . 'modules/cbb-featured-services/'
		]);
	}

	/**
	 * Function to get the icon for the Figure Card module
	 *
	 * @method get_icons
	 * @param string $icon gets the icon for the module.
	 */
	public function get_icon( $icon = '' ) {
		// check if $icon is referencing an included icon.
		if ( '' != $icon && file_exists( CBB_MODULES_DIR . 'assets/icons/' . $icon ) ) {
			$path = CBB_MODULES_DIR . 'assets/icons/' . $icon;
		}

		if ( file_exists( $path ) ) {
			return file_get_contents( $path );
		} else {
			return '';
		}
	}
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('CbbFeaturedServicesModule', [
	'items' => [
		'title'    => __( 'Items', 'cbb' ),
		'sections' => [
			'general' => [
				'title'  => '',
				'fields' => [
					'items' => [
						'type'         => 'form',
						'label'        => __( 'Item', 'cbb' ),
						'form'         => 'featured_services_form',
						'preview_text' => 'title',
						'multiple'     => true,
					],
				],
	    ],
		],
	],
]);

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form('featured_services_form', [
	'title' => __( 'Add Featured Service', 'cbb' ),
	'tabs'  => [
		'general' => [
			'title'    => __( 'General', 'cbb' ),
			'sections' => [
				'content' => [
					'title'  => __( 'Content', 'cbb' ),
					'fields' => [
						'title' => [
							'type'  => 'text',
							'label' => __( 'Title', 'cbb' ),
						],
						'description' => [
							'type'          => 'editor',
							'label'         => __( 'Description', 'cbb' ),
							'media_buttons' => false,
							'wpautop'       => true,
						],
						'icon' => [
							'type'  => 'photo',
							'label' => __( 'Icon', 'cbb' ),
						],
						'icon_alt' => [
							'type'  => 'text',
							'label' => __( 'Icon Alt Text', 'cbb' ),
						],
						'cta_text' => [
							'type'  => 'text',
							'label' => __('CTA Text', 'cbb'),
            ],
						'cta_subtext' => [
							'type'  => 'text',
							'label' => __( 'CTA Subtext', 'cbb' ),
						],
						'cta_link' => [
							'type'  => 'link',
							'label' => __('CTA Link', 'cbb'),
						]
					],
				],
				'style' => [
					'title'  => __( 'Style', 'cbb' ),
					'fields' => [
						'background_image' => [
							'type'  => 'photo',
							'label' => __( 'Background Image', 'cbb' ),
						],
					],
				],
			],
		],
	],
]);
