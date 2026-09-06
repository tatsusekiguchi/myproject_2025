<?php
/**
 * @package WordPress
 * @subpackage hanahoiku
 * @since Twenty Fifteen 1.0
 */
get_header('recruit');
?>

<div class="wrap single-news-post">
	<?php get_sidebar('news'); ?>
	<div class="main">
		<?php
		// Start the loop.
		while (have_posts()) : the_post();

			get_template_part('content', 'news');
		?>

		<?php
		// End the loop.
		endwhile;
		?>
		<div class="back">
			<a href="<?php echo $home_url; ?>news/">
				一覧に戻る
			</a>
		</div>
		<!-- /.back -->
	</div>
	<!-- /.main -->
</div>
<!-- /.wrap -->

<?php get_footer('recruit'); ?>