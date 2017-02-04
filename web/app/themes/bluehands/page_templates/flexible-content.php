<?php
//Template Name: Flexible content

while (have_posts()) : the_post();
get_template_part("templates/banner-page");
get_template_part("templates/flexible-content");

endwhile; ?>