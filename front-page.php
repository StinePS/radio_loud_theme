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
            <h1>Radio L<div class="red">o</div>
                <div class="pink">u</div>
                <div class="blue">d</div>
            </h1>
        </div>
        <section id="karrusel">
            <div id="h2kar">
                <h2>Lær at tage billeder i gråtoner</h2>
            </div>
            <img src="https://placeimg.com/640/480/any/grayscale" alt="">
        </section>

        <section id="nye">
        </section>
        <h2>De mest populære podcasts</h2>

        <section id="pop">
        </section>
        <h2>Instagram</h2>

        <section id="insta">
        </section>
        <h2>Facebook</h2>

        <section id="face">
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<template>
    <article>
        <img src="" alt="" id="">
        <h3 class="titel"></h3>
        <p class="album"></p>
    </article>
</template>

<script>
    //Opretter konstanter for rest api
    const urlNye = "http://krarupkling.dk/kea/2_semester/tema_9/passion/wp-json/wp/v2/sang?per_page=100";
    const urlPop = "http://krarupkling.dk/kea/2_semester/tema_9/passion/wp-json/wp/v2/sang?per_page=100";
    const urlInstagram = "http://krarupkling.dk/kea/2_semester/tema_9/passion/wp-json/wp/v2/sang?per_page=100";
    const urlFacebook = "http://krarupkling.dk/kea/2_semester/tema_9/passion/wp-json/wp/v2/sang?per_page=100";


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
            klon.querySelector("img").src = ny.profilbillede.guid;
            klon.querySelector(".titel").textContent = ny.title.rendered;
            klon.querySelector(".album").innerHTML = ny.album;
            secNye.appendChild(klon);
        });
    }

    function visPopulaere() {
        console.log(populaere);
        populaere.forEach(pop => {
            let klon = temp.cloneNode(true).content;
            klon.querySelector("img").src = pop.profilbillede.guid;
            klon.querySelector(".titel").textContent = pop.title.rendered;
            klon.querySelector(".album").innerHTML = pop.album;
            secPop.appendChild(klon);
        })
    }

    function visInstagram() {
        console.log(instagram);
        instagram.forEach(insta => {
            let klon = temp.cloneNode(true).content;
            klon.querySelector("img").src = insta.profilbillede.guid;
            klon.querySelector(".titel").textContent = insta.title.rendered;
            klon.querySelector(".album").innerHTML = insta.album;
            secInsta.appendChild(klon);
        })
    }

    function visFacebook() {
        console.log(facebook);
        facebook.forEach(face => {
            let klon = temp.cloneNode(true).content;
            klon.querySelector("img").src = face.profilbillede.guid;
            klon.querySelector(".titel").textContent = face.title.rendered;
            klon.querySelector(".album").innerHTML = face.album;
            secFace.appendChild(klon);
        })
    }

    getJson();

</script>
<?php get_footer();
