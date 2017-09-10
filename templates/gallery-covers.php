<?php $args = array( 'post_type' => 'galleries', 'posts_per_page' => -1 );
      $loop = new WP_Query( $args );
      if ( $loop->have_posts() ) :
?>
  <div class="gallery-covers">
    <div class="gallery-slider responsive-slider">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="gallery-item">
        <a class="gallery-link" href="<?php the_permalink(); ?>">
          <span class="gallery-title"><?php the_title(); ?></span>
          <img class="gallery-img" src="<?php the_field('gallery_cover'); ?>">
        </a>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>