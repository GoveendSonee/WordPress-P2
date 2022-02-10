<?php

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'goveendsonee_text_about', array(
    'label'=> __('Title','goveendsonee'),
    'section'=> 'goveendsonee_about_me_section',
    'type'=> 'text',
    'settings'=> 'goveendsonee_about_title'

    ))
);