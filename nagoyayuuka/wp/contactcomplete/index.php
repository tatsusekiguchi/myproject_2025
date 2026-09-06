<?php
/*
Template Name: お問い合わせ送信完了
*/
?>

<?php get_header(); ?>
	<main id="contactComplete">
		<div class="contactContainer">
			<div class="contactPanel">
				<div class="contactItemBox">
					<div class="secTtl">
						<h2>送信完了</h2>
					</div>
					<div class="ttl">
						<p>お問い合わせいただき、<br class="spBreak">ありがとうございます。</p>
					</div>
					<div class="txt">
						<p>通常2-3営業日以内にご返信させていただいております。<br>万が一、返信がない場合はお手数ですがお電話にてご連絡ください。</p>
					</div>
					<div class="btnToTop"><a href="<?php echo home_url(); ?>"><span>トップへもどる</span>
							<div class="arrow"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_top_top_arrow.png" alt=""></div>
						</a></div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>