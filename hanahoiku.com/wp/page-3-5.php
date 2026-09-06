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
				<h3>- 3・4・5歳児 -</h3>
				<h4><span>平日</span></h4>
				<div class="block">
					<dl class="clearfix">
						<dt>7:30〜</dt>
						<dd>開園<br />
	順次登園（保育標準時間開始）<br />
	検温・視診</dd>
	</dl>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oneday-01.jpg" alt="一日の様子">
	<dl class="clearfix">
		<dt>8:30〜</dt>
		<dd>（保育短時間開始）</dd>
		<dt>9:00〜</dt>
		<dd>各クラスに移動<br />
		朝の会・散歩</dd>
		<dt>10:00〜</dt>
		<dd>クラス活動</dd>
	</dl>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oneday-02.jpg" alt="一日の様子">
	<dl class="clearfix">
		<dt>11:30〜</dt>
		<dd>3歳児より給食<br />
		4,5歳児順次給食開始</dd>
		<dt>13:00～</dt>
		<dd>3歳児午睡<br />
		4,5歳児室内での活動</dd>
	</dl>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oneday-03.jpg" alt="一日の様子">
	<dl class="clearfix">
		<dt>14:00</dt>
		<dd>目覚め（3歳児）</dd>
		<dt>14:30</dt>
		<dd>おやつ<br />
		室内あそび</dd>
	</dl>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oneday-04.jpg" alt="一日の様子">
	<dl class="clearfix">
		<dt>16:30</dt>
		<dd>（保育短時間終了）<br />
		3,4,5歳児合同保育</dd>
	</dl>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oneday-05.jpg" alt="一日の様子">
	<dl class="clearfix">
		<dt>18:30</dt>
		<dd>（保育標準時間終了）<br />
		延長保育開始<br />
		合同保育</dd>
		<dt>19:30</dt>
		<dd>閉園</dd>
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
				<p class="oneday-notice">詳細はご希望の施設にお問い合わせください</p>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
