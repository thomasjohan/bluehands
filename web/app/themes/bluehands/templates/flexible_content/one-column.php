<?php 
	$size = get_sub_field('size');
	switch ($size) {
		case 'xsmall':
			$column_width = 'large-4 medium-6';
			break;
		case 'small':
			$column_width = 'large-6 medium-8';
			break;
		case 'medium':
			$column_width = 'large-8 medium-10';
			break;
		case 'large':
			$column_width = 'large-10 medium-12';
			break;
		case 'full':
			$column_width = 'large-12 medium-12';
			break;
		default:
			$column_width = 'large-8 medium-10';
			break;
	}
 ?>
<div class="<?php echo flex_content_section_class(get_row_layout(), get_sub_field('style'), get_sub_field('section_class')); ?>">
	<div class="row <?php echo get_sub_field('full_width') ? 'expanded' : null ?>">
		<div class="columns small-centered <?php echo $column_width ?>">
			<div class="section-content">
				<?php the_sub_field('content') ?>
			</div>
		</div>
	</div>
</div>