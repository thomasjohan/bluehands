<?php

switch (get_sub_field('columns')) {
	case '2':
		$grid_item_class = 'medium-6';
		break;
	case '3':
		$grid_item_class = 'medium-4';
		break;
	case '4':
		$grid_item_class = 'medium-3';
		break;
	default:
		$grid_item_class = 'medium-4';
		break;
}
?>

<div class="<?php echo flex_content_section_class(get_row_layout(), get_sub_field('style'), get_sub_field('section_class')); ?>">

	<div class="row">
		<div class="columns large-8 medium-10 medium-centered">
			<div class="intro">
				<?php the_sub_field('intro'); ?>		
			</div>
		</div>
	</div>

	<div class="row <?php echo get_sub_field('full_width') ? 'expanded' : null ?>" data-equalizer data-equalize-by-row="true" data-equalize-on="medium">
		<?php while( have_rows('grid_items') ): the_row(); 
			$image = get_sub_field('image');
		?>
			<div class="columns <?php echo $grid_item_class ?>">
				<div class="grid-item clearfix" data-equalizer-watch>
					<img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
					<?php the_sub_field('content') ?>
					<?php if(!empty(get_sub_field('link'))): ?>
						<a class="link" href="<?php the_sub_field('link') ?>"></a>
					<?php endif ?>
				</div>
			</div>
		<?php endwhile; ?>
	</div>

</div>