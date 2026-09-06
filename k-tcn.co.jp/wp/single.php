<?php get_header(); ?>

<!-- ▽メイン▽-->
<main id="blogdetail" class="blogMain">
	<section>
		<h2><em>News &amp; Cace</em><span>お知らせ ＆ 制作事例</span></h2>
		<div class="blogWrap">
			<div class="leftMain" id="detailBox">
				<section>
					<p class="infoTtl">
						<time datetime="<?php the_time("Y-m-d") ?>"><?php the_time("Y.m.d") ?></time>
						<span><?php $cat = get_the_category(); ?>
				        <?php $cat = $cat[0]; ?>
				        <?php echo get_cat_name($cat->term_id); ?></span>
					</p>
					<h3><?php the_title(); ?></h3>
					<div class="postBox">
						<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile; ?>
					</div>
				</section>
				<div class="pagingBox">
					<ul class="paging">
						<li class="back"><?php previous_post_link('%link', '<span>&lt</span>'); ?></li>
						<li class="backList"><a href="<?php echo home_url(); ?>/category/<?php echo $cat->category_nicename; ?>">一覧に戻る</a></li>
						<li class="next"><?php next_post_link('%link', '<span>&gt</span>'); ?></li>
					</ul>
				</div>
			</div>
			<div class="sidebar">
				<dl>
					<dt>Category ｜ カテゴリー</dt>
					<dd>
						<ul>
							<?php
							// パラメータを指定
							$args = array(
								// カテゴリー内の記事数順で指定
							    'orderby' => 'count',
							    // 降順で指定
							    'order' => 'DSC'
							);
							$categories = get_categories( $args );

							foreach( $categories as $category ){
								echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> </li> ';
							}
							?>
						</ul>
					</dd>
				</dl>
				<dl>
					<dt>Archives｜ 過去の記事</dt>
					<dd>
						<ul>
						<?php
							//wp_get_archives( 'post_type=post&type=yearly&show_post_count=1' );
							// wp_get_archives(array('post_type' => 'post', 'type' => 'yearly','show_post_count' => 1));
							wp_get_archives(array('post_type' => 'post', 'type' => 'yearly'));
						?>
						</ul>
					</dd>
				</dl>
			</div>
		</div>
	</section>
</main>
<!-- △メイン△-->

<?php get_footer(); ?>