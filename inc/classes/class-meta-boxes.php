<?php
/**
* Register meta boxes
*
* @package spawordpress
*/

namespace SPAWORDPRESS_THEME\Inc;

use SPAWORDPRESS_THEME\Inc\Traits\Singleton;

class Meta_Boxes
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
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box']);
        add_action('save_post', [$this, 'save_post_meta_data']);
    }

    public function add_custom_meta_box($post)
    {
        $screens = ['post'];
        foreach ($screens as $screen) {
            add_meta_box(
                'hide-page-title', //Unique ID
                __('Hide page title', 'spawordpress'), // Box title
                [$this, 'custom_meta_box_html'], // Content callback, must be of type callable
                $screen, // Post type
                'side' // context
            );
        }
    }

    public function custom_meta_box_html($post)
    {
        $value = get_post_meta($post->ID, '_hide_page_title', true);

        /**
        * Use nonce for verification
        */
        wp_nonce_field(plugin_basename(__FILE__), 'hide_title_meta_box_nonce_name');

        ?>
        <label for="spawordpress-field"><?php esc_html_e('Hide the page title', 'spawordpress'); ?></label>
        <select id="spawordpress-field" class="postbox" name="spawordpress_hide_title_field">
            <option value=""><?php esc_html_e('Select', 'spawordpress') ?></option>
            <option value="yes" <?php selected($value, 'yes'); ?>><?php esc_html_e('Yes', 'spawordpress'); ?></option>
            <option value="no" <?php selected($value, 'no'); ?>><?php esc_html_e('No', 'spawordpress'); ?></option>
        </select>
        <?php
    }

    public function save_post_meta_data($post_id)
    {
        /**
        * When the post is saved or updated we get $_POST available
        * Check if the current user is authorized
        */
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }

        /**
        * Check if the nonce value we received is the same we created.
        */
        if (!isset($_POST['hide_title_meta_box_nonce_name']) || !wp_verify_nonce($_POST['hide_title_meta_box_nonce_name'], plugin_basename(__FILE__))) {
            return;
        }

        if (array_key_exists('spawordpress_hide_title_field', $_POST)) {
            update_post_meta(
                $post_id,
                '_hide_page_title',
                $_POST['spawordpress_hide_title_field']
            );
        }
    }
}
