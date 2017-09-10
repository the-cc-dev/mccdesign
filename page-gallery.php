<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('templates/header'); ?>
<h3 class="page-title">
  <?php the_title(); ?>
</h3>

<?php get_template_part('templates/gallery-covers'); ?>


<?php get_template_part('templates/footer'); ?>

<?php endwhile; ?>
