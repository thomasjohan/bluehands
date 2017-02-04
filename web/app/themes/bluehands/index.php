<?php get_template_part('templates/banner-page') ?>
<div class="news">
	<div class="row">
		<div class="medium-10 large-8 medium-centered columns">
			<?php get_template_part('templates/page', 'header'); ?>
			<div class="post-content">
			<?php if (!have_posts()) : ?>
			  <div class="alert alert-warning">
			    <?php _e('Sorry, no results were found.', 'webnerds'); ?>
			  </div>
			  <?php get_search_form(); ?>
			<?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>
			  <?php the_post_thumbnail(); ?>
			  <div class="post-text">
			  	<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
			  </div>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
			</div>
		</div>
	</div>
</div>