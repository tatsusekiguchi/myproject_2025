<?php

/**
 * @package WordPress
 * @subpackage hanahoiku
 * @since Twenty Fifteen 1.0
 */
?>

<?php if (is_single()) : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-header">
			<?php
			the_title('<h1 class="entry-title">', '</h1>');
			?>
		</div><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_content();
			?>
		</div><!-- .entry-content -->

	</article><!-- #post-## -->

<?php else : ?>

	<div class="block">
		<div class="image">
			<a href="<?php the_permalink(); ?>">
			<?php 
if ( has_post_thumbnail() ) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
	the_post_thumbnail('thumbnail');
} 
?>
				<div class="name">
					<?php
					$categories = get_the_category();
					if ($categories) {
						echo '<ul>';
						foreach ($categories as $category) {
							echo '<li>' . $category->name . '</li>';
						}
						echo '</ul>';
					}
					?>
				</div>
				<!-- /.name -->
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
	</div>
	<!-- /.block -->

<?php endif; ?>