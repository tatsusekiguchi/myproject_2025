<?php include('/home/hanahoiku/www/parts/config.php'); ?>
<div class="sidebar">
	<!-- <div class="illust">
		<img src="<?php echo $img_url; ?>news/illust01.png" srcset="<?php echo $img_url; ?>news/illust01.png 1x, <?php echo $img_url; ?>news/illust01@2x.png 2x" alt="お知らせ">
	</div> -->
	<!-- /.illust -->
	<div class="group">
		<h5>カテゴリ</h5>
		<ul class="newscate">
			<li>
				<a href="<?php echo $home_url; ?>news/">
					ALL
				</a>
			</li>
			<?php
			$terms = get_terms('newscate');
			foreach ($terms as $term) {
				echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
			}
			?>
		</ul>
	</div>
	<!-- /.group -->
</div>
<!-- /.sidebar -->