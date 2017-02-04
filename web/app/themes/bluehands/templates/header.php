<?php 
$site_header_classes = ""; 
$logo = get_field('dark_logo', 'option');
$light_logo = get_field('light_logo', 'option');

$quick_menu = get_field('quick_menu', 'option');
$expanded_menu = get_field('expanded_menu', 'option');

$expanded_menu_show = get_field('expanded_menu_show', 'option');
$has_expanded_menu = is_array($expanded_menu) && (count($expanded_menu) > 0);

if(!$has_expanded_menu){
  $menu_toggle_class = "hide";
}elseif(in_array('desktop', $expanded_menu_show) &&  in_array('mobile', $expanded_menu_show)) {
  $menu_toggle_class = "";
}elseif(in_array('desktop', $expanded_menu_show)) {
  $menu_toggle_class = "show-for-large";
 }elseif(in_array('mobile', $expanded_menu_show)) {
  $menu_toggle_class = "hide-for-large";
 }else {
  $menu_toggle_class = "hide";
 }

if(get_field('transparent_header')) {
  $site_header_classes .= "dark-bg ";
}

?>
<header class="site-header <?= $site_header_classes ?>">
    
    <div class="row">
      <div class="small-9 columns">
        <div class="static-menu">
          <div class="menu-wrap">
            <ul>
              <li>clients.</li>
              <li>about.</li>
              <li>social feed.</li>
              <li>contact.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="small-3 columns">
          <h3 class="menu-logo">
            <a class="logo" href="<?php bloginfo('url') ?>" style="background-image: url('<?= $logo ?>');"><?php bloginfo('name') ?></a>
            <a class="logo-light" href="<?php bloginfo('url') ?>" style="background-image: url('<?php echo $light_logo; ?>');"><?php bloginfo('name') ?></a>
          </h3>
      </div>   
    </div>

</header>