<?php
/*
Template Name: News(Chinese)
*/
?>
<?php get_header('zh'); ?>
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
                                    <li><a href="<?php echo home_url(); ?>/newslist-zh">全部内容</a></li>
                                    <?php
                                    $categories = get_categories([
                                        'orderby' => 'name',
                                        'order' => 'ASC',
                                    ]);

                                    foreach ($categories as $category) {
                                        // -zhで終わるカテゴリーのみ表示
                                        if (str_ends_with($category->slug, '-zh')) {
                                            echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
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

                                $args = [
                                    'post_type' => 'post',
                                    'posts_per_page' => 10,
                                    'paged' => $paged,
                                    'meta_query' => array(
                                        'relation' => 'OR',
                                        array(
                                            'key' => 'title_zh',
                                            'value' => '',
                                            'compare' => '!='
                                        ),
                                        array(
                                            'key' => 'content_zh',
                                            'value' => '',
                                            'compare' => '!='
                                        )
                                    )
                                ];

                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                        // 中国語のタイトルまたはコンテンツがある場合のみ表示
                                        $title_zh = get_field('title_zh');
                                        $content_zh = get_field('content_zh');

                                        if (!empty($title_zh) || !empty($content_zh)):
                                ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>?lang=zh">
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
                                                                // 中国語カテゴリーを優先表示、なければ最初のカテゴリー
                                                                $display_cat = null;
                                                                foreach ($category as $cat) {
                                                                    if (str_ends_with($cat->slug, '-zh')) {
                                                                        $display_cat = $cat;
                                                                        break;
                                                                    }
                                                                }
                                                                if (!$display_cat && !empty($category)) {
                                                                    $display_cat = $category[0];
                                                                }
                                                                if ($display_cat) {
                                                                    echo esc_html($display_cat->name);
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
                                                        // 中国語タイトルを優先表示、なければデフォルトタイトル
                                                        echo esc_html($title_zh ? $title_zh : get_the_title());
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php
                                        endif;
                                    endwhile;
                                else :
                                    echo '<p>中国語の投稿がありません。</p>';
                                endif;
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>

                        <!-- ▼ページネーション -->
                        <div class="list__pagination">
                            <?php
                            //Pagenation
                            if (function_exists("responsive_pagination")) {
                                $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
                                responsive_pagination($the_query->max_num_pages);
                                wp_reset_postdata();
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