<?php include('parts/config.php'); ?>
<?php include('parts/head.php'); ?>

<body class="home" ontouchstart="">
    <?php include('parts/header.php'); ?>
    <div class="fv">
        <div class="logo">
            <img src="<?php echo $img_url; ?>common/logo02.png" srcset="<?php echo $img_url; ?>common/logo02.png 1x, <?php echo $img_url; ?>common/logo02@2x.png 2x" alt="はな保育">
        </div>
        <!-- /.logo -->
        <?php if (pcmobile()) { ?>
            <div class="copyright">
                Copyright &copy; HANAHOIKU All rights reserved.
            </div>
            <!-- /.copyright -->
        <?php } else { ?>

        <?php } ?>
        <div class="bannerrecruit">
            <a href="<?php echo $recruit_url; ?>" target="_blank">
            <img src="<?php echo $img_url; ?>common/bannerrecruit02.png" srcset="<?php echo $img_url; ?>common/bannerrecruit02.png 1x, <?php echo $img_url; ?>common/bannerrecruit02@2x.png 2x" alt="採用情報">
            </a>
        </div>
        <!-- /.bannerrecruit -->
    </div>
    <!-- /.fv -->

    <section id="news">
        <div class="header">
            <?php if (pcmobile()) { ?>
            <?php } else { ?>

            <?php } ?>
            <h2 class="animation animationtoblur">
                お知らせ
            </h2>
            <!-- /.desc -->
        </div>
        <!-- /.header -->
        <div class="group">
            <div class="lists">
                <div class="list">
                    <?php
                    $args = array(
                        'post_type' => 'news',
                        'posts_per_page' => 5
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                    ?>

                        <?php
                        while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                            <?php if (pcmobile()) { ?>
                                <div class="block animation animationtotop">
                                    <div class="data">
                                        <div class="date">
                                            <?php the_time('Y.n.j'); ?>
                                        </div>
                                        <!-- /.date -->
                                    </div>
                                    <!-- /.data -->

                                    <div class="title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                    <!-- /.title -->
                                </div>
                                <!-- /.block -->
                            <?php } else { ?>
                                <div class="block animation animationtotop">
                                    <ul class="newscate hidden">
                                        <?php
                                        $terms = get_the_terms($post->ID, 'newscate');
                                        if ($terms) {
                                            foreach ($terms as $term) {
                                                $term_link = get_term_link($term);
                                                echo '<li><a href="' . esc_url($term_link) . '">' . $term->name . '</a></li>';
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <div class="data">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="date">
                                                <?php the_time('Y.n.j'); ?>
                                            </div>
                                            <!-- /.date -->
                                            <div class="title">
                                                <?php the_title(); ?>
                                            </div>
                                            <!-- /.title -->
                                        </a>
                                    </div>
                                    <!-- /.data -->
                                </div>
                                <!-- /.block -->
                            <?php } ?>
                        <?php
                        endwhile;
                        ?>

                    <?php

                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <!-- /.list -->
                <div class="link animation animationtotop">
                    <a href="<?php echo $home_url; ?>news/">
                        一覧を見る
                    </a>
                </div>
                <!-- /.link -->
            </div>
            <!-- /.lists -->
            <?php if (is_mobile()) { ?>
                <?php
                if (have_rows('banner', 'option')) :
                ?>
                    <div class="banners">
                        <?php
                        while (have_rows('banner', 'option')) : the_row();
                        ?>
                            <div class="banner animation animationtotop">
                                <a href="<?php the_sub_field('url'); ?>">
                                    <?php
                                    $image = get_sub_field('image');
                                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size);
                                    }
                                    ?>
                                </a>
                            </div>
                            <!-- /.banner -->
                        <?php
                        endwhile;
                        ?>
                    </div>
                    <!-- /.banners -->
                <?php
                else :
                endif;
                ?>
            <?php } else { ?>
                <?php
                if (have_rows('banner', 'option')) :
                ?>
                    <div class="banners">
                        <?php
                        while (have_rows('banner', 'option')) : the_row();
                        ?>
                            <div class="banner animation animationtotop">
                                <a href="<?php the_sub_field('url'); ?>">
                                    <?php
                                    $image = get_sub_field('image');
                                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size);
                                    }
                                    ?>
                                </a>
                            </div>
                            <!-- /.banner -->
                        <?php
                        endwhile;
                        ?>
                    </div>
                    <!-- /.banners -->
                <?php
                else :
                endif;
                ?>
            <?php } ?>
        </div>
        <!-- /.group -->
    </section>
    <!-- /#news -->

    <section id="philosophy">
        <div class="group01">
            <div class="header">
                <h2 class="animation animationtoblur">
                    はな保育の思い
                </h2>
                <h3 class="animation animationtoblur">
                    Hanahoiku philosophy
                </h3>
            </div>
            <!-- /.header -->
            <div class="image animation animation02">
                <img src="<?php echo $img_url; ?>home/philosophy01.jpg" srcset="<?php echo $img_url; ?>home/philosophy01.jpg 1x, <?php echo $img_url; ?>home/philosophy01@2x.jpg 2x" alt="はな保育の思い">
            </div>
            <!-- /.image -->
        </div>
        <!-- /.group01 -->
        <div class="group02">
            <div class="header animation animationtoblur">
                <img src="<?php echo $img_url; ?>home/philosophy04.png" srcset="<?php echo $img_url; ?>home/philosophy04.png 1x, <?php echo $img_url; ?>home/philosophy04@2x.png 2x" alt="自分らしく、生きる。">
            </div>
            <!-- /.header -->
            <?php if (pcmobile()) { ?>
                <div class="desc animation animationtoblur">
                    ひとりひとりの子どもに丁寧に向き合い、自分らしさを大切に。すべての活動の主体は「子ども」になるよう子ども自身の生きる力を育みます。<br>
                    <br>
                    体験することを大切にし、体験から得た知識を分かち合い、喜び合い<br>
                    思いきり遊び、たくさんのことを学ぶ子を育てる。
                </div>
                <!-- /.desc -->
            <?php } else { ?>
                <div class="desc animation animationtoblur">
                    ひとりひとりの子どもに丁寧に向き合い、自分らしさを大切に。<br>
                    すべての活動の主体は「子ども」になるよう子ども自身の生きる力を育みます。<br>
                    <br>
                    体験することを大切にし、体験から得た知識を分かち合い、喜び合い<br>
                    思いきり遊び、たくさんのことを学ぶ子を育てる。
                </div>
                <!-- /.desc -->
            <?php } ?>
            <div class="images">
                <div class="image image01 animation animation02">
                    <img src="<?php echo $img_url; ?>home/philosophy02.jpg?1" srcset="<?php echo $img_url; ?>home/philosophy02.jpg?1 1x, <?php echo $img_url; ?>home/philosophy02@2x.jpg?1 2x" alt="自分らしく、生きる。">
                </div>
                <!-- /.image image01 -->
                <div class="image image02 animation animation02">
                    <img src="<?php echo $img_url; ?>home/philosophy03.jpg" srcset="<?php echo $img_url; ?>home/philosophy03.jpg 1x, <?php echo $img_url; ?>home/philosophy03@2x.jpg 2x" alt="自分らしく、生きる。">
                </div>
                <!-- /.image image02 -->
                <!-- <div class="image image03">
                    <img src="<?php echo $img_url; ?>home/philosophy05.png" srcset="<?php echo $img_url; ?>home/philosophy05.png 1x, <?php echo $img_url; ?>home/philosophy05@2x.png 2x" alt="自分らしく、生きる。">
                </div> -->
                <!-- /.image image03 -->
            </div>
            <!-- /.images -->
        </div>
        <!-- /.group02 -->
    </section>
    <!-- /#philosophy -->

    <section id="kengaku">
        <!-- <div class="illust01 animation animationtoblur">
            <img src="<?php echo $img_url; ?>home/kengaku01.png" srcset="<?php echo $img_url; ?>home/kengaku01.png 1x, <?php echo $img_url; ?>home/kengaku01@2x.png 2x" alt="見学希望の方へ">
        </div> -->
        <!-- /.illust01 -->
        <div class="header">
            <div class="slider">
                <div class="image">
                    <img src="<?php echo $img_url; ?>home/kengaku03.jpg" srcset="<?php echo $img_url; ?>home/kengaku03.jpg 1x, <?php echo $img_url; ?>home/kengaku03@2x.jpg 2x" alt="見学希望の方へ">
                </div>
                <!-- /.image -->
                <div class="image">
                    <img src="<?php echo $img_url; ?>home/kengaku04.jpg?1" srcset="<?php echo $img_url; ?>home/kengaku04.jpg?1 1x, <?php echo $img_url; ?>home/kengaku04@2x.jpg?1 2x" alt="見学希望の方へ">
                </div>
                <!-- /.image -->
                <div class="image">
                    <img src="<?php echo $img_url; ?>home/kengaku05.jpg" srcset="<?php echo $img_url; ?>home/kengaku05.jpg 1x, <?php echo $img_url; ?>home/kengaku05@2x.jpg 2x" alt="見学希望の方へ">
                </div>
                <!-- /.image -->
            </div>
            <!-- /.slider -->
            <h2 class="animation animationtoblur">
                <img src="<?php echo $img_url; ?>home/kengaku02.png" srcset="<?php echo $img_url; ?>home/kengaku02.png 1x, <?php echo $img_url; ?>home/kengaku02@2x.png 2x" alt="見学希望の方へ">
            </h2>
        </div>
        <!-- /.header -->
        <div class="group">
            <div class="txt">
                <h3 class="animation animationtoblur">
                    子どもたちの心と体を守り<br>
                    すこやかに育む環境づくり

                </h3>
                <div class="desc animation animationtoblur">
                    はな保育では、保育者が子ども一人ひとりと<br class="visible-xs">しっかりと向き合い、常に子どもの心に<br class="visible-xs">寄り添った保育、子どもの声にとことん耳を傾ける保育をしていける体制を整えています。また、安心してお預けいただけるよう、安全対策にも注力しています。
                </div>
                <!-- /.desc -->
            </div>
            <!-- /.txt -->
            <div class="link animation animationtotop">
                <a href="<?php echo $home_url; ?>kengaku/">
                    詳しく見る
                </a>
            </div>
            <!-- /.link -->
        </div>
        <!-- /.group -->
    </section>
    <!-- /#kengaku -->

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
                    <?php if (pcmobile()) { ?>

                    <?php } else { ?>
                        <div class="link animation animationtotop">
                            <a href="<?php echo $home_url; ?>blog/">
                                すくすく日記はこちら
                            </a>
                        </div>
                        <!-- /.link -->
                    <?php } ?>
                </div>
                <!-- /.block -->
            </div>
            <!-- /.group -->

        </div>
        <!-- /.header -->
        <div class="list hidden">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 8
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>

                <?php
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <?php if (is_mobile()) { ?>
                        <div class="block">
                        <?php } else { ?>
                            <div class="block animation animationtotop">
                            <?php } ?>
                            <div class="image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if (has_post_thumbnail()) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
                                        the_post_thumbnail('thumbnail');
                                    } else {
                                    ?>
                                        <img src="<?php echo $img_url; ?>/blog/nophoto01.png" alt="ブログ">
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
                                    <div class="cate">

                                    </div>
                                    <!-- /.cate -->
                                </div>
                                <!-- /.data -->
                                <div class="title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                                <!-- /.title -->
                            </div>
                            <!-- /.txt -->
                            </div>
                            <!-- /.block -->
                        <?php
                    endwhile;
                        ?>

                    <?php

                endif;
                wp_reset_postdata();
                    ?>
                        </div>
                        <!-- /.list -->

                        <?php if (pcmobile()) { ?>
                            <div class="link animation animationtotop">
                                <a href="<?php echo $home_url; ?>blog/">
                                    すくすく日記はこちら
                                </a>
                            </div>
                            <!-- /.link -->
                        <?php } else { ?>

                        <?php } ?>
    </section>
    <!-- /#blog -->

    <section id="guide">
        <!-- <div class="illust01 animation animationtoblur">
            <img src="<?php echo $img_url; ?>home/guide01.png" srcset="<?php echo $img_url; ?>home/guide01.png 1x, <?php echo $img_url; ?>home/guide01@2x.png 2x" alt="入園案内">
        </div> -->
        <!-- /.illust01 -->
        <div class="header">
            <div class="slider">
                <div class="image">
                    <img src="<?php echo $img_url; ?>home/guide03.jpg" srcset="<?php echo $img_url; ?>home/guide03.jpg 1x, <?php echo $img_url; ?>home/guide03@2x.jpg 2x" alt="入園案内">
                </div>
                <!-- /.image -->
                <div class="image">
                    <img src="<?php echo $img_url; ?>home/guide04.jpg" srcset="<?php echo $img_url; ?>home/guide04.jpg 1x, <?php echo $img_url; ?>home/guide04@2x.jpg 2x" alt="入園案内">
                </div>
                <!-- /.image -->
                <div class="image">
                    <img src="<?php echo $img_url; ?>home/guide05.jpg" srcset="<?php echo $img_url; ?>home/guide05.jpg 1x, <?php echo $img_url; ?>home/guide05@2x.jpg 2x" alt="入園案内">
                </div>
                <!-- /.image -->
            </div>
            <!-- /.slider -->
            <h2 class="animation animationtoblur">
                <img src="<?php echo $img_url; ?>home/guide02.png" srcset="<?php echo $img_url; ?>home/guide02.png 1x, <?php echo $img_url; ?>home/guide02@2x.png 2x" alt="入園案内">
            </h2>
        </div>
        <!-- /.header -->
        <div class="group">
            <div class="txt">
                <h3 class="animation animationtoblur">
                    まずはお近くの園まで<br>
                    気軽に見学のお問い合わせを
                </h3>
                <div class="desc animation animationtoblur">
                    園見学や園解放のほか、行事の際に園へ遊びにきていただいたり、個別でご相談に乗れるお時間があったりと、保護者の方の希望や不安点に合わせて、さまざまな園見学の形があります。まずはお気軽に、お近くの園へお問い合わせください。
                </div>
                <!-- /.desc -->
            </div>
            <!-- /.txt -->
            <div class="link animation animationtotop">
                <a href="<?php echo $home_url; ?>guide/">
                    詳しく見る
                </a>
            </div>
            <!-- /.link -->
        </div>
        <!-- /.group -->
    </section>
    <!-- /#guide -->

    <section id="seeds">

        <?php if (pcmobile()) { ?>
            <div class="header animation animationtoblur hidden">
                <div class="image">
                    <img src="<?php echo $img_url; ?>home/seeds02.png" srcset="<?php echo $img_url; ?>home/seeds02.png 1x, <?php echo $img_url; ?>home/seeds02@2x.png 2x" alt="保育のたね">
                </div>
                <!-- /.image -->
                <h2 class="animation animationtoblur">
                    保育のたね
                </h2>
                <div class="desc animation animationtoblur">
                    はな保育が大切にしていること
                </div>
                <!-- /.desc -->
                <!-- /.header -->
            <?php } else { ?>

            <?php } ?>

            </div>

            <div class="group hidden">
                <?php if (pcmobile()) { ?>
                <?php } else { ?>
                    <div class="header animation animationtoblur">
                        <h2 class="animation animationtoblur">
                            保育のたね
                        </h2>
                        <div class="desc animation animationtoblur">
                            はな保育が大切にしていること
                        </div>
                        <!-- /.desc -->
                        <div class="image">
                            <img src="<?php echo $img_url; ?>home/seeds02.png" srcset="<?php echo $img_url; ?>home/seeds02.png 1x, <?php echo $img_url; ?>home/seeds02@2x.png 2x" alt="保育のたね">
                        </div>
                        <!-- /.image -->
                    </div>
                    <!-- /.header -->
                <?php } ?>
                <div class="list">
                    <?php
                    $args = array(
                        'post_type' => 'shigoto',
                        'posts_per_page' => 5
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                    ?>

                        <?php
                        while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                            <?php if (pcmobile()) { ?>
                                <div class="block animation animationtotop">
                                    <div class="data">
                                        <div class="date">
                                            <?php the_time('Y.n.j'); ?>
                                        </div>
                                        <!-- /.date -->
                                    </div>
                                    <!-- /.data -->
                                    <div class="title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                    <!-- /.title -->
                                </div>
                                <!-- /.block -->
                            <?php } else { ?>
                                <div class="block animation animationtotop">
                                    <div class="data">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="date">
                                                <?php the_time('Y.n.j'); ?>
                                            </div>
                                            <!-- /.date -->
                                            <div class="title">
                                                <?php the_title(); ?>
                                            </div>
                                            <!-- /.title -->
                                        </a>
                                    </div>
                                    <!-- /.data -->
                                </div>
                                <!-- /.block -->
                            <?php } ?>
                        <?php
                        endwhile;
                        ?>

                    <?php

                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <!-- /.list -->
                <div class="link animation animationtotop">
                    <a href="<?php echo $home_url; ?>shigoto/">
                        一覧を見る
                    </a>
                </div>
                <!-- /.link -->
            </div>
            <!-- /.group -->
    </section>
    <!-- /#seeds -->

    <section id="about">
        <!-- <div class="illust01 animation animationtoblur">
            <img src="<?php echo $img_url; ?>home/about01.png" srcset="<?php echo $img_url; ?>home/about01.png 1x, <?php echo $img_url; ?>home/about01@2x.png 2x" alt="園について">
        </div> -->
        <!-- /.illust01 -->
        <div class="header">
            <div class="slider">
                <div class="image">
                    <img src="<?php echo $img_url; ?>home/about03.jpg" srcset="<?php echo $img_url; ?>home/about03.jpg 1x, <?php echo $img_url; ?>home/about03@2x.jpg 2x" alt="園について">
                </div>
                <!-- /.image -->
                <div class="image">
                    <img src="<?php echo $img_url; ?>home/about04.jpg" srcset="<?php echo $img_url; ?>home/about04.jpg 1x, <?php echo $img_url; ?>home/about04@2x.jpg 2x" alt="園について">
                </div>
                <!-- /.image -->
                <div class="image">
                    <img src="<?php echo $img_url; ?>home/about05.jpg" srcset="<?php echo $img_url; ?>home/about05.jpg 1x, <?php echo $img_url; ?>home/about05@2x.jpg 2x" alt="園について">
                </div>
                <!-- /.image -->
            </div>
            <!-- /.slider -->
            <h2 class="animation animationtoblur">
                <img src="<?php echo $img_url; ?>home/about02.png" srcset="<?php echo $img_url; ?>home/about02.png 1x, <?php echo $img_url; ?>home/about02@2x.png 2x" alt="園について">
            </h2>
        </div>
        <!-- /.header -->
        <div class="group">
            <div class="txt">
                <h3 class="animation animationtoblur">
                    子どもたちが主体の<br>
                    寄り添い、見守る保育
                </h3>
                <div class="desc animation animationtoblur">
                    はな保育での活動や遊びは、いつでも子どもたちが主体です。子どもたちの「やりたい！」の気持ち、その心と声に耳を傾けます。いつもやさしい陽の光のように、子どもの成長を優しく見守り、大きな花を咲かせる場所でありたいと願っています。
                </div>
                <!-- /.desc -->
            </div>
            <!-- /.txt -->
            <div class="link animation animationtotop">
                <a href="<?php echo $home_url; ?>about/">
                    詳しく見る
                </a>
            </div>
            <!-- /.link -->
        </div>
        <!-- /.group -->
    </section>
    <!-- /#policy -->

    <section id="recruit">
        <!-- <div class="illust01 animation animationtoblur">
            <img src="<?php echo $img_url; ?>home/recruit01.png" srcset="<?php echo $img_url; ?>home/recruit01.png 1x, <?php echo $img_url; ?>home/recruit01@2x.png 2x" alt="採用情報">
        </div> -->
        <!-- /.illust01 -->
        <div class="group">
            <div class="block block01">
                <?php if (pcmobile()) { ?>
                    <div class="image image01 animation animation02">
                        <img src="<?php echo $img_url; ?>home/recruit05.jpg" srcset="<?php echo $img_url; ?>home/recruit05.jpg 1x, <?php echo $img_url; ?>home/recruit05@2x.jpg 2x" alt="採用情報">
                    </div>
                    <!-- /.image -->
                <?php } else { ?>
                    <div class="image image01 animation animation02">
                        <img src="<?php echo $img_url; ?>home/recruit03.jpg" srcset="<?php echo $img_url; ?>home/recruit03.jpg 1x, <?php echo $img_url; ?>home/recruit03@2x.jpg 2x" alt="採用情報">
                    </div>
                    <!-- /.image -->
                <?php } ?>
                <?php if (pcmobile()) { ?>
                    <div class="image image02 animation animation02">
                        <img src="<?php echo $img_url; ?>home/recruit04.jpg" srcset="<?php echo $img_url; ?>home/recruit04.jpg 1x, <?php echo $img_url; ?>home/recruit04@2x.jpg 2x" alt="採用情報">
                    </div>
                    <!-- /.image -->
                <?php } else { ?>

                <?php } ?>
                <h2 class="animation animationtobler">
                    <img src="<?php echo $img_url; ?>home/recruit02.png" srcset="<?php echo $img_url; ?>home/recruit02.png 1x, <?php echo $img_url; ?>home/recruit02@2x.png 2x" alt="採用情報">
                </h2>
                <div class="txt">
                    <h3 class="animation animationtoblur">
                        おひさまみたいに<br>
                        子どもの成長をやさしく見守り、<br class="visible-xs">はな咲かせる
                    </h3>
                    <div class="desc animation animationtoblur">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    </div>
                    <!-- /.desc -->
                    <?php if (pcmobile()) { ?>
                        <div class="link animation animationtotop">
                            <a href="<?php echo $recruit_url; ?>" target="_blank">
                                詳しく見る
                            </a>
                        </div>
                        <!-- /.link -->
                    <?php } else { ?>

                    <?php } ?>
                </div>
                <!-- /.txt -->
            </div>
            <!-- /.block block01 -->
            <div class="block block02">
                <?php if (pcmobile()) { ?>

                <?php } else { ?>
                    <div class="image animation animation02">
                        <img src="<?php echo $img_url; ?>home/recruit04.jpg" srcset="<?php echo $img_url; ?>home/recruit04.jpg 1x, <?php echo $img_url; ?>home/recruit04@2x.jpg 2x" alt="採用情報">
                    </div>
                    <!-- /.image -->
                    <div class="link animation animationtotop">
                        <a href="<?php echo $recruit_url; ?>" target="_blank">
                            詳しく見る
                        </a>
                    </div>
                    <!-- /.link -->
                <?php } ?>

            </div>
            <!-- /.block block02 -->
        </div>
        <!-- /.group -->
    </section>
    <!-- /#recruit -->

    <?php include('parts/footer.php'); ?>

    <script>
        $(document).ready(function() {
            $('.slider').slick({
                arrows: false,
                autoplay: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
    </script>
    <?php if (pcmobile()) { ?>
        <script>
            $(document).ready(function() {
                $('#blog .list').slick({
                    arrows: false,
                    autoplay: true,
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1
                });
            });
        </script>
    <?php } else { ?>

    <?php } ?>
</body>

</html>