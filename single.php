<?php
/**
* Single Post template
*
* @package spawordpress
*/

get_header();
?>

<div id="primary">
    <main id="main" class="max-w-7xl mx-auto mt-5" role="main">
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

        <div class="container">
            <?php
                previous_post_link();
                next_post_link();
            ?>
        </div>
    </main>
</div>

<?php get_footer(); ?>
