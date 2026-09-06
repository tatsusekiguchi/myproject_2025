<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main id="news">
		<div class="blogSection">
			<div class="sectionTtl">
				<h1>お知らせ</h1>
			</div>
			<div class="blogContainer">
				<div class="leftPanel">
					<dl>
						<dt>カテゴリー</dt>
						<dd>
							<ul class="cateList">
								<?php
								$categories = get_categories();
								foreach ($categories as $cat) {
									echo '<li><a href="' . esc_url(get_category_link($cat->term_id)) . '">' .
										esc_html($cat->name) . '（' . $cat->count . '）</a></li>';
								}
								?>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>アーカイブ</dt>
						<dd>
							<ul>
								<?php
								wp_get_archives(array(
									'type' => 'monthly',
									'show_post_count' => true,
									'limit' => 12,
								));
								?>
							</ul>
						</dd>
					</dl>
				</div>
				<div class="rightPanel">
					<div class="infoList">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="listItem">
								<a href="<?php the_permalink(); ?>">
									<!-- スマホ用カテゴリー -->
									<div class="cateSp">
										<?php
										$category = get_the_category();
										if ($category) {
											echo '<p>' . esc_html($category[0]->name) . '</p>';
										}
										?>
									</div>

									<!-- サムネイルと日付 -->
									<div class="photoBox">
										<div class="time Outfit">
											<p><?php the_time('Y.m.d'); ?></p>
										</div>
										<div class="photo">
											<?php if (has_post_thumbnail()) {
												the_post_thumbnail('medium');
											} else { ?>
												<img src="<?php bloginfo('template_url'); ?>/image/top/news_photo_01.png" alt="">
											<?php } ?>
										</div>
									</div>

									<!-- テキスト部分 -->
									<div class="txtBox">
										<div class="cate">
											<?php
											if ($category) {
												echo '<p>' . esc_html($category[0]->name) . '</p>';
											}
											?>
										</div>
										<div class="title">
											<p><?php the_title(); ?></p>
										</div>
									</div>
								</a>
							</div>
						<?php endwhile; endif; ?>
					</div>
					<div class="list__pagination">
						<ul class="pagination">
							<?php global $wp_query; ?>
							<?php if (get_previous_posts_link()) : ?>
								<li class="previous"><?php previous_posts_link('＜ BACK'); ?></li>
							<?php endif; ?>
							<?php if (get_next_posts_link()) : ?>
								<li class="next"><?php next_posts_link('NEXT ＞'); ?></li>
							<?php endif; ?>
						</ul>
						<div class="toTop"><a href="<?php echo home_url(); ?>"><em>TOPへ戻る</em><span>&gt;</span></a></div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>