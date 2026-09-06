<?php
/*
Template Name: Gallery(Chinese)
*/
?>
<?php get_header('zh'); ?>
	<!-- ▽メイン▽-->
	<main class="main" id="gallery">
		<div class="pageTitle">
			<div class="secWrap">
				<h1>Gallery</h1>
			</div>
		</div>
		<div class="blogSection">
			<div class="secWrap">
				<div class="blogContainer">
					<div class="leftPanel">
						<dl>
							<dt>Category</dt>
							<dd>
								<ul>
									<li><a href="<?php echo home_url(); ?>/gallerylist-zh">新着順</a></li>
									<?php
									$terms = get_terms('gallery_cat_zh');
									foreach ($terms as $term) {
										echo '<li><a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a></li>';
									}
									?>
								</ul>
							</dd>
						</dl>
					</div>
					<div class="rightPanel">
						<div class="galleryList">
							<ul>
								<?php
								$paged = get_query_var('paged') ? get_query_var('paged') : 1;
								$args = array(
									'post_type' => 'gallery-zh',
									'posts_per_page' => 12,
									'paged' => $paged
								);
								$the_query = new WP_Query($args);
								if ($the_query->have_posts()) :
									while ($the_query->have_posts()) : $the_query->the_post();
										$image = get_field('gallery_image'); // URL形式
										$title = get_field('gallery_title');
										$year = get_field('gallery_year');
										$size = get_field('gallery_size');
										$material = get_field('gallery_material');
										$purchase = get_field('gallery_purchase_link');
								?>
									<li>
										<?php if ($image): ?>
											<div class="photo">
												<a href="<?php echo esc_url($image); ?>" data-lightbox="lightBox" data-title="<?php echo esc_attr($title); ?>">
													<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
												</a>
											</div>
										<?php endif; ?>
										<div class="title"><p><?php echo esc_html($title); ?></p></div>
										<div class="info">
											<?php if ($year) echo "<p>{$year}</p>"; ?>
											<?php if ($size) echo "<p>{$size}</p>"; ?>
											<?php if ($material) echo "<p>{$material}</p>"; ?>
										</div>
										<?php if ($purchase): ?>
											<div class="purchase">
												<div class="btnMore">
													<a href="<?php echo esc_url($purchase); ?>" target="_blank" rel="noopener">購入はこちら</a>
												</div>
											</div>
										<?php endif; ?>
									</li>
								<?php
									endwhile;
									wp_reset_postdata();
								endif;
								?>
							</ul>
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
						<div class="bnr"><a href="#" target="_blank" rel="noopener">
								<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/bnr_online_shop_bg.png" alt=""></div>
								<div class="title">
									<p>Online Shop</p>
								</div>
							</a></div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>