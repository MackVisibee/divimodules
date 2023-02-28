<?php

class Scroll_Sections_Custom extends ET_Builder_Module {

	public $slug       = 'scroll_sections_custom';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://gitlab.visibleone.io/mack/divi-module',
		'author'     => 'Mack',
		'author_uri' => 'https://gitlab.visibleone.io/mack',
	);

	public function init() {
		$this->name = esc_html__( 'Scroll Sections', 'scroll-sections-custom' );
	}

	public function get_fields() {
		return array(
			'story_bg' => array(
				'label' => esc_html__( 'Story Background Image', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your background image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'story_title' => array(
				'label' => esc_html__( 'Story Tiltle', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired title here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'story_text1' => array(
				'label' => esc_html__( 'Story Text1', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired title here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'story_text2' => array(
				'label' => esc_html__( 'Story Text2', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired title here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'story_desktop' => array(
				'label' => esc_html__( 'Story Desktop Image', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your background image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'story_tablet' => array(
				'label' => esc_html__( 'Story Tablet Image', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your background image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'story_mobile' => array(
				'label' => esc_html__( 'Story Mobile Image', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your background image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'neo_bg' => array(
				'label' => esc_html__( 'Neo Background Image', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload  background image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'neo_title' => array(
				'label' => esc_html__( 'Neo Tiltle', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired title here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'neo_des' => array(
				'label' => esc_html__( 'Neo Description', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired content here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'neo_home' => array(
				'label' => esc_html__( 'Neo Home Image', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'neo_image' => array(
				'label' => esc_html__( 'Neo Gif One', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'neo_image_2' => array(
				'label' => esc_html__( 'Neo Gif Two', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'battle_video' => array(
				'label' => esc_html__( 'Battle Dome Background Video Url(Local Video)', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired video url here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'battle_title' => array(
				'label' => esc_html__( 'Battle Dome Tiltle', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired title here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			
			'battle_des' => array(
				'label' => esc_html__( 'Battle Dome Description', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired content here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'battle_image' => array(
				'label' => esc_html__( 'Battle Dome Gif One', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'battle_image_tablet' => array(
				'label' => esc_html__( 'Battle Dome Gif One Tablet', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'battle_image_mobile' => array(
				'label' => esc_html__( 'Battle Dome Gif One Mobile', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'battle_gif_2' => array(
				'label' => esc_html__( 'Battle Dome Gif Two', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'mini_bg' => array(
				'label' => esc_html__( 'Mini-Games Background Image', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your background image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'mini_title' => array(
				'label' => esc_html__( 'Mini-Games Tiltle', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired title here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'mini_des' => array(
				'label' => esc_html__( 'Mini-Games Description', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired content here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'mini_image' => array(
				'label' => esc_html__( 'Mini-Games Image', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'mini_gif_1' => array(
				'label' => esc_html__( 'Mini-Games mp4;codecs=hvc1 One', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your video url here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'mini_gif_1_webm' => array(
				'label' => esc_html__( 'Mini-Games WEBM One', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your video url here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'mini_gif_2' => array(
				'label' => esc_html__( 'Mini-Games mp4;codecs=hvc1 Two', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your video url here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'mini_gif_2_webm' => array(
				'label' => esc_html__( 'Mini-Games WEBM Two', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your video url here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'caring_bg' => array(
				'label' => esc_html__( 'Caring Background Image', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your background image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'caring_title' => array(
				'label' => esc_html__( 'Caring Tiltle', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired title here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'caring_des' => array(
				'label' => esc_html__( 'Caring Description', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired content here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'caring_image' => array(
				'label' => esc_html__( 'Caring Image', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'caring_gif_1' => array(
				'label' => esc_html__( 'Caring mp4;codecs=hvc1 One', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'caring_gif_1_webm' => array(
				'label' => esc_html__( 'Caring WEBM One', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'caring_gif_2' => array(
				'label' => esc_html__( 'Caring mp4;codecs=hvc1 Two', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'caring_gif_2_webm' => array(
				'label' => esc_html__( 'Caring WEBM Two', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'bank_bg' => array(
				'label' => esc_html__( 'Bank Background Image', 'scroll-sections-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your background image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'bank_title' => array(
				'label' => esc_html__( 'Bank Tiltle', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired title here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'bank_des' => array(
				'label' => esc_html__( 'Bank Description', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired content here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'bank_gif_1' => array(
				'label' => esc_html__( 'Bank mp4;codecs=hvc1 One', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'bank_gif_1_webm' => array(
				'label' => esc_html__( 'Bank WEBM One', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'bank_gif_2' => array(
				'label' => esc_html__( 'Bank mp4;codecs=hvc1 Two', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			'bank_gif_2_webm' => array(
				'label' => esc_html__( 'Bank WEBM One', 'scroll-sections-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your image here', 'scroll-sections-custom' ),
				'toggle_slug' => 'main_content'
			),
			
            
		);
	}

	public function render( $unprocessed_props, $content, $render_slug ) {
		return sprintf( 
			'<section id="gameFeatures">
					<div id="story" class="et_pb_section  story-section et_pb_with_background et_section_regular" style="background-image: url(%31$s)">			
						<div class="et_pb_row et_pb_row_2">
							<div class="et_pb_column et_pb_column_1_3 et_pb_css_mix_blend_mode_passthrough">
								
								<div class="et_pb_module et_pb_text story-text f-80  et_pb_text_align_left et_pb_bg_layout_light">
									<div class="et_pb_text_inner">
										<h1>%32$s</h1>
									</div>
								</div>
								<div class="et_pb_module et_pb_text  story-text scroll-text-h  et_pb_text_align_left et_pb_bg_layout_light">  
									<div class="et_pb_text_inner">
										<p>%33$s</p>
										<p>%34$s</p>
									</div>
								</div>
							</div>
							<div class="et_pb_column et_pb_column_2_3   et_pb_css_mix_blend_mode_passthrough et-last-child">
								<div class="et_pb_module et_pb_image  desktop">
									<span class="et_pb_image_wrap ">
										<img decoding="async" loading="lazy" width="1039" height="920" src="%35$s" alt="" title="story-image" class="wp-image-297">
									</span>
								</div>
								<div class="et_pb_module et_pb_image  tablet"> 
									<span class="et_pb_image_wrap ">
										<img decoding="async" loading="lazy" width="712" height="738" src="%36$s" alt="" title="Sroty Image (Tablet)"  class="wp-image-505">
									</span>
								</div>
								<div class="et_pb_module et_pb_image  mobile">  
									<span class="et_pb_image_wrap ">
										<img decoding="async" loading="lazy" width="329" height="373" src="%37$s" alt="" title="Story Image (mobile)"  class="wp-image-506">
									</span>
								</div>
							</div>  
						</div>  
					</div>
					<div id="neoHome" class="feature-wrapper" style="background-image: url(%1$s)">
						<div class="feature-content">
							<div class="info">
								<div class="title">
									<h5>%2$s</h5>
								</div>
								<div class="description">
									<p>%3$s</p>

									<div class="img-container">
										<img
											src="%4$s"
											alt="Neopets Neo Home, Neopets Game Featuers"
										/>
									</div>
								</div>
							</div>
							<div class="model">
								<img src="%5$s" alt="Neopets Neohome" />
							</div>
						</div>
					</div>

					<div id="battleDome" class="feature-wrapper">
					    <video src="%6$s" autoplay muted loop ></video>
						<div class="feature-content">
							<div class="info">
								<div class="title">
									<h5>%7$s</h5>
								</div>
								<div class="description">
									<p>%8$s</p>
								</div>
							</div>
							<div class="model">
								<img src="%9$s" alt="Neopets Battledome" class="desktop-img"/>
								<img src="%29$s" alt="Neopets Battledome" class="tablet-img"/>
								<img src="%30$s" alt="Neopets Battledome" class="mobile-img"/>
							</div>
						</div>
						
					</div>

					<div id="miniGames" class="feature-wrapper" style="background-image: url(%10$s)">
						<div class="feature-content">
							<div class="info">
								<div class="title">
									<h5>%11$s</h5>
								</div>
								<div class="description">
									<p>%12$s</p>

									<div class="img-container">
										<img
											src="%13$s"
											alt="Neopets Mini Games, Neopets Game Featuers"
										/>
									</div>
								</div>
							</div>
							<div class="model">
								<video autoplay loop muted playsinline class="idle" data-chrom="%38$s" data-safari="%22$s">						
								</video>	
								<video autoplay loop muted playsinline class="click" data-chrom="%39$s" data-safari="%23$s">
								</video>
							</div>
						</div>
					
					</div>

					<div id="petCaring" class="feature-wrapper" style="background-image: url(%14$s)">
						<div class="feature-content">
							<div class="info">
								<div class="title">
									<h5>%15$s</h5>
								</div>
								<div class="description">
									<p>%16$s</p>

									<div class="img-container">
										<img
											src="%17$s"
											alt="Neopets Pet Caring, Neopets Game Features"
										/>
									</div>
								</div>
							</div>
							<div class="model">
								<video autoplay loop muted playsinline class="idle" data-chrom="%40$s" data-safari="%25$s">
								
								</video>	
								<video autoplay loop muted playsinline class="click" data-chrom="%41$s" data-safari="%26$s">
					
								</video>
							</div>
						</div>
						
					</div>

					<div id="nnBank" class="feature-wrapper" style="background-image: url(%18$s)">
						<div class="feature-content">
							<div class="info">
								<div class="title">
									<h5>%19$s</h5>
								</div>
								<div class="description">
									<p>%20$s</p>
								</div>
							</div>
							<div class="model">
								<video autoplay loop muted playsinline class="idle" data-chrom="%42$s" data-safari="%27$s">
							
								</video>	
								<video autoplay loop muted playsinline class="click" data-chrom="%43$s" data-safari="%28$s">

								</video>
							</div>
						</div>
						
					</div>
					<div class="indicator">
						<ul>
							<li><a href="#neoHome" class=""></a></li>
							<li><a href="#battleDome" class=""></a></li>
							<li><a href="#miniGames" class=""></a></li>
							<li><a href="#petCaring" class=""></a></li>
							<li><a href="#nnBank" class=""></a></li>
						</ul>
					</div>
				</section>', 
			$this->props['neo_bg'],  //1
			esc_html( $this->props['neo_title'] ), //2
			esc_html( $this->props['neo_des'] ), //3
			$this->props['neo_home'], //4
			$this->props['neo_image'], //5

			$this->props['battle_video'], //6
			esc_html( $this->props['battle_title'] ), //7
			esc_html( $this->props['battle_des'] ), //8
			$this->props['battle_image'], //9

			$this->props['mini_bg'], //10
			esc_html( $this->props['mini_title'] ), //11
			esc_html( $this->props['mini_des'] ), //12
			$this->props['mini_image'], //13

			$this->props['caring_bg'], //14
			esc_html( $this->props['caring_title'] ), //15
			esc_html( $this->props['caring_des'] ), //16
			$this->props['caring_image'], //17

			$this->props['bank_bg'], //18
			esc_html( $this->props['bank_title'] ), //19
			esc_html( $this->props['bank_des'] ), //20
			 //
			$this->props['neo_image_2'], //21

			$this->props['mini_gif_1'], //22
			$this->props['mini_gif_2'], //23

			$this->props['battle_gif_2'], //24

			$this->props['caring_gif_1'], //25
			$this->props['caring_gif_2'], //26

			$this->props['bank_gif_1'], //27
			$this->props['bank_gif_2'], //28

			$this->props['battle_image_tablet'], //29
			$this->props['battle_image_mobile'],  //30

			$this->props['story_bg'], //31
			esc_html( $this->props['story_title'] ), //32
			esc_html( $this->props['story_text1'] ), //33
			esc_html( $this->props['story_text2'] ), //34

			$this->props['story_desktop'], //35
			$this->props['story_tablet'], //36
			$this->props['story_mobile'], //37

			$this->props['mini_gif_1_webm'], //38
			$this->props['mini_gif_2_webm'], //39

			$this->props['caring_gif_1_webm'], //40
			$this->props['caring_gif_2_webm'], //41

			$this->props['bank_gif_1_webm'], //42
			$this->props['bank_gif_2_webm'] //43
			
		);
	}
}

new Scroll_Sections_Custom;
