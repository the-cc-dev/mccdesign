<?php $images = get_field('gallery_field'); ?>

<div <?php post_class(); ?>>

	<h1 class="page-title"><?php the_title(); ?></h1>

	<div class="browse-drop drop">
	  <?php get_template_part('templates/browse-drop'); ?>
	</div>

	<?php if($images): ?>

		<div class="gallery-slider responsive-slider">

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
