<?php
// ブロックエディター内のアイキャッチ画像選択許可
add_action('init', function () {
  add_theme_support('post-thumbnails');
});

// カスタム投稿タイプ追加
add_action('init', function () {
  register_post_type('price', [
    'label' => 'コース・料金',
    'public' => true,
    'menu_position' => 10,
    'menu_icon' => 'dashicons-money-alt',
    'supports' => ['thumbnail', 'title', 'editor'],  // アイキャッチ画像は上記記述で事前に追加
    'show_in_rest' => true
  ]);
});

// reset.cssの読み込み
wp_register_style(
  'reset_style',
  get_template_directory_uri() . '/css/reset.css',
  array(),
  '1.0'
);

// style.cssの読み込み
wp_enqueue_style(
  'main_style',
  get_template_directory_uri() . '/css/style.css',
  array('reset_style'), // reset_styleが読み込まれた後にmain_styleを読み込む
  '1.0'
);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
  // ScrollHintのcss読み込み
  wp_enqueue_style('scroll-hint.css', get_template_directory_uri() . '/lib/scroll-hint-master/css/scroll-hint.css');
  // ScrollHintのjs読み込み
  wp_enqueue_script('scroll-hint.js', get_template_directory_uri() . '/lib/scroll-hint-master/js/scroll-hint.min.js', [], "1.2.3", true);
}

// パンくずリストの現在表示ページの名称変更
function my_bcn_breadcrumb_title($title)
{
  if (is_page('form')) {
    $title = 'お問い合わせ';
  }

  // if (is_category('')) {
  // 	$title = single_cat_title( '', false );
  // }
  return $title;
};
add_filter('bcn_breadcrumb_title', 'my_bcn_breadcrumb_title', 10, 1);

// 親ページのパンくずリスト非表示（送信完了画面）
add_action('bcn_after_fill', function ($trail) {
  if (is_page('completion')) {
    if (($count = count($trail->breadcrumbs)) > 2) {
      array_splice($trail->breadcrumbs, 1, $count -  2);
    }
  }
});

// ホーム > カテゴリーの間にブログのパンくずを追加（投稿詳細画面）
// function bcn_add($bcnObj) {
// 	// デフォルト投稿の詳細ページかどうか
// 	if (is_singular('post')) {
// 		// 新規のtrailオブジェクトを末尾に追加する
// 		$bcnObj->add(new bcn_breadcrumb('ブログ', null, array('post-clumn-archive'), home_url('/blog'), null, true));
// 		$trail_tmp = clone $bcnObj->trail[3];
// 		$bcnObj->trail[3] = clone $bcnObj->trail[2];
// 		$bcnObj->trail[2] = $trail_tmp;
// 	}
// 	return $bcnObj;
// }
// add_action('bcn_after_fill', 'bcn_add');

// 全記事一覧のアーカイブページの作成
// function post_has_archive($args, $post_type){
//   if('post'== $post_type){
//     $args['rewrite']=true;
//     $args['has_archive']='blog';
//   }
//   return $args;
// }

// add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// タイトルタグの変更許可
function setup_theme()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'setup_theme');

// タイトルタグの変更許可（条件分岐）
function my_archive_title($title)
{
  if (is_category()) {
    $title = single_cat_title('', false) . ' 一覧';
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_home()) {
    $title = '新着一覧';
  } elseif (is_post_type_archive('news')) {
    $title = 'お知らせ一覧';
  }
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');


function new_excerpt_mblength($length)
{
  return 60; //抜粋する文字数を60文字に設定
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

function new_excerpt_more($more)
{
  return '…'; //変更後の内容
}
add_filter('excerpt_more', 'new_excerpt_more');

//pagination
function pagination($pages = ''){
  global $paged;//現在のページ値を取得
  if(empty($paged)){//もし現在のページ値が空だったら
    $paged = 1;//デフォルトのページ（初期値）を1とする
  }
  if($pages == ''){//もし全ページ数に何も入っていなければ
    global $wp_query;//WP_Queryを使う
    $pages = $wp_query->max_num_pages;//全ページ数を取得
    if(!$pages){//全ページ数が空の場合は
      $pages = 1;//全ページ数を1とする
    }
  }
  if(1 != $pages){//全ページが１でなければ（次のページがあれば）ページャーを表示
    echo "<div class=\"pagination\">\n";
    echo "<ul>\n";
    //前へ：現在のページ値が１より大きい場合は表示
    if($paged > 1) {
      echo "<li class=\"prev\">".get_previous_posts_link( '&lt;&lt; 前へ' )."</li>\n";
    }else{//1ページめの場合はリンクを表示せず文字のみ
      echo "<li class=\"prev-first\">前へ</li>\n";
    }
    //次へ：全ページ数より現在のページ値が小さい場合は表示
    if ($paged < $pages) {
      echo "<li class=\"next\">".get_next_posts_link( '次へ &gt;&gt;' )."</li>\n";
    }else{//最後のページまできたらリンクを表示せず文字のみ
      echo "<li class=\"next-last\">次へ</a>\n";
    }
    echo "</ul>\n";
    echo "</div>\n";
  }
}
