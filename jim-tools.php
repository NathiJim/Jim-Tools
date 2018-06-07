<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Jim_Tools
 *
 * @wordpress-plugin
 * Plugin Name:       Jim Tools
 * Plugin URI:        http://example.com/jim-tools-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            TonyJim
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jim-tools
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 *	création de Fonction d'emplacement répertoire prédéfini du plugin
 */
define( 'JIM_TOOLS_FONCTIONS', plugin_dir_path( __FILE__ ) ."admin/fonctions/" );
// repertoire des extensions
define( 'JIM_TOOLS_EXTENSIONS_DIR', __DIR__ .'/admin/extensions/');
// repertoire des fichiers infos
define( 'JIM_TOOLS_INFO_DIR', __DIR__ .'/admin/includes/info/');

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'JIM_TOOLS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jim-tools-activator.php
 */
function activate_jim_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jim-tools-activator.php';
	Jim_Tools_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jim-tools-deactivator.php
 */
function deactivate_jim_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jim-tools-deactivator.php';
	Jim_Tools_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_jim_tools' );
register_deactivation_hook( __FILE__, 'deactivate_jim_tools' );

/**
 *	création de Fonction d'emplacement
 */
define( 'JIM_TOOLS_FILES', WP_CONTENT_DIR ."/jim_tools_files/" );
define( 'JIM_TOOLS_DEBUG', false );

/** 
 *	On crée le dossier qui contiendra les fichiers du plugin
 */
if (!file_exists(JIM_TOOLS_FILES)){ 
	mkdir(JIM_TOOLS_FILES, 0755, true); }
// Give permission
@chmod(JIM_TOOLS_FILES, 0755);



/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-jim-tools.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jim_tools() {

	$plugin = new Jim_Tools();
	$plugin->run();

}
run_jim_tools();




?>