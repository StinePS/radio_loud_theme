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
    <main id="frontpage_main" class="site-main">

        <div class="overskrift">
            <h1>Radio L<div class="red">o</div><div class="pink">u</div><div class="blue">d</div></h1>
        </div>
        <section id="karrusel">
            <div id="h2kar">
                <h2>Lær at tage billeder i gråtoner</h2>
            </div>
            <img src="https://placeimg.com/640/480/any/grayscale" alt="">
        </section>

        <h2>Nyeste podcasts</h2>
        <section id="nye">
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/aktion.jpg" alt="">
                <h3>Aktion</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </article>
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/aldrig_mor.jpg" alt="">
                <h3>Aldrig Mor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </article>
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/alis_stemmer.jpg" alt="">
                <h3>Alis Stemmer</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </article>
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/aloha.jpg" alt="">
                <h3>Aloha</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </article>
        </section>

        <h2>Populære podcasts</h2>
        <section id="pop">
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/bare_sex.jpg" alt="">
                <h3>Bare Sex</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </article>
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/bibelen.jpg" alt="">
                <h3>Bibelklubben</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </article>
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/boern_kemo.jpg" alt="">
                <h3>I får børn - jeg får kemo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </article>
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/spk.jpg" alt="">
                <h3>S P eller K</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </article>
        </section>

        <h2>Instagram</h2>
        <section id="insta">
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/insta1.png" alt="">
                <h3>ADHD</h3>
                <p></p>
            </article>
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/insta2.png" alt="">
                <h3>Fucking Træt!</h3>
                <p></p>
            </article>
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/insta3.png" alt="">
                <h3>Er debatten fri?</h3>
                <p></p>
            </article>
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/insta4.png" alt="">
                <h3>Tourette og sex?</h3>
                <p></p>
            </article>
        </section>

        <h2>Facebook</h2>
        <section id="face">
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/face1.png" alt="">
                <h3>Ondt i sjælen</h3>
                <p></p>
            </article>
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/face2.png" alt="">
                <h3>Religiøs i det offentlige rum</h3>
                <p></p>
            </article>
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/face3.png" alt="">
                <h3>Bliver det den store fest efter corona?</h3>
                <p></p>
            </article>
            <article>
                <img src="http://krarupkling.dk/kea/2_semester/tema_9/billederloud/face4.png" alt="">
                <h3>Anderledes</h3>
                <p></p>
            </article>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
