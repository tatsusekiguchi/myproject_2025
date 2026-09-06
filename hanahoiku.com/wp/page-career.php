
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

	<?php if (is_mobile()) { ?>
		<div id="fv">
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
			<div class="header">
				<h3>
					研修/キャリアパス
				</h3>
				<h4>
					KENSYU TO KYARIAPASU
				</h4>
			</div>
			<!-- /.header -->
			<!-- <h2 class="catch">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/career01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/career01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/career01@2x.png 2x" alt="研修/キャリアパス">
		</h2> -->
			<!-- /.catch -->
		</div>
		<!-- /#fv -->
	<?php } else { ?>
		<div id="fv">
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
			<div class="header">
				<h3>
					研修/キャリアパス
				</h3>
				<h4>
					KENSYU TO KYARIAPASU
				</h4>
			</div>
			<!-- /.header -->
			<!-- <h2 class="catch">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/career01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/career01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/career01@2x.png 2x" alt="研修/キャリアパス">
		</h2> -->
			<!-- /.catch -->
		</div>
		<!-- /#fv -->
	<?php } ?>
	<div class="wrap">
		<div id="mnav">
			<ul>
				<li class="ani anit">
					<a href="#kensyu">
						学べる研修
					</a>
				</li>
				<li class="ani anit">
					<a href="#careerheader">
						キャリアパス
					</a>
				</li>
			</ul>
		</div>
		<!-- /#mnav -->

		<div id="kensyu">
			<div class="header">
				<h3 class="ani anit">
					学べる研修
				</h3>
				<h4 class="ani anit">
					MANABERU KENSYU
				</h4>
			</div>
			<!-- /.header -->
			<div class="desc">
				<?php echo get_field('kensyu01'); ?>
			</div>
			<!-- /.desc -->
			<?php if (is_mobile()) { ?>
				<?php
				if (have_rows('kensyu02')) :
				?>
					<div class="group">
						<?php
						while (have_rows('kensyu02')) : the_row();
						?>
							<div class="block">
								<div class="month ani anit">
									<?php echo get_sub_field('month'); ?>
								</div>
								<!-- /.month -->
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
								<?php if(is_mobile()){ ?>
									<?php
								if (have_rows('icons02')) :
								?>
									<div class="icons" style="display: none;">
										<h6 class="ani anit">
											［ 研修内容 ］
										</h6>
										<ul>
											<?php
											while (have_rows('icons02')) : the_row();
											?>
												<li class="ani anit">
													<?php
													$image = get_sub_field('icon');
													$size = 'full'; // (thumbnail, medium, large, full or custom size)
													if ($image) {
														echo wp_get_attachment_image($image, $size);
													}
													?>
												</li>
											<?php
											endwhile;
											?>
										</ul>
									</div>
									<!-- /.icons -->
								<?php
								else :
								endif;
								?>
								<?php } else { ?>
									<?php
								if (have_rows('icons')) :
								?>
									<div class="icons" style="display: none;">
										<h6 class="ani anit">
											［ 研修内容 ］
										</h6>
										<ul>
											<?php
											while (have_rows('icons')) : the_row();
											?>
												<li class="ani anit">
													<?php
													$image = get_sub_field('icon');
													$size = 'full'; // (thumbnail, medium, large, full or custom size)
													if ($image) {
														echo wp_get_attachment_image($image, $size);
													}
													?>
												</li>
											<?php
											endwhile;
											?>
										</ul>
									</div>
									<!-- /.icons -->
								<?php
								else :
								endif;
								?>
								<?php } ?>
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
			<?php } else { ?>
				<?php
				if (have_rows('kensyu02')) :
				?>
					<div class="group">
						<?php
						while (have_rows('kensyu02')) : the_row();
						?>
							<div class="block">
								<div class="inner">
									<div class="txt">
										<div class="month ani anit">
											<?php echo get_sub_field('month'); ?>
										</div>
										<!-- /.month -->
										<h5 class="ani anit">
											<?php echo get_sub_field('header'); ?>
										</h5>
										<div class="desc ani anit">
											<?php echo get_sub_field('desc'); ?>
										</div>
										<!-- /.desc -->
									</div>
									<!-- /.txt -->
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
								</div>
								<!-- /.inner -->
								<?php
								if (have_rows('icons')) :
								?>
									<dl class="icons">
										<dt class="ani anit" style="display: none;">
											［ 研修内容 ］
										</dt>
										<?php
										while (have_rows('icons')) : the_row();
										?>
											<dd class="ani anit">
												<?php
												$image = get_sub_field('icon');
												$size = 'full'; // (thumbnail, medium, large, full or custom size)
												if ($image) {
													echo wp_get_attachment_image($image, $size);
												}
												?>
											</dd>
										<?php
										endwhile;
										?>
									</dl>
									<!-- /.icons -->
								<?php
								else :
								endif;
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
		<!-- /#kensyu -->

		<?php if(is_mobile()){ ?>
			<div id="manual" style="background-image:url(<?php
														$image = get_field('manualimg02');
														$size = 'full'; // (thumbnail, medium, large, full or custom size)
														if ($image) {
															echo wp_get_attachment_image_url($image, $size);
														}
														?>);">
			<div class="header">
				<h3 class="ani anit">
					マニュアルの整備
				</h3>
				<h4 class="ani anit">
					MANYUARU NO SETSUBI
				</h4>
			</div>
			<!-- /.header -->
			<?php
			if (have_rows('manualicons')) :
			?>
				<div class="icons">
					<?php
					while (have_rows('manualicons')) : the_row();
					?>
						<div class="icon ani anit">
							<?php
							$image = get_sub_field('image');
							$size = 'full'; // (thumbnail, medium, large, full or custom size)
							if ($image) {
								echo wp_get_attachment_image($image, $size);
							}
							?>
						</div>
						<!-- /.icon -->
					<?php
					endwhile;
					?>
				</div>
				<!-- /.icons -->
			<?php
			else :
			endif;
			?>
			<div class="desc ani anit">
				<?php echo get_field('manualdesc'); ?>
			</div>
			<!-- /.desc -->
		</div>
		<!-- /#manual -->
		<?php } else { ?>
			<div id="manual" style="background-image:url(<?php
														$image = get_field('manualimg01');
														$size = 'full'; // (thumbnail, medium, large, full or custom size)
														if ($image) {
															echo wp_get_attachment_image_url($image, $size);
														}
														?>);">
			<div class="header">
				<h3 class="ani anit">
					マニュアルの整備
				</h3>
				<h4 class="ani anit">
					MANYUARU NO SETSUBI
				</h4>
			</div>
			<!-- /.header -->
			<?php
			if (have_rows('manualicons')) :
			?>
				<div class="icons">
					<?php
					while (have_rows('manualicons')) : the_row();
					?>
						<div class="icon ani anit">
							<?php
							$image = get_sub_field('image');
							$size = 'full'; // (thumbnail, medium, large, full or custom size)
							if ($image) {
								echo wp_get_attachment_image($image, $size);
							}
							?>
						</div>
						<!-- /.icon -->
					<?php
					endwhile;
					?>
				</div>
				<!-- /.icons -->
			<?php
			else :
			endif;
			?>
			<div class="desc ani anit">
				<?php echo get_field('manualdesc'); ?>
			</div>
			<!-- /.desc -->
			
		</div>
		<!-- /#manual -->
		<?php } ?>

		<div id="career">
			<div class="hgroup">
				<div id="careerheader" class="header">
					<h3 class="ani anit">
						キャリアパス
					</h3>
					<h4 class="ani anit">
						KYARIAPASU
					</h4>
				</div>
				<!-- /.header -->
				<div class="desc ani anit">
					<?php echo get_field('careerdesc'); ?>
				</div>
				<!-- /.desc -->
			</div>
			<!-- /.hgroup -->
			<?php
			if (have_rows('career01')) :
				$counter01 = 1;
			?>
				<div class="group">
					<?php
					while (have_rows('career01')) : the_row();
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
								<div class="step ani anit">
									STEP0<?php echo $counter01; ?>
								</div>
								<!-- /.step -->
								<div class="header ani anit">
									<?php echo get_sub_field('header'); ?>
								</div>
								<!-- /.header -->
								<div class="desc ani anit">
									<?php echo get_sub_field('desc'); ?>
								</div>
								<!-- /.desc -->
							</div>
							<!-- /.txt -->
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
		</div>
		<!-- /#career -->

		<?php get_template_part('include','fnav'); ?>
		
	</div>
	<!-- /.wrap -->

	<?php get_footer('recruit'); ?>
