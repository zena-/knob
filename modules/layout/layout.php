<div class="layout" data-module="layout">
  <div class="container">
    <h2 class="layout__title"><?php _e('Recent Articles', 'barrel-wordpress-test'); ?></h2>

    <?php
    $recent = new WP_Query( 'offset=1');

    while ( $recent->have_posts() ) {

      $recent->the_post();

      the_module('post');

    }
    wp_reset_postdata(); ?>
  </div>
</div>
