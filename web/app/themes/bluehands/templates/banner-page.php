<?php 
$banner['show'] = get_field('show_banner');

if($banner['show'] == true):

	$banner['img_url'] = get_field('banner_bg_image');
	$banner['color'] = get_field('banner_bg_color');
	$banner['divider_image'] = get_field('divider_image');
	$banner['class'] ='';

	$banner['style'] = '';
	if($banner['img_url'] && $banner['color'] ) {
		$banner['style'] = 	'background-color: ' . $banner['color'] . ';' 
							. 'background-image: url('.$banner['img_url'].');';
	} elseif($banner['img_url']) {
	 	$banner['style'] ='background-image: url('.$banner['img_url'].');';
	} elseif($banner['color']) {
		$banner['style'] = 	'background-color: ' . $banner['color'] . ';';
	}

	if(get_field('transparent_header')) {
		$banner['class'] .= 'transparent-header ';
	}
	if($banner['divider_image']) {
		$banner['class'] .= 'with-divider-img ';
	}
 ?>
<div class="page-banner <?= $banner['class'] ?>" style="<?= $banner['style'] ?>">
	<div class="banner-content">
		<div class="row">
			<div class="columns text-center">
					<h1><?php the_field('banner_content') ?></h1>
			</div>
		</div>
	</div>
	<?php if($banner['divider_image']): ?>
		<img class="divider-image" src="<?php echo $banner['divider_image'] ?>">
	<?php endif; ?>
</div>
<?php endif; ?>
