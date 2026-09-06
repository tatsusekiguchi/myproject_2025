<?php get_header(); ?>
<main id="salon">
	<?php
		$info = get_field('salon_list_info');
		$store = get_field('store_info');
	?>
    <div class="mvContainer">
        <div class="mv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/salon/salon_top_mv_pc.png" alt=""></div>
        <div class="mvTitle">
            <h1><?php echo esc_html($info['store_name_en']); ?></h1>
        </div>
    </div>
    <div id="section__staff" class="bgWhite">
        <div class="secWrap">
            <div class="secTtlBox">
                <div class="secTtl">
                    <h2>Staff</h2>
                </div>
                <div class="sub">
                    <p><?php echo esc_html($info['store_name_ja']); ?>スタッフ</p>
                </div>
            </div>
        </div>
        <div class="staffContainer">
            <div class="staffSliderList">
                <?php if (have_rows('staff_group')): $i = 1; ?>
                    <?php while (have_rows('staff_group')): the_row(); ?>
                        <div class="staffSliderBox">
                            <div class="photoBox">
                                <div class="photo">
                                    <img src="<?php echo esc_url(get_sub_field('staff_image')['url']); ?>" alt="">
                                </div>
                                <div class="name staffModalOpen" data-modal-id="modal<?php echo $i; ?>">
                                    <p><?php the_sub_field('staff_name_en'); ?></p>
                                </div>
                            </div>
                            <div class="infoBox">
                                <div class="ttlPc">
                                    <div class="left">
                                        <p><?php the_sub_field('intro_title'); ?></p>
                                    </div>
									<?php if ($access = get_field('staff_instagram')) : ?>
                                    <div class="right">
                                        <a href="<?php the_sub_field('staff_instagram'); ?>" target="_blank" rel="noopener">
                                            <img src="<?php bloginfo('template_url'); ?>/image/salon/staff_instagram.png" alt="">
                                        </a>
                                    </div>
									<?php endif; ?>
                                </div>
                                <div class="ttlSp">
                                    <div class="box">
                                        <div class="left">
                                            <p><?php the_sub_field('staff_name_en'); ?></p>
                                        </div>
										<?php if ($access = get_field('staff_instagram')) : ?>
                                        <div class="right">
                                            <a href="<?php the_sub_field('staff_instagram'); ?>" target="_blank" rel="noopener">
                                                <img src="<?php bloginfo('template_url'); ?>/image/salon/staff_instagram.png" alt="">
                                            </a>
                                        </div>
										<?php endif; ?>
                                    </div>
                                    <div class="ttl">
                                        <p><?php the_sub_field('intro_title'); ?></p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <p>
										<?php echo nl2br(esc_html(get_sub_field('intro_detail'))); ?>
									</p>
                                </div>
                                <div class="more staffModalOpen" data-modal-id="modal<?php echo $i; ?>">
                                    <p>Read More</p>
                                </div>
                            </div>
                        </div>
                    <?php $i++; endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="staffItemOverlay overlay"></div>
            <div class="itemModalContainer">
                <?php if (have_rows('staff_group')): $i = 1; ?>
                    <?php while (have_rows('staff_group')): the_row(); ?>
                        <div class="staffItemModal" data-modal="modal<?php echo $i; ?>">
                            <div class="modalBox">
                                <div class="modalBoxInner">
                                    <div class="photoBox photoBox--pc">
                                        <div class="photo"><img src="<?php echo esc_url(get_sub_field('popup_pc1')['url']); ?>" alt=""></div>
                                        <div class="photo"><img src="<?php echo esc_url(get_sub_field('popup_pc2')['url']); ?>" alt=""></div>
                                    </div>
                                    <div class="photoBox photoBox--sp">
                                        <div class="photo"><img src="<?php echo esc_url(get_sub_field('popup_sp1')['url']); ?>" alt=""></div>
                                        <div class="photo"><img src="<?php echo esc_url(get_sub_field('popup_sp2')['url']); ?>" alt=""></div>
                                    </div>
                                    <div class="infoBox">
                                        <div class="ttlBox">
                                            <div class="left">
                                                <div class="name01">
                                                    <p><?php the_sub_field('staff_name_en'); ?></p>
                                                </div>
                                                <div class="name02">
                                                    <p><?php the_sub_field('staff_name_kana'); ?></p>
                                                </div>
                                            </div>
											<?php if ($access = get_field('staff_instagram')) : ?>
                                            <div class="right">
                                                <a href="<?php the_sub_field('staff_instagram'); ?>" target="_blank" rel="noopener">
                                                    <img src="<?php bloginfo('template_url'); ?>/image/salon/staff_instagram.png" alt="">
                                                </a>
                                            </div>
											<?php endif; ?>
                                        </div>
                                        <dl>
                                            <dt><?php the_sub_field('intro_title'); ?></dt>
                                            <dd><?php echo nl2br(esc_html(get_sub_field('intro_detail'))); ?></dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="modalClose">
                                    <p>Close Profile</p>
                                </div>
                            </div>
                        </div>
                    <?php $i++; endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

	<div id="section__menu" class="bgWhite">
		<div class="secWrap">
			<div class="secContainer">
				<div class="leftPanel">
					<div class="secTtlBox">
						<div class="secTtl">
							<h2>Menu</h2>
						</div>
						<div class="sub">
							<p>メニュー</p>
						</div>
					</div>
					<div class="photoBox">
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/menu_photo_01.png" alt=""></div>
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/menu_photo_02.png" alt=""></div>
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/menu_photo_03.png" alt=""></div>
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/menu_photo_04.png" alt=""></div>
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/menu_photo_05.png" alt=""></div>
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/menu_photo_06.png" alt=""></div>
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/menu_photo_07.png" alt=""></div>
					</div>
				</div>
				<div class="rightPanel">
					<div class="secBox">
						<div class="ttl">
							<p>Special Care Course</p>
						</div>
						<dl>
							<dt>スペシャルケアコース</dt>
							<dd>毛穴の角質ケア後、生プラセンタを肌の奥まで届け、<br>深層から肌質改善を目指すコースです。</dd>
						</dl>
					</div>
					<div class="secBox">
						<div class="ttl">
							<p>Whitening course for firmness and luster</p>
						</div>
						<dl>
							<dt>ハリ艶美白コース</dt>
							<dd>毛穴の角質ケアを行った後、白玉パックで保湿し、<br>肌の艶とトーンアップを図るコースです。</dd>
						</dl>
					</div>
					<div class="secBox">
						<div class="ttl">
							<p>Relax Premium Course</p>
						</div>
						<dl>
							<dt>リラックスプレミアムコース</dt>
							<dd>スペシャルケアコースに小顔マッサージを組み合わせた、<br>リラックス効果の高いコースです。</dd>
						</dl>
					</div>
					<div class="secBox">
						<div class="ttl">
							<p>Student Discount U24 Highly Moisturizing Course</p>
						</div>
						<dl>
							<dt>学割U24<br>高保湿コース</dt>
							<dd>24歳以下の学生の方を対象にした、<br>高保湿ケアを行うコースです。</dd>
						</dl>
					</div>
					<div class="secBox">
						<div class="ttl">
							<p>Student Discount U24 Special Care Course</p>
						</div>
						<dl>
							<dt>学割U24<br>スペシャルケアコース</dt>
							<dd>24歳以下の学生の方を対象にした、<br>スペシャルケアを提供するコースです。</dd>
						</dl>
					</div>
					<div class="secBox">
						<div class="ttl">
							<p>Men Only Poorest Course</p>
						</div>
						<dl>
							<dt>男性限定<br>ポアレスコース</dt>
							<dd>男性の方を対象に、<br>毛穴の汚れや開きをケアするコースです。</dd>
						</dl>
					</div>
					<div class="secBox">
						<div class="ttl">
							<p>Men Only Poorest Course</p>
						</div>
						<dl>
							<dt>男性限定<br>スペシャルケアコース</dt>
							<dd>男性の方を対象に、<br>スペシャルケアを提供するコースです。</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="pager">
				<ul>
					<li class="prev"><img src="<?php bloginfo('template_url'); ?>/image/top/menu_prev.png" alt=""></li>
					<li class="next"><img src="<?php bloginfo('template_url'); ?>/image/top/menu_next.png" alt=""></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="section__mv"><img src="<?php bloginfo('template_url'); ?>/image/salon/salon_page_mv.png" alt=""></div>

	<div id="section__detail" class="bgWhite">
		<div class="detailContainer">
			<div class="secWrap">
				<div class="detailPanel">
					<div class="inner">
						<div class="topBox">
							<div class="shopName">
								<p><?php echo esc_html($store['store_full_name']); ?></p>
							</div>
							<?php
							$instagram = $store['instagram_url'];
							$line = $store['line_url'];
							if ($instagram || $line) :
							?>
							<div class="sns">
								<ul>
									<?php if ($instagram) : ?>
									<li><a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/salon/sns_instagram.png" alt=""></a></li>
									<?php endif; ?>
									<?php if ($line) : ?>
									<li><a href="<?php echo esc_url($line); ?>" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/salon/sns_line.png" alt=""></a></li>
									<?php endif; ?>
								</ul>
							</div>
							<?php endif; ?>
						</div>
						<div class="infoBox">
							<dl>
								<dt>Address</dt>
								<dd>
									<p>
										<?php echo nl2br(esc_html($store['store_address_ja'])); ?>
									</p>
									<div class="accessBox">
										<?php if (!empty($store['access'])) : ?>
										<div class="access">
											<p>
												<?php echo nl2br(esc_html($store['access'])); ?>
											</p>
										</div>
										<?php endif; ?>
										<?php if (!empty($store['map_url'])) : ?>
										<div class="mapLink">
											<a href="<?php echo esc_url($store['map_url']); ?>" target="_blank" rel="noopener">
												<img src="<?php bloginfo('template_url'); ?>/image/salon/map_link.png" alt="">
											</a>
										</div>
										<?php endif; ?>
									</div>
								</dd>
							</dl>
							<dl>
								<dt>Open</dt>
								<dd><?php echo esc_html($store['open']); ?></dd>
							</dl>
							<dl>
								<dt>Close</dt>
								<dd><?php echo esc_html($store['close']); ?></dd>
							</dl>
						</div>
						<div class="mapPanel">
							<div class="mapBox">
								<?php echo $store['map_iframe']; ?>
							</div>
						</div>
						<div class="enAddress">
							<p><?php echo nl2br(esc_html($store['store_address_en'])); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>