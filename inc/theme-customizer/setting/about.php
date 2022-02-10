<?php

$wp_customize->add_setting ('goveendsonee_about_title', array(

    'default'=>''

    )
);
 
$wp_customize->add_setting ('goveendsonee_about_span_title', array(

    'default'=>''

    )
);

$wp_customize->add_setting( 'basic-author-callout-image', array(

    'default'           => '',

    )
);


$wp_customize->add_setting ('goveendsonee_about_textarea_title', array(

    'default'=>''

    )
);

$wp_customize->add_setting ('goveendsonee_about_link_title', array(

    'default'=>'',
    'sanitize_callback' => 'esc_url_raw'

    )
);

$wp_customize->add_setting ('goveendsonee_about_readmore_title', array(

    'default'=>''

    )
);