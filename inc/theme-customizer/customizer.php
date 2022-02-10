<?php

    function goveendsonee_theme_customize_register( $wp_customize ) {
        explore_goveendsonee_customizer_section( $wp_customize );
    
    }
    add_action( 'customize_register', 'goveendsonee_theme_customize_register' ); 
     
?>