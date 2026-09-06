<?php include('/home/hanahoiku/www/parts/config.php'); ?>
<div class="sidebar">
	<!-- <div class="illust">
		<img src="<?php echo $img_url; ?>school/illust01.png" srcset="<?php echo $img_url; ?>school/illust01.png 1x, <?php echo $img_url; ?>school/illust01@2x.png 2x" alt="園舎一覧">
	</div> -->
	<!-- /.illust -->
	<div class="group">
		
		<?php if (pcmobile()) { ?>
			<h4>エリア別</h4>
			<div class="list">
				
			<?php } else { ?>

			<?php } ?>
			<?php
			$args = array(
				'exclude' => array(25, 34, 35), //除外したいタームのIDを指定。
			);

			$terms = get_terms('area', $args);
			?>
			<?php foreach ($terms as $term) : ?>
				<?php
				$query = new WP_Query(
					array(
						'post_status' => 'publish',
						'post_type' => 'school',

						'tax_query' => array(
							array(
								'taxonomy' => 'area',
								'field' => 'slug',
								'terms' => $term->slug, // タームごとにスラッグを配列に入れる。,
							)
						),

						'posts_per_page' => -1, // 3件の記事を表示。任意の値を入れる。
					)
				);
				?>
				<?php if ($query->have_posts()) : ?>

					<!-- タームを表示 -->
					<h5><?php echo $term->name; ?></h5>

					<ul class="areacate">
						<!-- タームに属する記事をループで表示 -->
						<?php while ($query->have_posts()) : $query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									・<?php the_title(); ?>
								</a>
							</li><!-- /.block -->
						<?php endwhile; ?>
					</ul><!-- /.group -->
				<?php endif; ?>

			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
			<?php if (pcmobile()) { ?>
			</div>
			<!-- /.list -->
		<?php } else { ?>

		<?php } ?>
	</div>
	<!-- /.group -->
</div>
<!-- /.sidebar -->