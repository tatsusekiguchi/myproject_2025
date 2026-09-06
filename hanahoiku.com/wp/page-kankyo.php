
	<?php

	/**
	 * The template for displaying pages
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages and that
	 * other "pages" on your WordPress site will use a different template.
	 *
	 * @package WordPress
	 * @subpackage hanahoiku
	 * @since Twenty Fifteen 1.0
	 */

	get_header('recruit'); ?>

	<div id="fv">
		<?php if(is_mobile()){ ?>
			<div class="image">
			<?php
			$image = get_field('fv02');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if ($image) {
				echo wp_get_attachment_image($image, $size);
			}
			?>
		</div>
		<!-- /.image -->
		<?php } else { ?>
			<div class="image">
			<?php
			$image = get_field('fv01');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if ($image) {
				echo wp_get_attachment_image($image, $size);
			}
			?>
		</div>
		<!-- /.image -->
		<?php } ?>
		<div class="header">
			<h3>
				働く環境
			</h3>
			<h4>
				HATARAKU KANKYO
			</h4>
		</div>
		<!-- /.header -->
		<!-- <h2 class="catch">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/kankyo01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/kankyo01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/kankyo01@2x.png 2x" alt="働く環境">
		</h2> -->
		<!-- /.catch -->
	</div>
	<!-- /#fv -->
	<div class="wrap">
		<div id="mnav">
			<ul>
				<li class="ani anit">
					<a href="#about">
						はな保育について知る
					</a>
				</li>
				<li class="ani anit">
					<a href="#pointheader">
						働きやすいポイント
					</a>
				</li>
				<li class="ani anit">
					<a href="#mukiaiheader">
						子どもへの向き合い方
					</a>
				</li>
				<li class="ani anit">
					<a href="#oneday">
						はな保育の一日
					</a>
				</li>
				<li class="ani anit">
					<a href="#faq">
						よくある質問
					</a>
				</li>
			</ul>
		</div>
		<!-- /#mnav -->

		<div id="about">
			<div class="header">
				<h3 class="ani anit">
					はな保育について知る
				</h3>
				<h4 class="ani anit">
					HATARAKU KANKYO
				</h4>
			</div>
			<!-- /.header -->
			<?php if (is_mobile()) { ?>
				<?php
				if (have_rows('shiru02')) :
					$counter01 = 1;
				?>
					<div class="group">
						<?php
						while (have_rows('shiru02')) : the_row();
						?>
							<div class="block block<?php echo $counter01;?> ani anit">
								<h5>
									<?php echo get_sub_field('title'); ?>
								</h5>
								<?php
								$image = get_sub_field('image');
								$size = 'full'; // (thumbnail, medium, large, full or custom size)
								if ($image) {
								?>
									<div class="image">
										<?php
										echo wp_get_attachment_image($image, $size);
										?>
									</div>
									<!-- /.image -->
								<?php
								}
								?>
								<div class="num">
									<?php echo get_sub_field('num'); ?><span><?php echo get_sub_field('unit'); ?></span>
								</div>
								<!-- /.num -->
								<div class="desc">
									<?php echo get_sub_field('desc'); ?>
								</div>
								<!-- /.desc -->
							</div>
							<!-- /.block -->
						<?php
						$counter01++;
						endwhile;
						?>
					</div>
					<!-- /.group -->
				<?php
				else :
				endif;
				?>
			<?php } else { ?>
				<?php
				if (have_rows('shiru01')) :
				?>
					<div class="group">
						<?php
						while (have_rows('shiru01')) : the_row();
						?>
							<div class="block ani anit">
								<?php
								$image = get_sub_field('image');
								$size = 'full'; // (thumbnail, medium, large, full or custom size)
								if ($image) {
									echo wp_get_attachment_image($image, $size);
								}
								?>
							</div>
							<!-- /.block -->
						<?php
						endwhile;
						?>
					</div>
					<!-- /.group -->
				<?php
				else :
				endif;
				?>
			<?php } ?>
			<div class="footer ani anit">
				HANAHOIKU
			</div>
			<!-- /.footer -->
		</div>
		<!-- /#about -->

		<div id="point">
			<div class="mainimg ani anit">
				<div class="image ani">
					<?php
					$image = get_field('pointimg01');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if ($image) {
						echo wp_get_attachment_image($image, $size);
					}
					?>
				</div>
				<!-- /.image -->
			</div>
			<!-- /.mainimg -->

			<div id="pointheader" class="header">
				<h3 class="ani anit">
					働きやすい<?php
							$counterpoint = count(get_field('point01'));
							echo $counterpoint;
							?>つのポイント
				</h3>
				<h4 class="ani anit">
					HATARAKIYASUI MITTU NO POINNTO
				</h4>
			</div>
			<!-- /.header -->
			<?php
			if (have_rows('point01')) :
				$counter = 1;
			?>
				<div class="group">
					<?php
					while (have_rows('point01')) : the_row();
					?>
						<div class="block">
							<div class="image ani anit">
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
								<div class="num ani anit">
									0<?php echo $counter; ?>
								</div>
								<!-- /.num -->
								<h5 class="ani anit">
									<?php echo get_sub_field('header'); ?>
								</h5>
								<div class="desc ani anit">
									<?php echo get_sub_field('desc'); ?>
								</div>
								<!-- /.desc -->
							</div>
							<!-- /.txt -->
						</div>
						<!-- /.block -->
					<?php
						$counter++;
					endwhile;
					?>
				</div>
				<!-- /.group -->
			<?php
			else :
			endif;
			?>
		</div>
		<!-- /#point -->

		<div id="mukiai">
			<div class="mainimg ani anit">
				<div class="image">
					<?php
					$image = get_field('mukiaiimg01');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if ($image) {
						echo wp_get_attachment_image($image, $size);
					}
					?>
				</div>
				<!-- /.image -->
				<h2>
					HANAHOIKU
				</h2>
			</div>
			<!-- /.mainimg -->
			<div id="mukiaiheader" class="header">
				<h3 class="ani anit">
					子どもへの向き合い方
				</h3>
				<h4 class="ani anit">
					KODOMO HE NO MUKIAIKATA
				</h4>
			</div>
			<!-- /.header -->
			<?php
			if (have_rows('mukiai01')) :
			?>
				<div class="group">
					<?php
					while (have_rows('mukiai01')) : the_row();
					?>
						<div class="block">
							<div class="image ani anit">
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
								<h5 class="ani anit">
									<?php echo get_sub_field('header'); ?>
								</h5>
								<div class="desc ani anit">
									<?php echo get_sub_field('desc'); ?>
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
				<!-- /.group -->
			<?php
			else :
			endif;
			?>
		</div>
		<!-- /#mukiai -->

		<?php if (is_mobile()) { ?>
			<div id="oneday">
				<div class="header">
					<h3 class="ani anit">
						はな保育の一日
					</h3>
					<h4 class="ani anit">
						HANAHOIKU NO ICHINICHI
					</h4>
				</div>
				<!-- /.header -->
				<?php
				if (have_rows('ichinichi02')) :
				?>
					<div class="group">
						<?php
						while (have_rows('ichinichi02')) : the_row();
						?>
							<div class="block">
								<div class="header ani anit">
									<span class="time ani anit">
										<?php echo get_sub_field('time'); ?>
									</span>
									<!-- /.time --><?php echo get_sub_field('header'); ?>
								</div>
								<!-- /.header -->
								<?php
								$image = get_sub_field('image');
								$size = 'full'; // (thumbnail, medium, large, full or custom size)
								if ($image) {
								?>
									<div class="image">
										<?php
										echo wp_get_attachment_image($image, $size);
										?>
									</div>
									<!-- /.image -->
								<?php
								}
								?>
								<div class="desc ani anit">
									<?php echo get_sub_field('desc'); ?>
								</div>
								<!-- /.desc -->
							</div>
							<!-- /.block -->

						<?php
						endwhile;
						?>
					</div>
					<!-- /.group -->
				<?php
				else :
				endif;
				?>
			</div>
			<!-- /#oneday -->

		<?php } else { ?>
			<div id="oneday">
				<div class="header">
					<h3 class="ani anit">
						はな保育の一日
					</h3>
					<h4 class="ani anit">
						HANAHOIKU NO ICHINICHI
					</h4>
				</div>
				<!-- /.header -->
				<?php
				if (have_rows('ichinichi01')) :
				?>
					<div class="group">
						<?php
						while (have_rows('ichinichi01')) : the_row();
						?>
							<?php
							if (have_rows('images')) :
							?>
								<div class="images">
									<?php
									while (have_rows('images')) : the_row();
									?>
										<div class="image ani anit">
											<?php
											$image = get_sub_field('image');
											$size = 'full'; // (thumbnail, medium, large, full or custom size)
											if ($image) {
												echo wp_get_attachment_image($image, $size);
											}
											?>
										</div>
										<!-- /.image -->
									<?php
									endwhile;
									?>
								</div>
								<!-- /.images -->
							<?php
							else :
							endif;
							?>
							<?php
							if (have_rows('txt')) :
							?>
								<div class="txt">
									<?php
									while (have_rows('txt')) : the_row();
									?>
										<div class="block">
											<div class="time ani anit">
												<?php echo get_sub_field('time'); ?>
											</div>
											<!-- /.time -->
											<div class="right">
												<div class="header ani anit">
													<?php echo get_sub_field('header'); ?>
												</div>
												<!-- /.header -->
												<div class="desc ani anit">
													<?php echo get_sub_field('desc'); ?>
												</div>
												<!-- /.desc -->
											</div>
											<!-- /.right -->
										</div>
										<!-- /.block -->
									<?php
									endwhile;
									?>
								</div>
								<!-- /.txt -->
							<?php
							else :
							endif;
							?>
						<?php
						endwhile;
						?>
					</div>
					<!-- /.group -->
				<?php
				else :
				endif;
				?>
			</div>
			<!-- /#oneday -->

		<?php } ?>

		<div id="faq">
			<div class="header">
				<h3 class="ani anit">
					よくある質問
				</h3>
			</div>
			<!-- /.header -->
			<?php
			if (have_rows('faq')) :
			?>
				<div class="group">
					<?php
					while (have_rows('faq')) : the_row();
					?>
						<div class="block ani anit">
							<div class="question">
								<span>Q. </span><?php echo get_sub_field('question'); ?>
							</div>
							<!-- /.question -->
							<div class="answer">
								<?php echo get_sub_field('answer'); ?>
							</div>
							<!-- /.answer -->
						</div>
						<!-- /.block -->
					<?php
					endwhile;
					?>
				</div>
				<!-- /.group -->
			<?php
			else :
			endif;
			?>
		</div>
		<!-- /#faq -->

		<?php get_template_part('include','fnav'); ?>

	</div>
	<!-- /.wrap -->

	<?php get_footer('recruit'); ?>
	<?php if (is_mobile()) { ?>
		<script>
			jQuery(function($) {
				$("#about .group .block3 .num").on("click", function() {
					$(this).next().slideToggle(200);
					$(this).toggleClass("open", 200);
					$('#about .group .block4 .num').next().slideToggle(200);
					$('#about .group .block4').toggleClass("open", 200);
				});
				$("#about .group .block4 .num").on("click", function() {
					$(this).next().slideToggle(200);
					$(this).toggleClass("open", 200);
					$('#about .group .block3 .num').next().slideToggle(200);
					$('#about .group .block3').toggleClass("open", 200);
				});
				$("#about .group .block5 .num").on("click", function() {
					$(this).next().slideToggle(200);
					$(this).toggleClass("open", 200);
					$('#about .group .block6 .num').next().slideToggle(200);
					$('#about .group .block6').toggleClass("open", 200);
				});
				$("#about .group .block6 .num").on("click", function() {
					$(this).next().slideToggle(200);
					$(this).toggleClass("open", 200);
					$('#about .group .block5 .num').next().slideToggle(200);
					$('#about .group .block5').toggleClass("open", 200);
				});
				$("#about .group .block7 .num").on("click", function() {
					$(this).next().slideToggle(200);
					$(this).toggleClass("open", 200);
					$('#about .group .block8 .num').next().slideToggle(200);
					$('#about .group .block8').toggleClass("open", 200);
				});
				$("#about .group .block8 .num").on("click", function() {
					$(this).next().slideToggle(200);
					$(this).toggleClass("open", 200);
					$('#about .group .block7 .num').next().slideToggle(200);
					$('#about .group .block7').toggleClass("open", 200);
				});
			});
		</script>
	<?php } else { ?>

	<?php } ?>
