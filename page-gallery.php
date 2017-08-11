<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('templates/header'); ?>

<?php get_template_part('templates/content-gallery'); ?>

<?php get_template_part('templates/footer'); ?>

<?php endwhile; ?>
