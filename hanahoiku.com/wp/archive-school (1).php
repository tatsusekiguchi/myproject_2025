<?php include('/home/xs311819/hanahoiku.com/public_html/parts/config.php'); ?>
<?php require_once('/home/xs311819/hanahoiku.com/public_html/wp/wp-content/themes/hanahoiku/functions.php'); ?>
<?php
/**
 * @package WordPress
 * @subpackage hanahoiku
 * @since Twenty Fifteen 1.0
 */
get_header();
?>

<div class="fv">
	<div class="image">
		<img src="<?php echo $img_url; ?>school/fv01.jpg" srcset="<?php echo $img_url; ?>school/fv01.jpg 1x, <?php echo $img_url; ?>school/fv01@2x.jpg 2x" alt="園舎一覧">
	</div>
	<!-- /.image -->
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
				'exclude' => array(25,34,35), //除外したいタームのIDを指定。
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
					<h3 id="areacate<?php echo $term->term_id; ?>"><?php echo $term->name; ?></h3>

					<div class="group">
						<!-- タームに属する記事をループで表示 -->
						<?php while ($query->have_posts()) : $query->the_post(); ?>
							<div class="block">
								<a href="<?php the_permalink(); ?>">
									<?php 
									$image = get_field('image01');
									$size = 'large'; // (thumbnail, medium, large, full or custom size)
									if( $image ) {
										echo wp_get_attachment_image( $image, $size );
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
										<div class="age">
											<?php
											while (have_rows('gaiyou')) : the_row();
											?>
												対象年齢 <?php the_sub_field('taisho'); ?>
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
