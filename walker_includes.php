<?php
/*
Plugin Name: The Walker Group Theme Setup
Plugin URI: 
Description: Short order template drop-in setup
Version: 1.0
Author: Michael W. Delaney
Author URI: 
License: MIT
*/
 
define( 'WALKER_THEME_SETUP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

$wss_includes = [
  'lib/walker_setup.php',              // WSS specific setup
  'lib/walker_branding.php',           // Brand with The Walker Group logos
  'lib/wp_bootstrap_navwalker.php', // Bootstrap Navwalker
  'lib/metaboxes.php',              // Register and manipulate metaboxes
  'lib/custom_admin.php'            // Add custom scripts and styles to admin

];

foreach ($wss_includes as $file) {
	echo WALKER_THEME_SETUP_PLUGIN_DIR . $file;
  if ( !$filepath = WALKER_THEME_SETUP_PLUGIN_DIR . $file ) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
