<?php
/*
Template Name: 料金案内
*/
?>

<?php get_header(); ?>
	<main id="price">
		<div class="topContainer">
			<div class="topKv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/price/top_kv_pc.png" alt=""></div>
			<div class="topTitle">
				<h1>料金案内</h1><span>りょうきんあんない</span>
			</div>
		</div>
		<div class="priceSection">
			<div class="priceContainer tabContainer">
				<div class="tabPanel">
					<div class="tabList">
						<ul>
							<li class="tabBtn active">1号認定</li>
							<li class="tabBtn">2号認定</li>
							<li class="tabBtn">3号認定</li>
						</ul>
					</div>

					<!-- 1号認定 -->
					<div class="tabItem">
						<div class="icon01"><img src="<?php bloginfo('template_url'); ?>/image/price/bg_icon_01.png" alt=""></div>
						<div class="secPanel">
							<?php $type1 = get_field('price_type1'); ?>
							<?php if($type1): ?>

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
													<th>給食費<span>（主食費）</span></th>
													<th>給食費<span>（副食費）</span></th>
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
													<th>制服一式<span>（夏冬用・カバン等）</span></th>
													<td><?php echo wp_kses_post($type1['purchase_uniform']); ?></td>
												</tr>
												<tr>
													<th>体操服・スモック一式<span>（夏冬用）</span></th>
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

					<!-- 2号認定 -->
					<div class="tabItem">
						<div class="icon02"><img src="<?php bloginfo('template_url'); ?>/image/price/bg_icon_02.png" alt=""></div>
						<div class="secPanel">
							<?php $type2 = get_field('price_type2'); ?>
							<?php if($type2): ?>

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
													<th>給食費<span>（主食費）</span></th>
													<th>給食費<span>（副食費）</span></th>
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
													<th>制服一式<span>（夏冬用・カバン等）</span></th>
													<td><?php echo wp_kses_post($type2['purchase_uniform']); ?></td>
												</tr>
												<tr>
													<th>体操服・スモック一式<span>（夏冬用）</span></th>
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

					<!-- 3号認定 -->
					<div class="tabItem">
						<div class="icon03"><img src="<?php bloginfo('template_url'); ?>/image/price/bg_icon_03.png" alt=""></div>
						<div class="secPanel">
							<?php $type3 = get_field('price_type3'); ?>
							<?php if($type3): ?>

							<dl>
								<dt>施設維持費について</dt>
								<dd>
									<div class="facilityPrice">
										<dl>
											<dt><span>施設維持費</span></dt>
											<dd>
												<p><?php echo esc_html($type3['facility']); ?></p>
												<aside><p>※入園時にいただきます</p></aside>
											</dd>
										</dl>
									</div>
								</dd>
							</dl>

							<dl>
								<dt>月々の利用料について</dt>
								<dd>
									<div class="monthlyTable monthlyTable--03">
										<table>
											<thead>
												<tr>
													<th>階層区分</th>
													<th>保育料</th>
													<th>教育充実費</th>
													<th>保健衛生費</th>
													<th>口座振替手数料</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th>全階層</th>
													<td><span>所得に応じ市町村が利用者負担額を決定</span></td>
													<td><p><?php echo wp_kses_post($type3['month_education']); ?></p></td>
													<td><p><?php echo wp_kses_post($type3['month_health']); ?></p></td>
													<td><p><?php echo wp_kses_post($type3['month_fee']); ?></p></td>
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
													<div class="right"><p><?php echo esc_html($type3['extension_morning']); ?></p></div>
												</div>
												<div class="box">
													<div class="left"><p>・延長（16:30〜18:30）</p></div>
													<div class="right"><p><?php echo esc_html($type3['extension_evening']); ?></p></div>
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
													<div class="right"><p><?php echo esc_html($type3['daycare']); ?></p></div>
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
													<th>エプロン等</th>
													<td><?php echo wp_kses_post($type3['purchase_apron']); ?></td>
												</tr>
												<tr>
													<th>体操服・スモック一式<span>（夏冬用）</span></th>
													<td><?php echo wp_kses_post($type3['purchase_clothes']); ?></td>
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
			</div>
		</div>

	</main>
<?php get_footer(); ?>