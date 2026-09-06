<?php
/*
Template Name: single-housing
*/
?>
<?php get_header(); ?>
<!-- ▽メイン▽-->
<main id="housing">
    <div class="mainSection section">
		<div class="topContainer">
			<div class="secWrap01">
				<div class="pageSecTtlBox">
					<div class="pageSecTtl">
						<h1>住宅情報</h1>
					</div>
				</div>
				<div>
					<p class="mushimegane">
						<img src="<?php echo get_template_directory_uri(); ?>/image/common/mushimegane.png" alt="虫眼鏡">
					</p>
					<p style="text-align:center;">
						ただいま物件準備中
					</p>
				</div>
				<!-- <div class="topTitleBox">
					<?php
						$post_date = get_the_date('Y-m-d');
						$post_timestamp = strtotime($post_date);
						$now_timestamp = strtotime(current_time('Y-m-d'));
						$days_diff = ($now_timestamp - $post_timestamp) / (60 * 60 * 24);
					?>
					<?php if (get_field('is_new') && $days_diff <= 30) : ?>
						<div class="new">
							<img src="<?php echo get_template_directory_uri(); ?>/image/property/top_icon_new.png" alt="新着">
						</div>
					<?php endif; ?>
					<div class="title">
						<h2><?php the_field('property_title'); ?></h2>
					</div>
				</div>
			</div>
		</div>

        <div class="caseSliderPanel">
			<div class="caseSliderContainer">
				<div class="caseSlider">
					<?php if (have_rows('image_with_caption')) : ?>
						<?php while (have_rows('image_with_caption')) : the_row(); ?>
							<div class="slider">
								<?php $img = get_sub_field('image'); ?>
								<img src="<?php echo esc_url($img['url']); ?>" alt="">
								<div class="txt">
									<p><?php echo nl2br(get_sub_field('caption')); ?></p>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>

        <div class="recommendContainer">
			<div class="secWrap01">
				<div class="secBox">
					<div class="ttl">
						<p><?php the_field('recommend_title'); ?></p>
					</div>
					<div class="txt">
						<p><?php echo nl2br(get_field('recommend_description')); ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="divisionContainer">
			<div class="secWrap01">
				<div class="infoContainer">
					<div class="infoPanel">
						<?php if ($price = get_field('price')) : ?>
							<dl class="colPrice">
								<dt>販売価格</dt>
								<dd>
									<div class="price">
										<p><em><?php echo esc_html($price); ?></em><span>万円</span></p>
									</div>
								</dd>
							</dl>
						<?php endif; ?>

						<?php if ($address = get_field('address')) : ?>
							<dl><dt>物件所在地</dt><dd><?php echo esc_html($address); ?></dd></dl>
						<?php endif; ?>

						<?php if ($access = get_field('access')) : ?>
							<dl><dt>交通</dt><dd><?php echo esc_html($access); ?></dd></dl>
						<?php endif; ?>

						<?php if ($building = get_field('building_area')) : ?>
							<dl><dt>建物面積</dt><dd><?php echo esc_html($building); ?></dd></dl>
						<?php endif; ?>

						<?php if ($land = get_field('land_area')) : ?>
							<dl><dt>土地面積</dt><dd><?php echo esc_html($land); ?></dd></dl>
						<?php endif; ?>
					</div>

					<div class="infoPanel infoPanel--col3">
						<?php if ($layout = get_field('layout')) : ?>
							<dl><dt>間取り</dt><dd><?php echo esc_html($layout); ?></dd></dl>
						<?php endif; ?>

						<?php if ($parking = get_field('parking')) : ?>
							<dl><dt>駐車場</dt><dd><?php echo esc_html($parking); ?></dd></dl>
						<?php endif; ?>

						<?php
							$school_name = get_field('school_district');
							?>

							<?php if (!empty($school_name)) : ?>
							<dl>
							<dt>学校区</dt>
							<dd>
								<?php echo esc_html($school_name); ?>
							</dd>
							</dl>
						<?php endif; ?>
					</div>
				</div>

				<?php
				$points = get_field('recommend_points');
				$point_labels = [
					'陽当たり良好',
					'立地良し',
					'注目設備あり',
					'オール電化',
					'間取り特徴あり',
					'収納充実',
					'おしゃれ',
					'お手頃価格',
				];
				?>
				<div class="pointContainer">
					<div class="pointPanel">
						<div class="left"><p>スタッフ<br>おすすめ<br class="spBreak">ポイント</p></div>
						<div class="right">
							<ul>
								<?php
								foreach ($point_labels as $index => $label) :
									$img_num = sprintf('%02d', $index + 1);
									$is_checked = in_array($label, $points);
								?>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/image/housing/point_list_<?php echo $img_num; ?><?php echo $is_checked ? '' : '_off'; ?>.png" alt="" />
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>

				<?php
				$image_left = get_field('layout_image_1f');
				$image_right = get_field('layout_image_2f');
				if ($image_left || $image_right) :
				?>
					<div class="photoContainer">
						<div class="photoPanel">
							<?php if ($image_left) : ?>
								<div class="photo"><img src="<?php echo esc_url($image_left['url']); ?>" alt=""></div>
							<?php endif; ?>
							<?php if ($image_right) : ?>
								<div class="photo"><img src="<?php echo esc_url($image_right['url']); ?>" alt=""></div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>

        <div class="detailContainer">
            <div class="secWrap01">
                <div class="detailSection">
                    <div class="secTtl"><h3>設備・物件概要</h3></div>
                    <div class="detailPanel02">
						<?php
							$detail_fields = [
								'築年月' => 'built_date',
								'建物構造' => 'structure',
								'建物確認番号' => 'confirmation_number',
								'土地権利' => 'land_rights',
								'地目' => 'land_category',
								'現況' => 'current_status',
								'都市計画' => 'city_planning',
								'用途地域' => 'usage_area',
								'建ぺい率' => 'building_coverage',
								'容積率' => 'floor_area_ratio',
								'接面道路' => 'road_contact',
								'私道負担' => 'private_road',
								'飲用水' => 'water',
								'排水' => 'drainage',
								'ガス' => 'gas',
								'法令制限等' => 'legal_restrictions',
								'引渡し' => 'handover',
								'取引態様' => 'deal_type',
								'住宅の性能' => 'performance',
								'備考' => 'remarks'
							];
						?>
						<?php foreach ($detail_fields as $label => $name) : ?>
							<?php $value = get_field($name); ?>
							<?php if (!empty(trim($value))) : ?>
								<dl class="<?php echo in_array($name, ['performance', 'remarks']) ? 'remarks' : ''; ?>">
									<dt><?php echo esc_html($label); ?></dt>
									<dd><?php echo nl2br(esc_html($value)); ?></dd>
								</dl>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>

                    <div class="photoList">
						<div class="topPanel">
							<div class="left">
								<?php $img1 = get_field('image_top_1'); ?>
								<?php if (!empty($img1)) : ?>
									<div class="photo">
										<img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr($img1['alt']); ?>">
									</div>
								<?php endif; ?>
							</div>
							<div class="right">
								<ul>
									<?php $img2 = get_field('image_top_square_1'); ?>
									<?php if (!empty($img2)) : ?>
										<li>
											<img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr($img2['alt']); ?>">
										</li>
									<?php endif; ?>

									<?php $img3 = get_field('image_top_square_2'); ?>
									<?php if (!empty($img3)) : ?>
										<li>
											<img src="<?php echo esc_url($img3['url']); ?>" alt="<?php echo esc_attr($img3['alt']); ?>">
										</li>
									<?php endif; ?>
								</ul>
								<?php $img4 = get_field('image_top_rect'); ?>
								<?php if (!empty($img4)) : ?>
									<div class="photo">
										<img src="<?php echo esc_url($img4['url']); ?>" alt="<?php echo esc_attr($img4['alt']); ?>">
									</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="bottomPanel">
							<?php $img5 = get_field('image_bottom_left'); ?>
							<?php if (!empty($img5)) : ?>
								<div class="photo">
									<img src="<?php echo esc_url($img5['url']); ?>" alt="<?php echo esc_attr($img5['alt']); ?>">
								</div>
							<?php endif; ?>

							<?php $img6 = get_field('image_bottom_right'); ?>
							<?php if (!empty($img6)) : ?>
								<div class="photo">
									<img src="<?php echo esc_url($img6['url']); ?>" alt="<?php echo esc_attr($img6['alt']); ?>">
								</div>
							<?php endif; ?>
						</div>
					</div>


                    <div class="bnr">
                        <a href="https://www.instagram.com/nanairo.estate/?hl=ja" target="_blank" rel="noopener">
                            <img class="switch" src="<?php echo get_template_directory_uri(); ?>/image/housing/report_bnr_pc.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="detailSection">
                    <div class="secTtl"><h3>現地MAP</h3></div>
                    <div class="mapBox">
						<?php if ($map = get_field('google_map')) : ?>
                            <iframe src="<?php echo esc_url($map); ?>" allow="fullscreen"></iframe>
                        <?php endif; ?>
					</div>
                </div>

                <div class="detailSection">
                    <div class="secTtl"><h3>周辺環境</h3></div>
                    <div class="detailPanel03">
						<?php if ($transport = get_field('public_transport')) : ?>
							<dl><dt>交通機関</dt><dd><?php echo nl2br($transport); ?></dd></dl>
						<?php endif; ?>

						<?php if ($school = get_field('education_facilities')) : ?>
							<dl><dt>教育施設</dt><dd><?php echo nl2br($school); ?></dd></dl>
						<?php endif; ?>

						<?php if ($shopping = get_field('shopping_facilities')) : ?>
							<dl><dt>ショッピング<br>施設</dt><dd><?php echo nl2br($shopping); ?></dd></dl>
						<?php endif; ?>

						<?php if ($public = get_field('public_facilities')) : ?>
							<dl><dt>公共施設</dt><dd><?php echo nl2br($public); ?></dd></dl>
						<?php endif; ?>

						<?php if ($others = get_field('other_facilities')) : ?>
							<dl><dt>その他の施設</dt><dd><?php echo nl2br($others); ?></dd></dl>
						<?php endif; ?>
					</div>
                    <aside>
                        <p>※記載の距離および所要時間は地図上の概測です。<br>なお、徒歩は分速80m で換算しています。</p>
                    </aside>
                </div>
            </div>
        </div>

        <div class="presentSection">
            <div class="presentContainer">
                <div class="secWrap01">
                    <div class="topTtl"><h2><em>組み合わせ自由！</em></h2></div>
                    <div class="presentTtl"><img src="<?php echo get_template_directory_uri(); ?>/image/housing/present_ttl.png" alt=""></div>
                    <div class="secBox">
                        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/image/housing/present_img.png" alt=""></div>
                        <div class="txtBox">
                            <div class="topCommentBox">
                                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/image/housing/present_cat.png" alt=""></div>
                                <div class="balloon"><p>分譲住宅を自分らしくコーディネート♪</p></div>
                            </div>
                            <div class="inner">
                                <div class="box01">
                                    <div class="txt">
                                        <p>カーテンやアクセントクロス、照明器具、家電、商品券など新生活に役立つ商品から１５万円分チョイス！</p>
                                    </div>
                                </div>
                                <div class="box02">
                                    <div class="more"><img src="<?php echo get_template_directory_uri(); ?>/image/housing/present_more.png" alt=""></div>
                                    <div class="txt">
                                        <p>インテリアコーディネーターからのアドバイスも<em>無料</em>でさせていただきます！</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

    </div>
</main>
<!-- △メイン△-->
<?php get_footer(); ?>
