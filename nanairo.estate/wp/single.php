<?php get_header(); ?>
	<main id="blog">
		<div class="topSection section">
			<div class="secContainer">
				<div class="secWrap01">
					<div class="pageSecTtlBox">
						<div class="pageSecTtl">
							<h1>なないろブログ</h1>
						</div>
					</div>
					<div class="categoryList">
						<ul>
							<?php $cat_info = get_categories('orderby=count&order=desc&show_count=1&title_li=');
								foreach ($cat_info as $category) { if($category->count != 0) : ?>
								<li><a href="<?php echo home_url() ?>/category/<?php echo $category->category_nicename; ?>/"><?php echo $category->cat_name; ?></a></li>
							<?php endif; };?>
						</ul>
					</div>
					<div class="blogDetail">
						<div class="titleHeader">
							<div class="infoBox">
								<span class="time"><?php the_time("Y.m.d") ?></span>
								<?php
									$category = get_the_category();
									$cat_name = $category[0]->cat_name;
									$cat_slug = $category[0]->category_nicename;
								?>
								<span class="cate"><?php echo $cat_name; ?></span>
							</div>
							<div class="title">
								<h2><?php the_title(); ?></h2>
							</div>
						</div>
						<div class="thumbnailBox"><?php the_post_thumbnail('full'); ?></div>
						<div class="postContents">
							<?php while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile; ?>
						</div>
					</div>
					<div class="btnBack"><a href="<?php echo home_url(); ?>/bloglist/">戻る</a></div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>