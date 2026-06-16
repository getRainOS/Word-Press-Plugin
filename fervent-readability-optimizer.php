<?php
/**
 * Plugin Name: Fervent Readability Optimizer
 * Description: Advanced engine for search readiness and readability optimization framework.
 * Version:     2.3.0
 * Author:      Fervent Group
 * License:     GPL-2.0+
 * Text Domain: fervent-readability-optimizer
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'FERVENT_RO_VERSION', '2.3.0' );
define( 'FERVENT_RO_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'FERVENT_RO_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'FERVENT_RO_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
define( 'FERVENT_RO_API_URL', 'https://api.getrainos.com/v1' );

// Load classes securely using unique naming rules
require_once FERVENT_RO_PLUGIN_DIR . 'includes/class-fervent-readability-loader.php';
require_once FERVENT_RO_PLUGIN_DIR . 'includes/class-fervent-readability-ajax.php';
require_once FERVENT_RO_PLUGIN_DIR . 'includes/api/class-fervent-readability-api-client.php';
require_once FERVENT_RO_PLUGIN_DIR . 'includes/api/class-fervent-readability-ai-backend.php';
