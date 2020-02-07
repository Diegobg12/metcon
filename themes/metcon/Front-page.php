<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
			<?php

				$pages = array("18", "21", "18");
				$page= get_the_ID();

			?>


			<?php
				if(in_array($page, $pages)){
	
				}
			?>


		<section class="page-back font-page" style =" background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url(<?php echo get_the_post_thumbnail_url()?>) no-repeat top ;background-size: cover,cover;" class= "about-hero">


			<?php while ( have_posts() ) : the_post(); ?>
					<img  src= "<?php echo get_template_directory_uri();?>../../metcon/assets/images/2w.png" alt="">
	
	
			<?php endwhile; // End of the loop. ?>
		
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

	

<?php get_footer(); ?>
