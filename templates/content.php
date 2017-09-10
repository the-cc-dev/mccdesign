<div class="the-content">
  <?php
    the_content();
    wp_link_pages([ 'before' => '<nav class="page-nav"><p>',
                    'after' => '</p></nav>' ]);
  ?>
</div>
