<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage hanahoiku
 * @since theme
 */
?>

<div id="entry">
    <div class="header">
        <h3 class="ani anit">
            ENTRY
        </h3>
        <h4 class="ani anit">
            エントリー
        </h4>
        <!-- /.ani anit -->
    </div>
    <!-- /.header -->
    <div class="links">
        <div class="link ani anit">
            <a href="<?php echo esc_url(home_url("/")); ?>newscate/recruit/">
                会社説明会ご案内
            </a>
        </div>
        <!-- /.link -->
        <div class="link ani anit">
            <a href="<?php echo esc_url(home_url("/")); ?>recruit/entrytop/">
                応募する
            </a>
        </div>
        <!-- /.link -->
        <div class="link ani anit">
            <a href="https://page.line.me/872rnmdj" target="_blank">
                LINEでお問い合わせ
            </a>
        </div>
        <!-- /.link -->
    </div>
    <!-- /.links -->
</div>
<!-- /#entry -->

<div id="follow">
    <div class="header">
        <h3 class="ani anit">
            FOLLOW ME
        </h3>
        <h4 class="ani anit">
            公式SNSはこちら
        </h4>
        <!-- /.ani anit -->
    </div>
    <!-- /.header -->
    <?php if (is_mobile()) { ?>
        <div class="links">
            <div class="link">
                <a href="https://www.instagram.com/hanahoiku.recruit/" target="_blank">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_insta02.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_insta02.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/sns_insta02@2x.png 2x" alt="インスタ">
                </a>
            </div>
            <!-- /.link -->
            <div class="link">
                <a href="https://page.line.me/872rnmdj" target="_blank">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_line02.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_line02.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/sns_line02@2x.png 2x" alt="ライン">
                </a>
            </div>
            <!-- /.link -->
        </div>
        <!-- /.links -->
    <?php } else { ?>
        <div class="links">
            <div class="link">
                <a href="https://www.instagram.com/hanahoiku.recruit/" target="_blank">
                    INSTAGRAM
                </a>
            </div>
            <!-- /.link -->
            <div class="link">
                <a href="https://page.line.me/872rnmdj" target="_blank">
                    公式LINE
                </a>
            </div>
            <!-- /.link -->
        </div>
        <!-- /.links -->
    <?php } ?>
</div>
<!-- /#follow -->

<?php if (is_mobile()) { ?>
    <footer>
        <div class="inner">
            <div class="logo">
                <a href="<?php echo esc_url(home_url("/")); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/logo01@2x.png 2x" alt="はな保育">
                </a>
            </div>
            <!-- /.logo -->
            <div class="navs">
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
                        働く環境
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
                <!-- /.blok -->
                <div class="block">

                    <h5>
                        キャリア
                    </h5>
                    <ul>
                        <li>
                            <a href="<?php echo esc_url(home_url("/")); ?>recruit/career/#kensyu">
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
            <!-- /.navs -->
        </div>
        <!-- /.inner -->
        <div class="bottom">

            <div class="pp">
                <a href="<?php echo esc_url(home_url("/")); ?>privacy-policy/" target="_blank">
                    プライバシーポリシー</a>
            </div>
            <dl class="sns">
                <dt>
                    SNS ｜
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
            <div class="copyright">
                Copyright &copy; はな保育 All rights reserved.
            </div>
            <!-- /.copyright -->
        </div>
        <!-- /.bottom -->
    </footer>
<?php } else { ?>
    <footer>
        <div class="inner">
            <div class="logo">
                <a href="<?php echo esc_url(home_url("/")); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/logo01@2x.png 2x" alt="はな保育">
                </a>
            </div>
            <!-- /.logo -->
            <div class="navs">
                <div class="left">
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
                    <h5>
                        働く環境
                    </h5>
                    <ul>
                        <li>
                            <a href="<?php echo esc_url(home_url("/")); ?>recruit/kankyo/">
                                - 働きやすい環境
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.left -->
                <div class="center">
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
                <!-- /.center -->
                <div class="right">
                    <h5>
                        キャリア
                    </h5>
                    <ul>
                        <li>
                            <a href="<?php echo esc_url(home_url("/")); ?>recruit/career/#kensyu">
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
                <!-- /.right -->
            </div>
            <!-- /.navs -->
        </div>
        <!-- /.inner -->
        <div class="bottom">
            <div class="copyright">
                Copyright &copy; はな保育 All rights reserved.
            </div>
            <!-- /.copyright -->
            <div class="pp">
                <a href="<?php echo esc_url(home_url("/")); ?>privacy-policy/" target="_blank">
                    プライバシーポリシー</a> ｜ SNS ｜
                <div class="instagram">
                    <a href="https://www.instagram.com/hanahoiku.recruit/" target="_blank">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_insta01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_insta01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/sns_insta01@2x.png 2x" alt="インスタグラム">
                    </a>
                </div>
                <!-- /.instagram -->
                <?php
                $value = get_field('youtube', 'option');
                if ($value) :
                ?>
                    <div class="youtube">
                        <a href="<?php echo get_field('youtube', 'option'); ?>" target="_blank">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_youtube01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_youtube01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/sns_youtube01@2x.png 2x" alt="Youtube">
                        </a>
                    </div>
                    <!-- /.youtube -->
                <?php
                endif;
                ?>
                <div class="line">
                    <a href="https://page.line.me/872rnmdj" target="_blank">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_line01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/sns_line01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/sns_line01@2x.png 2x" alt="line">
                    </a>
                </div>
                <!-- /.line -->
            </div>
        </div>
        <!-- /.bottom -->
    </footer>
<?php } ?>

<?php if (is_mobile()) { ?>
    
    <div class="footerbtn">
        <div class="block block01">
            <a href="<?php echo esc_url(home_url("/")); ?>recruit/job/">
                求人検索
            </a>
        </div>
        <!-- /.block block01 -->
        <div class="block block02">
            <a href="https://hanahoiku.com/recruit/job/newgraduate-recruitment/">
                新卒採用
            </a>
        </div>
        <!-- /.block block02 -->
    </div>
    <!-- /.footerbtn -->
<?php } else { ?>
    
<?php } ?>

<div class="search01 ani anit">
    <a href="<?php echo esc_url(home_url("/")); ?>recruit/job/">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/search01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/search01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/search01@2x.png 2x" alt="仕事を検索">
    </a>
</div>
<!-- /.search01 -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo esc_url(home_url("/")); ?>js/jquery.waypoints.min.js"></script>
<script src="<?php echo esc_url(home_url("/")); ?>js/slick.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/recruit.js?<?php echo time(); ?>"></script>
<?php wp_footer(); ?>
</body>

</html>