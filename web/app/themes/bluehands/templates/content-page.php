<?php 
//hides title if the page has a banner
if(!get_field('show_banner')): ?>
	<h1 class="text-center"><?php the_title()?></h1>
<?php endif; ?>
<?php the_content() ?>