<div class="<?php echo flex_content_section_class(get_row_layout(), get_sub_field('style'), get_sub_field('section_class')); ?>">
	<span id="tidigare-kunder"></span>
	<div class="row">
		<div class="columns">
			<?php the_sub_field('reviews_text') ?>
		</div>
	</div>
	<?php if( have_rows('quotes') ): ?>
	<div class="row">
		<div class="columns medium-12 large-10 medium-centered">

			<?php 
			while( have_rows('quotes') ): the_row();
				$name = get_sub_field('author');
				$quote = get_sub_field('quote');
				$image = get_sub_field('image');
			?>
			<div class="quote">
				<div class="media-object stack-for-small">
				  <div class="media-object-section middle">
					<div class="img-container" style="background-image: url(<?php echo $image['url']?>)"></div>
				  </div>
				  <div class="media-object-section middle">
				    <?php echo $quote ?>
					<div class="author"><?php echo $name ?></div>
				  </div>
				</div>
			</div>

			<?php endwhile; ?>
		</div>
	</div>
	<?php endif ?>
</div>