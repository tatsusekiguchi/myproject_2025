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
				<ul class="newscate">
					<?php
					$terms = get_the_terms($post->ID, 'newscate');
					if ($terms) {
						foreach ($terms as $term) {
							$term_link = get_term_link($term);
							echo '<li><a href="' . esc_url($term_link) . '">' . $term->name . '</a></li>';
						}
					}
					?>
				</ul>
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

	</article><!-- #post-## -->

<?php else : ?>

	<?php if (is_mobile()) { ?>
		<div class="block animation animationtotop">
			<div class="data">
				<ul class="newscate">
					<?php
					$terms = get_the_terms($post->ID, 'newscate');
					if ($terms) {
						foreach ($terms as $term) {
							$term_link = get_term_link($term);
							echo '<li><a href="' . esc_url($term_link) . '">' . $term->name . '</a></li>';
						}
					}
					?>
				</ul>
				<div class="date">
					<?php the_time('Y.n.j'); ?>
				</div>
				<!-- /.date -->
			</div>
			<!-- /.data -->
			<div class="title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</div>
			<!-- /.title -->
		</div>
		<!-- /.block -->
	<?php } else { ?>
		<div class="block animation animationtotop">
			<ul class="newscate">
				<?php
				$terms = get_the_terms($post->ID, 'newscate');
				if ($terms) {
					foreach ($terms as $term) {
						$term_link = get_term_link($term);
						echo '<li><a href="' . esc_url($term_link) . '">' . $term->name . '</a></li>';
					}
				}
				?>
			</ul>
			<div class="data">
				<a href="<?php the_permalink(); ?>">
					<div class="date">
						<?php the_time('Y.n.j'); ?>
					</div>
					<!-- /.date -->
					<div class="title">
						<?php the_title(); ?>
					</div>
					<!-- /.title -->
				</a>
			</div>
			<!-- /.data -->
		</div>
		<!-- /.block -->
	<?php } ?>

<?php endif; ?>