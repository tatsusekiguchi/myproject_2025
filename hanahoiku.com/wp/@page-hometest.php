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

get_header(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.bgswitcher.js"></script>
<?php if ( is_mobile() ) : ?>

<?php if( have_rows('mainimg-sp01') ): ?>

	<script>
	jQuery(function($) {
	$('.bg-slider').bgSwitcher({
	images: [<?php
	if( have_rows('mainimg-sp01') ):
	while ( have_rows('mainimg-sp01') ) : the_row();
	?>
	<?php
	$image = get_sub_field('mainimg-data');
	$size = 'large'; // (thumbnail, medium, large, full or custom size)
	if( $image ) {
	?>
	'<?php
	echo wp_get_attachment_image_url( $image, $size );
	?>',<?php
	}
	?>
	<?php
	endwhile;
	?>
	<?php
	else :
	?>
	<?php
	endif;
	?>], // 切り替える背景画像を指定
	});
	});
	</script>

<?php else: ?>

	<script>
	jQuery(function($) {
	$('.bg-slider').bgSwitcher({
	images: [<?php
	if( have_rows('mainimg-pc01') ):
	while ( have_rows('mainimg-pc01') ) : the_row();
	?>
	<?php
	$image = get_sub_field('mainimg-data');
	$size = 'large'; // (thumbnail, medium, large, full or custom size)
	if( $image ) {
	?>
	'<?php
	echo wp_get_attachment_image_url( $image, $size );
	?>',<?php
	}
	?>
	<?php
	endwhile;
	?>
	<?php
	else :
	?>
	<?php
	endif;
	?>], // 切り替える背景画像を指定
	});
	});
	</script>

<?php endif; ?>
	<!-- /mobile -->
<?php else: ?>

	<?php if( have_rows('mainimg-pc01') ): ?>
	<script>
	jQuery(function($) {
	$('.bg-slider').bgSwitcher({
	images: [<?php
	if( have_rows('mainimg-pc01') ):
	while ( have_rows('mainimg-pc01') ) : the_row();
	?>
	<?php
	$image = get_sub_field('mainimg-data');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
	if( $image ) {
	?>
	'<?php
	echo wp_get_attachment_image_url( $image, $size );
	?>',<?php
	}
	?>
	<?php
	endwhile;
	?>
	<?php
	else :
	?>
	<?php
	endif;
	?>], // 切り替える背景画像を指定
	});
	});
	</script>
	<?php else: ?>
		<script>
		jQuery(function($) {
		$('.bg-slider').bgSwitcher({
		images: [<?php
		if( have_rows('mainimg-pc') ):
		while ( have_rows('mainimg-pc') ) : the_row();
		?>
		<?php
		$image = get_sub_field('mainimg-data');
		$size = 'full'; // (thumbnail, medium, large, full or custom size)
		if( $image ) {
		?>
		'<?php
		echo wp_get_attachment_image_url( $image, $size );
		?>',<?php
		}
		?>
		<?php
		endwhile;
		?>
		<?php
		else :
		?>
		<?php
		endif;
		?>], // 切り替える背景画像を指定
		});
		});
		</script>
	<?php endif; ?>

<?php endif; ?>

<div class="bg-slider">
	<!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/index_mainimg_01.svg" alt="いっぱい遊んでいっぱい学ぼう"> -->
</div>
<div class="index_recruit">
	<div class="d-sm-none">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>recruit/">
			<?php
			$image = get_field('banner-recruit-sp');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $image ) {
					echo wp_get_attachment_image( $image, $size );
			}
			?>
		</a>
		</a>
	</div>
	<div class="d-none d-sm-block">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 offset-sm-2">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>recruit/">
						<?php
						$image = get_field('banner-recruit-pc');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
						    echo wp_get_attachment_image( $image, $size );
						}
						?>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="index_recruit">
	<div class="d-sm-none">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>shigoto/">
			<?php
			$image = get_field('banner-shigoto-sp');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $image ) {
					echo wp_get_attachment_image( $image, $size );
			}
			?>
		</a>
		</a>
	</div>
	<div class="d-none d-sm-block">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 offset-sm-2">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>shigoto/">
						<?php
						$image = get_field('banner-shigoto-pc');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
						    echo wp_get_attachment_image( $image, $size );
						}
						?>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="index_news">
	<h2 class="d-sm-none"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/index_news_01.jpg" alt="お知らせ"></h2>
	<h2 class="d-none d-sm-block"><span>お知らせ</span></h2>
	<?php
	$args = array(
		'post_type' => 'news',
		'posts_per_page' => 4
			);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
			?>
			<div class="container">
				<div class="row">



			<?php
		while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
			<div class="col-12 col-sm-6">
			<div class="list fade-up">
				<a href="<?php the_permalink(); ?>" class="hvr-underline-from-center">
				<div class="row">
						<div class="col-4 col-sm-2">
							<p class="image">

							<?php
							if ( has_post_thumbnail() ) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
								the_post_thumbnail('thumbnail');
							} else {
								?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nophoto.png" alt="ニュース">
								<?php
							}
							?>
							</p>
						</div>
						<div class="col-8 col-sm-10">
							<p class="date"><?php echo the_time('Y.n.j'); ?></p>
							<h3 class="title"><?php the_title(); ?></h3>
						</div>
				</div>
				</a>
			</div>
			</div>
			<?php
		endwhile;
			?>
			</div>
			</div>
			<?php
		endif;
		// 投稿データをリセット
		wp_reset_postdata();

	 ?>
	 <div class="container">
	   <div class="row">
	     <div class="col-12">
	       <p class="more_01"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/more_01.svg" alt="もっと見る"></a></p>
	     </div>
	   </div>
	 </div>
</div>
<!-- / news -->

<div class="index_school">
	<h2 class="d-sm-none"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/index_school_01.jpg" alt="園舎紹介"></h2>
	<h2 class="d-none d-sm-block"><span>園舎紹介</span></h2>
	<div class="list fade-up">
		<?php
		$args = array(
			'post_type' => 'school',
			'posts_per_page' => -1,
			'order' => 'ASC'
				);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) :
				?>
				<div class="container">
					<div class="row">

				<?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$slug_name = $post->post_name;
				?>

							<div class="col-6 col-sm-2">
								<div class="listdata">
								<p class="image">
									<a href="<?php the_permalink(); ?>">
									<?php

										$image = get_field('image');
										$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

										if( $image ) {

											echo wp_get_attachment_image( $image, $size );

										} else {
										?>
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nophoto.png" alt="はな保育">
										<?php
										}
										?>
								</a></p>
								<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php get_template_part( 'include-school' ); ?>
								</div>
							</div>

				<?php
			endwhile;
				?></div>
				</div>
				<?php
			endif;
			// 投稿データをリセット
			wp_reset_postdata();

		 ?>
	</div>
</div>
<!-- / 園舎紹介 -->

<div class="index_annai d-block d-sm-none">
	<h2 class="d-sm-none"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/index_annai_01.jpg" alt="入園のご案内"></h2>
	<h2 class="d-none d-sm-block"><span>入園のご案内</span></h2>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="more_01"><a href="<?php echo esc_url( home_url( '/' ) ); ?>guide/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/more_01.svg" alt="もっと見る"></a></p>
			</div>
		</div>
	</div>
</div>
<!-- / 入園のご案内 -->

<?php get_footer(); ?>
