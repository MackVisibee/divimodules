<?php

class M_Custom_video_Child extends ET_Builder_Module {

	public $slug                     = 'custom_video_parent_child';
	public $vb_support               = 'on';
	public $type                     = 'child';
	public $child_title_var          = 'title';


	public function init() {
		$this->name                        = esc_html__( 'Slide Item', 'm-custom-video' );

		$this->settings_modal_toggles = array(
			'general'    => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Text', 'm-custom-video' ),
					'image'        => esc_html__( 'Video', 'm-custom-video' ),
				),
			)
		);
		$this->main_css_element            = '%%order_class%%.slide';
	}

	public function get_fields() {
	


		return array(
			'title'                 => array(
				'label'           => esc_html__( 'Title', 'm-custom-video' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as title.', 'm-custom-video' ),
				'toggle_slug'     => 'main_content',
			),
			'subtitle'            => array(
				'label'           => esc_html__( 'Sub Title', 'm-custom-video' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as subtitle.', 'm-custom-video' ),
				'toggle_slug'     => 'main_content',
			),
			'src'					 => array(
				'label'              => esc_html__( 'Youtube Embed Link', 'm-custom-video' ),
				'type'               => 'text',
				'option_category'    => 'basic_option',
				'description'        => esc_html__( 'Add your youtube link if have', 'm-custom-video' ),
				'toggle_slug'        => 'image',
			),
			/*'image'                 => array(
				'label'              => esc_html__( 'Video', 'm-custom-video' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'data_type'          => 'video',
				'upload_button_text' => esc_attr__( 'Upload Video', 'm-custom-video' ),
				'choose_text'        => esc_attr__( 'Choose  Video', 'm-custom-video' ),
				'update_text'        => esc_attr__( 'Set As Video', 'm-custom-video' ),
				'description'        => esc_html__( 'Upload Video here', 'm-custom-video' ),
				'toggle_slug'        => 'image',
			),*/
			'overlay'                 => array(
				'label'              => esc_html__( 'Overlay', 'm-custom-video' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'm-custom-video' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'm-custom-video' ),
				'update_text'        => esc_attr__( 'Set As Image', 'm-custom-video' ),
				'description'        => esc_html__( 'Upload an image to display at the top of your blurb.', 'm-custom-video' ),
				'toggle_slug'        => 'image',
			),
		);
	}

	

	public function render( $attrs, $content = null, $render_slug ) {
		$title                       = $this->props['title'];
		$subtitle                    = $this->props['subtitle'];
		$overlay                       = $this->props['overlay'];

		$src = $this->props['src'];

		$output = sprintf(
			'<div class="video">
				<img src="%4$s" alt="%1$s" loading="lazy" />

				<a class="play-btn" href="#" data-videourl="%3$s">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 126 126"
						fill="none"
					>
						<path
							d="M47.375 46.2812V79.7188C47.375 82.1146 48.4688 83.9375 50.6562 85.1875C52.8438 86.4375 54.9792 86.3333 57.0625 84.875L83 68.3125C84.9792 67.0625 85.9688 65.2917 85.9688 63C85.9688 60.7083 84.9792 58.9375 83 57.6875L57.0625 41.125C54.9792 39.6667 52.8438 39.5625 50.6562 40.8125C48.4688 42.0625 47.375 43.8854 47.375 46.2812Z"
							fill="#ED6F36"
						/>
					</svg>
				</a>
			</div>
			<div class="content">
			<h3>%1$s</h3>
			<p>%2$s</p>
			</div>
			',
			$title,
			$subtitle,
			$src,
			$overlay
		);

		return $output;
	}
}

new M_Custom_video_Child;
