<?php

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'goveendsonee_text_about', array(
    'label'=> __('Title','goveendsonee'),
    'section'=> 'goveendsonee_about_me_section',
    'type'=> 'text',
    'settings'=> 'goveendsonee_about_title'

    ))
);

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'goveendsonee_span_text_about', array(
    'label'=> __('Span Title','goveendsonee'),
    'section'=> 'goveendsonee_about_me_section',
    'type'=> 'text',
    'settings'=> 'goveendsonee_about_span_title'

    ))
);

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'basic-author-callout-image-control',
    array(
        'label'    => __( 'Image', 'goveendsonee' ),
        'section' => 'goveendsonee_about_me_section',
        'settings' => 'basic-author-callout-image',
    )
) );


$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'goveendsonee_textarea_about', array(
    'label'=> __('Title','goveendsonee'),
    'section'=> 'goveendsonee_about_me_section',
    'type'=> 'textarea',
    'settings'=> 'goveendsonee_about_textarea_title'

    ))
);

$wp_customize->add_control(
    'goveendsonee_link_about',
    array(
        'label' => esc_html__( 'Your Setting with URL input (https://)', 'theme_slug' ),
        'section' => 'goveendsonee_about_me_section',
        'type' => 'url',
        'settings'=> 'goveendsonee_about_link_title'

    )
);

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'goveendsonee_link_text_about', array(
    'label'=> __('Read More','goveendsonee'),
    'section'=> 'goveendsonee_about_me_section',
    'type'=> 'text',
    'settings'=> 'goveendsonee_about_readmore_title'

    ))
);