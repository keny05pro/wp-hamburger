<?php get_header(); ?>
<?php get_sidebar (); ?>

<main class="l-main front-page">
  <section class="p-not-found">
    <div class="p-not-found__title">ページが見つかりません</div>
    <p class="p-not-found__desc">お探しのページは、移動または削除された可能性があります。</p>
    <a href="<?php echo home_url(); ?>">トップに戻る</a>
  </section>

</main>
<?php get_footer (); ?>
