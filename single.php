<?php
// echo('<pre>');
// var_dump($cat);
// echo('</pre>');

?>

<?php get_template_part('parts/header'); ?>
<?php get_template_part('parts/sidebar'); ?>
<?php wp_head(); ?>

<main class="l-main single c-global-container c-global-container--sub">
    <section class="l-main__hero">
        <div class="l-main__hero__img c-img--full" style="background-image: url('<?php echo get_field('hero_img') ?>')"></div>
        <div class="l-main__hero__title p-hero-title">
            <h2 class="p-hero-title__main p-hero-title__main--single"><?php the_title() ?></h2>
        </div>
    </section>
    <section class="l-main__heading">
        <div class="l-main__heading__content p-heading-content">
            <h2 class="p-heading-content__h2">見出しh2</h2>
            <p class="p-heading-content__desc">
                Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
            </p>
        </div>
        <h3 class="l-main__heading__h3 p-heading-content__h3">見出しh3</h3>
        <h4 class="l-main__heading__h4 p-heading-content__h4">見出しh4</h4>
        <h5 class="l-main__heading__h5 p-heading-content__h5">見出しh5</h5>
        <h6 class="l-main__heading__h6 p-heading-content__h6">見出しh6</h6>
    </section>
    <section class="l-main__quote">
        <figure class="p-quote c-quote-container">
            <blockquote class="p-quote__text">
                Blockquote
                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引
            </blockquote>
            <p class="p-quote__source">
                出典元： <cite><a href="">○○○○○○○○○○○○</a></cite>
            </p>
        </figure>
    </section>
    <section class="l-main__feature">
        <div class="p-feature">
            <img class="p-feature__topImg" src="../../images/main/mainvisual-pc.jpg" alt="" />
            <div class="p-feature__card p-media-card">
                <img class="p-media-card__img" src="../../images/main/mainvisual-pc.jpg" alt="" />
                <div class="p-media-card__desc p-media-card__text">
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                </div>
            </div>
            <div class="p-feature__card p-media-card u-flex-reverse">
                <img class="p-media-card__img" src="../../images/main/mainvisual-pc.jpg" alt="" />
                <div class="p-media-card__desc p-media-card__text">
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                </div>
            </div>
            <img class="p-feature__bottomImg" src="../../images/main/mainvisual-pc.jpg" alt="" />
        </div>
    </section>
    <section class="l-main__gallery">
        <ul class="l-main__gallery__list p-gallery">
            <li class="p-gallery__item c-img" style="background-image: url('../../images/main/mainvisual-pc.jpg')"></li>
            <li class="p-gallery__item c-img" style="background-image: url('../../images/main/mainvisual-pc.jpg')"></li>
            <li class="p-gallery__item c-img" style="background-image: url('../../images/main/mainvisual-pc.jpg')"></li>
            <li class="p-gallery__item c-img" style="background-image: url('../../images/main/mainvisual-pc.jpg')"></li>
            <li class="p-gallery__item c-img" style="background-image: url('../../images/main/mainvisual-pc.jpg')"></li>
            <li class="p-gallery__item c-img" style="background-image: url('../../images/main/mainvisual-pc.jpg')"></li>
            <li class="p-gallery__item c-img" style="background-image: url('../../images/main/mainvisual-pc.jpg')"></li>
        </ul>
    </section>
    <section class="l-main__list">
        <ul class="l-main__list__item p-list">
            <li class="p-list__item">1.リストリストリスト</li>
            <li class="p-list__item">
                2.リストリストリスト
                <ul class="p-list--inner">
                    <li class="p-list__item">1.リスト2リスト2リスト2</li>
                    <li class="p-list__item">2.リスト2リスト2リスト2</li>
                </ul>
            </li>
        </ul>
        <ul class="l-main__list__item p-list">
            <li class="p-list__item">1.リストリストリスト</li>
            <li class="p-list__item">2.リストリストリスト</li>
        </ul>
        <ul class="l-main__list__item p-list">
            <li class="p-list__item">リストリストリスト</li>
            <li class="p-list__item">
                リストリストリスト
                <ul class="p-list--inner">
                    <li class="p-list__item">リスト2リスト2リスト2</li>
                    <li class="p-list__item">リスト2リスト2リスト2</li>
                </ul>
            </li>
        </ul>
        <ul class="l-main__list__item p-list">
            <li class="p-list__item">リストリストリスト</li>
            <li class="p-list__item">リストリストリスト</li>
        </ul>
    </section>
    <section class="l-main__code">
        <div class="p-code">
            <pre class="p-code__pre">
              <code>
          &lt;html&gt;
              &lt;head&gt;
              &lt;/head&gt;
               &lt;body&gt;
              &lt;/body&gt;
          &lt;/html&gt;
              </code>
            </pre>
        </div>
    </section>
    <section class="l-main__table">
        <table class="p-table">
            <tbody>
                <tr>
                    <th>テーブル</th>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <th>テーブル</th>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <th>テーブル</th>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <th>テーブル</th>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <th>テーブル</th>
                    <td>テーブル</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="l-main__button">
        <button class="p-button">ボタン</button>
    </section>
    <section class="l-main__text">
        <span>boldboldboldboldboldboldbold</span>
    </section>
</main>
<?php wp_footer(); ?>
<?php get_template_part('parts/footer'); ?>