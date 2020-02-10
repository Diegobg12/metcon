<?php

/*
Template Name: nutricion
*/


get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

		<section class="page-back items-left" style =" background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url(<?php echo get_the_post_thumbnail_url()?>) no-repeat top ;background-size: cover,cover;background-position-x: 35%;" class= "about-hero">

			<?php while ( have_posts() ) : the_post(); ?>

			<section class="nutricion">
				<h1>
					<?php the_title(); ?>
				</h1>

				<p> 
					<?php echo get_the_content(); ?>
				</p>
			</section>
	
			<?php endwhile; // End of the loop. ?>
		
		</section>

		</main><!-- #main -->

	</div><!-- #primary -->


