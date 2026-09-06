<?php
/*
Template Name:お問い合わせ内容確認
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
						<li class="current"><span class="Outfit">02</span><em>確認</em></li>
						<li><span class="Outfit">03</span><em>送信</em></li>
					</ol>
				</div>
				<div class="contactPanel">
					<div class="formConfirm">
						<?php echo do_shortcode('[mwform_formkey key="15"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>