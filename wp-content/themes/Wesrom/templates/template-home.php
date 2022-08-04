<?php
/*
Template Name: Home Page
Template Post Type: Page
*/
?>

<?php get_header(); ?>

<main class="home">
<?php if (have_rows('homepage_settings')) : ?>
        <?php while (have_rows('homepage_settings')) : the_row(); ?>
            <?php if (get_row_layout() == 'hero') : ?>
                <?php get_template_part('template-parts/homepage-sections/section', 'hero'); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>