<?php include('/home/hanahoiku/www/parts/config.php'); ?>
<?php require_once('/home/hanahoiku/www/wordpress/wp-content/themes/hanahoiku/functions.php'); ?>
<?php
/**
 * @package WordPress
 * @subpackage hanahoiku
 * @since Twenty Fifteen 1.0
 */
get_header();
?>

<div class="fv">
	<?php if (pcmobile()) { ?>
		<div class="image animation animationtoblur">
			<img src="<?php echo $img_url; ?>school/fv02.jpg" srcset="<?php echo $img_url; ?>school/fv02.jpg 1x, <?php echo $img_url; ?>school/fv02@2x.jpg 2x" alt="園舎一覧">
		</div>
		<!-- /.image -->
	<?php } else { ?>
		<div class="image animation animationtoblur">
			<img src="<?php echo $img_url; ?>school/fv01.jpg" srcset="<?php echo $img_url; ?>school/fv01.jpg 1x, <?php echo $img_url; ?>school/fv01@2x.jpg 2x" alt="園舎一覧">
		</div>
		<!-- /.image -->
	<?php } ?>
	<h2>園舎一覧</h2>
</div>
<!-- /.fv -->

<div class="wrap">
	<?php get_sidebar('school') ?>
	<div class="main">

		<!-- list -->
		<div class="list">
			<?php
			$args = array(
				'exclude' => array(25, 34, 35), //除外したいタームのIDを指定。
			);

			$terms = get_terms('area', $args);
			?>
			<?php foreach ($terms as $term) : ?>
				<?php
				$query = new WP_Query(
					array(
						'post_status' => 'publish',
						'post_type' => 'school',

						'tax_query' => array(
							array(
								'taxonomy' => 'area',
								'field' => 'slug',
								'terms' => $term->slug, // タームごとにスラッグを配列に入れる。,
							)
						),

						'posts_per_page' => -1, // 3件の記事を表示。任意の値を入れる。
					)
				);
				?>
				<?php if ($query->have_posts()) : ?>

					<!-- タームを表示 -->
					<h3 id="areacate<?php echo $term->term_id; ?>" class=" animation animationtotop"><?php echo $term->name; ?></h3>

					<div class="group">
						<!-- タームに属する記事をループで表示 -->
						<?php while ($query->have_posts()) : $query->the_post(); ?>
							<div class="block item animation animationtotop">
								<a href="<?php the_permalink(); ?>">

								<?php
									$image = get_field('image03');
									$size = 'medium'; // (thumbnail, medium, large, full or custom size)
									$image_url1 = wp_get_attachment_image_url($image, $size);
									$image_url2 = get_template_directory_uri() . '/timthumb/timthumb.php?src=' . $image_url1 .'&amp;h=480' . '&amp;w=780';
									
									if ($image) {
										?>
										<img src="<?php echo $image_url2; ?>">
										<?php
									} else {
										?>
										<img src="https://placehold.jp/eeeeee/ffffff/660x400.png?text=No%20photo" alt="">
										<?php
									}
									?>

								</a>
								<div class="txt">
									<h4>
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h4>
									<?php
									if (have_rows('gaiyou')) :
									?>
										<div class="data">
											<div class="ninka">
												<?php if (get_field('ninka02')) {
												?>
													<span>認可保育園</span>
												<?php
												} ?>
											</div>
											<!-- /.ninka -->
											<div class="age">
												<?php
												while (have_rows('gaiyou')) : the_row();
												?>
													対象年齢 <?php the_sub_field('taisho'); ?>
												<?php
												endwhile;
												?>
											</div>
											<!-- /.age -->
										</div>
										<!-- /.data -->

									<?php
									else :
									endif;
									?>
								</div>
								<!-- /.txt -->
							</div><!-- /.block -->
						<?php endwhile; ?>
					</div><!-- /.group -->
				<?php endif; ?>

			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div><!-- /.list -->
		<!-- /list -->


	</div>
	<!-- /.main -->
</div>
<!-- /.wrap -->

<?php
get_footer(); ?>

<?php if (pcmobile()) { ?>
	<!-- <script>
		jQuery(function($) {
			$(".sidebar .group .list h5").on("click", function() {
				/*クリックでコンテンツを開閉*/
				$(this).next().slideToggle(200);
				/*矢印の向きを変更*/
				$(this).toggleClass("open", 200);
			});
		});
		jQuery(function($) {
			$(".sidebar .group h4").on("click", function() {
				/*クリックでコンテンツを開閉*/
				$(this).next().slideToggle(200);
				/*矢印の向きを変更*/
				$(this).toggleClass("open", 200);
			});
		});
	</script> -->
<?php } else { ?>
	<!-- <script>
		jQuery(function($) {
			$(".sidebar .group h6,.post-type-archive-school .sidebar .group h5,.tax-area .sidebar .group h5").on("click", function() {
				/*クリックでコンテンツを開閉*/
				$(this).next().slideToggle(200);
				/*矢印の向きを変更*/
				$(this).toggleClass("open", 200);
			});
		});
	</script> -->
<?php } ?>