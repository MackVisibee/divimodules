<?php

class M_Custom_Flix_Child extends ET_Builder_Module {

	public $slug                     = 'm_custom_flix_child';
	public $vb_support               = 'on';
	public $type                     = 'child';
	public $child_title_var          = 'title';
	public $child_title_fallback_var = 'subtitle';


	public function init() {
		$this->name                        = esc_html__( 'Flipbox Item', 'm-custom-flix' );
		$this->advanced_setting_title_text = esc_html__( 'Flipbox Item', 'm-custom-flix' );
		$this->settings_text               = esc_html__( 'Flipbox Item Settings', 'm-custom-flix' );
		$this->main_css_element            = '%%order_class%%';

		$this->settings_modal_toggles = array(
			'general'    => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Text', 'm-custom-flix' ),
					'link'         => esc_html__( 'Link', 'm-custom-flix' ),
					'image'        => esc_html__( 'Image & Icon', 'm-custom-flix' ),
				),
			)
		);
	}

	public function get_fields() {
		$et_accent_color = et_builder_accent_color();


		return array(
			'title'                 => array(
				'label'           => esc_html__( 'Title', 'm-custom-flix' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as title.', 'm-custom-flix' ),
				'toggle_slug'     => 'main_content',
			),
			'subtitle'              => array(
				'label'           => esc_html__( 'Sub Title', 'm-custom-flix' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as subtitle.', 'm-custom-flix' ),
				'toggle_slug'     => 'main_content',
			),
			'use_icon'              => array(
				'label'            => esc_html__( 'Use Icon', 'm-custom-flix' ),
				'type'             => 'yes_no_button',
				'option_category'  => 'basic_option',
				'options'          => array(
					'off' => esc_html__( 'No', 'm-custom-flix' ),
					'on'  => esc_html__( 'Yes', 'm-custom-flix' ),
				),
				'toggle_slug'      => 'image',
				'affects'          => array(
					'border_radii_image',
					'border_styles_image',
					'box_shadow_style_image',
					'font_icon',
					'image_max_width',
					'use_icon_font_size',
					'use_circle',
					'icon_color',
					'image',
					'alt',
					'child_filter_hue_rotate',
					'child_filter_saturate',
					'child_filter_brightness',
					'child_filter_contrast',
					'child_filter_invert',
					'child_filter_sepia',
					'child_filter_opacity',
					'child_filter_blur',
					'child_mix_blend_mode',
				),
				'description'      => esc_html__( 'Here you can choose whether icon set below should be used.', 'm-custom-flix' ),
				'default_on_front' => 'off',
			),
			
			'image'                 => array(
				'label'              => esc_html__( 'Image', 'm-custom-flix' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'm-custom-flix' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'm-custom-flix' ),
				'update_text'        => esc_attr__( 'Set As Image', 'm-custom-flix' ),
				'description'        => esc_html__( 'Upload an image to display at the top of your blurb.', 'm-custom-flix' ),
				'toggle_slug'        => 'image',
			),
			'content'               => array(
				'label'           => esc_html__( 'Content', 'm-custom-flix' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'm-custom-flix' ),
				'toggle_slug'     => 'main_content',
			),

			'button_text'           => array(
				'label'           => esc_html__( 'Button Text', 'm-custom-flix' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired button text, or leave blank for no button.', 'm-custom-flix' ),
				'toggle_slug'     => 'button',
			),
			'button_url'            => array(
				'label'           => esc_html__( 'Button URL', 'm-custom-flix' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input URL for your button.', 'm-custom-flix' ),
				'toggle_slug'     => 'button',
			),
			'button_url_new_window' => array(
				'default'          => 'off',
				'default_on_front' => true,
				'label'            => esc_html__( 'Url Opens', 'm-custom-flix' ),
				'type'             => 'select',
				'option_category'  => 'configuration',
				'options'          => array(
					'off' => esc_html__( 'In The Same Window', 'm-custom-flix' ),
					'on'  => esc_html__( 'In The New Tab', 'm-custom-flix' ),
				),
				'toggle_slug'      => 'button',
				'description'      => esc_html__( 'Choose whether your link opens in a new window or not', 'm-custom-flix' ),
			),
			
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		$title                       = $this->props['title'];
		$subtitle                    = $this->props['subtitle'];
		$button_text                 = $this->props['button_text'];
		$image                       = $this->props['image'];
		
		$button_url                  = $this->props['button_url'];
		$button_url_new_window       = $this->props['button_url_new_window'];


		if ( '' !== $title ) {
			$title = sprintf( '<h2 class="dsm-title et_pb_module_header">%1$s</h2>', $title );
		}

		if ( '' !== $subtitle ) {
			$subtitle = sprintf( '<span class="dsm-subtitle">%1$s</span>', $subtitle );
		}

		// Render button
		$button = $this->render_button(
			array(
				'button_classname' => array( 'et_pb_more_button' ),
				'button_text'      => $button_text,
				'button_url'       => $button_url,
				'url_new_window'   => $button_url_new_window,
				'display_button'   => '' !== $button_url && '' !== $button_text,
			)
		);


		// Images: Add CSS Filters and Mix Blend Mode rules (if set)
		$generate_css_image_filters = '';
		

		// $image = $image ? sprintf( '<span class="m_custom_flix_child_image_wrap">%1$s</span>', $image ) : '';
		// $image = $image ? sprintf(
		// 	'<div class="m_custom_flix_child_image%2$s"><img src="%1$s" alt="Image" /></div>',
		// 	$image,
		// 	esc_attr( $generate_css_image_filters )
		// ) : '';


		

		$output = sprintf(
			'
            <img src="%3$s">
			<div class="dsm_flipbox_wrapper%6$s">
				%1$s
				%2$s
				%4$s
				%5$s
			</div>',
			$title,
			$subtitle,
			$image,
			'' !== $this->content ? sprintf(
				'<div class="dsm-content">%1$s</div>',
				et_core_sanitized_previously( $this->content )
			) : '',
			$button,
			$this->get_text_orientation_classname()
		);

		return $output;
	}
}

new M_Custom_Flix_Child;
