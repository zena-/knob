<?php
/**
 * Post block
 * @author BarrelNY
 */

$post__image = featured_image_or_fallback($post);
$post__image_position = image_custom_position($post);
$post__icon = get_format_icon($post);
$post__cta = get_cta($post); ?>

<article class="post post--loop">
  <a href="<?php the_permalink(); ?>" class="post__image post--link">
    <span style="background-image:url('<?php echo $post__image; ?>');background-position:<?php echo $post__image_position; ?>">
    </span>
  </a>
  <div class="post__meta">
    <div class="post__meta--icon">
      <?php echo $post__icon; ?>
    </div>
    <a href="<?php echo get_month_link(get_the_date('Y'), get_the_date('m')); ?>" class="post__meta--date">
      <button><?php echo get_the_date('F d'); ?></button>
    </a>
    <a href="<?php the_permalink(); ?>" class="post__meta--title post--link">
      <h4><?php the_title(); ?></h4>
    </a>
    <a href="<?php the_permalink(); ?>" class="post__meta--cta post--link">
      <?php echo $post__cta; ?>
    </a>
  </div>
</article> 
