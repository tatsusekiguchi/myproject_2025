<?php include('/home/hanahoiku/www/parts/config.php'); ?>
<div class="sidebar">
	<!-- <div class="illust">
		<img src="<?php echo $img_url; ?>seeds/illust01.png" srcset="<?php echo $img_url; ?>seeds/illust01.png 1x, <?php echo $img_url; ?>seeds/illust01@2x.png 2x" alt="保育のたね">
	</div> -->
	<!-- /.illust -->
	<div class="group">
		<h5>カテゴリ</h5>
		<ul class="shigotocate">
			<li>
				<a href="<?php echo $home_url; ?>shigoto/">
					ALL
				</a>
			</li>
			<?php
			$terms = get_terms('shigotocate');
			foreach ($terms as $term) {
				echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
			}
			?>
		</ul>
	</div>
	<!-- /.group -->
</div>
<!-- /.sidebar -->