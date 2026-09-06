<div class="mainimg">
	<?php $image01 = get_field('mainimg01');
	if( $image01 ) {
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
		echo wp_get_attachment_image( $image01, $size );
	} else {
	$image = get_field('mainimg');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
	if( $image ) {
		echo wp_get_attachment_image( $image, $size );
		}
	}
	?>
</div>
