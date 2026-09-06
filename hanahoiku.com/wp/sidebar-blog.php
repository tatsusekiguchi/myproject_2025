<?php include('/home/hanahoiku/www/parts/config.php'); ?>
<div class="sidebar" style="display: none;">
	<!-- <div class="illust">
		<img src="<?php echo $img_url; ?>blog/illust01.png" srcset="<?php echo $img_url; ?>blog/illust01.png 1x, <?php echo $img_url; ?>blog/illust01@2x.png 2x" alt="ブログ">
	</div> -->
	<!-- /.illust -->
	<div class="group">
		<?php
		if (is_page('blog')) {
		?>
			<h5 class="open">エリア別</h5>
			<div class="list" style="display: block;">
			<?php
		} else {
			?>
				<h5>エリア別</h5>
				<div class="list">

				<?php
			}
				?>
				<div class="all">
					<a href="<?php echo $home_url; ?>blog/">
						ALL
					</a>
				</div>



				<?php
				$args = array(
					'parent' => '0',
					// 'child_of' => '0',
					// 'order' => 'asc',
					'exclude' => '1,51'
				);
				$categories = get_categories($args);

				// $categories = get_categories('parent=0', 'exclude=1');
				$count = 1;
				foreach ($categories as $category) : ?>
					<?php
					if (is_page('blog') and $count == 1) {
					?>
						<h6>
							<a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
						</h6>
					<?php
					} else {
					?>
						<h6>
							<a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
						</h6>
					<?php
					}
					?>

					<?php
					$childs = get_categories('parent=' . $category->term_id);
					if ($childs) :
					?>

						<?php
						if (is_page('blog') and $count == 1) {
						?>
							<ul class="child01">
							<?php
						} else {
							?>
								<ul class="child01">
								<?php
							}
								?>


								<?php foreach ($childs as $child) : ?>
									<li>
										<a href="<?php echo get_category_link($child->term_id); ?>">・<?php echo $child->name; ?></a>


										<ul style="display: none;">
											<?php
											$argss = array(
												'orderby' => 'menu_order',
												'parent' => $child->term_id,
											);
											$categoriess = get_categories($argss);
											?>
											<?php foreach ($categoriess as $categoryy) : ?>
												<li class="catparent">
													<a href="<?php echo get_category_link($categoryy->term_id); ?>">
														<?php echo $categoryy->name; ?>（<?php echo $categoryy->count; ?>）
													</a>
												</li>
												<?php
												$childcatnum = count(get_term_children($categoryy->cat_ID, 'category'));
												?>
												<?php if ($childcatnum > 0) : ?>
													<?php
													$catchildargs = array('parent' => $categoryy->cat_ID, 'orderby' => 'menu_order',);
													$catchilds = get_categories($catchildargs); ?>
													<?php
													foreach ($catchilds as $catchild): ?>
														<?php $cat_link = get_category_link($catchild->cat_ID); ?>
														<li>
															<a href="<?php echo $cat_link; ?>">
																<?php echo $catchild->name; ?>（<?php echo $catchild->count; ?>）
															</a>
														</li>
													<?php endforeach; ?>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>


									</li>
								<?php endforeach; ?>
								</ul>
							<?php endif; ?>

						<?php
						$count++;
					endforeach; ?>


						<ul>
							<?php wp_list_categories('title_li=&exclude=1'); ?>
						</ul>


				</div>
			</div>
			<!-- /.group -->
	</div>
	<!-- /.sidebar -->


	<div class="sidebar sidebarnew">
		<?php if (is_active_sidebar('sidebar')) { ///sidebarにはfunctions.phpで設定したidを入れる
		?>
			<div class="group">
				<h5>
					エリア別
				</h5>
				<div class="list">
					<div class="all">
						<a href="<?php echo esc_url(home_url("/")); ?>blog/">
							ALL
						</a>
					</div>
					<!-- /.all -->
					<?php dynamic_sidebar('sidebar'); ?>
				</div>
				<!-- /.list -->
			</div>
			<!-- /.group -->
			<div class="group">
				<h5>
					<a href="<?php echo esc_url(home_url("/")); ?>gallery/">
						ギャラリー
					</a>
				</h5>
			</div>
			<!-- /.group -->
		<?php } ?>
	</div>
	<!-- /.sidebar -->