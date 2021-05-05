<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.1
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="robots" content=noindex>
	<meta name="description" content="Radio LOUD er Danmarks nye lydfabrik med indhold for, af og om unge og deres liv.">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500&family=Gugi&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS (til karrusel) -->
	<link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />  
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e(
     'Skip to content',
     'twentynineteen'
 ); ?></a>

		<header>
			<div class="header_container">
				<div id="loud_logo"><a href="/kea/09_cms/radio_loud"><img src="https://stineplejdrup.dk/kea/09_cms/radio_loud/loud_logo.svg" alt="Radio Loud logo" width="44" height="44"></a></div>

				<div class="hidden_on_desktop"><button id="burgermenu" aria-label="menu">
					<svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					</svg></button>
				</div>
				<div id="menupunkter" class="hidden_on_mobile">
				<div id="search" class="hidden">
					<input type="text" id="search_field" name="søgefelt">
				</div>
				 <div id="search_button">
					<button id="button_search">	
						<svg id="search_logo" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  						<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
						</svg>
					</button>
				</div>
				<a href="/kea/09_cms/radio_loud/podcasts/">Podcasts</a>
			 	<a href="/kea/09_cms/radio_loud/sendeplan">Sendeplan</a>
			 	<a href="/kea/09_cms/radio_loud/loud-lab">LOUD LAB</a>
				<a href="/kea/09_cms/radio_loud/om-os">Om os</a>
				</div>
				<button id="button_loud_live">LOUD Live</button>
			</div>
		</header><!-- #masthead -->

	<script>
	// Lyt efter klik på burgermenu
	document.querySelector("#burgermenu").addEventListener("click", toggleMenu);
	document.querySelector("#search_button").addEventListener("click", toggleSearch);

	function toggleMenu() {
		console.log("toggleMenu");
		document.querySelector("#menupunkter").classList.toggle("toggle");
	}

	function toggleSearch() {
		console.log("toggleSearch");
		document.querySelector("#search").classList.toggle("hidden");
	}
	</script>

	<div id="content" class="site-content">
