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
                <h1 class="single_overskrift"></h1>
                <p class="podcast_description"></p>
                <a class="apple" href=""><img src="https://loud.land/wp-content/themes/radioloud/dist/images/apple-podcast_2f6140b7.svg" alt="Apple podcast logo"></a>
                <a class="spotify" href=""><img src="https://loud.land/wp-content/themes/radioloud/dist/images/spotify_977b3a3c.svg" alt="Spotify logo"></a>
                <a class="google" href=""><img src="https://loud.land/wp-content/themes/radioloud/dist/images/google-podcast_27468af1.svg" alt="Google podcast logo"></a>
                <a class="loud" href="#"><img src="https://stineplejdrup.dk/kea/09_cms/radio_loud/loud_logo.svg" alt="Radio Loud logo"></a>
            </div>
            <div>
                <img class="pod_pic" src="" alt="">
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
                let temp = document.querySelector("template");
                episoder.forEach(episode => {
                    console.log("Loop ID :", chosenPodcast);
                    if (episode.hoerer_til_podcast == chosenPodcast) {
                        console.log("Loop kører ID :", chosenPodcast);
                        let clone = temp.cloneNode(true).content;
                        clone.querySelector("h2").textContent = epsiode.content.rendered;
                        clone.querySelector(".episode_description").innerHTML = epsiode.content.rendered;
                        clone.querySelector("article").addEventListener("click", () => {
                            location.href = episode.link;
                        })

                        clone.querySelector("a").href = episode.link;
                        console.log("eipsode", episode.link);
                        container.appendChild(clone);
                    }
                })
            }

            getJson();

        </script>
</div><!-- #primary -->

<?php get_footer();
