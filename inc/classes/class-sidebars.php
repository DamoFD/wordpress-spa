<?php
/**
* Register Sidebars
*
* @package spawordpress
*/

namespace SPAWORDPRESS_THEME\Inc;

use SPAWORDPRESS_THEME\Inc\Traits\Singleton;

class Sidebars
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
        add_action('widgets_init', [$this, 'register_sidebars']);
        add_action('widgets_init', [$this, 'register_clock_widget']);
    }

    public function register_sidebars()
    {
        register_sidebar([
            'name' => __('Sidebar', 'spawordpress'),
            'id' => 'sidebar-1',
            'description' => __('Main Sidebar', 'spawordpress'),
            'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ]);

        register_sidebar([
            'name' => __('Footer', 'spawordpress'),
            'id' => 'sidebar-2',
            'description' => __('Footer Sidebar', 'spawordpress'),
            'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ]);
    }

    public function register_clock_widget()
    {
        register_widget('SPAWORDPRESS_THEME\Inc\Clock_Widget');
    }
}
