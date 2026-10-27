<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>
	<main id="contact">
		<div class="topContainer">
			<div class="topKvPanel">
				<div class="topKv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/contact/top_kv_pc.png" alt=""></div>
			</div>
			<div class="topTitlePanel">
				<h1>お問い合わせ</h1>
				<div class="txt">
					<p>ご見学時に気になったことはお気軽にお尋ねください。<br>園長をはじめとした保育者と、直接コミュニケーションしていただくことで、<br>園の雰囲気などを感じていただける貴重な機会です。</p>
				</div>
			</div>
		</div>
		<div class="arrow"><img src="<?php bloginfo('template_url'); ?>/image/contact/top_arrow.png" alt=""></div>
		<div class="contactContainer">
			<div class="contactTabList">
				<ul>
					<li class="active">
						<p>お問い合わせ</p>
					</li>
					<li><a href="<?php echo home_url(); ?>/entry">見学申し込み</a></li>
				</ul>
			</div>
			<div class="contactPanel">
				<div class="contactItemBox">
					<div class="formBox">
						<div class="contactTelInfo">
							<p>気になったことは、お気軽にお尋ねください。</p>
							<a href="tel:0524820200">TEL：052-482-0200</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
