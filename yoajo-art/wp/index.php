<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main class="main" id="top">
		<div class="topKvContainer">
			<div class="kvSliderPanel">
				<div class="kvSlider"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_01.png" alt=""></div>
				<div class="kvSlider"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_02.png" alt=""></div>
				<div class="kvSlider"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_03.png" alt=""></div>
				<div class="kvSlider"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_04.png" alt=""></div>
				<div class="kvSlider"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_05.png" alt=""></div>
			</div>
			<div class="kvTitle">
				<h1>踏み出すたびに、物語は時を紡ぐ。</h1>
				<div class="loopBox">
					<div class="loopTrack"><span class="loop_text">踏み出すたびに、物語は時を紡ぐ。</span><span class="loop_text">踏み出すたびに、物語は時を紡ぐ。</span><span class="loop_text">踏み出すたびに、物語は時を紡ぐ。</span>
						<!-- 重複分（無限ループ用）--><span class="loop_text" aria-hidden="true">踏み出すたびに、物語は時を紡ぐ。</span><span class="loop_text" aria-hidden="true">踏み出すたびに、物語は時を紡ぐ。</span><span class="loop_text" aria-hidden="true">踏み出すたびに、物語は時を紡ぐ。</span>
					</div>
				</div>
			</div>
		</div>
		<div class="sec01">
			<div class="secWrap">
				<div class="pageSecTtl fadeUp">
					<h2>News</h2>
				</div>
				<div class="newsPanel fadeUp">
					<ul>
						<?php
						$args = array(
							'post_type'      => 'post',
							'posts_per_page' => 3,
							'meta_query' => array(
								'relation' => 'OR',
								array(
									'key' => 'title_ja',
									'value' => '',
									'compare' => '!='
								),
								array(
									'key' => 'content_ja',
									'value' => '',
									'compare' => '!='
								)
							)
						);
						$recent_posts = new WP_Query($args);

						if ($recent_posts->have_posts()) :
							while ($recent_posts->have_posts()) : $recent_posts->the_post();
								// 日本語のタイトルまたはコンテンツがある場合のみ表示
								$title_ja = get_field('title_ja');
								$content_ja = get_field('content_ja');

								if (!empty($title_ja) || !empty($content_ja)):
						?>
							<li>
								<a href="<?php the_permalink(); ?>?lang=ja">
									<div class="inner">
										<span>
											<?php
												$date = new DateTime(get_the_date('Y-m-d'));
												echo $date->format('F j, Y');
											?>
										</span>
										<em><?php echo esc_html($title_ja ? $title_ja : get_the_title()); ?></em>
									</div>
								</a>
							</li>
						<?php
								endif;
							endwhile;
						endif;
						wp_reset_postdata();
						?>
					</ul>
				</div>
				<div class="btnMoreBox fadeUp">
					<div class="btnMore"><a href="<?php echo home_url(); ?>/newslist">View More</a></div>
				</div>
			</div>
		</div>
		<div class="sec02">
			<div class="secWrap">
				<div class="pageSecTtl fadeUp">
					<h2>Gallery</h2>
				</div>
				<div class="listBox fadeUp">
					<ul>
					<?php
					$args = array(
						'post_type' => 'gallery',
						'posts_per_page' => 3,
					);
					$gallery_query = new WP_Query($args);
					if ($gallery_query->have_posts()) :
						while ($gallery_query->have_posts()) : $gallery_query->the_post();
						$image = get_field('gallery_image');
						$title = get_field('gallery_title');
					?>
						<li>
							<a href="<?php echo esc_url($image); ?>" data-lightbox="lightBox" data-title="<?php echo esc_attr($title); ?>">
							<div class="photo">
								<?php if ($image): ?>
								<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
								<?php endif; ?>
							</div>
							<div class="title">
								<p><?php echo esc_html($title); ?></p>
							</div>
							</a>
						</li>
					<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
					</ul>
				</div>
				<div class="btnMoreBox fadeUp">
					<div class="btnMore"><a href="<?php echo home_url(); ?>/gallerylist">View More</a></div>
				</div>
				<div class="bnr fadeUp"><a href="https://yoajo.base.shop/" target="_blank" rel="noopener">
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/bnr_online_shop_bg.png" alt=""></div>
						<div class="title">
							<p>Online Shop</p>
						</div>
					</a></div>
			</div>
		</div>
		<div class="sec03" id="contact">
			<div class="secWrap">
				<div class="pageSecTtl">
					<h2>Contact</h2>
				</div>
				<div class="topTxt txt">
					<p>作品のご相談や取材のご依頼は、こちらのフォームよりお気軽にお問い合わせください。<br>内容を確認し、ご連絡いたします。</p>
				</div>
				<div class="lineBox">
					<div class="ttl">
						<p>公式LINE</p>
					</div>
					<div class="qr"><a href="https://line.me/ti/p/0jVpeZ-qhR" target="_blank" rel="noopener "><img src="<?php bloginfo('template_url'); ?>/image/common/line_qr.png" alt=""></a></div>
				</div>
				<div class="contactContainer">
					<div class="formBox">
						<div class="formInner">
							<?php echo do_shortcode( '[contact-form-7 id="9380f90" title="お問い合わせフォーム"]' ); ?>
						</div>
					</div>
					<div class="btnTxt txt">
						<p>2025年度 クリエイティブ・リンク・ナゴヤ キャリアアップ支援助成 採択事業<br>音楽：ピンポン東山／提供：HURT RECORD</p>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>