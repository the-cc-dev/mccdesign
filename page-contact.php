<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('templates/header'); ?>

<h1 class="page-title"><?php the_title(); ?></h1>
	
<?php get_template_part("templates/contact-us"); ?>
	
<?php get_template_part('templates/content'); ?>

<?php get_template_part('templates/footer'); ?>

<?php endwhile; ?>
