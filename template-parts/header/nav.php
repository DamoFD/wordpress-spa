<?php
/**
* Header Navigation template.
*
* @package spawordpress
*/

$menu_class = \SPAWORDPRESS_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('spawordpress-header-menu');

$header_menus = wp_get_nav_menu_items($header_menu_id);
?>

<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
    <div class="w-full max-w-7xl mx-auto">
      <div class="flex items-center flex-shrink-0 text-white mr-6 space-x-2">
            <div class="w-10">
                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
        <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
      </div>
      <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
      </div>
      <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <?php
            if (!empty($header_menus) && is_array($header_menus)):
        ?>
        <div class="text-sm lg:flex-grow">
            <?php foreach($header_menus as $menu_item): ?>
                <?php if (!$menu_item->menu_item_parent): ?>
                    <?php
                        $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->id);
                        $has_children = !empty($child_menu_items) && is_array($child_menu_items);
                    ?>
                    <?php if (!$has_children): ?>
                        <a href="<?=esc_url( $menu_item->url )?>" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                            <?=esc_html($menu_item->title)?>
                        </a>
                    <?php else: ?>
                        <!-- TODO: dropdown structure -->
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div>
          <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
        </div>
      </div>
    </div>
</nav>
