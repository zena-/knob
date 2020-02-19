<?php
function the_truncated_excerpt($excerpt, $count){
  return wp_trim_words($excerpt, $count, '...' );
}
