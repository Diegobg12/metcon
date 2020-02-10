<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main met-page" role="main">

	<?php 

	get_header(); 
	?>


		<section class="page-back met-page" style =" background: url(<?php echo get_the_post_thumbnail_url()?>) no-repeat top ;background-size: cover,cover; background-position-x: 75%;" class= "about-hero">

			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
	
			<?php endwhile; // End of the loop. ?>
		
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

	

<?php get_footer(); ?>