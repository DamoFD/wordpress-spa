<?php
/**
* Bootstraps the Theme.
*
* @package spawordpress
*/

namespace SPAWORDPRESS_THEME\Inc;

use SPAWORDPRESS_THEME\Inc\Traits\Singleton;

class SPAWORDPRESS_THEME
{
    use Singleton;

    protected function __construct()
    {
        // load class.
        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //
    }
}
