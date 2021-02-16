<?php

/**
 * Plugin Name:       Display my projects
 * Plugin URI:        https://displaytable.es
 * Description:       A plugin to manage projects and tasks.
 * Version:           0.1
 * Requires at least: 5.6
 * Requires PHP:      7.2
 * Author:            Display Table
 * Author URI:        https://displaytable.es
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       display-my-projects
 * Domain Path:       /languages
 */

defined('ABSPATH') or die();

// Defines
define('INLUDE_PATH', plugin_dir_path( __FILE__ ) . 'includes/');
define('ASSETS_PATH', plugin_dir_path( __FILE__ ) . 'assets/');
define('ASSETS_URL', plugin_dir_url( __FILE__ ) . 'assets/');
define('TEMPLATE_PATH', plugin_dir_path( __FILE__ ) . 'templates/');
define('REGISTER_PATH', plugin_dir_path( __FILE__ ) . 'register/');

// Interfaces
require_once(INLUDE_PATH . 'utilities/interfaces/interface-init.php');
require_once(INLUDE_PATH . 'utilities/interfaces/interface-page.php');

// Register activation 
require_once(REGISTER_PATH . 'register.php');

// Virtual pages
require_once(INLUDE_PATH . 'pages/class-main-page.php');

// Initialization
require_once(INLUDE_PATH . 'init/init.php');

// Variables
$dmyp_regiter_activation = new dmyp_register_activation();
$dmyp_virtual_page_main = new dmyp_page_main('display-my-project', 'dp_my_project', 'main.php');
$dmyp_init = new dmyp_init_config();

// Initialization
$dmyp_virtual_page_main->init();
$dmyp_init->init();

// Register activation 
register_activation_hook(REGISTER_PATH . 'register.php', array($dmyp_regiter_activation, 'register'));