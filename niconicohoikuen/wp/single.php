<?php get_header(); ?>
	<main id="news">
		<div class="blogDetailSection">
			<div class="secWrap">
				<div class="blogDetailContainer">
					<div class="cate">
						<?php
						$category = get_the_category();
						if (!empty($category)) {
							echo '<p>' . esc_html($category[0]->name) . '</p>';
						}
						?>
					</div>
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="postContents">
						<?php the_content(); ?>
					</div>
					<div class="btmPanel">
						<div class="prev">
							<?php previous_post_link('%link', '＜BACK'); ?>
						</div>
						<div class="btnAll poppins">
							<a href="<?php echo home_url(); ?>/newslist">一覧へ</a>
						</div>
						<div class="next">
							<?php next_post_link('%link', 'NEXT＞'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
