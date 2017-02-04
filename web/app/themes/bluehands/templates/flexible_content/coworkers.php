<div class="<?php echo flex_content_section_class(get_row_layout(), get_sub_field('style'), get_sub_field('section_class')); ?>">
	<div class="row">
		<div class="columns">
			<?php the_sub_field('intro') ?>
		</div>
	</div>
	<?php 
	$coworker_count = count(get_sub_field('coworkers')); 
	if( have_rows('coworkers') ): 
	?>
	<div class="row">
		<div class="columns">
			<div class="coworkers-list">
				<?php 
				while( have_rows('coworkers') ): the_row();
					$name = get_sub_field('name');
					$image = get_sub_field('image');
					$phone = get_sub_field('phone');
					$email = get_sub_field('email');
					$description = get_sub_field('description');
					$title = get_sub_field('title');
				?>
				<div class="columns large-4 <?php echo $coworker_count == 1 ? 'medium-centered' : null ?>">
					<div class="coworker">
						<div class="img-container" style="background-image: url(<?php echo $image['url']?>)"></div>
						<h4 class=name><?php echo $name ?></h4>
						<div class="title"><?php echo $title; ?></div>
						<ul class="contact-info">
							<li><?php echo $phone ?></li>
							<li><?php echo $email ?></li>
						</ul>
						
						<div class="description"><?php echo $description; ?></div>

					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<?php endif ?>
</div>