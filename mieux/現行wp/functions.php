<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
  wp_enqueue_style( 'responsive_style', get_stylesheet_directory_uri() . '/css/responsive.css', array(), 'time()', 'screen and (max-width: 1251px)');
wp_enqueue_style( 'custome_style', get_stylesheet_directory_uri() . '/css/custome.css', false, time() );
	wp_enqueue_style( 'design-plus_style', get_stylesheet_directory_uri() . '/css/design-plus.css', false, time() );
}

/* ===============================================
# ユーザー名隠し
=============================================== */

function slug_redirect_author_archive()
{
  if (is_author()) {
    wp_redirect(home_url());
    exit;
  }
}
add_action('template_redirect', 'slug_redirect_author_archive');
?>