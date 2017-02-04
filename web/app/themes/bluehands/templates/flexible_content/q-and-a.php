<div class="<?php echo flex_content_section_class(get_row_layout(), get_sub_field('style'), get_sub_field('section_class')); ?>">
	<div class="row">
		<div class="columns large-6 medium-8 small-centered">

			<div class="intro"><?php the_sub_field('q_and_a_text') ?></div>
		</div>
	</div>
	<?php if( have_rows('questions_and_answers') ): ?>
	<div class="row">
		<div class="columns large-8 medium-10 medium-centered">

		<?php while( have_rows('questions_and_answers') ): the_row();
			$question = get_sub_field('question');
			$answer = get_sub_field('answer');
		?>
			<div class="q-a">
				<h4 class="question"><?php echo $question ?></h4>
				<div class="answer"><?php echo $answer ?></div>
				<i class="marker fa fa-chevron-down show-for-medium"></i>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
	<?php endif ?>
</div>