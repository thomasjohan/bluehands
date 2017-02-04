<?php 
$author_img = get_avatar( get_the_author_meta('email'), 200 );
 ?>

<div class="bio-content">
  	<div class="media-object stack-for-small">
	  <div class="media-object-section middle">
		<?php echo get_avatar( get_the_author_meta('email'), 150 ); ?>
	  </div>
	  <div class="media-object-section main-section middle ">
	    <h4><?php printf(__('Published by <strong>%s</strong> %s ago.','webnerds'),get_the_author(), human_time_diff(get_the_date('U'))); ?></h4>
	    <?php the_author_meta('description'); ?>
	  </div>
	</div>
</div>

