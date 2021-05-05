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
    <h1>Pre<span class="red">s</span><span class="pink">s</span><span class="blue">e</span>
    </h1>
    </div>

    <?php include 'lines_right.html'; ?>

    <section>
        <h2>Information og pressebilleder</h2>
        <p>Kontakt os venligst på <a href="mailto:presse@radioloud.dk">presse@radioloud.dk</a></p>
        </section>
            
        <section>
            <h3>Logopakke</h3> 
            <p>Hent <a href="#">LOUDs logopakke</a></p>
        </section>
                    
        <section>
            <h3>LOUD pressemeddelelser</h3> 
            <p>Du finder LOUDs pressemeddelelser på <a href="ritzau.dk/nyhedsrum/radio-loud">ritzau.dk/nyhedsrum/radio-loud</a></p>
        </section>

        <?php include 'lines_left.html'; ?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php get_footer();
