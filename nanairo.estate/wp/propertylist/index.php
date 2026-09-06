<?php
/*
Template Name: 土地情報一覧
*/
?>
<?php get_header(); ?>
	<main id="propertylist">
		<div class="topSection section">
			<div class="secContainer">
				<div class="secWrap01">
					<div class="pageSecTtlBox">
						<div class="pageSecTtl">
							<h1>土地情報</h1>
						</div>
					</div>
					<?php
					$property_posts = get_posts([
						'post_type' => 'property',
						'posts_per_page' => -1,
					]);
					?>

					<div class="infoList">
						<ul>
							<?php foreach ($property_posts as $post) :
								setup_postdata($post);
								$title = get_field('property_title');
								$is_new = get_field('is_new');
								$summary = get_field('summary_comment');
								$price_min = get_field('price_min');
								$price_max = get_field('price_max');
								$land_area_min = get_field('land_area_tsubo_min');
								$land_area_sqm_min = get_field('land_area_sqm_min');
								$land_area_max = get_field('land_area_tsubo_max');
								$land_area_sqm_max = get_field('land_area_sqm_max');
								$icons = get_field('icon_flags');
								$thumb = get_field('thumbnail');
							?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<div class="headBox">
										<div class="ttl">
											<p><?php echo esc_html($title); ?></p>
										</div>
									</div>
									<div class="photoPanel">
										<div class="photoBox">
											<div class="photo">
												<?php if ($thumb) : ?>
													<img src="<?php echo esc_url($thumb['url']); ?>" alt="">
												<?php endif; ?>
											</div>
											<?php
												$post_date = get_the_date('Y-m-d', $post);
												$post_timestamp = strtotime($post_date);
												$now_timestamp = strtotime(current_time('Y-m-d'));
												$days_diff = ($now_timestamp - $post_timestamp) / (60 * 60 * 24);
											?>
											<?php if ($is_new && $days_diff <= 30) : ?>
												<div class="new">
													<img src="<?php bloginfo('template_url'); ?>/image/propertylist/top_icon_new.png" alt="">
												</div>
											<?php endif; ?>
										</div>
										<div class="bodyBox">
											<div class="inner">
												<div class="description">
													<p><?php echo esc_html($summary); ?></p>
												</div>
												<?php $price_min = get_field('price_min'); ?>
												<?php $price_max = get_field('price_max'); ?>
												<div class="price">
												<p>
													<?php if ($price_min): ?><em><?php echo esc_html($price_min); ?></em><span>万円<?php echo $price_max ? '～' : ''; ?></span><?php endif; ?>
													<?php if ($price_max): ?><em><?php echo esc_html($price_max); ?></em><span>万円</span><?php endif; ?>
												</p>
												</div>
												<?php
													$tsubo_min = get_field('land_area_tsubo_min');
													$tsubo_max = get_field('land_area_tsubo_max');
													$sqm_min = get_field('land_area_sqm_min');
													$sqm_max = get_field('land_area_sqm_max');
												?>
												<div class="landAreaBox">
													<?php if ($tsubo_min || $sqm_min): ?>
														<div class="landArea">
														<p>
															<?php if ($tsubo_min): ?><em><?php echo esc_html($tsubo_min); ?>坪</em><?php endif; ?>
															<?php if ($sqm_min): ?><span>（<?php echo esc_html($sqm_min); ?>m²）</span><?php endif; ?>
														</p>
														</div>
													<?php endif; ?>
													<?php if ($tsubo_max || $sqm_max): ?>
														<span>~</span>
														<div class="landArea">
														<p>
															<?php if ($tsubo_max): ?><em><?php echo esc_html($tsubo_max); ?>坪</em><?php endif; ?>
															<?php if ($sqm_max): ?><span>（<?php echo esc_html($sqm_max); ?>m²）</span><?php endif; ?>
														</p>
														</div>
													<?php endif; ?>
												</div>
											</div>
											<?php if (!empty($icons)) : ?>
											<div class="cateList">
												<ul>
													<?php foreach ($icons as $icon) : ?>
														<li>
															<img src="<?php echo get_template_directory_uri(); ?>/image/propertylist/top_type_icon_<?php echo esc_attr(sprintf('%02d', array_search($icon, array_keys(get_field_object('icon_flags')['choices'])) + 1)); ?>.png" alt="<?php echo esc_attr($icon); ?>">
														</li>
													<?php endforeach; ?>
												</ul>
											</div>
											<?php endif; ?>
										</div>
									</div>
								</a>
							</li>
							<?php endforeach;
							wp_reset_postdata(); ?>
						</ul>
					</div>
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
					<div class="infoCatePanel">
						<div class="list">
							<ul>
								<li>
									<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/top_type_icon_01.png" alt=""></div>
									<div class="txt">
										<p>直近で価格改定あり</p>
									</div>
								</li>
								<li>
									<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/top_type_icon_02.png" alt=""></div>
									<div class="txt">
										<p>宅地分譲地内</p>
									</div>
								</li>
								<li>
									<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/top_type_icon_03.png" alt=""></div>
									<div class="txt">
										<p>小学校まで徒歩10分以内</p>
									</div>
								</li>
								<li>
									<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/top_type_icon_04.png" alt=""></div>
									<div class="txt">
										<p>小学校まで徒歩10分以内</p>
									</div>
								</li>
								<li>
									<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/top_type_icon_05.png" alt=""></div>
									<div class="txt">
										<p>南側道路に面する</p>
									</div>
								</li>
								<li>
									<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/top_type_icon_06.png" alt=""></div>
									<div class="txt">
										<p>幅員6ｍ以上の道路に接する</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sec02 section">
			<div class="secContainer">
				<div class="secWrap01">
					<div class="pageSecTtlBox">
						<div class="pageSecTtl">
							<h2>土地ご購入までの流れ</h2>
						</div>
					</div>
					<div class="topTxt txt">
						<p>土地探しからお引き渡しまで、トータルでサポートいたします。</p>
					</div>
					<div class="flowList">
						<ul>
							<li>
								<div class="inner">
									<div class="headBox">
										<div class="stepBox">
											<div class="step"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/sec02_step.png" alt=""></div>
											<p>1</p>
										</div>
										<div class="ttl">
											<h3>土地探し</h3>
										</div>
									</div>
									<div class="bodyBox">
										<div class="imgBox">
											<div class="img01"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/step_img_01.png" alt=""></div>
										</div>
										<div class="txt">
											<p>気に入った土地が見つかったら、建築を依頼するハウスメーカーや工務店に、プランニングや資金計画などを相談しましょう！<br>住宅ローンを借りる場合は、銀行選びや事前審査もあわせて進めておきましょう。</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="inner">
									<div class="headBox">
										<div class="stepBox">
											<div class="step"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/sec02_step.png" alt=""></div>
											<p>2</p>
										</div>
										<div class="ttl">
											<h3>買付証明書の提出</h3>
										</div>
									</div>
									<div class="bodyBox">
										<div class="imgBox">
											<div class="img02"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/step_img_02.png" alt=""></div>
										</div>
										<div class="txt">
											<p>全ての土地は一点もの。購入は早い者順です！<br>同じ土地を検討している人は、他にも大勢います。購入の意思がしっかり固まったなら、次は“買付証明書”を売主側へ提出し、土地の購入を書面で正式に申し込みましょう。<br>契約日時や条件等の折り合いが付きましたら、売買契約へと進みます。</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="inner">
									<div class="headBox">
										<div class="stepBox">
											<div class="step"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/sec02_step.png" alt=""></div>
											<p>3</p>
										</div>
										<div class="ttl">
											<h3>不動産売買契約</h3>
										</div>
									</div>
									<div class="bodyBox">
										<div class="imgBox">
											<div class="img03"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/step_img_03.png" alt=""></div>
										</div>
										<div class="txt">
											<p>宅地建物取引士による重要事項の説明を受けた後、売買契約を締結します。<br>契約を終えたら、決済・お引き渡しに向けて資金の準備を進めます。</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="inner">
									<div class="headBox">
										<div class="stepBox">
											<div class="step"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/sec02_step.png" alt=""></div>
											<p>4</p>
										</div>
										<div class="ttl">
											<h3>住宅ローンのお手続き</h3>
										</div>
									</div>
									<div class="bodyBox">
										<div class="imgBox">
											<div class="img04"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/step_img_04.png" alt=""></div>
										</div>
										<div class="txt">
											<p>金融機関から案内される必要書類等を揃え、本申し込み・金消契約を行います。<br>手続きにはトータルで３～４週間かかります。</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="inner">
									<div class="headBox">
										<div class="stepBox">
											<div class="step"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/sec02_step.png" alt=""></div>
											<p>5</p>
										</div>
										<div class="ttl">
											<h3>決済・お引き渡し</h3>
										</div>
									</div>
									<div class="bodyBox">
										<div class="imgBox">
											<div class="img05"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/step_img_05.png" alt=""></div>
										</div>
										<div class="txt">
											<p>銀行にて、土地の残代金を売主へ支払い、土地の所有名義をあなたに変更します。夢のマイホーム建築のスタートです！</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>