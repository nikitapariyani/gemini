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

    $wp_customize->add_setting('featured_background_image_1',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'featured_background_image_1', array(
        'label' => 'Featured Background',
        'section' => 'gemini_slider_section',
        'settings' => 'featured_background_image_1',
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

    
    
    $wp_customize->add_setting('featured_background_image_2',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'featured_background_image_2', array(
        'label' => 'Featured Background',
        'section' => 'gemini_slider_section',
        'settings' => 'featured_background_image_2',
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
    
    $wp_customize->add_setting('featured_background_image_3',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'featured_background_image_3', array(
        'label' => 'Featured Background',
        'section' => 'gemini_slider_section',
        'settings' => 'featured_background_image_3',
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
    $wp_customize->add_section('home_page_widgets', array(
        'title' => __('Home-Content', 'gemini'),
        'priority' => 36,
    ));
     $wp_customize->add_setting('home_widget_header',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('home_widget_header', array(
        'label' => __('Title', 'gemini'),
        'section' => 'home_page_widgets',
        'settings' => 'home_widget_header',
        'priority' => 1,
    ));
    $wp_customize->add_setting('home_widget_content',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('home_widget_content', array(
        'label' => __('Description', 'gemini'),
        'section' => 'home_page_widgets',
        'settings' => 'home_widget_content',
        'priority' => 2,
    ));
    /*4column text widget*/
    $wp_customize->add_section('home_featured_area_1', array(
        'title' => __('Home Featured Area1', 'gemini'),
        'priority' => 37,
    ));
    
    $wp_customize->add_setting('text_header_1',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_header_1', array(
        'label' => __('Featured Title 1', 'gemini'),
        'section' => 'home_featured_area_1',
        'settings' => 'text_header_1',
        'priority' => 1,
    ));
    
    $wp_customize->add_setting('text_content_1',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_content_1', array(
        'label' => __('Description', 'gemini'),
        'section' => 'home_featured_area_1',
        'settings' => 'text_content_1',
        'priority' => 2,
    ));
    $wp_customize->add_section('home_featured_area_2', array(
        'title' => __('Home Featured Area2', 'gemini'),
        'priority' => 38,
    ));
    $wp_customize->add_setting('text_header_2',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_header_2', array(
        'label' => __('Featured Title 2', 'gemini'),
        'section' => 'home_featured_area_2',
        'settings' => 'text_header_2',
        'priority' => 1,
    ));
    
    $wp_customize->add_setting('text_content_2',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_content_2', array(
        'label' => __('Description', 'gemini'),
        'section' => 'home_featured_area_2',
        'settings' => 'text_content_2',
        'priority' => 2,
    ));
    $wp_customize->add_section('home_featured_area_3', array(
        'title' => __('Home Featured Area3', 'gemini'),
        'priority' => 39,
    ));
    $wp_customize->add_setting('text_header_3',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_header_3', array(
        'label' => __('Featured Title 3', 'gemini'),
        'section' => 'home_featured_area_3',
        'settings' => 'text_header_3',
        'priority' => 1,
    ));
    
    $wp_customize->add_setting('text_content_3',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_content_3', array(
        'label' => __('Description', 'gemini'),
        'section' => 'home_featured_area_3',
        'settings' => 'text_content_3',
        'priority' => 2,
    ));
    $wp_customize->add_section('home_featured_area_4', array(
        'title' => __('Home Featured Area4', 'gemini'),
        'priority' => 40,
    ));
    $wp_customize->add_setting('text_header_4',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_header_4', array(
        'label' => __('Featured Title 4', 'gemini'),
        'section' => 'home_featured_area_4',
        'settings' => 'text_header_4',
        'priority' => 1,
    ));
    
    $wp_customize->add_setting('text_content_4',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('text_content_4', array(
        'label' => __('Description', 'gemini'),
        'section' => 'home_featured_area_4',
        'settings' => 'text_content_4',
        'priority' => 2,
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
