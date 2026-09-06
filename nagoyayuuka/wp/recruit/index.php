<?php
/*
Template Name: 採用情報
*/
?>

<?php get_header(); ?>
	<main id="recruit">
		<div class="topContainer">
			<div class="topKv"><img class="switch" src="<?php bloginfo('template_url'); ?>/image/recruit/top_kv_pc.png" alt=""></div>
			<div class="topTitle">
				<h1>採用情報</h1><span>さいようじょうほう</span>
			</div>
		</div>
		<div class="recruitmentContainer">
			<div class="moveCloudArea01">
				<div class="moveCloud scroll-infinity__cloud"><img src="<?php bloginfo('template_url'); ?>/image/common/move_cloud.png" alt=""></div>
			</div>
			<div class="moveCloudArea02">
				<div class="moveCloud scroll-infinity__cloud delay"><img src="<?php bloginfo('template_url'); ?>/image/common/move_cloud.png" alt=""></div>
			</div>
			<div class="comingSoon">
				<p>COMING SOON...</p>
			</div>
			<div class="recruitmentPanel">
				<div class="recruitmentInner">
					<div class="pTtl">
						<h2>募集要項</h2>
					</div>
					<div class="pBody">
						<div class="infoBox">
							<?php if( have_rows('recruitment_requirements') ): ?>
								<?php while( have_rows('recruitment_requirements') ): the_row();
									$label = get_sub_field('label');
									$value = get_sub_field('value');
								?>
								<dl>
									<dt><?php echo esc_html($label); ?></dt>
									<dd><?php echo wp_kses_post($value); ?></dd>
								</dl>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="btnMore btnMoreBlueDeep"><a href="<?php echo home_url(); ?>/entry">
								<div>
									<p>ご応募はこちら</p>
								</div>
							</a></div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>