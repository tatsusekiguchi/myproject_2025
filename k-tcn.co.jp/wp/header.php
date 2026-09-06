<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<?php if(is_home()): ?>
	<meta name="description" content="愛知県大府市の共和テクニカルでは、椅子・ソファなど家具の張り替え修理から完全オーダーメイド製作まで、すべて自社の職人の手で行っております。病院や医療施設・飲食店から寺院まで幅広いニーズに完全対応致します。">
	<meta name="keywords" content="共和テクニカル,愛知県,名古屋,椅子,ソファ,張り替え,修理,大府,オーダーメイド,家具,飲食店,病院,医療,寺院">
	<?php elseif(is_page('about')): ?>
	<meta name="description" content="愛知県大府市の共和テクニカル株式会社が誇りにしている、私たちならではの強みをご紹介いたします。椅子・ソファなど家具の張り替え修理から完全オーダーメイド製作まで、すべて自社の職人の手で行っております。病院や医療施設・飲食店から寺院まで幅広いニーズに完全対応致します。">
	<meta name="keywords" content="特徴,共和テクニカル,愛知県,名古屋,椅子,ソファ,張り替え,修理,大府,オーダーメイド,家具,飲食店,病院,医療,寺院">
	<?php elseif(is_page('company')): ?>
	<meta name="description" content="愛知県大府市の共和テクニカル株式会社を紹介いたします。椅子・ソファなど家具の張り替え修理から完全オーダーメイド製作まで、すべて自社の職人の手で行っております。病院や医療施設・飲食店から寺院まで幅広いニーズに完全対応致します。">
	<meta name="keywords" content="会社概要,共和テクニカル,愛知県,名古屋,椅子,ソファ,張り替え,修理,大府,オーダーメイド,家具,飲食店,病院,医療,寺院">
	<?php elseif(is_page('newslist')): ?>
	<meta name="description" content="愛知県大府市の共和テクニカル株式会社からのお知らせ、施工事例などをご覧いただけます。">
	<meta name="keywords" content="施工事例,お知らせ,スタッフ,ブログ,共和テクニカル,愛知県,名古屋,椅子,ソファ,張り替え,修理,大府,オーダーメイド,家具,飲食店,病院,医療,寺院">
	<?php elseif(is_page('caselist')): ?>
	<meta name="description" content="愛知県大府市の共和テクニカル株式会社からのお知らせ、施工事例などをご覧いただけます。">
	<meta name="keywords" content="施工事例,お知らせ,スタッフ,ブログ,共和テクニカル,愛知県,名古屋,椅子,ソファ,張り替え,修理,大府,オーダーメイド,家具,飲食店,病院,医療,寺院">
	<?php elseif(is_category()): ?>
	<meta name="description" content="愛知県大府市の共和テクニカル株式会社からのお知らせ、施工事例などをご覧いただけます。">
	<meta name="keywords" content="施工事例,お知らせ,スタッフ,ブログ,共和テクニカル,愛知県,名古屋,椅子,ソファ,張り替え,修理,大府,オーダーメイド,家具,飲食店,病院,医療,寺院">
	<?php elseif(is_single()): ?>
	<meta name="description" content="愛知県大府市の共和テクニカル株式会社からのお知らせ、施工事例などをご覧いただけます。">
	<meta name="keywords" content="施工事例,お知らせ,スタッフ,ブログ,共和テクニカル,愛知県,名古屋,椅子,ソファ,張り替え,修理,大府,オーダーメイド,家具,飲食店,病院,医療,寺院">
	<?php elseif(is_page('contact')): ?>
	<meta name="description" content="愛知県大府市の共和テクニカル株式会社からへのお見積り、お問い合わせはこちらのページからお願いします。">
	<meta name="keywords" content="見積,お問い合わせ,共和テクニカル,愛知県,名古屋,椅子,ソファ,張り替え,修理,大府,オーダーメイド,家具,飲食店,病院,医療,寺院">
	<?php endif; ?>
	<!-- css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/common_sp.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout_sp.css">
	<!-- js-->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>

	<!-- title-->
	<title>
    <?php if(is_home()): ?>
    <?php bloginfo('name'); ?>
    <?php else: ?>
    <?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?>
    <?php endif; ?>
    </title>
    <?php wp_head(); ?>	
</head>

<body>
	<!-- ▽header▽-->
	<header>
		<div class="headBox">
			<div class="logo"><a href="<?php echo home_url() ?>/"><img src="<?php echo get_template_directory_uri(); ?>/image/common/logo.png" alt="共和テクニカル"></a></div>
			<div id="menuBtn"><span></span><span></span><span></span></div>
			<nav>
				<ul>
					<li><a href="<?php echo home_url() ?>/about/"><em>共和テクニカルについて</em><span>about</span></a></li>
					<li><a href="<?php echo home_url() ?>/caselist/"><em>制作事例</em><span>cases</span></a></li>
					<li><a href="<?php echo home_url() ?>/company/"><em>会社概要</em><span>company</span></a></li>
					<li><a href="<?php echo home_url() ?>/newslist/"><em>お知らせ</em><span>news</span></a></li>
					<li class="contact"><a href="<?php echo home_url() ?>/contact/"><em>御見積・お問い合わせ</em><span>contact</span></a></li>
				</ul>
			</nav>
		</div>
		<a class="headContact" href="<?php echo home_url() ?>/contact/">
			<div><span>御見積・お問い合わせ</span></div>
		</a>
	</header>
	<!-- △header△-->