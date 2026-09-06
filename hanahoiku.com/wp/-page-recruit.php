<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="mainimg">
	<?php

	$image = get_field('mainimg');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)

	if( $image ) {

		echo wp_get_attachment_image( $image, $size );

	}

	?>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-10 offset-sm-1">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
?>
<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
the_title( '<h2 class="entry-title">', '</h2>' );
		?>
	</header><!-- .entry-header -->

		<!-- list -->
		<?php
		$args = array(
			'post_type' => 'job',
			'posts_per_page' => -1,
			'meta_key' => 'test',
			'meta_value' => '1'
		);
		$the_query = new WP_Query( $args );
		// ループ
		if ( $the_query->have_posts() ) :
		?>
		<div class="list" style="display:none;">
			<div class="row">
				<?php
				while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
				<div class="col-sm-6">
					<div class="data">
						<div class="head">
							<div class="row">
								<div class="col-sm-3">
									<div class="image">
										<?php
										$image = get_field('image-01');
										$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
										if( $image ) {
										    echo wp_get_attachment_image( $image, $size );
										}
										?>
									</div>
								</div>
								<div class="col-sm-9">
									<?php
									$value = get_field( "title" );
									if( $value ) :
										?>
										<h3 class="subtitle"><?php
										echo $value;
										?></h3>
										<?php
									endif;
									?>
									<!-- /title -->
								</div>
							</div>
						</div>

						<div class="body">
							<dl class="">
								<dt>勤務地</dt>
								<?php
								$value = get_field( "kinmuchi" );
								if( $value ) :
									// $value = wp_trim_words( $value, 18, '…' );
									?>
									<dd><?php
									echo $value;
									?></dd>
									<?php
								endif;
								?>
								</dl>
								<!-- /kinmuchi -->
								<dl class="">
									<dt>給与</dt>
									<?php
									$value = get_field( "kyuuyo" );
									if( $value ) :
										$value = wp_trim_words( $value, 30, '…' );
										?>
										<dd><?php
										echo $value;
										?></dd>
										<?php
									endif;
									?>
									</dl>
									<!-- /kyuuyo -->
									<dl class="">
										<dt>勤務時間・休日</dt>
										<?php
										$value = get_field( "kinmujikan" );
										if( $value ) :
											$value = wp_trim_words( $value, 30, '…' );
											?>
											<dd><?php
											echo $value;
											?></dd>
											<?php
										endif;
										?>
										</dl>
										<!-- /kinmujikan -->
										<dl class="">
											<dt>仕事内容</dt>
											<?php
											$value = get_field( "comment" );
											if( $value ) :
												$value = wp_trim_words( $value, 30, '…' );
												?>
												<dd><?php
												echo $value;
												?></dd>
												<?php
											endif;
											?>
											</dl>
											<!-- /comment -->

						</div>
						<div class="foot">
							<div class="">
								<a href="<?php the_permalink(); ?>">詳細を見る</a>
							</div>
						</div>

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
		<!-- /list -->

	<div class="entry-content">
		<?php
		$args = array(
			'post_type' => 'job',
			'posts_per_page' => -1,
		);
		$the_query = new WP_Query( $args );
		// ループ
		if ( $the_query->have_posts() ) :
		?>
		<div class="recruit-now">
			<h3>現在募集中の保育園</h3>
			<ul>
			<?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
			<?php if( get_field('test') ) { ?>
<?php
	} else {
		?>
		<li><a href="<?php the_permalink();?>"><?php echo the_time('Y.n.j');?>　<?php the_title(); ?> <?php the_field('title'); ?></a></li>
		<?php
?>


			<?php } ?>
			<?php
			endwhile;
			?>
			</ul>
		</div>
		<?php
		endif;
		// 投稿データをリセット
		wp_reset_postdata();
		?>
		<div class="recruit-movie-01">
			<div class="row">
				<div class="col-xs-6 col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tWYXn2tYfVI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QIDb5xworHg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<?php
			/* translators: %s: Name of current post */
			the_content();

			// wp_link_pages( array(
			// 	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
			// 	'after'       => '</div>',
			// 	'link_before' => '<span>',
			// 	'link_after'  => '</span>',
			// 	'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
			// 	'separator'   => '<span class="screen-reader-text">, </span>',
			// ) );
		?>
	</div><!-- .entry-content -->
	<div class="recruit-pdf-01">
		<a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/recruit-01.pdf" target="_blank"><i class="fas fa-file-pdf"></i> はな保育リクルートガイド【PDFファイル】</a>
	</div>

</article><!-- #post-## -->

<?php

		// End the loop.
		endwhile;
		?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
