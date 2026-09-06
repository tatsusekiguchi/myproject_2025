<?php
/*
Template Name: サロンリスト
*/
?>

<?php get_header(); ?>
	<main id="salonList">
		<div class="topContainer">
			<div class="secWrap">
				<div class="secTtlBox">
					<div class="secTtl">
						<h1>Salon List</h1>
					</div>
					<div class="sub">
						<p>サロンリスト</p>
					</div>
				</div>
				<div class="txt">
					<p>mieuxではお肌の美しさを引き出し、育てるために、技術・空間・サービスのすべてにこだわりを持っています。<br>お客様が心からリラックスし、自信を持てる肌へと導くために、6つの大切なポイントを軸にサロンづくりを行っています。</p>
				</div>
			</div>
		</div>
		<div class="listContainer">
			<div class="secWrap">
				<div class="listBox">
					<ul>
						<?php
						$the_query = new WP_Query(array(
							'paged'     => get_query_var('paged') ? intval(get_query_var('paged')) : 1,
							'post_type' => 'post',
						));
						?>
						<?php if ($the_query->have_posts()) : ?>
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
								<?php $info = get_field('salon_list_info'); ?>
								<li>
									<div class="photoBox">
										<div class="photo">
											<a href="<?php the_permalink(); ?>">
												<?php if (!empty($info['thumbnail']['url'])) : ?>
													<img src="<?php echo esc_url($info['thumbnail']['url']); ?>" alt="">
												<?php else : ?>
													<img src="<?php bloginfo('template_url'); ?>/image/salon/salon_list_img_01.png" alt="">
												<?php endif; ?>
											</a>
										</div>
										<div class="nameBox">
											<div class="name01">
												<p><?php echo esc_html($info['store_name_ja']); ?></p>
											</div>
											<div class="name02">
												<p><?php echo esc_html($info['store_name_en']); ?></p>
											</div>
										</div>
									</div>
									<div class="infoBox">
										<div class="info">
											<div class="address">
												<p><?php echo nl2br(esc_html($info['address'])); ?></p>
											</div>
											<?php if (!empty($info['tel'])) : ?>
											<div class="tel"><a href="tel:<?php echo esc_attr($info['tel']); ?>">Tel <?php echo esc_html($info['tel']); ?></a></div>
											<?php endif; ?>
										</div>
										<div class="buttonItems">
											<div class="button"><a href="<?php the_permalink(); ?>">Salon Page</a></div>
											<?php if (!empty($info['reservation_url'])) : ?>
											<div class="button"><a href="<?php echo esc_url($info['reservation_url']); ?>" target="_blank" rel="noopener">Reserve</a></div>
											<?php endif; ?>
										</div>
									</div>
								</li>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
					</ul>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>