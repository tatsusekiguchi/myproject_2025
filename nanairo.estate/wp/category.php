<?php get_header(); ?>
	<!-- ▽メイン▽-->
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
					<div class="blogList">
						<?php if(have_posts()): while(have_posts()):the_post(); ?>
						<div class="blogBox">
							<a href="<?php the_permalink() ?>">
								<div class="photo"><?php the_post_thumbnail('full'); ?></div>
								<div class="info">
									<span class="time"><?php the_time("Y.m.d") ?></span>
									<?php
										$category = get_the_category();
										$cat_name = $category[0]->cat_name;
										$cat_slug = $category[0]->category_nicename;
									?>
									<span class="cate"><?php echo $cat_name; ?></span>
								</div>
								<div class="ttl">
									<p><?php the_title(); ?></p>
								</div>
							</a>
						</div>
						<?php endwhile; endif; ?>
					</div>
					<div class="list__pagination">
						<?php
						//Pagenation
						if (function_exists("responsive_pagination")) {
							$GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
							responsive_pagination($the_query->max_num_pages);
							wp_reset_postdata();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>