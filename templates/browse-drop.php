<div class="browse-drop a-dropdown">
			<button class="drop-toggle browse-toggle btn" type="button">
			Browse
				<i class="browse-arrow drop-up fa fa-chevron-up"></i>
				<i class="browse-arrow drop-down fa fa-chevron-down"></i>
			</button>
			<ul class="browse-menu drop-menu">
				<?php if( have_rows('browse_links','options') ): ?>
					<?php while( have_rows('browse_links', 'options') ): the_row(); ?>
						<li class="drop-item browse-item">
							<a class="browse-link" href="<?php the_sub_field('browse_link'); ?>"><?php the_sub_field('text'); ?></a>
						</li>
					<?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>