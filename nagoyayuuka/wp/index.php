<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main id="top">
		<div class="topMvContainer">
			<div class="moveCloudArea">
				<div class="moveCloud scroll-infinity__cloud"><img src="<?php bloginfo('template_url'); ?>/image/common/move_cloud.png" alt=""></div>
			</div>
			<div class="kvBgBlue"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_bg_green.png" alt=""></div>
			<div class="kvSlidePanel">
				<?php
					$fv_slider_pc = get_field('fv_slider_pc', 56);
					$fv_slider_sp = get_field('fv_slider_sp', 56);
				?>
				<div class="kvSlide kvSlide--pc">
					<?php if ($fv_slider_pc): ?>
						<?php for ($i = 1; $i <= 3; $i++): ?>
							<?php if (!empty($fv_slider_pc["fv_slider_pc_img{$i}"])): ?>
								<div class="slideBox">
									<img src="<?php echo esc_url($fv_slider_pc["fv_slider_pc_img{$i}"]['url']); ?>"
										alt="<?php echo esc_attr($fv_slider_pc["fv_slider_pc_img{$i}"]['alt']); ?>">
								</div>
							<?php endif; ?>
						<?php endfor; ?>
					<?php endif; ?>
				</div>
				<div class="kvSlide kvSlide--sp">
					<?php if ($fv_slider_sp): ?>
						<?php for ($i = 1; $i <= 3; $i++): ?>
							<?php if (!empty($fv_slider_sp["fv_slider_sp_img{$i}"])): ?>
								<div class="slideBox">
									<img src="<?php echo esc_url($fv_slider_sp["fv_slider_sp_img{$i}"]['url']); ?>"
										alt="<?php echo esc_attr($fv_slider_sp["fv_slider_sp_img{$i}"]['alt']); ?>">
								</div>
							<?php endif; ?>
						<?php endfor; ?>
					<?php endif; ?>
				</div>
				<div class="kvTitleBox">
					<div class="kvTitle">
						<h1>子どもたちの成長を<br>ともに喜ぶ、<br>家族のような<br class="spBreak">存在でありたい。</h1>
					</div>
					<div class="copy poppins">
						<p>COPYRIGHT &copy; NAGOYA YUUKA KODOMOEN <br class="spBreak">ALL RIGHTS RESERVED.</p>
					</div>
				</div>
			</div>
			<div class="kvIconList">
				<div class="kvBgBlack"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_bg_black.png" alt=""></div>
				<div class="kvIcon01 kvIcon"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_icon_01.png" alt=""></div>
				<div class="kvIcon02 kvIcon"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_icon_02.png" alt=""></div>
			</div>
		</div>
		<div id="section__concept">
			<div class="bgMountain"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/top/concept_bg_mountain_pc.png" alt=""></div>
			<div class="secContainer">
				<div class="secBox">
					<div class="secTtl">
						<h2>子どもたちの成長を<br>ともに喜ぶ、<br>家族のような<br>存在でありたい。</h2>
					</div>
					<div class="txt">
						<p>自然と触れあうよろこび。<br>どこまでも自由なこころ。<br>想像して創造するちから。<br>なごや遊花幼稚園では<br>生きることに真摯に向き合う保育を実践し、<br>遊びをとおして夢中になれる大切なものを、<br>ひとつひとつ、こどもたちに手渡します。<br>遊花幼稚園で本物と出会い、<br>本質と向き合った日々は、いつか人生の土台となる。<br>明日につながる“生きるの根っこ”を、<br>みんなで大事に育てています。</p>
					</div>
				</div>
				<div class="btmBox">
					<div class="btnMore btnMorePink"><a href="<?php echo home_url(); ?>/about">
							<div>
								<p>くわしく見る</p>
							</div>
						</a></div>
					<ul>
						<li><a href="<?php echo home_url(); ?>/about#section__policy">保育理念</a></li>
						<li><a href="<?php echo home_url(); ?>/about#section__greeting">園長の挨拶</a></li>
						<li><a href="<?php echo home_url(); ?>/about#section__overview">園概要</a></li>
						<li><a href="<?php echo home_url(); ?>/about#section__access">アクセス</a></li>
					</ul>
				</div>
			</div>
			<div class="moveCarArea">
				<div class="moveCar scroll-infinity__left"><img src="<?php bloginfo('template_url'); ?>/image/common/icon_car.png" alt=""></div>
			</div>
		</div>
		<div id="section__info">
			<div class="infoContainer">
				<div class="secTtl">
					<h2>園からのお知らせ</h2>
				</div>
				<div class="listPanel">
					<div class="infoList">
						<?php
						// サイト全体の最新記事IDを取得
						$latest_post = get_posts(array(
							'numberposts' => 1,
							'post_type'   => 'post',
							'orderby'     => 'date',
							'order'       => 'DESC'
						));
						$latest_id = $latest_post ? $latest_post[0]->ID : 0;

						// 最新の投稿を最大3件取得
						$args = array(
							'post_type'      => 'post',
							'posts_per_page' => 3
						);
						$top_query = new WP_Query($args);

						if ($top_query->have_posts()) :
							while ($top_query->have_posts()) : $top_query->the_post();
								$categories = get_the_category();
								$cat_class = '';
								$cat_name  = '';
								if ($categories) {
									foreach ($categories as $cat) {
										if ($cat->slug === 'recruit') {
											$cat_class = 'recruit';
											$cat_name  = '採用情報';
										} elseif ($cat->slug === 'lunch') {
											$cat_class = 'lunch';
											$cat_name  = '給食だより';
										} elseif ($cat->slug === 'info') {
											$cat_class = 'info';
											$cat_name  = '情報公開';
										} elseif ($cat->slug === 'guide') {
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
							<?php endwhile;
						endif;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
		<div id="section__guide">
			<div class="guideContainer01 guideContainer">
				<div class="secPanel">
					<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/guide_photo_01.png" alt=""></div>
					<div class="txtBox">
						<div class="secTtlBox">
							<div class="secTtl">
								<h2>入園案内</h2><span>にゅうえんあんない</span>
							</div>
						</div>
						<div class="inner">
							<div class="subTtl">
								<h3>まずは園まで<br>気軽に見学のお問い合わせを</h3>
							</div>
							<div class="txt">
								<p>園内見学では、子どもたちが過ごす保育室や園庭などをご案内いたします。見学後には個別相談の時間もございますので、入園に関することや園生活について気になることなど、お気軽にお話しください。実際の園の雰囲気を感じていただける機会となっております。まずは園へお問い合わせください。</p>
							</div>
							<div class="btmBox">
								<div class="btnMore btnMoreGreen"><a href="<?php echo home_url(); ?>/guide">
										<div>
											<p>くわしく見る</p>
										</div>
									</a></div>
								<ul class="green">
									<li><a href="<?php echo home_url(); ?>/guide#flowTitle">入園の流れ</a></li>
									<li><a href="<?php echo home_url(); ?>/guide#divisionSection">認定区分について</a></li>
									<li><a href="<?php echo home_url(); ?>/guide#section__schedule">保育時間</a></li>
									<li><a href="<?php echo home_url(); ?>/guide#priceSection">認定ごとの利用料</a></li>
									<li><a href="<?php echo home_url(); ?>/guide#uniformSection">制服紹介</a></li>
									<li><a href="guide#faqSecTtl">よくある質問</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="guideContainer02 guideContainer">
				<div class="secPanel">
					<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/guide_photo_02.png" alt=""></div>
					<div class="txtBox">
						<div class="secTtlBox">
							<div class="secTtl">
								<h2>見学案内</h2><span>けんがくあんない</span>
							</div>
						</div>
						<div class="inner">
							<div class="subTtl">
								<h3>子どもたちが主体の<br>寄り添い、見守る保育</h3>
							</div>
							<div class="txt">
								<p>なごや遊花幼稚園での活動や遊びは、いつでも子どもたちが主体です。子どもたちの「やりたい！」の気持ち、その心と声に耳を傾けます。いつもやさしい陽の光のように、子どもの成長を優しく見守り、大きな花を咲かせる場所でありたいと願っています。</p>
							</div>
							<div class="btmBox">
								<div class="btnMore btnMoreBlue"><a href="<?php echo home_url(); ?>/visit">
										<div>
											<p>くわしく見る</p>
										</div>
									</a></div>
								<ul class="blue">
									<li><a href="<?php echo home_url(); ?>/visit#section__important">園が大切にしていること</a></li>
									<li><a href="<?php echo home_url(); ?>/visit#section__schedule">園児の1日</a></li>
									<li><a href="<?php echo home_url(); ?>/visit#section__event">年間スケジュール</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="supportContainer">
				<div class="topTitle">
					<h2>CHILD<br>CARESUPPORT</h2>
				</div>
				<div class="subTitle">
					<h3>０歳児からの<br>子育てサポート</h3>
				</div>
				<div class="arrow"><img src="<?php bloginfo('template_url'); ?>/image/top/support_arrow.png" alt=""></div>
				<div class="secBox">
					<div class="inner">
						<div class="ttl">
							<h4>はじめての園生活に、<br>やさしく寄りそう0歳からのサポート</h4>
						</div>
						<div class="txtBox">
							<div class="txt">
								<p>はじめての集団生活が、もっと安心であたたかいものであるように。当園では、0歳からのお子さまもお預かりできる保育サポート制度をご用意しています。<br>幼稚園ならではの教育的な関わりを大切にしながら、<br>ご家庭の働き方や子育てのスタイルに合わせて柔軟に対応しています。</p>
							</div>
							<div class="btmBox">
								<div class="btnMore btnMorePink"><a href="<?php echo home_url(); ?>/support">
										<div>
											<p>くわしく見る</p>
										</div>
									</a></div>
								<ul>
									<li><a href="<?php echo home_url(); ?>/support#section__classroom">満3歳からの入園</a></li>
									<li><a href="<?php echo home_url(); ?>/support#section__library">おもちゃ図書館</a></li>
									<li><a href="<?php echo home_url(); ?>/support#section__square">ちびっこ広場</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="btmPhoto">
					<ul>
						<li><img src="<?php bloginfo('template_url'); ?>/image/top/support_btm_children_01.png" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/image/top/support_btm_children_02.png" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/image/top/support_btm_children_03.png" alt=""></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>