<?php
/*
Template Name: お知らせ
*/
?>

<?php get_header(); ?>

<!-- ▽メイン▽-->
<main id="bloglist" class="blogMain">
	<section>
		<h2><em>News &amp; Cace</em><span>お知らせ ＆ 制作事例</span></h2>
		<div class="blogWrap">
			<div class="leftMain" id="listBox">
				
				<?php
                $the_query = new WP_Query( array(
                  'paged'       => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
                  'post_type'   => 'post',
                  'category_name'   => 'news',
                  'posts_per_page' => 10,
                ) ); ?>
                <ul>
                <?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<li>
					<section>
						<div class="txt">
							<p class="infoTtl">
								<time datetime="<?php the_time("Y-m-d") ?>"><?php the_time("Y.m.d") ?></time><span>お知らせ</span>
							</p>
							<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							<p>
								<?php
								if(mb_strlen($post->post_content,'UTF-8')>36){
									$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 100,'UTF-8'));
									echo $content.'...';
								}else{
									echo str_replace('\n', '', strip_tags($post->post_content));
								}
								?>
							</p>
						</div>
						<div class="photo"><?php the_post_thumbnail('full'); ?></div>
					</section>
				</li>

				<?php endwhile; ?>
				</ul>

				<?php
	            //Pagenation 
	            if (function_exists("responsive_pagination")) {
	                $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
	                responsive_pagination($additional_loop->max_num_pages);
	                wp_reset_postdata();
	            }
	            ?>


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