<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- css-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/common_sp.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout_sp.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/attach.css">
	<!-- js-->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/infiniteslide.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scrollAnimation.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/pagescroll.js"></script>
	<!-- title-->
	<title>
		<?php if(is_home()): ?>
			七いろ不動産
		<?php else: ?>
		<?php wp_title(''); ?>｜七いろ不動産
		<?php endif; ?>
	</title>
	<?php wp_head(); ?>
</head>

<body id="top">
	<!-- ▽header▽-->
	<header class="header">
		<div class="headWrap">
			<div class="headTtl">
				<p>七いろ不動産は羽島市を中心に土地の買取・販売・仲介をおこなっております。</p>
			</div>
			<div class="headBox">
				<div class="logoBox">
					<div class="logo"><a href="<?php echo home_url(); ?>"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/common/header_logo_pc.png" alt=""></a></div>
				</div>
				<div class="headNav">
					<ul>
						<li class="icon01"><a href="<?php echo home_url(); ?>/propertylist">土地を買いたい</a></li>
						<li class="icon02"><a href="<?php echo home_url(); ?>/housing/正木町コンセプトハウス-ch-f2">住宅を買いたい</a></li>
						<li class="icon03"><a href="<?php echo home_url(); ?>/sell">不動産を売りたい</a></li>
						<li class="icon04"><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
					</ul>
				</div>
				<div class="headItem">
					<p>まずはお気軽にご相談ください。</p><a href="tel:0120990716">0120-990-716</a>
					<div class="info">
						<p>営業時間：9:00～17:30</p>
						<p>定休日：水・木・第4土曜日</p>
					</div>
				</div>
			</div>
		</div>
		<div class="navBox">
			<div class="navContainer">
				<div class="navPanel01">
					<div class="leftBox">
						<div class="logo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/common/header_logo_pc.png" alt=""></div>
					</div>
					<div class="rightBox">
						<div class="navList">
							<ul>
								<li><a href="<?php echo home_url(); ?>">HOME</a></li>
								<li><a href="<?php echo home_url(); ?>/propertylist">土地を買いたい</a></li>
								<li><a href="<?php echo home_url(); ?>/housing/正木町コンセプトハウス-ch-f2">住宅を買いたい</a></li>
								<li><a href="<?php echo home_url(); ?>/sell">不動産を売りたい</a></li>
								<li><a href="<?php echo home_url(); ?>/consult">マイホームをお得に建てよう！</a></li>
							</ul>
							<ul>
								
								<li><a href="<?php echo home_url(); ?>/propertylist?sec02">土地ご購入の流れ</a></li>
								<li><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
								<li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
								<li><a href="<?php echo home_url(); ?>/category/diary/">ブログ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="navPanel02">
					<div class="leftBox">
						<div class="logo"><img src="<?php bloginfo('template_url'); ?>/image/common/nav_logo.png" alt=""></div>
						<div class="info">
							<div class="txt">
								<p>〒501-6251　羽島市福寿町間島3丁目90-2</p>
								<p>
									<a href="tel:0583227891">TEL：058-322-7891</a>
								</p>
								<p>
									E-mail：<a href="mailto:716@nanairo.email" class="email">716@nanairo.email</a>
								</p>
								<p>受付時間：9:00～18:00</p>
								<p>定休日：水・木・第4土曜日</p>
							</div>
						</div>
					</div>
					<div class="rightBox">
						<div class="contactItem">
							<div class="reserveBox">
								<dl>
									<dt>24時間お手軽WEB予約</dt>
									<dd><a href="https://airrsv.net/nanairo-estate/calendar" target="_blank" rel="noopener"> ご来店予約はこちらから</a></dd>
								</dl>
							</div>
							<div class="telBox">
								<dl>
									<dt>お電話でのお問い合わせ</dt>
									<dd><a href="tel:0120990716">0120-990-716</a></dd>
								</dl>
							</div>
							<div class="mailBox">
								<dl>
									<dt>メールで相談してみる</dt>
									<dd><a href="<?php echo home_url(); ?>/contact"><span>メールフォーム</span></a></dd>
								</dl>
							</div>
						</div>
						<div class="insta"><a href="https://www.instagram.com/nanairo.estate/?hl=ja" target="_blank" rel="noopener">七いろ不動産（Instagram）</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="hamburger"><span></span><span></span><span></span></div>
		<div class="sideReserve">
			<a href="https://airrsv.net/nanairo-estate/calendar" target="_blank" rel="noopener">
				<?php if (is_singular('housing')) : ?>
					<img src="<?php bloginfo('template_url'); ?>/image/common/btn_side_reserve_housing.png" alt="分譲住宅予約">
				<?php else : ?>
					<img src="<?php bloginfo('template_url'); ?>/image/common/btn_side_reserve.png" alt="来場予約">
				<?php endif; ?>
			</a>
		</div>
	</header>
	<!-- △header△-->