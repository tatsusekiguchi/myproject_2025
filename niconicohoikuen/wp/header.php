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
	<link rel="stylesheet" media="screen and (max-width: 1139px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/common_sp.css">
	<link rel="stylesheet" media="screen and (max-width: 1139px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout_sp.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/attach.css">
	<!-- js-->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/infiniteslide.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scrollAnimation.js"></script>
	<script>
		(function(d) {
			var config = {
					kitId: 'vpc8luc',
					scriptTimeout: 3000,
					async: true
				},
				h = d.documentElement,
				t = setTimeout(function() {
					h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function() {
				a = this.readyState;
				if (f || a && a != "complete" && a != "loaded") return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (e) {}
			};
			s.parentNode.insertBefore(tk, s)
		})(document);
	</script>
	<!-- title-->
	<title>
		<?php if(is_home()): ?>
			六軒niconico保育園
		<?php else: ?>
		<?php wp_title(''); ?>｜六軒niconico保育園
		<?php endif; ?>
	</title>
</head>

<body>
	<!-- ▽header▽-->
	<header class="header">
		<div class="headWrap">
			<div class="logoBox">
				<div class="logo"><a href="<?php echo home_url(); ?>"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/common/header_logo_pc.png" alt=""></a></div>
			</div>
			<div class="navBox">
				<div class="navContainer">
					<div class="navInner">
						<div class="navList">
							<?php if ( is_front_page() || is_home() ) : ?>
								<ul class="pagingList">
									<li><a href="#section__feature">園の特徴</a></li>
									<li><a href="#section__flow">1日の流れ</a></li>
									<li><a href="#section__facility">施設紹介</a></li>
									<li><a href="#section__overview">アクセス</a></li>
								</ul>
							<?php else: ?>
								<ul class="pagingList">
									<li><a href="<?php echo home_url(); ?>#section__feature">園の特徴</a></li>
									<li><a href="<?php echo home_url(); ?>#section__flow">1日の流れ</a></li>
									<li><a href="<?php echo home_url(); ?>#section__facility">施設紹介</a></li>
									<li><a href="<?php echo home_url(); ?>#section__overview">アクセス</a></li>
								</ul>
							<?php endif; ?>
						</div>
						<div class="navClose"><img src="<?php bloginfo('template_url'); ?>/image/common/nav_close.png" alt=""></div>
						<div class="navItem">
							<div class="instaLink"><a href="https://www.instagram.com/rokken.niconicohoikuen/" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/common/nav_insta.png" alt=""></a></div>
						</div>
						<div class="navFooter">
							<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/common/nav_footer_bg.png" alt=""></div>
							<dl class="Outfit">
								<dt>Rokken niconico<br>Nursery School</dt>
								<dd>3-3, Midorimachi, <br>Sohara, Kakamigahara-shi, <br>Gifu 504-0902, Japan</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hamburger"><img src="<?php bloginfo('template_url'); ?>/image/common/header_menu.png" alt=""></div>
	</header>
	<!-- △header△-->