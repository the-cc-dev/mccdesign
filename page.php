<?php 

while (have_posts()) : the_post();

	get_template_part('templates/header');
	get_template_part('templates/page-header');

	if( is_page('contact') ):

		get_template_part('templates/contact-us');

	endif;

	if( is_page( array( 'home', 'gallery' ) ) ): 

		get_template_part('templates/browse-drop'); 
		get_template_part('templates/gallery-covers');

	elseif( is_page( array( 'about', 'contact' ) ) ): 

		get_template_part('templates/content'); 

	endif;

	get_template_part('templates/footer'); 

endwhile; 

?>
