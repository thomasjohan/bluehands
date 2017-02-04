<?php while (have_posts()) : the_post(); 

//figure out wether a page has children or a parent
  $parents = get_ancestors($post->ID, 'page');
  $children = get_children(array('post_parent' => $post->ID, 'post_type'   => 'page'));
  $has_sidebar = true;

  if(!empty($parents)) {
    $highest_parent = array_reverse($parents)[0];
  } elseif (!empty($children)) {
    $highest_parent = $post->ID;
  } else {
    $has_sidebar = false;
  }

  if($has_sidebar) {
    //to be able to pass variables on to the template
    include(locate_template('templates/page-sidebar.php'));
  }else {
    get_template_part('templates/page', 'no-sidebar');
  }
?>

<?php endwhile; ?>
