<?php
/*
Template Name: 0歳児からの子育てサポート
*/
?>

<?php get_header(); ?>
	<main id="support">
		<div class="topContainer">
			<div class="topKv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/support/top_kv_pc.png" alt=""></div>
			<div class="topTitle">
				<h1>０歳児からの<br>子育てサポート</h1>
			</div>
		</div>
		<div class="topMessageBox">
			<div class="box"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/support/top_message_house_pc.png" alt=""></div>
		</div>
		<div class="topTxtBox">
			<div class="txt">
				<p>就学前のお子さまと保護者さまに、親子一緒に園での時間を楽しんでいただける機会をご用意しています。<br>先生やお友だちとのふれあい、遊びや活動を通して、園の温かな雰囲気や子どもたちの笑顔をぜひ感じてください。<br>園生活や入園についてのご質問・ご相談もお気軽にしていただけます。<br>当園では、満3歳からの入園も受け入れております。お子さまの成長に寄り添いながら、安心して園生活をスタートできるようサポートしています。<br>まずは園の雰囲気を知っていただけたら嬉しいです。</p>
			</div>
		</div>
		<div class="pagingList">
			<ul>
				<li>
					<div class="btnMore btnMorePink btnPager btnPagerPink"><a href="#section__classroom">
							<div>
								<p>満3歳からの入園</p>
							</div>
						</a></div>
				</li>
				<li>
					<div class="btnMore btnMoreBlue btnPager btnPagerBlue"><a href="#section__library">
							<div>
								<p>おもちゃ図書館</p>
							</div>
						</a></div>
				</li>
				<li>
					<div class="btnMore btnMoreGreen btnPager btnPagerGreen"><a href="#section__square">
							<div>
								<p>チビッコひろば</p>
							</div>
						</a></div>
				</li>
			</ul>
		</div>
		<div id="section__classroom">
			<div class="topPanel">
				<div class="circle"><img src="<?php bloginfo('template_url'); ?>/image/support/classroom_top_circle.png" alt=""></div>
				<div class="txtBox">
					<div class="inner">
						<div class="secTtl">
							<h2>満3歳からの入園</h2>
						</div>
						<dl>
							<dt>満3歳から始める、ゆったり園生活</dt>
							<dd>3歳の誕生日を迎えたお子さまを対象に、遊花幼稚園では入園していたく事が出来ます。<br>ゆっくりと過ごせる環境の中、先生やお友だちとの関わりを通して、社会性や生活リズムを自然に育みます。園生活に向けたスムーズなステップとして、子どもたちも保護者の方も安心して過ごせる環境です。</dd>
						</dl>
					</div>
				</div>
				<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/support/classroom_top_photo_pc.png" alt=""></div>
			</div>
			<div class="overviewPanel">
				<div class="sectionTtl">
					<h3>概要</h3><span>がいよう</span>
				</div>
				<div class="overviewTable">
					<table>
						<tbody>
							<?php if (have_rows('overview_items_classroom')): ?>
								<?php while (have_rows('overview_items_classroom')): the_row(); ?>
									<tr>
										<th><?php the_sub_field('overview_title'); ?></th>
										<td><?php the_sub_field('overview_text'); ?></td>
									</tr>
								<?php endwhile; ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="schedulePanel">
				<div class="sectionTtl">
					<h3>園児の1日</h3><span>えんじのいちにち</span>
				</div>
				<div class="secContainer">
					<div class="secPanel">
						<?php if( have_rows('child_schedule', 27) ): ?>
							<?php while( have_rows('child_schedule', 27) ): the_row();
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
					<div class="bnrEntry">
						<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/support/bnr_entry_pc.png" alt=""></div>
						<div class="txtBox">
							<dl>
								<dt class="poppins">- ENTRY -</dt>
								<dd>
									<p>満3歳のお子さまの<br class="spBreak">お申し込みはこちらから</p>
									<div class="btnMore btnMoreBlueDeep"><a href="<?php echo home_url(); ?>/entry">
											<div>
												<p>見学予約</p>
											</div>
										</a></div>
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="section__library">
			<div class="topPanel">
				<div class="circle"><img src="<?php bloginfo('template_url'); ?>/image/support/library_top_circle.png" alt=""></div>
				<div class="txtBox">
					<div class="inner">
						<div class="secTtl">
							<h2>おもちゃ図書館</h2>
						</div>
						<dl>
							<dt>親子で自由に遊べる「おもちゃ図書館」</dt>
							<dd>幼稚園を地域の皆さまに開放する「おもちゃ図書館」では、親子で安心して遊べる空間をご提供しています。年齢に合わせたおもちゃをそろえ、絵本や手遊びも楽しめるほっとできる場所です。<br>開催日は決まり次第、ホームページやお知らせ欄でご案内しています。<br></dd>
						</dl>
						<div class="btnMore btnMoreBlueDeep"><a href="">
								<div>
									<p>詳しくはこちら</p>
								</div>
							</a></div>
					</div>
				</div>
				<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/support/library_top_photo_pc.png" alt=""></div>
			</div>
			<div class="btnSchedule btnPaging">
				<a href="#monthlySchedule">
					<p>今月の開催スケジュール</p>
				</a>
			</div>
			<div class="photoList">
				<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/support/library_photo_list_sp.png" alt=""></div>
				<div class="logo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/support/library_photo_list_logo.png" alt=""></div>
			</div>
		</div>
		<div id="section__square">
			<div class="topPanel">
				<div class="circle"><img src="<?php bloginfo('template_url'); ?>/image/support/square_top_circle.png" alt=""></div>
				<div class="txtBox">
					<div class="inner">
						<div class="secTtl">
							<h2>チビッコひろば</h2>
						</div>
						<dl>
							<dt>はじめの一歩は「チビッコひろば」から</dt>
							<dd>未就園児とその保護者を対象にした「チビッコひろば」では、季節のあそびや親子ふれあい活動を楽しんでいただけます。<br>はじめて幼稚園に来る方でも安心して参加できるよう、スタッフが丁寧にサポートいたします。<br>開催日時や申込方法は、下記をご覧ください。</dd>
						</dl>
						<div class="btnMore btnMoreBlueDeep"><a href="">
								<div>
									<p>詳しくはこちら</p>
								</div>
							</a></div>
					</div>
				</div>
				<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/support/square_top_photo_pc.png" alt=""></div>
			</div>
			<div class="overviewPanel">
				<div class="sectionTtl">
					<h3>概要</h3><span>がいよう</span>
				</div>
				<div class="overviewTable">
					<table>
						<tbody>
							<?php if (have_rows('overview_items_square')): ?>
								<?php while (have_rows('overview_items_square')): the_row(); ?>
									<tr>
										<th><?php the_sub_field('overview_title'); ?></th>
										<td><?php the_sub_field('overview_text'); ?></td>
									</tr>
								<?php endwhile; ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="btnSchedule btnPaging">
				<a href="#monthlySchedule">
					<p>今月の開催スケジュール</p>
				</a>
			</div>
			<div class="kvSchedule">
				<div class="kv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/support/square_schedule_kv_pc.png" alt=""></div>
				<div class="info">
					<dl class="poppins">
						<dt>NAGOYA YUUKA YOUCHIEN</dt>
						<dd>9-30 SAKOU-CHO, NAKAMUTRA-KU,<br>NAGOYA-SHI, AICHI 453-0033</dd>
					</dl>
				</div>
			</div>
			<div id="monthlySchedule" class="monthlySchedule">
				<div class="topTtl"><span class="poppins">- SCHEDULE -</span>
					<h3>今月の開催スケジュール</h3>
				</div>
				<div class="monthlyEventContainer" id="monthlyEventContainer">
					<?php
					$rows = get_field('event_calendar');
					if ($rows) {
						// 月ごとにまとめる
						$months = [];
						foreach ($rows as $row) {
							$date = $row['event_date'] ?? '';
							if (!$date) continue;
							$ym = date('Y-m', strtotime($date));
							$months[$ym][] = $row;
						}
						ksort($months);

						$monthKeys = array_keys($months);
						$index = 0;

						foreach ($monthKeys as $ym) {
							$year  = date('Y', strtotime($ym . '-01'));
							$month = date('n', strtotime($ym . '-01'));
							$monthEng = strtoupper(date('M', strtotime($ym . '-01')));
							$daysInMonth = date('t', strtotime($ym . '-01'));
							$firstWeekday = date('w', strtotime($ym . '-01'));

							// イベントまとめ
							$eventsByDay = [];
							foreach ($months[$ym] as $row) {
								$day = (int)date('j', strtotime($row['event_date']));
								$eventsByDay[$day][] = $row;
							}
							?>
							<div class="monthlyEventPanel" data-index="<?php echo $index; ?>" <?php if ($index > 0) echo 'style="display:none;"'; ?>>
								<div class="monthHeader">
									<div class="monthHeader__left">
										<p><em><?php echo $month; ?></em><span>月</span></p>
									</div>
									<div class="monthHeader__right">
										<p><?php echo $monthEng; ?></p>
										<p><?php echo $year; ?></p>
									</div>
								</div>

								<div class="eventType">
									<ul>
										<li class="blue">おもちゃ図書館</li>
										<li class="green">チビッコひろば</li>
									</ul>
								</div>

								<div class="calendarPanel">
									<table class="calendar__table">
										<thead>
											<tr>
												<th>日</th><th>月</th><th>火</th><th>水</th>
												<th>木</th><th>金</th><th>土</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$day = 1;
											for ($row = 0; $row < 6; $row++) {
												echo '<tr>';
												for ($col = 0; $col < 7; $col++) {
													if (($row === 0 && $col < $firstWeekday) || $day > $daysInMonth) {
														echo '<td class="is-empty"></td>';
													} else {
														echo '<td>';
														echo '<div class="calendar__date">' . $day . '</div>';
														if (!empty($eventsByDay[$day])) {
															// イベントあり → timeBoxで囲む
															echo '<div class="timeBox">';

															foreach ($eventsByDay[$day] as $ev) {
																if (!empty($ev['event_toy_library'])) {
																	echo '<div class="event blue">' . esc_html($ev['event_toy_library']) . '</div>';
																}
																if (!empty($ev['event_square'])) {
																	echo '<div class="event green">' . esc_html($ev['event_square']) . '</div>';
																}
															}

															echo '</div>'; // .timeBox
														}
														echo '</td>';
														$day++;
													}
												}
												echo '</tr>';
												if ($day > $daysInMonth) break;
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
							<?php
							$index++;
						}
					}
					?>
					<div class="calendarNav">
						<div class="prev">
							<img src="<?php bloginfo('template_url'); ?>/image/support/calendar_prev.png" alt="">
						</div>
						<div class="next">
							<img src="<?php bloginfo('template_url'); ?>/image/support/calendar_next.png" alt="">
						</div>
					</div>
					<div class="spBalloonText">
						<div class="spBalloonText__inner">
							<p>日付タップで<br>時間を確認</p>
						</div>
					</div>
				</div>
				<script>
					document.addEventListener("DOMContentLoaded", function () {
						const panels = document.querySelectorAll(".monthlyEventPanel");
						const prevBtn = document.querySelector(".calendarNav .prev");
						const nextBtn = document.querySelector(".calendarNav .next");
						const spBalloon = document.querySelector(".spBalloonText");
						let currentIndex = 0;

						function showPanel(index) {
							panels.forEach((p, i) => {
								p.style.display = (i === index) ? "block" : "none";
							});
							prevBtn.style.display = (index === 0) ? "none" : "block";
							nextBtn.style.display = (index === panels.length - 1) ? "none" : "block";
						}

						prevBtn.addEventListener("click", function () {
							if (currentIndex > 0) {
								currentIndex--;
								showPanel(currentIndex);
							}
						});

						nextBtn.addEventListener("click", function () {
							if (currentIndex < panels.length - 1) {
								currentIndex++;
								showPanel(currentIndex);
							}
						});

						// 初期表示
						showPanel(currentIndex);

						if (window.matchMedia("(max-width: 1140px)").matches) {
							if (spBalloon) {
								spBalloon.addEventListener("click", function () {
									spBalloon.style.display = "none";
								});
							}

							document.addEventListener("click", function (e) {
								const td = e.target.closest("td");
								const activeBox = document.querySelector(".timeBox.active");

								if (td && td.querySelector(".timeBox")) {
									const box = td.querySelector(".timeBox");
									if (activeBox && activeBox !== box) {
										activeBox.classList.remove("active");
									}
									box.classList.toggle("active");
								} else {
									if (activeBox) activeBox.classList.remove("active");
								}
							});
						}
					});
				</script>
			</div>
		</div>
	</main>
<?php get_footer(); ?>