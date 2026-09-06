<?php
/*
Template Name:お問い合わせ内容確認
*/
?>

<?php get_header(); ?>
	<main id="contactConfirm">
		<div class="contactContainer">
			<div class="contactPanel">
				<div class="contactItemBox">
					<div class="secTtl">
						<h2>送信内容の確認</h2>
					</div>
					<div class="formConfirm">
						<?php echo do_shortcode('[mwform_formkey key="29"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>