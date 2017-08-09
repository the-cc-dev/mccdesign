<?php $images = get_field('gallery_field'); ?>

<main id="main" class="the-main">

	<div <?php post_class(); ?>>

		<h1 class="page-title">
      <?php the_title(); ?>
    </h1>

	<?php get_template_part('templates/browse-drop'); ?>

	<?php if($images): ?>

		<div class="gallery-slider responsive responsive-slider">

		<?php foreach( $images as $image): ?>

			<div class="gallery-item">

				<img 	class="gallery-img"
							src="<?php echo $image['sizes']['thumbnail']; ?>"
							alt="<?php echo $image['caption']; ?>"
				>

			</div>

		<?php endforeach; ?>

		</div>

	<?php	endif; ?>

  </div>
  
</main>
