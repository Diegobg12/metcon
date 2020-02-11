
<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

 ?>


	<div id="primary" class="content-area met-page ">
		<?php
		get_header();
		?>
		<main id="main" class="site-main" role="main">


		<section class="page-back font-page " style =" background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url(<?php echo get_the_post_thumbnail_url()?>) no-repeat top ;background-size: cover,cover;" class= "about-hero">


			<?php while ( have_posts() ) : the_post(); ?>
					<img  src= "<?php echo get_template_directory_uri();?>../../metcon/assets/images/logo/logo-all-white.svg" alt="">
	
	
			<?php endwhile; // End of the loop. ?>
			<a href="http://localhost:8888/metcon/filosofia/">
	
			<i class="fa fa-chevron-right">
	
			</i>
			</a>
		</section>
				
				
				</main><!-- #main -->
			</div><!-- #primary -->
			
			
<?php get_footer(); ?>
			
