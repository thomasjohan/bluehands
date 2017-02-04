<?php 
// Template Name: List Subpages

while (have_posts()) : the_post();
$subpages_query = new WP_Query( array(
	'post_parent' => $post->ID,
	'post_type' => 'page',
	'post_count' => -1,
	'posts_per_page' => -1
));
?>
	
<div class="row">	
	<div class="columns text-center">
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>
	</div>
</div>
<div class="row">
	<div class="columns">
		<div class="grid">
			<?php while ( $subpages_query->have_posts() ) : $subpages_query->the_post(); ?>
			<div class="grid-item">
				<div class="subpage">
					<?php the_post_thumbnail() ?>
					<div class="subpage-text">
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt() ?>	
					</div>
					<a href="<?php the_permalink() ?>"></a>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>


<?php endwhile; ?>