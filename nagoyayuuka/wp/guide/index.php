<?php
/*
Template Name: 入園案内
*/
?>

<?php get_header(); ?>
	<main id="guide">
		<div class="topContainer">
			<div class="topKv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/guide/top_kv_pc.png" alt=""></div>
			<div class="secContainer">
				<div class="moveCloudArea01">
					<div class="moveCloud scroll-infinity__cloud"><img src="<?php bloginfo('template_url'); ?>/image/common/move_cloud.png" alt=""></div>
				</div>
				<div class="moveCloudArea02">
					<div class="moveCloud scroll-infinity__cloud delay"><img src="<?php bloginfo('template_url'); ?>/image/common/move_cloud.png" alt=""></div>
				</div>
				<div class="topPanel">
					<div class="secBox">
						<div class="pTtl pink">
							<h1>入園案内</h1><span>にゅうえんあんない</span>
						</div>
						<div class="txt">
							<p><?php echo wp_kses_post(get_field('guide_explanation')); ?></p>
						</div>
					</div>
					<div id="flowTitle" class="secBox">
						<div class="pTtl green">
							<h2>入園の流れ</h2><span>にゅうえんのながれ</span>
						</div>
					</div>
				</div>
				<div class="flowPanel">
					<div class="kv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/guide/flow_kv_pc.png" alt=""></div>
					<div class="stepList">
						<div class="stepBox">
							<dl>
								<dt><span>STEP1</span></dt>
								<dd>
									<div class="txt left">
										<p>なごや遊花幼稚園（幼保連携認定こども園）に入園する場合、まずお住いの市町村より認定を受ける必要があります。<br>お子さまが１・２・３号認定の「どの認定区分」に該当するかご確認ください。</p>
									</div>
								</dd>
							</dl>
						</div>
						<div class="stepBox">
							<dl>
								<dt><span>STEP2</span></dt>
								<dd>
									<div class="txt left">
										<p>認定区分が確認されましたら下記内容に沿って入園の申込みを行います。</p>
									</div>
									<div class="detail">
										<dl>
											<dt class="pink">1号認定区分のご家庭</dt>
											<dd>
												<p>なごや遊花幼稚園</p>
											</dd>
										</dl>
										<dl>
											<dt class="blue">2・3号認定区分のご家庭</dt>
											<dd>
												<p>お住いの市町村へ</p>
											</dd>
										</dl>
									</div>
								</dd>
							</dl>
						</div>
						<div class="stepBox">
							<dl>
								<dt><span>STEP3</span></dt>
								<dd>
									<div class="txt left">
										<p>入園内定のお知らせは、当園から、または各市町村からご連絡いたします。</p>
									</div>
									<div class="detail">
										<dl>
											<dt class="pink">1号認定区分のご家庭</dt>
											<dd>
												<p>なごや遊花幼稚園</p>
											</dd>
										</dl>
										<dl>
											<dt class="blue">2・3号認定区分のご家庭</dt>
											<dd>
												<p>お住いの市町村へ</p>
											</dd>
										</dl>
									</div>
								</dd>
							</dl>
						</div>
						<div class="stepBox">
							<dl>
								<dt><span>STEP4</span></dt>
								<dd>
									<div class="txt">
										<p><em>面談を行い<br>入園となります</em></p>
									</div>
								</dd>
							</dl>
						</div>
					</div>
					<div class="btmBox">
						<ul>
							<li class="prev"><img src="<?php bloginfo('template_url'); ?>/image/guide/step_slide_prev.png" alt=""></li>
							<li class="pager">1/4</li>
							<li class="next"><img src="<?php bloginfo('template_url'); ?>/image/guide/step_slide_next.png" alt=""></li>
						</ul>
					</div>
				</div>
				<div id="divisionSection" class="divisionPanel">
					<div class="secBox">
						<div class="pTtl green">
							<h2>認定区分について</h2><span>にんていくぶんについて</span>
						</div>
						<div class="divisionList">
							<div class="divisionBox">
								<div class="balloon blue">
									<p>1号認定</p>
								</div>
								<div class="photo photo01"><img src="<?php bloginfo('template_url'); ?>/image/guide/division_img_01.png" alt=""></div>
								<dl>
									<dt class="blue">教育を希望する<br>満３歳以上</dt>
									<dd>お子様が満3歳以上で、教育を希望される方。満3歳以上の方は、全ての方が１号認定を受けることができます。</dd>
								</dl>
							</div>
							<div class="divisionBox">
								<div class="balloon green">
									<p>2号認定</p>
								</div>
								<div class="photo photo02"><img src="<?php bloginfo('template_url'); ?>/image/guide/division_img_02.png" alt=""></div>
								<dl>
									<dt class="green">保育を希望する<br>満３歳以上</dt>
									<dd>お子様が満3歳以上で、「保育の必要な事由」に該当し、保育を希望される方。</dd>
								</dl>
							</div>
							<div class="divisionBox">
								<div class="balloon pink">
									<p>3号認定</p>
								</div>
								<div class="photo photo03"><img src="<?php bloginfo('template_url'); ?>/image/guide/division_img_03.png" alt=""></div>
								<dl>
									<dt class="pink">保育を希望する<br>満３歳未満</dt>
									<dd>お子様が満3歳未満で、「保育の必要な事由」に該当し、保育を希望される方。</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="logoTextContainer slidePanel">
			<div class="slideBox">
				<ul>
					<li><img src="<?php bloginfo('template_url'); ?>/image/guide/logo_icon_text.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/image/guide/logo_icon_text.png" alt=""></li>
				</ul>
			</div>
		</div>
		<div id="section__recruitment">
			<div class="secTtl">
				<h2>募集要項</h2><span>ぼしゅうようこう</span>
			</div>
			<div class="recruitTablePanel">
				<div class="recruitTable">
					<table class="recruitTable__table">
						<thead>
							<tr>
								<th class="sideSpacer" colspan="2">&nbsp;</th>
								<th class="colHead colHead--blue">1号認定</th>
								<th class="colHead colHead--green">2号認定</th>
								<th class="colHead colHead--pink">3号認定</th>
							</tr>
						</thead>
						<tbody>
							<!-- 募集人数 -->
							<tr class="ageRow">
								<th class="sideLabel01" rowspan="6">
									<div class="title"><span>募集人数</span></div>
								</th>
								<th class="rowHead">0歳<span>（6カ月〜）</span></th>
								<td class="row row--blue"><?php echo esc_html(get_field('type1')['age0']); ?></td>
								<td class="row row--green"><?php echo esc_html(get_field('type2')['age0']); ?></td>
								<td class="row row--pink"><?php echo esc_html(get_field('type3')['age0']); ?></td>
							</tr>
							<tr class="ageRow">
								<th class="rowHead">1歳児</th>
								<td class="row row--blue"><?php echo esc_html(get_field('type1')['age1']); ?></td>
								<td class="row row--green"><?php echo esc_html(get_field('type2')['age1']); ?></td>
								<td class="row row--pink"><?php echo esc_html(get_field('type3')['age1']); ?></td>
							</tr>
							<tr class="ageRow">
								<th class="rowHead">2歳児</th>
								<td class="row row--blue"><?php echo esc_html(get_field('type1')['age2']); ?></td>
								<td class="row row--green"><?php echo esc_html(get_field('type2')['age2']); ?></td>
								<td class="row row--pink"><?php echo esc_html(get_field('type3')['age2']); ?></td>
							</tr>
							<tr class="ageRow">
								<th class="rowHead">3歳児（年少）</th>
								<td class="row row--blue"><?php echo esc_html(get_field('type1')['age3']); ?></td>
								<td class="row row--green"><?php echo esc_html(get_field('type2')['age3']); ?></td>
								<td class="row row--pink"><?php echo esc_html(get_field('type3')['age3']); ?></td>
							</tr>
							<tr class="ageRow">
								<th class="rowHead">4歳児（年中）</th>
								<td class="row row--blue"><?php echo esc_html(get_field('type1')['age4']); ?></td>
								<td class="row row--green"><?php echo esc_html(get_field('type2')['age4']); ?></td>
								<td class="row row--pink"><?php echo esc_html(get_field('type3')['age4']); ?></td>
							</tr>
							<tr class="ageRow">
								<th class="rowHead">5歳児（年長）</th>
								<td class="row row--blue"><?php echo esc_html(get_field('type1')['age5']); ?></td>
								<td class="row row--green"><?php echo esc_html(get_field('type2')['age5']); ?></td>
								<td class="row row--pink"><?php echo esc_html(get_field('type3')['age5']); ?></td>
							</tr>

							<!-- 就労 -->
							<tr class="sectionRow">
								<th class="sideLabel02" rowspan="3"></th>
								<th class="rowHead">就労</th>
								<td class="row row--blue"><?php echo esc_html(get_field('type1')['work']); ?></td>
								<td class="row row--green"><?php echo esc_html(get_field('type2')['work']); ?></td>
								<td class="row row--pink"><?php echo esc_html(get_field('type3')['work']); ?></td>
							</tr>

							<!-- 教育・保育時間 -->
							<tr class="sectionRow">
								<th class="rowHead">教育・保育時間</th>
								<td class="row row--blue"><?php echo wp_kses_post(get_field('type1')['time']); ?></td>
								<td class="row row--green"><?php echo wp_kses_post(get_field('type2')['time']); ?></td>
								<td class="row row--pink"><?php echo wp_kses_post(get_field('type3')['time']); ?></td>
							</tr>

							<!-- 休日 -->
							<tr class="sectionRow">
								<th class="rowHead">休日</th>
								<td class="row row--blue"><?php echo wp_kses_post(get_field('type1')['holiday']); ?></td>
								<td class="row row--green"><?php echo wp_kses_post(get_field('type2')['holiday']); ?></td>
								<td class="row row--pink"><?php echo wp_kses_post(get_field('type3')['holiday']); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div id="section__schedule">
			<div class="topPhoto">
				<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/guide/schedule_top_photo_01_pc.png" alt=""></div>
				<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/guide/schedule_top_photo_02_pc.png" alt=""></div>
			</div>
			<div class="scheduleBg">
				<div class="secContainer">
					<div class="secPanel">
						<!-- <div class="secBox01">
							<div class="inner">
								<div class="txtBox">
									<div class="secTtl">
										<h2>保育時間</h2><span>ほいくじかん</span>
									</div>
									<div class="title"><span>ようび</span>
										<p>月曜日〜金曜日</p>
									</div>
									<div class="timeList">
										<dl class="time01">
											<dt>AM 8:30-10:00</dt>
											<dd>登園</dd>
										</dl>
										<dl class="time02">
											<dt>AM 10:30-14:30</dt>
											<dd>保育</dd>
										</dl>
										<dl class="time03">
											<dt>AM 14:30-18:30</dt>
											<dd>延長保育</dd>
										</dl>
									</div>
								</div>
								<div class="chartBox">
									<div class="chart"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/guide/schedule_chart_top_pc.png" alt=""></div>
								</div>
							</div>
						</div> -->
						<div class="secBox02">
							<div class="secTtl">
								<h2>保育時間</h2><span>ほいくじかん</span>
							</div>
							<div class="inner">
								<div class="divisionPanel">
									<div class="divisionBox01 divisionBox">
										<div class="topBox">
											<div class="division blue">
												<p>認定区分</p>
											</div>
											<div class="balloon blue">
												<p>1号認定</p>
											</div>
											<div class="term blue">
												<p>3才〜5才</p>
											</div>
										</div>
										<div class="chart chart01"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/guide/schedule_chart_01_pc.png" alt=""></div>
										<aside>
											<p><span>※1…</span><em>新2号認定のお子様は預かり保育に<br class="spBreak">償還補助があります。</em></p>
											<p><span>※2…</span><em>早朝・延長・特別保育（春・夏・冬休み）の保育は可能ですが別途料金がかかります。</em></p>
										</aside>
									</div>
									<div class="divisionBox02 divisionBox">
										<div class="topBox">
											<div class="division pink">
												<p>認定区分</p>
											</div>
											<div class="balloon pink">
												<p>2・3号認定</p>
											</div>
											<div class="term pink">
												<p>0才〜5才</p>
											</div>
										</div>
										<div class="chart chart02"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/guide/schedule_chart_02_pc.png" alt=""></div>
										<aside>
											<p><span>※1…</span><em>通勤時間と勤務時間を合わせた時間の<br class="spBreak">受け入れとなります。<br>短時間保育の方は保育時間が短縮になります。</em></p>
											<p><span>※2…</span><em>短時間保育のお子様の場合、<br class="spBreak">早朝・延長の時間の場合は<br>別途料金がかかる場合がございます。</em></p>
										</aside>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="btmContainer">
					<div class="txtBox">
						<dl class="poppins">
							<dt>NAGOYA YUUKA YOUCHIEN</dt>
							<dd>9-30 SAKOU-CHO, NAKAMUTRA-KU,<br>NAGOYA-SHI, AICHI 453-0033</dd>
						</dl>
					</div>
					<div class="staff"><img src="<?php bloginfo('template_url'); ?>/image/guide/schedule_staff_photo.png" alt=""></div>
				</div>
			</div>
		</div>
		<div id="section__priceUniform">
			<div class="topKv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/guide/price_top_kv_pc.png" alt=""></div>
			<div id="priceSection" class="priceSection">
				<div class="secTtl">
					<h2>認定ごとの利用料</h2><span>りようりょう</span>
				</div>
				<div class="priceContainer tabContainer">
					<div class="tabPanel">
						<div class="tabList">
							<ul>
								<li class="tabBtn active">1号認定</li>
								<li class="tabBtn">2・3号認定</li>
							</ul>
						</div>
						<div class="tabItem">
							<div class="secPanel">
								<dl>
									<dt>施設維持費について</dt>
									<dd>
										<div class="facilityPrice">
											<dl>
												<dt><span>施設維持費</span></dt>
												<dd>
													<div class="box">
														<p>検定料：3,000円</p>
													</div>
													<p>入園料：30,000円</p>
													<aside>
														<p>※願書提出時にいただきます。</p>
													</aside>
												</dd>
											</dl>
										</div>
									</dd>
								</dl>
								<dl>
									<dt>月々の利用料について</dt>
									<dd>
										<div class="monthlyTable monthlyTable--01">
											<table>
												<thead>
													<tr>
														<th>階層区分</th>
														<th>保育料</th>
														<th>教育協力費</th>
														<th>給食費</th>
														<th>保護者会費</th>
														<th>バス送迎費</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>全階層</th>
														<td><span>幼児教育・保育の<br>無償化により0円</span></td>
														<td>
															<p>1,500円/月</p>
														</td>
														<td>
															<p>5,500円/月</p>
														</td>
														<td>
															<p>400円/月</p>
														</td>
														<td>
															<p> 3,500円/月</p><span>（利用者のみ）</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</dd>
								</dl>
								<dl>
									<dt>ホームルーム（預かり保育）</dt>
									<dd>
										<div class="extensionPrice">
											<dl>
												<dt><span>利用料</span></dt>
												<dd>
													<div class="box">
														<div class="left">
															<p>・月～金（14:30〜16:30）</p>
														</div>
														<div class="right">
															<p>450円</p>
														</div>
													</div>
													<aside>
														<p>※16:30以降の保育は1時間ごとに300円追加の保育料が加算されます。</p>
													</aside>
												</dd>
											</dl>
										</div>
									</dd>
								</dl>
								<dl>
									<dt>特別保育（夏・冬・春休み）</dt>
									<dd>
										<div class="dayPrice">
											<dl>
												<dt><span>利用料</span></dt>
												<dd>
													<div class="box">
														<div class="left">
															<p>・月～金（8:30〜14:30）</p>
														</div>
														<div class="right">
															<p>1,800円</p>
														</div>
													</div>
													<aside>
														<p>※14:30以降の保育は1時間ごとに300円追加の保育料が加算されます。</p>
														<p>※詳しくは園にご相談ください。</p>
													</aside>
												</dd>
											</dl>
										</div>
									</dd>
								</dl>
								<dl>
									<dt>ご購入いただく用品について</dt>
									<dd>
										<p>制服一式/カバン等／体操服／スモック／新年度用品</p>
									</dd>
								</dl>
							</div>
						</div>
						<div class="tabItem">
							<div class="secPanel">
								<dl>
									<dt>施設維持費について</dt>
									<dd>
										<div class="facilityPrice">
											<dl>
												<dt><span>施設維持費</span></dt>
												<dd>
													<div class="box">
														<p>検定料：3,000円</p>
													</div>
													<p>入園料：30,000円</p>
													<aside>
														<p>※願書提出時にいただきます。</p>
													</aside>
												</dd>
											</dl>
										</div>
									</dd>
								</dl>
								<dl>
									<dt>月々の利用料について</dt>
									<dd>
										<div class="monthlyTable monthlyTable--02">
											<table>
												<thead>
													<tr>
														<th>認定区分</th>
														<th>保育料</th>
														<th>教育協力費</th>
														<th>給食費</th>
														<th>保護者会費</th>
														<th>バス送迎費</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>3号認定</th>
														<td>
															<p>各ご家庭で徴収</p>
														</td>
														<td>
															<p>ありません</p><span>(年少クラスからあります)</span>
														</td>
														<td>
															<p>ありません</p><span>(年少クラスからあります)</span>
														</td>
														<td>
															<p>ありません</p><span>(年少クラスからあります)</span>
														</td>
														<td>
															<p>ありません</p><span>(年少クラスから利用者のみあります)</span>
														</td>
													</tr>
													<tr>
														<th>2号認定</th>
														<td><span>幼児教育・保育の<br>無償化により0円</span></td>
														<td>
															<p>1,500円/月</p>
														</td>
														<td>
															<p>7,000円/月</p>
														</td>
														<td>
															<p>1,500円/月</p>
														</td>
														<td>
															<p>3,500円/月</p><span>（利用者のみ）</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</dd>
								</dl>
								<dl>
									<dt>ホームルーム（預かり保育）</dt>
									<dd>
										<div class="extensionPrice">
											<dl>
												<dt><span>利用料</span></dt>
												<dd>
													<div class="box">
														<div class="left">
															<p>・月～金（14:30〜16:30）</p>
														</div>
														<div class="right">
															<p>450円</p>
														</div>
													</div>
													<aside>
														<p>※16:30以降の保育は1時間ごとに300円追加の保育料が加算されます。</p>
													</aside>
												</dd>
											</dl>
										</div>
									</dd>
								</dl>
								<dl>
									<dt>ご購入いただく用品について</dt>
									<dd>
										<p>制服一式/カバン等／体操服／スモック／新年度用品</p>
									</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="priceContainer tabContainer">
					<div class="tabPanel">
						<div class="tabList">
							<ul>
								<li class="tabBtn active">1号認定</li>
								<li class="tabBtn">2・3号認定</li>
							</ul>
						</div>

						<div class="tabItem">
							<div class="secPanel">
								<?php $type1 = get_field('price_type1', 21); ?>
								<?php if ($type1): ?>
								<dl>
									<dt>施設維持費について</dt>
									<dd>
										<div class="facilityPrice">
											<dl>
												<dt><span>施設維持費</span></dt>
												<dd>
													<p><?php echo esc_html($type1['facility']); ?></p>
													<aside><p>※入園時にいただきます</p></aside>
												</dd>
											</dl>
										</div>
									</dd>
								</dl>

								<dl>
									<dt>月々の利用料について</dt>
									<dd>
										<div class="monthlyTable monthlyTable--01">
											<table>
												<thead>
													<tr>
														<th>階層区分</th>
														<th>保育料</th>
														<th>教育充実費</th>
														<th>給食費（主食費）</th>
														<th>給食費（副食費）</th>
														<th>保健衛生費</th>
														<th>バス送迎費</th>
														<th>口座振替手数料</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>全階層</th>
														<td><span>幼児教育・保育の無償化により0円</span></td>
														<td><p><?php echo wp_kses_post($type1['month_education']); ?></p></td>
														<td><p><?php echo wp_kses_post($type1['month_meal_main']); ?></p></td>
														<td><p><?php echo wp_kses_post($type1['month_meal_sub']); ?></p></td>
														<td><p><?php echo wp_kses_post($type1['month_health']); ?></p></td>
														<td><p><?php echo wp_kses_post($type1['month_bus']); ?></p></td>
														<td><p><?php echo wp_kses_post($type1['month_fee']); ?></p></td>
													</tr>
												</tbody>
											</table>
										</div>
									</dd>
								</dl>

								<dl>
									<dt>延長保育について</dt>
									<dd>
										<div class="extensionPrice">
											<dl>
												<dt><span>利用料</span></dt>
												<dd>
													<div class="box">
														<div class="left"><p>・月～金（14:30〜18:30）</p></div>
														<div class="right"><p><?php echo esc_html($type1['extension']); ?></p></div>
													</div>
												</dd>
											</dl>
										</div>
									</dd>
								</dl>

								<dl>
									<dt>一日預かりについて</dt>
									<dd>
										<div class="dayPrice">
											<dl>
												<dt><span>利用料</span></dt>
												<dd>
													<div class="box">
														<div class="left"><p>・月～金（14:30〜18:30）</p></div>
														<div class="right"><p><?php echo esc_html($type1['daycare']); ?></p></div>
													</div>
												</dd>
											</dl>
										</div>
									</dd>
								</dl>

								<dl>
									<dt>ご購入いただく用品について</dt>
									<dd>
										<div class="purchaseTable">
											<table>
												<tbody>
													<tr>
														<th>制服一式（夏冬用・カバン等）</th>
														<td><?php echo wp_kses_post($type1['purchase_uniform']); ?></td>
													</tr>
													<tr>
														<th>体操服・スモック一式（夏冬用）</th>
														<td><?php echo wp_kses_post($type1['purchase_clothes']); ?></td>
													</tr>
													<tr>
														<th>新年度用品</th>
														<td><?php echo wp_kses_post($type1['purchase_goods']); ?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</dd>
								</dl>
								<?php endif; ?>
							</div>
						</div>

						<div class="tabItem">
							<div class="secPanel">
								<?php $type2 = get_field('price_type2', 21); ?>
								<?php if ($type2): ?>
								<dl>
									<dt>施設維持費について</dt>
									<dd>
										<div class="facilityPrice">
											<dl>
												<dt><span>施設維持費</span></dt>
												<dd>
													<p><?php echo esc_html($type2['facility']); ?></p>
													<aside><p>※入園時にいただきます</p></aside>
												</dd>
											</dl>
										</div>
									</dd>
								</dl>

								<dl>
									<dt>月々の利用料について</dt>
									<dd>
										<div class="monthlyTable monthlyTable--02">
											<table>
												<thead>
													<tr>
														<th>階層区分</th>
														<th>保育料</th>
														<th>教育充実費</th>
														<th>給食費（主食費）</th>
														<th>給食費（副食費）</th>
														<th>口座振替手数料</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>全階層</th>
														<td><span>幼児教育・保育の無償化により0円</span></td>
														<td><p><?php echo wp_kses_post($type2['month_education']); ?></p></td>
														<td><p><?php echo wp_kses_post($type2['month_meal_main']); ?></p></td>
														<td><p><?php echo wp_kses_post($type2['month_meal_sub']); ?></p></td>
														<td><p><?php echo wp_kses_post($type2['month_fee']); ?></p></td>
													</tr>
												</tbody>
											</table>
										</div>
									</dd>
								</dl>

								<dl>
									<dt>延長保育について</dt>
									<dd>
										<div class="extensionPrice">
											<dl>
												<dt><span>利用料</span></dt>
												<dd>
													<div class="box">
														<div class="left"><p>・早朝（7:30〜8:30）</p></div>
														<div class="right"><p><?php echo esc_html($type2['extension_morning']); ?></p></div>
													</div>
													<div class="box">
														<div class="left"><p>・延長（16:30〜18:30）</p></div>
														<div class="right"><p><?php echo esc_html($type2['extension_evening']); ?></p></div>
													</div>
												</dd>
											</dl>
										</div>
									</dd>
								</dl>

								<dl>
									<dt>一日預かりについて</dt>
									<dd>
										<div class="dayPrice">
											<dl>
												<dt><span>利用料</span></dt>
												<dd>
													<div class="box">
														<div class="left"><p>・月～金（14:30〜18:30）</p></div>
														<div class="right"><p><?php echo esc_html($type2['daycare']); ?></p></div>
													</div>
												</dd>
											</dl>
										</div>
									</dd>
								</dl>

								<dl>
									<dt>ご購入いただく用品について</dt>
									<dd>
										<div class="purchaseTable">
											<table>
												<tbody>
													<tr>
														<th>制服一式（夏冬用・カバン等）</th>
														<td><?php echo wp_kses_post($type2['purchase_uniform']); ?></td>
													</tr>
													<tr>
														<th>体操服・スモック一式（夏冬用）</th>
														<td><?php echo wp_kses_post($type2['purchase_clothes']); ?></td>
													</tr>
													<tr>
														<th>新年度用品</th>
														<td><?php echo wp_kses_post($type2['purchase_goods']); ?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</dd>
								</dl>
								<?php endif; ?>
							</div>
						</div>

					</div>
				</div> -->
			</div>

			<div id="uniformSection" class="uniformSection">
				<div class="secTtl">
					<h2>制服紹介</h2><span>せいふくしょうかい</span>
				</div>
				<div class="uniformList"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/guide/uniform_list_pc.png" alt=""></div>
			</div>
			<div id="faqSecTtl" class="faqSecTtl">
				<h2>よくある質問</h2>
			</div>
		</div>
		<div id="section__faq">
			<div class="secBox">
				<dl class="accord">
					<dt><span>Q.</span><em>給食やおやつはどのように提供されていますか？</em></dt>
					<dd>
						<div class="box">
							<div class="answer">
								<p>栄養士の献立に基づき、園内で調理した温かい給食を提供しています。<br>アレルギーのあるお子さまは個別に対応を行っていますのでご相談ください。</p>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="accord">
					<dt><span>Q.</span><em>体調が悪い時や、熱が出た場合はどうなりますか？</em></dt>
					<dd>
						<div class="box">
							<div class="answer">
								<p>登園後に発熱や体調不良が見られた場合は、保護者の方にご連絡いたします。<br>お迎えをお願いすることがありますので、緊急連絡先の確認をお願いします。</p>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="accord">
					<dt><span>Q.</span><em>駐車場・駐輪場はありますか？</em></dt>
					<dd>
						<div class="box">
							<div class="answer">
								<p>送迎用の駐車場・駐輪場をご用意しております。<br>限られた台数のため短時間でのご利用にご協力をお願いいたします。</p>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="accord">
					<dt><span>Q.</span><em>毎日どんな持ち物が必要ですか？</em></dt>
					<dd>
						<div class="box">
							<div class="answer">
								<p>着替え、お手拭きタオル、給食セット、おたより帳などをご用意ください。<br>季節や年齢により持ち物が変わることがありますので、詳しくは入園説明資料をご確認ください。</p>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="accord">
					<dt><span>Q.</span><em>バス運行はありますか？</em></dt>
					<dd>
						<div class="box">
							<div class="answer">
								<p>はい、園では送迎バスを運行しています。<br>ルートや停留所はお子さまの通園区域や利用希望をもとに、園で検討のうえ決定しています。<br>運行の時間についても、安全面や交通状況を考慮して園で設定しています。<br>ご希望に添えない場合もございます。ご理解とご協力をお願いいたします。</p>
							</div>
						</div>
					</dd>
				</dl>
			</div>
		</div>
		<div class="faqKv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/guide/faq_kv_pc.png" alt=""></div>
		<div id="section__document">
			<div class="secTtl">
				<h2>入園資料ダウンロード</h2><span>にゅうえんしりょうダウンロード</span>
			</div>
			<div class="bnrBoxList">
				<?php $recruitment_pdf = get_field('recruitment_pdf'); ?>
				<?php if( $recruitment_pdf ): ?>
					<div class="bnrBox">
						<a href="<?php echo esc_url($recruitment_pdf['url']); ?>" target="_blank" download>
							<img class="switch" src="<?php bloginfo('template_url'); ?>/image/guide/pdf_bnr_02_pc.png" alt="募集要項PDF">
						</a>
					</div>
				<?php endif; ?>
				<?php $guide_pdf = get_field('guide_pdf'); ?>
				<?php if( $guide_pdf ): ?>
					<div class="bnrBox">
						<a href="<?php echo esc_url($guide_pdf['url']); ?>" target="_blank" download>
							<img class="switch" src="<?php bloginfo('template_url'); ?>/image/guide/pdf_bnr_01_pc.png" alt="入園案内PDF">
						</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div id="section__visit">
			<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/guide/visit_photo.png" alt=""></div>
			<div class="secBox">
				<div class="secTtl">
					<h2>なごや遊花幼稚園に<br>見学に来ませんか？</h2>
				</div>
				<div class="txt">
					<p>ご入園をお考えの方は、まずは一度園見学にお越しください。<br>保育の様子や園内の雰囲気や職員の関わり方、設備など、気になる点を保護者の方。ご自身の目でご覧いただき、<br>安心してご入園いただければと思っております。温かく、のびのびとした遊花の毎日を、どうぞ体感しにいらしてください。</p>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>