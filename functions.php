<?php
/*
* Theme Functions.
*
* @package spawordpress
*/

if (!defined('SPAWORDPRESS_DIR_PATH')) {
    define('SPAWORDPRESS_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('SPAWORDPRESS_DIR_URI')) {
    define('SPAWORDPRESS_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once SPAWORDPRESS_DIR_PATH . '/inc/helpers/autoloader.php';

function spawordpress_get_theme_instance() {
    \SPAWORDPRESS_THEME\Inc\SPAWORDPRESS_THEME::get_instance();
}

spawordpress_get_theme_instance();
