<?php
/**
 * DM Updater
 *
 * @package   GitHub_Updater
 * @author    Andy Fragen
 * @license   GPL-2.0+
 * @link      https://github.com/DesignMissoula/DM-updater
 */

/*
Plugin Name:       DM Updater
Plugin URI:        https://github.com/afragen/github-updater
Description:       A plugin to automatically update Design Missoula Custom plugins and themes into WordPress. 
Version:           3.0.0
Author:            Bradford Knowlton & Andy Fragen
Author URI: 	   http://bradknowlton.com/
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
Domain Path:       /languages
Text Domain:       DM-updater
GitHub Plugin URI: https://github.com/DesignMissoula/DM-updater
GitHub Branch:     master
*/

// Plugin class based upon <a href="https://github.com/codepress/github-plugin-updater">codepress/github-plugin-updater</a>. Theme class based upon <a href="https://github.com/WordPress-Phoenix/whitelabel-framework">Whitelabel Framework</a> modifications.

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) { die; }

// Load base classes and Launch
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {
	if ( ! class_exists( 'GitHub_Updater' ) ) {
		require_once 'includes/class-github-updater.php';
		require_once 'includes/class-github-api.php';
		require_once 'includes/class-bitbucket-api.php';
	}
	if ( ! class_exists( 'GitHub_Plugin_Updater' ) ) {
		require_once 'includes/class-plugin-updater.php';
		new GitHub_Plugin_Updater;
	}
	if ( ! class_exists( 'GitHub_Theme_Updater' ) ) {
		require_once 'includes/class-theme-updater.php';
		new GitHub_Theme_Updater;
	}
}
