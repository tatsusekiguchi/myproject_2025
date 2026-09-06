<?php

/**
 * @package WordPress
 * @subpackage theme
 * @since 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php my_description(); ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="alternate" title="RSS フィード" href="<?php bloginfo('rss2_url'); ?>">
    <link rel="alternate" title="RSS フィード" href="<?php bloginfo('atom_url'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css">
    <link href="<?php echo esc_url(home_url("/")); ?>/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url(home_url("/")); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo esc_url(home_url("/")); ?>/css/slick-theme.css">
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url(home_url("/")); ?>/js/html5.js"></script>
	<![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/recruit.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>

<body <?php body_class(); ?> ontouchstart="">

    <header>
        <h1 class="logo">
            <a href="<?php echo esc_url(home_url("/")); ?>recruit/">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/logo01@2x.png 2x" alt="はな保育">
            </a>
        </h1>
        <h2>
            採用サイト
        </h2>
        <?php if(is_mobile()){ ?>
        <div id="entrytop">
            <a href="<?php echo esc_url( home_url( "/" ) ); ?>recruit/entrytop/">応募する</a>
        </div>
        <!-- /#entrytop -->
        <?php } else { ?>
            <div>
            <ul class="nav">
                <li>
                    <a href="<?php echo esc_url(home_url("/")); ?>company/" target="_blank">
                        はな保育について
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url("/")); ?>recruit/kankyo/">
                        働く環境
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url("/")); ?>recruit/career/">
                        キャリア
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url("/")); ?>recruit/voice/">
                        スタッフの声
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url("/")); ?>recruit/job/">
                        求人検索
                    </a>
                </li>
            </ul>
            <!-- /.nav -->
            <ul class="links">
                <li>
                    <a href="<?php echo esc_url(home_url("/")); ?>newscate/recruit/" target="_blank">
                        会社説明会ご案内
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url("/")); ?>recruit/entrytop/">
                        応募する
                    </a>
                </li>
            </ul>
            <!-- /.links -->
        </div>
        <?php } ?>
        
    </header>

    <div id="navArea">
        <nav>
            <div id="navs">
                <div class="top">
                    <div class="block">
                        <h5>
                            はな保育について
                        </h5>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url(home_url("/")); ?>company/" target="_blank">
                                    - 会社概要<span></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url("/")); ?>school/" target="_blank">
                                    - 園舎一覧<span></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url("/")); ?>" target="_blank">
                                    - 会社HP<span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.block -->
                    <div class="block">
                        <h5>
                            私たちの保育
                        </h5>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url(home_url("/")); ?>about/#philosophy" target="_blank">
                                    - 保育理念<span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.block -->

                </div>
                <!-- /.top -->
                <div class="bottom">
                    <div class="block">
                        <h5>
                            働き方
                        </h5>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url(home_url("/")); ?>recruit/kankyo/">
                                    - 働きやすい環境
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.block -->
                    <div class="block">
                        <h5>
                            キャリア
                        </h5>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url(home_url("/")); ?>recruit/career">
                                    - 学べる研修
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url("/")); ?>recruit/career/#career">
                                    - キャリアプラン
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url("/")); ?>recruit/voice/">
                                    - 先輩インタビュー
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url("/")); ?>recruit/crosstalk/">
                                    - クロストーク
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.block -->
                </div>
                <!-- /.bottom -->
            </div>
            <!-- /#navs -->
            <div id="sns">
                <dl>
                    <dt>
                        FOLLOW ME
                    </dt>
                        <dd class="instagram">
                            <a href="https://www.instagram.com/hanahoiku.recruit/" target="_blank">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_insta01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_insta01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/sns_insta01@2x.png 2x" alt="インスタグラム">
                            </a>
                        </dd>
                        <!-- /.instagram -->
                    <?php
                    $value = get_field('youtube', 'option');
                    if ($value) :
                    ?>
                        <dd class="youtube">
                            <a href="<?php echo get_field('youtube', 'option'); ?>" target="_blank">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_youtube01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_youtube01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/sns_youtube01@2x.png 2x" alt="Youtube">
                            </a>
                        </dd>
                        <!-- /.youtube -->
                    <?php
                    endif;
                    ?>
                        <dd class="line">
                            <a href="https://page.line.me/872rnmdj" target="_blank">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_line01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_line01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/sns_line01@2x.png 2x" alt="line">
                            </a>
                        </dd>
                        <!-- /.line -->
                </dl>
            </div>
            <!-- /#sns -->
            <div id="navsearch">
                <a href="https://hanahoiku.com/newscate/recruit/">
                    園見学はこちら
                </a>
            </div>
            <!-- /#navsearch -->
            <div id="kengakukai">
                <a href="<?php echo esc_url(home_url("/")); ?>newscate/recruit/" target="_blank">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/kengakukai02.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/kengakukai02.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/kengakukai02@2x.png 2x" alt="一日保育体験/見学会">
                </a>
            </div>
            <!-- /#kengakukai -->
            <div id="policy">
                <a href="<?php echo esc_url(home_url("/")); ?>privacy-policy/" target="_blank">
                    プライバシーポリシー
                </a>
            </div>
            <!-- /#policy -->
            <div id="copyright">
                Copyright &copy; HANAHOIKU All rights reserved.
            </div>
            <!-- /#copyright -->
        </nav>

        <div class="toggle_btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="mask"></div>
    </div>
    <!-- /navArea -->