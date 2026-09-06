<?php


// -------------------------------------------------------------------
// wp_head()で出力される内容を削除
// -------------------------------------------------------------------
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles', 10 );
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'feed_links_extra',3); 

add_theme_support('post-thumbnails');

// -------------------------------------------------------------------
// ページ内の画像のパスを自動的にテーマディレクトリまでのパスに置き換える
// -------------------------------------------------------------------
function replaceImagePath($arg) {
  $content = str_replace('"image/', '"' . get_bloginfo('template_directory') . '/image/', $arg);
  return $content;
}  
add_action('the_content', 'replaceImagePath');

// -------------------------------------------------------------------
// WordPressのパーマリンクを自動で変更する
// -------------------------------------------------------------------
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );

// -------------------------------------------------------------------
// コンタクトフォーム７読み込み制限
// -------------------------------------------------------------------
function wpcf7_file_load() {
  add_filter( 'wpcf7_load_js', '__return_false' );
  add_filter( 'wpcf7_load_css', '__return_false' );
  if( is_page('graduate') || is_page('carrer') ){
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
      wpcf7_enqueue_scripts();
    }
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
      wpcf7_enqueue_styles();
    }
  }
}
//add_action( 'template_redirect', 'wpcf7_file_load' );

// -------------------------------------------------------------------
// Contact Form 7のエラーメッセージの場所を必要な項目のみ変更
// -------------------------------------------------------------------
function wpcf7_custom_item_error_position( $items, $result ) {
  // メッセージを表示させたい場所のタグのエラー用のクラス名
  $class = 'wpcf7-custom-item-error';
  // メッセージの位置を変更したい項目名
  $names = array( 'file-1', 'file-2', 'file-3' );
 
  // 入力エラーがある場合
  if ( isset( $items['invalidFields'] ) ) {
    foreach ( $items['invalidFields'] as $k => $v ) {
      $orig = $v['into'];
      $name = substr( $orig, strrpos($orig, ".") + 1 );
      // 位置を変更したい項目のみ、エラーを設定するタグのクラス名を差替
      if ( in_array( $name, $names ) ) {
        $items['invalidFields'][$k]['into'] = ".{$class}.{$name}";
      }
    }
  }
  return $items;
}
//add_filter( 'wpcf7_ajax_json_echo', 'wpcf7_custom_item_error_position', 10, 2 );

// -------------------------------------------------------------------
//  ページネーション
// -------------------------------------------------------------------
//レスポンシブなページネーションを作成する
function responsive_pagination($pages = '', $range = 4){
  $showitems = ($range * 2)+1;
 
  global $paged;
  if(empty($paged)) $paged = 1;
 
  //ページ情報の取得
  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages){
      $pages = 1;
    }
  }
 
  if(1 != $pages) {
    echo '<ol class="pagination" role="menubar" aria-label="Pagination">';
    //先頭へ
    echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
    //1つ戻る
    echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
    //番号つきページ送りボタン
    for ($i=1; $i <= $pages; $i++)     {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))       {
        echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
      }
    }
    //1つ進む
    echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';
    //最後尾へ
    echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
    echo '</ol>';
  }
}

?>