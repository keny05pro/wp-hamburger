<?php
/*
YARPP Template: Post Template
Description: A simple Post  example template that you can edit.
Author: ikedkeny
*/
?>

<?php
/*
Templating in YARPP enables developers to uber-customize their YARPP display using PHP and template tags.

The tags we use in YARPP templates are the same as the template tags used in any WordPress template. In fact, any WordPress template tag will work in the YARPP Loop. You can use these template tags to display the excerpt, the post date, the comment count, or even some custom metadata. In addition, template tags from other plugins will also work.

If you've ever had to tweak or build a WordPress theme before, you’ll immediately feel at home.

// Special template tags which only work within a YARPP Loop:

1. the_score()      // this will print the YARPP match score of that particular related post
2. get_the_score()      // or return the YARPP match score of that particular related post

Notes:
1. If you would like Pinterest not to save an image, add `data-pin-nopin="true"` to the img tag.

*/
?>

<h3>おすすめ商品</h3>
<?php if (have_posts()) : ?>
  <ul>
    <?php
    while (have_posts()) :
      the_post();
    ?>
      <div class="p-goods-card">
        <div class="p-goods-card__img">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('thumbnail'); ?>
          <?php else : ?>
            <img src=<?php echo get_template_directory_uri() . '/assets/images/others/no_image.jpg' ?> alt="Default Image">
          <?php endif; ?>
        </div>
        <div class="p-goods-card__content c-goods-card-container">
          <h3 class="p-goods-card__content__title"><?php the_title(); ?></h3>
          <p class="p-goods-card__content__desc">
            <?php echo get_the_excerpt(); ?>
          </p>
          <a href="<?php the_permalink(); ?>" class="p-goods-card__content__btn">詳しく見る</a>
        </div>
      </div>
    <?php endwhile; ?>
  </ul>
<?php else : ?>
  <p>No related posts.</p>
<?php endif; ?>