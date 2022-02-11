<?php
defined( 'ABSPATH' ) || exit();

// Load all required files
$includes = [
	'inc/cpt/post-types.php',
];

// Load the templates
foreach ( $includes as $f ) {
	if ( file_exists( get_template_directory() . '/' . $f ) ) {
		locate_template( $f, true, true );
	}
}
unset( $f );