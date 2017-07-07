<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://collinslenjo.co.nf
 * @since             1.0.0
 * @package           Kopo
 *
 * @wordpress-plugin
 * Plugin Name:       Lipa na Mpesa
 * Plugin URI:        https://github.com/Collinslenjo/kopokopo
 * Description:       This is WooCommerce payment gateway enabling payments of the Mpesa buy goods via the Kopokopo api.
 * Version:           1.0.0
 * Author:            Collins Lenjo
 * Author URI:        http://collinslenjo.co.nf
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       kopo
 * Domain Path:       /languages
 */
 include 'includes/mpesa.php';
