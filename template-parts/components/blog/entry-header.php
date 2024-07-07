<?php
/**
* Template for entry header
*
* @package spawordpress
*/

$the_post_id = get_the_ID();
$hide_title = get_post_meta($the_post_id, '_hide_page_title', true);
$heading_class = !empty($hide_title) && 'yes' === $hide_title ? 'hidden' : '';
$has_post_thumbnail = get_the_post_thumbnail();
?>

<header class="w-full">
    <?php if ($has_post_thumbnail): ?>
            <a
                href="<?=esc_url(get_permalink())?>"
                <?php if (!spawordpress_is_bot()): ?>
                    hx-get="<?php echo esc_url(get_permalink())?>"
                    hx-push-url="true"
                <?php endif; ?>
                class="cursor-pointer"
            >
                <?php the_post_custom_thumbnail(
                    $the_post_id,
                    'featured-thumbnail',
                    [
                        'sizes' => '(max-width: 350px) 350px, 233px',
                        'class' => 'w-full object-cover h-36 rounded-t-lg'
                    ]
                ); ?>
            </a>
    <?php endif; ?>

    <!-- Title -->
    <?php if (is_single() || is_page()) {
        printf(
            '<h1 class="text-3xl px-4 mt-4 font-bold text-brand-primary %1$s">%2$s</h1>',
            esc_attr($heading_class),
            wp_kses_post(get_the_title())
        );
    } else {
        $hx_get_attr = !spawordpress_is_bot() ? 'hx-get="%1$s" hx-push-url="true"' : '';
        printf(
            '<h2 class="text-xl px-4 mt-4 font-bold text-brand-primary"><a class="hover:underline" href="%1$s" ' . $hx_get_attr . '>%2$s</a></h2>',
            esc_url(get_the_permalink()),
            wp_kses_post(get_the_title())
        );
    }
    ?>
</header>
