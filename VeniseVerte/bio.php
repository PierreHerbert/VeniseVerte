<?php get_header();

// Template Name: Biographie

?>

<article id="biographie">
    <?php the_post_thumbnail("grand"); ?>
    <?php the_content(); ?>
    <span itemprop="datePublished" class="date">
        <a href=""><?php the_time("l j F Y"); ?></a>
    </span>
</article>