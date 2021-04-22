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
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="robots" content=noindex>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500&family=Gugi&display=swap" rel="stylesheet">  
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
				<div id="loud_logo"><a href="/"><img src="https://stineplejdrup.dk/kea/09_cms/radio_loud/loud_logo.jpg" alt="Radio Loud logo"></a></div>
				<button id="button_loud_live">LOUD Live</button></div>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
