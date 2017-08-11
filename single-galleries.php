<?php while (have_posts()) : the_post();

	get_template_part('templates/header');

	get_template_part('templates/content-galleries-single');

	get_template_part('templates/footer');

endwhile; ?>
