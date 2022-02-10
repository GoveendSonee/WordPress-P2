<?php
/**
 * section add for customizer
 */

    /**Hero-Sections*/
    $wp_customize->add_section( 'goveendsonee_homepage_section' , array(
    
        'panel' => 'homepage_panel_theme_options',
        'title'      => __( 'Hero Section', 'goveendsonee' ),
        'priority'   => 1,
    ) );

    /**About Me*/
    $wp_customize->add_section('goveendsonee_about_me_section', array(
        'panel' => 'homepage_panel_theme_options',
        'title' => __('About Me', 'goveendsonee'),
        'priority' => 10,
    ));

?>