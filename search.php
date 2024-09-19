<?php
$imgPath = get_template_directory_uri() . '/images/';
global $search_paged;
global $search_query;
global $get_query;

$search_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$get_query = get_search_query();
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3, // 1ページに表示する投稿数
  'paged' => $search_paged,
  's' => $get_query
);

$search_query = new WP_Query($args);

?>
<?php get_template_part('parts/header'); ?>
<?php get_template_part('parts/sidebar'); ?>

<main class="l-main archive c-global-container c-global-container--sub">
  <section class="l-main__hero">
    <div class="l-main__hero__img c-img--full" style="background-image: url('<?php echo esc_url($imgPath) ?>main/page-title_shop@2x.jpg')"></div>
    <div class="l-main__hero__title p-hero-title">
      <h2 class="p-hero-title__main p-hero-title__main--archive">Search:</h2>
      <span class="p-hero-title__sub"><?php the_search_query(true); ?></span>
    </div>
  </section>
  <?php if ($search_query->have_posts()) : ?>
    <section class="l-main__content c-archive-container">
      <h2 class="p-archive-content__title">小見出しが入ります</h2>
      <p class="p-archive-content__desc">
        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      </p>
    </section>
    <section class="l-main__products">
      <?php foreach ($search_query->posts as $post) : ?>
        <?php wp_link_pages(); ?>
        <div class="p-product-card">
          <div class="p-product-card__img" style="background-image: url('<?php echo esc_url(get_field('hero_img', $post->ID)) ?>')"></div>
          <div class="p-product-card__content c-product-card-container">
            <h3 class="p-product-card__content__name"><?php echo esc_html($post->post_title) ?></h3>
            <h4 class="p-product-card__content__title"><?php echo esc_html(get_field('heading', $post->ID)) ?></h4>
            <p class="p-product-card__content__desc">
              <?php echo esc_html(get_field('description', $post->ID)) ?>
            </p>
            <a href="<?php echo esc_url($post->guid) ?>" class="p-product-card__content__btn p-detail-btn">詳しく見る</a>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else : ?>
    </section>
    <section class="l-main__alert">
      <span class=""><?php the_search_query(true); ?>に一致する検索結果はありませんでした。</span>
    </section>
  <?php endif;
  wp_reset_query(); ?>
  <?php get_template_part('parts/pagination'); ?>
</main>
<?php get_template_part('parts/footer'); ?>