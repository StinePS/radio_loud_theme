<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.1
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

        <article class="single_view grid-2">
            <div class="grid-text">
                <h1 class="hidden_on_mobile"></h1>
                <p class="podcast_description"></p>
                <div class="app_knapper">
                    <a class="apple" href=""><img class="wh-3" src="https://loud.land/wp-content/themes/radioloud/dist/images/apple-podcast_2f6140b7.svg" alt="Apple podcast logo" width="66" height="66"></a>
                    <a class="spotify" href=""><img class="wh-3" src="https://loud.land/wp-content/themes/radioloud/dist/images/spotify_977b3a3c.svg" alt="Spotify logo" width="66" height="66"></a>
                    <a class="google" href=""><img class="wh-3" src="https://loud.land/wp-content/themes/radioloud/dist/images/google-podcast_27468af1.svg" alt="Google podcast logo" width="66" height="66"></a>
                    <a class="loud" href="#"><img class="wh-3" src="https://stineplejdrup.dk/kea/09_cms/radio_loud/loud_logo.svg" alt="Radio Loud logo" width="66" height="66"></a>
                </div>
            </div>
            <div class="grid-image">
                <img class="pod_pic" src="" alt="" width="578" height="578">
            </div>
        </article>

        <?php include 'lines_right.html'; ?>

        <section id="episodes">
            <h2>Seneste episoder</h2>
            <div class="container1 scroll_container">
            <template class="epi_temp">
                <article>
                    <img class="epi_pic" src="" alt="Seneste episoder" width="250" height="250">
                    <h3 class="epi_h3"></h3>
                </article>
            </template>
            </div>
        </section>

		<section class="otherPodcasts">
			<h3 class="big-h3">Forslag</h3>
			<div class="container2 scroll_container">
				<template class="pod_temp">
					<article>
						<img class="pod_pic" src="" alt="Forslag til andre podcasts" width="250" height="250">
						<h3 class="pod_h3 hidden"></h3>
					</article>
				</template>
			</div>
		</section>

        <?php include 'lines_left.html'; ?>

        </main><!-- #main -->


        <script>
            let podcast;
            let episoder;
            let podcastID = <?php echo get_the_ID(); ?>;
            let sort //variabel til sortering

            const dbUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/podcasts/" + podcastID;
            const episodeUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/episoder?per_page=100";
            const podcastUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/podcasts/";
            const container1 = document.querySelector(".container1");
            const container2 = document.querySelector(".container2");

            async function getJson() {
                const data = await fetch(dbUrl);
                podcast = await data.json();

                const data2 = await fetch(episodeUrl);
                episoder = await data2.json();
                console.log("episoder: ", episoder);

                const data3 = await fetch(podcastUrl);
			    morePodcasts = await data3.json();

                showPodcasts();
                sortEpisodes();
                showOtherPodcasts();
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

            function sortEpisodes() {
                const sort = episoder.sort((a, b) => {
                    let da = new Date(a.udgivelses_date),
                    db = new Date(b.udgivelses_date);
                return db - da;
                });
                showEpisodes(sort);
            }

            function showEpisodes(sort) {
                console.log("showEpisodes");
                let temp1 = document.querySelector("template");
                episoder.forEach(episode => {
                    if (episode.hoerer_til_podcast == podcastID) {
                        let clone = temp1.cloneNode(true).content;
                        clone.querySelector(".epi_pic").src = episode.billede.guid;
                        clone.querySelector(".epi_h3").textContent = episode.title.rendered;
                        clone.querySelector("article").addEventListener("click", () => {
                            location.href = episode.link;
                        })
                        container1.appendChild(clone);
                    }
                })
            }

            //vis forslag til andre podcasts
		    function showOtherPodcasts() {
			    console.log("showOtherPodcasts");
			    let temp2 = document.querySelector(".pod_temp");
			    //hvis den viste episode hører til podcast, så skal den pågældende podcast ikke vises som forslag
			    morePodcasts.filter(podcast_item => podcast_item.id !== podcast.id).forEach(podcast_item => {
				//klon billede og titel efter skabelonen temp2
				let clone = temp2.cloneNode(true).content;
				clone.querySelector(".pod_pic").src = podcast_item.billede.guid;
				clone.querySelector(".pod_h3").textContent = podcast_item.title.rendered;
				//lyt efter klik på article
				clone.querySelector("article").addEventListener("click", () => {
					location.href = podcast_item.link;
				})
				container2.appendChild(clone);
			})
		}
            
            getJson();

        </script>
</div><!-- #primary -->

<?php get_footer();
