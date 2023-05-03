<?php
//CSS,jQueryファイルを読み込む
function theme_name_files()
{
  //CSS読み込み id="main-style-css"
  wp_enqueue_style('main-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
  //vegas slider
  wp_enqueue_style('vegas', get_theme_file_uri('/css/vegas.min.css'), [], '', false);
  //slick
  wp_enqueue_style('slick', get_theme_file_uri('/css/slick.css'), [], '', false);

  //jQuery読み込み
  wp_enqueue_script('jquery');
  //自作js読み込み
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), [], '', true);
  //高さを揃える
  wp_enqueue_script('matchHeight', get_theme_file_uri('/js/jquery.matchHeight.js'), [], '', true);
  //vegas slider
  wp_enqueue_script('vegas', get_theme_file_uri('/js/vegas.min.js'), [], '', true);
  //slick
  wp_enqueue_script('slick', get_theme_file_uri('/js/slick.min.js'), [], '', true);
}
add_action('wp_enqueue_scripts', 'theme_name_files');


// テーマフォルダ直下のeditor-style.cssを読み込み
add_action('admin_init', function () {
  add_editor_style();
});


//ウィジェットエリアを作成
register_sidebar(array(
  'id' => 'column1',
  'name' => 'ブログサイドバー',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h1 class="widgettitle">',
  'after_title' => '</h1>',
));


//検索フォーム
add_theme_support('html5', array('search-form'));

//アイキャッチ画像
add_theme_support('post-thumbnails');

//画像のサイズ プロジェクトによって適当に数値を変えること
// ブログ記事一覧の画像サイズ 画像サイズは適時変更すること
add_image_size('thumb01', 800, 600, true);


//カスタムナビメニュー
register_nav_menu('navigation', 'ナビゲーションメニュー');
//メニュー表示　スマホ用
register_nav_menu('navigation_sp', 'スマホ用ナビゲーションメニュー');

//フッターメニュー
register_nav_menu('footer-menu1', 'フッターメニュー1');
register_nav_menu('footer-menu2', 'フッターメニュー2');
register_nav_menu('footer-menu3', 'フッターメニュー3');
register_nav_menu('footer-menu4', 'フッターメニュー4');
register_nav_menu('footer-menu5', 'フッターメニュー5');
register_nav_menu('footer-menu6', 'フッターメニュー6');


//記事抜粋の文字数
function my_length($length)
{
  return (wp_is_mobile()) ? 30 : 50;
}
add_filter('excerpt_mblength', 'my_length');


//記事抜粋の省略記号
function my_more($more)
{
  $more = '<a href="' . esc_url(get_permalink()) . '">[詳しく見る]';
  return $more;
}
add_filter('excerpt_more', 'my_more');


