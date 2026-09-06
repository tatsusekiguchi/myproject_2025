<?php

/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage hanahoiku
 * @since Twenty Fifteen 1.0
 */

get_header('recruit'); ?>

<div id="search">
	<div class="header">
		<h3>
			募集している園舎を探す
		</h3>
	</div>
	<!-- /.header -->
	<div class="group">
<?php
if ( function_exists( 'feas_search_form' ) ) {
	feas_search_form();
}
?>
	</div>
	<!-- /.group -->
</div>
<!-- /#search -->

<div id="result">




	<!-- test -->
	<div class="group">
		<?php
		// タクソノミーnews_catのタームを取得
		$terms = get_terms('jobarea', $args);
		?>
		<?php foreach ($terms as $term) : ?>
			<?php if ($term->parent) : ?>
				<?php
				$query = new WP_Query(
					array(
						'post_status' => 'publish',
						'post_type' => 'job',

						'tax_query' => array(
							array(
								'taxonomy' => 'jobarea',
								'field' => 'slug',
								'terms' => $term->slug, // タームごとにスラッグを配列に入れる。
							)
						),

						'posts_per_page' => -1, // 3件の記事を表示。任意の値を入れる。
					)
				);
				?>
				<?php if ($query->have_posts()) : ?>

					<!-- タームを表示 -->


					<div class="group01 ani anit">
						<h5 class="ani anit">
							<?php echo $term->name; ?><span><?php echo $term->slug; ?></span>
						</h5>
						<!-- タームに属する記事をループで表示 -->
						<div class="group02">
							<div class="inner">
								<?php while ($query->have_posts()) : $query->the_post(); ?>
									<div id="post-<?php the_ID(); ?>" class="block post img-left clearfix">
										<a href="<?php the_permalink(); ?>">
											<div class="image">

												<?php
												$image = get_field('image02');
												$size = 'full'; // (thumbnail, medium, large, full or custom size)
												if ($image) {
													echo wp_get_attachment_image($image, $size);
												}
												?>
												<div class="koutu">
													<?php echo get_field('koutu'); ?>
												</div>
												<!-- /.koutu -->

											</div>
											<!-- /.image -->
											<div class="txt">
												<div class="name">
													<?php the_title(); ?>
												</div>
												<!-- /.name -->
												<div class="inner">
													<div class="top">
														<div class="entype">
															<?php echo get_field('type'); ?>
														</div>
														<!-- /.entype -->
														<dl class="seishain">
															<dt>
																正社員
															</dt>

															<?php
															if (have_rows('youkou09')) :
															?>

																<?php
																while (have_rows('youkou09')) : the_row();
																?>
																	<?php
																	$value = get_sub_field("bosyu");
																	if ($value == 'on') {
																	?>
																		<dd>
																			□園長
																		</dd>
																	<?php
																	} else {
																	?>
																	<?php
																	}
																	?>

																<?php
																endwhile;
																?>

															<?php
															else :
															?>
															<?php
															endif;
															?>
															<!-- /.youkou09 -->

															
															<?php
															if (have_rows('youkou01')) :
															?>

																<?php
																while (have_rows('youkou01')) : the_row();
																?>

																	<?php
																	$value1 = get_sub_field("bosyu");
																	if ($value1 == 'on') {
																		$shinsotsu = 1;
																	?>

																	<?php
																	} else {
																		$shinsotsu = 0;
																	?>

																	<?php
																	}
																	?>

																<?php
																endwhile;
																?>

															<?php
															else :
															?>
															<?php
															endif;
															?>

															<?php
															if (have_rows('youkou05')) :
															?>

																<?php
																while (have_rows('youkou05')) : the_row();
																?>

																	<?php
																	$value2 = get_sub_field("bosyu");
																	if ($value2 == 'on') {
																		$tyuuto = 1;
																	?>
																	<?php
																	} else {
																		$tyuuto = 0;
																	?>
																	<?php
																	}
																	?>

																<?php
																endwhile;
																?>

															<?php
															else :
															?>
															<?php
															endif;
															?>

															<?php
															if (have_rows('youkou10')) :
															?>

																<?php
																while (have_rows('youkou10')) : the_row();
																?>

																	<?php
																	$value3 = get_sub_field("bosyu");
																	if ($value3 == 'on') {
																		$kangoshi = 1;
																	?>
																	<?php
																	} else {
																		$kangoshi = 0;
																	?>
																	<?php
																	}
																	?>

																<?php
																endwhile;
																?>

															<?php
															else :
															?>
															<?php
															endif;
															?>

															<!--  -->
															<?php
															if ($shinsotsu == 1) {
															?>

																<dd>
																	□保育士
																</dd>
															<?php
															} else {
															?>
																<dd class="off">
																	□保育士
																</dd>

															<?php
															}
															?>
															<?php
															if ($kangoshi == 1) {
															?>

																<dd>
																	□看護師
																</dd>
															<?php
															} else {
															?>
																<dd class="off">
																	□看護師
																</dd>

															<?php
															}
															?>
															<?php
															if (have_rows('youkou14')) :
															?>

																<?php
																while (have_rows('youkou14')) : the_row();
																?>
																	<?php
																	$value4 = get_sub_field("bosyu");
																	if ($value4 == 'on') {
																	?>
																		<dd>
																			□調理師
																		</dd>
																	<?php
																	} else {
																	?>
																	<?php
																	}
																	?>

																<?php
																endwhile;
																?>

															<?php
															else :
															?>
															<?php
															endif;
															?>
															<!-- /.youkou14 -->
														</dl>
														<!-- /youkou01 -->
														<div class="right">

														</div>
														<!-- /.right -->
													</div>
													<!-- /.top -->



													<dl>
														<dt>
															パート
														</dt>
														<?php
														if (have_rows('youkou02')) :
														?>

															<?php
															while (have_rows('youkou02')) : the_row();
															?>
																<?php
																$value = get_sub_field("bosyu");
																if ($value == 'on') {
																?>

																	<dd>
																		□保育士
																	</dd>

																<?php
																} else {
																?>
																	<dd class="off">
																		□保育士
																	</dd>

																<?php
																}
																?>

															<?php
															endwhile;
															?>

														<?php
														else :
														?>
														<?php
														endif;
														?>
														<!-- /youkou02 -->

														<?php
														if (have_rows('youkou03')) :
														?>

															<?php
															while (have_rows('youkou03')) : the_row();
															?>
																<?php
																$value = get_sub_field("bosyu");
																if ($value == 'on') {
																?>

																	<dd>
																		□保育補助
																	</dd>

																<?php
																} else {
																?>
																	<dd class="off">
																		□保育補助
																	</dd>

																<?php
																}
																?>

															<?php
															endwhile;
															?>

														<?php
														else :
														?>
														<?php
														endif;
														?>
														<!-- /youkou03 -->


														<?php
														if (have_rows('youkou08')) :
														?>

															<?php
															while (have_rows('youkou08')) : the_row();
															?>
																<?php
																$value = get_sub_field("bosyu");
																if ($value == 'on') {
																?>

																	<dd>
																		□子育て支援員
																	</dd>

																<?php
																} else {
																?>
																	<dd class="off">
																		□子育て支援員
																	</dd>

																<?php
																}
																?>

															<?php
															endwhile;
															?>

														<?php
														else :
														?>
														<?php
														endif;
														?>
														<!-- /youkou08 -->

														<?php
														if (have_rows('youkou07')) :
														?>

															<?php
															while (have_rows('youkou07')) : the_row();
															?>
																<?php
																$value = get_sub_field("bosyu");
																if ($value == 'on') {
																?>

																	<dd>
																		□児童指導員
																	</dd>

																<?php
																} else {
																?>
																	<dd class="off">
																		□児童指導員
																	</dd>

																<?php
																}
																?>

															<?php
															endwhile;
															?>

														<?php
														else :
														?>
														<?php
														endif;
														?>
														<!-- /youkou07 -->

														<?php
														if (have_rows('youkou04')) :
														?>

															<?php
															while (have_rows('youkou04')) : the_row();
															?>
																<?php
																$value = get_sub_field("bosyu");
																if ($value == 'on') {
																?>

																	<dd>
																		□調理師
																	</dd>

																<?php
																} else {
																?>
																	<dd class="off">
																		□調理師
																	</dd>

																<?php
																}
																?>

															<?php
															endwhile;
															?>

														<?php
														else :
														?>
														<?php
														endif;
														?>
														<!-- /youkou04 -->


														<?php
														if (have_rows('youkou06')) :
														?>

															<?php
															while (have_rows('youkou06')) : the_row();
															?>
																<?php
																$value = get_sub_field("bosyu");
																if ($value == 'on') {
																?>

																	<dd>
																		□看護師
																	</dd>

																<?php
																} else {
																?>
																	<dd class="off">
																		□看護師
																	</dd>

																<?php
																}
																?>

															<?php
															endwhile;
															?>

														<?php
														else :
														?>
														<?php
														endif;
														?>
														<!-- /youkou06 -->
													</dl>
													<div class="link">
														園を見てみる
													</div>
													<!-- /.link -->
												</div>
												<!-- /.inner -->
											</div>
											<!-- /.txt -->

											<article>
												<div class="section">




													<div class="post-meta"><span class="category"><?php the_category(', ') ?></span></div>
													<div class="breadcrumbs"><?php if (function_exists('bcn_display')) {
																					bcn_display();
																				} ?></div>

												</div>
											</article>
										</a>
									</div>

								<?php endwhile; ?>
							</div>
							<!-- /.inner -->
						</div><!-- /.group02 -->
					</div><!-- /.group01 -->
				<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
	</div><!-- /.group -->

	<!-- /test -->

