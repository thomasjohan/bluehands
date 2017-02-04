<?php 
$image_position = get_sub_field('image_position');
$image = get_sub_field('image');

$div_style = "background-image: url('" . get_sub_field('image') . "'); ";
$div_style .= "background-size: " . get_sub_field('background_size') . "; ";
$div_style .= "min-height: " . get_sub_field('min_height') . "px; ";


?>


<div class="image-background" style="<?= $div_style ?>">
</div>

