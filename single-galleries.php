<?php while (have_posts()) : the_post();

	get_template_part('templates/header');

	get_template_part('templates/galleries-content');

	get_template_part('templates/footer');

endwhile; ?>
