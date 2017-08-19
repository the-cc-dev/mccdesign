<button class="drop-toggle btn" type="button">
	<span class="drop-toggle-text">Browse</span>
	<i class="drop-arrow drop-up fa fa-chevron-up"></i>
	<i class="drop-arrow drop-down fa fa-chevron-down"></i>
</button>

<ul class="drop-menu">
	<?php if( have_rows('browse_links','options') ): ?>
		<?php while( have_rows('browse_links', 'options') ): the_row(); ?>

			<li class="drop-item">
				<a class="drop-link" href="<?php the_sub_field('browse_link'); ?>">
					<?php the_sub_field('text'); ?>
				</a>
			</li>

		<?php endwhile; ?>
	<?php endif; ?>
</ul>
