<?php
/**
* Template for entry content.
*
* To be used inside WordPress The Loop.
*
* @package spawordpress
*/
?>

<div class="entry-content">
    <?php
        if (is_single()) {
    ?>
        <div class="single-content flex flex-col space-y-4">
    <?php
            the_content(
                sprintf(
                    wp_kses(
                        __('Continue reading %s <span>&rarr;</span>', 'spawordpress'),
                            [
                                'span' => [
                                    'class' => []
                                ]
                            ],
                    ),
                    the_title('<span>"', '"</span>', false)
                )
            );
        ?>
        </div>
    <?php
        } else {
            spawordpress_the_excerpt(200);
            echo spawordpress_excerpt_more();
        }

        wp_link_pages(
            [
                'before' => '<div>' . esc_html__( 'Pages:', 'spawordpress' ),
                'after' => '</div>',
            ]
        );
    ?>
</div>
