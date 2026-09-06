	<!-- ▽footer▽-->
	<footer class="footer">
		<div class="footContact">
			<div class="contactContainer">
				<div class="slidePanel">
					<div class="slideBox">
						<ul>
							<li><img src="<?php bloginfo('template_url'); ?>/image/common/footer_contact_list_01.png" alt=""></li>
							<li><img src="<?php bloginfo('template_url'); ?>/image/common/footer_contact_list_02.png" alt=""></li>
							<li><img src="<?php bloginfo('template_url'); ?>/image/common/footer_contact_list_03.png" alt=""></li>
							<li><img src="<?php bloginfo('template_url'); ?>/image/common/footer_contact_list_04.png" alt=""></li>
						</ul>
					</div>
					<div class="slideBox right slideBox--sp">
						<ul>
							<li><img src="<?php bloginfo('template_url'); ?>/image/common/footer_contact_list_01.png" alt=""></li>
							<li><img src="<?php bloginfo('template_url'); ?>/image/common/footer_contact_list_02.png" alt=""></li>
							<li><img src="<?php bloginfo('template_url'); ?>/image/common/footer_contact_list_03.png" alt=""></li>
							<li><img src="<?php bloginfo('template_url'); ?>/image/common/footer_contact_list_04.png" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="contactPanel">
					<div class="contactItem">
						<dl>
							<dt class="green">見学申し込み</dt>
							<dd>
								<div class="txt">
									<p>入園を検討している方は見学に来ませんか？<br>なごや遊花こども園をぜひ見に来てください。</p>
								</div>
								<div class="btnMore btnMoreGreen"><a href="<?php echo home_url(); ?>/entry">
										<div>
											<p>くわしく見る</p>
										</div>
									</a></div>
							</dd>
						</dl>
					</div>
					<div class="contactItem">
						<dl>
							<dt class="pink">お問い合わせ</dt>
							<dd>
								<div class="txt">
									<p>お問い合わせやご意見ございましたら<br>お気軽にご相談ください</p>
								</div>
								<div class="btnMore btnMorePink"><a href="tel:0524820200">
										<div>
											<p>052-482-0200</p>
										</div>
									</a></div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		<div class="footPanel">
			<div class="footBox">
				<div class="logo"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_logo.png" alt=""></div>
				<div class="footNav">
					<ul>
						<li class="<?php if (is_page('about')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/about">園について</a>
						</li>
						<li class="<?php if (is_page('newslist')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/newslist">お知らせ</a>
						</li>
						<li class="<?php if (is_page('guide')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/guide">入園案内</a>
						</li>
						<li class="<?php if (is_page('visit')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/visit">見学案内</a>
						</li>
						<li class="<?php if (is_page('support')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/support">0歳からの子育てサポート</a>
						</li>
						<li class="<?php if (is_page('entry')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/entry">見学申し込み</a>
						</li>
						<li class="<?php if (is_page('recruit')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/recruit">採用情報</a>
						</li>
					</ul>
				</div>
				<div class="txtBox">
					<div class="txt">
						<p>〒453-0033　名古屋市中村区栄生町９-３０</p>
						<div class="tel"><a href="tel:0524820200">TEL：052-482-0200</a></div>
						<div class="fax"><a href="#">FAX：052-482-5960</a></div>
					</div>
				</div>
				<div class="copy">
					<dl class="poppins">
						<dt>NAGOYA YUUKA YOUCHIEN</dt>
						<dd>
							<p>COPYRIGHT &copy; NAGOYA YUUKA YOUCHIEN <br />ALL RIGHTS RESERVED.</p>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</footer>
	<!-- △footer△-->
	<?php wp_footer(); ?>
</body>

</html>