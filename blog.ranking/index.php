<?php get_header(); ?>

<div id="container" class="wrapper">
  <main>
    <div class="ranking_image">
      <!-- 使い分け方がわからない↓ -->
      <img src="<?php echo esc_url(get_theme_file_uri('img/common/main.jpg'))?>" alt="みんなのブログランキング">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/main.jpg'); ?>" alt="みんなのブログランキング">
    </div>
    <p class="">みんなのブログランキング(みんブロ)では、独自に算出したみんブロスコアに基づいて登録サイトのランキングを決定しています。みんブロスコアは、ドメインの強さ(ドメインパワー)だけでなく、ドメイン取得日などの指標を組み合わせた独自アルゴリズムによって算出しています(毎週土曜日更新！)。</p>
    <div class="スライダー">

    </div>
    <h2>みんブロ総合ランキング</h2>
    <h2>
      <span class="ribon1">ランキングTOP3</span>
    </h2>
    <div class="top1"></div>
    <div class="top2"></div>
    <div class="top3"></div>
    <h2>
      <span class="ribon2">ランキング4~10位</span>
    </h2>
    <table id="ranking">
      <tbody></tbody>
    </table>
    <!-- <?php if(have_posts()): ?>
      <?php while(have_posts()):the_post(); ?>
        <?php
          $cat = get_the_category();
          $catname = $cat[0]->cat_name;
        ?>
        <article>
          <h2 class="article-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <ul class="meta">
            <li><?php the_time('Y/m/d'); ?></li>
            <li><?php echo $catname; ?></li>
          </ul>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <div class="text">
            <?php
              if (mb_strlen(strip_tags(get_the_content()), 'UTF-8') > 80) {
                $content = mb_substr(strip_tags(get_the_content()), 0, 80, 'UTF-8');
                echo $content . '…';
              } else {
                echo strip_tags(get_the_content());
              }
            ?>
          </div>
          <div class="readmore"><a href="<?php the_permalink(); ?>">READ MORE</a></div>
        </article>
      <?php endwhile; ?>
      <?php
        if (function_exists("pagination")) {
          pagination($wp_query->max_num_pages);
        }
      ?>
    <?php endif; ?> -->
    <?php get_search_form(); ?>
    <table class="banners">
      <tbody>
        <tr>
          <td><a href=""></a></td>
          <td><a href=""></a></td>
        </tr>
      </tbody>
    </table>
  </main>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>