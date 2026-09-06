<?php
/*
Template Name: ホームケア商品
*/
?>

<?php get_header(); ?>
	<main id="product">
		<div class="mvContainer">
			<div class="mv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/product/product_top_mv_pc.png" alt=""></div>
			<div class="mvTitle">
				<div class="secTtlBox">
					<div class="secTtl">
						<h1>Product</h1>
					</div>
					<div class="sub">
						<p>ホームケア商品</p>
					</div>
				</div>
			</div>
		</div>

		<?php if (have_rows('home_care_products')): ?>
		<div id="section__product">
			<div class="productList">
				<ul>
					<?php $index = 1; while (have_rows('home_care_products')): the_row(); ?>
						<li>
							<div class="photo">
								<img src="<?php echo get_sub_field('product_image_1')['url']; ?>" alt="">
							</div>
							<div class="infoBox">
								<div class="ttlBox">
									<div class="left">
										<div class="ttl01">
											<p><?php the_sub_field('product_name_en'); ?></p>
										</div>
										<div class="ttl02">
											<p><?php the_sub_field('product_name_ja'); ?></p>
										</div>
									</div>
									<div class="price">
										<p><span><?php the_sub_field('product_volume'); ?> /</span><em><?php the_sub_field('product_price'); ?></em></p>
									</div>
								</div>
								<div class="txt">
									<p><?php echo nl2br(esc_html(get_sub_field('product_description'))); ?></p>
								</div>
							</div>
							<div class="button itemModalOpen" data-modal-id="modal<?php echo $index; ?>">
								<p>View Detail</p>
							</div>
						</li>
					<?php $index++; endwhile; ?>
				</ul>
			</div>

			<div class="itemModalOverlay overlay">
				<div class="itemModalContainer">
					<?php $index = 1; while (have_rows('home_care_products')): the_row(); ?>
					<div class="itemModal" data-modal="modal<?php echo $index; ?>">
						<div class="modalBox">
							<div class="modalBoxInner">
								<div class="photoBox">
									<div class="photo"><img src="<?php echo get_sub_field('product_image_1')['url']; ?>" alt=""></div>
									<div class="photo"><img src="<?php echo get_sub_field('product_image_2')['url']; ?>" alt=""></div>
								</div>
								<div class="infoBox">
									<div class="ttlBox">
										<div class="left">
											<div class="ttl01"><p><?php the_sub_field('product_name_en'); ?></p></div>
											<div class="ttl02"><p><?php the_sub_field('product_name_ja'); ?></p></div>
										</div>
										<div class="price">
											<p><span><?php the_sub_field('product_volume'); ?> /</span><em><?php the_sub_field('product_price'); ?></em></p>
										</div>
									</div>
									<div class="txt">
										<p><?php echo nl2br(esc_html(get_sub_field('product_description'))); ?></p>
										<div class="aside">
											<p><?php echo nl2br(esc_html(get_sub_field('product_note'))); ?></p>
										</div>
									</div>
								</div>
								<div class="howtoPanel">
									<dl class="accord">
										<dt>ご使用方法</dt>
										<dd>
											<div class="inner">
												<div class="box">
													<div class="txt"><p><?php echo nl2br(esc_html(get_sub_field('usage_description'))); ?></p></div>
												</div>
											</div>
										</dd>
									</dl>
									<dl class="accord">
										<dt>成分</dt>
										<dd>
											<div class="inner">
												<div class="box">
													<div class="txt"><p><?php echo nl2br(esc_html(get_sub_field('component_description'))); ?></p></div>
												</div>
											</div>
										</dd>
									</dl>
								</div>
								<?php if ($url = get_sub_field('purchase_url')): ?>
								<div class="buttonPurchase">
									<a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener">購入する</a>
								</div>
								<?php endif; ?>
								<?php $usage_image = get_sub_field('usage_image'); ?>
								<?php if ($usage_image): ?>
								<div class="photoPanel">
									<div class="ttl"><p><?php the_sub_field('product_name_ja'); ?>ご使用方法</p></div>
									<div class="photo"><img src="<?php echo esc_url($usage_image['url']); ?>" alt=""></div>
								</div>
								<?php endif; ?>
								<div class="modalCloseBtm">
									<div class="modalClose"><p>Close Page</p></div>
								</div>
							</div>
							<div class="modalClose">
								<p>Close Page</p>
							</div>
						</div>
					</div>
					<?php $index++; endwhile; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>

	</main>
<?php get_footer(); ?>