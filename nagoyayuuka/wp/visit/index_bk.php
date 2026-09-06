<?php
/*
Template Name: 見学案内
*/
?>

<?php get_header(); ?>
	<main id="visit">
		<div class="topContainer">
			<div class="topKv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/visit/top_kv_pc.png" alt=""></div>
			<div class="secContainer">
				<div class="moveCloudArea01">
					<div class="moveCloud scroll-infinity__cloud"><img src="<?php bloginfo('template_url'); ?>/image/common/move_cloud.png" alt=""></div>
				</div>
				<div class="moveCloudArea02">
					<div class="moveCloud scroll-infinity__cloud delay"><img src="<?php bloginfo('template_url'); ?>/image/common/move_cloud.png" alt=""></div>
				</div>
				<div class="topPanel">
					<div class="secBox">
						<div class="pTtl green">
							<h1>見学案内</h1><span>けんがくあんない</span>
						</div>
						<div class="txt">
							<?php the_field('visit_explanation'); ?>
						</div>
						<div class="btnMore btnMoreBlueDeep btnPaging"><a href="#section__important">
							<div>
								<p>くわしく見る</p>
							</div>
						</a></div>
					</div>
					<!-- <div class="secBox">
						<div class="pTtl blue">
							<h2>概要</h2><span>がいよう</span>
						</div>
					</div> -->
				</div>
				<!-- <div class="overviewPanel">
					<div class="overviewTable">
						<table>
							<tbody>
								<?php if (have_rows('visit_overview')): ?>
									<?php while (have_rows('visit_overview')): the_row(); ?>
										<tr>
											<th><?php the_sub_field('visit_overview_title'); ?></th>
											<td><?php the_sub_field('visit_overview_text'); ?></td>
										</tr>
									<?php endwhile; ?>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div> -->
			</div>
		</div>
		<div id="section__important">
			<div class="secTtl">
				<h2>園が大切にしていること</h2><span>えんがたいせつにしていること</span>
			</div>
			<div class="secContainer">
				<div class="secPanel">
					<div class="kvBox">
						<div class="kv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/visit/important_photo_01_pc.png" alt=""></div>
						<div class="circle">
							<dl>
								<dt>たいせつ<br>にしていること</dt>
								<dd>01</dd>
							</dl>
						</div>
						<div class="title">
							<h3>あそびのなかで、すくすく学ぶ</h3>
						</div>
					</div>
					<div class="txt">
						<div class="ttl">
							<p>あそびのなかで、すくすく学ぶ</p>
						</div>
						<p>遊びのなかには、感情・思考・工夫・表現など、子どもたちがこれから育んでいく、たくさんの“生きる力”がつまっています。成功体験も、失敗体験も、自分の力に変えていきます。心から遊び込める環境だからこそ、自分の気持ちに気づいたり、誰かの思いにそっと寄り添ったり、そんなやりとりが少しずつ芽生えていくのです。</p>
					</div>
				</div>
				<div class="secPanel">
					<div class="kvBox">
						<div class="kv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/visit/important_photo_02_pc.png" alt=""></div>
						<div class="circle">
							<dl>
								<dt>たいせつ<br>にしていること</dt>
								<dd>02</dd>
							</dl>
						</div>
						<div class="title">
							<h3>本物にふれて、感性を育む</h3>
						</div>
					</div>
					<div class="txt">
						<div class="ttl">
							<p>本物にふれて、感性を育む</p>
						</div>
						<p>子どもたちには、「本物」に出会う機会が大切です。園では、五感を使って感じる体験を大切にしています。たとえば、年少から年長まで取り組む鼓笛隊では、外部の専門講師による指導を定期的に重ねながら、音を奏でる楽しさや、仲間と一緒に演奏する難しさや喜びを味わいます。本物との出会いが、子どもたちの感性と心を育てていきます。</p>
					</div>
				</div>
				<div class="secPanel">
					<div class="kvBox">
						<div class="kv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/visit/important_photo_03_pc.png" alt=""></div>
						<div class="circle">
							<dl>
								<dt>たいせつ<br>にしていること</dt>
								<dd>03</dd>
							</dl>
						</div>
						<div class="title">
							<h3>最後までやりぬく力をのばす</h3>
						</div>
					</div>
					<div class="txt">
						<div class="ttl">
							<p>最後までやりぬく力をのばす</p>
						</div>
						<p>うまくいかなくてもすぐに投げ出さず、自分で考えてみる、工夫してみる。それを繰り返しながら、子どもたちは「最後までやりぬく力」を身につけていきます。鼓笛隊の発表や作品展の制作など、小さなチャレンジを重ねて「できた！」という喜びを味わうことが、大きな自信につながります。子どもたちが前向きにやりとげようとする気持ちを育んでいます。</p>
					</div>
				</div>
			</div>
		</div>
		<div id="section__schedule">
			<div class="secTtl">
				<h2>園児の1日</h2><span>えんじのいちにち</span>
			</div>
			<div class="scheduleContainer tabContainer">
				<div class="tabPanel">
					<div class="tabList">
						<ul>
							<li class="tabBtn active">乳児</li>
							<li class="tabBtn">幼児</li>
						</ul>
					</div>

					<!-- 乳児の1日 -->
					<div class="tabItem">
						<div class="secContainer">
							<div class="secPanel">
								<?php if( have_rows('infant_schedule') ): ?>
									<?php while( have_rows('infant_schedule') ): the_row();
										$image = get_sub_field('image');
										$time  = get_sub_field('time');
										$text  = get_sub_field('text');
									?>
									<div class="secBox">
										<?php if( !empty($image) ): ?>
											<div class="photo">
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
											</div>
										<?php endif; ?>
										<div class="txtBox">
											<?php if( $time ): ?>
												<div class="timeBox poppins">
													<p><?php echo esc_html($time); ?></p>
												</div>
											<?php endif; ?>
											<?php if( $text ): ?>
												<div class="txt">
													<p><?php echo wp_kses_post($text); ?></p>
												</div>
											<?php endif; ?>
										</div>
									</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>

					<!-- 幼児の1日 -->
					<div class="tabItem">
						<div class="secContainer">
							<div class="secPanel">
								<?php if( have_rows('child_schedule') ): ?>
									<?php while( have_rows('child_schedule') ): the_row();
										$image = get_sub_field('image');
										$time  = get_sub_field('time');
										$text  = get_sub_field('text');
									?>
									<div class="secBox">
										<?php if( !empty($image) ): ?>
											<div class="photo">
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
											</div>
										<?php endif; ?>
										<div class="txtBox">
											<?php if( $time ): ?>
												<div class="timeBox poppins">
													<p><?php echo esc_html($time); ?></p>
												</div>
											<?php endif; ?>
											<?php if( $text ): ?>
												<div class="txt">
													<p><?php echo wp_kses_post($text); ?></p>
												</div>
											<?php endif; ?>
										</div>
									</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="staff"><img src="<?php bloginfo('template_url'); ?>/image/visit/schedule_staff.png" alt=""></div>
		</div>
		<div id="section__event">
			<div class="secTtl">
				<h2>年間スケジュール</h2><span>ねんかんスケジュール</span>
			</div>
			<div class="tabPanel">
				<div class="seasonButtonList">
					<ul>
						<li>
							<div class="seasonButton spring">
								<div>
									<p>春</p>
								</div>
							</div>
						</li>
						<li>
							<div class="seasonButton summer">
								<div>
									<p>夏</p>
								</div>
							</div>
						</li>
						<li>
							<div class="seasonButton autumn">
								<div>
									<p>秋</p>
								</div>
							</div>
						</li>
						<li>
							<div class="seasonButton winter">
								<div>
									<p>冬</p>
								</div>
							</div>
						</li>
						<li>
							<div class="seasonButton every">
								<div>
									<p>毎月</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="secContainer">
					<div class="photoList">
						<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/support/library_photo_list_sp.png" alt=""></div>
					</div>
					<div class="eventPanel">

						<!-- 春のイベント -->
						<div class="eventItemBox spring">
							<div class="ttl"><p>春のイベント</p></div>
							<div class="monthlyList">
								<?php
								$spring_months = array(
									'april' => '4月',
									'may'   => '5月',
									'june'  => '6月'
								);
								$spring = get_field('spring_event');
								if( $spring ):
									foreach( $spring_months as $month_key => $month_label ):
										if( !empty($spring[$month_key]) ): ?>
											<div class="monthlyBox">
												<dl>
													<dt><?php echo $month_label; ?></dt>
													<dd>
														<ul>
															<?php foreach( $spring[$month_key] as $row ): ?>
																<li><?php echo esc_html($row['item']); ?></li>
															<?php endforeach; ?>
														</ul>
													</dd>
												</dl>
											</div>
										<?php endif;
									endforeach;
								endif;
								?>
							</div>
							<aside><p>「*」は、家族も一緒に楽しむイベントです。</p></aside>
						</div>

						<!-- 夏のイベント -->
						<div class="eventItemBox summer">
							<div class="ttl"><p>夏のイベント</p></div>
							<div class="monthlyList">
								<?php
								$summer_months = array(
									'july'      => '7月',
									'august'    => '8月',
									'september' => '9月'
								);
								$summer = get_field('summer_event');
								if( $summer ):
									foreach( $summer_months as $month_key => $month_label ):
										if( !empty($summer[$month_key]) ): ?>
											<div class="monthlyBox">
												<dl>
													<dt><?php echo $month_label; ?></dt>
													<dd>
														<ul>
															<?php foreach( $summer[$month_key] as $row ): ?>
																<li><?php echo esc_html($row['item']); ?></li>
															<?php endforeach; ?>
														</ul>
													</dd>
												</dl>
											</div>
										<?php endif;
									endforeach;
								endif;
								?>
							</div>
							<aside><p>「*」は、家族も一緒に楽しむイベントです。</p></aside>
						</div>

						<!-- 秋のイベント -->
						<div class="eventItemBox autumn">
							<div class="ttl"><p>秋のイベント</p></div>
							<div class="monthlyList">
								<?php
								$autumn_months = array(
									'october'  => '10月',
									'november' => '11月',
									'december' => '12月'
								);
								$autumn = get_field('autumn_event');
								if( $autumn ):
									foreach( $autumn_months as $month_key => $month_label ):
										if( !empty($autumn[$month_key]) ): ?>
											<div class="monthlyBox">
												<dl>
													<dt><?php echo $month_label; ?></dt>
													<dd>
														<ul>
															<?php foreach( $autumn[$month_key] as $row ): ?>
																<li><?php echo esc_html($row['item']); ?></li>
															<?php endforeach; ?>
														</ul>
													</dd>
												</dl>
											</div>
										<?php endif;
									endforeach;
								endif;
								?>
							</div>
							<aside><p>「*」は、家族も一緒に楽しむイベントです。</p></aside>
						</div>

						<!-- 冬のイベント -->
						<div class="eventItemBox winter">
							<div class="ttl"><p>冬のイベント</p></div>
							<div class="monthlyList">
								<?php
								$winter_months = array(
									'january'  => '1月',
									'february' => '2月',
									'march'    => '3月'
								);
								$winter = get_field('winter_event');
								if( $winter ):
									foreach( $winter_months as $month_key => $month_label ):
										if( !empty($winter[$month_key]) ): ?>
											<div class="monthlyBox">
												<dl>
													<dt><?php echo $month_label; ?></dt>
													<dd>
														<ul>
															<?php foreach( $winter[$month_key] as $row ): ?>
																<li><?php echo esc_html($row['item']); ?></li>
															<?php endforeach; ?>
														</ul>
													</dd>
												</dl>
											</div>
										<?php endif;
									endforeach;
								endif;
								?>
							</div>
							<aside><p>「*」は、家族も一緒に楽しむイベントです。</p></aside>
						</div>

						<!-- 毎月のイベント -->
						<div class="eventItemBox every">
							<div class="ttl"><p>毎月のイベント</p></div>
							<div class="monthlyList">
								<?php if( have_rows('monthly_event') ): ?>
									<?php while( have_rows('monthly_event') ): the_row();
										$day = get_sub_field('day'); ?>
										<div class="monthlyBox">
											<dl>
												<dt><?php echo esc_html($day); ?></dt>
												<dd>
													<ul>
														<?php if( have_rows('event_list') ): ?>
															<?php while( have_rows('event_list') ): the_row(); ?>
																<li><?php echo esc_html(get_sub_field('item')); ?></li>
															<?php endwhile; ?>
														<?php endif; ?>
													</ul>
												</dd>
											</dl>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
							<aside><p>「*」は、家族も一緒に楽しむイベントです。</p></aside>
						</div>

					</div>

				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>