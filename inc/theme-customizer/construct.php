<?php

function explore_goveendsonee_customizer_section( $wp_customize ) {
   
    //Panel add for customizer
    require get_template_directory() . '/inc/theme-customizer/panel.php';

    //section add for customizer
    require get_template_directory() . '/inc/theme-customizer/section.php';
 
    //setting add for customizer
    require get_template_directory() . '/inc/theme-customizer/setting.php';

    //control add for customizer
    require get_template_directory() . '/inc/theme-customizer/control.php'; 

}


?>