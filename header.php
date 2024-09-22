<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<?php wp_body_open(); ?>
<body <?php body_class( array('none') ); ?>>
  <div class="c-grid">
    <header id="header" class="l-header">
      <div class="l-header__menu">
        <span class="js-menu-btn">Menu</span>
      </div>
      <div class="l-header__title">
        <span class="p-main-title"><a href="<?php echo esc_url(home_url()); ?>">Hamburger</a></span>
      </div>
      <div class="l-header__form">
        <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="p-search">
          <input type="text" name="s" id="s" value="">
          <input type="submit" id="searchsubmit" value="検索">
        </form>
      </div>
    </header>