<main id="main" class="the-main">
	<div class="container-fluid">
		
  <?php if(is_front_page()) : ?> 
		
		<h3 class="page-title">Providing beautiful, quality artistic metal design to the Shreveport, LA area since 2003.</h3>
		
		<?php get_template_part('templates/browse-drop'); ?>
		
  <?php elseif(!(is_front_page())): ?> 
		
		<h3 class="page-title">About Us</h3>
		<?php the_content(); ?>
		
  <?php endif; ?>
  </div>
</main>