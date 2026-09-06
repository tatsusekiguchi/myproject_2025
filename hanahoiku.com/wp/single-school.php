<?php include('/home/hanahoiku/www/parts/config.php'); ?>
<?php require_once('/home/hanahoiku/www/wordpress/wp-content/themes/hanahoiku/functions.php'); ?>
<?php
/**
 * @package WordPress
 * @subpackage hanahoiku
 * @since Twenty Fifteen 1.0
 */
get_header();
?>

<?php
$value = get_field("comingsoon");
if ($value) {
?>
    <div class="fv">
        <div class="image">
            <img src="<?php echo $img_url; ?>school/comingsoon01.jpg" srcset="<?php echo $img_url; ?>school/comingsoon01.jpg 1x, <?php echo $img_url; ?>school/comingsoon01@2x.jpg 2x" alt="保育園">
        </div>
        <!-- /.image -->
    </div>
    <!-- /.fv -->
    <div class="comingsoon">
        <div class="name">
            <?php the_field('name'); ?>
        </div>
        <!-- /.name -->
        <div class="title">
            <?php the_field('comingsoon01'); ?>
        </div>
        <!-- /.title -->
        <div class="comingsoon01">
            <img src="<?php echo $img_url; ?>school/comingsoon02.png" srcset="<?php echo $img_url; ?>school/comingsoon02.png 1x, <?php echo $img_url; ?>school/comingsoon02@2x.png 2x" alt="保育園">
        </div>
        <!-- /.comingsoon01 -->
    </div>
    <!-- /.comingsoon -->

    <?php get_footer(); ?>
<?php
} else {
?>
    <div class="fv">
        <div class="image">
            <?php if (is_mobile()) { ?>
                <?php $image02 = get_field('image02'); ?>
                <?php $size = 'full'; ?>
                <?php if ($image02) : ?>
                    <?php echo wp_get_attachment_image($image02, $size); ?>
                <?php endif; ?>
            <?php } else { ?>





                <?php
                $image = get_field('image01');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }
                ?>

            <?php } ?>

        </div>
        <!-- /.image -->
        <div class="mnav">
            <!-- <div class="illust animation animationtoblur">
			<img src="<?php echo $img_url; ?>school/illust02.png" srcset="<?php echo $img_url; ?>school/illust02.png 1x, <?php echo $img_url; ?>school/illust02@2x.png 2x" alt="<?php the_field('name'); ?>">
		</div> -->
            <!-- /.illust -->
            <ul>
                <li>
                    <a href="#information">
                        園概要
                    </a>
                </li>
                <li>
                    <a href="#blog">
                        すくすく日記
                    </a>
                </li>
                <li>
                    <a href="#greeting">
                        園長のあいさつ
                    </a>
                </li>
                <li>
                    <a href="#teacher">
                        先生紹介
                    </a>
                </li>

                <li>
                    <a href="https://en-photo.net/login" target="_blank">
                        写真購入はこちら
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.mnav -->
    </div>
    <!-- /.mnav -->
    </div>
    <!-- /.fv -->

    <section id="information">
        <!-- <div class="illust animation animationtoblur">
		<img src="<?php echo $img_url; ?>school/illust04.png" srcset="<?php echo $img_url; ?>school/illust04.png 1x, <?php echo $img_url; ?>school/illust04@2x.png 2x" alt="園概要">
	</div> -->
        <!-- /.illust -->
        <div class="header">
            <h2 class="animation animationtoblur">
                園概要
            </h2>
            <h3 class="animation animationtoblur">
                Information
            </h3>
        </div>
        <!-- /.header -->
        <?php if (have_rows('gaiyou')) : ?>
            <table class="gaiyou">
                <?php while (have_rows('gaiyou')) : the_row(); ?>
                    <tr class="animation animationtoblur">
                        <th>
                            園名
                        </th>
                        <td>
                            <?php the_field('name'); ?>
                        </td>
                    </tr>
                    <tr class="animation animationtoblur">
                        <th>
                            住所
                        </th>
                        <td>
                            <?php the_sub_field('zip'); ?> <?php the_sub_field('address'); ?>
                        </td>
                    </tr>
                    <tr class="animation animationtoblur">
                        <th>
                            TEL
                        </th>
                        <td>
                            <a href="tel:<?php the_sub_field('tel'); ?>">
                                <?php the_sub_field('tel'); ?>
                            </a>

                        </td>
                    </tr>
                    <tr class="animation animationtoblur">
                        <th>
                            保育時間
                        </th>
                        <td>
                            <?php the_sub_field('jikan'); ?>
                        </td>
                    </tr>
                    <tr class="animation animationtoblur">
                        <th>
                            対象年齢
                        </th>
                        <td>
                            <?php the_sub_field('taisho'); ?>
                        </td>
                    </tr>

                    <?php 
                    $ukezara = get_field( "ukezara" );
                    if( $ukezara ) {
                    ?>
                    <tr class="animation animationtoblur">
                        <th>
                            卒業後の受け皿
                        </th>
                        <td>
                            <?php the_sub_field('ukezara'); ?>
                        </td>
                    </tr>
                    <?php
                    } else {
                    ?>
                    
                    <?php
                    }
                    ?>
                    
                    <tr class="animation animationtoblur">
                        <th>
                            担当部署
                        </th>
                        <td>
                            <?php the_sub_field('yakusho-renraku'); ?>
                        </td>
                    </tr>
                    <?php 
                    $bikou = get_field( "bikou" );
                    if( $bikou ) {
                    ?>
                    <tr class="animation animationtoblur">
                        <th>
                            備考
                        </th>
                        <td>
                            <?php the_sub_field('bikou'); ?>
                        </td>
                    </tr>
                    <?php
                    } else {
                    ?>
                    
                    <?php
                    }
                    ?>
                    
                <?php endwhile; ?>
            </table>
        <?php endif; ?>
        <h4 class="animation animationtoblur">
            定員
        </h4>
        <?php if (pcmobile()) { ?>
            <?php if (have_rows('teiin')) : ?>
                <div class="ukeire">
                    <?php while (have_rows('teiin')) : the_row(); ?>
                        <div class="ukeire01">
                            <dl class="animation animationtoblur">
                                <dt>
                                    0歳
                                </dt>
                                <dd>
                                    <?php the_sub_field('0y'); ?>
                                </dd>
                            </dl>
                            <dl class="animation animationtoblur">
                                <dt>
                                    1歳
                                </dt>
                                <dd>
                                    <?php the_sub_field('1y'); ?>
                                </dd>
                            </dl>
                            <dl class="animation animationtoblur">
                                <dt>
                                    2歳
                                </dt>
                                <dd>
                                    <?php the_sub_field('2y'); ?>
                                </dd>
                            </dl>
                        </div>
                        <!-- /.ukeire01 -->
                        <div class="ukeire02">
                            <dl class="animation animationtoblur">
                                <dt>
                                    3歳
                                </dt>
                                <dd>
                                    <?php the_sub_field('3y'); ?>
                                </dd>
                            </dl>
                            <dl class="animation animationtoblur">
                                <dt>
                                    4歳
                                </dt>
                                <dd>
                                    <?php the_sub_field('4y'); ?>
                                </dd>
                            </dl>
                            <dl class="animation animationtoblur">
                                <dt>
                                    5歳
                                </dt>
                                <dd>
                                    <?php the_sub_field('5y'); ?>
                                </dd>
                            </dl>
                        </div>
                        <!-- /.ukeire02 -->
                        <div class="ukeire03">
                            <dl class="animation animationtoblur">
                                <dt>
                                    定員
                                </dt>
                                <dd>
                                    <?php the_sub_field('max'); ?>
                                </dd>
                            </dl>
                        </div>
                        <!-- /.ukeire03 -->
                    <?php endwhile; ?>
                </div>
                <!-- /.ukeire -->

            <?php endif; ?>
        <?php } else { ?>
            <?php if (have_rows('teiin')) : ?>
                <table class="ukeire">
                    <?php while (have_rows('teiin')) : the_row(); ?>
                        <tr class="animation animationtoblur">
                            <th>
                                0歳
                            </th>
                            <th>
                                1歳
                            </th>
                            <th>
                                2歳
                            </th>
                            <th>
                                3歳
                            </th>
                            <th>
                                4歳
                            </th>
                            <th>
                                5歳
                            </th>
                            <th>
                                定員
                            </th>
                        </tr>
                        <tr class="animation animationtoblur">
                            <td>
                                <?php the_sub_field('0y'); ?>
                            </td>
                            <td>
                                <?php the_sub_field('1y'); ?>
                            </td>
                            <td>
                                <?php the_sub_field('2y'); ?>
                            </td>
                            <td>
                                <?php the_sub_field('3y'); ?>
                            </td>
                            <td>
                                <?php the_sub_field('4y'); ?>
                            </td>
                            <td>
                                <?php the_sub_field('5y'); ?>
                            </td>
                            <td>
                                <?php the_sub_field('max'); ?>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            <?php endif; ?>
        <?php } ?>

        <div id="map">
            <div class="block">
                <div class="map animation animationtoblur">
                    <?php echo get_field('map'); ?>
                </div>
                <!-- /.map -->
                <div class="data">
                    <h4 class="animation animationtoblur">
                        アクセス
                    </h4>
                    <?php if (have_rows('gaiyou')) : ?>
                        <?php while (have_rows('gaiyou')) : the_row(); ?>
                            <div class="address animation animationtoblur">
                                <?php the_sub_field('address'); ?>
                            </div>
                            <!-- /.address -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="link animation animationtoblur">
                        <a href="<?php the_field('maplink'); ?>" target="_blnak">
                            <i class="fas fa-map-marker-alt"></i> GoogleMap
                        </a>
                    </div>
                    <!-- /.link -->
                    <div class="acccess animation animationtoblur">
                        <?php the_field('access'); ?>
                    </div>
                    <!-- /.acccess -->
                </div>
                <!-- /.data -->
            </div>
            <!-- /.block -->
        </div>
        <!-- /#map -->
    </section>
    <!-- /#information -->

    <section id="concept">
        <?php if (pcmobile()) { ?>
            <div class="name animation animationtoblur">
                <?php the_field('name'); ?>
            </div>
            <!-- /.name -->

            <div class="image image01 animation animation02">
                <?php if (have_rows('subimg')) : ?>
                    <?php while (have_rows('subimg')) : the_row(); ?>
                        <?php $subimg01 = get_sub_field('subimg01'); ?>
                        <?php $size = 'full'; ?>
                        <?php if ($subimg01) : ?>
                            <?php echo wp_get_attachment_image($subimg01, $size); ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- /.image image01 -->

            <div class="image image02 animation animation02">
                <?php if (have_rows('subimg')) : ?>
                    <?php while (have_rows('subimg')) : the_row(); ?>
                        <?php $subimg02 = get_sub_field('subimg02'); ?>
                        <?php $size = 'full'; ?>
                        <?php if ($subimg02) : ?>
                            <?php echo wp_get_attachment_image($subimg02, $size); ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- /.image02 -->

            <div class="txt animation animationtoblur">
                <!-- <?php the_field('desc'); ?> -->
                <?php echo get_field('desc'); ?>
            </div>
            <!-- /.txt -->

            <div class="images">
                <?php if (have_rows('subimg')) : ?>
                    <?php while (have_rows('subimg')) : the_row(); ?>
                        <?php $subimg03 = get_sub_field('subimg03'); ?>
                        <div class="image03 animation animation02">
                            <?php $size = 'full'; ?>
                            <?php if ($subimg03) : ?>
                                <?php echo wp_get_attachment_image($subimg03, $size); ?>
                        </div>
                        <!-- /.image03 -->
                    <?php endif; ?>
                    <?php $subimg04 = get_sub_field('subimg04'); ?>
                    <div class="image04 animation animation02">
                        <?php $size = 'full'; ?>
                        <?php if ($subimg04) : ?>
                            <?php echo wp_get_attachment_image($subimg04, $size); ?>
                    </div>
                    <!-- /.image04 -->
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
            </div>
            <!-- /.images -->

        <?php } else { ?>
            <div class="left">
                <div class="image animation animation02">
                    <?php if (have_rows('subimg')) : ?>
                        <?php while (have_rows('subimg')) : the_row(); ?>
                            <?php $subimg01 = get_sub_field('subimg01'); ?>
                            <?php $size = 'full'; ?>
                            <?php if ($subimg01) : ?>
                                <?php echo wp_get_attachment_image($subimg01, $size); ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- /.image -->
                <div class="txt animation animationtoblur">
                    <!-- <?php the_field('desc'); ?> -->
                    <?php echo get_field('desc'); ?>
                </div>
                <!-- /.txt -->
            </div>
            <!-- /.left -->
            <div class="right">
                <div class="name animation animationtoblur">
                    <?php the_field('name'); ?>
                </div>
                <!-- /.name -->
                <div class="image02 animation animation02">
                    <?php if (have_rows('subimg')) : ?>
                        <?php while (have_rows('subimg')) : the_row(); ?>
                            <?php $subimg02 = get_sub_field('subimg02'); ?>
                            <?php $size = 'full'; ?>
                            <?php if ($subimg02) : ?>
                                <?php echo wp_get_attachment_image($subimg02, $size); ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- /.image02 -->
                <div class="images">
                    <?php if (have_rows('subimg')) : ?>
                        <?php while (have_rows('subimg')) : the_row(); ?>
                            <?php $subimg03 = get_sub_field('subimg03'); ?>
                            <div class="image03 animation animation02">
                                <?php $size = 'full'; ?>
                                <?php if ($subimg03) : ?>
                                    <?php echo wp_get_attachment_image($subimg03, $size); ?>
                            </div>
                            <!-- /.image03 -->
                        <?php endif; ?>
                        <?php $subimg04 = get_sub_field('subimg04'); ?>
                        <div class="image04 animation animation02">
                            <?php $size = 'full'; ?>
                            <?php if ($subimg04) : ?>
                                <?php echo wp_get_attachment_image($subimg04, $size); ?>
                        </div>
                        <!-- /.image04 -->
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
                </div>
                <!-- /.images -->
            </div>
            <!-- /.right -->
        <?php } ?>
    </section>
    <!-- /#concept -->

    <section id="blog">
        <div class="header">
            <!-- <div class="image animation animationtoblur">
			<img src="<?php echo $img_url; ?>/home/blog01.png" srcset="<?php echo $img_url; ?>/home/blog01.png 1x, <?php echo $img_url; ?>/home/blog01@2x.png 2x" alt="すくすく日記">
		</div> -->
            <!-- /.image -->
            <div class="group">
                <h2 class="animation animationtoblur">
                    <span>すくすく日記</span><span></span>
                </h2>
                <div class="block">
                    <div class="desc animation animationtoblur">
                        それぞれの園舎での様子をどんどん更新しています.
                    </div>
                    <!-- /.desc -->
                </div>
                <!-- /.block -->
            </div>
            <!-- /.group -->

        </div>
        <!-- /.header -->
        <?php
        if (is_single('10359')) { //こがね
            $args = array(
                'category_name' => 'kogane',
                'posts_per_page' => 8,
            );
            $category_name = 'kogane';
        } elseif (is_single('10360')) { //おおすかんのん前
            $args = array(
                'category_name' => 'osu',
                'posts_per_page' => 8,
            );
            $category_name = 'osu';
        } elseif (is_single('10361')) { //にしはる駅前
            $args = array(
                'category_name' => 'nishiharu',
                'posts_per_page' => 8,
            );
            $category_name = 'nishiharu';
        } elseif (is_single('10362')) { //いちのみや駅前
            $args = array(
                'category_name' => 'ichinomiya',
                'posts_per_page' => 8,
            );
            $category_name = 'ichinomiya';
        } elseif (is_single('10363')) { //いちのみやみなみ
            $args = array(
                'category_name' => 'ichinomiyaminami',
                'posts_per_page' => 8,
            );
            $category_name = 'ichinomiyaminami';
        } elseif (is_single('10364')) { //はなみずき通
            $args = array(
                'category_name' => 'hanamizuki',
                'posts_per_page' => 8,
            );
            $category_name = 'hanamizuki';
        } elseif (is_single('10365')) { //せんのんじ
            $args = array(
                'category_name' => 'sennonji',
                'posts_per_page' => 8,
            );
            $category_name = 'sennonji';
        } elseif (is_single('10366')) { //とくしげ駅前
            $args = array(
                'category_name' => 'tokushige',
                'posts_per_page' => 8,
            );
            $category_name = 'tokushige';
        } elseif (is_single('10367')) { //いまいせ
            $args = array(
                'category_name' => 'imaise',
                'posts_per_page' => 8,
            );
            $category_name = 'imaise';
        } elseif (is_single('10368')) { //ひろじほんまち
            $args = array(
                'category_name' => 'hirojihonmachi',
                'posts_per_page' => 8,
            );
            $category_name = 'hirojihonmachi';
        } elseif (is_single('15668')) { //いちのみや駅西
            $args = array(
                'category_name' => 'ichinomiyaekinishi',
                'posts_per_page' => 8,
            );
            $category_name = 'ichinomiyaekinishi';
        } elseif (is_single('21950')) { //くわな駅前
            $args = array(
                'category_name' => 'kuwana',
                'posts_per_page' => 8,
            );
            $category_name = 'kuwana';
        } elseif (is_single('21948')) { //しらかわこうえん前
            $args = array(
                'category_name' => 'shirakawakouen',
                'posts_per_page' => 8,
            );
            $category_name = 'shirakawakouen';
        } elseif (is_single('28008')) { //いまいせきた
            $args = array(
                'category_name' => 'imaisekita',
                'posts_per_page' => 8,
            );
            $category_name = 'imaisekita';
        } elseif (is_single('35002')) { //せきとり
            $args = array(
                'category_name' => 'sekitori',
                'posts_per_page' => 8,
            );
            $category_name = 'sekitori';
        } elseif (is_single('35000')) { //としょかん通
            $args = array(
                'category_name' => 'toshokandori',
                'posts_per_page' => 8,
            );
            $category_name = 'toshokandori';
        } elseif (is_single('34998')) { //たかよこすか
            $args = array(
                'category_name' => 'takayokosuka',
                'posts_per_page' => 8,
            );
            $category_name = 'takayokosuka';
        } elseif (is_single('34995')) { //きょうわ駅前
            $args = array(
                'category_name' => 'kyowa',
                'posts_per_page' => 8,
            );
            $category_name = 'kyowa';
        } elseif (is_single('59533')) { //あらこ
            $args = array(
                'category_name' => 'arako',
                'posts_per_page' => 8,
            );
            $category_name = 'arako';
        } elseif (is_single('59535')) { //かぎや
            $args = array(
                'category_name' => 'kagiya',
                'posts_per_page' => 8,
            );
            $category_name = 'kagiya';
        } elseif (is_single('59536')) { //うぬま駅前
            $args = array(
                'category_name' => 'unuma',
                'posts_per_page' => 8,
            );
            $category_name = 'unuma';
        } elseif (is_single('67419')) { //ほづみ
            $args = array(
                'category_name' => 'hozumi',
                'posts_per_page' => 8,
            );
            $category_name = 'hozumi';
        } elseif (is_single('70069')) { //はないけ
            $args = array(
                'category_name' => 'hanaike',
                'posts_per_page' => 8,
            );
            $category_name = 'hanaike';
        } elseif (is_single('74616')) { //じょうしん駅前
            $args = array(
                'category_name' => 'joshin',
                'posts_per_page' => 8,
            );
            $category_name = 'joshin';
        } elseif (is_single('108506')) { //ほりた通
            $args = array(
                'category_name' => 'horita',
                'posts_per_page' => 8,
            );
            $category_name = 'horita';
        } elseif (is_single('148752')) { //くるまみち
            $args = array(
                'category_name' => 'kurumamichi',
                'posts_per_page' => 8,
            );
            $category_name = 'kurumamichi';
        } elseif (is_single('161702')) { //かみさと
            $args = array(
                'category_name' => 'kamisato',
                'posts_per_page' => 8,
            );
            $category_name = 'kamisato';
        }

        $the_query = new WP_Query($args);
        // ループ
        if ($the_query->have_posts()) :
        ?>
            <?php if (pcmobile()) { ?>
                <div class="slider">
                <?php } else { ?>
                    <div class="group">
                    <?php } ?>
                    <?php
                    while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                        <div class="block">
                            <div class="image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if (has_post_thumbnail()) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
                                        the_post_thumbnail('thumbnail');
                                    } else {
                                    ?>
                                        <img src="<?php echo $img_url; ?>common/nophoto01.png" alt="写真">
                                    <?php
                                    }
                                    ?>
                                    <div class="name">
                                        <?php
                                        $categories = get_the_category();
                                        if ($categories) {
                                            echo '<ul>';
                                            foreach ($categories as $category) {
                                                echo '<li>' . $category->name . '</li>';
                                            }
                                            echo '</ul>';
                                        }
                                        ?>
                                    </div>
                                    <!-- /.name -->
                                </a>
                            </div>
                            <!-- /.image -->
                            <div class="txt">
                                <div class="data">
                                    <div class="date">
                                        <?php the_time('Y.n.j'); ?>
                                    </div>
                                    <!-- /.date -->
                                    <?php if (pcmobile()) { ?>

                                    <?php } else { ?>
                                        <div class="cate">

                                        </div>
                                        <!-- /.cate -->
                                    <?php } ?>
                                </div>
                                <!-- /.data -->
                                <div class="title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                                <!-- /.title -->
                                <?php if (pcmobile()) { ?>
                                    <div class="cate">

                                    </div>
                                    <!-- /.cate -->
                                <?php } else { ?>

                                <?php } ?>
                            </div>
                            <!-- /.txt -->
                        </div>
                        <!-- /.block -->
                    <?php
                    endwhile;
                    ?>
                    <?php if (pcmobile()) { ?>
                    </div>
                    <!-- /.slider -->
                <?php } else { ?>
                </div>
                <!-- /.group -->
            <?php } ?>
        <?php
        endif;
        // 投稿データをリセット
        wp_reset_postdata();
        ?>
        <?php if (pcmobile()) { ?>
            <div class="link animation animationtoblur">
                <a href="<?php echo esc_url(home_url("/")); ?>category/<?php echo $category_name; ?>/">
                    一覧を見る
                </a>
            </div>
        <?php } else { ?>
            <div class="link animation animationtoblur">
                <a href="<?php echo esc_url(home_url("/")); ?>category/<?php echo $category_name; ?>/">
                    一覧を見る
                </a>
            </div>
        <?php } ?>
        <!-- /.link -->
    </section>
    <!-- /#blog -->

    <section id="greeting">
        <div class="header">
            <h2 class="animation animationtoblur">
                園長先生のあいさつ
            </h2>
            <h3 class="animation animationtoblur">
                Greeting
            </h3>
        </div>
        <!-- /.header -->
        <div class="group">
            <div class="txt">
                <?php if (have_rows('encho')) : ?>
                    <?php while (have_rows('encho')) : the_row(); ?>
                        <h4 class="catch animation animationtoblur">
                            <?php the_sub_field('encho-catch'); ?>
                        </h4>
                        <div class="desc animation animationtoblur">
                            <?php echo get_sub_field('encho-aisatsu'); ?>
                            <!-- <?php the_sub_field('encho-aisatsu'); ?> -->
                        </div>
                        <!-- /.desc -->
                        <div class="name animation animationtoblur">
                            <?php the_sub_field('encho-name'); ?> 園長
                        </div>
                        <!-- /.name -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- /.txt -->
            <div class="image animation animation02">
                <?php if (have_rows('encho')) : ?>
                    <?php while (have_rows('encho')) : the_row(); ?>
                        <?php if (is_mobile()) { ?>
                            <?php $encho_image02 = get_sub_field('encho-image02'); ?>
                            <?php $size = 'full'; ?>
                            <?php if ($encho_image02) : ?>
                                <?php echo wp_get_attachment_image($encho_image02, $size); ?>
                            <?php endif; ?>
                        <?php } else { ?>
                            <?php $encho_image = get_sub_field('encho-image'); ?>
                            <?php $size = 'full'; ?>
                            <?php if ($encho_image) : ?>
                                <?php echo wp_get_attachment_image($encho_image, $size); ?>
                            <?php endif; ?>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- /.image -->
        </div>
        <!-- /.group -->
    </section>
    <!-- /#greeting -->

    <section id="teacher">
        <div class="header">
            <h2 class="animation animationtoblur">
                先生紹介
            </h2>
            <h3 class="animation animationtoblur">
                Teacher
            </h3>
        </div>
        <!-- /.header -->
        <?php $sensei_image01 = get_field('sensei-image'); ?>
        <?php $size = 'full'; ?>
        <?php if ($sensei_image01) : ?>
            <div class="image image01 animation animation02 animation03">
                <?php echo wp_get_attachment_image($sensei_image01, $size); ?>
            </div>
            <!-- /.image -->
        <?php endif; ?>
        <?php $sensei_image02 = get_field('sensei-image-02'); ?>
        <?php $size = 'full'; ?>
        <?php if ($sensei_image02) : ?>
            <div class="image image02 animation animation02 animation03">
                <?php echo wp_get_attachment_image($sensei_image02, $size); ?>
            </div>
            <!-- /.image -->
        <?php endif; ?>
        <?php $sensei_image03 = get_field('sensei-image-03'); ?>
        <?php $size = 'full'; ?>
        <?php if ($sensei_image03) : ?>
            <div class="image image03 animation animation02 animation03">
                <?php echo wp_get_attachment_image($sensei_image03, $size); ?>
            </div>
            <!-- /.image -->
        <?php endif; ?>
    </section>
    <!-- /#teacher -->

    <?php get_footer(); ?>

    <?php if (pcmobile()) { ?>
        <script>
            $(document).ready(function() {
                $('#blog .slider').slick({
                    autoplay: true,
                    arrows: false,
                    dots: false,
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1
                });
            });
        </script>
    <?php } else { ?>

    <?php } ?>
<?php
}
?>