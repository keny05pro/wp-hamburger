<?php
// echo('<pre>');
// var_dump($cat);
// echo('</pre>');

?>

<?php get_template_part('parts/header'); ?>
<?php get_template_part('parts/sidebar'); ?>
<?php wp_head(); ?>

<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <main class="l-main single c-global-container c-global-container--sub">
            <section class="l-main__hero">
                <div class="l-main__hero__img c-img--full" style="background-image: url('<?php echo get_field('hero_img') ?>')"></div>
                <div class="l-main__hero__title p-hero-title">
                    <h2 class="p-hero-title__main p-hero-title__main--single"><?php the_title() ?></h2>
                </div>
            </section>
            <?php the_content(); ?> <!-- 投稿の内容を表示 -->
        </main>
<?php endwhile;
endif;
?>
<?php wp_footer(); ?>
<?php get_template_part('parts/footer'); ?>