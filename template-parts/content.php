<?php
/**
* Content template
*
* @package spawordpress
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('rounded-lg bg-white shadow-xl'); ?>>
    <?php get_template_part('template-parts/components/blog/entry-header'); ?>
    <div class="px-4">
        <?php get_template_part('template-parts/components/blog/entry-meta'); ?>
        <?php get_template_part('template-parts/components/blog/entry-content'); ?>
        <?php get_template_part('template-parts/components/blog/entry-footer'); ?>
    </div>
</article>
