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

<div class="wrap single-blog-post">
	<?php get_sidebar('shigoto'); ?>
	<div class="main">
		<?php
		// Start the loop.
		while (have_posts()) : the_post();

			get_template_part('content', 'shigoto');
		?>

		<?php
		// End the loop.
		endwhile;
		?>
		<div class="back">
			<a href="<?php echo $home_url; ?>shigoto/">
				一覧に戻る
			</a>
		</div>
		<!-- /.back -->
	</div>
	<!-- /.main -->
</div>
<!-- /.wrap -->

<?php get_footer(); ?>