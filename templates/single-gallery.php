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