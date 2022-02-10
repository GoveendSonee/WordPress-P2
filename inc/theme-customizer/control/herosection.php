<?php

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'goveendsonee_text_herosection', array(
    'label'=> __('Title','goveendsonee'),
    'section'=> 'goveendsonee_homepage_section',
    'type'=> 'text',
    'settings'=> 'goveendsonee_text_title'
    ))
);

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'goveendsonee_span_herosection', array(
    'label'=> __('Span Title','goveendsonee'),
    'section'=> 'goveendsonee_homepage_section',
    'type'=> 'text',
    'settings'=> 'goveendsonee_span_title'
    ))
);

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'goveendsonee_bolddescribe_herosection', array(
    'label'=> __('Bold Description','goveendsonee'),
    'section'=> 'goveendsonee_homepage_section',
    'type'=> 'textarea',
    'settings'=> 'goveendsonee_bolddescribe_title'
    ))
);    

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'goveendsonee_unbolddescribe_herosection', array(
    'label'=> __('Unbold Description','goveendsonee'),
    'section'=> 'goveendsonee_homepage_section',
    'type'=> 'textarea',
    'settings'=> 'goveendsonee_unbolddescribe_title'
    ))
);  