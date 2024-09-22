<?php
$imgPath = get_template_directory_uri() . '/assets/images/';
?>

<footer class="l-footer" style="background-image: url('<?php echo esc_url($imgPath) ?>footer/footer.png')">
  <div class="c-footer-container">
    <span><a href="">ショップ情報</a> | <a href="">ヒストリー</a></span>
    <small>Copyright: RaiseTech</small>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>