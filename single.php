<?php
/**
* Single Post template
*
* @package spawordpress
*/

if (!isset($_SERVER['HTTP_HX_REQUEST'])) {
    get_header();
}
?>

<div id="primary">
    <main id="main" class="max-w-7xl mx-auto mt-5 flex" role="main">
        <div class="w-5/6">
            <?php if (is_home() && !is_front_page()): ?>
                <h1 class="text-3xl font-extrabold mb-8"><?php single_post_title(); ?></h1>
            <?php endif; ?>
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <?php get_template_part('template-parts/content'); ?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php get_template_part('template-parts/content-none'); ?>
            <?php endif; ?>

            <div>
                <?php
                    previous_post_link();
                    next_post_link();
                ?>
            </div>
        </div>
        <div class="w-1/6">
            <?php get_sidebar(); ?>
        </div>
    </main>
</div>

<?php
    if (!isset($_SERVER['Hx-Request'])) {
        get_footer();
    }
?>
