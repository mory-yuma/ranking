<?php

function my_enqueue_styles() {
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');
//↓アイキャッチの有効化コード 
add_theme_support('post-thumbnails');
// ↓メニュー有効化コード
add_theme_support('menus');

/* カスタムロゴの機能を追加します */
function add_custom_logo_support() {
  add_theme_support( 'custom-logo', array(
    'height'               => 100, // 推奨されるロゴの高さ 100px
    'width'                => 400, // 推奨されるロゴの幅 400px
    'flex-height'          => true, // 動的な高さを許可する
    'flex-width'           => true, // 動的な幅を許可する
    'header-text'          => array( 'site-title' ), // 'site-title'というクラスの要素を非表示にする
    'unlink-homepage-logo' => true, // 訪問者がページにいるときにはホームページにリンクしない
  ) );
}
add_action( 'after_setup_theme', 'add_custom_logo_support' );


// ここからPV数

//カスタムフィールドの「post_views_count」にアクセス数を保存する
function setPostViews($post_id) {
  $count_key = 'post_views_count';
  $count = get_post_meta($post_id, $count_key, true);
  if($count==''){
      $count = 0;
      delete_post_meta($post_id, $count_key);
      add_post_meta($post_id, $count_key, '0');
  }else{
      $count++;
      update_post_meta($post_id, $count_key, $count);
  }
}

//カスタムフィールドに保存されているアクセス数を取得する
function getPostViews($post_id){
  $count_key = 'post_views_count';
  $count = get_post_meta($post_id, $count_key, true);
  if($count==''){
      delete_post_meta($post_id, $count_key);
      add_post_meta($post_id, $count_key, '0');
      return "0 View";
  }
      return $count.' Views';
}