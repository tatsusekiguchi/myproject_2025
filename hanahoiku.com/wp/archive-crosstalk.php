
	<?php
	/**
	 * @package WordPress
	 * @subpackage hanahoiku
	 * @since Twenty Fifteen 1.0
	 */
	get_header('recruit');
	?>

	<?php if (is_mobile()) { ?>
		<div id="fv">
			<div class="image">
				<?php
				$image = get_field('crossfv02', 'option');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if ($image) {
					echo wp_get_attachment_image($image, $size);
				}
				?>
			</div>
			<!-- /.image -->
			<div class="header">
				<h2>
					クロストーク
				</h2>
			</div>
			<!-- /.header -->
			<div class="desc">
				<?php echo get_field('crossdesc', 'option'); ?>
			</div>
			<!-- /.desc -->
		</div>
		<!-- /#fv -->
	<?php } else { ?>
		<div id="fv">
			<div class="image">
				<?php
				$image = get_field('crossfv01', 'option');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if ($image) {
					echo wp_get_attachment_image($image, $size);
				}
				?>
			</div>
			<!-- /.image -->

			<div class="header">
				<h2>
					クロストーク
				</h2>
			</div>
			<!-- /.header -->
			<div class="desc">
				<?php echo get_field('voicedesc', 'option'); ?>
			</div>
			<!-- /.desc -->

		</div>
		<!-- /#fv -->
	<?php } ?>

	<div class="wrap">

		<div class="list">
			<?php if (have_posts()) : ?>
				<div class="group">
					<?php
					// Start the Loop.
					while (have_posts()) : the_post();
					?>
						<div class="block">
							<div class="image">
								<a href="<?php the_permalink(); ?>">
									<?php
									$image = get_field('image01');
									$size = 'full'; // (thumbnail, medium, large, full or custom size)
									if ($image) {
										echo wp_get_attachment_image($image, $size);
									}
									?>
								</a>
							</div>
							<!-- /.image -->
							<div class="txt">
								<div class="header">
									TOPIC
								</div>
								<!-- /.header -->
								<h3>
									<?php the_title(); ?>
								</h3>
								<div class="data">
									<?php
									if (have_rows('staff')) :
									?>
										<div class="staffs">
											<?php
											while (have_rows('staff')) : the_row();
											?>
												<div class="name">
													<?php echo get_sub_field('name'); ?><span> × </span>
												</div>
												<!-- /.name -->
											<?php
											endwhile;
											?>
										</div>
										<!-- /.staffs -->
									<?php
									else :
									endif;
									?>
									<div class="date">
										<?php the_time('Y-n-j') ?>
									</div>
									<!-- /.date -->
								</div>
								<!-- /.data -->
							</div>
							<!-- /.txt -->
						</div>
						<!-- /.block -->
					<?php
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
		</div><!-- /.list -->

		<?php get_template_part('include','fnav'); ?>

	</div>
	<!-- /.wrap -->
	<?php
	get_footer('recruit'); ?>
