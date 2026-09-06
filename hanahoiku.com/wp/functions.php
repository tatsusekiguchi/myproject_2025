<?php

/* ===============================================
# アイキャッチ有効化
=============================================== */

add_theme_support('post-thumbnails');


/* ===============================================
# ウィジェット有効化
=============================================== */

function theme_slug_widgets_init() {
  register_sidebar( array(
      'name' => 'サイドバー', //ウィジェットの名前を入力
      'id' => 'sidebar', //ウィジェットに付けるid名を入力
  ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );



//========================================================================
// WPダッシュボードカスタム適用
//========================================================================
/* 管理画面にCSSと本番用JSを読み込み */
function admin_custom_style()
{
  wp_enqueue_style('admin_custom_style', 'https://hanahoiku.com/wordpress/wp-content/themes/hanahoiku/css/wp_admin.css');
}
add_action('admin_enqueue_scripts', 'admin_custom_style');


/* ===============================================
# レスポンシブ ページネーション
=============================================== */
function responsive_pagination($pages = '', $range = 4)
{
  $showitems = ($range * 2) + 1;

  global $paged;
  if (empty($paged)) $paged = 1;

  //ページ情報の取得
  if ($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if (!$pages) {
      $pages = 1;
    }
  }

  if (1 != $pages) {
    echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
    //先頭へ
    echo '<li class="first"><a href="' . get_pagenum_link(1) . '"><span>First</span></a></li>';
    //1つ戻る
    echo '<li class="previous"><a href="' . get_pagenum_link($paged - 1) . '"><span>Previous</span></a></li>';
    //番号つきページ送りボタン
    for ($i = 1; $i <= $pages; $i++) {
      if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
        echo ($paged == $i) ? '<li class="current"><a>' . $i . '</a></li>' : '<li><a href="' . get_pagenum_link($i) . '" class="inactive" >' . $i . '</a></li>';
      }
    }
    //1つ進む
    echo '<li class="next"><a href="' . get_pagenum_link($paged + 1) . '"><span>Next</span></a></li>';
    //最後尾へ
    echo '<li class="last"><a href="' . get_pagenum_link($pages) . '"><span>Last</span></a></li>';
    echo '</ul>';
  }
}


/* ===============================================
# bodyに固定ページスラッグ名をクラス付与
=============================================== */

function pagename_class($classes = '')
{
  if (is_page()) {
    $page = get_post(); //get_page()は廃止されたので使わない
    $classes[] = $page->post_name; //スラッグ名取得
  }
  return $classes;
}
add_filter('body_class', 'pagename_class');


/* ===============================================
# いらないものを削除
=============================================== */

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');


/* the_archive_title 余計な文字を削除 */
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


/* ===============================================
# パンくずリスト
=============================================== */

function mytheme_breadcrumb()
{
  //HOME>と表示
  $sep = '>';
  echo '<li itemprop="itemListElement" itemscope
itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . get_bloginfo('url') . '" ><span itemprop="name">HOME</span></a>&nbsp;</li>';
  echo $sep;

  //投稿記事ページとカテゴリーページでの、カテゴリーの階層を表示
  $cats = '';
  $cat_id = '';
  if (is_single()) {
    $cats = get_the_category();
    if (isset($cats[0]->term_id)) $cat_id = $cats[0]->term_id;
  } else if (is_category()) {
    $cats = get_queried_object();
    $cat_id = $cats->parent;
  }
  $cat_list = array();
  while ($cat_id != 0) {
    $cat = get_category($cat_id);
    $cat_link = get_category_link($cat_id);
    array_unshift($cat_list, '<a itemprop="item" href="' . $cat_link . '"><span itemprop="name">' . $cat->name . '</span></a>');
    $cat_id = $cat->parent;
  }
  foreach ($cat_list as $value) {
    echo '<li itemprop="itemListElement" itemscope
itemtype="http://schema.org/ListItem">' . $value . '&nbsp;</li>';
    echo $sep;
  }

  //現在のページ名を表示
  if (is_singular()) {
    if (is_attachment()) {
      previous_post_link('<li itemprop="itemListElement" itemscope
itemtype="http://schema.org/ListItem">%link</li>');
      echo $sep;
    }
    the_title('<li itemprop="itemListElement" itemscope
itemtype="http://schema.org/ListItem">&nbsp;', '</li>');
  } else if (is_archive()) the_archive_title('<li itemprop="itemListElement" itemscope
itemtype="http://schema.org/ListItem">', '</li>');
  else if (is_search()) echo '<li itemprop="itemListElement" itemscope
itemtype="http://schema.org/ListItem">検索 : ' . get_search_query() . '</li>';
  else if (is_404()) echo '<li itemprop="itemListElement" itemscope
itemtype="http://schema.org/ListItem">ページが見つかりません</li>';
}


/* ===============================================
# カスタム投稿リスト
=============================================== */

global $my_archives_post_type;
add_filter('getarchives_where', 'my_getarchives_where', 10, 2);
function my_getarchives_where($where, $r)
{
  global $my_archives_post_type;
  if (isset($r['post_type'])) {
    $my_archives_post_type = $r['post_type'];
    $where = str_replace('\'post\'', '\'' . $r['post_type'] . '\'', $where);
  } else {
    $my_archives_post_type = '';
  }
  return $where;
}
add_filter('get_archives_link', 'my_get_archives_link');
function my_get_archives_link($link_html)
{
  global $my_archives_post_type;
  if ('' != $my_archives_post_type)
    $add_link .= '?post_type=' . $my_archives_post_type;
  $link_html = preg_replace("/href=\'(.+)\'\s/", "href='$1" . $add_link . " '", $link_html);

  return $link_html;
}


/* ===============================================
# スマホ振り分け
=============================================== */

//スマートフォンを判別
function is_mobile()
{
  $useragents = array(
    'iPhone', // iPhone
    'iPod', // iPod touch
    'Android.*Mobile', // 1.5+ Android *** Only mobile
    'Windows.*Phone', // *** Windows Phone
    'dream', // Pre 1.5 Android
    'CUPCAKE', // 1.5+ Android
    'blackberry9500', // Storm
    'blackberry9530', // Storm
    'blackberry9520', // Storm v2
    'blackberry9550', // Storm v2
    'blackberry9800', // Torch
    'webOS', // Palm Pre Experimental
    'incognito', // Other iPhone browser
    'webmate' // Other iPhone browser

  );
  $pattern = '/' . implode('|', $useragents) . '/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}


/* ===============================================
# カテゴリ別アーカイブ
=============================================== */

add_filter('getarchives_where', 'custom_archives_where', 10, 2);
add_filter('getarchives_join', 'custom_archives_join', 10, 2);

function custom_archives_join($x, $r)
{
  global $wpdb;
  $cat_ID = $r['cat'];
  if (isset($cat_ID)) {
    return $x . " INNER JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id) INNER JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)";
  } else {
    return $x;
  }
}

function custom_archives_where($x, $r)
{
  global $wpdb;
  $cat_ID = $r['cat'];
  if (isset($cat_ID)) {
    return $x . " AND $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id IN ($cat_ID)";
  } else {
    $x;
  }
}

function wp_get_cat_archives($opts, $cat)
{
  $args = wp_parse_args($opts, array('echo' => '1')); // default echo is 1.
  $echo = $args['echo'] != '0'; // remember the original echo flag.
  $args['echo'] = 0;
  $args['cat'] = $cat;

  $archives = wp_get_archives(build_query($args));
  $archs = explode('</li>', $archives);
  $links = array();

  $cat0 = get_the_category();
  $cat_slug = $cat0[0]->category_nicename;

  foreach ($archs as $archive) {
    $link = preg_replace("//date//", "/{$cat_slug}/date/", $archive);
    array_push($links, $link);
  }
  $result = implode('</li>', $links);

  if ($echo) {
    echo $result;
  } else {
    return $result;
  }
}


/* ===============================================
# jquery削除
=============================================== */

// remove_action('wp_head', 'feed_links_extra', 3);
// remove_action('wp_head', 'print_emoji_detection_script', 7);
// remove_action('wp_print_styles', 'print_emoji_styles');
// remove_action('wp_head', 'wp_generator');
// remove_action('wp_head', 'wp_shortlink_wp_head');

// function my_delete_local_jquery()
// {
//   wp_deregister_script('jquery');
// }
// add_action('wp_enqueue_scripts', 'my_delete_local_jquery');


/* ===============================================
# timthumb
=============================================== */

define('THEME_DIR', get_template_directory_uri());
/* Timthumb CropCropimg */
function thumbCrop($img = '', $w = false, $h = false, $zc = 1, $a = false, $cc = false)
{
  if ($h)
    $h = "&amp;h=$h";
  else
    $h = "";

  if ($w)
    $w = "&amp;w=$w";
  else
    $w = "";
  if ($a)
    $a = "&amp;a=$a";
  else
    $a = "";
  if ($cc)
    $cc = "&amp;cc=$cc";
  else
    $cc = "";

  $img = str_replace(get_bloginfo('url'), '', $img);
  $image_url = str_replace("http://", "http://", THEME_DIR) . "/timthumb/timthumb.php?src=" . $img . $h . $w . "&amp;zc=" . $zc . $a . $cc;
  return $image_url;
}


/* ===============================================
# よくある質問
=============================================== */

function cptui_register_my_cpts_faq()
{

  /**
   * Post Type: よくある質問.
   */

  $labels = [
    "name" => esc_html__("よくある質問", "custom-post-type-ui"),
    "singular_name" => esc_html__("よくある質問", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("よくある質問", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => ["slug" => "faq", "with_front" => true],
    "query_var" => true,
    "supports" => ["title", "editor", "thumbnail"],
    "show_in_graphql" => false,
  ];

  register_post_type("faq", $args);
}

add_action('init', 'cptui_register_my_cpts_faq');


function cptui_register_my_taxes_shigotocate()
{

  /**
   * Taxonomy: カテゴリ.
   */

  $labels = [
    "name" => esc_html__("カテゴリ", "custom-post-type-ui"),
    "singular_name" => esc_html__("カテゴリ", "custom-post-type-ui"),
  ];


  $args = [
    "label" => esc_html__("カテゴリ", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'shigotocate', 'with_front' => true,],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "shigotocate",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => false,
    "sort" => false,
    "show_in_graphql" => false,
  ];
  register_taxonomy("shigotocate", ["shigoto"], $args);
}
add_action('init', 'cptui_register_my_taxes_shigotocate');


function cptui_register_my_taxes_newscate()
{

  /**
   * Taxonomy: カテゴリ.
   */

  $labels = [
    "name" => esc_html__("カテゴリ", "custom-post-type-ui"),
    "singular_name" => esc_html__("カテゴリ", "custom-post-type-ui"),
  ];


  $args = [
    "label" => esc_html__("カテゴリ", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'newscate', 'with_front' => true,],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "newscate",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => false,
    "sort" => false,
    "show_in_graphql" => false,
  ];
  register_taxonomy("newscate", ["news"], $args);
}
add_action('init', 'cptui_register_my_taxes_newscate');


/* ===============================================
# カスタムフィールド
=============================================== */

/*【管理画面】ACF Options Page の設定 */
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title' => 'トップページバナー', // ページタイトル
    'menu_title' => 'トップページバナー', // メニュータイトル
    'menu_slug' => 'theme-general-settings', // メニュースラッグ
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}


acf_add_options_sub_page(array(
  'page_title' => '先輩の声一覧ページ編集',
  'menu_title' => '一覧ページ編集',
  'menu_slug' => 'post-setting1',
  'capability' => 'edit_posts',
  'parent_slug' => 'edit.php?post_type=voice',
  // 'position' => false,
  // 'icon_url' => false
));

acf_add_options_sub_page(array(
  'page_title' => 'クロストーク一覧ページ編集',
  'menu_title' => '一覧ページ編集',
  'menu_slug' => 'post-setting2',
  'capability' => 'edit_posts',
  'parent_slug' => 'edit.php?post_type=crosstalk',
  // 'position' => false,
  // 'icon_url' => false
));

/* ===============================================
管理画面でカテゴリ選択用JS読み込み
=============================================== */

add_action('admin_print_scripts', 'validation_admin_scripts');

if (!function_exists('validation_admin_scripts')) {
  function validation_admin_scripts()
  {
    if (get_post_type() === 'post') {
      wp_enqueue_script(
        'post-validation',
        get_template_directory_uri() . '/js/backend/post-validation.js',
        array(
          'wp-data', 'wp-editor', 'wp-edit-post'
        )
      );
    }
  }
} //END validation_admin_scripts


/* ===============================================
# カテゴリ未選択時アラート
=============================================== */

function ryus_category_check_message()
{
  // 投稿(post_type='post')のとき　カテゴリー　が入ってないor未分類カテゴリーが指定されているときにメッセージを出す
  global $pagenow;
  global $post;

  $categoryRequireMessage = 'カテゴリーが未分類です。指定してください';
  $categoryMibunruiExistMessage = 'カテゴリー 未分類 にチェックが入っています。チェックを外してください';
  $messageErrorTemplate = '<div class="message error"><p>%s</p></div>';

  if ($pagenow == 'post.php') {
    if ($post->post_type == 'post') {
      // 投稿画面で投稿のとき
      $categories = get_the_category($post->ID);
      $mibunruiExistFlag = false;
      foreach ($categories as $category) {
        if ($category->cat_ID == 51) {
          $mibunruiExistFlag = true;
        }
      }
      if ($mibunruiExistFlag == true) {
        if (count($categories) == 51) {
          // カテゴリーの指定がない
          echo sprintf($messageErrorTemplate, $categoryRequireMessage);
        } else {
          // カテゴリーの指定はあるけど、未分類にチェックが入ってる
          echo sprintf($messageErrorTemplate, $categoryMibunruiExistMessage);
        }
      }
    }
  }
}
add_action('admin_notices', 'ryus_category_check_message');


/* ===============================================
# acf iframe
=============================================== */

add_filter('wp_kses_allowed_html', 'acf_add_allowed_iframe_tag', 10, 2);
function acf_add_allowed_iframe_tag($tags, $context)
{
  if ($context === 'acf') {
    $tags['iframe'] = array(
      'src' => true,
      'height' => true,
      'width' => true,
      'frameborder' => true,
      'allowfullscreen' => true,
    );
  }

  return $tags;
}


/* ===============================================
# カスタム投稿ナンバリング
=============================================== */

function get_post_number($post_type = 'post', $op = '<=')
{
  global $wpdb, $post;
  $post_type = is_array($post_type) ? implode("','", $post_type) : $post_type;
  $number = $wpdb->get_var("
		SELECT COUNT( * )
		FROM $wpdb->posts
		WHERE post_date {$op} '{$post->post_date}'
		AND post_status = 'publish'
		AND post_type = ('{$post_type}')
	");
  return $number;
}


/* ===============================================
  # mw wp form
  =============================================== */

// オリジナルテーマ用JS読み込み
function my_scripts() {

  // yubinbango
  wp_enqueue_script( 'yubinbango', '//yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );

}
add_action( 'wp_enqueue_scripts', 'my_scripts');

// MW WP Formのクラスをyubinbangoのクラスに変更する
function mwform_form_class() {
  ?>
  <script>
  jQuery(function($) {
    $( '.mw_wp_form form' ).attr( 'class', 'h-adr' );
  });
  </script>
  <?php
  }
  add_action( 'wp_head', 'mwform_form_class', 10000 );



  /* ===============================================
  # 検索結果
  =============================================== */
  
  function change_posts_per_page( $query ) {
    if( isset( $_GET['fe_form_no'] ) ) {
      $query->set( 'posts_per_page', 200 ); // 検索結果一覧を20件に設定
    }
  }
  add_action( 'pre_get_posts', 'change_posts_per_page' );



/* ===============================================
# mw wp form
=============================================== */

//セレクトボックスのオプションにカスタム投稿タイプのターム名を表示する(フィルターフックで実装)
//add_term_list 関数は、セレクトボックスの選択肢を追加するための関数です。この関数は、MW WP Formのフィルターフックによって呼び出されます。
function add_term_list( $children, $atts ) {
  //if (is_page('entry')) は、現在のページが 'entry' ページであるかどうかを確認しています。
    if (is_page('entry') ) {
  //if ('entry-select' == $atts['name']) は、セレクトボックスのフィールド名が 'entry-select' であるかどうかを確認しています。
        if ( 'area' == $atts['name'] ) {
            // カスタム投稿 'job' の記事を取得
            $posts = get_posts( array(
                'post_type' => 'job',
                'posts_per_page' => -1,
            ) );
  
            $term_list = array();
  
            foreach ( $posts as $post ) {
  
                // 記事に結びついている 'job_category' タクソノミーのタームを取得
                $job_terms = wp_get_post_terms( $post->ID, 'jobarea', array( 'fields' => 'names' ) );
  
                // 'job_category' 形式でターム名を作成し、配列に追加
                    foreach ( $job_terms as $job_term ) {
                        $term_name = $job_term;
                        $term_list[] = $term_name;
                    }
            }
  
            // 重複を除いたタームリストを取得
            $unique_term_list = array_unique( $term_list );
  
            // タームリストをセレクトボックスの選択肢として追加
            foreach ( $unique_term_list as $term ) {
                $children[$term] = $term;
            }
        }
    }
    return $children;
  }
  add_filter( 'mwform_choices_mw-wp-form-190929', 'add_term_list', 10, 2 );



  /* MW WP Form のセレクト項目にカスタム投稿タイトル一覧をセット */
function form_job_cat_list($children, $atts)
{
    /* MW WP Form で値を入れるセレクトボックスのname属性を指定（サンプルでは「希望職種」） */
    if ($atts['name'] == 'en') {
        /* get_posts()関数で値にするカスタム投稿の配列を取得 */
        $jobs = get_posts(array(
            'post_type' => 'school',
            'posts_per_page' => -1,
        ));
        /* 取得した配列からタイトルだけを抽出 */
        foreach ($jobs as $job) {
            $children[$job->post_title] = $job->post_title;
        }
        /* 値の最初に「すべてのカテゴリー」を追加したい場合（送信値 => 表示値） */
        $children = array('園舎一覧' => '園舎一覧') + $children;
    }
    return $children;
}
add_filter('mwform_choices_mw-wp-form-193805-', 'form_job_cat_list', 10, 2);



  /* ===============================================
  # description
  =============================================== */
  
  function my_description()
{

  // カスタムフィールドの値を読み込む
  $custom = get_post_custom();
  if (!empty($custom['keywords'][0])) {
    $keywords = $custom['keywords'][0];
  } else {
    $keywords = "リクルート,求人,採用情報,保育士,幼稚園教諭,調理師";
  }
  if (!empty($custom['description'][0])) {
    $description = $custom['description'][0];
  } else {
    // $description =  bloginfo( 'blogdescription' );
    $description = get_bloginfo('description');
  }
?>
  <?php if (is_home()) : // トップページ 
  ?>
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <meta name="description" content="<?php echo $description ?>">
  <?php elseif (is_single()) : // 記事ページ 
  ?>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="<?php echo $keywords ?>">
    <meta name="description" content="<?php echo $description ?>">
  <?php elseif (is_page()) : // 固定ページ 
  ?>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="<?php echo $keywords ?>">
    <meta name="description" content="<?php echo $description ?>">
  <?php elseif (is_category()) : // カテゴリーページ 
  ?>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?php single_cat_title(); ?>の記事一覧" />
  <?php elseif (is_tag()) : // タグページ 
  ?>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="<?php single_tag_title("", true); ?>の記事一覧" />
  <?php elseif (is_404()) : // 404ページ 
  ?>
    <meta name="robots" content="noindex, follow" />
    <title><?php echo 'お探しのページが見つかりませんでした'; ?></title>
  <?php else : // その他ページ 
  ?>
    <meta name="robots" content="noindex, follow" />
  <?php endif; ?>
  <!-- ここからOGP -->
  <meta property='og:locale' content='ja_JP'>
  <meta property='fb:app_id' content='513421789126408'>
  <meta property='og:site_name' content='<?php bloginfo('name'); ?>'>
  <?php
  if (is_single()) {
    if (have_posts()) : while (have_posts()) : the_post();
  ?>
        <meta property="og:title" content="<?php the_title(); ?>">
        <meta property="og:description" content="<?php echo $description ?>">
        <meta property="og:url" content="<?php the_permalink(); ?>">
        <meta property="og:type" content="article">
    <?php
      endwhile;
    endif;
  } else {
    ?>
    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php echo $description ?>">
    <meta property="og:url" content="<?php bloginfo('url'); ?>">
    <meta property="og:type" content="website">
  <?php
  }
  if (!empty($post->post_content)) :
    $str = $post->post_content;
  endif;
  $searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';
  if (is_single()) {
    if (has_post_thumbnail()) {
      $image_id = get_post_thumbnail_id();
      $image = wp_get_attachment_image_src($image_id, 'full');
      echo '
<meta property="og:image" content="' . $image[0] . '">';
      echo "\n";
    } else if (preg_match($searchPattern, $str, $imgurl)) {
      echo '
<meta property="og:image" content="' . $imgurl[2] . '">';
      echo "\n";
    } else {
      echo '
<meta property="og:image" content="https://hanahoiku.com/wordpress/wp-content/uploads/2024/07/51b6beaafb5468d75fcb4c5b1d71aa52-4-scaled.jpg">';
      echo "\n";
    }
  } else {
    echo '
<meta property="og:image" content="https://hanahoiku.com/wordpress/wp-content/uploads/2024/07/51b6beaafb5468d75fcb4c5b1d71aa52-4-scaled.jpg">';
    echo "\n";
  }
  ?>
  <!-- ここまでOGP -->
  <?php
}


/* ===============================================
# リダイレクト無効
=============================================== */

add_filter( 'redirect_canonical', 'disable_redirect_canonical' );
function disable_redirect_canonical( $redirect_url ){
 if( is_404() ){
   return false;
  }
  return $redirect_url;
}


/* ===============================================
# titleタグ
=============================================== */

function mytheme_set()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'mytheme_set');