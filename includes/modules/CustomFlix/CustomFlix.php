<?php

class M_Custom_Flix extends ET_Builder_Module {
    public $slug = 'm_custom_flix';
    public $vp_support = 'on';
    public $child_slug = 'm_custom_flix_child';

    public function init() {
        $this->name = esc_html__( 'Flix Content', 'm-custom-flix' );
        $this->settings_modal_toggles = array(
            'general' => array(
                'toggles' => array(
                    'main_content' => esc_html__( 'Text', 'm-custom-flix' ),
                ),
            )
            );
    }

    public function render($attr, $content = null, $render_slug) {
        return sprintf(
            '<div class="m-flix-box">%1$s</div>',
            $this->content,
        );
    }
}
 new M_Custom_Flix;