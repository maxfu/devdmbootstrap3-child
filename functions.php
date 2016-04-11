<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap.css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

// BEGIN Loads the child theme textdomain.
function maxwell_after_setup_theme() {
    load_child_theme_textdomain( 'devdmbootstrap3', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'maxwell_after_setup_theme' );

// END Loads the child theme textdomain.

// BEGIN Admin Menu Pages Support
include_once('includes/RationalOptionPages.php');
include_once('includes/maxwell_admin_menu.php');
$maxwell_options = get_option( 'maxwell_options', array() );

// END Admin Menu Pages Support
