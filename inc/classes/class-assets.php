<?php
/**
* Enqueue theme assets
*
* @package spawordpress
*/

namespace SPAWORDPRESS_THEME\Inc;

use SPAWORDPRESS_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
        * Actions.
        */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        error_log('function called');
        // Register styles
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(SPAWORDPRESS_DIR_PATH . '/style.css'), 'all');

        // enqueue styles
        wp_enqueue_style('style-css');

    }

    public function register_scripts()
    {
        // Register scripts
        wp_register_script('main-js', SPAWORDPRESS_DIR_URI . '/assets/main.js', [], filemtime(SPAWORDPRESS_DIR_PATH . '/assets/main.js'), true);

        // Enqueue scripts
        wp_enqueue_script('main-js');
    }
}
