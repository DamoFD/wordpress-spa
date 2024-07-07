<?php
/**
* Main template file.
* @package spawordpress
*/

if (!isset($_SERVER['HTTP_HX_REQUEST'])) {
    get_header();
}

?>

<div id="primary">
    <main id="main" class="px-6 mt-5" role="main">
        <?php if (is_home() && !is_front_page()): ?>
            <h1 class="text-3xl font-bold mb-8 text-brand-primary"><?php single_post_title(); ?></h1>
        <?php endif; ?>
        <?php if (have_posts()): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php while (have_posts()): the_post(); ?>
                    <?php get_template_part('template-parts/content'); ?>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <?php get_template_part('template-parts/content-none'); ?>
        <?php endif; ?>

        <?php spawordpress_pagination(); ?>
    </main>
</div>

<?php
if (!isset($_SERVER['HTTP_HX_REQUEST'])) {
    get_footer();
}
