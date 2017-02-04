<?php 

// Template Name: Start

 ?>

<div class="start">

	<div class="banner-section">
		<div class="row">
			<div class="columns">
				<h2><?php the_field('banner_heading') ?></h2>
				<p><?php the_field('banner_text') ?></p>
			</div>
		</div>
	</div>

	<div class="services-section">
		<div class="row collapse">

			<?php

			if( have_rows('service') ):

			    while ( have_rows('service') ) : the_row(); ?>

			  		<div class="columns large-4">
				  		<div class="service-wrap" style="background-image: url(<?php the_sub_field('image') ?>); ">
				        <h3><?php the_sub_field('heading'); ?></h3>
				        <p><?php the_sub_field('text'); ?></p>
			        </div>
			      </div>

			    <?php 

			    endwhile;

			else :


			endif;

			?>

			
		</div>
	</div>

	<div class="clients-section">
		<div class="row">
			<div class="columns">
				<h1><?php the_field('clients_heading') ?></h1>
				<p><?php the_field('clients_text') ?></p>
			</div>
		</div>
	</div>

	<div class="about-section">
		<div class="row">
			<div class="columns">
				<h1><?php the_field('about_heading') ?></h1>
				<p><?php the_field('about_text') ?></p>
			</div>
		</div>
	</div>

	<div class="social-feed-section">
		<div class="row">
			<div class="columns">
				
			</div>
		</div>
	</div>

	<div class="contact">
		<div class="row">
			<div class="columns">
				<div class="message">
				<h1>message.</h1>
				<p><?php the_field('contact_text') ?></p>
					<?php the_field('contact_form') ?>
				</div>
				<div class="direct-contact">
					<h1>direct contact.</h1>
					<?php the_field('contact_info') ?>
				</div>
			</div>
		</div>
	</div>

</div>