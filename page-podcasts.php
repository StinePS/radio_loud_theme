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
            </div>
        </a>
    </article>
</template>

<section id="podcast_main">
    <main>
        <nav id="podcast_filter">
            <button data-podcasts="alle" class="selected">Alle</button>
        </nav>
        <h3 class="filter_name"></h3>
        <section id="podcast_gallery" class="scroll_container">
        </section>
    </main>

<script>
let podcasts;
let categories = new Set();
let filter = "alle"; //filter er fra start "alle"
let sort; //variabel til sortering
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
        document.querySelector("#podcast_filter").innerHTML += `<button class="filter" data-podcasts="${category}">${category}</button>`
    }})
    buttonListener();
}

function buttonListener() {
    document.querySelectorAll("#podcast_filter button").forEach(button => {
        button.addEventListener("click", filtrering);
    })
}

function filtrering() {
    console.log("filtrering")
    //sæt variablen "filter" til værdien af data-podcasts på den klikkede knap
    filter = this.dataset.podcasts;
    //fjern class "selected" fra klikket knap
	document.querySelector(".selected").classList.remove("selected");
	//tilføj class "selected" til klikket knap
	this.classList.add("selected")
	//kald funktion showPodcasts efter indstilling af nyt filter
	const h3 = document.querySelector(".filter_name");
    showPodcasts(filter);
    h3.textContent = this.textContent;
}

//funktion der viser podcasts i liste-view
function showPodcasts(sort) {
    console.log("showPodcasts");
    let container = document.querySelector("#podcast_gallery");
    container.innerHTML = "";
    podcasts.forEach(podcast => {
if (filter == "alle" || podcast.kategori.includes(filter)) {
    let temp = document.querySelector("template");
    let clone = temp.cloneNode(true).content;
    clone.querySelector("img").src = podcast.billede.guid;
    clone.querySelector("h2").innerHTML = podcast.title.rendered;
    clone.querySelector("a").href= podcast.link;
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
