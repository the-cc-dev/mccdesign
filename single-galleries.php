<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('templates/header'); ?>

<?php $images = get_field('gallery_field'); ?>

<div <?php post_class(); ?>>

	<h1 class="page-title"><?php the_title(); ?></h1>

	<?php get_template_part('templates/browse-drop'); ?>

	<?php get_template_part('templates/single-gallery'); ?>
	

  </div>


<?php get_template_part('templates/footer'); ?>

<?php endwhile; ?>
