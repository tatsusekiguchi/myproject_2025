<?php
/*
Template Name: お問い合わせ送信完了
*/
?>

<?php get_header(); ?>
	<main id="contactConfirm">
		<div id="section__contact">
			<div class="contactSection">
				<div class="sectionTtl">
					<h1>お問い合わせ</h1>
				</div>
				<div class="contactStep">
					<ol>
						<li><span class="Outfit">01</span><em>入力</em></li>
						<li><span class="Outfit">02</span><em>確認</em></li>
						<li class="current"><span class="Outfit">03</span><em>送信</em></li>
					</ol>
				</div>
				<div class="completePanel">
					<div class="secTtl">
						<h2>-送信完了-</h2>
					</div>
					<div class="txt">
						<p>この度はお問い合わせいただきありがとうございます。<br>担当者より２〜３営業日以内にご連絡いたします。<br>万が一返信がない場合やお急ぎの場合は、<br>お手数ですが下記までご連絡ください。</p>
					</div>
					<div class="tel Outfit"><a href="tel:058-257-5261">TEL 058-257-5261</a></div>
					<div class="btnToTop"><a href="<?php echo home_url(); ?>"><em>TOPへ戻る</em><span>&gt;</span></a></div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>