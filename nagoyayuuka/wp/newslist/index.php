<?php
/*
Template Name: 園からのお知らせ
*/
?>

<?php get_header(); ?>
	<main id="news">
		<div class="topContainer">
			<div class="topKv">
				<img class="switch" src="<?php bloginfo('template_url'); ?>/image/news/top_kv_pc.png" alt="">
			</div>
			<div class="topTitle">
				<h1>園からのお知らせ</h1><span>えんからのおしらせ</span>
			</div>
		</div>

		<div class="blogContainer">
			<div class="catePanel">
				<dl>
					<dt>Category</dt>
					<dd>
						<ul>
							<li><a class="recruit" href="<?php echo get_category_link(1); ?>">採用情報</a></li>
							<li><a class="lunch" href="<?php echo get_category_link(2); ?>">給食だより</a></li>
							<li><a class="info" href="<?php echo get_category_link(3); ?>">情報公開</a></li>
							<li><a class="guide" href="<?php echo get_category_link(4); ?>">入園・見学案内</a></li>
						</ul>
					</dd>
				</dl>
			</div>

			<div class="blogListPanel">
				<?php
					// サイト全体で最新の投稿を取得（1件だけ）
					$latest_post = get_posts(array(
						'numberposts' => 1,
						'post_type'   => 'post',
						'orderby'     => 'date',
						'order'       => 'DESC'
					));
					$latest_id = $latest_post ? $latest_post[0]->ID : 0;
				?>
				<div class="infoList">
					<?php
					// 投稿を取得（1ページ9件表示）
					$paged = get_query_var('paged') ? get_query_var('paged') : 1;
					$args = array(
						'post_type'      => 'post',
						'posts_per_page' => 9,
						'paged'          => $paged
					);
					$the_query = new WP_Query($args);

					if ($the_query->have_posts()) :
						while ($the_query->have_posts()) : $the_query->the_post();
							$categories = get_the_category();
							$cat_class = '';
							$cat_name  = '';

							if ($categories) {
								foreach ($categories as $cat) {
									if ($cat->term_id == 1) {
										$cat_class = 'recruit';
										$cat_name  = '採用情報';
									} elseif ($cat->term_id == 2) {
										$cat_class = 'lunch';
										$cat_name  = '給食だより';
									} elseif ($cat->term_id == 3) {
										$cat_class = 'info';
										$cat_name  = '情報公開';
									} elseif ($cat->term_id == 4) {
										$cat_class = 'guide';
										$cat_name  = '入園・見学案内';
									}
								}
							}
							?>
							<div class="listItem">
								<a class="<?php echo esc_attr($cat_class); ?>" href="<?php the_permalink(); ?>">
									<div class="inner">
										<div class="circle">
											<p>
												<?php if (get_the_ID() === $latest_id) : ?>
													新着
												<?php else : ?>
													<?php the_time('m.d'); ?>
												<?php endif; ?>
											</p>
										</div>
										<div class="photo">
											<?php if (has_post_thumbnail()) : ?>
												<?php the_post_thumbnail('medium'); ?>
											<?php else : ?>
												<img src="<?php bloginfo('template_url'); ?>/image/top/info_sec_img_01.png" alt="">
											<?php endif; ?>
										</div>
										<div class="cate">
											<p><?php echo esc_html($cat_name); ?></p>
										</div>
										<div class="title">
											<p><?php echo wp_kses_post(get_the_title()); ?></p>
										</div>
									</div>
								</a>
							</div>
						<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
				<div class="list__pagination">
					<ul class="pagination">
						<?php if (get_previous_posts_link('', $the_query->max_num_pages)) : ?>
							<li class="previous"><?php previous_posts_link('PREV'); ?></li>
						<?php endif; ?>
						<?php if (get_next_posts_link('', $the_query->max_num_pages)) : ?>
							<li class="next"><?php next_posts_link('NEXT', $the_query->max_num_pages); ?></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
