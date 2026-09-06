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

<div class="fv">
<?php if(is_mobile()){ ?>
		<div class="image">
		<img src="https://hanahoiku.com/images/blog/fv02.jpg" srcset="https://hanahoiku.com/images/blog/fv02.jpg 1x, https://hanahoiku.com/images/blog/fv02@2x.jpg 2x" alt="すくすく日記">
	</div>
	<!-- /.image -->
	<?php } else { ?>
		<div class="image">
		<img src="https://hanahoiku.com/images/blog/fv01.jpg" srcset="https://hanahoiku.com/images/blog/fv01.jpg 1x, https://hanahoiku.com/images/blog/fv01@2x.jpg 2x" alt="すくすく日記">
	</div>
	<!-- /.image -->
	<?php } ?>
	<h2>すくすく日記</h2>
</div>
<!-- /.fv -->

<div class="wrap">
	<?php get_sidebar('blog') ?>
	<div class="main">

		<?php if (have_posts()) : ?>
			<div class="group">
				<?php
				// Start the Loop.
				while (have_posts()) : the_post();

					/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
					get_template_part('content', 'blog');

				// End the loop.
				endwhile;

				?>
			</div>
			<!-- /.group -->
			<!--ページネーション-->
			<?php if (function_exists('responsive_pagination')) {
				responsive_pagination($additional_loop->max_num_pages);
			} ?>
		<?php
		// If no content, include the "No posts found" template.
		else :
			get_template_part('content', 'none');

		endif;
		?>

		<div class="pagenation01">
			<?php
			if ($the_query->max_num_pages > 1) {
				echo paginate_links(array(
					'base' => get_pagenum_link(1) . '%_%',
					'format' => 'page/%#%/',
					'current' => max(1, $paged),
					'mid_size' => 1,
					'total' => $the_query->max_num_pages
				));
			}
			?>
		</div>
		<!-- /.pagenation01 -->
		<?php
		wp_reset_postdata();
		?>
	</div>
	<!-- /.main -->
</div>
<!-- /.wrap -->

<?php
get_footer('wordpress'); ?>



