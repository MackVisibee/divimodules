<?php

class Member_Card_Child extends ET_Builder_Module {

	public $slug                     = 'member_card_child';
	public $vb_support               = 'on';
	public $type                     = 'child';
	public $child_title_var          = 'title';


	public function init() {
		$this->name                        = esc_html__( 'Card Item', 'member-card' );

		$this->settings_modal_toggles = array(
			'general'    => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Content', 'member-card' ),
					'image'        => esc_html__( 'Member Image', 'member-card' ),
				),
			)
		);
		$this->main_css_element            = '%%order_class%%.card-item';
	}

	public function get_fields() {
	


		return array(
			'card'                 => array(
				'label'              => esc_html__( 'Image', 'member-card' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'member-card' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'member-card' ),
				'update_text'        => esc_attr__( 'Set As Image', 'member-card' ),
				'description'        => esc_html__( 'Upload an image to display at the top of your card.', 'member-card' ),
				'toggle_slug'        => 'image',
			),
			'title'                 => array(
				'label'           => esc_html__( 'Title', 'member-card' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as title.', 'member-card' ),
				'toggle_slug'     => 'main_content',
			),
			'position'            => array(
				'label'           => esc_html__( 'Position', 'member-card' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as Position.', 'member-card' ),
				'toggle_slug'     => 'main_content',
			),		
			'linked_in'                 => array(
				'label'              => esc_html__( 'Follow Icon', 'member-card' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an Icon', 'member-card' ),
				'choose_text'        => esc_attr__( 'Choose an Icon', 'member-card' ),
				'update_text'        => esc_attr__( 'Set As Icon', 'member-card' ),
				'description'        => esc_html__( 'Upload an Icon to display at the bottom of your card.', 'member-card' ),
				'toggle_slug'        => 'main_content',
			),
			'linked_in_url'                 => array(
				'label'              => esc_html__( 'Follow Icon Url', 'member-card' ),
				'type'               => 'text',
				'option_category'    => 'basic_option',
				'description'     => esc_html__( 'Enter Follow Icon Url', 'member-card' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	

	public function render( $attrs, $content = null, $render_slug ) {
		$card                       = $this->props['card'];
		$title                       = $this->props['title'];
		$position                    = $this->props['position'];
		$linked_in                       = $this->props['linked_in'];
		$linked_in_url                       = $this->props['linked_in_url'];
		$output = sprintf(
			'<div class="card-item">
				<div class="card-image">
					<img src="%1$s" alt="%2$s" loading="lazy" />
				</div>
				<div class="card-content">
					<h3 class="card-name">%2$s</h3>
					<h5 class="card-position">%3$s</h5>
					<div class="card-icon">
						<a href="%5$s">
							<img src="%4$s" alt="Follow Icon" loading="lazy" />
						</a>
					</div>
				</div>
			</div>
			',
			$card,
			$title,
			$position,
			$linked_in,
			$linked_in_url
		);

		return $output;
	}
}

new Member_Card_Child;
