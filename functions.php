<?php
  function my_setup(){
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));
  }
  add_action('after_setup_theme', 'my_setup');

  // カスタム投稿のブロックエディタを有効にする設定
  function create_custom_post_type() {
    $args = array(
        'label'  => 'カスタム投稿',
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true, // これによりブロックエディタでの編集が可能になります
    );
    register_post_type('custom_post', $args);
}
add_action('init', 'create_custom_post_type');
