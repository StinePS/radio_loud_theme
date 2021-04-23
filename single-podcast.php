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

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
        
        <article class="single_view grid-2">
            <div>
                <h1 class="single_overskrift"></h1>
                <p class="podcast_description"></p>
            </div>
            <div>
                <img src="" alt="">
            </div>
        </article>

        <section id="episodes">
            <template>
                <article>
                    <img src="" alt="">
                    <div>
                        <h2></h2>
                        <p class="episode_description"></p>
                        <a href="">Afspil</a>
                    </div>
                </article>
            </template>
        </section>
        
        </main><!-- #main -->
        

        <script>
            let podcast;
            let episodes;
            let chosenPodcast = <?php echo get_the_ID(); ?>;

            const dbUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/podcasts/" + chosenPodcast;
            const episodeUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/episoder?per_page=100";
            const container = document.querySelector("#episoder");

            async function getJson() {
                const data = await fetch(dbUrl);
                podcast = await data.json();

                const data2 = await fetch(episodeUrl);
                episoder = await data2.json();
                console.log("episoder: ", episoder);

                showPodcasts();
                showEpisodes();
            }

            showPodcasts() {
                console.log("showPodcasts");
            }

        </script>
</section><!-- #primary -->

<?php get_footer();
