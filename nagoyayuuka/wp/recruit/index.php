<?php
/*
Template Name: 採用情報
*/
$recruitment_types = array(
	'full_time' => '正社員',
	'part_time' => 'パート',
);
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
			<div class="recruitmentTabs" role="tablist" aria-label="雇用形態">
				<?php foreach ($recruitment_types as $type => $title): ?>
					<button type="button" id="recruitment-tab-<?php echo esc_attr($type); ?>" role="tab" aria-controls="recruitment-panel-<?php echo esc_attr($type); ?>" aria-selected="<?php echo $type === 'full_time' ? 'true' : 'false'; ?>" tabindex="<?php echo $type === 'full_time' ? '0' : '-1'; ?>"><?php echo esc_html($title); ?></button>
				<?php endforeach; ?>
			</div>
			<div class="recruitmentPanel">
				<div class="recruitmentInner">
					<div class="pTtl">
						<h2>募集要項</h2>
					</div>
					<div class="pBody">
						<?php foreach ($recruitment_types as $type => $title):
							$requirements = get_field('recruitment_requirements_' . $type);
						?>
							<div class="recruitmentTabPanel" id="recruitment-panel-<?php echo esc_attr($type); ?>" role="tabpanel" aria-labelledby="recruitment-tab-<?php echo esc_attr($type); ?>" tabindex="0"<?php if ($type !== 'full_time') echo ' hidden'; ?>>
								<?php if (!empty($requirements)): ?>
									<div class="infoBox">
										<?php foreach ($requirements as $requirement): ?>
											<dl>
												<dt><?php echo esc_html($requirement['label']); ?></dt>
												<dd><?php echo wp_kses_post($requirement['value']); ?></dd>
											</dl>
										<?php endforeach; ?>
									</div>
									<div class="btnMore btnMoreBlueDeep"><a href="<?php echo esc_url(home_url('/recruit-application/')); ?>">
										<div><p>ご応募はこちら</p></div>
									</a></div>
								<?php else: ?>
									<p class="recruitmentEmpty">現在、募集情報を準備中です。</p>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
