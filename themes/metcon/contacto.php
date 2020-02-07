<?php

/*
Template Name: contacto
*/


get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

		<section class="page-back items-left" style =" background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url(<?php echo get_the_post_thumbnail_url()?>) no-repeat top ;background-size: cover,cover;" class= "about-hero">

			<?php while ( have_posts() ) : the_post(); ?>

			<section class="nutricion">
			</section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6992653589045!2d-74.10381688558093!3d4.64762864341039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b954c7ea505%3A0xd28c94814b1d1633!2sCentro%20Comercial%20Gran%20Estaci%C3%B3n!5e0!3m2!1ses!2sca!4v1581117593393!5m2!1ses!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			<?php endwhile; // End of the loop. ?>
		
		</section>

		</main><!-- #main -->

	</div><!-- #primary -->


<?php get_footer(); ?>
