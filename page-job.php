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

    <div class="overskrift">
    <h1><span class="red">J</span><span class="pink">o</span><span class="blue">b</span>
    </h1>
    </div>

    <?php include 'lines_right.html'; ?>

    <section>
            <h2>Vil du være en del af Radio LOUD?</h2>
            <p>Du er meget velkommen til at sende en ansøgning til <a href="mailto:job@radioloud.dk">job@radioloud.dk</a></p>
        </section>
            
        <section>
            <h3>Ledige stillinger</h3>
            <p>Vi har desværre ingen jobopslag netop nu.</p>
        </section>

        <?php include 'lines_left.html'; ?>

    </main><!-- #main -->
</section><!-- #primary -->
<?php get_footer();
