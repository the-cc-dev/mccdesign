<?php while (have_posts()) : the_post();   
			$images = get_field('gallery_field'); 
?>
<?php get_template_part('templates/header'); ?>

<main id="main" class="the-main">
	
		<div <?php post_class(); ?>>
			<h1 class="page-title"><?php the_title(); ?></h1>
			<?php get_template_part('templates/browse-drop'); ?>
				<?php if($images): ?>
				
					<div class="gallery-slider responsive">
					<?php foreach( $images as $image): ?>
						
						<div class="gallery-item">
								<img class="gallery-img" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['caption']; ?>">
						</div>
						
					<?php endforeach; ?>
					</div>	
				
				<?php	endif; ?>
	
			
  	</div>
		
	
</main>

<?php get_template_part('templates/footer'); ?>
<?php endwhile; ?>

