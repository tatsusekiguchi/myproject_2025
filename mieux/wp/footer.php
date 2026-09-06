	<!-- ▽footer▽-->
	<footer class="footer">
		<?php
			$exclude_pages = ['contact', 'contactconfirm', 'contactcomplete', 'privacy'];
		?>
		<?php if (!(is_page($exclude_pages))) : ?>
			<div class="footContact bgWhite">
				<div class="secWrap">
					<div class="contactList">
						<ul>
							<?php if (is_singular('post')) :
								$info = get_field('salon_list_info');
								if ($info && !empty($info['reservation_url'])) :
							?>
								<li>
									<a href="<?php echo esc_url($info['reservation_url']); ?>" target="_blank" rel="noopener">
										<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/common/footer_bnr_reserve_pc.png" alt=""></div>
										<div class="txtBox">
											<div class="ttlBox">
												<div class="ttl01">
													<p>Reserve</p>
												</div>
												<div class="ttl02">
													<p><?php echo esc_html($info['store_name_ja']); ?>のご予約はこちら</p>
												</div>
											</div>
											<div class="btnMore"><span>VIEW MORE</span></div>
										</div>
									</a>
								</li>
							<?php endif; endif; ?>
							<li>
								<a href="#" style="pointer-events: none;">
									<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/common/footer_bnr_franchise_pc.png" alt=""></div>
									<div class="txtBox">
										<div class="ttlBox">
											<div class="ttl01">
												<p>Franchise</p>
											</div>
											<div class="ttl02">
												<p>FCオーナー募集中</p>
											</div>
										</div>
										<div class="btnMore"><span>VIEW MORE</span></div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo home_url(); ?>/contact">
									<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/common/footer_bnr_contact_pc.png" alt=""></div>
									<div class="txtBox">
										<div class="ttlBox">
											<div class="ttl01">
												<p>Contact</p>
											</div>
											<div class="ttl02">
												<p>お問い合わせはこちら</p>
											</div>
										</div>
										<div class="btnMore"><span>VIEW MORE</span></div>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="footPanel">
			<div class="secWrap">
				<div class="footBox">
					<div class="infoBox01">
						<div class="logo"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_logo.png" alt=""></div>
						<div class="txt">
							<p>Being beautiful creates smiles.<br>Through beauty, we enable our clients to feel happiness and confidence<br>not only from the outside. but also from the inside.<br>We will continue to be a group of artists who can provide such an experience.</p>
						</div>
					</div>
					<div class="infoBox02">
						<div class="sns">
							<ul>
								<li><a href="#" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_sns_instagram.png" alt=""></a></li>
								<li><a href="#" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_sns_line.png" alt=""></a></li>
								<li><a href="#" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_sns_twitter.png" alt=""></a></li>
							</ul>
						</div>
						<div class="copyBox">
							<div class="copy">
								<p>Copyright &copy; YORI Co., Ltd all rights reserved.</p>
							</div>
							<div class="privacy"><a href="<?php echo home_url(); ?>/privacy">プライバシーポリシー</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footMv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/common/footer_btm_mv_pc.png" alt=""></div>
	</footer>
	<!-- △footer△-->
	<?php wp_footer(); ?>
</body>

</html>