<div class="page-header">
	
<?php if(is_front_page()): ?>

	<span id="homeTitle" class="page-title">
		<?php the_field('home_text'); ?>
	</span>

<?php else: ?>

	<span class="page-title">
		<?php the_title(); ?>
	</span>

<?php endif; ?>
	
</div>