<div class="p-sidebar-layer js-hamburger"></div>
<nav class="l-sidebar js-hamburger">
  <div class="p-menu">
    <div class="c-menu-container">
      <div class="p-hamburger js-hamburger-btn">
        <span></span>
      </div>
      <?php
      $parent_categories = get_categories(array(
        'orderby' => 'id',
        'hide_empty' => false,
        'parent'     => 0
      ));
      foreach ($parent_categories as $p_cat) :
      ?>
        <div class="p-menu__item">
          <span class="p-menu__item-title"><a href="<?php echo get_category_link($p_cat->cat_ID); ?>"><?php echo $p_cat->name; ?></a></span>
          <ul class="p-menu__list c-menu-list-container">
            <?php
            $child_categories = get_categories(array(
              'child_of'     => 1,
              'hide_empty' => false,
              'parent'     => $p_cat->term_id
            ));

            foreach ($child_categories as $c_cat) :
            ?>
              <li class="p-menu__list-item"><a href="<?php echo get_category_link($c_cat->cat_ID); ?>"><?php echo $c_cat->name; ?></a></li>

            <?php endforeach; ?>
          </ul>
        <?php endforeach; ?>
        </div>
    </div>
  </div>
</nav>