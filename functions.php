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

// BEGIN Add Basic SEO Function
function basic_wp_seo($keywords) {
	global $page, $paged, $post;
//	$keywords = 'sydney, real estate, sales, lease, finance, macland, investment, make wealth grow, rhodes, australia'; // customize
	$output = '';

	// description
	$seo_desc = get_post_meta($post->ID, 'mm_seo_desc', true);
	$description = get_bloginfo('description', 'display');
	$pagedata = get_post($post->ID);
	if (is_singular()) {
		if (!empty($seo_desc)) {
			$content = $seo_desc;
		} else if (!empty($pagedata)) {
			$content = apply_filters('the_excerpt_rss', $pagedata->post_content);
			$content = substr(trim(strip_tags($content)), 0, 155);
			$content = preg_replace('#\n#', ' ', $content);
			$content = preg_replace('#\s{2,}#', ' ', $content);
			$content = trim($content);
		}
	} else {
		$content = $description;
	}
	$output .= '<meta name="description" content="' . esc_attr($content) . '">' . "\n";

	// keywords
	$keys = get_post_meta($post->ID, 'mm_seo_keywords', true);
	$cats = get_the_category();
	$tags = get_the_tags();
	if (empty($keys)) {
		if (!empty($cats)) foreach($cats as $cat) $keys .= $cat->name . ', ';
		if (!empty($tags)) foreach($tags as $tag) $keys .= $tag->name . ', ';
		$keys .= $keywords;
	}
	$output .= "\t\t" . '<meta name="keywords" content="' . esc_attr($keys) . '">' . "\n";

	// robots
	if (is_category() || is_tag()) {
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		if ($paged > 1) {
			$output .=  "\t\t" . '<meta name="robots" content="noindex,follow">' . "\n";
		} else {
			$output .=  "\t\t" . '<meta name="robots" content="index,follow">' . "\n";
		}
	} else if (is_home() || is_singular()) {
		$output .=  "\t\t" . '<meta name="robots" content="index,follow">' . "\n";
	} else {
		$output .= "\t\t" . '<meta name="robots" content="noindex,follow">' . "\n";
	}

	// title
	$title_custom = get_post_meta($post->ID, 'mm_seo_title', true);
	$url = ltrim(esc_url($_SERVER['REQUEST_URI']), '/');
	$name = get_bloginfo('name', 'display');
	$title = trim(wp_title('', false));
	$cat = single_cat_title('', false);
	$tag = single_tag_title('', false);
	$search = get_search_query();

	if (!empty($title_custom)) $title = $title_custom;
	if ($paged >= 2 || $page >= 2) $page_number = ' | ' . sprintf('Page %s', max($paged, $page));
	else $page_number = '';

	if (is_home() || is_front_page()) $seo_title = $name . ' | ' . $description;
	elseif (is_singular())            $seo_title = $title . ' | ' . $name;
	elseif (is_tag())                 $seo_title = 'Tag Archive: ' . $tag . ' | ' . $name;
	elseif (is_category())            $seo_title = 'Category Archive: ' . $cat . ' | ' . $name;
	elseif (is_archive())             $seo_title = 'Archive: ' . $title . ' | ' . $name;
	elseif (is_search())              $seo_title = 'Search: ' . $search . ' | ' . $name;
	elseif (is_404())                 $seo_title = '404 - Not Found: ' . $url . ' | ' . $name;
	else                              $seo_title = $name . ' | ' . $description;

	$output .= "\t\t" . '<title>' . esc_attr($seo_title . $page_number) . '</title>' . "\n";

	return $output;
}
// END Add Basic SEO Function
