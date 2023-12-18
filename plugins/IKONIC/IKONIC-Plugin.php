<?php
/*
* Plugin Name: IKONIC Plugin
* Description: Core functionality for IKONIC WP WordPress Theme.
* Text Domain: IKONIC
* Domain Path: /languages
* Version: 1.5.1
* Author: Sohaib Ishaque
* Author URI: https://engineersohaibishaque.netlify.app/
* Description: Ikonic Solution is a team of talented agile developers who provide bespoke software development services.
*/

define('IKONIC_PLUGIN_PATH', plugin_dir_url( __FILE__ ));
define('IKONIC_PLUGIN_BASENAME', plugin_basename(__FILE__));

add_action('plugins_loaded', 'IKONIC_load_textdomain');
function IKONIC_load_textdomain() {
    load_plugin_textdomain('IKONIC', false, dirname(plugin_basename( __FILE__ ) ) . '/languages');
}

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);



require_once 'admin/settings.php';


?>