<?php /*
<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'search'); ?>



<?php endwhile; ?>

<?php the_posts_navigation(); ?>

*/?>

<div class="search-section">
	<div class="row collpase">
		<div class="medium-10 large-8 medium-centered columns">
			<div class="search text-center">
				<h1>Sök</h1>
      	<input type="text" placeholder="Namn">
      	<button class="button clearblue">Sök</button>
      	<p class="current-search">Visar resultat för "Search term"</p>
			</div>
			
			<div class="articles">
				<div class="image-article">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/dist/images/example-image.png">
					<div class="article-text">
						<h2>News title</h2>
						<p>Viverra sagittis varius fermentum sollicitudin inceptos, nisl enim. Augue molestie ullamcorper orci, nibh sociosqu habitant praesent tempus ipsum pede. Sodales magnis lacinia sociis elementum. Accumsan Porta cubilia etiam velit. Dis auctor amet. Duis nibh euismod nascetur nulla lacinia. Pretium ligula mi ullamcorper conubia, egestas.</p>
						<p>4 veckor sedan av <strong>Carl Spinder</strong></p>
						<p>Kategorier: <strong>Träning, Hälsa</strong></p>
					</div>
				</div>
				<div class="regular-article">
					<div class="article-text">
						<h2>News title</h2>
						<p>Viverra sagittis varius fermentum sollicitudin inceptos, nisl enim. Augue molestie ullamcorper orci, nibh sociosqu habitant praesent tempus ipsum pede. Sodales magnis lacinia sociis elementum. Accumsan Porta cubilia etiam velit. Dis auctor amet. Duis nibh euismod nascetur nulla lacinia. Pretium ligula mi ullamcorper conubia, egestas.</p>
						<p>4 veckor sedan av <strong>Carl Spinder</strong></p>
						<p>Kategorier: <strong>Träning, Hälsa</strong></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
