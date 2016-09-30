<?php
function my_customize_register($wp_customize)
{
    // Showcase section
    $wp_customize->add_section('showcase', array(
            'title' => __('Showcase', 'wpbootstrap'),
            'description' => sprintf(__('Options for showcase', 'wpbootstrap')),
            'priority' => 130
        ));
    $wp_customize->add_setting('showcase_image', array(
            'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
            'type' => 'theme_mod'
        ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
            'label' => __('Showcase Image', 'wpbootstrap'),
            'section' => 'showcase',
            'settings' => 'showcase_image',
            'priority' => 1
        )));
    $wp_customize->add_setting('showcase_heading', array(
            'default' => _x('WP Bootstrap Theme', 'wpbootstrap'),
            'type' => 'theme_mod'
        ));
    $wp_customize->add_control('showcase_heading', array(
            'label' => __('Heading', 'wpbootstrap'),
            'section' => 'showcase',
            'priority' => 1
        ));
    $wp_customize->add_setting('showcase_text', array(
            'default' => _x('This theme is created from scratch and using bootstrap. If you want also want to learn theme development, head over to kaloraat.com', 'wpbootstrap'),
            'type' => 'theme_mod'
        ));
    $wp_customize->add_control('showcase_text', array(
            'label' => __('Text', 'wpbootstrap'),
            'section' => 'showcase',
            'priority' => 2
        ));
    $wp_customize->add_setting('btn_url', array(
            'default' => _x('http://kaloraat.com', 'wpbootstrap'),
            'type' => 'theme_mod'
        ));
    $wp_customize->add_control('btn_url', array(
            'label' => __('Button URL', 'wpbootstrap'),
            'section' => 'showcase',
            'priority' => 3
        ));
    $wp_customize->add_setting('btn_text', array(
            'default' => _x('Learn More', 'wpbootstrap'),
            'type' => 'theme_mod'
        ));
    $wp_customize->add_control('btn_text', array(
            'label' => __('Button Text', 'wpbootstrap'),
            'section' => 'showcase',
            'priority' => 4
        ));
    
}
add_action('customize_register', 'my_customize_register');