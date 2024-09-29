<?php $post_type = get_post_type_object('news'); ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main archive c-global-container c-global-container--sub">
  <section class="l-main__hero">
    <div class="l-main__hero__img c-img--full" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/main/mainvisual-pc@2x.jpg') ?>')"></div>
    <div class="l-main__hero__title p-hero-title">
      <h2 class="p-hero-title__main p-hero-title__main--archive"><?php echo esc_html($post_type->name); ?>:</h2>
      <span class="p-hero-title__sub">すべての記事(<?php echo wp_count_posts('news')->publish; ?>件)</span>
    </div>
  </section>
  <?php if (have_posts()) : ?>
    <section class="l-main__content c-archive-container">
      <h2 class="p-archive-content__title">
      <?php echo esc_html($post_type->label); ?>
      </h2>
      <p class="p-archive-content__desc">
        <?php echo esc_html($post_type->description); ?>
      </p>
    </section>
    <section class="l-main__products">
      <?php while (have_posts()) : the_post(); ?>
        <div class="p-taxonomy-card">
          <div class="p-taxonomy-card__img" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/others/no_image.jpg') ?>')"></div>
          <div class="p-taxonomy-card__content c-taxonomy-card-container">
            <?php get_template_part('parts/new'); ?>
            <h3 class="p-taxonomy-card__content__title"><?php echo the_title(); ?></h3>
            <?php
            $custom_categories = get_the_terms(get_the_ID(), 'news_category');
            if ($custom_categories) {
              foreach ($custom_categories as $category) {
                $category_link = get_term_link($category);
                if (!is_wp_error($category_link)) {
                  echo '<span class="p-taxonomy-card__content__category">';
                  echo '<a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a>';
                  echo '</span>';
                }
              }
            }
            ?>
            </br>
            <?php
            $custom_tags = get_the_terms(get_the_ID(), 'news_tag');
            if ($custom_tags) {
              foreach ($custom_tags as $tag) {
                $tag_link = get_term_link($tag);
                if (!is_wp_error($category_link)) {
                  echo '<span class="p-taxonomy-card__content__tag">';
                  echo '<a href="' . esc_url($tag_link) . '">' . esc_html($tag->name) . '</a>';
                  echo '</span>';
                }
              }
            }
            ?>
            <p class="p-taxonomy-card__content__desc"><?php echo esc_html(get_field('description')) ?></p>
            <a href="<?php echo esc_url($post->guid) ?>" class="p-taxonomy-card__content__btn">詳しく見る</a>
          </div>
        </div>
      <?php endwhile; ?>
      <?php if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
      } ?>
    <?php else : ?>
    </section>
      <section class="l-main__alert">
        <span class="p-alert">現在開発中です。</span>
    </section>
  <?php endif;
  wp_reset_query(); ?>

</main>
<?php get_footer(); ?>