</div>
<!-- /#result -->



<?php
$args = array(
	'page_id' => 190696,
	'posts_per_page' => -1
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
?>

	<?php
	while ($the_query->have_posts()) : $the_query->the_post();
	?>
		<div id="footerimg">
			<?php if (is_mobile()) { ?>
				<?php
				$image = get_field('footerimg02');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if ($image) {
					echo wp_get_attachment_image($image, $size);
				}
				?>
			<?php } else { ?>
				<?php
				$image = get_field('footerimg01');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if ($image) {
					echo wp_get_attachment_image($image, $size);
				}
				?>
			<?php } ?>
		</div>
		<!-- /#footerimg -->
	<?php
	endwhile;
	?>

<?php

endif;
wp_reset_postdata();
?>
<?php get_footer('recruit'); ?>
<?php if (is_mobile()) { ?>
	<script>
		jQuery(function($) {
			$("#search form .block > dl > dt,#search form .block01 .block dl dd dl dt").on("click", function() {
				/*クリックでコンテンツを開閉*/
				$(this).next().slideToggle(200);
				/*矢印の向きを変更*/
				$(this).toggleClass("open", 200);
			});
		});

		$(window).load(function() {
			var lochref = window.location.href;
			if (lochref.indexOf("#") > -1) {
				var anchor = lochref.slice(lochref.indexOf("#"));
				window.setTimeout(function() {
					$("body, html").animate({
							scrollTop: $(anchor).offset().top,
						},
						1
					);
				}, 1);
			}
		});
	</script>
<?php } else { ?>
	<script>
		$(window).load(function() {
			var lochref = window.location.href;
			if (lochref.indexOf("#") > -1) {
				var anchor = lochref.slice(lochref.indexOf("#"));
				window.setTimeout(function() {
					$("body, html").animate({
							scrollTop: $(anchor).offset().top,
						},
						1
					);
				}, 1);
			}
		});
	</script>
<?php } ?>
<!-- <script>
	$(document).ready(function() {
		// $('#feas_0_3_0 + span').text('全域');
		// $('#feas_0_5_0 + span').text('全域');
		// $('#feas_0_7_0 + span').text('全域');
		// $('#feas_0_9_0 + span').text('全域');
		// $('#feas_0_11_0 + span').text('全域');
		// $('#feas_0_13_0 + span').text('全域');
		// $('#feas_0_15_0 + span').text('全域');
		// $('#feas_0_17_0 + span').text('全域');
	});
</script> -->
<!-- <script>
	const checkbox = document.getElementsByName('search_element_0[]');
const storage = sessionStorage;

document.addEventListener('DOMContentLoaded', () => {
    autoCheck();
    checkbox.forEach((element) => {
        element.addEventListener('change', (e) => {
            if (e.target.checked) {
                storage[e.target.id] = true;
            } else {
                storage.removeItem(e.target.id);
            }
        });
    });

    document.getElementById('boxform').addEventListener('submit', (e) => {
        e.preventDefault();
        const myForm = document.createElement('form');
        myForm.setAttribute('action', 'index.php');
        myForm.setAttribute('method', 'POST');
        const checkedValues = document.createElement('input');
        checkedValues.setAttribute('type', 'hidden');
        checkedValues.setAttribute('name', 'myCheckbox');
        checkedValues.setAttribute('value', joinSavedCheckBoxes());
        myForm.appendChild(checkedValues);
        document.getElementsByTagName('body')[0].append(myForm);
        myForm.submit();
        storage.clear();
    });
});

const joinSavedCheckBoxes = () => {
    const checkboxes = [];
    for(let i=0, len=storage.length; i<len; i++) {
        if(storage.key(i).indexOf('checkbox_') === 0) {
            checkboxes.push(storage.key(i));
        }
    }
    return checkboxes.join(',');
}

const autoCheck = () => {
    checkbox.forEach((element) => {
        if(storage[element.id]) {
            element.checked = true;
        }
    });
};
</script>
<script>
	const checkbox = document.getElementsByName('search_element_1[]');
const storage = sessionStorage;

document.addEventListener('DOMContentLoaded', () => {
    autoCheck();
    checkbox.forEach((element) => {
        element.addEventListener('change', (e) => {
            if (e.target.checked) {
                storage[e.target.id] = true;
            } else {
                storage.removeItem(e.target.id);
            }
        });
    });

    document.getElementById('boxform').addEventListener('submit', (e) => {
        e.preventDefault();
        const myForm = document.createElement('form');
        myForm.setAttribute('action', 'index.php');
        myForm.setAttribute('method', 'POST');
        const checkedValues = document.createElement('input');
        checkedValues.setAttribute('type', 'hidden');
        checkedValues.setAttribute('name', 'myCheckbox');
        checkedValues.setAttribute('value', joinSavedCheckBoxes());
        myForm.appendChild(checkedValues);
        document.getElementsByTagName('body')[0].append(myForm);
        myForm.submit();
        storage.clear();
    });
});

const joinSavedCheckBoxes = () => {
    const checkboxes = [];
    for(let i=0, len=storage.length; i<len; i++) {
        if(storage.key(i).indexOf('checkbox_') === 0) {
            checkboxes.push(storage.key(i));
        }
    }
    return checkboxes.join(',');
}

const autoCheck = () => {
    checkbox.forEach((element) => {
        if(storage[element.id]) {
            element.checked = true;
        }
    });
};
</script>
<script>
	const checkbox = document.getElementsByName('search_element_2[]');
const storage = sessionStorage;

document.addEventListener('DOMContentLoaded', () => {
    autoCheck();
    checkbox.forEach((element) => {
        element.addEventListener('change', (e) => {
            if (e.target.checked) {
                storage[e.target.id] = true;
            } else {
                storage.removeItem(e.target.id);
            }
        });
    });

    document.getElementById('boxform').addEventListener('submit', (e) => {
        e.preventDefault();
        const myForm = document.createElement('form');
        myForm.setAttribute('action', 'index.php');
        myForm.setAttribute('method', 'POST');
        const checkedValues = document.createElement('input');
        checkedValues.setAttribute('type', 'hidden');
        checkedValues.setAttribute('name', 'myCheckbox');
        checkedValues.setAttribute('value', joinSavedCheckBoxes());
        myForm.appendChild(checkedValues);
        document.getElementsByTagName('body')[0].append(myForm);
        myForm.submit();
        storage.clear();
    });
});

const joinSavedCheckBoxes = () => {
    const checkboxes = [];
    for(let i=0, len=storage.length; i<len; i++) {
        if(storage.key(i).indexOf('checkbox_') === 0) {
            checkboxes.push(storage.key(i));
        }
    }
    return checkboxes.join(',');
}

const autoCheck = () => {
    checkbox.forEach((element) => {
        if(storage[element.id]) {
            element.checked = true;
        }
    });
};
</script>
<script>
	const checkbox = document.getElementsByName('search_element_3[]');
const storage = sessionStorage;

document.addEventListener('DOMContentLoaded', () => {
    autoCheck();
    checkbox.forEach((element) => {
        element.addEventListener('change', (e) => {
            if (e.target.checked) {
                storage[e.target.id] = true;
            } else {
                storage.removeItem(e.target.id);
            }
        });
    });

    document.getElementById('boxform').addEventListener('submit', (e) => {
        e.preventDefault();
        const myForm = document.createElement('form');
        myForm.setAttribute('action', 'index.php');
        myForm.setAttribute('method', 'POST');
        const checkedValues = document.createElement('input');
        checkedValues.setAttribute('type', 'hidden');
        checkedValues.setAttribute('name', 'myCheckbox');
        checkedValues.setAttribute('value', joinSavedCheckBoxes());
        myForm.appendChild(checkedValues);
        document.getElementsByTagName('body')[0].append(myForm);
        myForm.submit();
        storage.clear();
    });
});

const joinSavedCheckBoxes = () => {
    const checkboxes = [];
    for(let i=0, len=storage.length; i<len; i++) {
        if(storage.key(i).indexOf('checkbox_') === 0) {
            checkboxes.push(storage.key(i));
        }
    }
    return checkboxes.join(',');
}

const autoCheck = () => {
    checkbox.forEach((element) => {
        if(storage[element.id]) {
            element.checked = true;
        }
    });
};
</script> -->