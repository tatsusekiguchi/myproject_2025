<?php include('/home/hanahoiku/www/parts/config.php'); ?>
<?php
/**
 * @package WordPress
 * @subpackage hanahoiku
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="fv">
	<div class="image">
		<img src="<?php echo $img_url; ?>seeds/fv01.jpg" srcset="<?php echo $img_url; ?>seeds/fv01.jpg 1x, <?php echo $img_url; ?>seeds/fv01@2x.jpg 2x" alt="保育のたね">
	</div>
	<!-- /.image -->
	<h2>保育のたね</h2>
</div>
<!-- /.fv -->

<div class="wrap">
	<?php get_sidebar('shigoto') ?>
	<div class="main">
		<?php if (have_posts()) : ?>
		<?php
			// Start the loop.
			while (have_posts()) : the_post();

				/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
				get_template_part('content', 'shigoto');

			// End the loop.
			endwhile;
		else :
			get_template_part('content', 'none');

		endif;
		?>
	</div>
	<!-- /.main -->
</div>
<!-- /.wrap -->

<?php get_footer(); ?>
<script>
	jQuery(function($) {
		$(".sidebar .group h6").on("click", function() {
			/*クリックでコンテンツを開閉*/
			$(this).next().slideToggle(200);
			/*矢印の向きを変更*/
			$(this).toggleClass("open", 200);
		});
	});
</script>