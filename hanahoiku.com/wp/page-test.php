<?php

/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage hanahoiku
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="fv" style="height: 200px;z-index: -1;"></div>
<!-- /.fv -->

<?php echo do_shortcode('[wp_ulike_counter]'); ?>
<?php echo do_shortcode('[wp_ulike]'); ?>

<div class="wrap">
	<div class="sidebar sidebarnew">
		<?php if (is_active_sidebar('sidebar')) { ///sidebarにはfunctions.phpで設定したidを入れる
		?>
			<div class="group">
				<h5>
					エリア別
				</h5>
				<div class="list">
					<div class="all">
						<a href="<?php echo esc_url(home_url("/")); ?>blog/">
							ALL
						</a>
					</div>
					<!-- /.all -->
					<?php dynamic_sidebar('sidebar'); ?>
				</div>
				<!-- /.list -->
			</div>
			<!-- /.group -->
		<?php } ?>
	</div>
	<!-- /.sidebar -->
</div>
<!-- /.wrap -->



<?php get_footer(); ?>

<style>
	.widgettitle {
		display: none;
	}
</style>

<script>
	jQuery(function($) {
		$(".sidebar .group h5").on("click", function() {
			/*クリックでコンテンツを開閉*/
			$(this).next().slideToggle(200);
			/*矢印の向きを変更*/
			$(this).toggleClass("open", 200);
		});
	});

	jQuery(function($) {
		$(".sidebar .group .list li > ul li.cat-item").on("click", function() {
			/*クリックでコンテンツを開閉*/
			$(this).children('.children').slideToggle(200);
			/*矢印の向きを変更*/
			$(this).toggleClass("open", 200);
		});
	});
</script>