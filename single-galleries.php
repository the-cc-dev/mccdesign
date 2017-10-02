<?php while (have_posts()) : the_post(); 
get_template_part('templates/header'); 
$images = get_field('gallery_field'); 
get_template_part('templates/page-header'); 
get_template_part('templates/browse-drop'); 
if($images): $slide_num = 1; ?>

<div id="theContent">
	<div class="single-gallery">
		
	<?php foreach( $images as $image): ?>

		<div class="gallery-item" id="galItm<?php echo $slide_num; ?>">
			<div class="gallery-item-content">
				<span class="gallery-title"><?php echo $slide_num; ?></span>
				<img 	class="gallery-img" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['caption']; ?>">
				</div>
		</div>
		
	<?php $slide_num = $slide_num + 1; 
		endforeach; ?>

	</div>
</div>

<?php	 endif; 

get_template_part('templates/footer'); 

endwhile; ?>













