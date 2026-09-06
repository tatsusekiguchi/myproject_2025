<?php
// URLパラメータから言語を判定してヘッダーを切り替え
$lang_param = isset($_GET['lang']) ? $_GET['lang'] : '';

if ($lang_param === 'zh') {
    get_header('zh');
} else {
    get_header();
}
?>
    <!-- ▽メイン▽-->
    <main class="main" id="news">
        <div class="pageTitle">
            <div class="secWrap">
                <h1>NEWS</h1>
            </div>
        </div>

        <div class="blogSection">
            <div class="secWrap">
                <div class="blogContainer">
                    <div class="leftPanel">
                        <dl>
                            <dt>Category</dt>
                            <dd>
                                <ul>
                                    <?php
                                    // URLパラメータまたはACFフィールドから言語を判定
                                    $lang_param = isset($_GET['lang']) ? $_GET['lang'] : '';
                                    $title_zh = get_field('title_zh');
                                    $content_zh = get_field('content_zh');
                                    $title_ja = get_field('title_ja');
                                    $content_ja = get_field('content_ja');

                                    // 言語判定ロジック
                                    if ($lang_param === 'zh') {
                                        $is_chinese = true;
                                    } elseif ($lang_param === 'ja') {
                                        $is_chinese = false;
                                    } else {
                                        // パラメータがない場合はACFフィールドの内容で判定
                                        $is_chinese = (!empty($title_zh) || !empty($content_zh)) && (empty($title_ja) && empty($content_ja));
                                    }

                                    $newslist_url = $is_chinese ? '/newslist-zh' : '/newslist';
                                    $all_text = $is_chinese ? '全部内容' : 'すべて';
                                    ?>
                                    <li><a href="<?php echo home_url(); ?><?php echo $newslist_url; ?>"><?php echo $all_text; ?></a></li>
                                    <?php
                                    $categories = get_categories([
                                        'orderby' => 'name',
                                        'order' => 'ASC',
                                    ]);

                                    foreach ($categories as $category) {
                                        // 言語に応じてカテゴリーを表示
                                        if ($is_chinese) {
                                            // 中国語の場合は-zhで終わるカテゴリーのみ
                                            if (str_ends_with($category->slug, '-zh')) {
                                                echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
                                            }
                                        } else {
                                            // 日本語の場合は-zhで終わらないカテゴリーのみ
                                            if (!str_ends_with($category->slug, '-zh')) {
                                                echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </dd>
                        </dl>
                    </div>

                    <div class="rightPanel">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="newsDetail">
                                <div class="info">
                                    <div class="cate">
                                        <?php
                                        $cat = get_the_category();
                                        if (!empty($cat)) {
                                            // 現在の言語に応じたカテゴリーを表示
                                            if ($is_chinese) {
                                                // 中国語カテゴリーを優先表示
                                                $display_cat = null;
                                                foreach ($cat as $category) {
                                                    if (str_ends_with($category->slug, '-zh')) {
                                                        $display_cat = $category;
                                                        break;
                                                    }
                                                }
                                                if (!$display_cat && !empty($cat)) {
                                                    $display_cat = $cat[0];
                                                }
                                                if ($display_cat) {
                                                    echo '<p>' . esc_html($display_cat->name) . '</p>';
                                                }
                                            } else {
                                                // 日本語カテゴリーを優先表示
                                                foreach ($cat as $category) {
                                                    if (!str_ends_with($category->slug, '-zh')) {
                                                        echo '<p>' . esc_html($category->name) . '</p>';
                                                        break;
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="time">
                                        <p>
                                            <?php
                                            $date = new DateTime(get_the_date('Y-m-d'));
                                            echo $date->format('F j, Y');
                                            ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="title">
                                    <p>
                                        <?php
                                        // 言語に応じたタイトルを表示
                                        if ($is_chinese) {
                                            echo esc_html($title_zh ? $title_zh : get_the_title());
                                        } else {
                                            echo esc_html($title_ja ? $title_ja : get_the_title());
                                        }
                                        ?>
                                    </p>
                                </div>

                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="thumbnailBox">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="postContents">
                                    <?php
                                    // 言語に応じたコンテンツを表示
                                    if ($is_chinese) {
                                        echo $content_zh ? $content_zh : get_the_content();
                                    } else {
                                        echo $content_ja ? $content_ja : get_the_content();
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="btnBackBox">
                                <div class="btnBack">
                                    <a href="<?php echo home_url(); ?><?php echo $newslist_url; ?>">Back</a>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- △メイン△-->
<?php get_footer(); ?>