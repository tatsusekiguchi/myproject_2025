
<?php
// 現在のカテゴリーから言語を判定
$current_category = get_queried_object();
$is_chinese = str_ends_with($current_category->slug, '-zh');

// ヘッダーを言語に応じて切り替え
if ($is_chinese) {
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
                    <!-- ▼カテゴリ一覧 -->
                    <div class="leftPanel">
                        <dl>
                            <dt>Category</dt>
                            <dd>
                                <ul>
                                    <?php
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
                                                $class = ($current_category->term_id === $category->term_id) ? ' class="current"' : '';
                                                echo '<li' . $class . '><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
                                            }
                                        } else {
                                            // 日本語の場合は-zhで終わらないカテゴリーのみ
                                            if (!str_ends_with($category->slug, '-zh')) {
                                                $class = ($current_category->term_id === $category->term_id) ? ' class="current"' : '';
                                                echo '<li' . $class . '><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </dd>
                        </dl>
                    </div>

                    <!-- ▼投稿一覧 -->
                    <div class="rightPanel">
                        <div class="newsList">
                            <ul>
                                <?php
                                $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                                if (have_posts()) :
                                    while (have_posts()) : the_post();
                                ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?><?php echo $is_chinese ? '?lang=zh' : '?lang=ja'; ?>">
                                            <div class="photo">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail('medium'); ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="txtBox">
                                                <div class="info">
                                                    <div class="cate">
                                                        <p>
                                                            <?php
                                                            $category = get_the_category();
                                                            if ($category) {
                                                                // 現在の言語に応じたカテゴリーを表示
                                                                if ($is_chinese) {
                                                                    // 中国語カテゴリーを優先表示
                                                                    foreach ($category as $cat) {
                                                                        if (str_ends_with($cat->slug, '-zh')) {
                                                                            echo esc_html($cat->name);
                                                                            break;
                                                                        }
                                                                    }
                                                                } else {
                                                                    // 日本語カテゴリーを優先表示
                                                                    foreach ($category as $cat) {
                                                                        if (!str_ends_with($cat->slug, '-zh')) {
                                                                            echo esc_html($cat->name);
                                                                            break;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                        </p>
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
                                                            $title_zh = get_field('title_zh');
                                                            echo esc_html($title_zh ? $title_zh : get_the_title());
                                                        } else {
                                                            $title_ja = get_field('title_ja');
                                                            echo esc_html($title_ja ? $title_ja : get_the_title());
                                                        }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php
                                    endwhile;
                                else :
                                    $no_post_message = $is_chinese ? '中国語の投稿がありません。' : '投稿がありません。';
                                    echo '<p>' . $no_post_message . '</p>';
                                endif;
                                ?>
                            </ul>
                        </div>

                        <!-- ▼ページネーション -->
                        <div class="list__pagination">
                            <?php
                            //Pagenation
                            if (function_exists("responsive_pagination")) {
                                global $wp_query;
                                responsive_pagination($wp_query->max_num_pages);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- △メイン△-->
<?php get_footer(); ?>