<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'DURG_DIR_URI' ) ) {
	define( 'DURG_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'DURG_DIR_ASSETS_URI' ) ) {
	define( 'DURG_DIR_ASSETS_URI', DURG_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'DURG_DIR_CSS_URI' ) ) {
	define( 'DURG_DIR_CSS_URI', DURG_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'DURG_DIR_JS_URI' ) ) {
	define( 'DURG_DIR_JS_URI', DURG_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'DURG_DIR_IMGS_URI' ) ) {
	define( 'DURG_DIR_IMGS_URI', DURG_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'DURG_DIR_ICON_IMG_URI' ) ) {
	define( 'DURG_DIR_ICON_IMG_URI', DURG_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'DURG_DIR_PATH' ) ) {
	define( 'DURG_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'DURG_DIR_PATH_INC' ) ) {
	define( 'DURG_DIR_PATH_INC', DURG_DIR_PATH . 'inc/' );
}

//Durg Libraries Folder Directory
if ( ! defined( 'DURG_DIR_PATH_LIBS' ) ) {
	define( 'DURG_DIR_PATH_LIBS', DURG_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'DURG_DIR_PATH_CLASSES' ) ) {
	define( 'DURG_DIR_PATH_CLASSES', DURG_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'DURG_DIR_PATH_HOOKS' ) ) {
	define( 'DURG_DIR_PATH_HOOKS', DURG_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function durg_admin_script(){
    wp_enqueue_style( 'durg-admin', get_template_directory_uri().'/assets/css/durg_admin.css', false, '1.0.0' );
    wp_enqueue_script( 'durg_admin', get_template_directory_uri().'/assets/js/durg_admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'durg_admin_script' );



/**
 * Include File
 *
 */
require_once( DURG_DIR_PATH_INC . 'durg-breadcrumbs.php' );
require_once( DURG_DIR_PATH_INC . 'durg-widgets-reg.php' );
require_once( DURG_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( DURG_DIR_PATH_INC . 'post-like.php' );
require_once( DURG_DIR_PATH_INC . 'durg-functions.php' );
require_once( DURG_DIR_PATH_INC . 'durg-commoncss.php' );
require_once( DURG_DIR_PATH_INC . 'support-functions.php' );
require_once( DURG_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( DURG_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( DURG_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( DURG_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( DURG_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( DURG_DIR_PATH_HOOKS . 'hooks.php' );
require_once( DURG_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( DURG_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( DURG_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Durg object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Durg = new Durg();