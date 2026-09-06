
	<?php
	/**
	 * The template for displaying pages
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages and that
	 * other "pages" on your WordPress site will use a different template.
	 *
	 * @package WordPress
	 * @subpackage hanahoiku
	 * @since Twenty Fifteen 1.0
	 */

	get_header('recruit'); ?>

	<div class="sub01">
		<div class="header">
			<h2>
				エントリーフォーム
			</h2>
			<h3>
				entry
			</h3>
		</div>
		<!-- /.header -->
		<div id="entryflow">
			<ul>
				<li>
					<span>入力</span>
				</li>
				<li>
					<span>確認</span>
				</li>
				<li>
					<span>完了</span>
				</li>
			</ul>
		</div>
		<!-- /#entryflow -->
	

	<?php echo do_shortcode('[mwform_formkey key="193805"]'); ?>

	</div>
	<!-- /.sub01 -->

	<?php get_template_part('include','fnav'); ?>

	<?php get_footer('recruit'); ?>
