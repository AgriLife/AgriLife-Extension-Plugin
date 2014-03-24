<?php
/**
 * Plugin Name: AgriLife Extension
 * Plugin URI: https://github.com/AgriLife/AgriLife-Extension
 * Description: Functionality for AgriLife Extension sites
 * Version: 1.0
 * Author: J. Aaron Eaton
 * Author URI: http://channeleaton.com
 * Author Email: aaron@channeleaton.com
 * License: GPL2+
 */

require 'vendor/autoload.php';

define( 'AG_EXT_DIRNAME', 'agrilife-extension' );
define( 'AG_EXT_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'AG_EXT_DIR_FILE', __FILE__ );
define( 'AG_EXT_DIR_URL', plugin_dir_url( __FILE__ ) );

// Register plugin activation functions
$activate = new \AgriLife\Core\Plugin\Activate;
register_activation_hook( __FILE__, array( $activate, 'run') );

// Register plugin deactivation functions
$deactivate = new \AgriLife\Core\Plugin\Deactivate;
register_deactivation_hook( __FILE__, array( $deactivate, 'run' ) );

$ext_required_dom = new \AgriLife\Extension\RequiredDOM();
