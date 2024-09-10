<?php
$firstService = get_field('first_service');
$secondService = get_field('second_service');
$info = get_field('info');
?>

<?php get_template_part('parts/header'); ?>
<?php get_template_part('parts/sidebar'); ?>

<main class="l-main front-page c-global-container">
  <section class="l-main__hero">
    <div class="l-main__hero__img c-img--full" style="background-image: url('<?php echo esc_url(get_field('hero_img')) ?>')"></div>
    <div class="l-main__hero__title p-hero-title">
      <h2 class="p-hero-title__main"><?php the_title() ?></h2>
    </div>
  </section>
  <section class="l-main__service c-service-container">
    <a href="" class="p-service-card c-img c-service-card-container" style="background-image: url('<?php echo esc_url($firstService['img']) ?>')">
      <h3 class="p-service-card__title"><?php echo esc_html($firstService['title']); ?></h3>
      <div class="p-service-card__item c-inner-card-container u-mt-auto u-mb-16">
        <h4 class="p-service-card__item__title"><?php echo esc_html($firstService['first_content']['title']); ?></h4>
        <p class="p-service-card__item__desc">
          <?php echo esc_html($firstService['first_content']['desc']); ?>
        </p>
      </div>
      <div class="p-service-card__item c-inner-card-container">
        <h4 class="p-service-card__item__title"><?php echo esc_html($firstService['second_content']['title']); ?></h4>
        <p class="p-service-card__item__desc">
          <?php echo esc_html($firstService['second_content']['desc']); ?>
        </p>
      </div>
    </a>
    <a href="" class="p-service-card c-img c-service-card-container" style="background-image: url('<?php echo esc_url($secondService['img']) ?>')">
      <h3 class="p-service-card__title"><?php echo esc_html($secondService['title']); ?></h3>
      <div class="p-service-card__item c-inner-card-container u-mt-auto u-mb-16">
        <h4 class="p-service-card__item__title"><?php echo esc_html($secondService['first_content']['title']); ?></h4>
        <p class="p-service-card__item__desc">
          <?php echo esc_html($secondService['first_content']['desc']); ?>
        </p>
      </div>
      <div class="p-service-card__item c-inner-card-container">
        <h4 class="p-service-card__item__title"><?php echo esc_html($secondService['second_content']['title']); ?></h4>
        <p class="p-service-card__item__desc">
          <?php echo esc_html($secondService['second_content']['desc']); ?>
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
      <h3 class="p-info-card__title"><?php echo esc_html($info['title']); ?></h3>
      <div class="p-info-card__desc">
        <?php echo esc_html($info['desc']); ?> </div>
    </div>
  </section>
</main>
<?php get_template_part('parts/footer'); ?>