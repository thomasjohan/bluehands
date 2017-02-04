<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return '&hellip; <a href="' . get_permalink() . '">'.__('Read more.').'</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

class Foundation_Nav_Menu extends \Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"menu\">\n";
    }
}

function wrap_videos_with_flex_video($content) {
  $content = str_replace ( '<iframe' , '<div class="flex-video"><iframe' , $content);
  $content = str_replace ( '</iframe>' , '</iframe></div>' , $content);
  return $content;
}

add_filter('the_content', __NAMESPACE__ .'\\wrap_videos_with_flex_video');


/* This function collapses all acf filed by default*/
function my_acf_admin_head() {
  ?>
  <script type="text/javascript">
  (function($){

    $(document).ready(function(){
            console.log($(".values > .layout:not(.-collapsed)").find(".acf-icon.-collapse "));
            $(".values > .layout:not(.-collapsed)").find(".acf-icon.-collapse ").each(function( index ) {
              console.log($(this));
              $( this ).click();
            });
            
        });

  })(jQuery);
  </script>
  <?php
}

add_action('acf/input/admin_head', __NAMESPACE__ . '\\my_acf_admin_head');
