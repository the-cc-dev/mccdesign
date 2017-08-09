  <?php $args = array( 'post_type' => 'galleries', 'posts_per_page' => -1 ); ?>
  <?php $loop = new WP_Query( $args ); ?>
  <?php if ( $loop->have_posts() ) : ?>
    <div class="gallery-covers">
      <ul class="a-gallery responsive responsive-slider">
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <li class="gallery-cover">
          <img class="gallery-img" src="<?php the_field('gallery_cover'); ?>">
        </li>
      <?php endwhile; ?>
      </ul>
    </div>
  <?php endif; ?>
