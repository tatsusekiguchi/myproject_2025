<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main id="top">
		<div class="topKvContainer">
			<div class="topKvPanel">
				<div class="topKv"></div>
				<div class="kvTitleBox">
					<h1><span>「大切な未来」へ繋がる架け橋</span><em>七いろ不動産</em></h1>
				</div>
				<div class="kvCat"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_cat.png" alt=""></div>
			</div>
		</div>
		<div class="sec01 section">
			<div class="secContainer">
				<div class="secWrap01">
					<div class="pageSecTtlBox fadeUp">
						<div class="pageSecTtl">
							<h2>ニューストピックス</h2>
							<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec01_icon_01.png" alt=""></div>
						</div>
					</div>
					<div class="newsPanel fadeUp">
						<div class="inner">
						<?php
							$args = array(
								'post_type' => 'news',
								'posts_per_page' => -1,
								'orderby' => 'date',
								'order' => 'DESC',
							);
							$the_query = new WP_Query($args);

							if ($the_query->have_posts()) :
								while ($the_query->have_posts()) : $the_query->the_post();

									// ACFのカスタムフィールド「is_new」を取得
									$is_new = get_field('is_new');

									// 投稿日からの経過日数を計算
									$post_date = get_the_date('Y-m-d');
									$days_diff = (strtotime(current_time('Y-m-d')) - strtotime($post_date)) / (60 * 60 * 24);
							?>
								<dl>
									<dt>
										<span><?php the_title(); ?></span>
										<?php if ($is_new && $days_diff <= 14) : ?>
											<em>
												<img src="<?php bloginfo('template_url'); ?>/image/propertylist/top_icon_new.png" alt="">
											</em>
										<?php endif; ?>
									</dt>
									<dd>
										<?php the_content(); ?>
									</dd>
								</dl>
							<?php
								endwhile;
								wp_reset_postdata();
							else :
								echo '<p>投稿が見つかりませんでした。</p>';
							endif;
							?>
						</div>
					</div>
					<!-- <div class="btnMore"><a href="">ニュース一覧</a></div> -->
				</div>
			</div>
			<div class="subContainer">
				<div class="secWrap01">
					<div class="secBox fadeUp">
						<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec01_icon_02.png" alt=""></div>
						<div class="ttlBox">
							<h3><em>大切な夢や人、不動産をつなぐ</em><span>架け橋となっていきたい</span></h3>
						</div>
						<div class="txt">
							<p>不動産は「マイホームの夢」「大切な資産の売却」など私たちの人生の重要なタイミングで関わることが多いものです。<br>その大切な夢や人、不動産をつなぐ架け橋となっていきたいと思いから「虹」にかけ「七いろ不動産」という屋号を付けました。<br>未来ある街づくりを目指し、人と不動産と真剣に向き合っております。</p>
						</div>
						<div class="chart"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec01_chart.png" alt=""></div>
					</div>
					<div class="photoBox">
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec01_img.png" alt=""></div>
					</div>
				</div>
			</div>
		</div>
		<div class="sec02 section">
			<div class="secContainer01">
				<div class="secWrap01">
					<div class="pageSecTtlBox fadeUp">
						<div class="pageSecTtl">
							<h2>不動産のこと、<br class="spBreak">ご相談ください</h2>
						</div>
					</div>
					<div class="topBox fadeUp">
						<div class="icon"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/top/top_sec02_ttl_icon_pc.png" alt=""></div>
						<div class="ttl">
							<p>長年のノウハウを生かし、<br>私たちが不動産の買いたい・売りたいをお手伝いいたします。</p>
						</div>
					</div>
					<div class="list fadeUp">
						<ul>
							<li><a href="<?php echo home_url(); ?>/propertylist"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/top/top_sec02_list_01_pc.png" alt=""></a></li>
							<li><a href="<?php echo home_url(); ?>/propertylist"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/top/top_sec02_list_02_pc.png" alt=""></a></li>
							<li><a href="<?php echo home_url(); ?>/sell"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/top/top_sec02_list_03_pc.png" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="secContainer02">
				<div class="secWrap">
					<div class="ttlBox fadeUp">
						<div class="ttl">
							<h3>私たちが不動産の「困った」を<em>解決</em>します！</h3>
							<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec02_sub_ttl_icon_02.png" alt=""></div>
						</div>
					</div>
					<div class="mv fadeUp"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec02_mv.png" alt=""></div>
				</div>
			</div>
		</div>
		<div class="sec03 section">
			<div class="secContainer">
				<div class="secWrap01">
					<div class="pageSecTtlBox fadeUp">
						<div class="pageSecTtl">
							<h2>おすすめ物件</h2>
							<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec03_icon.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
			<?php
				$property_posts = get_posts([
					'post_type' => 'property',
					'posts_per_page' => 6,
					'orderby' => 'date',
    				'order' => 'DESC',
				]);
			?>
			<div class="slidePanel">
				<div class="slideBox">
					<ul>
						<?php foreach ($property_posts as $post) :
							setup_postdata($post);
							$title = get_field('property_title');
							$price_min = get_field('price_min');
							$price_max = get_field('price_max');
							$thumb = get_field('thumbnail');
						?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<div class="photo">
									<?php if ($thumb) : ?>
										<img src="<?php echo esc_url($thumb['url']); ?>" alt="">
									<?php endif; ?>
								</div>
								<div class="info">
									<div class="ttl">
										<p><?php echo esc_html($title); ?></p>
									</div>
									<div class="price">
										<p>
											<?php if ($price_min): ?><em><?php echo esc_html($price_min); ?></em><span>万円<?php echo $price_max ? '～' : ''; ?></span><?php endif; ?>
											<?php if ($price_max): ?><em><?php echo esc_html($price_max); ?></em><span>万円</span><?php endif; ?>
										</p>
									</div>
								</div>
							</a>
						</li>
						<?php endforeach;
						wp_reset_postdata(); ?>
					</ul>
				</div>
			</div>
			<div class="spListPanel">
				<div class="spList">
					<ul>
						<?php foreach ($property_posts as $post) :
							setup_postdata($post);
							$title = get_field('property_title');
							$price_min = get_field('price_min');
							$price_max = get_field('price_max');
							$thumb = get_field('thumbnail');
						?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<div class="photo">
									<?php if ($thumb) : ?>
										<img src="<?php echo esc_url($thumb['url']); ?>" alt="">
									<?php endif; ?>
								</div>
								<div class="info">
									<div class="ttl">
										<p><?php echo esc_html($title); ?></p>
									</div>
									<div class="price">
										<p>
											<?php if ($price_min): ?><em><?php echo esc_html($price_min); ?></em><span>万円<?php echo $price_max ? '～' : ''; ?></span><?php endif; ?>
											<?php if ($price_max): ?><em><?php echo esc_html($price_max); ?></em><span>万円</span><?php endif; ?>
										</p>
									</div>
								</div>
							</a>
						</li>
						<?php endforeach;
						wp_reset_postdata(); ?>
					</ul>
				</div>
			</div>
			<div class="btnMore"><a href="<?php echo home_url(); ?>/propertylist">一覧を見る</a></div>
		</div>
		<!--<div class="sec04 section">
			<div class="secContainer">
				<div class="secWrap01">
					<div class="pageSecTtlBox fadeUp">
						<div class="pageSecTtl">
							<h2>おすすめ住宅</h2>
						</div>
					</div>
					<div class="list">
						<?php
							$property_posts = get_posts([
								'post_type' => 'housing',
								'posts_per_page' => 3,
								'orderby' => 'date',
								'order' => 'DESC',
							]);
						?>
						<ul>
							<?php foreach ($property_posts as $post) :
								setup_postdata($post);
								$title = get_field('property_title');
								$price = get_field('price');
								$image = get_field('thumbnail');
							?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<div class="photo">
										<?php if ($image) : ?>
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
										<?php else : ?>
											<img src="<?php bloginfo('template_url'); ?>/image/top/top_sec04_img.png" alt="no image">
										<?php endif; ?>
									</div>
									<div class="info">
										<div class="ttl">
											<p><?php echo esc_html($title); ?></p>
										</div>
										<div class="price">
											<p>
												<?php if ($price) : ?>
													<em><?php echo esc_html($price); ?></em><span>万円（税込）</span>
												<?php endif; ?>
											</p>
										</div>
									</div>
								</a>
							</li>
							<?php endforeach;
							wp_reset_postdata(); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>-->
		<div class="sec05 section">
			<div class="secContainer">
				<div class="inner">
					<div class="secWrap01">
						<div class="pageSecTtlBox fadeUp">
							<div class="pageSecTtl">
								<h2>マイホームを建てよう</h2>
								<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec05_icon.png" alt=""></div>
							</div>
						</div>
						<div class="secBox">
							<div class="ttl fadeUp">
								<h3><em>『マイホームの相談窓口』</em><span>はじめました！</span></h3>
							</div>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec05_img.png" alt=""></div>
							<div class="txt fadeUp">
								<p>初めての家づくりは、分からないことばかりで当然です。<br>岐阜・羽島で注文住宅新築工事、土地・住宅の販売、不動産業を２０年営んできた経験を活かし、お客様の初めての家づくりのサポートをさせていただきます。土地探しはもちろん、住宅ローン、ライフプランや資金計画、ハウスメーカーのご紹介、間取りのご相談など、何でもお気軽にご相談ください。</p>
							</div>
							<div class="lineBox fadeUp">
								<dl>
									<dt>LINE お友達登録で<br>嬉しい6つの特典開催中！</dt>
									<dd>
										<div class="btnMore"><a href="<?php echo home_url(); ?>/consult?lineSec">詳しくはこちら</a></div>
									</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--<div class="sec06 section">
			<div class="secContainer">
				<div class="secWrap01">
					<div class="pageSecTtlBox fadeUp">
						<div class="pageSecTtl">
							<h2>なないろブログ</h2>
						</div>
					</div>
					<div class="sliderList">
						<?php
							$the_query = new WP_Query( array(
							'paged'       => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
							'post_type'   => 'post',
							'posts_per_page' => 4,
							'cat'          => -4,
							) ); ?>
						<?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="sliderBox">
								<a href="<?php the_permalink() ?>">
									<div class="photo"><?php the_post_thumbnail('full'); ?></div>
									<div class="info">
										<span class="time"><?php the_time("Y.m.d") ?></span>
										<?php
											$category = get_the_category();
											$cat_name = $category[0]->cat_name;
											$cat_slug = $category[0]->category_nicename;
										?>
										<span class="cate"><?php echo $cat_name; ?></span>
									</div>
									<div class="ttl">
										<p><?php the_title(); ?></p>
									</div>
								</a>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="btnMore"><a href="<?php echo home_url(); ?>/bloglist">一覧を見る</a></div>
				</div>
			</div>
		</div>-->
		<div class="sec07 section">
			<div class="secContainer">
				<div class="secWrap01">
					<div class="pageSecTtlBox fadeUp">
						<div class="pageSecTtl">
							<h2>ねこねこ日記</h2>
							<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec07_icon.png" alt=""></div>
						</div>
					</div>
					<div class="sliderList">
						<?php
							$the_query = new WP_Query( array(
								'paged'           => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
								'post_type'       => 'post',
								'posts_per_page'  => 4,
								'cat'          => 4,
							) );
						?>
						<?php if ( $the_query->have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<div class="sliderBox">
									<a href="<?php the_permalink(); ?>">
										<div class="photo"><?php the_post_thumbnail('full'); ?></div>
										<div class="info">
											<span class="time"><?php the_time("Y.m.d"); ?></span>
											<?php
												$category = get_the_category();
												$cat_name = $category[0]->cat_name;
												$cat_slug = $category[0]->category_nicename;
											?>
											<span class="cate"><?php echo esc_html($cat_name); ?></span>
										</div>
										<div class="ttl">
											<p><?php the_title(); ?></p>
										</div>
									</a>
								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
					<div class="btnMore"><a href="<?php echo home_url(); ?>/category/diary">一覧を見る</a></div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>