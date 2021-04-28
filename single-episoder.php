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
            <div class="grid-text">
                <h1></h1>
                <h2></h2>
                <p class="epi_beskriv"></p>
                <p class="varighed"></p>
                <div class="app_knapper">
                    <a class="apple" href=""><img class="wh-3" src="https://loud.land/wp-content/themes/radioloud/dist/images/apple-podcast_2f6140b7.svg" alt="Apple podcast logo"></a>
                    <a class="spotify" href=""><img class="wh-3" src="https://loud.land/wp-content/themes/radioloud/dist/images/spotify_977b3a3c.svg" alt="Spotify logo"></a>
                    <a class="google" href=""><img class="wh-3" src="https://loud.land/wp-content/themes/radioloud/dist/images/google-podcast_27468af1.svg" alt="Google podcast logo"></a>
                    <a class="loud" href="#"><img class="wh-3" src="https://stineplejdrup.dk/kea/09_cms/radio_loud/loud_logo.svg" alt="Radio Loud logo"></a>
                </div>
            </div>
            <div class="grid-image">
                <img class="epi_pic" src="" alt="">
            </div>
        </article>


        <section id="moreEpisodes">
            <h3 class="single_epi">Seneste episoder</h3>
            <div class="container1 scroll_container">
            <template class="epi_temp">
                <article>
                    <img class="epi_pic" src="" alt="">
                    <h4></h4>
                </article>
            </template>
            </div>
        </section>


        <section id="otherPodcasts">
            <h3 class="single_epi">Lignende podcasts</h3>
            <div class="container2 scroll_container">
            <template class="pod_temp">
                <article>
                    <img class="pod_pic" src="" alt="">
                    <h4></h4>
                </article>
            </template>
            </div>
        </section>


        </main><!-- #main -->


        <script>

            let episode;
            let episodeID = <?php echo get_the_ID(); ?>;
            let moreEpisodes;
            let podcast;

            const dbUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/episoder/" + episodeID;
            const episodeUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/episoder?per_page=100";
            const podcastUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/podcasts/"; 

            const container1 = document.querySelector(".container1");
            const container2 = document.querySelector(".container2");

            async function getJson() {
                const data = await fetch(dbUrl);
                episode = await data.json();

                const data2 = await fetch(episodeUrl);
                moreEpisodes = await data2.json();

                const data3 = await fetch(podcastUrl + episode.hoerer_til_podcast)
                podcast = await data3.json();

                showEpisode();
                showMoreEpisodes();
                //showOtherPodcasts();
            }


            function showEpisode() {
                console.log("showEpisode");
                console.log(episode.title.rendered);
                document.querySelector("h1").innerHTML = podcast.title.rendered;
                document.querySelector("h2").innerHTML = episode.title.rendered;
                document.querySelector(".epi_beskriv").innerHTML = episode.lang_beskrivelse;
                // Fjern <p> fra value og behold kun tiden
                document.querySelector(".varighed").textContent = `${episode.varighed.replace(/(<p>)?([\d:.]+)(<\/p>)?/, '$2')} min.`;
                document.querySelector(".apple").href = podcast.apple;
                document.querySelector(".spotify").href = podcast.spotify;
                document.querySelector(".google").href = podcast.google;
                document.querySelector(".epi_pic").src = episode.billede.guid;
            }

            function showMoreEpisodes() {
                console.log("showMoreEpisodes");
                let temp1 = document.querySelector(".epi_temp");
                moreEpisodes.forEach(episode_item => {
                    console.log(episode_item);
                    if (episode_item.hoerer_til_podcast == podcast.id && episode_item.id != episodeID) {
                        let clone = temp1.cloneNode(true).content;
                        clone.querySelector(".epi_pic").src = episode_item.billede.guid;
                        clone.querySelector("h4").textContent = episode_item.title.rendered;
                        clone.querySelector("article").addEventListener("click", () => {
                            location.href = episode.link;
                        })
                        container1.appendChild(clone);
                    }
                })
            }

            getJson();

        </script>
</div><!-- #primary -->

<?php get_footer();
