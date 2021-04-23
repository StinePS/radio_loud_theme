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

<<<<<<< HEAD
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
// Start the Loop.
// Start the Loop.
?>while (have_posts()):
       the_post();

       get_template_part('template-parts/content/content', 'single');

       if (is_singular('attachment')) {
           // Parent post navigation.
           the_post_navigation([
               /* translators: %s: Parent post link. */
               'prev_text' => sprintf(
                   __(
                       '<span class="meta-nav">Published in</span><span class="post-title">%s</span>',
                       'twentynineteen'
                   ),
                   '%title'
               ),
           ]);
       } elseif (is_singular('post')) {
           // Previous/next post navigation.
           the_post_navigation([
               'next_text' =>
                   '<span class="meta-nav" aria-hidden="true">' .
                   __('Next Post', 'twentynineteen') .
                   '</span> ' .
                   '<span class="screen-reader-text">' .
                   __('Next post:', 'twentynineteen') .
                   '</span> <br/>' .
                   '<span class="post-title">%title</span>',
               'prev_text' =>
                   '<span class="meta-nav" aria-hidden="true">' .
                   __('Previous Post', 'twentynineteen') .
                   '</span> ' .
                   '<span class="screen-reader-text">' .
                   __('Previous post:', 'twentynineteen') .
                   '</span> <br/>' .
                   '<span class="post-title">%title</span>',
           ]);
       }

       // If comments are open or we have at least one comment, load up the comment template.
       if (comments_open() || get_comments_number()) {
           comments_template();
       }
   endwhile;
// End the loop.
?>

		</main><!-- #main -->
	</div><!-- #primary -->
=======
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

        <article class="single_view grid-2">
            <div>
                <h1 class="single_overskrift"></h1>
                <p class="podcast_description"></p>
            </div>
            <div>
                <img src="" alt="">
            </div>
        </article>

        <section id="episodes">
            <template>
                <article>
                    <img src="" alt="">
                    <div>
                        <h2></h2>
                        <p class="episode_description"></p>
                        <a href="">Afspil</a>
                    </div>
                </article>
            </template>
        </section>

        </main><!-- #main -->


        <script>
            let podcast;
            let episodes;
            let chosenPodcast = <?php echo get_the_ID(); ?>;

            const dbUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/podcasts/" + chosenPodcast;
            const episodeUrl = "https://stineplejdrup.dk/kea/09_cms/radio_loud/wp-json/wp/v2/episoder?per_page=100";
            const container = document.querySelector("#episoder");

            async function getJson() {
                const data = await fetch(dbUrl);
                podcast = await data.json();

                const data2 = await fetch(episodeUrl);
                episoder = await data2.json();
                console.log("episoder: ", episoder);

                showPodcasts();
                showEpisodes();
            }

            showPodcasts() {
                console.log("showPodcasts");
            }

        </script>
</section><!-- #primary -->
>>>>>>> origin/master

<?php get_footer();
