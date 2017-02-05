<?php 
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$youtube = get_field('youtube', 'option');
// $light_logo = get_field('light_logo', 'option');
$quick_menu = get_field('quick_menu', 'option');
?>

<footer id="site-footer">
<!-- 	<div class="contact">
		<div class="row">
			<div class="columns large-10 large-centered text-center">
				<h2><?php _e('Contact Us','webnerds')?></h2>
				<br><br>
				<div class="row">
					<div class="columns medium-6 text-center ">
						<p class="title-intro"><?php _e('Email','webnerds')?></p>
						<?php the_field('company_email', 'option'); ?><br><br>
						<p class="title-intro"><?php _e('Phone','webnerds')?></p>
						<?php the_field('company_phone', 'option'); ?><br><br>
		
					</div>
					<div class="columns medium-6 text-center ">
						<p class="title-intro"><?php _e('Address','webnerds')?></p>
						<?php the_field('company_address', 'option'); ?><br><br>
						<p class="title-intro"><?php _e('The Rest','webnerds')?></p>
						<?php echo get_field('company_zip', 'option')." ".get_field('company_city', 'option') ?> <br><br>
					</div>
				</div>
			</div>
		</div>
	</div> -->

		<div class="row">
			<div class="columns small-9">
				<div class="static-menu">
          <div class="menu-wrap">
            <ul>
              <li><a href="#services">services.</a></li>
              <li><a href="#clients">clients.</a></li>
              <li><a href="#about">about.</a></li>
              <!-- <li><a href="#social-feed">social feed.</a></li> -->
              <li><a href="#contact">contact.</a></li>
            </ul>
          </div>
        </div>
			</div>
			<div class="columns small-3">
				<div class="social-media">
					<?php if(!empty($facebook)): ?>
	  					<a href="<?= $facebook ?>"><i class="fa fa-facebook"></i></a>
	  				<?php endif; 
	  				if(!empty($instagram)): ?>
	  					<a href="<?= $instagram ?>"><i class="fa fa-instagram"></i></a>
	  				<?php endif;
	  				if(!empty($youtube)): ?>
	  					<a href="<?= $youtube ?>"><i class="fa fa-youtube-square"></i></a>
	  				<?php endif; ?>
  				</div>
			</div>
		</div>
	
</footer>
