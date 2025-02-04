<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://profiles.wordpress.org/thechetanvaghela/
 * @since             1.0.0
 * @package           Cv_Comment_Form_Validation
 *
 * @wordpress-plugin
 * Plugin Name:       Comment form validation and Customization
 * Plugin URI:        https://github.com/thechetanvaghela
 * Description:       Wordpress default comment form validation and customization.
 * Version:           1.0.1
 * Author:            Chetan Vaghela
 * Author URI:        https://profiles.wordpress.org/thechetanvaghela/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       comment-form-validation-and-customization
 * Domain Path:       /languages
 */

# If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CV_COMMENT_FORM_VALIDATION_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cv-comment-form-validation-activator.php
 */
function activate_cv_comment_form_validation() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cv-comment-form-validation-activator.php';
	Cv_Comment_Form_Validation_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cv-comment-form-validation-deactivator.php
 */
function deactivate_cv_comment_form_validation() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cv-comment-form-validation-deactivator.php';
	Cv_Comment_Form_Validation_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cv_comment_form_validation' );
register_deactivation_hook( __FILE__, 'deactivate_cv_comment_form_validation' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cv-comment-form-validation.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cv_comment_form_validation() {

	$plugin = new Cv_Comment_Form_Validation();
	$plugin->run();

}
run_cv_comment_form_validation();
