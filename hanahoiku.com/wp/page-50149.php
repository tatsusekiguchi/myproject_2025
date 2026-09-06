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
the_title( '<h2 class="entry-title">採用情報 ', '</h2>' );
		?>
	</header><!-- .entry-header -->
<?php get_template_part( 'include', 'recruitheader' ); ?>
		<!-- list -->
		<?php
		$args = array(
			'post_type' => 'job',
			'posts_per_page' => -1,
			'post_status' => 'publish',
			'meta_key' => 'syokusyu-01',
    	'meta_value' => '保育士 / パート',
		);
		$the_query = new WP_Query( $args );
		// ループ
		if ( $the_query->have_posts() ) {
		?>
		<div class="list">
			<div class="row">
				<?php
				while ( $the_query->have_posts() ) : $the_query->the_post();
				?>

				<div class="col-sm-4">
					<div class="recruit-list-01">
						<a href="<?php the_permalink(); ?>" class="hvr-grow"><?php the_title(); ?></a>
					</div>
				</div>

				<?php

				endwhile;
				?>
			</div>
		</div>
		<?php
	} else {
		?>
<div class="text-center">
	現在この職種は募集しておりません。
</div>
		<?php
	}
		// 投稿データをリセット
		wp_reset_postdata();
		?>
		<!-- /list -->

<?php get_template_part( 'include', 'recruitfooter' ); ?>

</article><!-- #post-## -->

<?php

		// End the loop.
		endwhile;
		?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
