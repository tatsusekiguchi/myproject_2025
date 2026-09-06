<?php get_header(); ?>
	
<!-- ▽メイン▽-->
<main id="top">
	<div class="kv">
		<div class="ttlBox">
			<h1>本物は、受け継がれて<br>なお、美しい。</h1>
		</div>
		<div class="imgBox">
			<div id="topKv"></div>
		</div>
	</div>
	<section id="sec01">
		<div class="cntWrap">
			<div class="txtBox">
				<h2><em>Works</em><span>私たちの仕事</span></h2>
				<dl>
					<dt>いい家具は<br>歳月に磨かれる</dt>
					<dd>愛知県大府にある共和テクニカルでは、使い続けて痛んでしまった椅子、ソファの張リ替え・修理を承っております。 木枠の製造、クッションの調整、記事の裁断から縫製に至るまで、全工程を自社の職人のハンドメイドで行うことで大切な家具を蘇らせます。</dd>
				</dl><a class="linkBtn" href="<?php echo home_url() ?>/about/">共和テクニカルについて</a>
			</div>
		</div>
		<dl class="subTxtBox">
			<dt>レストラン、ホテル、病院など<br>あらゆるニーズにお応えします。</dt>
			<dd>
				<p>1級椅子張り技能士4人、2級椅子張り技能士7人が在籍している共和テクニカルでは店舗・業務用のソファや椅子をオーダーメイドで製造しております。 クラブ、レストラン、居酒屋、クリニック、大型モール（子供用遊び場）など幅広い業種に対応しております。設置個所に応じて最適なサイズで作成することはもとより、設置した後の運用まで考慮した素材提案まで、豊富な知識と経験を活かしあらゆるニーズにお応えしてまいります。</p>
			</dd>
		</dl>
		<div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/image/top/sec01_img_02.png" alt=""></div>
	</section>
	<section id="sec02">
		<h2><em>Case</em><span>事例</span></h2>
		<?php
			$arg = array(
				'posts_per_page' => 6, // 表示する件数
				'orderby' => 'date', // 日付でソート
				'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
				'category_name' => 'person,corporation' // 表示したいカテゴリーのスラッグを指定
		    );
			$posts = get_posts( $arg );
			if( $posts ): ?>
			<ul>
				<?php
					foreach ( $posts as $post ) :
					setup_postdata( $post ); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
						<div class="photo"><?php the_post_thumbnail('full'); ?></div>
						<div class="txt"><span><?php the_title(); ?></span><span><?php the_subtitle(); ?></span></div>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
			<?php
			endif;
			wp_reset_postdata();
		?>
		<a class="linkBtn" href="<?php echo home_url() ?>/caselist/">もっと見る</a>
	</section>
	<section id="sec03">
		<div class="cntWrap">
			<div class="topBox clearfix">
				<div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/image/top/sec03_img_01.png" alt=""></div>
				<div class="txt">
					<h2><em>Concept</em><span>コンセプト</span></h2>
					<dl>
						<dt>常に使う側の立場に立って<br>ものづくりに取り組んでいます。</dt>
						<dd>
							<p>例えば飲食店の方に張り地の相談をいただいたら、掃除の方法まで確認します。お店によって、水拭きやアルコール消毒をされているかなど、日々のケアからそれぞれに見合った生地を提案いたします。<br>年中無休のお店からのご依頼なら、現場で張り替えることもあります。<br>お客様と向き合い、お客様の立場に立つところから、わたしたちの「ものづくり」は始まります。</p>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="photoBox clearfix">
			<div class="photo01">
				<div><img src="<?php echo get_template_directory_uri(); ?>/image/top/sec03_img_02.png" alt=""></div>
			</div>
			<div class="photo02">
				<div><img src="<?php echo get_template_directory_uri(); ?>/image/top/sec03_img_03.png" alt=""></div>
			</div>
		</div>
	</section>
	<section id="sec04">
		<h2><em>Company</em><span>会社情報</span></h2>
		<div class="box1">
			<div class="infoBox">
				<p class="ttl">本社</p>
				<dl>
					<dt>住所</dt>
					<dd>〒474-0057　愛知県大府市共和町炭焼7-1</dd>
				</dl>
				<dl>
					<dt>電話番号</dt>
					<dd>0562-45-4488</dd>
				</dl>
				<dl>
					<dt>FAX</dt>
					<dd>0562-45-4401</dd>
				</dl>
			</div>
		</div>
		<div class="box2">
			<div class="infoBox">
				<p class="ttl">本社</p>
				<dl>
					<dt>住所</dt>
					<dd>〒474-0057　愛知県大府市共和町炭焼7-1</dd>
				</dl>
				<dl>
					<dt>電話番号</dt>
					<dd>0562-45-4488</dd>
				</dl>
				<dl>
					<dt>FAX</dt>
					<dd>0562-45-4401</dd>
				</dl>
			</div>
		</div>
		<div class="box3">
			<div class="infoBox">
				<p class="ttl">本社</p>
				<dl>
					<dt>住所</dt>
					<dd>〒474-0057　愛知県大府市共和町炭焼7-1</dd>
				</dl>
				<dl>
					<dt>電話番号</dt>
					<dd>0562-45-4488</dd>
				</dl>
				<dl>
					<dt>FAX</dt>
					<dd>0562-45-4401</dd>
				</dl>
			</div>
		</div><a class="linkBtn" href="<?php echo home_url() ?>/company/">会社概要はこちら</a>
	</section>
	<section id="sec05">
		<div class="newsBox">
			<div class="ttl">
				<h2><em>News</em><span>お知らせ</span></h2>
			</div>
			<div class="newsList">
				<?php
					$arg = array(
						'posts_per_page' => 3, // 表示する件数
						'orderby' => 'date', // 日付でソート
						'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
						'category_name' => 'news' // 表示したいカテゴリーのスラッグを指定
				    );
					$posts = get_posts( $arg );
					if( $posts ): ?>
					<ul>
						<?php
							foreach ( $posts as $post ) :
							setup_postdata( $post ); ?>
							<li><span>お知らせ</span><time datetime="<?php the_time("Y-m-d") ?>"><?php the_time("Y.m.d") ?></time><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endforeach; ?>
					</ul>
					<?php
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div><a class="linkBtn" href="<?php echo home_url() ?>/newslist/">もっと見る</a>
	</section>
	<section id="sec06">
		<div class="cntWrap">
			<div class="ttl">
				<h2><em>Instagram</em><span>インスタグラム</span></h2>
			</div>
			<div class="instaBox">
				
			</div>
		</div><a class="linkBtn" href="">もっと見る</a>
	</section>
</main>
<!-- △メイン△-->

<?php get_footer(); ?>