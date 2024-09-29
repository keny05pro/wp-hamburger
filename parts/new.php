<?php


// 投稿の日付
$post_date = get_the_date('Y/m/d H:i:s');

// 現在の日付
$current_date = wp_date('Y/m/d H:i:s');

// 日付を DateTime オブジェクトに変換
$post_datetime = new DateTime($post_date);
$current_datetime = new DateTime($current_date);

// 日数の差分を計算
$date_diff = $current_datetime->diff($post_datetime);

?>

<?php if ($date_diff->days <= 14) : ?>
  <span class="p-product-card__content__label">NEW</span>
<?php endif; ?>