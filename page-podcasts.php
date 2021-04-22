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

			<?php
// Start the Loop.
// Start the Loop.
?>while (have_posts()):
       the_post();

       get_template_part('template-parts/content/content', 'page');

       // If comments are open or we have at least one comment, load up the comment template.
       if (comments_open() || get_comments_number()) {
           comments_template();
       }
   endwhile;
// End the loop.
?>

<!-- Vores kode -->

<template>
    <article>
        <img src="" alt="">
        <div>
            <h2></h2>
            <p class="short_description"></p>
        </div>
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
let categories;
let filterPodcast = "alle";
const dbUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/podcasts?per_page=100";
const catUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/categories";

async function getJson() {
    const data = await fetch(dbUrl);
    const catData = await fetch(catUrl);
    podcasts = await data.json();
    categories = await catData.json();
    console.log(categories);
    showPodcasts();
    generateButtons();
}

function generateButtons() {
    categories.forEach(category => {
        document.querySelector("#filtrering".innerHTML += `<button class="filter" data-podcast="$category.id">${category.name}</button>`)
    })

buttonListener();
}

function buttonListener() {
    document.querySelectorAll("#filtrering button").forEach(knap => {
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
if (filterPodcast == "alle" || podcast.categories.includes(parseInt(filterPodcast))) {
    let clone = temp.cloneNode(true).content;
    clone.querySelector("img").src = podcast.billede.guid;
    clone.querySelector("h2").textContent = podcast.title.rendered;
    clone.querySelector("short_description").innerHTML = podcast.kort_beskriv.rendered;
    clone.querySelector("article").addEventlistener("click", () => {
        location.href = podcast.link;
    })
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
