<?php

namespace Spring\Config;

use Spring\SpringSidebar;

/**
 * Enable theme features
 */
add_theme_support('soil-clean-up');         // Enable clean up from Soil
add_theme_support('soil-relative-urls');    // Enable relative URLs from Soil
add_theme_support('soil-nice-search');      // Enable nice search from Soil
add_theme_support('soil-jquery-cdn');       // Enable to load jQuery from the Google CDN
add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');
//add_theme_support('bootstrap-gallery');     // Enable Bootstrap's thumbnails component on [gallery]


if (!defined('WP_ENV')) {
  // Fallback if WP_ENV isn't defined in your WordPress config
  // Used in scripts.php to check for 'development' or 'production'
  define('WP_ENV', 'production');
}


/**
 * Define which pages shouldn't have the sidebar
 *
 * See lib/sidebar.php for more details
 */
function display_sidebar() {
  static $display;

  if (!isset($display)) {
    $sidebar_config = new SpringSidebar(
      /**
       * Conditional tag checks (http://codex.wordpress.org/Conditional_Tags)
       * Any of these conditional tags that return true won't show the sidebar
       *
       * To use a function that accepts arguments, use the following format:
       *
       * array('function_name', array('arg1', 'arg2'))
       *
       * The second element must be an array even if there's only 1 argument.
       */
      array(
        'is_404',
        'is_front_page'
      ),
      /**
       * Page template checks (via is_page_template())
       * Any of these page templates that return true won't show the sidebar
       */
      array(
        'template-custom.php'
      )
    );
    $display = apply_filters('spring/display_sidebar', $sidebar_config->display);
  }

  return $display;
}
