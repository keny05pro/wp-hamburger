<?php

$current_category = get_queried_object();

//カテゴリー編集画面で追加した項目
$t_id = $current_category->term_id;
$cat_meta = get_option("cat_$t_id");

global $archive_paged;
global $archive_query;

$archive_paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;

$args = array(
  'category_name' => $current_category->slug,
  'post_status'   => 'publish',
  'paged'          => $archive_paged,
  'posts_per_page' => 3,
);

$archive_query = new WP_Query($args);

?>

<?php get_header(); ?>
<?php get_sidebar (); ?>

<main class="l-main archive c-global-container c-global-container--sub">
  <section class="l-main__hero">
    <div class="l-main__hero__img c-img--full" style="background-image: url('<?php if (function_exists('z_taxonomy_image_url')) echo esc_url(z_taxonomy_image_url()); ?>')"></div>
    <div class="l-main__hero__title p-hero-title">
      <h2 class="p-hero-title__main p-hero-title__main--archive">Menu:</h2>
      <span class="p-hero-title__sub"><?php echo esc_html($current_category->name); ?></span>
    </div>
  </section>
  <?php if ($archive_query->have_posts()) : ?>
  <section class="l-main__content c-archive-container">
    <h2 class="p-archive-content__title"><?php echo is_array($cat_meta) && isset($cat_meta['heading']) ? esc_html($cat_meta['heading']) : ''; ?></h2>
    <p class="p-archive-content__desc">
      <?php echo esc_html($current_category->category_description); ?>
    </p>
  </section>
    <section class="l-main__products">
      <?php foreach ($archive_query->posts as $post) : ?>
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
      <section class="l-main__alert">
      <span class="p-alert">現在開発中です。</span>
    </section>
    </section>
  <?php endif;
  wp_reset_query(); ?>
  <?php get_template_part('parts/pagination'); ?>
</main>
<?php get_footer (); ?>