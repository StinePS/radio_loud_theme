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
            <h1>Podc<span class="red">a</span><span class="pink">s</span><span class="blue">t</span></h1>
        </div>

        <?php include 'lines_right.html'; ?>

        <template>
            <article>
                <a href="">
                    <img src="" alt="" width="250" height="250">
                    <div>
                    <h2 class="hidden"></h2>
                    </div>
                </a>
            </article>
        </template>

        <section>
            <h2>Alle podcasts</h2>
            <div id="all" class="scroll_container">
                <template class="all_temp">
                    <article>
                        <img class="all_img" src="" alt="Alle LOUD podcasts" width="250" height="250">
                        <h3 class="all_h3 hidden"></h3>
                    </article>
                </template>
            </div>
        </section>

        <?php include 'lines_left.html'; ?>

        <section>
            <h2>Køn & kærlighed</h2>
            <div id="gender" class="scroll_container">
                <template class="gender_temp">
                    <article>
                        <img class="gender_img" src="" alt="Podcasts om køn og kærlighed" width="250" height="250">
                        <h3 class="gender_h3 hidden"></h3>
                    </article>
                </template>
            </div>
        </section>

        <?php include 'lines_right.html'; ?>

        <section>
            <h2>Debat</h2>
            <div id="debate" class="scroll_container">
                <template class="debate_temp">
                    <article>
                        <img class="debate_img" src="" alt="Podcasts med og om debat" width="250" height="250">
                        <h3 class="debate_h3 hidden"></h3>
                    </article>
                </template>
            </div>
        </section>

            <?php include 'lines_left.html'; ?>

	</main><!-- #main -->

<script>
    //Variabler og konstanter
    let podcasts;
    const dbUrl = "/kea/09_cms/radio_loud/wp-json/wp/v2/podcasts?per_page=100";

    //Variabler og konstanter til de enkelte sektioner
    let allTemp = document.querySelector(".all_temp");
    const allCont = document.querySelector("#all");

    let genderTemp = document.querySelector(".gender_temp");
    const genderCont = document.querySelector("#gender");

    let debateTemp = document.querySelector(".debate_temp");
    const debateCont = document.querySelector("#debate");

    //Hent data fra rest api og kald funktioner
    async function getJson() {
        const data = await fetch(dbUrl);
        podcasts = await data.json();

        sortAll();
    }

    //Sortér podcasts alfabetisk a-å
    function sortAll() {
        console.log("sortAll");
        const sort = podcasts.sort((a, b) => {
		let fa = a.title.rendered.toLowerCase(),
			fb = b.title.rendered.toLowerCase();

		if (fa < fb) {
			return -1;
		}
		if (fa > fb) {
			return 1;
		}
		return 0;
    });
    
    //Kalder showAll med den sorterede variabel
    showAll(sort);
    showGender(sort);
    showDebate(sort);
    }

    //Sortér alfabetisk med (sort), klon "all" articles og tilføj link til podcast
    function showAll(sort) {
        console.log("showAll")
        podcasts.forEach(podcast => {
            if (podcast.kategori) {
                let clone = allTemp.cloneNode(true).content;
                clone.querySelector(".all_img").src = podcast.billede.guid;
                clone.querySelector(".all_h3").src = podcast.title.rendered;
                clone.querySelector("article").addEventListener("click", () => {
                            location.href = podcast.link;
                        })
                        allCont.appendChild(clone);
            }
        })
    }

    //Sortér alfabetisk med (sort), klon "gender" articles og tilføj link til podcast
    function showGender(sort) {
        console.log("showGender")
        podcasts.forEach(podcast => {
            if (podcast.kategori == "Køn & kærlighed") {
                let clone = genderTemp.cloneNode(true).content;
                clone.querySelector(".gender_img").src = podcast.billede.guid;
                clone.querySelector(".gender_h3").src = podcast.title.rendered;
                clone.querySelector("article").addEventListener("click", () => {
                            location.href = podcast.link;
                        })
                        genderCont.appendChild(clone);
            }
        })
    }

    //Sortér alfabetisk med (sort), klon "debate" articles og tilføj link til podcast
    function showDebate(sort) {
        console.log("showDebate")
        podcasts.forEach(podcast => {
            if (podcast.kategori == "Debat") {
                let clone = debateTemp.cloneNode(true).content;
                clone.querySelector(".debate_img").src = podcast.billede.guid;
                clone.querySelector(".debate_h3").src = podcast.title.rendered;
                clone.querySelector("article").addEventListener("click", () => {
                            location.href = podcast.link;
                        })
                        debateCont.appendChild(clone);
            }
        })
    }

getJson();

</script>

</div><!-- #primary -->
<?php get_footer();
