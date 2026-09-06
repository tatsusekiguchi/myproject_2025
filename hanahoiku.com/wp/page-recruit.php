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
			<?php
			if (have_rows('fv02')) :
			?>

				<?php
				while (have_rows('fv02')) : the_row();
				?>
					<?php
					if (have_rows('images')) :
					?>
						<div class="images">
							<?php
							while (have_rows('images')) : the_row();
							?>
								<div class="image" style="background-image: url(<?php
																				$image = get_sub_field('image');
																				$size = 'full'; // (thumbnail, medium, large, full or custom size)
																				if ($image) {
																					echo wp_get_attachment_image_url($image, $size);
																				}
																				?>);"></div>
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
					<div class="catch">
						<?php
						$image = get_sub_field('catch');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if ($image) {
							echo wp_get_attachment_image($image, $size);
						}
						?>
					</div>
					<!-- /.catch -->
				<?php
				endwhile;
				?>
			<?php
			else :
			endif;
			?>
			<div id="fvsearch">
				<a href="<?php echo esc_url(home_url("/")); ?>recruit/search/">
					<span></span>募集している園舎を探す
				</a>
			</div>
			<!-- /#navsearch -->
			 
			<div id="copyright">
				Copyright &copy; HANAHOIKU All rights reserved.
			</div>
			<!-- /#copyright -->
		</div>
		<!-- /#fv -->
	<?php } else { ?>
		<div id="fv">
			<?php
			if (have_rows('fv01')) :
			?>

				<?php
				while (have_rows('fv01')) : the_row();
				?>
					<?php
					if (have_rows('images')) :
					?>
						<div class="images">
							<?php
							while (have_rows('images')) : the_row();
							?>
								<div class="image" style="background-image: url(<?php
																				$image = get_sub_field('image');
																				$size = 'full'; // (thumbnail, medium, large, full or custom size)
																				if ($image) {
																					echo wp_get_attachment_image_url($image, $size);
																				}
																				?>);"></div>
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
					<div class="catch">
						<?php
						$image = get_sub_field('catch');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if ($image) {
							echo wp_get_attachment_image($image, $size);
						}
						?>
					</div>
					<!-- /.catch -->
				<?php
				endwhile;
				?>


				<div id="search01">
					<h2>
						仕事を探す
					</h2>
					<div class="inner">
						<?php
						if (function_exists('feas_search_form')) {
							feas_search_form(2);
						}
						?>
					</div>
					<!-- /.inner -->
				</div>
				<!-- /#search01 -->
			<?php
			else :
			endif;
			?>
		</div>
		<!-- /#fv -->
	<?php } ?>

	<?php if (is_mobile()) { ?>
		<?php
		if (have_rows('about02')) :
		?>
			<div id="about">
				<?php
				while (have_rows('about02')) : the_row();
				?>

					<div class="inner">
						<div class="txt">
							<div class="header">
								<h3 class="ani anit">
									私たちについて
								</h3>
								<h4 class="ani anit">
									HANAHOIKU NO KOTO
								</h4>
							</div>
							<!-- /.header -->
							<h5 class="ani anit">
								<?php echo get_sub_field('header'); ?>
							</h5>
							<div class="desc ani anit">
								<?php echo get_sub_field('desc'); ?>
							</div>
							<!-- /.desc ani anit -->

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
					<div class="link ani anit">
						<a href="/company">
							READ MORE<span></span>
						</a>
					</div>
					<!-- /.link -->
				<?php
				endwhile;
				?>
			</div>
			<!-- /#about -->
		<?php
		else :
		endif;
		?>
	<?php } else { ?>
		<?php
		if (have_rows('about01')) :
		?>
			<div id="about">
				<?php
				while (have_rows('about01')) : the_row();
				?>

					<div class="inner">
						<div class="txt">
							<div class="header">
								<h3 class="ani anit">
									私たちについて
								</h3>
								<h4 class="ani anit">
									HANAHOIKU NO KOTO
								</h4>
							</div>
							<!-- /.header -->
							<h5 class="ani anit">
								<?php echo get_sub_field('header'); ?>
							</h5>
							<div class="desc ani anit">
								<?php echo get_sub_field('desc'); ?>
							</div>
							<!-- /.desc ani anit -->

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
					<div class="link ani anit">
						<a href="/company" target="_blank">
							READ MORE<span></span>
						</a>
					</div>
					<!-- /.link -->
				<?php
				endwhile;
				?>
			</div>
			<!-- /#about -->
		<?php
		else :
		endif;
		?>
	<?php } ?>

	<?php if (is_mobile()) { ?>
		<div id="setsumeikai">
			<div class="header">
				<h3 class="ani anit">
					今月のイベント
				</h3>
				<!-- /.ani anit -->
			</div>
			<!-- /.header -->
			<?php
			$args = array(
				'post_type' => 'news',
				'posts_per_page' => 3,
				'tax_query' => array(                     //(array) - タクソノミーパラメーターを指定する（バージョン3.1以降で有効）。
					'relation' => 'AND',                      //(string) - それぞれのタクソノミーを指定するのに'AND'か'OR'が使用できる。
					array(
						'taxonomy' => 'newscate',                //(string) - タクソノミー。
						'field' => 'slug',                    //(string) - IDかスラッグのどちらでタクソノミー項を選択するか
						'terms' => array('recruit'),    //(int/string/array) - タクソノミー項
						'include_children' => true,           //(bool) - 階層構造を持ったタクソノミーの場合に、子タクソノミー項を含めるかどうか。デフォルトはtrue
						'operator' => 'IN'                    //(string) - テスト用の演算子。'IN' 'NOT IN' 'AND'のいずれかが使用できる
					),
				),
			);
			$the_query = new WP_Query($args);
			if ($the_query->have_posts()) :
			?>


				<div class="group">
					<?php
					while ($the_query->have_posts()) : $the_query->the_post();
					?>
						<div class="block">
							<div class="data">
								<div class="date ani anit">
									<?php the_time('Y.n.j'); ?>
								</div>
								<!-- /.date -->
								<div class="title ani anit">
									<a href="<?php the_permalink(); ?>" target="_blank">
										<?php the_title(); ?>
									</a>
								</div>
								<!-- /.title -->
							</div>
							<!-- /.data -->
							<div class="link ani anit">
								<a href="<?php the_permalink(); ?>" target="_blank">
									READ MORE<span></span>
								</a>
							</div>
							<!-- /.link -->
						</div>
						<!-- /.block -->
					<?php
					endwhile;
					?>
				</div>
				<!-- /.group -->
				<div class="link ani anit">
					<a href="<?php echo esc_url(home_url("/")); ?>newscate/recruit/" target="_blank">
						一覧を見る<span></span>
					</a>
				</div>
				<!-- /.link -->
			<?php

			endif;
			wp_reset_postdata();
			?>
		</div>
		<!-- /#setsumeikai -->
	<?php } else { ?>
		<div id="setsumeikai">
			<div class="inner">

				<?php
				$args = array(
					'post_type' => 'news',
					'posts_per_page' => 3,
					'tax_query' => array(                     //(array) - タクソノミーパラメーターを指定する（バージョン3.1以降で有効）。
						'relation' => 'AND',                      //(string) - それぞれのタクソノミーを指定するのに'AND'か'OR'が使用できる。
						array(
							'taxonomy' => 'newscate',                //(string) - タクソノミー。
							'field' => 'slug',                    //(string) - IDかスラッグのどちらでタクソノミー項を選択するか
							'terms' => array('recruit'),    //(int/string/array) - タクソノミー項
							'include_children' => true,           //(bool) - 階層構造を持ったタクソノミーの場合に、子タクソノミー項を含めるかどうか。デフォルトはtrue
							'operator' => 'IN'                    //(string) - テスト用の演算子。'IN' 'NOT IN' 'AND'のいずれかが使用できる
						),
					),
				);
				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) :
				?>
					<div class="left">
						<div class="header">
							<h3 class="ani anit">
								今月のイベント
							</h3>
							<!-- /.ani anit -->
							<h4 class="ani anit">
								KONGETSU NO IBENTO
							</h4>
							<!-- /.ani anit -->
						</div>
						<!-- /.header -->
					</div>
					<!-- /.left -->


					<div class="group">
						<?php
						while ($the_query->have_posts()) : $the_query->the_post();
						?>
							<div class="block">
								<div class="data">
									<div class="date ani anit">
										<?php the_time('Y.n.j'); ?>
									</div>
									<!-- /.date -->
									<div class="title ani anit">
										<a href="<?php the_permalink(); ?>" target="_blank">
											<?php the_title(); ?>
										</a>
									</div>
									<!-- /.title -->
								</div>
								<!-- /.data -->
								<div class="link ani anit">
									<a href="<?php the_permalink(); ?>" target="_blank">
										READ MORE<span></span>
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.block -->
						<?php
						endwhile;
						?>
						<div class="link ani anit">
							<a href="<?php echo esc_url(home_url("/")); ?>newscate/recruit/" target="_blank">
								一覧を見る<span></span>
							</a>
						</div>
						<!-- /.link -->
					</div>
					<!-- /.group -->
				<?php

				endif;
				wp_reset_postdata();
				?>
			</div>
			<!-- /.inner -->
		</div>
		<!-- /#setsumeikai -->
	<?php } ?>

	<div id="kankyo">
		<div class="inner">
			<div class="header">
				<h3 class="ani anit">
					働く環境
				</h3>
				<!-- /.ani anit -->
			</div>
			<!-- /.header -->
			<?php if (is_mobile()) { ?>
				<?php
				if (have_rows('kankyo02')) :
				?>
					<div class="group">
						<?php
						while (have_rows('kankyo02')) : the_row();
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
								<!-- /.image ani anit -->
								<div class="link ani anit">
									<a href="<?php echo get_sub_field('link'); ?>">
										<?php echo get_sub_field('txt'); ?>
									</a>
								</div>
								<!-- /.link -->
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
				if (have_rows('kankyo01')) :
				?>
					<div class="group">
						<?php
						while (have_rows('kankyo01')) : the_row();
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
								<!-- /.image ani anit -->
								<div class="link ani anit">
									<a href="<?php echo get_sub_field('link'); ?>">
										<?php echo get_sub_field('txt'); ?>
									</a>
								</div>
								<!-- /.link -->
							</div>
							<!-- /.block -->
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
		</div>
		<!-- /.inner -->
		<div class="footer ani anit">
			HANAHOIKU
		</div>
		<!-- /.footer -->
	</div>
	<!-- /#kankyo -->

	<div id="kensyu">
		<div class="header">
			<div class="inner">
				<h3 class="ani anit">
					研修/キャリアパス
				</h3>
				<!-- /.ani anit -->
				<h4 class="ani anit">
					KENSYU TO KYARIAPASU
				</h4>
				<!-- /.ani anit -->
			</div>
			<!-- /.inner -->
		</div>
		<!-- /.header -->
		<?php
		if (have_rows('kensyu01')) :
		?>
			<div class="group">
				<?php
				while (have_rows('kensyu01')) : the_row();
				?>
					<div class="block ani anit">
						<a href="<?php echo get_sub_field('link'); ?>">
							<?php
							$image = get_sub_field('image');
							$size = 'full'; // (thumbnail, medium, large, full or custom size)
							if ($image) {
								echo wp_get_attachment_image($image, $size);
							}
							?>
						</a>
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
	<!-- /#kensyu -->

	<div id="search">
		<div class="header">
			<h3>
				募集している園舎を探す
			</h3>
		</div>
		<!-- /.header -->
		<div class="group">
			<?php
			if (function_exists('feas_search_form')) {
				feas_search_form();
			}
			?>
		</div>
		<!-- /.group -->
	</div>
	<!-- /#search -->

	<div id="slider">
		<?php
		if (have_rows('slider01')) :
		?>
			<div class="images">
				<?php
				while (have_rows('slider01')) : the_row();
				?>
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
	<!-- /#slider -->

	<div id="voice">
		<div class="header">
			<h3 class="ani anit">
				はな保育で働く先輩の声
			</h3>
			<!-- /.ani anit -->
			<h4 class="ani anit">
				HATARAKU SENNPAI NO KOE
			</h4>
			<!-- /.ani anit -->
		</div>
		<!-- /.header -->
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
						<h5>
							<?php echo $term->name; ?>
						</h5>
						<!-- タームに属する記事をループで表示 -->
						<div class="group02">
							<div class="inner">
								<?php while ($query->have_posts()) : $query->the_post(); ?>
									<div class="block">
										<div class="image">
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
											<div class="catch">
												<?php echo get_field('catch'); ?>
											</div>
											<!-- /.catch -->
											<div class="data">
												<div class="year">
													<?php echo get_field('year'); ?>
												</div>
												<!-- /.year -->
												<div class="name">
													<?php the_title(); ?>
												</div>
												<!-- /.name -->
											</div>
											<!-- /.data -->
											<div class="link">
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
	</div>
	<!-- /#voice -->

	<div id="innai">
		<div class="block">
			<?php if(is_mobile()){ ?>
				<div class="image">
				<?php 
				$image = get_field('image02');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			</div>
			<!-- /.image -->
			<?php } else { ?>
				<div class="image">
				<?php 
				$image = get_field('image01');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			</div>
			<!-- /.image -->
			<?php } ?>
			<div class="txt">
				<h3>
				<?php echo get_field('txt01'); ?>
				</h3>
				<div class="desc">
				<?php echo get_field('txt02'); ?>
				</div>
				<!-- /.desc -->
			</div>
			<!-- /.txt -->
		</div>
		<!-- /.block -->
	</div>
	<!-- /#innai -->

	<?php if(is_mobile()){ ?>
		<div id="footerkengakukai">
        <a href="https://hanahoiku.com/recruit/job/newgraduate-recruitment/">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/btn-shinsotsu02.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/btn-shinsotsu02.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/btn-shinsotsu02@2x.png 2x" alt="園見学はこちら">
        </a>
    </div>
    <!-- /#footerkengakukai -->
	<?php } else { ?>
		<div id="footerkengakukai">
        <a href="https://hanahoiku.com/recruit/job/newgraduate-recruitment/">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/btn-shinsotsu01.png?1" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/btn-shinsotsu01.png?1 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/btn-shinsotsu01@2x.png?1 2x" alt="園見学はこちら">
        </a>
    </div>
    <!-- /#footerkengakukai -->
	<?php } ?>
	<?php get_footer('recruit'); ?>

	<?php if (is_mobile()) { ?>
		<script>
			jQuery(function($) {
				$("#search form dl dt").on("click", function() {
					/*クリックでコンテンツを開閉*/
					$(this).next().slideToggle(200);
					/*矢印の向きを変更*/
					$(this).toggleClass("open", 200);
				});
			});
		</script>
		<script>
			$(document).ready(function() {
				$('form').attr('action', function(i, val) {
					return val + '#result';
				});
			});
		</script>
	<?php } else { ?>
		<script>
			$(document).ready(function() {
				$('form').attr('action', function(i, val) {
					return val + '#result';
				});
			});
		</script>
	<?php } ?>
