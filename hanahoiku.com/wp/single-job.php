	<?php
	/**
	 * The template for displaying all single posts and attachments
	 *
	 * @package WordPress
	 * @subpackage hanahoiku
	 * @since Twenty Fifteen 1.0
	 */

	get_header('recruit'); ?>

	<?php
	if (have_rows('fv01')) :
	?>
		<div id="fv">
			<div class="images">
				<?php
				while (have_rows('fv01')) : the_row();
				?>
					<div class="image01" style="background-image: url(<?php
																		$image = get_sub_field('image01');
																		$size = 'full'; // (thumbnail, medium, large, full or custom size)
																		if ($image) {
																			echo wp_get_attachment_image_url($image, $size);
																		}
																		?>);">

					</div>
					<!-- /.image01 -->
					<div class="image02" style="background-image: url(<?php
																		$image = get_sub_field('image02');
																		$size = 'full'; // (thumbnail, medium, large, full or custom size)
																		if ($image) {
																			echo wp_get_attachment_image_url($image, $size);
																		}
																		?>);">

					</div>
					<!-- /.image01 -->
				<?php
				endwhile;
				?>
			</div>
			<!-- /.images -->
			<div class="header">
				<h2>
					<?php the_title(); ?>
				</h2>
				<div class="mnav">
					<ul>
						<?php if (get_field('hyouji') == 'on') {
						?>
							<li>
								<a href="#feature">
									園の特徴
								</a>
							</li>
						<?php
						} ?>
						<li>
							<a href="#requirements">
								募集要項
							</a>
						</li>
						<!-- <li>
							<a href="#flow">
								採用の流れ
							</a>
						</li> -->
					</ul>
				</div>
				<!-- /.mnav -->
			</div>
			<!-- /.header -->

		</div>
		<!-- /#fv -->
	<?php
	else :
	endif;
	?>


	<?php if (get_field('hyouji') == 'on') {
	?>
		<div id="feature">
			<div class="header">
				<h3>
					園の特徴
				</h3>
			</div>
			<!-- /.header -->
			<?php
			$value = get_field("image01");
			if ($value) {
			?>
				<div class="image">
					<?php
					$image = get_field('image01');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if ($image) {
						echo wp_get_attachment_image($image, $size);
					}
					?>
				</div>
				<!-- /.image -->
			<?php
			} else {
			?>

			<?php
			}
			?>
			<?php
			$value = get_field("desc01");
			if ($value) {
			?>
				<div class="desc">
					<?php echo get_field('desc01'); ?>
				</div>
				<!-- /.desc -->
			<?php
			} else {
			?>

			<?php
			}
			?>
		</div>
		<!-- /#feature -->
	<?php
	} ?>

	<?php
	if (have_rows('contents01')) :
	?>
		<div id="contents">
			<?php
			while (have_rows('contents01')) : the_row();
			?>
				<div class="block">
					<div class="image">
						<?php
						$image = get_sub_field('image');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if ($image) {
							echo wp_get_attachment_image($image, $size);
						}
						?>
					</div>
					<!-- /.image -->
					<div class="txt">
						<div class="header">
							<?php echo get_sub_field('header'); ?>
						</div>
						<!-- /.header -->
						<div class="desc">
							<?php echo get_sub_field('contents'); ?>
						</div>
						<!-- /.desc -->
					</div>
					<!-- /.txt -->
				</div>
				<!-- /.block -->
			<?php
			endwhile;
			?>
		</div>
		<!-- /#contents -->
	<?php
	else :
	endif;
	?>


	<div id="requirements">
		<div class="header">
			<h3>
				募集要項
			</h3>
		</div>
		<!-- /.header -->

		<div class="list">

			<!-- test -->
			<div class="tab-area">
				<?php
				$counter03 = 0;
				?>
				<?php
				if (have_rows('youkou01')) :
				?>

					<?php
					while (have_rows('youkou01')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
								新卒｜保育士</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>
				<?php
				if (have_rows('youkou05')) :
				?>

					<?php
					while (have_rows('youkou05')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
								中途｜保育士</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>
				<?php
				else :
				endif;
				?>
				<!--  -->
				<?php
				if (have_rows('youkou09')) :
				?>

					<?php
					while (have_rows('youkou09')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
								園長</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>
				<!--  -->


				<?php
				if (have_rows('youkou02')) :
				?>

					<?php
					while (have_rows('youkou02')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
								パート｜保育士</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>

				<!--  -->
				<?php
				if (have_rows('youkou03')) :
				?>

					<?php
					while (have_rows('youkou03')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
								パート｜保育補助</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>
				<!--  -->
				<?php
				if (have_rows('youkou04')) :
				?>

					<?php
					while (have_rows('youkou04')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
								パート｜調理師</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>
				<?php
				else :
				endif;
				?>
				<!--  -->
				<?php
				if (have_rows('youkou06')) :
				?>

					<?php
					while (have_rows('youkou06')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
								パート｜看護師</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>
				<!--  -->
				<!--  -->
				<?php
				if (have_rows('youkou07')) :
				?>

					<?php
					while (have_rows('youkou07')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
								パート｜児童指導員</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>
				<!--  -->
				<!--  -->
				<?php
				if (have_rows('youkou08')) :
				?>

					<?php
					while (have_rows('youkou08')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
								パート｜子育て支援員</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>
				<!--  -->

				<!--  -->
				<?php
				if (have_rows('youkou11')) :
				?>

					<?php
					while (have_rows('youkou11')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
								本社｜営業事務</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>
				<?php
				else :
				endif;
				?>
				<!--  -->

				<!--  -->
				<?php
				if (have_rows('youkou12')) :
				?>

					<?php
					while (have_rows('youkou12')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
								本社｜企画事務職</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>
				<?php
				else :
				endif;
				?>
				<!--  -->

				<!--  -->
				<?php
				if (have_rows('youkou13')) :
				?>

					<?php
					while (have_rows('youkou13')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
								本社｜システム管理者</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>
				<?php
				else :
				endif;
				?>
				<!--  -->
				  <!--  -->
				<?php
				if (have_rows('youkou14')) :
				?>

					<?php
					while (have_rows('youkou14')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
							$counter03++;
						?>
							<div class="tab">
							募集要項（正社員・調理師）</div>
							<!-- /.tab -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>
				<?php
				else :
				endif;
				?>
				<!--  -->

			</div>
			<!-- /.tab-area -->
			<div class="tab-count">
				<?php echo $counter03; ?>
			</div>
			<!-- /.tab-count -->
			<div class="content-area">
				<?php
				if (have_rows('youkou01')) :
				?>

					<?php
					while (have_rows('youkou01')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										保育士（新卒）
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										正社員
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>

				<?php
				if (have_rows('youkou05')) :
				?>

					<?php
					while (have_rows('youkou05')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										保育士（中途）
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										正社員
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>

				<?php
				if (have_rows('youkou09')) :
				?>

					<?php
					while (have_rows('youkou09')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										園長
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										正社員
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>

				<?php
				if (have_rows('youkou02')) :
				?>

					<?php
					while (have_rows('youkou02')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										保育士（パート）
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										パート
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>
				<?php
				if (have_rows('youkou03')) :
				?>

					<?php
					while (have_rows('youkou03')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										保育補助（パート）
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										パート
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>
				<!--  -->
				<?php
				if (have_rows('youkou04')) :
				?>

					<?php
					while (have_rows('youkou04')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										調理師（パート）
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										パート
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>
				<!--  -->

				<!--  -->
				<?php
				if (have_rows('youkou06')) :
				?>

					<?php
					while (have_rows('youkou06')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										看護師（パート）
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										パート
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>
				<!--  -->

				<!--  -->
				<?php
				if (have_rows('youkou07')) :
				?>

					<?php
					while (have_rows('youkou07')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										児童指導員（パート）
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										パート
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>


				<?php
				else :
				endif;
				?>
				<!--  -->

				<!--  -->
				<?php
				if (have_rows('youkou08')) :
				?>

					<?php
					while (have_rows('youkou08')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										子育て支援員（パート）
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										パート
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>
				<?php
				else :
				endif;
				?>
				<!--  -->

				<!--  -->
				<?php
				if (have_rows('youkou11')) :
				?>

					<?php
					while (have_rows('youkou11')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										本社（営業事務）
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										正社員
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>
				<?php
				else :
				endif;
				?>
				<!--  -->

				<!--  -->
				<?php
				if (have_rows('youkou12')) :
				?>

					<?php
					while (have_rows('youkou12')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										本社（事業企画職）
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										正社員
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>
				<?php
				else :
				endif;
				?>
				<!--  -->

				<!--  -->
				<?php
				if (have_rows('youkou13')) :
				?>

					<?php
					while (have_rows('youkou13')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										本社（システム管理者）
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										正社員
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>
				<?php
				else :
				endif;
				?>
				<!--  -->
				  <!--  -->
				<?php
				if (have_rows('youkou14')) :
				?>

					<?php
					while (have_rows('youkou14')) : the_row();
					?>
						<?php
						$value = get_sub_field("bosyu");
						if ($value == 'on') :
						?>
							<div class="content">

								<dl>
									<dt>
										募集職種
									</dt>
									<dd>
										正社員｜調理師
									</dd>
								</dl>

								<dl>
									<dt>
										雇用形態
									</dt>
									<dd>
										正社員
									</dd>
								</dl>


								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("address");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.content -->
						<?php
						endif;
						?>
					<?php
					endwhile;
					?>
				<?php
				else :
				endif;
				?>
				<!--  -->

			</div>
			<!-- /.content-area -->
			<!-- /test -->

			<?php
			if (have_rows('youkou01s')) :
				$counter01 = 1;
			?>
				<div class="tab-area">
					<?php
					while (have_rows('youkou01')) : the_row();
					?>
						<?php if ($counter01 == 1) { ?>
							<div class="tab active">

								<?php
								$value = get_sub_field("koyoukeitai");
								if ($value == '正社員') {
								?>
									<?php echo get_sub_field('taisyo01'); ?>｜<?php echo get_sub_field('syokusyu'); ?>
								<?php
								} else {
								?>
									<?php echo get_sub_field('koyoukeitai'); ?>｜<?php echo get_sub_field('syokusyu'); ?>
								<?php
								}
								?>


							</div>
						<?php } else { ?>
							<div class="tab">
								<?php
								$value = get_sub_field("koyoukeitai");
								if ($value == '正社員') {
								?>
									<?php echo get_sub_field('taisyo01'); ?>｜<?php echo get_sub_field('syokusyu'); ?>
								<?php
								} else {
								?>
									<?php echo get_sub_field('koyoukeitai'); ?>｜<?php echo get_sub_field('syokusyu'); ?>
								<?php
								}
								?>
							</div>
						<?php } ?>
					<?php
						$counter01++;
					endwhile;
					?>
				</div>
				<!-- /.tab-area -->
			<?php
			else :
			endif;
			?>



			<?php
			if (have_rows('youkou01')) :
				$counter02 = 1;
			?>
				<div class="content-area" style="display: none;">
					<?php
					while (have_rows('youkou01')) : the_row();
					?>
						<?php if ($counter02 == 1) { ?>
							<div class="content show">
								<?php
								$value = get_sub_field("syokusyu");
								if ($value) :
								?>
									<dl>
										<dt>
											募集職種
										</dt>
										<dd>

											<?php
											$value = get_sub_field("koyoukeitai");
											if ($value == '正社員') {
											?>
												<?php echo get_sub_field('syokusyu'); ?>（<?php echo get_sub_field('taisyo01'); ?>）
											<?php
											} else {
											?>
												<?php echo get_sub_field('syokusyu'); ?>
											<?php
											}
											?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("koyoukeitai");
								if ($value) :
								?>
									<dl>
										<dt>
											雇用形態
										</dt>
										<dd>
											<?php echo get_sub_field('koyoukeitai'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_field("kinmuchi");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<?php
										$value = get_field("map");
										if ($value) {
										?>
											<dd>
												<a href="<?php echo get_field('map'); ?>" target="_blank">
													<?php echo get_sub_field('address'); ?>
												</a>
											</dd>
										<?php
										} else {
										?>
											<dd>
												<?php echo get_sub_field('address'); ?>
											</dd>
										<?php
										}
										?>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
						<?php } else { ?>
							<div class="content">
								<?php
								$value = get_sub_field("syokusyu");
								if ($value) :
								?>
									<dl>
										<dt>
											募集職種
										</dt>
										<dd>
											<?php
											$value = get_sub_field("koyoukeitai");
											if ($value == '正社員') {
											?>
												<?php echo get_sub_field('syokusyu'); ?>（<?php echo get_sub_field('taisyo01'); ?>）
											<?php
											} else {
											?>
												<?php echo get_sub_field('syokusyu'); ?>
											<?php
											}
											?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("koyoukeitai");
								if ($value) :
								?>
									<dl>
										<dt>
											雇用形態
										</dt>
										<dd>
											<?php echo get_sub_field('koyoukeitai'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("taisyo02");
								if ($value) :
								?>
									<dl>
										<dt>
											対象
										</dt>
										<dd>
											<?php echo get_sub_field('taisyo02'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kinmuchi");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務地
										</dt>
										<dd>
											<?php echo get_sub_field('kinmuchi'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("jikan");
								if ($value) :
								?>
									<dl>
										<dt>
											勤務時間
										</dt>
										<dd>
											<?php echo get_sub_field('jikan'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>


								<?php
								$value = get_sub_field("close");
								if ($value) :
								?>
									<dl>
										<dt>
											休日休暇
										</dt>
										<dd>
											<?php echo get_sub_field('close'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("kyuuyo");
								if ($value) :
								?>
									<dl>
										<dt>
											給与
										</dt>
										<dd>
											<?php echo get_sub_field('kyuuyo'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("fukuri");
								if ($value) :
								?>
									<dl>
										<dt>
											福利厚生
										</dt>
										<dd>
											<?php echo get_sub_field('fukuri'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								$value = get_sub_field("motomeru");
								if ($value) :
								?>
									<dl>
										<dt>
											求める人材
										</dt>
										<dd>
											<?php echo get_sub_field('motomeru'); ?>
										</dd>
									</dl>
								<?php
								endif;
								?>

								<?php
								if (have_rows('other')) :
								?>
									<?php
									while (have_rows('other')) : the_row();
									?>
										<dl>
											<dt>
												<?php echo get_sub_field('header'); ?>
											</dt>
											<dd>
												<?php echo get_sub_field('contents'); ?>
											</dd>
										</dl>
									<?php
									endwhile;
									?>

								<?php
								else :
								endif;
								?>

								<div class="link">
									<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
										応募する
									</a>
								</div>
								<!-- /.link -->
							</div>
						<?php } ?>

					<?php
						$counter02++;
					endwhile;
					?>
				</div>
				<!-- /.content-area -->
			<?php
			else :
			endif;
			?>
		</div>
		<!-- /.list -->
	</div>
	<!-- /#requirements -->

	<div id="flow">
		<div class="header">
			<h3>
				採用の流れ
			</h3>
		</div>
		<!-- /.header -->
		<div class="group">
			<div class="block">
				<div class="num">
					STEP01
				</div>
				<!-- /.num -->
				<div class="inner">
					<h4>
						応募
					</h4>
					<div class="desc">
						まずはエントリーフォームよりご応募ください。
					</div>
					<!-- /.desc -->
					<div class="link">
						<a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
							<span>

							</span>
							お問い合わせ
						</a>
					</div>
					<!-- /.link -->
				</div>
				<!-- /.inner -->
			</div>
			<!-- /.block -->
			<div class="block">
				<div class="num">
					STEP02
				</div>
				<!-- /.num -->
				<div class="inner">
					<h4>
						保育体験作文
					</h4>
					<div class="desc">
						選考に伴い、一日保育体験作文の提出をお願いします。
					</div>
					<!-- /.desc -->
					<h5>
						【準備物】
					</h5>
					<ul>
						<li>
							400字作文（形式）
						</li>
					</ul>
				</div>
				<!-- /.inner -->
			</div>
			<!-- /.block -->
			<div class="block">
				<div class="num">
					STEP03
				</div>
				<!-- /.num -->
				<div class="inner">
					<h4>
						面接（2回）
					</h4>
					<div class="desc">
						応募書類をご用意いただき面接を2度行います。
					</div>
					<!-- /.desc -->
					<h5>
						【準備物】
					</h5>
					<ul>
						<li>
							履歴書(写貼)
						</li>
						<li>
							卒業見込み証明書
						</li>
					</ul>
				</div>
				<!-- /.inner -->
			</div>
			<!-- /.block -->
			<div class="block">
				<div class="num">
					STEP04
				</div>
				<!-- /.num -->
				<div class="inner">
					<h4>
						適正検査
					</h4>
					<div class="desc">
						面接後、皆様に適正検査をお願いしております。<br>
						テストを経て、総合的・社内的な審査を行います。
					</div>
					<!-- /.desc -->
				</div>
				<!-- /.inner -->
			</div>
			<!-- /.block -->
			<div class="block">
				<div class="num">
					STEP05
				</div>
				<!-- /.num -->
				<div class="inner">
					<h4>
						採用通知
					</h4>
					<div class="desc">
						採用通知は、７日以内に担当者より選考結果のご連絡いたします。
					</div>
					<!-- /.desc -->
				</div>
				<!-- /.inner -->
			</div>
			<!-- /.block -->
		</div>
		<!-- /.group -->
	</div>
	<!-- /#flow -->

	<div id="kengakukai">
		<?php if (is_mobile()) { ?>
			<div class="image">

			</div>
			<!-- /.image -->
		<?php } else { ?>
			<div class="image">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/kengakukai01.jpg" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/kengakukai01.jpg 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/kengakukai01@2x.jpg 2x" alt="一日保育体験/見学会">
			</div>
			<!-- /.image -->
		<?php } ?>
		<div class="txt">
			<div class="inner">
				<h3>
					一日保育体験/見学会
				</h3>
				<?php if (is_mobile()) { ?>
					<div class="desc">
						はな保育では、保育学生、また保育士を目指している方に向けて一日保育体験や見学会を行っています。<br>
						実際のはな保育をより知ってみませんか？
					</div>
					<!-- /.desc -->
				<?php } else { ?>
					<div class="desc">
						はな保育では、保育学生、また保育士を目指している方に<br>
						向けて一日保育体験や見学会を行っています。<br>
						実際のはな保育をより知ってみませんか？
					</div>
					<!-- /.desc -->
				<?php } ?>
				<div class="link">
					<a href="<?php echo esc_url(home_url("/")); ?>newscate/recruit/">
						詳細はこちらから
					</a>
				</div>
				<!-- /.link -->
			</div>
			<!-- /.inner -->
		</div>
		<!-- /.txt -->
	</div>
	<!-- /#kengakukai -->

	<?php get_template_part('include', 'fnav'); ?>

	<?php get_footer('recruit'); ?>
	<script>
		$(function() {
			let tabs = $(".tab");
			$(".tab").on("click", function() {
				$(".active").removeClass("active");
				$(this).addClass("active");
				const index = tabs.index(this);
				$(".content").removeClass("show").eq(index).addClass("show");
			});
			$('.tab:first').addClass('active');
			$('.content:first').addClass('show');
		});

		$(function() {
			var num = '<?php echo $counter03; ?>';
			$('.tab-area').addClass('tab-count-<?php echo $counter03; ?>');
		});
	</script>