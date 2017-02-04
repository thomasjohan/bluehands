<?php 

/*
These functions contains some helper functions for the webnerds theme.
*/

namespace Webnerds\Helpers;

function get_highest_parent($post, $return_object = false) {
	$parents = get_ancestors($post->ID, 'page');
  	$children = get_children(array('post_parent' => $post->ID, 'post_type'   => 'page'));

	if(!empty($parents)) {
		$highest_parent_id = array_reverse($parents)[0];
	} else {
		$highest_parent_id = $post->ID;
	}

	return $return_object ? get_post($highest_parent_id) : $highest_parent_id;
}
