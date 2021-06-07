<?php get_header();

// Template Name: Single

?>

<article>
    <h2 itemprop="headline">
        <?php the_title(); ?>
    </h2>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_post_thumbnail("moyen"); ?>
    <?php the_content(); ?>
    <span itemprop="datePublished" class="date">
        <a href=""><?php the_time("l, jS F, Y"); ?></a>
    </span>
    <?php endwhile; ?>
    <?php endif; ?>
</article>

