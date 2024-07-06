<?php
/**
* Template for entry header
*
* @package spawordpress
*/

$the_post_id = get_the_ID();
$hide_title = get_post_meta($the_post_id, '_hide_page_title', true);
$has_post_thumbnail = get_the_post_thumbnail();
?>

<header class="w-full h-56">
    <?php if ($has_post_thumbnail): ?>
            <a href="<?=esc_url(get_permalink())?>">
            <?php the_post_custom_thumbnail(
                $the_post_id,
                'featured-thumbnail',
                [
                    'sizes' => '(max-width: 350px) 350px, 233px',
                    'class' => 'w-full object-cover h-full'
                ]
            ); ?>
            </a>
    <?php endif; ?>
</header>
