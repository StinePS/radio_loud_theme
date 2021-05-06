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
                <h1>Sendep<span class="red">l</span><span class="pink">a</span><span class="blue">n</span>
                </h1>
            </div>

            <?php include 'lines_right.html'; ?>

            <section>
                <div class="hidden_on_desktop sendeplan_mobile">
                    <img id="sende_mobil_uden" src="https://stineplejdrup.dk/kea/09_cms/radio_loud/img/sendeplan_mobil_uden.jpg" alt="LOUDs sendeplan på mobil" width="428" height="1420">
                    <img id="sende_mobil_med" class="hidden" src="https://stineplejdrup.dk/kea/09_cms/radio_loud/img/sendeplan_mobil.jpg" alt="LOUDs sendeplan på mobil med åben podcast "width="428" height="2243">
                </div>

                <div class="hidden_on_mobile sendeplan_desktop">
                    <img id="sende_desk_uden" src="https://stineplejdrup.dk/kea/09_cms/radio_loud/img/sendeplan_web_uden.jpg" alt="LOUDs sendeplan på desktop" width="1240" height="1710">
                    <img id="sende_desk_med" class="hidden" src="https://stineplejdrup.dk/kea/09_cms/radio_loud/img/sendeplan_web.jpg" alt="LOUDs sendeplan på desktop med pben podcast" width="1240" height="1970">
                </div>
            </section>

            <?php include 'lines_left.html'; ?>
        
        </main><!-- #main -->
        
<script>
    //Lyt efter klik på sendeplan på mobil og desktop
    document.querySelector(".sendeplan_mobile").addEventListener("click", toggleHidden);
    document.querySelector(".sendeplan_desktop").addEventListener("click", toggleHidden);

    //Toggle klassen .hidden på images
    function toggleHidden(event) {
        const images = Array.from(event.currentTarget.querySelectorAll('img'));
        images.forEach(image => image.classList.toggle('hidden'))
    }
</script>

	</div><!-- #primary -->

<?php get_footer();
