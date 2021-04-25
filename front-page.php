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
    <main id="frontpage_main" class="site-main">

        <div class="overskrift">
            <h1>Radio L<span class="red">o</span><span class="pink">u</span><span class="blue">d</span>
            </h1>
        </div>

        <section id="karrusel">
            <div id="h2kar">
                <h2>Lær at tage billeder i gråtoner</h2>
            </div>
            <img src="https://placeimg.com/640/480/any/grayscale" alt="">
        </section>

        <section>
            <h3>Nyeste podcasts</h3>
            <div id="nye" class="post_wrapper">
            </div>
        </section>

        <section>
            <h3>Populære podcasts</h3>
            <div id="pop" class="post_wrapper">
            </div>
        </section>

        <section>
            <h3>Instagram</h3>
            <div id="insta" class="post_wrapper">
            </div>
        </section>

        <section>
            <h3>Facebook</h3>
            <div id="face" class="post_wrapper">
            </div>
        </section>

    </main><!-- #main -->


<template>
    <article>
        <img src="" alt="" id="">
        <h4 class="titel hidden"></h4>
        <p class="short_description"></p>
    </article>
</template>


<script>
    //Opretter konstanter for rest api
    const urlNye = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/ny";
    const urlPop = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/pop";
    const urlInstagram = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/insta";
    const urlFacebook = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/face";


    //Opretter variabler
    let nye;
    let populaere;
    let instagram;
    let facebook;

    //Opretter variabler for template og section
    let temp = document.querySelector("template");
    let secNye = document.querySelector("#nye");
    let secPop = document.querySelector("#pop");
    let secInsta = document.querySelector("#insta");
    let secFace = document.querySelector("#face");


    //Henter data fra rest api og kalder funktionen visNye / visPop / visInstagram / visFacebook
    async function getJson() {

        const nyedata = await fetch(urlNye);
        const popdata = await fetch(urlPop);
        const instagramdata = await fetch(urlInstagram);
        const facebookdata = await fetch(urlFacebook);

        nye = await nyedata.json();
        populaere = await popdata.json();
        instagram = await instagramdata.json();
        facebook = await facebookdata.json();

        visNye();
        visPopulaere();
        visInstagram();
        visFacebook();
    }

    function visNye() {
        console.log(nye);
        nye.forEach(ny => {
            let klon = temp.cloneNode(true).content;
            klon.querySelector("img").src = ny.billede.guid;
            klon.querySelector(".titel").textContent = ny.title.rendered;
            klon.querySelector(".short_description").innerHTML = ny.kort_beskriv;
            secNye.appendChild(klon);
        });
    }

    function visPopulaere() {
        console.log(populaere);
        populaere.forEach(pop => {
            let klon = temp.cloneNode(true).content;
            klon.querySelector("img").src = pop.billede.guid;
            klon.querySelector(".titel").textContent = pop.title.rendered;
            klon.querySelector(".short_description").innerHTML = pop.kort_beskriv;
            secPop.appendChild(klon);
        })
    }

    function visInstagram() {
        console.log(instagram);
        instagram.forEach(insta => {
            let klon = temp.cloneNode(true).content;
            klon.querySelector("img").src = insta.billede.guid;
            klon.querySelector(".titel").textContent = insta.title.rendered;
            klon.querySelector(".short_description").innerHTML = insta.kort_beskriv;
            secInsta.appendChild(klon);
        })
    }

    function visFacebook() {
        console.log(facebook);
        facebook.forEach(face => {
            let klon = temp.cloneNode(true).content;
            klon.querySelector("img").src = face.billede.guid;
            klon.querySelector(".titel").textContent = face.title.rendered;
            klon.querySelector(".short_description").innerHTML = face.kort_beskriv;
            secFace.appendChild(klon);
        })
    }

    getJson();

</script>
</div><!-- #primary -->
<?php get_footer();
