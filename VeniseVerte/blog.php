<?php get_header();
// Template Name: Blog
?>

<?php
$recentPosts = new WP_Query();
$recentPosts->query("showposts=5");
?>


<?php
while ($recentPosts->have_posts()) : $recentPosts->the_post();
?>
<article>
<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<span><?php the_excerpt(); ?></span>
<span class="date"><?php the_time("I, jS, F, Y"); ?></span>
</article>
<?php endwhile;?>

<?php get_footer();?>
