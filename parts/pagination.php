<?php
global $archive_paged;
global $archive_query;
global $search_paged;
global $search_query;

if (is_archive()) {
  $paged = $archive_paged;
  $the_query = $archive_query;
} elseif (is_search()) {
  $paged = $search_paged;
  $the_query = $search_query;
}
?>
<?php if ($the_query->have_posts()) : ?>
  <section class="l-main__pagenation p-pagenation pagination">
    <span class="p-pagenation__count u-sp-no-display">page <?php echo esc_html($paged); ?>/<?php echo $the_query->max_num_pages; ?></span>
    <?php
    if ($the_query->max_num_pages > 1) {
      get_option('permalink_structure') ? $format = 'page/%#%/' : $format = '?paged=%#%';
    ?>
    <?php
      echo paginate_links(array(
        'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'format' => 'page/%#%',
        'mid_size' => 1,
        'prev_next' => true,
        'prev_text' => '<span class="material-symbols-outlined p-arrow u-rotate-reverse"> double_arrow </span><span class="p-pre">前へ</span>',
        'next_text' => '<span class="p-next">次へ</span><span class="material-symbols-outlined p-arrow"> double_arrow </span>',
        'current' => max(1, get_query_var('paged')),
        'total' => $the_query->max_num_pages,
        'type' => 'list',
        is_search() ? "'add_args' => array('s' => get_query_var('s'))" : '',

      ));
    }
    ?>
  </section>
<?php endif; ?>