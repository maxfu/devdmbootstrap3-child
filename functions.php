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

// BEGIN ENQUEUE CUSTOM SCRIPTS
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'maxfu_custom_enqueue_scripts' ) ):
    function maxfu_custom_enqueue_scripts() {
      // Add Font Awesome stylesheet
      wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'maxfu_custom_enqueue_scripts', 10 );

// END ENQUEUE CUSTOM SCRIPTS

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

// BEGIN Add Search Form to Menu
if( $maxwell_options['menu_search'] == 'on' ) :
function add_search_box($items, $args) {
  ob_start();
  get_search_form();
  $searchform = ob_get_contents();
  ob_end_clean();
  $items .= '<li id="menu-item-search" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-search"><a title="Search" href="#" data-toggle="modal" data-target="#SearchWindow"><i class="fa fa-search" aria-hidden="true"></i></a></li>
  <div id="SearchWindow" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">' . $searchform . '</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>';
  return $items;
}
add_filter('wp_nav_menu_items','add_search_box', 10, 2);
endif;
// END Add Search Form to Menu
