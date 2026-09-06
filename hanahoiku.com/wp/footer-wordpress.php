<?php include('/home/hanahoiku/www/parts/config.php'); ?>
<?php require_once('/home/hanahoiku/www/parts/functions.php'); ?>
<div class="fnav">
    <div class="header">
        <h5 class="animation animationtoblur">
            まずはお近くの園まで見学へお越しください。
        </h5>
        <div class="desc animation animationtoblur">
            入園にあたり、まず一度園への見学をお勧めします。実際の活動風景や、給食の様子など、気になる活動時間帯に合わせて見学をしてください。保育の様子、職員対応、園内設備等気になる部分を保護者様ご自身で直接確認頂き、安心して入園頂きたいと考えております。
        </div>
        <!-- /.desc -->
    </div>
    <!-- /.header -->
    <div class="group">
        <div class="block block01 animation animationtoblur">
            <a href="<?php echo $home_url; ?>kengaku/">
                <div class="illust">
                    <img src="<?php echo $img_url; ?>common/fnav01.png?1" srcset="<?php echo $img_url; ?>common/fnav01.png?1 1x, <?php echo $img_url; ?>common/fnav01@2x.png?1 2x" alt="">
                </div>
                <!-- /.illust -->
                <div class="txt">
                    見学希望の方へ
                </div>
                <!-- /.txt -->
            </a>
        </div>
        <!-- /.block block01 -->
        <div class="block block02 animation animationtoblur">
            <a href="<?php echo $home_url; ?>guide/">
                <div class="illust">
                    <img src="<?php echo $img_url; ?>common/fnav02.png?1" srcset="<?php echo $img_url; ?>common/fnav02.png?1 1x, <?php echo $img_url; ?>common/fnav02@2x.png?1 2x" alt="">
                </div>
                <!-- /.illust -->
                <div class="txt">
                    入園案内
                </div>
                <!-- /.txt -->
            </a>
        </div>
        <!-- /.block block02 -->
        <div class="block block03 animation animationtoblur">
            <a href="<?php echo $home_url; ?>about/">
                <div class="illust">
                    <img src="<?php echo $img_url; ?>common/fnav03.png?1" srcset="<?php echo $img_url; ?>common/fnav03.png?1 1x, <?php echo $img_url; ?>common/fnav03@2x.png?1 2x" alt="">
                </div>
                <!-- /.illust -->
                <div class="txt">
                    はな保育について
                </div>
                <!-- /.txt -->
            </a>
        </div>
        <!-- /.block block03 -->
        <div class="block block04 animation animationtoblur">
            <a href="<?php echo $home_url; ?>school/">
                <div class="illust">
                    <img src="<?php echo $img_url; ?>common/fnav04.png?1" srcset="<?php echo $img_url; ?>common/fnav04.png?1 1x, <?php echo $img_url; ?>common/fnav04@2x.png?1 2x" alt="">
                </div>
                <!-- /.illust -->
                <div class="txt">
                    園舎一覧
                </div>
                <!-- /.txt -->
            </a>
        </div>
        <!-- /.block block04 -->
    </div>
    <!-- /.group -->
</div>
<!-- /.fnav -->

<div class="footerbanner">
    <a href="<?php echo $home_url; ?>kengaku/form/">
        <h5>
            見学申し込み
        </h5>
        <div class="desc">
            入園を検討している方は見学に来ませんか？<br>
            はな保育の保育をぜひ見に来てください。
        </div>
        <!-- /.desc -->
        <div class="link">
            見学お申込み
        </div>
        <!-- /.link -->
    </a>
    <a href="<?php echo $home_url; ?>contact/">
        <h5>
            お問い合わせ
        </h5>
        <div class="desc">
            お問い合わせやご意見などございましたら、<br>
            お気軽にご連絡ください。
        </div>
        <!-- /.desc -->
        <div class="link">
            お問い合わせ
        </div>
        <!-- /.link -->
    </a>
</div>
<!-- /.footer_banner -->

