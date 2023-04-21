<?php

add_theme_support('align-wide');
function load_custom_wp_admin_style() {
    wp_enqueue_style('admin-style', get_template_directory_uri() . '/admin-style.css', array(), _S_VERSION);
}
add_action('acf/input/admin_enqueue_scripts', 'load_custom_wp_admin_style');

function custom_block_categories($categories, $post) {
    return array_merge(
        $categories,
        array(
            array(
                'slug'  => 'acf-custom-blocks',
                'title' => __('BMM Blocks', 'acf'),
            ),
        )
    );
}
add_filter('block_categories', 'custom_block_categories', 10, 2);

function register_blocks() {

    // check function exists
    if (function_exists('acf_register_block')) {

        //Hero slider
        acf_register_block_type(array(
            'name'              => 'hero-slider',
            'title'             => __('Hero Slider'),
            'description'       => __('hero slider with overlaying content.'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/hero-slider.php',
            'category'          => 'acf-custom-blocks',
            'icon'              => 'layout',
            'mode'              => 'auto',
            'keywords'          => array('hero, carousel, slider')
        ));

        //Intro
        acf_register_block_type(array(
            'name'              => 'intro',
            'title'             => __('Intro'),
            'description'       => __('Intro content section with 2 images'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/intro.php',
            'category'          => 'acf-custom-blocks',
            'icon'              => 'layout',
            'mode'              => 'auto',
            'keywords'          => array('intro', 'content')
        ));

        //Properties
        acf_register_block_type(array(
            'name'              => 'properties',
            'title'             => __('Properties'),
            'description'       => __('Properties alternating image and content block'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/properties.php',
            'category'          => 'acf-custom-blocks',
            'icon'              => 'layout',
            'mode'              => 'auto',
            'keywords'          => array('properties', 'image', 'content', 'alternating')
        ));

        //Image Overlay
        acf_register_block_type(array(
            'name'              => 'image-overlay',
            'title'             => __('Image Overlay'),
            'description'       => __('Image overlay section where a content overlaying a background image in full width'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/image-overlay.php',
            'category'          => 'acf-custom-blocks',
            'icon'              => 'layout',
            'mode'              => 'auto',
            'keywords'          => array('image', 'overlay', 'contact', 'contact us')
        ));
    }    
}
add_action('acf/init',  __NAMESPACE__ . '\\register_blocks');