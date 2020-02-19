<?php

/**
 * Get the the social icon.
 * @param  int $type   type from the ACF selector
 * @return string      font-awesome icon
 */
function get_social_icon($type) {
  if ($type) {
    if ($type == 'facebook') {
      $icon_type = 'fab';
      $icon = 'facebook-f';
    } else if ($type == 'rss') {
      $icon_type = 'fa';
      $icon = 'rss';
    } else {
      $icon_type = 'fab';
      $icon = $type;
    }

    return '<i class="' . $icon_type . ' ' . 'fa-' . $icon . '"></i>';
  }
  return '';
}

/**
 * Returns the modified title of the post format
 * @param  query $query a post query
 * @return string       A format title
 */
function get_modified_post_format($format) {
  $choices = array(
    'aside'   => 'recipe',
    'video'   => 'video',
    'gallery'   => 'gallery'
  );
  if ($choices[get_post_format($format)]) {
    return $choices[get_post_format($format)];
  }
  return 'article';
}

/**
 * Returns the CTA for a post
 * @param  query $query a post query
 * @return string       A formatted CTA
 */
function get_cta($format) {
  $modified_format = get_modified_post_format($format);
  if ($modified_format) :
    if ($modified_format == 'article') {
      return 'Read More';
    } else if ($modified_format == 'recipe') {
      return 'Read More';
    } else if ($modified_format == 'video') {
      return 'Watch Video';
    } else if ($modified_format == 'gallery') {
      return 'View Gallery';
    }
  endif;
  return 'Read More';
}


function get_format_icon($format) {
  $modified_format = get_modified_post_format($format);

  return '<i class="icon-' . $modified_format . '"></i>';
}
