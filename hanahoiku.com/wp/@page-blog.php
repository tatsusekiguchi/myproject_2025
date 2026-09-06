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
<?php get_template_part( 'include', 'mainimg' ); ?>
	<div class="container">
	  <div class="row">
	    <div class="col-sm-12">
	      <h2>すくすく日記</h2>
	    </div>
	  </div>
	</div>

	<div class="index_school">
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
										<a href="<?php echo esc_url( home_url( "/" ) ); ?>category/<?php echo $slug_name ?>">
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
									<h3 class="title"><a href="<?php echo esc_url( home_url( "/" ) ); ?>category/<?php echo $slug_name ?>"><?php the_title(); ?></a></h3>
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



<?php get_footer(); ?>
