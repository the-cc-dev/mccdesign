

<?php if(is_front_page()) : ?>

  <?php get_template_part('templates/home-content'); ?>

<?php elseif($pagename === "gallery"): ?>

  <?php get_template_part('templates/gallery-content'); ?>

<?php else: ?>

  <h3 class="page-title"><?php the_title(); ?></h3>
  <div class="the-content">
  <?php
    the_content();
    wp_link_pages([ 'before' => '<nav class="page-nav"><p>',
                    'after' => '</p></nav>' ]);
  ?>
  </div>

<?php endif; ?>
