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
<?php get_template_part( 'include', 'mainimg' ); ?>
<div class="oneday">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 offset-sm-1">
				<h2><?php the_title(); ?></h2>
				<div class="block">
					<div class="row">
						<div class="col-sm">
							<a href="0-2"><img src="https://hanahoiku.com/wordpress/wp-content/uploads/2020/08/TPZ_4310_original.jpg" alt="0・1・2歳児"></a>
							<h4><a href="0-2"><span>0・1・2歳児</span></a></h4>
						</div>
						<div class="col-sm">
							<a href="3-5"><img src="https://hanahoiku.com/wordpress/wp-content/uploads/2020/08/TPZ_0912_original.jpg" alt="3・4・5歳児"></a>
							<h4><a href="3-5"><span>3・4・5歳児</span></a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
