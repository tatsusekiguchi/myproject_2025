<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
	<meta name="keywords" content="<?php bloginfo('template_url'); ?>/">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/image/favicon.ico">
	<!--OGP-->
	<meta property="og:title" content="輝く舞台をデザインする サロン設計・開業サポート”｜ATELIER OU" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://atelier-ou.jp" />
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/image/ogp.jpg" />
	<meta property="og:site_name" content="輝く舞台をデザインする サロン設計・開業サポート”｜ATELIER OU" />
	<meta property="og:description" content="" />
	<!-- css-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css?ver=<?php echo time(); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css?ver=<?php echo time(); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css?ver=<?php echo time(); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css?ver=<?php echo time(); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css?ver=<?php echo time(); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css?ver=<?php echo time(); ?>">
	<link rel="stylesheet" media="screen and (max-width: 1139px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/common_sp.css?ver=<?php echo time(); ?>">
	<link rel="stylesheet" media="screen and (max-width: 1139px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout_sp.css?ver=<?php echo time(); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/attach.css?ver=<?php echo time(); ?>">
	<!-- js-->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js?ver=<?php echo time(); ?>"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js?ver=<?php echo time(); ?>"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/infiniteslide.js?ver=<?php echo time(); ?>"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js?ver=<?php echo time(); ?>"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scrollAnimation.js?ver=<?php echo time(); ?>"></script>
	<script>
		(function(d) {
			var config = {
					kitId: 'hla5pnl',
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
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<body id="top">
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
				<div class="insta"><a href="https://www.instagram.com/atelierou_design?igsh=MTZsdGNvZTFkbHJpOQ%3D%3D&utm_source=qr" target="_blank" rel="noopener">INSTAGRAM</a></div>
				<div class="contact"><a href="#section__contact"><span>お問い合わせ</span></a></div>
			</div>
		</div>
	</header>
	<!-- △header△-->
	<!-- ▽メイン▽-->
	<main id="top">
		<div id="loading">
			<div id="loading__image"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_logo.png" alt=""></div>
			<div id="loading__progress">
				<div class="progress-bar"></div>
			</div>
		</div>
		<div class="topKvPanel">
			<div class="topKvPanel__left">
				<div class="kv01"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_01.jpg" alt=""></div>
				<div class="logo"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_logo.png" alt=""></div>
			</div>
			<div class="topKvPanel__right">
				<div class="kv02 kvSlider">
					<img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_02_1.jpg" alt="">
					<img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_02_2.jpg" alt="">
					<img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_02_3.jpg" alt="">
					<img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_02_4.jpg" alt="">
				</div>
				<div class="textPanel">
					<p class="loop01">Designing a stage to shine, Store and Space Design.</p>
					<p class="loop02">Designing a stage to shine, Store and Space Design.</p>
				</div>
				<div class="kv03 kvSlider">
					<img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_03_1.jpg" alt="">
					<img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_03_2.jpg" alt="">
					<img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_03_3.jpg" alt="">
					<img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_03_4.jpg" alt="">
				</div>
			</div>
			<div class="kvScroll">
				<p>SCROLL DOWN</p>
			</div>
			<div class="kvTitle">
				<p>輝く舞台をデザインする<br>サロン設計・開業サポート</p>
			</div>
		</div>
		<div class="navigationPanel">
			<ul>
				<li><a href="#section__concept">⚫︎ CONCEPT</a></li>
				<li><a href="#section__voice">⚫︎ VOICE</a></li>
				<li><a href="#section__flow">⚫︎ FLOW</a></li>
			</ul>
		</div>
		<div id="section__concept">
			<div class="mvContainer">
				<div class="secWrap">
					<div class="secBox">
						<div class="ttlBox">
							<h2>CONCEPT<br>US</h2>
						</div>
						<div class="txtBox">
							<div class="subTtl">
								<h3>サロンの「顔」を創る<br>パートナー</h3>
							</div>
							<div class="txt">
								<p>ATELIER OUは確かなサロン設計の知識と、<br>アトリエ（工房）としてのクリエイティブなエネルギーを融合させた空間デザインブランドです。</p>
								<p>サロンの内装やブランディングにおいて、<br>私たちが創るのは単なる「場所」ではありません。<br>そのサロンを象徴する「顔」、そしてブランドとしての「人格」です。</p>
								<p>そのサロンがどのような人生を歩んでいくのか。<br>私たちは、そのアイデンティティを築くパートナーとして寄り添い、<br>長く愛されるサロン作りをお手伝いしています。</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="subContainer">
				<div class="secWrap01">
					<div class="secBox">
						<div class="photoList">
							<ul>
								<li><img src="<?php bloginfo('template_url'); ?>/image/top/concept_photo_01.jpg" alt=""></li>
								<li><img src="<?php bloginfo('template_url'); ?>/image/top/concept_photo_02.jpg" alt=""></li>
								<li><img src="<?php bloginfo('template_url'); ?>/image/top/concept_photo_03.jpg" alt=""></li>
								<li><img src="<?php bloginfo('template_url'); ?>/image/top/concept_photo_04.jpg" alt=""></li>
							</ul>
						</div>
						<div class="txtBox">
							<div class="txt">
								<p>Designing a stage to shine,<br>Store and Space Design.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="section__points">
			<div class="progressBox progressBox--sticky">
				<div class="progressbar"></div>
			</div>
			<div class="pointsContainer">
				<div class="pointsPanel">
					<div class="photoBox">
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/points_photo_01.jpg" alt=""></div>
					</div>
					<div class="txtBox">
						<div class="txtBox__inner">
							<div class="secTtl">
								<h2>OU POINTS<br>IS</h2>
							</div>
							<div class="numBox">
								<div class="num">
									<p>01</p>
								</div>
								<div class="ttl">
									<p>STOR AND<br>SPACE DESIGN.</p>
								</div>
								<div class="pager">
									<div class="prev"><img src="<?php bloginfo('template_url'); ?>/image/top/points_prev.png" alt=""></div>
									<div class="next"><img src="<?php bloginfo('template_url'); ?>/image/top/points_next.png" alt=""></div>
								</div>
							</div>
							<dl>
								<dt>機能性と<br>デザインの融合</dt>
								<dd>美容室では、お客様に心地よい時間を提供するためのデザインと、働くスタッフが快適に動ける機能性の両方が求められます。ATELIER OUは、これまでの豊富な施工経験を活かし、動線やレイアウトを計算し尽くした設計を提案。椅子の間隔、シャンプー台の配置、照明の明るさまで、細部にこだわりながら、洗練された空間を作り上げます。</dd>
							</dl>
							<div class="progressBox">
								<div class="progressbar progressbar--01"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="pointsPanel">
					<div class="photoBox">
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/points_photo_02.jpg" alt=""></div>
					</div>
					<div class="txtBox">
						<div class="txtBox__inner">
							<div class="secTtl">
								<h2>OU POINTS<br>IS</h2>
							</div>
							<div class="numBox">
								<div class="num">
									<p>02</p>
								</div>
								<div class="ttl">
									<p>Store and<br>Space Design.</p>
								</div>
								<div class="pager">
									<div class="prev"><img src="<?php bloginfo('template_url'); ?>/image/top/points_prev.png" alt=""></div>
									<div class="next"><img src="<?php bloginfo('template_url'); ?>/image/top/points_next.png" alt=""></div>
								</div>
							</div>
							<dl>
								<dt>引き渡しまで連携の取れた<br>フォローアップ体制</dt>
								<dd>ATELIER OUが土地探しのお手伝いから設計、施工まで一貫して対応。<br>すべての工程を自社で管理するため、スムーズな連携とスピード感のある施工が特徴です。</dd>
							</dl>
							<div class="progressBox">
								<div class="progressbar progressbar--02"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="pointsPanel">
					<div class="photoBox">
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/points_photo_03.jpg" alt=""></div>
					</div>
					<div class="txtBox">
						<div class="txtBox__inner">
							<div class="secTtl">
								<h2>OU POINTS<br>IS</h2>
							</div>
							<div class="numBox">
								<div class="num">
									<p>03</p>
								</div>
								<div class="ttl">
									<p>Store and<br>Space Design.</p>
								</div>
								<div class="pager">
									<div class="prev"><img src="<?php bloginfo('template_url'); ?>/image/top/points_prev.png" alt=""></div>
									<div class="next"><img src="<?php bloginfo('template_url'); ?>/image/top/points_next.png" alt=""></div>
								</div>
							</div>
							<dl>
								<dt>コミュニケーションがとりやすい<br>施工パートナー</dt>
								<dd>お客様のご要望を親身に聞き、施工にダイレクトに反映。「こうしたい」「もう少し調整したい」 という細かなご希望にも、スピーディーかつ柔軟に対応します。また、Atelier OUは現場との距離が近いため、通常なら数日かかるような調整も、その場で即対応が相談可能。細かな部分までしっかり話し合える環境で、理想の施工を実現します。</dd>
							</dl>
							<div class="progressBox">
								<div class="progressbar progressbar--03"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="pointsPanel">
					<div class="photoBox">
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/points_photo_04.jpg" alt=""></div>
					</div>
					<div class="txtBox">
						<div class="txtBox__inner">
							<div class="secTtl">
								<h2>OU POINTS<br>IS</h2>
							</div>
							<div class="numBox">
								<div class="num">
									<p>04</p>
								</div>
								<div class="ttl">
									<p>Store and<br>Space Design.</p>
								</div>
								<div class="pager">
									<div class="prev"><img src="<?php bloginfo('template_url'); ?>/image/top/points_prev.png" alt=""></div>
									<div class="next"><img src="<?php bloginfo('template_url'); ?>/image/top/points_next.png" alt=""></div>
								</div>
							</div>
							<dl>
								<dt>長く続く信頼関係<br>安心のアフターサポート</dt>
								<dd>一度の施工で終わりではなく、Atelier OUはアフターフォローまでしっかり対応。施工後のメンテナンスや改装の相談にも柔軟に応じ、「施工が終わったら関係も終わり」ではなく、「ずっと頼れる存在」であり続けることを大切にしています。<br>また、店舗の成長に合わせて、改装や新店舗の相談もお気軽にご相談いただけます。これまでの施工を理解しているからこそ、スムーズかつ的確な提案が可能です。</dd>
							</dl>
							<div class="progressBox">
								<div class="progressbar progressbar--04"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="section__support">
			<div class="supportContainer">
				<div class="supportHeader">
					<div class="secWrap01">
						<div class="secBox">
							<div class="secTtl">
								<h2>OUR SUPPORT</h2>
							</div>
							<div class="txtBox">
								<dl>
									<dt>サロン作りのすべてをATELIER OUがサポート</dt>
									<dd>構想段階からお越しいただいて構いません。一緒に理想のサロンづくりを実現していきましょう。<br>設計・施工はもちろん、融資のご相談、物件探し、立地分析も行います。</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
				<div class="supportBody">
					<div class="secWrap">
						<div class="listPanel">
							<ul>
								<li>
									<p>オール<br>プランニング</p>
								</li>
								<li>
									<p>物件探し<br>相談</p>
								</li>
								<li>
									<p>資金<br>融資相談</p>
								</li>
								<li>
									<p>店舗デザイン<br>施工</p>
								</li>
								<li>
									<p>集客PR<br>販促</p>
								</li>
								<li class="last">
									<p>Designing a stage to shine,<br>Store and Space Design.</p>
								</li>
							</ul>
						</div>
						<div class="photoPanel">
							<div class="leftBox">
								<div class="photo01"><img src="<?php bloginfo('template_url'); ?>/image/top/support_photo_01.jpg" alt=""></div>
							</div>
							<div class="rightBox">
								<div class="photo02"><img src="<?php bloginfo('template_url'); ?>/image/top/support_photo_02.jpg" alt=""></div>
								<div class="photo03"><img src="<?php bloginfo('template_url'); ?>/image/top/support_photo_03.jpg" alt=""></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="supportMv"><img src="<?php bloginfo('template_url'); ?>/image/top/support_mv.jpg" alt=""></div>
		</div>
		<div id="section__voice">
			<div class="voiceContainer">
				<div class="voiceHeader">
					<div class="secWrap01">
						<div class="secBox">
							<div class="secTtl">
								<h2>VOICE BY</h2>
							</div>
							<div class="txtBox">
								<dl>
									<dt>INTERVIEW</dt>
									<dd>あなたがATELEIR OUを選んだ理由を教えてください。</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
				<div class="voiceBody">
					<div class="secPanel01">
						<div id="voice1" class="secBox">
							<div class="photoBox">
								<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/top/voice_intro_photo_01_pc.png" alt=""></div>
								<div class="more voiceModalOpen" data-modal-id="modal1">
									<p>MORE INTERVIEW</p>
								</div>
							</div>
							<div class="ttlBox">
								<dl>
									<dt><em>MUSEE</em><span>ミュゼ｜36.33坪</span></dt>
									<dd>「スタッフの成長」が、店舗展開の理由です。<br>─ 人が育つたびに広がる、のびのびと働ける場所づくり</dd>
								</dl>
							</div>
						</div>
						<div id="voice2" class="secBox">
							<div class="photoBox">
								<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/top/voice_intro_photo_02_pc.png" alt=""></div>
								<div class="more voiceModalOpen" data-modal-id="modal2">
									<p>MORE INTERVIEW</p>
								</div>
							</div>
							<div class="ttlBox">
								<dl>
									<dt><em>MUSEE</em><span>ミュゼ｜36.33坪</span></dt>
									<dd>“自然光あふれる癒しの空間へ”<br>──新しい店舗デザインのこだわり”</dd>
								</dl>
							</div>
						</div>
					</div>
					<div class="secPanel01">
						<div id="voice3" class="secBox">
							<div class="photoBox">
								<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/top/voice_intro_photo_03_pc.png" alt=""></div>
								<div class="more voiceModalOpen" data-modal-id="modal3">
									<p>MORE INTERVIEW</p>
								</div>
							</div>
							<div class="ttlBox">
								<dl>
									<dt><em>Shin Kafune</em><span>シン カフネ｜42.14坪</span></dt>
									<dd>笑顔が集まる場所”に、ふさわしい品格を。<br>─大人世代に寄り添いながら、家族のように迎える空間づくり</dd>
								</dl>
							</div>
						</div>
						<div id="voice4"  class="secBox">
							<div class="photoBox">
								<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/top/voice_intro_photo_04_pc.png" alt=""></div>
								<div class="more voiceModalOpen" data-modal-id="modal4">
									<p>MORE INTERVIEW</p>
								</div>
							</div>
							<div class="ttlBox">
								<dl>
									<dt><em>SOMEDAY Lx</em><span>サムデイルクス｜36.02坪</span></dt>
									<dd>明るさと上質を両立する空間へ─</dd>
								</dl>
							</div>
						</div>
					</div>
					<div class="secPanel01">
						<div id="voice5" class="secBox">
							<div class="photoBox">
								<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/top/voice_intro_photo_05_pc.png" alt=""></div>
								<div class="more voiceModalOpen" data-modal-id="modal5">
									<p>MORE INTERVIEW</p>
								</div>
							</div>
							<div class="ttlBox">
								<dl>
									<dt><em>Voasorte</em><span>ボアソルヂェ｜64.7坪</span></dt>
									<dd>リゾートの非日常を日常に─</dd>
								</dl>
							</div>
						</div>
						<div class="secBox secBoxBg">
							<div class="photoBox">
								<div class="photo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/top/voice_intro_logo_bg_pc.png" alt=""></div>
							</div>
							<div class="logoBox">
								<div class="logoBox__inner">
									<div class="logo"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/top/voice_logo_pc.png" alt=""></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="voiceItemOverlay overlay"></div>
			<div class="itemModalContainer">
				<div class="voiceItemModal itemModal" data-modal="modal1">
					<div class="modalBox">
						<div class="modalBoxInner">
							<div class="photoPanel">
								<div class="mvBox">
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_1_1.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_1_2.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_1_3.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_1_4.jpg" alt=""></div>
								</div>
								<div class="photoList">
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_1_1.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_1_2.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_1_3.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_1_4.jpg" alt=""></div>
								</div>
							</div>
							<div class="detailPanel">
								<div class="staffBox">
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_staff_01.png" alt=""></div>
									<dl>
										<dt>MUSEE オーナー</dt>
										<dd>村瀬 隆浩さん</dd>
									</dl>
								</div>
								<div class="commentBox">
									<dl>
										<dt><span>── Atelier OUとの出会い</span></dt>
										<dd>
											<p>「Atelier OUさんとは、知人のディーラーさんにどこの施工会社が良いか相談したのがきっかけです。当時、あまり資金に余裕がなかったこともあり、紹介されたAtelier OUさんにお願いしました。それ以来、ずっとお世話になっています。」</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── 施工会社としての信頼感</span></dt>
										<dd>
											<p>Atelier OUさんは柔軟にこちらの要望を聞いてくれます。私自身、建築が好きで、店内の雰囲気などにはこだわりがあります。でも、施工会社側のこだわりが強すぎると意見がぶつかってしまうこともありますよね。その点、Atelier OUさんは私の考えを汲み取ってくれて、柔軟に対応してくれるのでとても信頼しています。」</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── 美容室のデザインとAtelier OUの強み</span></dt>
										<dd>
											<p>「美容室のデザインでは、トレンドを取り入れつつも、長く使えるデザインにすることを意識しています。流行を追いすぎるとすぐに古くなってしまうこともあるので、Atelier OUさんと相談しながら、時代に流されないおしゃれな空間づくりを心がけています。また、Atelier OUさんはこれまで多くの美容室を手掛けているので、動線設計などのノウハウが豊富です。椅子の間隔やシャンプー台の配置、照明の明るさなど、細かい部分を安心して任せられるのも大きな魅力ですね。」</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── スタッフの成長を支える店舗作り</span></dt>
										<dd>
											<p>「私たちの店舗展開の目的は、多店舗経営ではなく、スタッフの成長に合わせた環境を作ることです。スタッフが育ってくると、今の店舗では手狭になることもあるので、そのタイミングで新しい店舗を作るようにしています。単に店舗を増やしたいわけではなく、スタッフがのびのびと働ける環境を提供するために、必要に応じて新しい店舗を作っているんです。」</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── これからも続く信頼関係</span></dt>
										<dd>
											<p>「Atelier OUさんとは長い付き合いですが、これからも一緒により良いお店作りをしていきたいと思っています。施工だけでなく、アフターフォローもしっかりしてくれるので、非常に頼りになるパートナーですね。」</p>
										</dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="modalClose"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_modal_close.png" alt=""></div>
					</div>
				</div>
				<div class="voiceItemModal itemModal" data-modal="modal2">
					<div class="modalBox">
						<div class="modalBoxInner">
							<div class="photoPanel">
								<div class="mvBox">
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_2_1.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_2_2.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_2_3.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_2_4.jpg" alt=""></div>
								</div>
								<div class="photoList">
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_2_1.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_2_2.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_2_3.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_2_4.jpg" alt=""></div>
								</div>
							</div>
							<div class="detailPanel">
								<div class="staffBox">
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_staff_02.png" alt=""></div>
									<dl>
										<dt>MUSEE 店長</dt>
										<dd>井上 美穂さん</dd>
									</dl>
								</div>
								<div class="commentBox">
									<dl>
										<dt><span>“自然光あふれる癒しの空間へ”<br>──新しい店舗デザインのこだわり”</span></dt>
										<dd>
											<p>「「これまでの店舗って、光があまり入らなくて、ちょっと落ち着いた雰囲気だったんですよね。でも、今ってお客様が『癒されたい』とか『明るくなりたい』っていう気持ちで来店されることが多くて。それなら、自然光がたっぷり入るお店にしたら、もっとリフレッシュできるんじゃないかなって思ったんです。」</p>
											<p>「それに、スタッフもSNSとか写真の写りをすごく気にするんですよ。せっかく可愛い髪色やヘアスタイルに仕上げても、写真にうまく映らなかったらもったいないじゃないですか！だから、お客様が心地よく過ごせるだけじゃなくて、スタッフも楽しく働ける空間を作りたくて。そういう思いでデザインを考えました。」</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── 店内のデザインはどのように決めたんですか？</span></dt>
										<dd>
											<p>「やっぱり白を基調にしたくて！でも、ただの白じゃなくて、ちょっとカッコよさも欲しくてコンクリート調を取り入れたんです。ただ、暗くなりすぎるのは嫌だったので、モルタル部分は少し明るめにしてもらいました。デザイナーさんがすごくいい提案をしてくれて、シンプルだけどオシャレな感じに仕上がったと思います！」</p>
											<p>「あと、外壁はガルバリウムを使ってて、ちょっとモダンな雰囲気にしてるんです。シンプルだけど、こだわりが詰まってるんですよ！」</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── 清潔感がありつつ、落ち着いた雰囲気もありますね。</span></dt>
										<dd>
											<p>「そうなんです！お客様にリラックスしてもらいたいし、でもおしゃれさも欲しいし…そのバランスをめちゃくちゃ考えました。」</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── お客様の年齢層について教えてください。</span></dt>
										<dd>
											<p>「すごく幅広いですよ。家族で通われる方も多くて、お子さんからおばあちゃんまで来てくださいます。でも、特に多いのは20代から40代の主婦の方ですね！このエリア的にも、やっぱりその世代のお客様が多いかなって感じます。」</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── スタッフの方々も若い方が多いですね。</span></dt>
										<dd>
											<p>「そうなんです！若手スタッフもいるし、パートさんもたくさんいるので、みんなでワイワイしながらお店を作ってます。女性が多いから、いろんな意見も出るし、それを反映しながらより良い空間にしていけるのが楽しいですね！」</p>
										</dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="modalClose"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_modal_close.png" alt=""></div>
					</div>
				</div>
				<div class="voiceItemModal itemModal" data-modal="modal3">
					<div class="modalBox">
						<div class="modalBoxInner">
							<div class="photoPanel">
								<div class="mvBox">
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_3_1.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_3_2.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_3_3.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_3_4.jpg" alt=""></div>
								</div>
								<div class="photoList">
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_3_1.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_3_2.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_3_3.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_3_4.jpg" alt=""></div>
								</div>
							</div>
							<div class="detailPanel">
								<div class="staffBox">
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_staff_03.png" alt=""></div>
									<dl>
										<dt>Shin kafune オーナー</dt>
										<dd>小栗 慎司さん</dd>
									</dl>
								</div>
								<div class="commentBox">
									<dl>
										<dt><span>── 出会いのきっかけは“紹介”と“提案力”</span></dt>
										<dd>
											<p>Atelier OUさんとのお付き合いは、約1年半ほど前。同じ美容業界の友人から紹介を受けて、最初にご提案いただいたデザインがとてもよかったんです。打ち合わせもスムーズで、やり取りが早くて丁寧。提案力と対応力の両方で、信頼できるパートナーだと感じました。</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── 大人世代に響く、ステータスを感じる空間</span></dt>
										<dd>
											<p>改装では、“大人世代に受ける空間”を意識していました。高単価層にも対応できる、品のある雰囲気を目指しましたね。特に気に入っているのは、スパルームとエントランスデザイン、そして外観の雰囲気。全体としてとても良い仕上がりになったと思います。</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── 細部へのこだわりと調和する家具選び</span></dt>
										<dd>
											<p>内装だけでなく、椅子などの家具にもこだわりました。木の色味と合わせたデザインで、全体のバランスもすごく気に入っています。実は、知り合いのサロンで使われていた椅子を参考にしたんですよ。細かいところも妥協せず、相談しながら決めていきました。</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── 柔軟でスピーディな対応力</span></dt>
										<dd>
											<p>Atelier OUさんは、とにかくレスポンスが早い。それがすごくありがたかったです。僕自身せっかちなところがあるので、対応の速さは重要なんです。あと、かなり最後のタイミングで大きめのデザイン変更をお願いしたんですが、嫌な顔ひとつせず、しっかり応えてくれました。提案も受け入れてくれて、信頼してお任せできる会社だなと思いました。</p>
										</dd>
									</dl>
									<dl>
										<dt><span>──仕上がりと印象</span></dt>
										<dd>
											<p>全体的に“ナチュラルで高級感のある”という理想的なバランスに仕上がったと思います。Atelier OUさんからは少し重厚感のある高級デザインも提案されたんですが、最終的には自分の好みに寄せてもらって、すごくいい着地点になりました。デザインだけじゃなくて、しっかりこちらのイメージをくみ取ってくれるところがありがたかったですね。</p>
										</dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="modalClose"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_modal_close.png" alt=""></div>
					</div>
				</div>
				<div class="voiceItemModal itemModal" data-modal="modal4">
					<div class="modalBox">
						<div class="modalBoxInner">
							<div class="photoPanel">
								<div class="mvBox">
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_4_1.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_4_2.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_4_3.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_4_4.jpg" alt=""></div>
								</div>
								<div class="photoList">
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_4_1.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_4_2.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_4_3.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_4_4.jpg" alt=""></div>
								</div>
							</div>
							<div class="detailPanel">
								<div class="staffBox">
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_staff_04.png" alt=""></div>
									<dl>
										<dt>SOMEDAY Lx オーナー</dt>
										<dd>近藤 妙鐘さん</dd>
									</dl>
								</div>
								<div class="commentBox">
									<dl>
										<dt><span>── コンセプトは“上質×リラックス”から、“開放感×今らしさ”へ</span></dt>
										<dd>
											<p>もともとは、落ち着いた雰囲気の上質な空間を意識していたと聞いています。ただ、時代や働くスタッフの世代が変わってきたことで、もっと明るく、スタッフの魅力が自然に伝わるような空間にしていこうという話になりました。改装前の店内は濃いブラウンで統一されており、落ち着いた大人の雰囲気が漂ってい他のですが、改装を機に、白を基調とした明るくて開放的な内装に一新しました。</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── 写真映えする空間で、気分も前向きに</span></dt>
										<dd>
											<p>スタイル写真を撮る機会も多いので、光の入り方や全体の明るさはすごく意識しました。改装前はどうしても影が出やすくて、きれいに撮れないこともあったんですが、今はどこで撮っても自然光が入って、明るく写ります。<br>床材や家具、セット面の配置まで一新し、写真にも映える空間を実現。改装直後はスタッフ全員がウキウキしていましたね。働く環境が変わるだけで、気持ちも自然と前向きになることを実感しました。</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── 改装を通して感じた“関わること”の大切さ</span></dt>
										<dd>
											<p>改装のときは、社長やスタッフともたくさん話し合いをしました。私も前より少し責任のある立場になっていたので、どうしたら働きやすく、サロン全体がいい雰囲気になるかを考えるようになりました。スタッフからは「どこで撮ってもキレイに見える空間にしたい」という声が多く、内装の色や配置にもその意見を反映してもらいました。</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── Atelier OUとの関係性について</span></dt>
										<dd>
											<p>Atelier OUさんとはすごく長いお付き合いがあって、私が入社する前から関わってくださっていました。急な連絡にもいつも快く対応してくださって、本当にありがたい存在です。全体としてはやってよかったと心から思います。施工後のフォローも丁寧で、何かあればすぐ動いてくださるので安心感がありますね。</p>
										</dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="modalClose"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_modal_close.png" alt=""></div>
					</div>
				</div>
				<div class="voiceItemModal itemModal" data-modal="modal5">
					<div class="modalBox">
						<div class="modalBoxInner">
							<div class="photoPanel">
								<div class="mvBox">
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_5_1.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_5_2.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_5_3.jpg" alt=""></div>
									<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_5_4.jpg" alt=""></div>
								</div>
								<div class="photoList">
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_5_1.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_5_2.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_5_3.jpg" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_list_5_4.jpg" alt=""></div>
								</div>
							</div>
							<div class="detailPanel">
								<div class="staffBox">
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_modal_staff_05.png" alt=""></div>
									<dl>
										<dt>Voasorte オーナー</dt>
										<dd>小野田さん</dd>
									</dl>
								</div>
								<div class="commentBox">
									<dl>
										<dt><span>── コンセプトは“ドバイ風リゾート”の非日常感</span></dt>
										<dd>
											<p>アジアンリゾートっていうより、どちらかというとドバイっぽい雰囲気をイメージしてつくりました。郊外で初めて箱から建てたお店だったので、外観からしっかりインパクトを出したかったんです。広告費をかけるというよりは、通りがかりに一発で印象に残る外観を目指しました。<br>シンボルツリーとしてヤシの木を吹き抜け空間に配置し、左右対称の造りや重厚感ある木目のドアなど、街のランドマークのような存在を目指した設計。ゼロから建てたからこそ実現できた“非日常を感じられる空間”になったと思います。</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── サロンデザインのこだわりと“ちょっとした後悔”</span></dt>
										<dd>
											<p>内装はオリエンタルな雰囲気に合わせてシンプルかつ非日常感が出るように意識しました。床も波打ったようなモルタル仕上げで、味があって気に入っています。<br>美しさを優先した設計の中で、現場での使いやすさとのバランスに葛藤もありましたがが、それでも10年経っても色褪せない空間であることに、こだわりを感じています。</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── 接客・技術で大切にしていること</span></dt>
										<dd>
											<p>店内は光の入り方や空間の見せ方を意識して設計してもらいました。お客様がリラックスできるだけでなく、カラーやスタイルが映える光環境を整えています。スタッフの技術面も含めて、細かい部分でのバランスを常に意識していますね。<br>モノとしてのデザインだけでなく、居心地や使い勝手、サロンの滞在時間すべてを通して満足してもらう——そんな配慮があちこちに感じられる空間です。</p>
										</dd>
									</dl>
									<dl>
										<dt><span>── 接客・技術で大切にしていること</span></dt>
										<dd>
											<p>現在は名古屋と北名古屋市で3店舗を直営し、1店舗をフランチャイズ形式で展開中。今後も業務委託での展開やスペースの活用など、柔軟な経営スタイルを取り入れつつ、まずは“人”を軸にした成長を目指していきたいです。</p>
										</dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="modalClose"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_modal_close.png" alt=""></div>
					</div>
				</div>
			</div>
		</div>
		<div id="section__flow">
			<div class="flowContainer">
				<div class="titlePhoto">
					<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/flow_mv.jpg" alt=""></div>
					<div class="ttlBox">
						<h2>OU FLOW</h2>
						<p>SALON and Space Design</p>
					</div>
				</div>
				<div class="flowPanel">
					<div class="flowPanel__inner">
						<div class="flowBox">
							<div class="flowTtl">
								<p>&nbsp;</p>
							</div>
							<div class="txtBox">
								<dl>
									<dt><span>01</span><em>お問合せ／お打合せ</em></dt>
									<dd>お問い合わせ・ご相談はお気軽にどうぞ。<br>※平面図、完成予想図はご契約までお渡しできません。ご了承ください。</dd>
								</dl>
							</div>
						</div>
						<div class="flowBox">
							<div class="flowTtl">
								<p>〜1week</p>
							</div>
							<div class="txtBox">
								<dl>
									<dt><span>02</span><em>物件調査</em></dt>
									<dd>店舗や住宅の立地条件、周辺環境を徹底的に調査。<br>業界の動向や商圏の分析、資金計画、経営戦略など、多角的な視点から考察し、<br>持続的に繁盛する店舗づくりをサポートします。</dd>
								</dl>
							</div>
						</div>
						<div class="flowBox">
							<div class="flowTtl">
								<p>2〜3week</p>
							</div>
							<div class="txtBox">
								<dl>
									<dt><span>03</span><em>プランニング／お見積もり</em></dt>
									<dd>完成予想図を使い、視覚的にわかりやすくご提案。<br>さらに、お見積もりも合わせて丁寧にご説明いたします。</dd>
								</dl>
							</div>
						</div>
						<div class="flowBox">
							<div class="flowTtl">
								<p>4〜5week</p>
							</div>
							<div class="txtBox">
								<dl>
									<dt><span>04</span><em>設計</em></dt>
									<dd>設計とは、お客様の夢を現実にするプロセス。<br>私たちはお客様と共に、その夢を形にしていきます。</dd>
								</dl>
							</div>
						</div>
						<div class="flowBox">
							<div class="flowTtl">
								<p>4〜5week</p>
							</div>
							<div class="txtBox">
								<dl>
									<dt><span>05</span><em>着工</em></dt>
									<dd>新規開業の際には、オープンまでの宣伝広告や<br>プロモーションのご相談もお受けいたします。</dd>
								</dl>
							</div>
						</div>
						<div class="flowBox">
							<div class="flowTtl">
								<p>4〜5week</p>
							</div>
							<div class="txtBox">
								<dl>
									<dt><span>06</span><em>お引き渡し／アフターフォロー</em></dt>
									<dd>定期的なメンテナンスのご相談はもちろん、店舗改装や新規出店計画まで、<br>お客様との長期的な信頼関係を築くための充実したアフターフォローをお約束します。</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="section__news">
			<div class="secWrap02">
				<div class="secBox">
					<div class="ttlBox">
						<h2>NEWS</h2>
					</div>
					<div class="txtBox">
						<div class="newsList">
							<ul>
								<li>
									<div class="newsLabel">
										<p>（ NEWS ）</p>
									</div>
									<div class="time">
										<p>2025.06.14</p>
									</div>
									<div class="newsTxt">
										<p>オーナーインタビュー vol.03 Shin kafuneを公開いたしました。</p>
									</div>
								</li>
								<li>
									<div class="newsLabel">
										<p>（ NEWS ）</p>
									</div>
									<div class="time">
										<p>2025.06.14</p>
									</div>
									<div class="newsTxt">
										<p>スタッフインタビュー vol.02 museeを公開いたしました。</p>
									</div>
								</li>
								<li>
									<div class="newsLabel">
										<p>（ NEWS ）</p>
									</div>
									<div class="time">
										<p>2025.06.14</p>
									</div>
									<div class="newsTxt">
										<p>オーナーインタビュー vol.01 museeを公開いたしました。</p>
									</div>
								</li>
								<li>
									<div class="newsLabel">
										<p>（ NEWS ）</p>
									</div>
									<div class="time">
										<p>2025.06.14</p>
									</div>
									<div class="newsTxt">
										<p>サイトをオープンしました。</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="section__faq">
			<div class="faqContainer">
				<div class="secWrap02">
					<div class="secBox">
						<div class="ttlBox">
							<h2>FAQ</h2>
						</div>
						<div class="txtBox">
							<dl class="accord">
								<dt><span>Q.</span><em>小さなお店でも依頼できますか？</em></dt>
								<dd>
									<p>坪数やスタッフさんの人数によってサロン内の設備も変わってきます。<br>必要な設備も踏まえてご提案させて頂きます。</p>
								</dd>
							</dl>
							<dl class="accord">
								<dt><span>Q.</span><em>サロンが完成後も相談にのっていただけますか？</em></dt>
								<dd>
									<p>お客様とは、工事終了後も長く良いお付き合いを続けていきたいと弊社では考えております。<br>工事とは別のご相談などもお気軽にご連絡下さい。</p>
								</dd>
							</dl>
							<dl class="accord">
								<dt><span>Q.</span><em>相談する際に用意した方がいいものを教えてください。</em></dt>
								<dd>
									<p>テナントなどで出店を考えておられる場合はテナントの図面をご用意下さい。<br>新築をお考えの場合はその土地の資料等ご用意ください。</p>
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="section__slide">
			<div class="slidePanel">
				<div class="slideBox">
					<ul>
						<li><img src="<?php bloginfo('template_url'); ?>/image/top/slide_photo_01.jpg" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/image/top/slide_photo_02.jpg" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/image/top/slide_photo_03.jpg" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/image/top/slide_photo_04.jpg" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/image/top/slide_photo_05.jpg" alt=""></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="section__contact">
			<div class="secWrap02">
				<div class="contactContainer">
					<div class="secTtl">
						<h2>CONTACT<br>US</h2>
					</div>
					<div class="topTxt">
						<p>店舗設計・内装デザインのご相談など、<br>お気軽にお問い合わせください。</p>
					</div>
					<div class="formBox">
						<?php echo do_shortcode('[mwform_formkey key="8"]'); ?>
					</div>
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
				<div class="insta"><a href="https://www.instagram.com/atelierou_design?igsh=MTZsdGNvZTFkbHJpOQ%3D%3D&utm_source=qr" target="_blank" rel="noopener">INSTAGRAM</a></div>
				<div class="contact"><a href="#section__contact"><span>お問い合わせ</span></a></div>
			</div>
		</div>
		<div class="mvPanel">
			<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_mv.png" alt=""></div>
			<div class="mvLogo"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_mv_logo.png" alt=""></div>
		</div>
		<div class="bottomPanel">
			<div class="navigationBox">
				<ul>
					<li><a href="#section__concept">⚫︎ コンセプト</a></li>
					<li><a href="#section__points">⚫︎ OUの特徴</a></li>
				</ul>
				<ul>
					<li><a href="#section__voice">⚫︎ お客様の声</a></li>
					<li><a href="#section__flow">⚫︎ プロジェクトの流れ</a></li>
				</ul>
			</div>
			<div class="copyBox">
				<div class="info">
					<p>[ 運営会社 ]　株式会社 光工芸</p>
					<p>〒454-0041 愛知県名古屋市中川区八神町3-8</p>
				</div>
				<div class="copy">
					<p>Copyright &copy; ATELIER OU</p>
				</div>
			</div>
		</div>
	</div>
	<!-- △footer△-->
	<?php wp_footer(); ?>
</body>

</html>