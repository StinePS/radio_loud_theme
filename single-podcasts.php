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

        <article class="single_view grid-2">
            <div>
                <h1></h1>
                <p class="podcast_description"></p>
                <div class="app_knapper">
                    <a class="apple" href=""><img class="wh-2" src="https://loud.land/wp-content/themes/radioloud/dist/images/apple-podcast_2f6140b7.svg" alt="Apple podcast logo"></a>
                    <a class="spotify" href=""><img class="wh-2" src="https://loud.land/wp-content/themes/radioloud/dist/images/spotify_977b3a3c.svg" alt="Spotify logo"></a>
                    <a class="google" href=""><img class="wh-2" src="https://loud.land/wp-content/themes/radioloud/dist/images/google-podcast_27468af1.svg" alt="Google podcast logo"></a>
                    <a class="loud" href="#"><img class="wh-2" src="https://stineplejdrup.dk/kea/09_cms/radio_loud/loud_logo.svg" alt="Radio Loud logo"></a>
                </div>
            </div>
            <div>
                <img class="pod_pic" src="" alt="">
            </div>
        </article>

        <section id="episodes" class="grid-4">
            <h2>Seneste episoder</h2>
            <div class="scroll_cotainer">
            <template>
                <article>
                    <img class="epi_pic" src="" alt="">
                    <h3 class=episode_overskrift></h3>
                </article>
            </template>
            </div>
        </section>

        </main><!-- #main -->


        <script>
            let podcast;
            let episodes;
            let chosenPodcast = <?php echo get_the_ID(); ?>;

            const dbUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/podcasts/" + chosenPodcast;
            const episodeUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/episoder?per_page=100";
            const container = document.querySelector("#episodes");

            async function getJson() {
                const data = await fetch(dbUrl);
                podcast = await data.json();

                const data2 = await fetch(episodeUrl);
                episoder = await data2.json();
                console.log("episoder: ", episoder);

                showPodcasts();
                showEpisodes();
            }

            function showPodcasts() {
                console.log("showPodcasts");
                console.log(podcast.title.rendered);
                document.querySelector("h1").innerHTML = podcast.title.rendered;
                document.querySelector(".podcast_description").innerHTML = podcast.lang_beskriv;
                document.querySelector(".apple").href = podcast.apple;
                document.querySelector(".spotify").href = podcast.spotify;
                document.querySelector(".google").href = podcast.google;
                document.querySelector(".pod_pic").src = podcast.billede.guid;
            }

            function showEpisodes() {
                console.log("showEpisodes");
                let temp = document.querySelector("template");
                episoder.forEach(episode => {
                    if (episode.hoerer_til_podcast == chosenPodcast) {
                        let clone = temp.cloneNode(true).content;
                        clone.querySelector(".epi_pic").src = episode.billede.guid;
                        clone.querySelector("h3").textContent = episode.title.rendered;
                        clone.querySelector("article").addEventListener("click", () => {
                            location.href = episode.link;
                        })
                        container.appendChild(clone);
                    }
                })
            }

            getJson();

        </script>
</div><!-- #primary -->

<?php get_footer();
