<?php
/**
* The template part for displaying a message that posts cannot be found.
*
* @package spawordpress
*/
?>

<section>
    <h2 class="text-xl font-extrabold mb-8"><?php esc_html_e('Nothing Found', 'spawordpress'); ?></h2>

    <div>
        <?php if (is_home() && current_user_can('publish_posts')): ?>
            <p><?php printf(wp_kses(__('Ready to publish your first post? <a class="text-blue-500 underline" href="%1$s">Get started here</a>', 'spawordpress'), ['a' => ['href' => [], 'class' => []]]), esc_url(admin_url('post-new.php')))?></p>
        <?php elseif(is_search()): ?>
            <p><?php esc_html_e('Sorry, but nothing matched your search item. Please try again!', 'spawordpress'); ?></p>
            <?php get_search_form(); ?>
        <?php else: ?>
            <p><?php esc_html_e('It seems that we cannot find what you are looking for. Perhaps search can help!', 'spawordpress'); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section>
