<?php

/**
 * Medium Stories
 *
 * @link              http://github.com/richchurcher/medium-stories
 * @since             0.1.0
 * @package           Medium_Stories
 *
 * @wordpress-plugin
 * Plugin Name:       Medium Stories
 * Plugin URI:        http://github.com/richchurcher/medium-stories
 * Description:       Queries the Medium API and displays story summaries with links.
 * Version:           0.1.0
 * Author:            Rich Churcher
 * Author URI:        https://github.com/richchurcher
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       medium-stories
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

function activate_medium_stories() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-medium-stories-activator.php';
	Medium_Stories_Activator::activate();
}

function deactivate_medium_stories() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-medium-stories-deactivator.php';
	Medium_Stories_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_medium_stories' );
register_deactivation_hook( __FILE__, 'deactivate_medium_stories' );

require plugin_dir_path( __FILE__ ) . 'includes/class-medium-stories.php';

/**
 * Begin execution.
 *
 * @since    0.1.0
 */
function run_medium_stories() {

	$plugin = new Medium_Stories();
	$plugin->run();

}

run_medium_stories();
