<?php

// check if the flexible content field has rows of data
if( have_rows('flex_content') ):?>
<div class="flexible-content">
<?php
     // loop through the rows of data
    while ( have_rows('flex_content') ) : the_row();
        get_template_part("templates/flexible_content/". str_replace('_', '-', get_row_layout()));
    endwhile;
?>
</div>

<?php
else :

    // no layouts found

endif; ?>