<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
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
					kitId: 'jyl2ibs',
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
			なごや遊花幼稚園
		<?php else: ?>
		<?php wp_title(''); ?>｜なごや遊花幼稚園
		<?php endif; ?>
	</title>
	<?php WP_head();?>
</head>

<body>
	<!-- ▽header▽-->
	<header class="header">
		<div class="headWrap">
			<div class="logoBox">
				<div class="logo logoNormal"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/image/common/header_logo.png" alt=""></a></div>
				<div class="logo logoWhite"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/image/common/header_logo_white.png" alt=""></a></div>
				<p class="poppins">Nagoya yuuka<br>kodomoen</p>
			</div>
			<div class="navBox">
				<div class="navList">
					<ul>
						<li class="<?php if (is_page('about')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/about">園について</a>
						</li>
						<li class="<?php if (is_page('newslist')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/newslist">お知らせ</a>
						</li>
						<li class="<?php if (is_page('guide')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/guide">入園案内</a>
						</li>
						<li class="<?php if (is_page('visit')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/visit">見学案内</a>
						</li>
						<li class="<?php if (is_page('support')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/support">0歳からの子育てサポート</a>
						</li>
						<li class="<?php if (is_page('entry')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/entry">見学申し込み</a>
						</li>
						<li class="<?php if (is_page('recruit')) echo 'current'; ?>">
							<a href="<?php echo home_url(); ?>/recruit">採用情報</a>
						</li>
					</ul>
				</div>
				<div class="bnrList">
					<ul>
						<?php $guide_pdf = get_field('guide_pdf', 17); ?>
						<?php if( $guide_pdf ): ?>
							<li>
								<a href="<?php echo esc_url($guide_pdf['url']); ?>" target="_blank" download>
									<img src="<?php bloginfo('template_url'); ?>/image/common/nav_bnr_guide.png" alt="入園案内PDF">
								</a>
							</li>
						<?php endif; ?>

						<?php $recruitment_pdf = get_field('recruitment_pdf', 17); ?>
						<?php if( $recruitment_pdf ): ?>
							<li>
								<a href="<?php echo esc_url($recruitment_pdf['url']); ?>" target="_blank" download>
									<img src="<?php bloginfo('template_url'); ?>/image/common/nav_bnr_recruit.png" alt="募集要項PDF">
								</a>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="hamburger"><span></span><span></span></div>
	</header>
	<!-- △header△-->