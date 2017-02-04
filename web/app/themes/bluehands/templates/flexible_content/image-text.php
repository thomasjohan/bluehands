<?php 
$image_position = get_sub_field('image_position');
$image = get_sub_field('image');
$image_size = get_sub_field("image_size") ? get_sub_field("image_size") : 'large';
$padded_image = get_sub_field('padded_image')? "padded-image":'';

$bg_color = get_sub_field('bg_color');
?>

<?php if($image_position == 'left'): ?>
<div class="<?php echo flex_content_section_class(get_row_layout(), get_sub_field('style'), get_sub_field('section_class')); ?> image-left">
	<div class="row <?php echo get_sub_field('full_width') ? 'expanded' : null ?>">
		<div class="columns large-12 large-centered">
			<div class="section-content">
				<div class="media <?php echo $image_size ?>">
					<img src="<?= $image['url']?>" alt="<?= $image['url']?>">
				</div>
				<div class="text">
					<?php the_sub_field('content'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php elseif($image_position == 'right'): ?>
<div class="<?php echo flex_content_section_class(get_row_layout(), get_sub_field('style'), get_sub_field('section_class')); ?> image-right" <?php echo $bg_color ? "style=\"background-color:{$bg_color};\"" : null ?>>
	<div class="row <?php echo get_sub_field('full_width') ? 'expanded' : null ?>">
		<div class="columns large-12 large-centered">
			<div class="section-content">
				<div class="media hide-for-medium">
					<img src="<?= $image['url']?>" alt="<?= $image['url']?>">
				</div>
				<div class="text">
					<?php the_sub_field('content'); ?>
				</div>
				<div class="media show-for-medium <?php echo $image_size ?>">
					<img src="<?= $image['url']?>" alt="<?= $image['url']?>">
				</div>
			</div>
		</div>
	</div>
</div>
<?php elseif($image_position == 'center'): ?>
todo: image-center not build yet.
<?php endif; ?>

