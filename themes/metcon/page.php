
<div id="barba-wrapper">
			<div class="barba-container">

<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	

		<section class="page-back filosofia " style =" background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url(<?php echo get_the_post_thumbnail_url()?>) no-repeat top ;background-size: cover,cover; background-position-x: 90%;" class= "about-hero">

			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
	
			<?php endwhile; // End of the loop. ?>
		
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

	

<?php get_footer(); ?>

</div>
</div>