<?php
//CSS,jQueryファイルを読み込む
function theme_name_files()
{
  //CSS読み込み id="main-style-css"
  wp_enqueue_style('main-style', get_stylesheet_uri(), array(), date('YmdGi', filemtime(get_template_directory() . '/style.css')), false);
  //reset
  wp_enqueue_style('reset', get_theme_file_uri('/css/reset.css'), array(), date('YmdGi', filemtime(get_template_directory() . '/css/reset.css')), false);
  //font
  wp_enqueue_style('font', get_theme_file_uri('/css/font.css'), array(), date('YmdGi', filemtime(get_template_directory() . '/css/font.css')), false);
  // foundation
  wp_enqueue_style('foundation', get_theme_file_uri('/css/foundation.css'), array(), date('YmdGi', filemtime(get_template_directory() . '/css/foundation.css')), false);
  //layout
  wp_enqueue_style('layout', get_theme_file_uri('/css/layout.css'), array(), date('YmdGi', filemtime(get_template_directory() . '/css/layout.css')), false);
  //component
  wp_enqueue_style('component', get_theme_file_uri('/css/component.css'), array(), date('YmdGi', filemtime(get_template_directory() . '/css/component.css')), false);
  //project
  wp_enqueue_style('project', get_theme_file_uri('/css/project.css'), array(), date('YmdGi', filemtime(get_template_directory() . '/css/project.css')), false);
  //utility
  wp_enqueue_style('utility', get_theme_file_uri('/css/utility.css'), array(), date('YmdGi', filemtime(get_template_directory() . '/css/utility.css')), false);
//custom
wp_enqueue_style('custom', get_theme_file_uri('/custom.css'), array(), date('YmdGi', filemtime(get_template_directory() . '/custom.css')), false);


  //vegas slider
  wp_enqueue_style('vegas', get_theme_file_uri('/css/vegas.min.css'), array(), date('YmdGi', filemtime(get_template_directory() . '/css/vegas.min.css')), false);
  //slick
  wp_enqueue_style('slick', get_theme_file_uri('/css/slick.css'), array(), date('YmdGi', filemtime(get_template_directory() . '/css/slick.css')), false);
  //animate
  wp_enqueue_style('animate', get_theme_file_uri('/css/animate.css'), array(), date('YmdGi', filemtime(get_template_directory() . '/css/animate.css')), false);


  //jQuery読み込み
  wp_enqueue_script('jquery');
  //自作js読み込み
  // wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), [], '', true);
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), array(), date('YmdGi', filemtime(get_template_directory() . '/js/main.js')), true);
  //高さを揃える
  wp_enqueue_script('matchHeight', get_theme_file_uri('/js/jquery.matchHeight.js'), array(), date('YmdGi', filemtime(get_template_directory() . '/js/jquery.matchHeight.js')), true);
  //vegas slider
  wp_enqueue_script('vegas', get_theme_file_uri('/js/vegas.min.js'), array(), date('YmdGi', filemtime(get_template_directory() . '/js/vegas.min.js')), true);
  //slick
  wp_enqueue_script('slick', get_theme_file_uri('/js/slick.min.js'), array(), date('YmdGi', filemtime(get_template_directory() . '/js/slick.min.js')), true);
  //wow
  wp_enqueue_script('wow', get_theme_file_uri('/js/wow.min.js'), array(), date('YmdGi', filemtime(get_template_directory() . '/js/wow.min.js')), true);
  wp_enqueue_script('add', get_theme_file_uri('/js/add_temp.js'), array(), date('YmdGi', filemtime(get_template_directory() . '/js/add_temp.js')), true);
  //gsap
  wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', [], '', true);
  //gsap-scroll
  wp_enqueue_script('gsap-scorll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js', [], '', true);
  // アニメーション用 自作
  wp_enqueue_script('mainAnimation', get_theme_file_uri('/js/main-animation.js'), array(), date('YmdGi', filemtime(get_template_directory() . '/js/main-animation.js')), true);
}
add_action('wp_enqueue_scripts', 'theme_name_files');



// テーマフォルダ直下のeditor-style.cssを読み込み
add_action('admin_init', function () {
  add_editor_style();
});

function block_editor_css()
{
  add_theme_support('editor-styles');
}
// アクションフックに登録
add_action('after_setup_theme', 'block_editor_css');

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


//ヘッダーメニュー
register_nav_menu('header-menu', 'ヘッダーメニュー');

//フッターメニュー
register_nav_menu('footer-menu', 'フッターメニュー');


//記事抜粋の文字数
function my_length($length)
{
  return (wp_is_mobile()) ? 100 : 300;
}
add_filter('excerpt_mblength', 'my_length');


//記事抜粋の省略記号
function my_more($more)
{
  $more = '';
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
  if (is_front_page()) {
    $classes[] = 'front-page';
  } elseif (is_page()) { //slugを追加
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



//「投稿」の名前を変更
function Change_menulabel()
{
  global $menu;
  global $submenu;
  $name = 'お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name . '一覧';
  $submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
  global $wp_post_types;
  $name = 'お知らせ';
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
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索結果：' . esc_html(get_search_query(false));
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {
  }
  return $title;
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
// function disable_visual_editor_in_page()
// {
//   global $typenow;
//   if ($typenow == 'page') {
//     add_filter('user_can_richedit', 'disable_visual_editor_filter');
//   }
// }
// function disable_visual_editor_filter()
// {
//   return false;
// }
// add_action('load-post.php', 'disable_visual_editor_in_page');
// add_action('load-post-new.php', 'disable_visual_editor_in_page');


//投稿のタグをチェックボックスで選択できるようにする
function change_post_tag_to_checkbox()
{
  $args = get_taxonomy('post_tag'); //タクソノミーを入れる
  $args->hierarchical = true; //Gutenberg用
  $args->meta_box_cb = 'post_categories_meta_box'; //Classicエディタ用
  register_taxonomy('post_tag', 'post', $args);
}
add_action('init', 'change_post_tag_to_checkbox', 1);


// webpでアップロードできるようにする
function add_file_types_to_uploads($mimes)
{
  $mimes['webp'] = 'image/webp';
  return $mimes;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');


add_action('pre_get_posts', 'my_custom_query_vars');
function my_custom_query_vars($query)
{
  /* @var $query WP_Query */
  if (!is_admin() && $query->is_main_query()) {
    if (is_post_type_archive('blog')) {
      $query->set('posts_per_page', 5); //表示したい数
    }
  }
  return $query;
}