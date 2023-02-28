<?php

class Accordion_Toggle_Child extends ET_Builder_Module {

	public $slug                     = 'accordion_toggle_child';
	public $vb_support               = 'on';
	public $type                     = 'child';
	public $child_title_var          = 'title';


	public function init() {
		$this->name                        = esc_html__( 'Toggle Item', 'accordion-toggle' );

		$this->settings_modal_toggles = array(
			'general'    => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Content', 'accordion-toggle' ),
				),
			)
		);
		$this->main_css_element            = '%%order_class%%.Toggle-item';
	}

	public function get_fields() {
	


		return array(
			
			'title'                 => array(
				'label'           => esc_html__( 'Title', 'accordion-toggle' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as title.', 'accordion-toggle' ),
				'toggle_slug'     => 'main_content',
			),
			'description'                 => array(
				'label'           => esc_html__( 'Description', 'accordion-toggle' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as content.', 'accordion-toggle' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	

	public function render( $attrs, $content = null, $render_slug ) {
		$title                       = $this->props['title'];
		$des                       = $this->props['description'];
		$output = sprintf(
			'<div class="toggle-item">
				<h4 class="toggle-title">%1$s</h4>
				<div class="toggle-content">
					%2$s
				</div>
			</div>
			',
			$title,
			$des
		);

		return $output;
	}
}

new Accordion_Toggle_Child;
