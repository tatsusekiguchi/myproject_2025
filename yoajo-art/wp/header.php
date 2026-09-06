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
	 <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
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
	<script src="<?php bloginfo('template_url'); ?>/js/lightbox.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scrollAnimation.js"></script>
	<!-- title-->
	<title>
		<?php if(is_home()): ?>
			楊 アジョ|YANG YASHU
		<?php else: ?>
		<?php wp_title(''); ?>|楊 アジョ|YANG YASHU
		<?php endif; ?>
	</title>
	<?php wp_head(); ?>
</head>

<body id="top">
	<!-- ▽header▽-->
	<header class="header">
		<div class="headWrap">
			<div class="logo"><a href="<?php echo home_url(); ?>"><img src="https://yoajo-art.com/wp-content/uploads/2025/09/header_logo.png" alt=""></a></div>
			<nav class="navBox">
				<div class="navList">
					<ul>
						<li><a href="<?php echo home_url(); ?>/gallerylist">Gallery</a></li>
						<li><a href="<?php echo home_url(); ?>/profile">Profile</a></li>
						<li><a href="<?php echo home_url(); ?>/newslist">News</a></li>
						<li><a href="https://yoajo.base.shop/" target="_blank" rel="noopener">Online Shop</a></li>
						<li>
							<a href="<?php echo is_front_page() ? '#contact' : home_url( '/#contact' ); ?>">
								Contact
							</a>
						</li>
					</ul>
				</div>
				<div class="navItem">
					<ul>
						<li><a href="https://www.instagram.com/youajyo/" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/common/header_insta.png" alt=""></a></li>
						<li><a href="https://line.me/ti/p/0jVpeZ-qhR" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/common/header_line.png" alt=""></a></li>
					</ul>
				</div>
				<div class="headItem">
					<div class="language">
						<div class="languageLink"><a href="https://translate.google.com/translate?sl=ja&tl=en&u=https://yoajo-art.com/" rel="noopener" target="_blank">EN</a></div><span>/</span>
						<div class="languageLink"><a href="<?php echo home_url(); ?>/zh">CN</a></div><span>/</span>
						<div class="languageLink"><a href="https://yoajo-art.com" rel="noopener">JA</a></div>
					</div>
					<div class="volumeBox">
						<div class="volume on">ON</div><span>/</span>
						<div class="volume off">OFF</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="hamburger"><span></span><span></span><span></span></div>
	</header>
	<!-- △header△-->