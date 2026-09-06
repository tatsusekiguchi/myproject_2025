<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>すくすく日記</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-7 offset-sm-1">
			<div class="breadcrumb">
				<?php mytheme_breadcrumb(); ?>
			</div>
		<?php if ( have_posts() ) : ?>

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', 'blog' );

			// End the loop.
			endwhile;

		?>
		<!--ページネーション-->
		<?php if (function_exists('responsive_pagination')) {
		responsive_pagination($additional_loop->max_num_pages);
		} ?>
		<?php
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</div>
		<div class="col-sm-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
