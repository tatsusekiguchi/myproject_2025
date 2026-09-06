<?php
/*
Template Name: 御見積・お問い合わせ
*/
?>

<?php get_header(); ?>

<!-- ▽メイン▽-->
<main id="contact">
	<div class="kv">
		<div class="ttlBox">
			<h1><span>CONTACT</span><em>御見積・お問い合わせ</em></h1>
		</div>
		<div class="imgBox"></div>
	</div>
	<section id="secTop">
		<h2><em>Contact</em><span>御見積・お問い合わせ</span></h2>
		<p>愛知県大府市の共和テクニカル株式会社への<br>御見積のご依頼・お問い合わせは電話・メールにて承っております。<br>お気軽にお問い合わせください。</p>
		<section id="sec01">
			<div class="cntWrap">
				<h3>Catalog</h3>
				<p>生地の一覧はこちらからご確認頂けます（シンコーデジタルカタログ）<br>御見積のご相談の前にご覧ください。</p>
				<ul class="list">
					<li><a href="https://www.sincol-group.jp/digitalcatalog/leather2015/" target="_blank">
							<p><em>レザーカタログ</em><span>leather</span></p>
						</a></li>
					<li><a href="https://www.sincol-group.jp/digitalcatalog/upholstery2015/#page1" target="_blank">
							<p><em>布生地カタログ</em><span>Cloth fabric</span></p>
						</a></li>
					<li><a href="https://contents.sangetsu.co.jp/digital_book/up16/#page=1" target="_blank">
							<p><em>サンゲツカタログ</em><span>Sangetsu</span></p>
						</a></li>
				</ul>
			</div>
		</section>
		<section id="sec02">
			<div class="cntWrap">
				<h3>お電話</h3>
				<div class="telBox">
					<div class="tel">
						<p><span>TEL</span><a href="tel:0120932444">0120-932-444</a></p>
					</div>
					<div class="txt">
						<p>電話受付時間：<br>平日　9:00 ～ 17:00<br>定休日：<br>土・日・祝</p>
					</div>
				</div>
			</div>
		</section>
		<section id="entryForm">
			<h3>メール</h3>
			<p>メールでの御見積・お問い合わせは、こちらのフォームよりご予約ください。<br>下記に必要事項を入力の上、送信してください。<br>※返信までお時間をいただくことがございます。あらかじめご了承ください。<br>お急ぎの方はお電話にてご連絡ください。<br>※は必須項目です。</p>
			<?php echo do_shortcode('[contact-form-7 id="5" title="御見積・お問い合わせ"]'); ?>
		</section>
	</section>
</main>
<!-- △メイン△-->
<script>

$(document).ready(function(){
	$(document).on('wpcf7:invalid', function(evt) {
		alert();
		$('.wpcf7-form-control-wrap.file-1 .wpcf7-not-valid-tip').insertBefore('.wpcf7-custom-item-error.file-1"】');
	});

});

</script>
<?php get_footer(); ?>