<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>
	<main id="contact">
		<div id="section__contact">
			<div class="secWrap02">
				<div class="contactContainer">
					<div class="secTtlBox">
						<div class="secTtl">
							<h1>Contact</h1>
						</div>
						<div class="sub">
							<p>お問い合わせ</p>
						</div>
					</div>
					<div class="formBox">
						<?php echo do_shortcode('[mwform_formkey key="110"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>