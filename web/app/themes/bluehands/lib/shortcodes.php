<?php
namespace Webnerds\Shortcodes;

function checkbox ($atts, $content = null) {
    ob_start();
    ?> 
    <div class="media-object checkbox">
      <div class="media-object-section middle">
        <i class="fa fa-check"></i>
      </div>
      <div class="media-object-section">
        <?php echo $content ?>
      </div>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode( 'checkbox', __NAMESPACE__ .'\\checkbox' );

function site_info( $atts ) {
	$site_info_link = get_field('site_info', 'option');
    $a = shortcode_atts( array(
        'label' => __('Site info', 'webnerds'),
    ), $atts );

    return "<a href=\"{$site_info_link}\">{$a['label']}</a>";
}
add_shortcode( 'siteinfo', __NAMESPACE__ .'\\site_info' );

function button( $atts ) {
    $a = shortcode_atts( array(
        'label' => __('Link', 'webnerds'),
        'classes' => 'button',
        'href' => '#'
    ), $atts );

    return "<a href=\"{$a['href']}\" class=\"{$a['classes']}\">{$a['label']}</a>";
}
add_shortcode( 'button', __NAMESPACE__ .'\\button' );