// スマホ、タブレット判定
function is_mobile()
{
  $useragents = array(
    'iPhone',          // iPhone
    'iPod',            // iPod touch
    '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
    'dream',           // Pre 1.5 Android
    'CUPCAKE',         // 1.5+ Android
    'blackberry9500',  // Storm
    'blackberry9530',  // Storm
    'blackberry9520',  // Storm v2
    'blackberry9550',  // Storm v2
    'blackberry9800',  // Torch
    'webOS',           // Palm Pre Experimental
    'incognito',       // Other iPhone browser
    'webmate'          // Other iPhone browser
  );
  $pattern = '/' . implode('|', $useragents) . '/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// body_classにページスラッグ名を含ませたりオリジナルのclassを追加
// タブレットとスマホの場合のクラスも追加
function pagename_class($classes = '')
{
  if (is_page()) { //slugを追加
    $page = get_page(get_the_ID());
    $classes[] = $page->post_name;
  } elseif (is_category() || is_single()) { //slugを追加
    $category = get_the_category();
    $classes[] = $category[0]->slug;
  }
  if (wp_is_mobile()) {
    $classes[] .= 'mobile'; //mobileの場合classを追加
  }
  //$classes[] .= '任意のクラス名'; //その他必要なクラス名があれば追加
  return $classes;
}
add_filter('body_class', 'pagename_class');


// 記事内の１番目の画像をアイキャッチ代わりにする
function catch_that_image()
{
  global $post;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if (empty($first_img)) { //Defines a default image
    $first_img = esc_url(get_template_directory_uri()) . "/img/no-image.png";
  }
  return $first_img;
}



//「投稿」の名前を変更
function Change_menulabel()
{
  global $menu;
  global $submenu;
  $name = 'トピックス';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name . '一覧';
  $submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
  global $wp_post_types;
  $name = 'トピックス';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name . 'の新規追加';
  $labels->edit_item = $name . 'の編集';
  $labels->new_item = '新規' . $name;
  $labels->view_item = $name . 'を表示';
  $labels->search_items = $name . 'を検索';
  $labels->not_found = $name . 'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');


// TinyMCE Advancedのフォントサイズ変更
function tinymce_custom_fonts($setting)
{
  $setting['fontsize_formats'] = "12px 14px 18px 21px 24px 30px";
  return $setting;
}
add_filter('tiny_mce_before_init', 'tinymce_custom_fonts', 5);

add_filter('tiny_mce_before_init', function ($settings) {
  $settings['font_formats'] =
    "Noto Sans JP = 'Noto Sans JP';" .
    "游ゴシック='游ゴシック','Yu Gothic';" .
    "ヒラギノ角ゴ='ヒラギノ角ゴ Pro W3','Hiragino Kaku Gothic Pro','ヒラギノ角ゴ ProN W3','Hiragino Kaku Gothic ProN';" .
    "游明朝='游明朝','Yu Mincho';" .
    "ヒラギノ明朝='ヒラギノ明朝 Pro W3','Hiragino Mincho Pro',ヒラギノ明朝 ProN W3','Hiragino Mincho ProN';" .
    "游明朝体='游明朝体','YuMincho';";
  return $settings;
});


// タイトルに入る不要な文字を削除（カテゴリーページ、アーカイブページ）
add_filter('get_the_archive_title', function ($titname) {
  if (is_category()) {
    $titname = single_cat_title('', false);
  } elseif (is_date()) {
    $titname = get_the_time('Y年 n月');
  } else {
  }
  return $titname;
});



// ビジュアルエディタから見出し1を削除
function custom_tiny_mce_formats($settings)
{
  $settings['block_formats'] = '段落=p;見出し2=h2;見出し3=h3;見出し4=h4;見出し5=h5;見出し6=h6;整形済みテキスト=pre;';
  return $settings;
}
add_filter('tiny_mce_before_init', 'custom_tiny_mce_formats');



//エディタのビジュアル/テキスト切替でコード消滅を防止（自動整形無効化）
// function my_tiny_mce_before_init( $init_array ) {
//  $init_array['valid_elements']          = '*[*]';
//  $init_array['extended_valid_elements'] = '*[*]';
//  return $init_array;
// }
// add_filter( 'tiny_mce_before_init' , 'my_tiny_mce_before_init' );


// 固定ページのみビジュアルエディタを無効化
function disable_visual_editor_in_page()
{
  global $typenow;
  if ($typenow == 'page') {
    add_filter('user_can_richedit', 'disable_visual_editor_filter');
  }
}
function disable_visual_editor_filter()
{
  return false;
}
add_action('load-post.php', 'disable_visual_editor_in_page');
add_action('load-post-new.php', 'disable_visual_editor_in_page');


//投稿のタグをチェックボックスで選択できるようにする
function change_post_tag_to_checkbox()
{
  $args = get_taxonomy('post_tag'); //タクソノミーを入れる
  $args->hierarchical = true; //Gutenberg用
  $args->meta_box_cb = 'post_categories_meta_box'; //Classicエディタ用
  register_taxonomy('post_tag', 'post', $args);
}
add_action('init', 'change_post_tag_to_checkbox', 1);
