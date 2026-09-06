<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<?php get_template_part( 'include', 'mainimg' ); ?>
<div class="oneday">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 offset-sm-1">
				<h2><?php the_title(); ?></h2>
				<h3>- 0・1・2歳児 -</h3>
				<h4><span>平日</span></h4>
				<div class="block">
					<dl class="clearfix">
						<dt>7:30〜</dt>
						<dd>開園<br />
	順次登園（保育標準時間開始）<br />
	検温・視診</dd>
	</dl>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oneday-11.jpg" alt="一日の様子">
	<dl class="clearfix">
		<dt>8:30〜</dt>
		<dd>（保育短時間開始）</dd>
		<dt>9:00〜</dt>
		<dd>各クラスに移動<br />
		朝のおやつ（施設による）<br />
		散歩・日光浴・室内遊び等</dd>
	</dl>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oneday-12.jpg" alt="一日の様子">
	<dl class="clearfix">
		<dt>10:50〜</dt>
		<dd>離乳食・授乳（0歳児）</dd>
		<dt>11:00～</dt>
		<dd>順次給食（1,2歳児）<br />
		食事の済んだ子から午睡</dd>
		<dt>14:00</dt>
		<dd>目覚め　順次検温</dd>
	</dl>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oneday-16.jpg" alt="一日の様子">
	<dl class="clearfix">
		<dt>14:30</dt>
		<dd>おやつ・授乳（0歳児）</dd>
		<dt>15:00</dt>
		<dd>室内あそび</dd>
		<dt>16:30</dt>
		<dd>（保育短時間終了）</dd>
	</dl>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oneday-14.jpg" alt="一日の様子">
	<dl class="clearfix">
		<dt>18:30</dt>
		<dd>必要に応じて睡眠（0歳児）<br />
		0,1,2歳児合同保育<br />
		（保育標準時間終了）</dd>
	</dl>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oneday-15.jpg" alt="一日の様子">
	<dl class="clearfix">
		<dt>19:30</dt>
		<dd>延長保育開始<br />
		合同保育<br />
	閉園</dd>
					</dl>
				</div>
				<h4><span>土曜日</span></h4>
				<div class="block">
					<dl class="clearfix">
						<dt>7:30〜</dt>
						<dd>順次開園<br />
以下平日の保育に習う<br />
異年齢保育</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p class="oneday-notice">※北名古屋市(にしはる駅前・とくしげ駅前)の短時間保育は8：00～16：00となります。</p>
				<p class="oneday-notice">詳細はご希望の施設にお問い合わせください</p>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
