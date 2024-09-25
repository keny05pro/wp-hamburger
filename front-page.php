<?php

include_once(ABSPATH . 'wp-admin/includes/plugin.php');

$firstService_img = isset(get_field('first_service')['img']) ? get_field('first_service')['img'] : '';
$firstService_title = isset(get_field('first_service')['title']) ? get_field('first_service')['title'] : '';
$firstService_first_content_title = isset(get_field('first_service')['first_content']['title']) ? get_field('first_service')['first_content']['title'] : '';
$firstService_first_content_desc = isset(get_field('first_service')['first_content']['desc']) ? get_field('first_service')['first_content']['desc'] : '';
$firstService_second_content_title = isset(get_field('first_service')['second_content']['title']) ? get_field('first_service')['second_content']['title'] : '';
$firstService_second_content_desc = isset(get_field('first_service')['second_content']['desc']) ? get_field('first_service')['second_content']['desc'] : '';

$secondService_img = isset(get_field('second_service')['img']) ? get_field('second_service')['img'] : '';
$secondService_title = isset(get_field('second_service')['title']) ? get_field('second_service')['title'] : '';
$secondService_first_content_title = isset(get_field('second_service')['first_content']['title']) ? get_field('second_service')['first_content']['title'] : '';
$secondService_first_content_desc = isset(get_field('second_service')['first_content']['desc']) ? get_field('second_service')['first_content']['desc'] : '';
$secondService_second_content_title = isset(get_field('second_service')['second_content']['title']) ? get_field('second_service')['second_content']['title'] : '';
$secondService_second_content_desc = isset(get_field('second_service')['second_content']['desc']) ? get_field('second_service')['second_content']['desc'] : '';

$info_title = isset(get_field('info')['title']) ? get_field('info')['title'] : '';
$info_desc = isset(get_field('info')['desc']) ? get_field('info')['desc'] : '';
?>

<?php get_header(); ?>
<?php get_sidebar (); ?>
<?php if (!is_plugin_active('advanced-custom-fields/acf.php')) :
  echo 'ACF プラグインを有効にしてください。';
else :
?>
  <main class="l-main front-page c-global-container">
    <section class="l-main__hero">
      <div class="l-main__hero__img c-img--full" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/main/mainvisual-pc@2x.jpg') ?>')"></div>
      <div class="l-main__hero__title p-hero-title">
        <h2 class="p-hero-title__main"><?php the_title() ?></h2>
      </div>
    </section>
    <section class="l-main__service c-service-container">
      <a href="/about" class="p-service-card c-img c-service-card-container" style="background-image: url('<?php echo esc_url($firstService_img) ?>')">
        <h3 class="p-service-card__title"><?php echo esc_html($firstService_title); ?></h3>
        <div class="p-service-card__item c-inner-card-container u-mt-auto u-mb-16">
          <h4 class="p-service-card__item__title"><?php echo esc_html($firstService_first_content_title); ?></h4>
          <p class="p-service-card__item__desc">
            <?php echo esc_html($firstService_first_content_desc); ?>
          </p>
        </div>
        <div class="p-service-card__item c-inner-card-container">
          <h4 class="p-service-card__item__title"><?php echo esc_html($firstService_second_content_title); ?></h4>
          <p class="p-service-card__item__desc">
            <?php echo esc_html($firstService_second_content_desc); ?>
          </p>
        </div>
      </a>
      <a href="/about" class="p-service-card c-img c-service-card-container" style="background-image: url('<?php echo esc_url($secondService_img) ?>')">
        <h3 class="p-service-card__title"><?php echo esc_html($secondService_title); ?></h3>
        <div class="p-service-card__item c-inner-card-container u-mt-auto u-mb-16">
          <h4 class="p-service-card__item__title"><?php echo esc_html($secondService_first_content_title); ?></h4>
          <p class="p-service-card__item__desc">
            <?php echo esc_html($secondService_first_content_desc); ?>
          </p>
        </div>
        <div class="p-service-card__item c-inner-card-container">
          <h4 class="p-service-card__item__title"><?php echo esc_html($secondService_second_content_title); ?></h4>
          <p class="p-service-card__item__desc">
            <?php echo esc_html($secondService_second_content_desc); ?>
          </p>
        </div>
      </a>
    </section>
    <section class="l-main__info">
      <div class="p-info-layer">
        <div class="p-info-layer__background"></div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12962.074175179068!2d139.75651441351326!3d35.68885517363258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1723672826554!5m2!1sja!2sjp"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="p-info-layer__map"></iframe>
      </div>
      <div class="p-info-card c-info-card-container">
        <h3 class="p-info-card__title"><?php echo esc_html($info_title); ?></h3>
        <div class="p-info-card__desc">
          <?php echo esc_html($info_desc); ?> </div>
      </div>
    </section>
  </main>
<?php endif; ?>
<?php get_footer (); ?>