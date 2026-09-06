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
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

		// End the loop.
		endwhile;
		?>
		<div class="images">
			<div class="image">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/company01.jpg" alt="会社案内">
			</div>
			<div class="image">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/company02.jpg" alt="会社案内">
			</div>
			<div class="image">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/company03.jpg" alt="会社案内">
			</div>
			<div class="image">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/company04.jpg" alt="会社案内">
			</div>
			<div class="image">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/company05.jpg" alt="会社案内">
			</div>
			<div class="image">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/company06.jpg" alt="会社案内">
			</div>
			<div class="image">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/company07.jpg" alt="会社案内">
			</div>
			<div class="image">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/company08.jpg" alt="会社案内">
			</div>
		</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
