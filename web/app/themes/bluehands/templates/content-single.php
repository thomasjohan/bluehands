<div class="single-blog-post">

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/banner-page') ?>
  <article <?php post_class(); ?>>
    <div class="row">
      <div class="medium-10 large-8 medium-centered columns">
        <header class="text-center">
          <p class="text-center"><?php printf(__('Published %s ago.','webnerds'), human_time_diff(get_the_date('U'))); ?></p>
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </article>

  <div class="row collapse">
    <div class="medium-10 large-8 columns medium-centered">
      <?php get_template_part('templates/author-bio')?>
    </div>
  </div>

  <div class="navigation">
    <div class="row">
      <div class="columns medium-10 large-8 medium-centered">
        <div class="columns small-4"><?php previous_post_link('%link','<i class="fa fa-chevron-left"></i>'); ?>&nbsp;</div>
        <div class="columns small-4 text-center">
          <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>"><?php _e('Back to list') ?></a>
        </div>
        <div class="columns small-4 text-right">&nbsp;<?php next_post_link('%link','<i class="fa fa-chevron-right"></i>'); ?></div>
      </div>
    </div>
  </div>

<?php endwhile; ?>

</div>
