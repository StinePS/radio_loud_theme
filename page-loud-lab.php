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
            <h1>Loud <span class="red">L</span><span class="pink">a</span><span class="blue">b</span></h1>
        </div>

        <?php include 'lines_right.html'; ?>

        <h2>Du skaber LOUD</h2>
        <section>
            <h3>Hvad er LOUD Lab?</h3>
            <p> LAB er for dig, der gerne vil være med til at forme LOUD. <br>
            LOUD skal være et medie for alle unge, og derfor er det vigtigt, at alle er repræsenteret i LAB: erhvervsskoleelever, universitetsstuderende, de jobsøgende, de stille, de larmende, de aktive, sofaflyderne.</p>
        </section>
            
        <section>
            <h3>Hvor ofte er der LAB?</h3>
            <p> Vi holder LOUD LAB én gang om måneden i hele Danmark, og her kan du 
            sammen med andre unge fra hele landet være med til at udvikle nye podcasts, prøve kræfter med at producere lyd, og du kan pitche dine podcastidéer.</p>
        </section>
            
        <section>
            <h3>Krav?</h3>
            <p> Det kræver ingen specielle forudsætninger at være med. Faktisk er 
            det eneste krav, at du er mellem 15 og 32 år og har lyst til at være med til at udvikle vores podcasts og events.</p>
            <p> For at komme med på LOUD LAB skal du skrive til <a href="mailto:lab@radioloud.dk">lab@radioloud.dk</a>
             og kort fortælle, hvem du er, og hvorfor du har lyst til at være med.</p>
        </section>
            
        <section>
            <h3>COVID-19</h3>
            <p> PÅ GRUND AF CORONARESTRIKTIONERNE KAN VI FOR ØJEBLIKKET IKKE 
            AFHOLDE LOUD LAB. DU KAN DOG STADIG GODT TILMELDE DIG, SÅ DU KAN FÅ INFORMATION OM, HVORNÅR VI IGEN SAMLES FOR AT UDVIKLE LOUD.</p>
        </section>

        <?php include 'lines_left.html'; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
