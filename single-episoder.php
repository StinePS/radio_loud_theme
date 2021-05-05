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
				<h1 class="hidden_on_mobile"></h1>
				<h2></h2>
				<p class="epi_beskriv"></p>
				<p class="varighed"></p>
				<div class="app_knapper">
					<a class="apple" href=""><img class="wh-3" src="https://loud.land/wp-content/themes/radioloud/dist/images/apple-podcast_2f6140b7.svg" alt="Apple podcast logo" width="66" height="66"></a>
					<a class="spotify" href=""><img class="wh-3" src="https://loud.land/wp-content/themes/radioloud/dist/images/spotify_977b3a3c.svg" alt="Spotify logo" width="66" height="66"></a>
					<a class="google" href=""><img class="wh-3" src="https://loud.land/wp-content/themes/radioloud/dist/images/google-podcast_27468af1.svg" alt="Google podcast logo" width="66" height="66"></a>
					<a class="loud" href="#"><img class="wh-3" src="https://stineplejdrup.dk/kea/09_cms/radio_loud/loud_logo.svg" alt="Radio Loud logo" width="66" height="66"></a>
				</div>
			</div>
			<div class="grid-image">
				<img class="epi_pic" src="" alt="Podcast-foto" width="578" height="578">
			</div>
		</article>

		<?php include 'lines_right.html'; ?>

		<section id="moreEpisodes">
			<h3 class="big-h3">Seneste episoder</h3>
			<div class="container1 scroll_container">
				<template class="epi_temp">
					<article>
						<img class="epi_pic" src="" alt="" width="250" height="250">
						<h4 class="big-h4"></h4>
					</article>
				</template>
			</div>
		</section>


		<section class="otherPodcasts">
			<h3 class="big-h3">Forslag</h3>
			<div class="container2 scroll_container">
				<template class="pod_temp">
					<article>
						<img class="pod_pic" src="" alt="" width="250" height="250">
						<h4 class="big-h4 hidden"></h4>
					</article>
				</template>
			</div>
		</section>

		<?php include 'lines_left.html'; ?>

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

			const data4 = await fetch(podcastUrl);
			morePodcasts = await data4.json();

			showEpisode();
			sortMoreEpisodes();
			showOtherPodcasts();
		}


		function showEpisode() {
			console.log("showEpisode");
			console.log(episode.title.rendered);
			document.querySelector("h1").innerHTML = podcast.title.rendered;
			document.querySelector("h2").innerHTML = episode.title.rendered;
			document.querySelector(".epi_beskriv").innerHTML = episode.lang_beskrivelse;
			//fjern <p> fra value og behold kun tiden
			document.querySelector(".varighed").textContent = `${episode.varighed.replace(/(<p>)?([\d:.]+)(<\/p>)?/, '$2')} min.`;
			//links til valgte podcast på andre platforme
			document.querySelector(".apple").href = podcast.apple;
			document.querySelector(".spotify").href = podcast.spotify;
			document.querySelector(".google").href = podcast.google;
			document.querySelector(".epi_pic").src = episode.billede.guid;
		}

		//sortér episoder efter udgivelsesdato, nyeste først
		function sortMoreEpisodes() {
			const sort = moreEpisodes.sort((a, b) => {
				let da = new Date(a.udgivelses_date),
					db = new Date(b.udgivelses_date);
				return db - da;
			});
			showMoreEpisodes(sort);
		}

		//vis nyeste episoder af den valgte podcast
		function showMoreEpisodes(sort) {
			console.log("showMoreEpisodes");
			let temp1 = document.querySelector(".epi_temp");
			moreEpisodes.forEach(episode_item => {
				//vis ikke den aktuelle episode i slideren
				if (episode_item.hoerer_til_podcast == podcast.id && episode_item.id != episodeID) {
					//klon billede og titel efter skabelonen temp1
					let clone = temp1.cloneNode(true).content;
					clone.querySelector(".epi_pic").src = episode_item.billede.guid;
					clone.querySelector("h4").textContent = episode_item.title.rendered;
					//lyt efter klik på article
					clone.querySelector("article").addEventListener("click", () => {
						location.href = episode_item.link;
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
				clone.querySelector("h4").textContent = podcast_item.title.rendered;
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
