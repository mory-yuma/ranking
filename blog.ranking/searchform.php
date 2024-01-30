<form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>">
  <!-- <input type="text" name="s" id="s" placeholder="キーワードで検索する">
  <button type="submit">
    <img src="<?php echo esc_url(get_theme_file_uri('img/common/search.png')); ?>" alt="">
  </button> -->
    <table>
        <tbody>
            <tr>
                <th><div class="help_wrap">ブログ開始日<i class="fas fa-question-circle" aria-hidden="true"></i><div class="fukidashi">本日から指定日までにドメイン取得されたブログに絞り込みます。同期ブログの絞り込みを使うときはブログ開始日の指定は無効になります。</div></div></th>
                <td>
                    <label><input type="radio" name="month" value="" checked="">指定なし</label>
                    <label><input type="radio" name="month" value="6">6ヶ月以内</label>
                    <label><input type="radio" name="month" value="12">1年以内</label>
                </td>
            </tr>
            <tr>
                <th><div class="help_wrap">基準スコア<i class="fas fa-question-circle" aria-hidden="true"></i><div class="fukidashi">ランキングの基準スコアです。みんブロスコアはドメイン戦闘力(ドメインパワー)にドメイン取得日などの指標を組み合わせて算出しています。</div></div></th>
                <td>
                    <label><input type="radio" name="ranking_type" value="" checked="">みんブロスコア</label>
                    <label><input type="radio" name="ranking_type" value="dp">ドメイン戦闘力</label>
                    <label><input type="radio" name="ranking_type" value="followlist">フォローリスト</label>
                </td>        
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="cat_id" value="">
    <div class="form_btn"><input type="submit" value="絞り込む"></div>
</form>