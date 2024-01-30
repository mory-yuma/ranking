<?php get_header(); ?>
<div class="mypage_img">
    <img src="<?php echo esc_url(get_theme_file_uri('img/common/mypage.jpg'))?>" alt="マイページ画像">
</div>
<div id="container" class="wrapper">
  <main>
  </main>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>