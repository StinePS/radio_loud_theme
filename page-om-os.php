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
            <h1>O<span class="red">m</span> <span class="pink">o</span><span class="blue">s</span>
            </h1>
        </div>

        <?php include 'lines_right.html'; ?>

        <section>
            <h2>Lyt til LOUD på DAB, via nettet og i vores app!</h2>
            <h3>Web</h3>
            <p>Du kan lytte til LOUD her på hjemmesiden: Klik blot på ”LOUD live” på forsiden eller ved at finde vores <a href="/kea/09_cms/radio_loud/podcasts/">podcasts</a>.</p>
        </section>
        
        <section>
            <h3>App</h3>
            <p>Du kan downloade vores app, Radio LOUD, i <a href="https://apps.apple.com/dk/app/radio-loud/id1498746367?l=da">App Store</a> eller <a href="https://play.google.com/store/apps/details?id=dk.uptime.RadioLoud">Google Play</a>.</p>
        </section>
 
        <section>
            <h3>Internetradio</h3>
            <p>Hvis du har en internetradio, så kan du lytte på den. Det er ikke alle apparater, der endnu har medtaget Radio LOUD på deres lister over stationer. Der findes mange forskellige steder, hvor producenterne henter deres stationslister fra, men kan du ikke finde os på netop din internetradio, kan du selv bruge dette direkte stream: <a href="https://stream.radioloud.dk/loud128">https://stream.radioloud.dk/loud128</a></p>
        </section>

        <section>
            <h3>DAB-dækning (MUX1)</h3>
            <p>Vi arbejder videre på at forbedre dækningen, så også Bornholm, Lolland Falster og det sydfynske øhav får dækning via DAB.</p>
            <p>LOUD (Kulturradio Danmark A/S) sender på programtilladelse udstedt af Radio- og tv-nævnet (Kulturministeriet, Slots- og Kulturstyrelsen), hvor Radio- og tv-nævnet er den kompetente tilsynsmyndighed. <br>
            Mener du, at LOUD har behandlet dig uretfærdigt som medie, så kan du klage til Pressenævnet. Pressenævnets opgave er at behandle klager over pressen.</p>
        </section>

        <?php include 'lines_left.html'; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
