<?php

// Define PHP file constants.
define( 'TEMPLATEINC', TEMPLATEPATH . '/inc' );
define( 'TEMPLATEURI', get_template_directory_uri() );
define( 'DIRECT', get_template_directory_uri().'/dist/'  );

//define('DISALLOW_FILE_MODS',true); // Disable core and plugin updates
show_admin_bar( false );

function mojFavicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.TEMPLATEURI.'/favicon.ico" />';
}
add_action( 'admin_head', 'mojFavicon' );

//add_filter( 'wpcf7_validate_configuration', '__return_false' );


// Load library files.
require_once( TEMPLATEINC . '/cpt.php' );
require_once( TEMPLATEINC . '/template.php' );
require_once( TEMPLATEINC . '/actions.php' );

