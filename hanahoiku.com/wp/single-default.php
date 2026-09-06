<?php // include('/home/hanahoiku/www/parts/config.php'); ?>
<?php // require_once('/home/hanahoiku/www/wordpress/wp-content/themes/hanahoiku/functions.php'); ?>
<?php
/**
 * @package WordPress
 * @subpackage hanahoiku
 * @since Twenty Fifteen 1.0
 */
get_header('wordpress');
?>

<div class="wrap single-blog-post">
	<?php if (is_mobile()) { ?>

	<?php } else { ?>
		<?php get_sidebar('blog'); ?>
	<?php } ?>
	<div class="main">
		<?php
		// Start the loop.
		while (have_posts()) : the_post();

			get_template_part('content', 'blog');
		?>

			
		<?php
		// End the loop.
		endwhile;
		?>
		<div class="back">
			<a href="/blog/">
				一覧に戻る
			</a>
		</div>
		<!-- /.back -->
	</div>
	<!-- /.main -->
	<?php if (is_mobile()) { ?>
		<?php get_sidebar('blog'); ?>
	<?php } else { ?>

	<?php } ?>
</div>
<!-- /.wrap -->
<?php get_footer('wordpress'); ?>