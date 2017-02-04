<?php get_template_part('templates/banner-page') ?>
<?php 
//Makes sure needed variables are set before loading the sidebar
if(isset($highest_parent)): ?>
<div class="sidebar-section">
    <div class="row collapse">
      
      <div class="large-4 columns">
        <div class="sidebar-content">
          
          <div class="hide-for-large">
            <div class="mobile-sidebar-toggle">
              <a href="#">Överblick</a>
              <i class="fa fa-sort-desc fa-2x"></i>
              <div class="mobile-sidebar">
                <ul>
                  <li><a href="<?= get_permalink($highest_parent) ?>"><?= get_the_title($highest_parent) ?></a>
                    <ul>
                      <?php wp_list_pages(array(
                        'child_of' => $highest_parent,
                        'title_li' => ''
                        )); ?>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="show-for-large">
            <h3><a href="<?= get_permalink($highest_parent) ?>"><?= get_the_title($highest_parent) ?></a></h3>
            <ul>
              <?php wp_list_pages(array(
                'child_of' => $highest_parent,
                'title_li' => ''
              )); ?>
            </ul>
          </div>

        </div>
      </div>

    <div class="large-8 columns">
      <div class="main-wrap">
        <div class="row">
          <div class="columns">
            <div class="main-content">
              <?php get_template_part('templates/content', 'page') ?>
            </div>
          </div>
        </div>
        <?php /* todo: ta bort?
        <div class="row collapse">
          <div class="columns">
            <?php get_template_part('templates/author-bio')?>
          </div>
        </div>
        */ ?>
      </div>
    </div>

  </div>
</div>
<?php endif; ?>