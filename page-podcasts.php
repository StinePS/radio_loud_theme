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

<!-- Vores kode -->

        <div class="overskrift">
            <h1>Podc<span class="red">a</span><span class="pink">s</span><span class="blue">t</span></h1>
        </div>

<template>
    <article>
        <a href="">
            <img src="" alt="">
            <div>
                <h2 class="hidden"></h2>
                <p class="short_description"></p>
            </div>
        </a>
    </article>
</template>

<section id="podcast_main">
    <main>
        <nav id="podcast_filter">
            <button data-podcasts="alle">Alle</button>
        </nav>
        <section id="podcast_gallery">
        </section>
    </main>

<script>
let podcasts;
let categories = new Set();
let filterPodcast = "alle";
let knap;
const dbUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/podcasts?per_page=100";


async function getJson() {
    const data = await fetch(dbUrl);
    podcasts = await data.json();
    podcasts.forEach(podcast => {
        if (podcast.kategori) 
        {podcast.kategori.forEach(category => {categories.add(category)})
    }})
    console.log(categories);
    showPodcasts();
    generateButtons();
}

function generateButtons() {
    categories.forEach(category => {
        if (category) {
        document.querySelector("#podcast_filter").innerHTML += `<button class="filter" data-podcast="${category}">${category}</button>`
    }})

buttonListener();
}

function buttonListener() {
    document.querySelectorAll("#podcast_filter button").forEach(knap => {
        knap.addEventlistener("click", filtrering);
    })
}

function filtrering() {
    filterPodcast = this.dataset.podcast;
    console.log(filterPodcast)
    showPodcasts();
}

function showPodcasts() {
    let temp = document.querySelector("template");
    let container = document.querySelector("#podcast_gallery");
    container.innerHTML = "";
    podcasts.forEach(podcast => {
if (filterPodcast == "alle" || podcast.kategori.includes(filterPodcast)) {

    let clone = temp.cloneNode(true).content;
    clone.querySelector("img").src = podcast.billede.guid;
    clone.querySelector("h2").innerHTML = podcast.title.rendered;
    clone.querySelector(".short_description").innerHTML = podcast.kort_beskriv;
    clone.querySelector("a").href= podcast.link.href;
    container.appendChild(clone);
}
    })
}

getJson();

</script>
</section>
<!-- Vores kode slut -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
