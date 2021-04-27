<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

    

    </main><!-- #main -->

    <script>
        let chosenEpisode = <?php echo get_the_ID(); ?>;
        console.log(chosenEpisode);
    </script>
        
</div><!-- #primary -->



<?php get_footer();
