<?php

class CbbCardsModule extends FLBuilderModule {

	public function __construct() {
		parent::__construct([
			'name'        => __( 'Cards', 'cbb' ),
			'description' => __( 'TBD...', 'cbb' ),
			'icon'        => 'banner.svg',
			'category'    => __( 'Layout', 'cbb' ),
			'dir'         => CBB_MODULES_DIR . 'modules/cbb-cards/',
			'url'         => CBB_MODULES_URL . 'modules/cbb-cards/'
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
FLBuilder::register_module('CbbCardsModule', [
	'items' => [
		'title'    => __( 'Cards', 'cbb' ),
		'sections' => [
			'general' => [
				'title'  => '',
				'fields' => [
					'cards' => [
						'type'         => 'form',
						'label'        => __( 'Cards', 'cbb' ),
						'form'         => 'cards_form',
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
FLBuilder::register_settings_form('cards_form', [
	'title' => __( 'Add Card', 'cbb' ),
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
							'type'  => 'textarea',
							'label' => __( 'Description', 'cbb' ),
							'rows'  => 6,
						],
						'cta_text' => [
							'type'  => 'text',
							'label' => __( 'CTA Text', 'cbb' ),
						],
						'cta_subtext' => [
							'type'  => 'text',
							'label' => __( 'CTA Subtext', 'cbb' ),
						],
						'cta_link' => [
							'type'  => 'link',
							'label' => __( 'CTA Link', 'cbb' ),
						]
					],
				],
			],
		],
	],
]);