<?php if (pcmobile()) { ?>
    <footer>
        <div class="logo">
            <a href="<?php echo $home_url; ?>">
                <img src="<?php echo $img_url; ?>common/logo01.png" srcset="<?php echo $img_url; ?>common/logo01.png 1x, <?php echo $img_url; ?>common/logo01@2x.png 2x" alt="はな保育">
            </a>
        </div>
        <!-- /.logo -->

        <ul class="nav">
            <li>
                <a href="<?php echo $home_url; ?>">
                    トップ
                </a>
            </li>
            <li>
                <a href="<?php echo $home_url; ?>kengaku/">
                    見学希望の方へ
                </a>
            </li>
            <li>
                <a href="<?php echo $home_url; ?>guide/">
                    入園希望の方へ
                </a>
            </li>
            <li>
                <a href="<?php echo $home_url; ?>about/">
                    はな保育について
                </a>
            </li>
        </ul>
        <!-- /.nav -->
        <div class="banner">
            <a href="<?php echo $recruit_url; ?>" target="_blank">
                <img src="<?php echo $img_url; ?>common/recruit02.png" srcset="<?php echo $img_url; ?>common/recruit02.png 1x, <?php echo $img_url; ?>common/recruit02@2x.png 2x" alt="採用情報">
            </a>
        </div>
        <!-- /.banner -->
        <div class="links">
            <ul>
                <li>
                    <a href="<?php echo $home_url; ?>privacy-policy/">
                        プライバシーポリシー
                    </a>
                </li>
                <li>
                    Copyright &copy; はな保育 All rights reserved.
                </li>
            </ul>
        </div>
        <!-- /.links -->
    </footer>
<?php } else { ?>
    <footer>
        <div class="group">
            <div class="logo">
                <a href="<?php echo $home_url; ?>">
                    <img src="<?php echo $img_url; ?>common/logo01.png" srcset="<?php echo $img_url; ?>common/logo01.png 1x, <?php echo $img_url; ?>common/logo01@2x.png 2x" alt="はな保育">
                </a>
            </div>
            <!-- /.logo -->
            <div class="navs">
                <div class="block">
                    <h6>
                        <a href="<?php echo $home_url; ?>">
                            トップ
                        </a>
                    </h6>
                    <ul>
                        <li>
                            <a href="<?php echo $home_url; ?>news/">
                                お知らせ
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $home_url; ?>blog/">
                                すくすく日記
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $home_url; ?>shigoto/">
                                保育のたね
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $home_url; ?>school/">
                                園舎一覧
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.block -->
                <div class="block">
                    <h6>
                        <a href="<?php echo $home_url; ?>kengaku/">
                            見学希望の方へ
                        </a>
                    </h6>
                    <ul>
                        <li>
                            <a href="<?php echo $home_url; ?>kengaku/#features">
                                園のこだわり
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $home_url; ?>kengaku/#flow">
                                園の1日
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $home_url; ?>kengaku/#schedule">
                                年間行事
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $home_url; ?>kengaku/#environment">
                                環境・設備
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.block -->
                <div class="block">
                    <h6>
                        <a href="<?php echo $home_url; ?>guide/">
                            入園案内
                        </a>
                    </h6>
                    <ul>
                        <li>
                            <a href="<?php echo $home_url; ?>guide/#requirements">
                                募集要項
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $home_url; ?>guide/#flow">
                                入園の流れ
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.block -->
                <div class="block">
                    <h6>
                        <a href="<?php echo $home_url; ?>about/">
                            園について
                        </a>
                    </h6>
                    <ul>
                        <li>
                            <a href="<?php echo $home_url; ?>about/#philosophy">
                                保育理念
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $home_url; ?>about/#goals">
                                保育目標
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $home_url; ?>company/">
                                会社概要
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $recruit_url; ?>" target="_blank">
                                採用情報
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.block -->
            </div>
            <!-- /.nav -->
        </div>
        <!-- /.group -->
        <div class="links">
            <ul>
                <li>
                    <a href="<?php echo $home_url; ?>privacy-policy/">
                        プライバシーポリシー
                    </a>
                </li>
                <li>
                    Copyright &copy; はな保育 All rights reserved.
                </li>
            </ul>
        </div>
        <!-- /.links -->
    </footer>
<?php } ?>

<div class="bannernikki">
    <a href="<?php echo $home_url; ?>blog/">
        <img src="<?php echo $img_url; ?>common/nikki01.png" srcset="<?php echo $img_url; ?>common/nikki01.png 1x, <?php echo $img_url; ?>common/nikki01@2x.png 2x" alt="すくすく日記">
    </a>
</div>
<!-- /.bannernikki -->

<?php if (pcmobile()) { ?>
    <div class="bannersp01">
        <ul>
            <li>
                <a href="<?php echo $home_url; ?>kengaku/">
                    <span>保護者様</span><span>見学案内</span>
                </a>
            </li>
            <li>
                <a href="<?php echo $home_url; ?>recruit/" target="_blank">
                    採用案内
                </a>
            </li>
            <li>
                <a href="<?php echo $home_url; ?>blog/">
                    すくすく日記
                </a>
            </li>
        </ul>
    </div>
    <!-- /.bannersp01 -->
<?php } else { ?>

<?php } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo $home_url; ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo $home_url; ?>/js/slick.min.js"></script>
<script src="<?php echo $home_url; ?>/js/jquery.matchHeight.js"></script>
<script src="<?php echo $home_url; ?>/js/style.js?<?php echo time(); ?>"></script>
<?php wp_footer(); ?>
<script id="lampchat-widget" src="https://lampchat.io/widgets/widgetv3.js" fgid="vj2ENhhmAWw"></script>
</body>
</html>