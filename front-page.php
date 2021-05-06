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

<div id="primary" class="frontpage-content-area">
    <main id="frontpage_main" class="site-main">

        <section id="karrusel">
        <?php include 'swiper.html'; ?>
    <h2 class="hidden">S P eller K, Loud Lab, Ofrene og Spørg om alt</h2>    
    </section>

    <div class="overskrift"> 
            <h1>Radio L<span class="red">o</span><span class="pink">u</span><span class="blue">d</span>
            </h1>
        </div>

    <?php include 'lines_right.html'; ?>

        <section id="nyeste">
            <h3 class="big-h3">Nyeste episoder</h3>
            <div id="ny" class="scroll_container">
            <template class="ny_temp">
                <article>
                    <img class="ny_img" src="" alt="Nyeste episoder" width="250" height="250">
                    <h4 class=ny_h4></h4>
                </article>
            </template>
            </div>
        </section>

        <?php include 'lines_left.html'; ?>

        <section id="populaere">
            <h3 class="big-h3">Populære podcasts</h3>
            <div id="pop" class="scroll_container">
            <template class="pop_temp">
                <article>
                    <img class="pop_img" src="" alt="Populære podcasts" width="250" height="250">
                    <h4 class="pop_h4 hidden"></h4>
                </article>
            </template>
            </div>
        </section>

        <?php include 'lines_right.html'; ?>

        <section>
            <div>
                <a class="social" href="https://www.instagram.com/radio.louddk/">
                <svg class="social-icon" width="26" height="26" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"></path>
                </svg><h3 class="big-h3"> Instagram</h3></a>
                <div id="insta" class="scroll_container">
                    <template class="insta_temp">
                        <article>
                            <img src="" alt="" id="">
                            <h4 class="titel hidden"></h4>
                        </article>
                    </template>
                </div>
            </div>
        </section>

        <section>
            <div>
                <a class="social" href="https://www.facebook.com/radiolouddanmark/">
                <svg class="social-icon" width="26" height="26" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M20.007,3H3.993C3.445,3,3,3.445,3,3.993v16.013C3,20.555,3.445,21,3.993,21h8.621v-6.971h-2.346v-2.717h2.346V9.31 c0-2.325,1.42-3.591,3.494-3.591c0.993,0,1.847,0.074,2.096,0.107v2.43l-1.438,0.001c-1.128,0-1.346,0.536-1.346,1.323v1.734h2.69 l-0.35,2.717h-2.34V21h4.587C20.555,21,21,20.555,21,20.007V3.993C21,3.445,20.555,3,20.007,3z"></path>
                </svg><h3 class="big-h3"> Facebook</h3></a>
                <div id="face" class="scroll_container">
                    <template class="face_temp">
                        <article>
                            <img src="" alt="" id="">
                            <h4 class="titel hidden"></h4>
                        </article>
                    </template>
                </div>
            </div>
        </section>
        <?php include 'lines_left.html'; ?>
    </main><!-- #main -->

<script>
    //Opretter variabler
    let nye;
    let popular;
    let instagram;
    let facebook;

    //Opretter konstanter for rest api
    const urlNye = "/kea/09_cms/radio_loud/wp-json/wp/v2/episoder?per_page=100"
    const urlPopular = "/kea/09_cms/radio_loud/wp-json/wp/v2/podcasts?per_page=100";
    const urlInstagram = "/kea/09_cms/radio_loud/wp-json/wp/v2/insta";
    const urlFacebook = "/kea/09_cms/radio_loud/wp-json/wp/v2/face";

    //Opretter variabler for templates og containere
    let nyTemp = document.querySelector(".ny_temp");
    let popTemp = document.querySelector(".pop_temp")
    let instaTemp = document.querySelector(".insta_temp")
    let faceTemp = document.querySelector(".face_temp")

    let secNye = document.querySelector("#ny");
    let secPopular = document.querySelector("#pop");
    let secInsta = document.querySelector("#insta");
    let secFace = document.querySelector("#face");

    //Henter data fra rest api og kalder funktioner
    async function getJson() {
        const nyedata = await fetch(urlNye);
        const popdata = await fetch(urlPopular);
        const instagramdata = await fetch(urlInstagram);
        const facebookdata = await fetch(urlFacebook);

        nye = await nyedata.json();
        popular = await popdata.json();
        instagram = await instagramdata.json();
        facebook = await facebookdata.json();

        sortNye();
        visPopular();
        visInstagram();
        visFacebook();
    }

		//Sortér episoder efter udgivelsesdato, nyeste først
		function sortNye() {
            console.log(sortNye)
			const sort = nye.sort((a, b) => {
				let da = new Date(a.udgivelses_date),
					db = new Date(b.udgivelses_date);
				return db - da;
			});
            visNye(sort)
            console.log("visNye(sort)");
		}

        //Sortér efter dato med (sort), klon "nyeste" articles og tilføj link til episode
        function visNye(sort) {
            console.log(nye);
            nye.forEach(ny => {
                let klon = nyTemp.cloneNode(true).content;
                klon.querySelector(".ny_img").src = ny.billede.guid;
                klon.querySelector(".ny_h4").textContent = ny.title.rendered;
                klon.querySelector("article").addEventListener("click", () => {
						location.href = ny.link;
					})
                secNye.appendChild(klon);
            });
        }

        //Klon "populære" articles og tilføj link til podcasts
        function visPopular() {
            console.log(popular);
            popular.forEach(popu => {
                let klon = popTemp.cloneNode(true).content;
                klon.querySelector(".pop_img").src = popu.billede.guid;
                klon.querySelector(".pop_h4").textContent = popu.title.rendered;
                klon.querySelector("article").addEventListener("click", () => {
						location.href = popu.link;
					})
                secPopular.appendChild(klon);
            })
        }

        //Klon instagram-articles og tilføj link til Instagram
        function visInstagram() {
            console.log(instagram);
            instagram.forEach(insta => {
                let klon = instaTemp.cloneNode(true).content;
                klon.querySelector("img").src = insta.billede.guid;
                klon.querySelector(".titel").textContent = insta.title.rendered;
                //Lyt efter klik på article
                klon.querySelector("article").addEventListener("click", () => {
						location.href = "https://www.instagram.com/radio.louddk/";
					})
                secInsta.appendChild(klon);
            })
        }

        //Klon facebook-articles og tilføj link til Facebook
        function visFacebook() {
            console.log(facebook);
            facebook.forEach(face => {
                let klon = faceTemp.cloneNode(true).content;
                klon.querySelector("img").src = face.billede.guid;
                klon.querySelector(".titel").textContent = face.title.rendered;
                //Lyt efter klik på article
                klon.querySelector("article").addEventListener("click", () => {
						location.href = "https://www.facebook.com/radiolouddanmark/";
					})
                secFace.appendChild(klon);
            })
        }

    getJson();

</script>
</div><!-- #primary -->
<?php get_footer();
