<?php get_header(); ?>
<main id="news">
    <div class="topContainer">
        <div class="topKv">
            <img class="switch" src="<?php echo get_template_directory_uri(); ?>/image/news/top_kv_pc.png" alt="">
        </div>
        <div class="topTitle">
            <h1>園からのお知らせ</h1><span>えんからのおしらせ</span>
        </div>
    </div>

    <div class="blogContainer blogContainer--detail">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php
            // 投稿カテゴリからclassを決定
            $className = '';
            $categories = get_the_category();
            if ($categories) {
                foreach ($categories as $cat) {
                    if ($cat->term_id == 3) {
                        $className = 'info';
                    } elseif ($cat->term_id == 1) {
                        $className = 'recruit';
                    } elseif ($cat->term_id == 2) {
                        $className = 'lunch';
                    } elseif ($cat->term_id == 4) {
                        $className = 'guide';
                    }
                }
            }
            ?>
            <div class="blogDetailPanel <?php echo esc_attr($className); ?>">
                <div class="blogDetailBox">
                    <div class="cate">
                        <p><?php echo esc_html($categories[0]->name); ?></p>
                    </div>
                    <div class="postPanel">
                        <div class="photoBox">
							<?php
							$photo1 = get_field('news_photo1');
							$photo2 = get_field('news_photo2');

							if (!empty($photo1)) {
								echo '<div class="photo"><img src="' . esc_url($photo1['url']) . '" alt="' . esc_attr($photo1['alt']) . '"></div>';
							}
							if (!empty($photo2)) {
								echo '<div class="photo"><img src="' . esc_url($photo2['url']) . '" alt="' . esc_attr($photo2['alt']) . '"></div>';
							}
							?>
						</div>
                        <div class="txtBox">
                            <div class="time">
                                <p><?php the_time('Y.m.d'); ?></p>
                            </div>
                            <div class="title">
                                <h2><?php echo wp_kses_post(get_the_title()); ?></h2>
                            </div>
                            <div class="postContents">
                                <div class="postContentsBox">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btmPanel">
                        <div class="prev"><?php previous_post_link('%link', ''); ?></div>
                        <div class="btnAll poppins"><a href="<?php echo home_url(); ?>/newslist">ALL VIEW</a></div>
                        <div class="next"><?php next_post_link('%link', ''); ?></div>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>
