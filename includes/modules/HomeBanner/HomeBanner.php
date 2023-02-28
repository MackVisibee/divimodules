<?php


class Home_Banner_Custom extends ET_Builder_Module {

	public $slug       = 'home_banner_custom';
	public $vb_support = 'on';

	public function init() {
		$this->name = esc_html__( 'Home Banner', 'home-banner-custom' );
	}

	public function get_fields() {
		return array(
			'neopets_logo' => array(
				'label' => esc_html__( 'Neopets Logo', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload Neopets Logo here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
			'charactors_group' => array(
				'label' => esc_html__( 'Charactors Group Image', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your charactors group image here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'intro_text' => array(
				'label' => esc_html__( 'Introduction Text', 'home-banner-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired content here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'scroll_text' => array(
				'label' => esc_html__( 'Scroll Text', 'home-banner-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Input you desired scroll text here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
		);
	}

	public function render( $unprocessed_props, $content, $render_slug ) {
		return sprintf( 
'
<div class="intro-group">
    <div class="logo-wrapper-container">
	<div class="logo-wrapper">
		<img
			src="%1$s"
			alt="Neopets Logo"
			loading="eager"
		/>
	</div>
	<div class="charactors-group">
		<img
			src="%2$s"
			alt="Neopets charactors"
			loading="eager"
		/>
	</div>
	<p class="intro-text hide">%3$s</p>
	</div>
</div>

<div class="scroll-down hide">
	<p>%4$s</p>
	<img src="%5$s/wp-content/uploads/2022/12/star.svg" alt="Star" />
</div>

<div class="clouds">
	<img
		src="%5$s/wp-content/uploads/2022/12/cloud.png"
		alt="Neopets Cloud"
		class="cloud-1"
		loading="eager"
	/>
	<img
		src="%5$s/wp-content/uploads/2022/12/cloud.png"
		alt="Neopets Cloud"
		class="cloud-2"
		loading="eager"
	/>
	<img
		src="%5$s/wp-content/uploads/2022/12/cloud.png"
		alt="Neopets Cloud"
		class="cloud-3"
		loading="eager"
	/>
</div>
<div class="custom-modal">
<div class="modal-content">
<div class="close-modal">
<img
src="%5$s/wp-content/uploads/2022/12/close-icon.svg"
alt="Close Icon"
/>
</div>
<iframe frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>', 
			$this->props['neopets_logo'],
			$this->props['charactors_group'],
			esc_html( $this->props['intro_text'] ),
			esc_html( $this->props['scroll_text'] ),
			site_url(),
		);
	}
}

new Home_Banner_Custom;
