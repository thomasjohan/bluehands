<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/helpers.php',   // Webnerds helpers
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/shortcodes.php',    //webnerds shortcodes
  // 'lib/advanced-custom-fields.php',    //Exported AFC fields
  // 'lib/acf/options.php',    //AFC options pages
  // 'lib/acf/flex-content.php',
  // 'lib/acf/page-banner.php'


];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

//Loads ACF files on init to enable theme translation.
add_action('init', __NAMESPACE__ . '\\load_exported_fields');
function load_exported_fields(){
  include_once 'lib/acf/helpers.php';
  include_once 'lib/advanced-custom-fields.php';
  include_once 'lib/acf/options.php'; 
  include_once 'lib/acf/flex-content.php';
  include_once 'lib/acf/page-banner.php';
}