<?php get_template_part('parts/header'); ?>
<?php get_template_part('parts/sidebar'); ?>
<?php wp_head(); ?>

<?php if (have_posts()) :
  while (have_posts()) : the_post(); ?>
    <main class="l-main page c-global-container c-global-container--sub">

      <section class="l-main__hero">
        <div class="l-main__hero__img c-img--full" style="background-image: url('<?php echo esc_html(get_field('hero_img')) ?>')"></div>
        <div class="l-main__hero__title p-hero-title">
          <h2 class="p-hero-title__main p-hero-title__main--page"><?php the_title() ?></h2>
        </div>
      </section>
      <?php if (!empty(get_field('heading')) || !empty(get_field('description'))): ?>
        <section class="l-main__heading">
          <div class="l-main__heading__content p-heading-content">
            <h2 class="p-heading-content__h2"><?php echo esc_html(get_field('heading')) ?></h2>
            <p class="p-heading-content__desc">
              <?php echo esc_html(get_field('description')) ?>
            </p>
          </div>
        </section>
      <?php endif; ?>
      <?php the_content(); ?>
    </main>
<?php endwhile;
endif;
?>
<?php wp_footer(); ?>
<?php get_template_part('parts/footer'); ?>