<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">

			<section class="error-404 not-found">
				<div class="page-header text-center">
					<h1 class="page-title" style="font-size:28px;"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
				</div><!-- .page-header -->

				<div class="page-content text-center">
					<p>ファイルが見つかりません。</p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div>
	</div>
</div>

<?php get_footer(); ?>
