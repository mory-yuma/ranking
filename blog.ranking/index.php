<?php get_header(); ?>

<div id="container" class="wrapper">
  <main id="main">
    <div class="ranking_image">
      <!-- 使い分け方がわからない↓ -->
      <img src="<?php echo esc_url(get_theme_file_uri('img/common/main.jpg'))?>" alt="みんなのブログランキング">
    </div>
    <p class="setumei">みんなのブログランキング(みんブロ)では、独自に算出したみんブロスコアに基づいて登録サイトのランキングを決定しています。みんブロスコアは、
    <b class="bg-yellow">ドメインの強さ(ドメインパワー)だけでなく、ドメイン取得日などの指標を組み合わせた独自アルゴリズム</b>
      によって算出しています(毎週土曜日更新！)。</p>
    <div class="slider">
      <h2>PICKUP!</h2>
    </div>
    <h2 class="icon oukan sougou">みんブロ総合ランキング</h2>
    <h2 class="ribbon1">ランキングTOP3</h2>
    <div class="top3">
      <div class="each_top3">
          <div class="capture">
              <img src="/img/demo2.jpg" alt="">
              <div class="day">0000-00-00</div>
              <div class="point">
                  <p><span>00,000</span>PT</p>
                  <p>0,000,000 DT</p>
              </div>
          </div>
          <div class="site_date">
              <div class="category">カテゴリー</div>
              <h3>トップ１</h3>
              <div class="description">
                  <p>テキストテキストテキスト</p>
              </div>
          </div>
      </div>              
      <div class="each_top3">
          <div class="capture">
              <img src="/img/demo2.jpg" alt="">
              <div class="day">0000-00-00</div>
              <div class="point">
                  <p><span>00,000</span>PT</p>
                  <p>0,000,000 DT</p>
              </div>
          </div>
          <div class="site_date">
              <div class="category">カテゴリー</div>
              <h3>トップ１</h3>
              <div class="description">
                  <p>テキストテキストテキスト</p>
              </div>
          </div>
      </div>
      <div class="each_top3">
          <div class="capture">
              <img src="/img/demo2.jpg" alt="">
              <div class="day">0000-00-00</div>
              <div class="point">
                  <p><span>00,000</span>PT</p>
                  <p>0,000,000 DT</p>
              </div>
          </div>
          <div class="site_date">
              <div class="category">カテゴリー</div>
              <h3>トップ１</h3>
              <div class="description">
                  <p>テキストテキストテキスト</p>
              </div>
          </div>
      </div>
    </div>

    <h2 class="ribbon1 ribbon-orange">ランキング4~10位</h2>
    <table id="ranking">
      <tbody>
          <tr>
              <th>順位</th>
              <th>みんブロスコア</th>
              <th>ブログ名</th>
          </tr>
          <tr>
              <td class="rank">順位</td>
              <td class="domain_power">スコア</td>
              <td class="blog_mame">ブログ名</td>
          </tr>
      </tbody>
    </table>
    <form class="search_form">
      <table>
          <tbody>
              <tr>
                  <th>ブログ開始日</th>
                  <td>
                      <label for=""><input type="radio" name="month" value="checked"> 指定なし</label>
                      <label for=""><input type="radio" name="month" value="6"> 6ヶ月以内</label>
                      <label for=""><input type="radio" name="month" value="12"> 1年以内</label>
                  </td>
              </tr>
              <tr>
                  <th>基準スコア</th>
                  <td>
                      <label for=""><input type="radio" name="ranking_type"> みんブロランキング</label>
                      <label for=""><input type="radio" name="ranking_type"> ドメイン戦闘力</label>
                      <label for=""><input type="radio" name="ranking_type"> フォローリスト</label>
                  </td>
              </tr>
          </tbody>
      </table>
      <div class="formbtn"><input type="submit" value="絞り込む"></div>
    </form>
    <h2 class="icon oukan sougou">カテゴリー別ランキング</h2>
    <ul class="category_btn">
        <li><a href="">6ヶ月以内の初心者限定</a></li>
        <li><a href="">1年以内の初心者限定</a></li>
        <li><a href="">ドメイン戦闘ランキング</a></li>
    </ul>
    <div class="rank_category">
        <div class="cat-link cat_internet">
            <h3>インターネット：</h3>
            <a href="">インターネット</a>|
            <a href="">Wi-Fi</a>|
            <a href="">ガジェット</a>|
            <a href="">ネット回線</a>|
            <a href="">レンタルサーバー</a>|
            <a href="">格安スマホ</a>
        </div>
    </div>
    <div class="new_site_wrap">
        <h2>新着ブログ</h2>
        <div class="new_blog">
            <ul>
                <?php if(have_posts()):while(have_posts()):the_post();?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <div class="outline">
                            <div class="date"><?php echo get_the_date("Y.m.d"); ?></div>
                            <div class="ttl"><?php the_title(); ?></div>
                        </div>
                    </a>
                </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
        </div>
    </div>
    <div class="sharebtn">
        <div class="microcopy">＼他の人に紹介したいと思ったらシェア！／</div>
        <div>
            <a href=""></a><a href=""></a><a href=""></a><a href=""></a>
        </div>
    </div>
  </main>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>