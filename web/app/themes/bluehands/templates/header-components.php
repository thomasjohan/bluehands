<!-- Goes directly under site-header -->

  <div class="row">
    <div class="small-6 medium-9 columns">
      <div class="hide-for-large action-nav">
        <ul >
        <?php if(get_field('header_has_cta', 'option')): ?>
          <li class="show-for-medium"><a href="<?php the_field('header_cta_link', 'option') ?>" class="button small"><?php the_field('header_cta_title', 'option') ?></a></li>
        <?php endif; ?>
        <li>
          &nbsp;
        </li>
        <li>
          <div class="mobile-nav-toggle <?= $menu_toggle_class ?>">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </li>
        </ul>
      </div>
      <div class="show-for-large">
        <div class="web-menu">
          <ul>

            <?php 
            if($quick_menu){
              wp_nav_menu( array( 
                'menu' => $quick_menu,
                'container' => '',
                'items_wrap'    => '%3$s',
                'depth'=> 2
              ) ); 
            }
            if(get_field('header_has_cta', 'option')): ?>
              <li><a href="<?php the_field('header_cta_link', 'option') ?>" class="button small cta"><?php the_field('header_cta_title', 'option') ?></a></li>
            <?php endif; ?>
              <li class="mobile-nav-toggle <?= $menu_toggle_class ?>">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


<div id="mobile-nav">
  <div class="row collapse">
    <div class="columns text-center">
    <?php if($has_expanded_menu): ?>
      <ul class="navigation">
        <?php 
        foreach($expanded_menu as $group): 
          if($group['title'] != '') {
            echo "<li class=\"group-title\">{$group['title']}</li>";
          }
          wp_nav_menu( array( 
            'menu' => $group['menu'],
            'container' => '',
            'items_wrap'    => '%3$s',
          ) );
        endforeach;
        ?>
        <?php if(get_field('header_has_cta', 'option')): ?>
          <li class="hide-for-medium">
          <a href="<?php the_field('header_cta_link', 'option') ?>" class="button cta"><?php the_field('header_cta_title', 'option') ?></a>
        </li>
      <?php endif; ?>
      </ul>
    <?php endif; ?>
      

    </div>
  </div>
</div>