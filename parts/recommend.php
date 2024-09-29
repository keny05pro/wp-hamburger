<section class="l-main__recommend">
  <?php if (!empty(get_field('recommend_title'))): ?>
    <h2 class="p-recommend__title"><i class="fa-solid fa-star"></i>おすすめ情報</h2>
    <?php if (!empty(get_field('recommend_link'))): ?>
      <p class="p-recommend__desc">
        <a href=<?php echo esc_html(get_field('recommend_link')) ?>><?php echo esc_html(get_field('recommend_title')) ?></a>
      </p>
    <?php else: ?>
      <p class="p-recommend__desc"><?php echo esc_html(get_field('recommend_title')) ?></p>
    <?php endif; ?>
  <?php else: ?>
    <h2 class="p-recommend__title"><a href="#">ブログのトップページへ</a></h2>
  <?php endif; ?>
</section>