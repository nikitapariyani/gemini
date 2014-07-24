<?php
/**
 * Gemini Theme Customizer
 *
 * @package Gemini
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gemini_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
        
        class gemini_customize_textarea_control extends WP_Customize_Control {

        public $type = 'textarea';

        public function render_content() {
            ?>

            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <textarea rows="5" style="width:98%;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
            </label>

            <?php
        }

    }
$wp_customize->add_section('gemini_slider_section', array(
        'title' => __('Home Slider', 'gemini'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('slide_1',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'slide_1', array(
        'label' => 'Slide 1',
        'section' => 'gemini_slider_section',
        'settings' => 'slide_1',
        'priority' => 1,
            )
            )
    );
    
     $wp_customize->add_setting('slider_caption_1',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('slider_caption_1', array(
        'label' => __('Caption 1', 'gemini'),
        'section' => 'gemini_slider_section',
        'settings' => 'slider_caption_1',
        'priority' => 2,
    ));

    
    
    $wp_customize->add_setting('slide_2',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'slide_2', array(
        'label' => 'Slide 2',
        'section' => 'gemini_slider_section',
        'settings' => 'slide_2',
        'priority' => 3,
            )
            )
    );
    
     $wp_customize->add_setting('slider_caption_2',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('slider_caption_2', array(
        'label' => __('Caption 2', 'gemini'),
        'section' => 'gemini_slider_section',
        'settings' => 'slider_caption_2',
        'priority' => 4,
    ));
    
    $wp_customize->add_setting('slide_3',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'slide_3', array(
        'label' => 'Slide 3',
        'section' => 'gemini_slider_section',
        'settings' => 'slide_3',
        'priority' => 5,
            )
            )
    );
    
     $wp_customize->add_setting('slider_caption_3',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('slider_caption_3', array(
        'label' => __('Caption 3', 'gemini'),
        'section' => 'gemini_slider_section',
        'settings' => 'slider_caption_3',
        'priority' => 6,
    ));
    /*home widgets*/
    $wp_customize->add_section('home_tagline', array(
        'title' => __('Home-Featured', 'gemini'),
        'priority' => 36,
    ));
     $wp_customize->add_setting('home_title',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('home_title', array(
        'label' => __('Title', 'gemini'),
        'section' => 'home_tagline',
        'settings' => 'home_title',
        'priority' => 1,
    ));
    $wp_customize->add_setting('home_content',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('home_content', array(
        'label' => __('Text Area', 'gemini'),
        'section' => 'home_tagline',
        'settings' => 'home_content',
        'priority' => 2,
    ));
    /*4column text widget*/
    $wp_customize->add_section('home_featured_1', array(
        'title' => __('Featured 1', 'gemini'),
        'priority' => 37,
    ));
    $wp_customize->add_setting('icon_1',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('icon_1', array(
        'label' => __('Icon', 'gemini'),
        'section' => 'home_featured_1',
        'settings' => 'icon_1',
        'priority' => 1,
    ));
    
    $wp_customize->add_setting('text_header_1',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_header_1', array(
        'label' => __('Title', 'gemini'),
        'section' => 'home_featured_1',
        'settings' => 'text_header_1',
        'priority' => 2,
    ));
    
    $wp_customize->add_setting('text_content_1',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_content_1', array(
        'label' => __('Text Area', 'gemini'),
        'section' => 'home_featured_1',
        'settings' => 'text_content_1',
        'priority' => 3,
    ));
    
    $wp_customize->add_section('home_featured_2', array(
        'title' => __('Featured 2', 'gemini'),
        'priority' => 38,
    ));
    $wp_customize->add_setting('icon_2',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('icon_2', array(
        'label' => __('Icon', 'gemini'),
        'section' => 'home_featured_2',
        'settings' => 'icon_2',
        'priority' => 1,
    ));
    $wp_customize->add_setting('text_header_2',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_header_2', array(
        'label' => __('Title', 'gemini'),
        'section' => 'home_featured_2',
        'settings' => 'text_header_2',
        'priority' => 2,
    ));
    
    $wp_customize->add_setting('text_content_2',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_content_2', array(
        'label' => __('Text Area', 'gemini'),
        'section' => 'home_featured_2',
        'settings' => 'text_content_2',
        'priority' => 3,
    ));
    $wp_customize->add_section('home_featured_3', array(
        'title' => __('Featured 3', 'gemini'),
        'priority' => 39,
    ));
    $wp_customize->add_setting('icon_3',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('icon_3', array(
        'label' => __('Icon', 'gemini'),
        'section' => 'home_featured_3',
        'settings' => 'icon_3',
        'priority' => 1,
    ));
    $wp_customize->add_setting('text_header_3',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_header_3', array(
        'label' => __('Title', 'gemini'),
        'section' => 'home_featured_3',
        'settings' => 'text_header_3',
        'priority' => 2,
    ));
    
    $wp_customize->add_setting('text_content_3',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_content_3', array(
        'label' => __('Text Area', 'gemini'),
        'section' => 'home_featured_3',
        'settings' => 'text_content_3',
        'priority' => 3,
    ));
    $wp_customize->add_section('home_featured_4', array(
        'title' => __('Featured 4', 'gemini'),
        'priority' => 40,
    ));
    $wp_customize->add_setting('icon_4',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('icon_4', array(
        'label' => __('Icon', 'gemini'),
        'section' => 'home_featured_4',
        'settings' => 'icon_4',
        'priority' => 1,
    ));
    $wp_customize->add_setting('text_header_4',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_header_4', array(
        'label' => __('Title', 'gemini'),
        'section' => 'home_featured_4',
        'settings' => 'text_header_4',
        'priority' => 2,
    ));
    
    $wp_customize->add_setting('text_content_4',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_content_4', array(
        'label' => __('Text Area', 'gemini'),
        'section' => 'home_featured_4',
        'settings' => 'text_content_4',
        'priority' => 3,
    ));
    
    
}
add_action( 'customize_register', 'gemini_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gemini_customize_preview_js() {
	wp_enqueue_script( 'gemini_customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), rand(), true );
}
add_action( 'customize_preview_init', 'gemini_customize_preview_js' );
