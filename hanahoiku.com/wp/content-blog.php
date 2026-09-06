<?php include('/home/hanahoiku/www/parts/config.php'); ?>
<?php

/**
 * @package WordPress
 * @subpackage hanahoiku
 * @since Twenty Fifteen 1.0
 */
?>

<?php if (is_single()) : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-header animation animationtotop">
			<div class="data">
				<div class="entry-date">
					<?php the_time('Y.n.j'); ?>
				</div>
				<!-- /.date -->
				<div class="name">
					<?php
					$categories = get_the_category();
					if ($categories) {
						echo '<ul>';
						foreach ($categories as $category) {
							echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a></li>';
						}
						echo '</ul>';
					}
					?>
				</div>
				<!-- /.name -->
			</div>
			<!-- /.data -->
			<?php
			the_title('<h2 class="entry-title">', '</h2>');
			?>
		</div><!-- .entry-header -->

		<div class="entry-content animation animationtotop">
			<?php
			the_content();
			?>
		</div><!-- .entry-content -->
		<?php echo do_shortcode('[wp_ulike]'); ?>
	</article><!-- #post-## -->

<?php else : ?>

	<div class="block animation animationtotop">
		<div class="image">
			<a href="<?php the_permalink(); ?>">
				<?php
				if (has_post_thumbnail()) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
					the_post_thumbnail('thumbnail');
				} else {
				?>
					<img src="<?php echo $img_url; ?>common/nophoto01.png" alt="写真">
				<?php
				}
				?>
				<div class="name">
					<?php
					$categories = get_the_category();
					if ($categories) {
						echo '<ul>';
						foreach ($categories as $category) {
							if ($category->name == 'ギャラリー') {
							} elseif ($category->name == 'カテゴリ未選択') {
							} else {
								echo '<li>' . $category->name . '</li>';
							}
						}
						echo '</ul>';
					}
					?>
				</div>
				<!-- /.name -->
				<?php
				$categories = get_the_category();
				if ($categories) {
					foreach ($categories as $category) {
						if ($category->name == 'ギャラリー') {
							echo '<div class="cate-gallery">' . $category->name . '</div>';
						} else {
						}
					}
				}
				?>
			</a>
		</div>
		<!-- /.image -->
		<div class="txt">
			<div class="data">
				<div class="date">
					<?php the_time('Y.n.j'); ?>
				</div>
				<!-- /.date -->
				<div class="cate">

				</div>
				<!-- /.cate -->
			</div>
			<!-- /.data -->
			<div class="title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</div>
			<!-- /.title -->
		</div>
		<!-- /.txt -->
		<?php echo do_shortcode('[wp_ulike]'); ?>
	</div>
	<!-- /.block -->

<?php endif; ?>