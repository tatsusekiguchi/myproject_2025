<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
	<main id="contact">
		<div class="mainSection section">
			<div class="secWrap01">
				<div class="pageSecTtlBox">
					<div class="pageSecTtl">
						<h1>お問い合わせ</h1>
					</div>
				</div>
				<div class="contactItem">
					<div class="telBox">
						<dl>
							<dt>お電話でのお問い合わせ</dt>
							<dd>
								<p>下記電話番号までご連絡ください。</p><a href="tel:0120990716">0120-990-716</a>
								<p>◎営業時間／10:00～17:30◎定休日／水・木・第4土</p>
							</dd>
						</dl>
					</div>
					<div class="reserveBox">
						<dl>
							<dt>24時間お手軽WEB予約</dt>
							<dd><a href="#" target="_blank" rel="noopener"> ご来店予約はこちらから</a>
								<p>ご希望の日時をご選択いただきご予約ください。</p>
							</dd>
						</dl>
					</div>
				</div>
				<div class="secPanel">
					<div class="ttlBox">
						<h2>インターネットからのお問い合わせ</h2>
					</div>
					<div class="topTxt txt">
						<p>下記フォームに必要事項をご記入の上送信してください。折り返しご連絡差し上げます。<em>※</em>印は入力必須項目です。</p>
					</div>
					<div class="formBox">
						<?php echo do_shortcode('[mwform_formkey key="191"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>