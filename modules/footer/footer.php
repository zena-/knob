<?php
/**
 * Footer block
 * @author BarrelNY
 */

$brand__logo = get_field( 'brand_logo', 'options' ); // Array returned by Advanced Custom Fields
$brand__logo_alt = esc_attr($brand__logo['alt']); // Grab, from the array, the 'alt'
$brand__logo_url = esc_url($brand__logo['url']); // Grab the full size version ?>


<footer class="footer">
  <div class="container">
    <div class="footer__share">
      <span>
        <span>Share On</span>
        <ul>
          <li><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-show-count="false"><i class="fab fa-twitter"></i></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
          <li><i class="fab fa-facebook-f"></i></li>
        </ul>
      </span>
    </div>
    <div class="footer__logo">
      <span alt="<?php echo $brand__logo_alt; ?>" style="background-image:url('<?php echo $brand__logo_url; ?>');"></span>
    </div>
  </div>
</footer>
