<?php
/*
Template Name:送信内容確認
*/
?>

<?php get_header(); ?>
	<main id="contactConfirm">
		<div id="section__contact">
			<div class="secWrap02">
				<div class="contactContainer">
					<div class="secTtlBox">
						<div class="secTtl">
							<h1>Contact</h1>
						</div>
						<div class="sub">
							<p>お問い合わせ内容確認</p>
						</div>
					</div>
					<div class="formConfirm">
						<?php echo do_shortcode('[mwform_formkey key="110"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>