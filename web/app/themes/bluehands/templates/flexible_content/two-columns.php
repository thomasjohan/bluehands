<div class="<?php echo flex_content_section_class(get_row_layout(), get_sub_field('style'), get_sub_field('section_class')); ?>">
	<div data-equalizer data-equalize-on="medium" class="row <?php echo get_sub_field('full_width') ? 'expanded' : null ?>">
		<div class="columns medium-6 left-column" data-equalizer-watch>
			<?php the_sub_field('content_left') ?>
		</div>
		<div class="columns medium-6 right-column" data-equalizer-watch>
			<?php the_sub_field('content_right') ?>
		</div>
	</div>
</div>