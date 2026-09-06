
	<?php
	/**
	 * @package WordPress
	 * @subpackage hanahoiku
	 * @since Twenty Fifteen 1.0
	 */
	get_header('recruit');
	?>

	<?php if (is_mobile()) { ?>
		<div id="fv">
			<div class="image">
				<?php
				$image = get_field('voicefv02', 'option');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if ($image) {
					echo wp_get_attachment_image($image, $size);
				}
				?>
			</div>
			<!-- /.image -->
			<div class="header">
				<h2>
					はな保育で働く先輩の声
				</h2>
			</div>
			<!-- /.header -->
			<div class="desc">
				<?php echo get_field('voicedesc', 'option'); ?>
			</div>
			<!-- /.desc -->
		</div>
		<!-- /#fv -->
	<?php } else { ?>
		<div id="fv">
			<div class="image">
				<?php
				$image = get_field('voicefv01', 'option');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if ($image) {
					echo wp_get_attachment_image($image, $size);
				}
				?>
			</div>
			<!-- /.image -->

			<div class="header">
				<h2>
					はな保育で働く先輩の声
				</h2>
			</div>
			<!-- /.header -->
			<div class="desc">
				<?php echo get_field('voicedesc', 'option'); ?>
			</div>
			<!-- /.desc -->

		</div>
		<!-- /#fv -->
	<?php } ?>

	<div class="wrap">

		<div class="list">
			<?php
			// タクソノミーnews_catのタームを取得
			$terms = get_terms('voicecate', $args);
			?>
			<?php foreach ($terms as $term) : ?>
				<?php
				$query = new WP_Query(
					array(
						'post_status' => 'publish',
						'post_type' => 'voice',

						'tax_query' => array(
							array(
								'taxonomy' => 'voicecate',
								'field' => 'slug',
								'terms' => $term->slug, // タームごとにスラッグを配列に入れる。
							)
						),

						'posts_per_page' => -1, // 3件の記事を表示。任意の値を入れる。
					)
				);
				?>
				<?php if ($query->have_posts()) : ?>

					<!-- タームを表示 -->


					<div class="group01 ani anit">
						<h5 class="ani anit">
							<?php echo $term->name; ?>
						</h5>
						<!-- タームに属する記事をループで表示 -->
						<div class="group02">
							<div class="inner">
								<?php while ($query->have_posts()) : $query->the_post(); ?>
									<div class="block">
										<div class="image ani anit">
											<a href="<?php the_permalink(); ?>">
												<?php
												$image = get_field('image01');
												$size = 'full'; // (thumbnail, medium, large, full or custom size)
												if ($image) {
													echo wp_get_attachment_image($image, $size);
												}
												?>
											</a>
										</div>
										<!-- /.image -->
										<div class="txt">
											<div class="catch ani anit">
												<?php echo get_field('catch'); ?>
											</div>
											<!-- /.catch -->
											<div class="data ani anit">
												<div class="year">
													<?php echo get_field('year'); ?>
												</div>
												<!-- /.year -->
												<div class="name">
													<?php echo get_field('en'); ?>
												</div>
												<!-- /.name -->
											</div>
											<!-- /.data -->
											<div class="link ani anit">
												<a href="<?php the_permalink(); ?>">
													READ MORE
												</a>
											</div>
											<!-- /.link -->
										</div>
										<!-- /.txt -->
									</div><!-- /.block -->
								<?php endwhile; ?>
							</div>
							<!-- /.inner -->
						</div><!-- /.group02 -->
					</div><!-- /.group01 -->
				<?php endif; ?>

			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div><!-- /.list -->

		<?php get_template_part('include','fnav'); ?>

	</div>
	<!-- /.wrap -->
	<?php
	get_footer('recruit'); ?>
