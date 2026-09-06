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
<!-- <div class="mainimg">
	<?php

	$image = get_field('mainimg');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)

	if( $image ) {

		echo wp_get_attachment_image( $image, $size );

	}

	?>
</div> -->
<div class="faq">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 offset-sm-1">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
	<?php
	if( have_rows('qa-01') ):
		?>
		<h3 class="faq-midashi"><span><?php the_field('qa-midashi-01'); ?></span></h3>
		<div class="contents">
		<?php
			while ( have_rows('qa-01') ) : the_row();
			?>
			<div class="block">
				<div class="container">
				  <div class="row">
				    <div class="col col-sm-8 offset-sm-2">
							<h4><?php the_sub_field('q'); ?></h4>
							<div class="answer">
								<?php the_sub_field('a'); ?>
							</div>
				    </div>
				  </div>
				</div>
			</div>
			<?php
			endwhile;
			?>
			</div>
			<?php
	else :
			// no rows found
	endif;
	?>

	<?php
	if( have_rows('qa-02') ):
		?>
		<h3 class="faq-midashi"><span><?php the_field('qa-midashi-02'); ?></span></h3>
		<div class="contents">
		<?php
			while ( have_rows('qa-02') ) : the_row();
			?>
			<div class="block">
				<div class="container">
				  <div class="row">
				    <div class="col col-sm-8 offset-sm-2">
							<h4><?php the_sub_field('q'); ?></h4>
							<div class="answer">
								<?php the_sub_field('a'); ?>
							</div>
				    </div>
				  </div>
				</div>
			</div>
			<?php
			endwhile;
			?>
			</div>
			<?php
	else :
			// no rows found
	endif;
	?>

	<?php
	if( have_rows('qa-03') ):
		?>
		<h3 class="faq-midashi"><span><?php the_field('qa-midashi-03'); ?></span></h3>
		<div class="contents">
		<?php
			while ( have_rows('qa-03') ) : the_row();
			?>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col col-sm-8 offset-sm-2">
							<h4><?php the_sub_field('q'); ?></h4>
							<div class="answer">
								<?php the_sub_field('a'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			endwhile;
			?>
			</div>
			<?php
	else :
			// no rows found
	endif;
	?>

	<?php
	if( have_rows('qa-04') ):
		?>
		<h3 class="faq-midashi"><span><?php the_field('qa-midashi-04'); ?></span></h3>
		<div class="contents">
		<?php
			while ( have_rows('qa-04') ) : the_row();
			?>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col col-sm-8 offset-sm-2">
							<h4><?php the_sub_field('q'); ?></h4>
							<div class="answer">
								<?php the_sub_field('a'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			endwhile;
			?>
			</div>
			<?php
	else :
			// no rows found
	endif;
	?>

</div>


<?php get_footer(); ?>
