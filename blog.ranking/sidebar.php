<aside id="sidebar">
  <section class="author">
    <!-- <img src="<?php echo esc_url(get_theme_file_uri('img/sidebar/author.jpg')); ?>" alt="テキストテキストテキスト"> -->
    <img src="<?php echo esc_url(get_theme_file_uri('img/common/saidbar.webp')); ?>" alt="テキストテキストテキスト">
  </section>

  <?php get_search_form(); ?>

  <section class="archive">
    <?php dynamic_sidebar('sidebar'); ?>
  </section>
</aside>

