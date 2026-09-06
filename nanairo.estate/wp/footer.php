	<!-- ▽footer▽-->
	<footer class="footer">
		<div class="footContact">
			<div class="secWrap01">
				<div class="icons"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_contact_top_icons.png" alt=""></div>
				<div class="contactItem">
					<div class="reserveBox">
						<dl>
							<dt>24時間お手軽WEB予約</dt>
							<dd><a href="#" target="_blank" rel="noopener"> ご来店予約はこちらから</a>
								<p>まずはお気軽にご相談ください。</p>
							</dd>
						</dl>
					</div>
					<div class="telBox">
						<dl>
							<dt>お電話でのお問い合わせ</dt>
							<dd><a href="tel:0120990716">0120-990-716</a>
								<p>受付時間　10：00 ～ 17：30<br>定休日：水・木・第4土曜日</p>
							</dd>
						</dl>
					</div>
					<div class="mailBox">
						<dl>
							<dt>メールでのお問い合わせ</dt>
							<dd><a href="contact"><span>メールフォーム</span></a></dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		<div class="footPanel">
			<div class="secWrap01">
				<div class="footBox">
					<div class="left">
						<div class="logo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/common/footer_logo_pc.png" alt=""></div>
						<div class="txt">
							<p>〒501-6251　羽島市福寿町間島3丁目90-2<br>営業時間　9：00～18：00<br>定休日：水・木・第4土曜日</p>
						</div>
					</div>
					<div class="right">
						<?php if(is_home()): ?>
							<div class="bnr"><a href="https://iqrafudosan.com/companies/6446" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_bnr.png" alt=""></a></div>
						<?php endif; ?>
					</div>
				</div>
				<div class="insta"><a href="https://www.instagram.com/nanairo.estate/?hl=ja" target="_blank" rel="noopener">七いろ不動産（Instagram）</a></div>
				<div class="copy">
					<p>&copy; 2024 七いろ不動産.</p>
				</div>
			</div>
		</div>
		<div class="btmLinkPanel">
			<ul>
				<li><a href="" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_circle_reserve.png" alt=""></a></li>
				<li><a href="contact"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_circle_contact.png" alt=""></a></li>
			</ul>
		</div>
	</footer>
	<!-- △footer△-->
	<?php wp_footer(); ?>
</body>

</html>