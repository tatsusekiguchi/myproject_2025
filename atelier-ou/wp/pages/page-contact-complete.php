<?php
/*
Template Name: THANK PAGE
*/
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!--OGP-->
	<meta property="og:title" content="輝く舞台をデザインする サロン設計・開業サポート”｜ATELIER OU" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://atelier-ou.jp" />
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/image/ogp.png" />
	<meta property="og:site_name" content="輝く舞台をデザインする サロン設計・開業サポート”｜ATELIER OU" />
	<meta property="og:description" content="" />
	<!-- css-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css">
	<link rel="stylesheet" media="screen and (max-width: 1139px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/common_sp.css">
	<link rel="stylesheet" media="screen and (max-width: 1139px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout_sp.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/attach.css">
	<!-- js-->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/infiniteslide.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scrollAnimation.js"></script>
	<!-- title-->
	<title>THANK YOU｜ATELIER OU</title>
	<?php wp_head(); ?>
</head>

<body class="page" id="contactComplete">
	<!-- ▽header▽-->
	<header class="header">
		<div class="headWrap">
			<div class="logoBox">
				<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/image/common/header_logo.png" alt=""></a></div>
				<div class="headTitle">
					<h1>輝く舞台をデザインする サロン設計・開業サポート</h1>
				</div>
			</div>
			<div class="headItem">
				<div class="insta"><a href="#" target="_blank" rel="noopener">INSTAGRAM</a></div>
				<div class="contact"><a href="<?php echo home_url(); ?>#section__contact"><span>お問い合わせ</span></a></div>
			</div>
		</div>
	</header>
	<!-- △header△-->
	<!-- ▽メイン▽-->
	<main id="contactComplete">
		<div id="section__contact">
			<div class="secWrap02">
				<div class="contactContainer">
					<div class="secTtl">
						<h2>THANK<br>YOU</h2>
					</div>
					<div class="topComplete">
						<p>送信完了</p>
					</div>
					<div class="txt">
						<p>この度はお問い合わせいただきありがとうございます。<br>いただいた内容を確認後、お返事までに通常1週間ほどお時間をいただいております。<br>少々お待ちください。</p>
					</div>
					<div class="btnToTop"><a href="<?php echo home_url(); ?>"><span>Back to top</span></a></div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
	<!-- ▽footer▽-->
	<div class="footer">
		<div class="topPanel">
			<div class="logo"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_logo.png" alt=""></div>
			<div class="headItem">
				<div class="insta"><a href="#" target="_blank" rel="noopener">INSTAGRAM</a></div>
				<div class="contact"><a href="<?php echo home_url(); ?>#section__contact"><span>お問い合わせ</span></a></div>
			</div>
		</div>
		<div class="mvPanel">
			<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_mv.png" alt=""></div>
			<div class="mvLogo"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_mv_logo.png" alt=""></div>
		</div>
		<div class="bottomPanel">
			<div class="navigationBox">
				<ul>
					<li><a href="<?php echo home_url(); ?>#section__concept">⚫︎ コンセプト</a></li>
					<li><a href="<?php echo home_url(); ?>#section__points">⚫︎ OUの特徴</a></li>
				</ul>
				<ul>
					<li><a href="<?php echo home_url(); ?>#section__voice">⚫︎ お客様の声</a></li>
					<li><a href="<?php echo home_url(); ?>#section__flow">⚫︎ プロジェクトの流れ</a></li>
				</ul>
			</div>
			<div class="copy">
				<p>Copyright &copy; ATELIER OU</p>
			</div>
		</div>
	</div>
	<!-- △footer△-->
	<?php wp_footer(); ?>
</body>

</html>