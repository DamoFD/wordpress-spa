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
        } else {
            spawordpress_the_excerpt(50);
        }
    ?>
</div>
