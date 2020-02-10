<?php

/*
Template Name: contacto
*/


?>

<div id="primary" class="content-area met-page">
    
    <main id="main" class="site-main met-page" role="main">
        
    <?php
      get_header(); 
    ?>
		<section class="contact">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6992653589045!2d-74.10381688558093!3d4.64762864341039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b954c7ea505%3A0xd28c94814b1d1633!2sCentro%20Comercial%20Gran%20Estaci%C3%B3n!5e0!3m2!1sen!2sca!4v1581374207044!5m2!1sen!2sca" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <?php dynamic_sidebar( 'sidebar-2' ); ?>


		</section>

		</main><!-- #main -->

    </div><!-- #primary -->
    


<?php get_footer(); ?>
