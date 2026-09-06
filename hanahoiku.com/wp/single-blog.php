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

<div class="wrap">
	<?php get_sidebar('blog'); ?>
	<div class="main">
		<?php
		// Start the loop.
		while (have_posts()) : the_post();

			get_template_part('content', 'blog');
		?>
			<div class="bnav">
				<div class="row">
					<div class="col-sm-6">
						<p><?php previous_post_link('%link', '<i class="fa fa-chevron-circle-left"></i> %title', true, '1'); ?></p>
					</div>
					<div class="col-sm-6">
						<p class="text-right"><?php next_post_link('%link', '%title <i class="fa fa-chevron-circle-right"></i>', true, '1'); ?></p>
					</div>
				</div>
			</div>
		<?php
		// End the loop.
		endwhile;
		?>
	</div>
	<!-- /.main -->
</div>
<!-- /.wrap -->

<?php get_footer(); ?>
