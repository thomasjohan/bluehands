<?php 

// Template Name: Start

 ?>

<div class="start">

	<div class="banner section">
		<div class="row">
			<div class="columns">
				<h3><?php the_field('banner_heading') ?></h3>
				<p><?php the_field('banner_text') ?></p>
			</div>
		</div>
	</div>

	

	<div class="services section" id="services">
		
		<div class="row">
			<div class="columns">
				<h1><?php the_field('services_heading') ?></h1>
			</div>
		</div>

		<div class="expanded collapse row">

			<?php

			if( have_rows('service') ):

			    while ( have_rows('service') ) : the_row(); ?>

			  		<div class="columns medium-4">
				  		<a href="">
					  		<div class="service-wrap" style="background-image: url(<?php the_sub_field('image') ?>); ">
					        <h5><?php the_sub_field('heading'); ?></h5>
					        <p><?php the_sub_field('text'); ?></p>
				        </div>
			        </a>
			      </div>

			    <?php 

			    endwhile;

			else :


			endif;

			?>

			
		</div>
	</div>

	<div class="clients section" id="clients">
		<div class="row">
			<div class="columns">
				<h1><?php the_field('clients_heading') ?></h1>
				<p><?php the_field('clients_text') ?></p>
			</div>
		</div>
	</div>

	<div class="about section" id="about">
		<div class="row">
			<div class="columns">
				<h1><?php the_field('about_heading') ?></h1>
				<p><?php the_field('about_text') ?></p>
			</div>
		</div>
	</div>

	<!-- <div class="social-feed section" id="social-feed">
		<div class="row">
			<div class="columns">
				
			</div>
		</div>
	</div> -->

	<div class="contact section" id="contact">
		<div class="row">
			<div class="columns">
				<div class="message">
				<h1>message.</h1>
				<p><?php the_field('contact_text') ?></p>
					<?php the_field('contact_form') ?>
				</div>
				<div class="direct-contact">
					<h1>direct contact.</h1>
					<p><?php the_field('contact_info') ?></p>
				</div>
			</div>
		</div>
	</div>

</div>