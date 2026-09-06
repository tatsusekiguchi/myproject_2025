<div class="sidebar">
	<div class="group">
		<h5>カテゴリ</h5>
		<div>
			<ul>
				<?php
				$terms = get_terms('shigotocate');
				foreach ($terms as $term) {
					echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
				}
				?>
			</ul>
		</div>
	</div>
	<!-- /.group -->
</div>
<!-- /.sidebar -->