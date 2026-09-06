<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="名古屋の肌質改善サロンmieux(ミュー)">
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
					kitId: 'fmx6ynq',
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
			肌質改善サロンmieux(ミュー) ｜栄に本店がある名古屋の肌質改善専門サロン
		<?php else: ?>
		<?php wp_title(''); ?>｜名古屋の肌質改善サロンmieux(ミュー)
		<?php endif; ?>
	</title>
	<?php wp_head(); ?>
</head>

<body>
	<!-- ▽header▽-->
	<header class="header">
		<div class="headWrap">
			<div class="headTtl">
				<p>ファンデーションで隠さない <br class="spBreak">よりよい、自分へ。</p>
			</div>
			<div class="leftIcon navOpen"></div>
			<a class="rightIcon" href="<?php echo home_url(); ?>"></a>
		</div>
		<div class="navBox">
			<div class="navHead">
				<div class="leftIcon navClose"><img src="<?php bloginfo('template_url'); ?>/image/common/nav_close.png" alt=""></div>
				<div class="rightIcon navClose">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php bloginfo('template_url'); ?>/image/common/header_icon_right_01.png" alt="">
					</a>
				</div>
			</div>
			<div class="navBody">
				<div class="navContainer">
					<div class="leftPanel">
						<div class="navList">
							<ul>
							<li><a href="<?php echo is_front_page() ? '#section__concept' : home_url('/#section__concept'); ?>"><em>Concept</em><span>コンセプト</span></a></li>
							<li><a href="<?php echo is_front_page() ? '#section__commitment' : home_url('/#section__commitment'); ?>"><em>Commitments</em><span>サロンのこだわり</span></a></li>
							<li><a href="<?php echo home_url('/salonlist'); ?>"><em>Salon List</em><span>全国のサロン一覧</span></a></li>
							<li><a href="<?php echo is_front_page() ? '#section__menu' : home_url('/#section__menu'); ?>"><em>Menu</em><span>メニュー</span></a></li>
							<li><a href="<?php echo is_front_page() ? '#section__flow' : home_url('/#section__flow'); ?>"><em>Flow</em><span>施術の流れ</span></a></li>
							<li><a href="<?php echo is_front_page() ? '#section__program' : home_url('/#section__program'); ?>"><em>Program</em><span>mieuxの肌質改善プログラム</span></a></li>
							<li><a href="<?php echo home_url('/company'); ?>"><em>Company</em><span>会社概要</span></a></li>
							<li><a href="<?php echo is_front_page() ? '#section__faq' : home_url('/#section__faq'); ?>"><em>FAQ</em><span>よくある質問</span></a></li>
							</ul>
						</div>
					</div>
					<div class="rightPanel">
						<div class="navList">
							<ul>
								<li><a href="<?php echo home_url(); ?>/salonlist"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/common/nav_link_img_01_pc.png" alt=""></a></li>
								<li><a href="<?php echo home_url(); ?>/contact"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/common/nav_link_img_02_pc.png" alt=""></a></li>
								<li><a href="#"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/common/nav_link_img_03_pc.png" alt=""></a></li>
								<li><a href="<?php echo home_url(); ?>/product"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/common/nav_link_img_04_pc.png" alt=""></a></li>
							</ul>
						</div>
						<div class="bottomBox">
							<div class="logo"><img src="<?php bloginfo('template_url'); ?>/image/common/nav_logo.png" alt=""></div>
							<div class="info">
								<div class="txt">
									<p>Being beautiful creates smiles.<br>Through beauty, we enable our clients to feel happiness and confidence<br>not only from the outside. but also from the inside.<br>We will continue to be a group of artists who can provide such an experience.</p>
								</div>
								<div class="copyBox">
									<div class="copy">
										<p>Copyright &copy; YORI Co., Ltd all rights reserved.</p>
									</div>
									<div class="privacy"><a href="<?php echo home_url(); ?>/privacy">プライバシーポリシー</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fixedNavBox">
			<ul>
				<li><a href="<?php echo home_url(); ?>/salonlist">Salon List</a></li>
				<li><a href="<?php echo home_url(); ?>/product">Online Store</a></li>
			</ul>
		</div>
	</header>
	<!-- △header△-->