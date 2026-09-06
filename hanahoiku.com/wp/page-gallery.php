<?php include('/home/hanahoiku/www/parts/config.php'); ?>
<?php require_once('/home/hanahoiku/www/wordpress/wp-content/themes/hanahoiku/functions.php'); ?>
<?php
/**
 * @package WordPress
 * @subpackage hanahoiku
 * @since Twenty Fifteen 1.0
 */
get_header();
wp_head();
?>

<div class="fv">
	<?php if (pcmobile()) { ?>
		<div class="image">
			<img src="<?php echo $img_url; ?>blog/fv02.jpg" srcset="<?php echo $img_url; ?>blog/fv02.jpg 1x, <?php echo $img_url; ?>blog/fv02@2x.jpg 2x" alt="すくすく日記">
		</div>
		<!-- /.image -->
		<h2>すくすく日記</h2>
	<?php } else { ?>
		<div class="image">
			<img src="<?php echo $img_url; ?>blog/fv01.jpg" srcset="<?php echo $img_url; ?>blog/fv01.jpg 1x, <?php echo $img_url; ?>blog/fv01@2x.jpg 2x" alt="すくすく日記">
		</div>
		<!-- /.image -->
		<h2>すくすく日記</h2>
	<?php } ?>

</div>
<!-- /.fv -->

<div class="wrap">
	<?php if (pcmobile()) { ?>

		<div class="main">
			<?php
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$the_query = new WP_Query(array(
				'post_status' => 'publish',
				'post_type' => 'post',
				'posts_per_page' => 15,
				'paged' => $paged,
				'orderby' => 'date',
				'order' => 'DESC',
				'category__in' => array(109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135),
			));
			if ($the_query->have_posts()) : ?>
				<div class="group">
					<?php
					while ($the_query->have_posts()) : $the_query->the_post();
						get_template_part('content', 'blog');
					endwhile;
					?>


				<?php

			endif;
				?>
				</div>
				<!-- /.group -->
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
	<?php } else { ?>

	<?php } ?>
	<?php get_sidebar('blog') ?>
	<?php if (pcmobile()) { ?>

	<?php } else { ?>
		<div class="main">
			<?php
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$the_query = new WP_Query(array(
				'post_status' => 'publish',
				'post_type' => 'post',
				'posts_per_page' => 15,
				'paged' => $paged,
				'orderby' => 'date',
				'order' => 'DESC',
				'category__in' => array(109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135),
			));
			if ($the_query->have_posts()) : ?>
				<div class="group">
					<?php
					while ($the_query->have_posts()) : $the_query->the_post();
						get_template_part('content', 'blog');
					endwhile;
					?>


				<?php

			endif;
				?>
				</div>
				<!-- /.group -->
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
	<?php } ?>
</div>
<!-- /.wrap -->
<?php wp_footer(); ?>
<?php
get_footer(); ?>