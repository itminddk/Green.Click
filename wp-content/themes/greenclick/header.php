<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Green_Click
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11429366-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type" : "Organization",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Aalborg",
    "addressRegion": "Nordjylland",
    "postalCode":"9000",
    "streetAddress": "Lyngvej 1"
  },
  "description": "Bureau for online marketing som tilbyder SEO og AdWords",
  "name": "Green.Click",
 "url" : "https://www.greenclickmedia.dk/",
 "telephone": "+45 70 230 540",
  "sameAs" : [
 "https://plus.google.com/+GreenclickmediaDk/videos",
 "https://www.facebook.com/GreenClickMedia",
 "https://www.linkedin.com/company/green-click-media",
 "https://www.youtube.com/user/GreenClickMedia9000"]
 }
</script>

<?php wp_head(); ?>

<link rel="alternate" href='https://greenclickmedia.com/' hreflang='en-GB'>

<link href="https://plus.google.com/+GreenclickmediaDk" rel="publisher" />

<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,500|Roboto:300,400,500' rel='stylesheet' type='text/css'>
</head>

<?php $color = get_field('productpage-color'); ?>
<body <?php body_class( $color ); ?>>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1123780824308502',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="navigation navigation--sticky sticky">
			<div class="sticky__left">
				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180.1 23">
							<path d="M37,23a7.94,7.94,0,0,1-3.2-.6,7.16,7.16,0,0,1-2.5-1.6,7.76,7.76,0,0,1-1.6-2.4,7.65,7.65,0,0,1-.6-3V14.8a9,9,0,0,1,.6-3.4,9.53,9.53,0,0,1,1.6-2.6,8.07,8.07,0,0,1,2.4-1.7,7.17,7.17,0,0,1,2.9-.6,7.45,7.45,0,0,1,3.1.6,6,6,0,0,1,2.2,1.6,8.57,8.57,0,0,1,1.4,2.5,10.73,10.73,0,0,1,.5,3.2v1.5H32.7a4.8,4.8,0,0,0,.5,1.7,4.51,4.51,0,0,0,1,1.4,4.19,4.19,0,0,0,1.4.9,4.84,4.84,0,0,0,1.8.3,7,7,0,0,0,2.5-.5,3.85,3.85,0,0,0,1.8-1.5L43.6,20a5.24,5.24,0,0,1-1,1.1,7.1,7.1,0,0,1-1.4,1,7.51,7.51,0,0,1-1.8.7A19.42,19.42,0,0,1,37,23ZM36.6,9.3a3.19,3.19,0,0,0-1.4.3,2.84,2.84,0,0,0-1.1.8,5,5,0,0,0-.8,1.2,6.87,6.87,0,0,0-.5,1.7h7.5V13a3.53,3.53,0,0,0-.3-1.4,7.46,7.46,0,0,0-.7-1.2,4.44,4.44,0,0,0-1.1-.8A4.15,4.15,0,0,0,36.6,9.3ZM54.7,23a7.94,7.94,0,0,1-3.2-.6A7.16,7.16,0,0,1,49,20.8a7.76,7.76,0,0,1-1.6-2.4,7.65,7.65,0,0,1-.6-3V14.8a9,9,0,0,1,.6-3.4A9.53,9.53,0,0,1,49,8.8a8.07,8.07,0,0,1,2.4-1.7,7.17,7.17,0,0,1,2.9-.6,7.45,7.45,0,0,1,3.1.6,6,6,0,0,1,2.2,1.6A8.57,8.57,0,0,1,61,11.2a10.73,10.73,0,0,1,.5,3.2v1.5H50.3a4.8,4.8,0,0,0,.5,1.7,4.51,4.51,0,0,0,1,1.4,4.19,4.19,0,0,0,1.4.9,4.84,4.84,0,0,0,1.8.3,7,7,0,0,0,2.5-.5,3.85,3.85,0,0,0,1.8-1.5L61.2,20a5.24,5.24,0,0,1-1,1.1,7.1,7.1,0,0,1-1.4,1,7.51,7.51,0,0,1-1.8.7A17.85,17.85,0,0,1,54.7,23ZM54.3,9.3a3.19,3.19,0,0,0-1.4.3,2.84,2.84,0,0,0-1.1.8,5,5,0,0,0-.8,1.2,6.87,6.87,0,0,0-.5,1.7H58V13a3.53,3.53,0,0,0-.3-1.4,7.46,7.46,0,0,0-.7-1.2,4.44,4.44,0,0,0-1.1-.8A4.15,4.15,0,0,0,54.3,9.3Zm48.5,6.8a8.23,8.23,0,0,1-.7,2.8,6,6,0,0,1-1.6,2.2,5.94,5.94,0,0,1-2.3,1.4,9.29,9.29,0,0,1-2.9.5,7.12,7.12,0,0,1-3.4-.8,6.11,6.11,0,0,1-2.4-2.1,14,14,0,0,1-1.5-3,15,15,0,0,1-.5-3.7V10.5A15,15,0,0,1,88,6.8a8.14,8.14,0,0,1,1.5-3.1,7.91,7.91,0,0,1,2.4-2.1A7.42,7.42,0,0,1,95.3.8a9.43,9.43,0,0,1,3,.5,6.78,6.78,0,0,1,2.3,1.4,8.55,8.55,0,0,1,1.5,2.2,9.47,9.47,0,0,1,.7,2.9H99.3a8.47,8.47,0,0,0-.4-1.7,4,4,0,0,0-.7-1.3A2,2,0,0,0,97,4a4.31,4.31,0,0,0-1.7-.3,3.94,3.94,0,0,0-2,.5A4.71,4.71,0,0,0,92,5.7a6.49,6.49,0,0,0-.7,2.1,12.22,12.22,0,0,0-.3,2.6v3a21.12,21.12,0,0,0,.2,2.6,6.49,6.49,0,0,0,.7,2.1,3.53,3.53,0,0,0,1.3,1.4,3.15,3.15,0,0,0,2,.5A3.61,3.61,0,0,0,98,18.9a5.92,5.92,0,0,0,1.2-3h3.6v0.2Zm3-16.1h8.6V19.8h4.9v2.9H105.8V19.8h5.1V2.9h-5.1V0Zm16.5,6.7h8.5V19.8h4.7v2.9H122.2V19.8h5V9.6h-5V6.7h0.1Zm22.9,13.5a5.85,5.85,0,0,0,1.3-.2,2.38,2.38,0,0,0,1.1-.6,1.6,1.6,0,0,0,.7-0.9,2,2,0,0,0,.3-1.1h3.3a5.45,5.45,0,0,1-.5,2.2,5.17,5.17,0,0,1-1.5,1.8,7.19,7.19,0,0,1-2.1,1.2,7.27,7.27,0,0,1-2.5.4,7.94,7.94,0,0,1-3.2-.6,6.58,6.58,0,0,1-2.3-1.7,7.22,7.22,0,0,1-1.4-2.6,10.59,10.59,0,0,1-.5-3.1V14.5a10.59,10.59,0,0,1,.5-3.1,8.16,8.16,0,0,1,1.4-2.6,6.58,6.58,0,0,1,2.3-1.7,7.94,7.94,0,0,1,3.2-.6,7.66,7.66,0,0,1,2.7.4,7.19,7.19,0,0,1,2.1,1.2,5.22,5.22,0,0,1,1.4,1.9,6,6,0,0,1,.5,2.4h-3.3a5,5,0,0,0-.2-1.2,3.59,3.59,0,0,0-.7-1,4.13,4.13,0,0,0-1.1-.7,3.46,3.46,0,0,0-3.2.2,3.45,3.45,0,0,0-1.2,1.2,4.28,4.28,0,0,0-.6,1.7,12.25,12.25,0,0,0-.2,1.9V15a12.25,12.25,0,0,0,.2,1.9,4.92,4.92,0,0,0,.6,1.7,3.45,3.45,0,0,0,1.2,1.2A3.87,3.87,0,0,0,145.2,20.2Zm15.2-4.5-1.9,1.8v5.2H155V0h3.5V13.4l1.5-1.7,4.7-5H169l-6.2,6.6,7.1,9.3h-4.4Zm15.5-.9a4.2,4.2,0,0,1-2.1-.6,5.36,5.36,0,0,1-1.5-1.5,3.7,3.7,0,0,1-.6-2.1,4.2,4.2,0,0,1,.6-2.1A5.36,5.36,0,0,1,173.8,7a3.7,3.7,0,0,1,2.1-.6A4.2,4.2,0,0,1,178,7a5.36,5.36,0,0,1,1.5,1.5,3.7,3.7,0,0,1,.6,2.1,4.2,4.2,0,0,1-.6,2.1,5.36,5.36,0,0,1-1.5,1.5A4.2,4.2,0,0,1,175.9,14.8Zm0-7.4a2.93,2.93,0,0,0-1.6.4A3.45,3.45,0,0,0,173.1,9a3.17,3.17,0,0,0-.4,1.6,4.19,4.19,0,0,0,.4,1.6,3.45,3.45,0,0,0,1.2,1.2,3.4,3.4,0,0,0,3.2,0,3.45,3.45,0,0,0,1.2-1.2,3.17,3.17,0,0,0,.4-1.6,2.93,2.93,0,0,0-.4-1.6,3.45,3.45,0,0,0-1.2-1.2A4.19,4.19,0,0,0,175.9,7.4Zm1,5.6-1.7-2v2h-0.7V8.3h1.4a1.5,1.5,0,0,1,1.1.4,1.28,1.28,0,0,1,.4,1,1.28,1.28,0,0,1-.4,1,1.78,1.78,0,0,1-1,.4l1.7,2h-0.8V13Zm-1-2.6a1.45,1.45,0,0,0,.7-0.2,0.56,0.56,0,0,0,.2-0.6,0.76,0.76,0,0,0-.2-0.5,1.42,1.42,0,0,0-.6-0.2h-0.7v1.5h0.6ZM8,11.9v2.8h3.9l-0.1,1.4a4.58,4.58,0,0,1-1.2,3,3.61,3.61,0,0,1-2.8,1.1,3.94,3.94,0,0,1-2-.5,4.36,4.36,0,0,1-1.3-1.4,6.49,6.49,0,0,1-.7-2.1,21.12,21.12,0,0,1-.2-2.6v-3a19.48,19.48,0,0,1,.2-2.5A6.49,6.49,0,0,1,4.5,6,4.71,4.71,0,0,1,5.8,4.5a3.15,3.15,0,0,1,2-.5,4.67,4.67,0,0,1,1.7.3,3.6,3.6,0,0,1,1.2.8,3.29,3.29,0,0,1,.7,1.3,8.47,8.47,0,0,1,.4,1.7h3.5a8.82,8.82,0,0,0-.7-2.9A7.12,7.12,0,0,0,13.1,3a5.94,5.94,0,0,0-2.3-1.4,4.79,4.79,0,0,0-3-.7,7.42,7.42,0,0,0-3.4.8A6.44,6.44,0,0,0,2,3.7,9.93,9.93,0,0,0,.5,6.8,14.38,14.38,0,0,0,0,10.5v2.9a14.38,14.38,0,0,0,.5,3.7,7.08,7.08,0,0,0,1.5,3,6.89,6.89,0,0,0,2.4,2.1,7.42,7.42,0,0,0,3.4.8,8.36,8.36,0,0,0,2.9-.5A6.78,6.78,0,0,0,13,21.1a7.35,7.35,0,0,0,1.6-2.2,8.87,8.87,0,0,0,.7-2.8V11.9H8Zm75.4,7.2a1.8,1.8,0,1,1-1.8,1.8A1.8,1.8,0,0,1,83.4,19.1ZM129.1,0A2.1,2.1,0,1,1,127,2.1,2.1,2.1,0,0,1,129.1,0ZM78.6,22.7H75.2V12.8a4.45,4.45,0,0,0-.8-2.8A3,3,0,0,0,72,9.1a3.82,3.82,0,0,0-3.2,1.3c-0.7.9-1,2.3-1,4.3v8H64.4V6.7h2.7l0.5,2h0.2a4.63,4.63,0,0,1,2.1-1.8,7.31,7.31,0,0,1,3-.6c3.9,0,5.8,2,5.8,5.9V22.7H78.6ZM64.4,6.7h3.3v5.6H64.4V6.7ZM26.6,6.1a8.12,8.12,0,0,1,1.7.1L28,9.5a7.72,7.72,0,0,0-1.5-.2,4.6,4.6,0,0,0-3.4,1.4,4.75,4.75,0,0,0-1.3,3.5v8.5H18.3V6.7H21l0.5,2.6h0.2A5.83,5.83,0,0,1,23.8,7,4.9,4.9,0,0,1,26.6,6.1Zm-8.2.6h3.4v5.6H18.4V6.7Z" fill="#fff"/>
						</svg>
					</a>
				</div><!-- .site-branding -->
				<?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_id' => 'main-menu', 'container' => '' ) ); ?>
			</div>
			<div class="sticky__right">
				<p>Tlf. 70 230 540</p>
			</div>
		</div>

		<a class="hamburger lines js-lines-toggle">
			<span></span>
		</a>
		<div class="header__inner">

			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180.1 23">
						<path d="M37,23a7.94,7.94,0,0,1-3.2-.6,7.16,7.16,0,0,1-2.5-1.6,7.76,7.76,0,0,1-1.6-2.4,7.65,7.65,0,0,1-.6-3V14.8a9,9,0,0,1,.6-3.4,9.53,9.53,0,0,1,1.6-2.6,8.07,8.07,0,0,1,2.4-1.7,7.17,7.17,0,0,1,2.9-.6,7.45,7.45,0,0,1,3.1.6,6,6,0,0,1,2.2,1.6,8.57,8.57,0,0,1,1.4,2.5,10.73,10.73,0,0,1,.5,3.2v1.5H32.7a4.8,4.8,0,0,0,.5,1.7,4.51,4.51,0,0,0,1,1.4,4.19,4.19,0,0,0,1.4.9,4.84,4.84,0,0,0,1.8.3,7,7,0,0,0,2.5-.5,3.85,3.85,0,0,0,1.8-1.5L43.6,20a5.24,5.24,0,0,1-1,1.1,7.1,7.1,0,0,1-1.4,1,7.51,7.51,0,0,1-1.8.7A19.42,19.42,0,0,1,37,23ZM36.6,9.3a3.19,3.19,0,0,0-1.4.3,2.84,2.84,0,0,0-1.1.8,5,5,0,0,0-.8,1.2,6.87,6.87,0,0,0-.5,1.7h7.5V13a3.53,3.53,0,0,0-.3-1.4,7.46,7.46,0,0,0-.7-1.2,4.44,4.44,0,0,0-1.1-.8A4.15,4.15,0,0,0,36.6,9.3ZM54.7,23a7.94,7.94,0,0,1-3.2-.6A7.16,7.16,0,0,1,49,20.8a7.76,7.76,0,0,1-1.6-2.4,7.65,7.65,0,0,1-.6-3V14.8a9,9,0,0,1,.6-3.4A9.53,9.53,0,0,1,49,8.8a8.07,8.07,0,0,1,2.4-1.7,7.17,7.17,0,0,1,2.9-.6,7.45,7.45,0,0,1,3.1.6,6,6,0,0,1,2.2,1.6A8.57,8.57,0,0,1,61,11.2a10.73,10.73,0,0,1,.5,3.2v1.5H50.3a4.8,4.8,0,0,0,.5,1.7,4.51,4.51,0,0,0,1,1.4,4.19,4.19,0,0,0,1.4.9,4.84,4.84,0,0,0,1.8.3,7,7,0,0,0,2.5-.5,3.85,3.85,0,0,0,1.8-1.5L61.2,20a5.24,5.24,0,0,1-1,1.1,7.1,7.1,0,0,1-1.4,1,7.51,7.51,0,0,1-1.8.7A17.85,17.85,0,0,1,54.7,23ZM54.3,9.3a3.19,3.19,0,0,0-1.4.3,2.84,2.84,0,0,0-1.1.8,5,5,0,0,0-.8,1.2,6.87,6.87,0,0,0-.5,1.7H58V13a3.53,3.53,0,0,0-.3-1.4,7.46,7.46,0,0,0-.7-1.2,4.44,4.44,0,0,0-1.1-.8A4.15,4.15,0,0,0,54.3,9.3Zm48.5,6.8a8.23,8.23,0,0,1-.7,2.8,6,6,0,0,1-1.6,2.2,5.94,5.94,0,0,1-2.3,1.4,9.29,9.29,0,0,1-2.9.5,7.12,7.12,0,0,1-3.4-.8,6.11,6.11,0,0,1-2.4-2.1,14,14,0,0,1-1.5-3,15,15,0,0,1-.5-3.7V10.5A15,15,0,0,1,88,6.8a8.14,8.14,0,0,1,1.5-3.1,7.91,7.91,0,0,1,2.4-2.1A7.42,7.42,0,0,1,95.3.8a9.43,9.43,0,0,1,3,.5,6.78,6.78,0,0,1,2.3,1.4,8.55,8.55,0,0,1,1.5,2.2,9.47,9.47,0,0,1,.7,2.9H99.3a8.47,8.47,0,0,0-.4-1.7,4,4,0,0,0-.7-1.3A2,2,0,0,0,97,4a4.31,4.31,0,0,0-1.7-.3,3.94,3.94,0,0,0-2,.5A4.71,4.71,0,0,0,92,5.7a6.49,6.49,0,0,0-.7,2.1,12.22,12.22,0,0,0-.3,2.6v3a21.12,21.12,0,0,0,.2,2.6,6.49,6.49,0,0,0,.7,2.1,3.53,3.53,0,0,0,1.3,1.4,3.15,3.15,0,0,0,2,.5A3.61,3.61,0,0,0,98,18.9a5.92,5.92,0,0,0,1.2-3h3.6v0.2Zm3-16.1h8.6V19.8h4.9v2.9H105.8V19.8h5.1V2.9h-5.1V0Zm16.5,6.7h8.5V19.8h4.7v2.9H122.2V19.8h5V9.6h-5V6.7h0.1Zm22.9,13.5a5.85,5.85,0,0,0,1.3-.2,2.38,2.38,0,0,0,1.1-.6,1.6,1.6,0,0,0,.7-0.9,2,2,0,0,0,.3-1.1h3.3a5.45,5.45,0,0,1-.5,2.2,5.17,5.17,0,0,1-1.5,1.8,7.19,7.19,0,0,1-2.1,1.2,7.27,7.27,0,0,1-2.5.4,7.94,7.94,0,0,1-3.2-.6,6.58,6.58,0,0,1-2.3-1.7,7.22,7.22,0,0,1-1.4-2.6,10.59,10.59,0,0,1-.5-3.1V14.5a10.59,10.59,0,0,1,.5-3.1,8.16,8.16,0,0,1,1.4-2.6,6.58,6.58,0,0,1,2.3-1.7,7.94,7.94,0,0,1,3.2-.6,7.66,7.66,0,0,1,2.7.4,7.19,7.19,0,0,1,2.1,1.2,5.22,5.22,0,0,1,1.4,1.9,6,6,0,0,1,.5,2.4h-3.3a5,5,0,0,0-.2-1.2,3.59,3.59,0,0,0-.7-1,4.13,4.13,0,0,0-1.1-.7,3.46,3.46,0,0,0-3.2.2,3.45,3.45,0,0,0-1.2,1.2,4.28,4.28,0,0,0-.6,1.7,12.25,12.25,0,0,0-.2,1.9V15a12.25,12.25,0,0,0,.2,1.9,4.92,4.92,0,0,0,.6,1.7,3.45,3.45,0,0,0,1.2,1.2A3.87,3.87,0,0,0,145.2,20.2Zm15.2-4.5-1.9,1.8v5.2H155V0h3.5V13.4l1.5-1.7,4.7-5H169l-6.2,6.6,7.1,9.3h-4.4Zm15.5-.9a4.2,4.2,0,0,1-2.1-.6,5.36,5.36,0,0,1-1.5-1.5,3.7,3.7,0,0,1-.6-2.1,4.2,4.2,0,0,1,.6-2.1A5.36,5.36,0,0,1,173.8,7a3.7,3.7,0,0,1,2.1-.6A4.2,4.2,0,0,1,178,7a5.36,5.36,0,0,1,1.5,1.5,3.7,3.7,0,0,1,.6,2.1,4.2,4.2,0,0,1-.6,2.1,5.36,5.36,0,0,1-1.5,1.5A4.2,4.2,0,0,1,175.9,14.8Zm0-7.4a2.93,2.93,0,0,0-1.6.4A3.45,3.45,0,0,0,173.1,9a3.17,3.17,0,0,0-.4,1.6,4.19,4.19,0,0,0,.4,1.6,3.45,3.45,0,0,0,1.2,1.2,3.4,3.4,0,0,0,3.2,0,3.45,3.45,0,0,0,1.2-1.2,3.17,3.17,0,0,0,.4-1.6,2.93,2.93,0,0,0-.4-1.6,3.45,3.45,0,0,0-1.2-1.2A4.19,4.19,0,0,0,175.9,7.4Zm1,5.6-1.7-2v2h-0.7V8.3h1.4a1.5,1.5,0,0,1,1.1.4,1.28,1.28,0,0,1,.4,1,1.28,1.28,0,0,1-.4,1,1.78,1.78,0,0,1-1,.4l1.7,2h-0.8V13Zm-1-2.6a1.45,1.45,0,0,0,.7-0.2,0.56,0.56,0,0,0,.2-0.6,0.76,0.76,0,0,0-.2-0.5,1.42,1.42,0,0,0-.6-0.2h-0.7v1.5h0.6ZM8,11.9v2.8h3.9l-0.1,1.4a4.58,4.58,0,0,1-1.2,3,3.61,3.61,0,0,1-2.8,1.1,3.94,3.94,0,0,1-2-.5,4.36,4.36,0,0,1-1.3-1.4,6.49,6.49,0,0,1-.7-2.1,21.12,21.12,0,0,1-.2-2.6v-3a19.48,19.48,0,0,1,.2-2.5A6.49,6.49,0,0,1,4.5,6,4.71,4.71,0,0,1,5.8,4.5a3.15,3.15,0,0,1,2-.5,4.67,4.67,0,0,1,1.7.3,3.6,3.6,0,0,1,1.2.8,3.29,3.29,0,0,1,.7,1.3,8.47,8.47,0,0,1,.4,1.7h3.5a8.82,8.82,0,0,0-.7-2.9A7.12,7.12,0,0,0,13.1,3a5.94,5.94,0,0,0-2.3-1.4,4.79,4.79,0,0,0-3-.7,7.42,7.42,0,0,0-3.4.8A6.44,6.44,0,0,0,2,3.7,9.93,9.93,0,0,0,.5,6.8,14.38,14.38,0,0,0,0,10.5v2.9a14.38,14.38,0,0,0,.5,3.7,7.08,7.08,0,0,0,1.5,3,6.89,6.89,0,0,0,2.4,2.1,7.42,7.42,0,0,0,3.4.8,8.36,8.36,0,0,0,2.9-.5A6.78,6.78,0,0,0,13,21.1a7.35,7.35,0,0,0,1.6-2.2,8.87,8.87,0,0,0,.7-2.8V11.9H8Zm75.4,7.2a1.8,1.8,0,1,1-1.8,1.8A1.8,1.8,0,0,1,83.4,19.1ZM129.1,0A2.1,2.1,0,1,1,127,2.1,2.1,2.1,0,0,1,129.1,0ZM78.6,22.7H75.2V12.8a4.45,4.45,0,0,0-.8-2.8A3,3,0,0,0,72,9.1a3.82,3.82,0,0,0-3.2,1.3c-0.7.9-1,2.3-1,4.3v8H64.4V6.7h2.7l0.5,2h0.2a4.63,4.63,0,0,1,2.1-1.8,7.31,7.31,0,0,1,3-.6c3.9,0,5.8,2,5.8,5.9V22.7H78.6ZM64.4,6.7h3.3v5.6H64.4V6.7ZM26.6,6.1a8.12,8.12,0,0,1,1.7.1L28,9.5a7.72,7.72,0,0,0-1.5-.2,4.6,4.6,0,0,0-3.4,1.4,4.75,4.75,0,0,0-1.3,3.5v8.5H18.3V6.7H21l0.5,2.6h0.2A5.83,5.83,0,0,1,23.8,7,4.9,4.9,0,0,1,26.6,6.1Zm-8.2.6h3.4v5.6H18.4V6.7Z" fill="#fff"/>
					</svg>
				</a>
			</div><!-- .site-branding -->

			<nav class="navigation navigation--main" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_id' => 'main-menu', 'container' => '' ) ); ?>

				<a class="hamburger lines js-lines-toggle">
					<span></span>
				</a>
				<p class="nav-phone"><span class="icon icon-mobile"></span>70 230 540</p>
			</nav><!-- #site-navigation -->
		</div>
		<nav class="navigation navigation--text">
			<p class="faded">Tlf. 70 230 540</p>
		</nav>
		<nav class="navigation navigation--blog">
			<form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

				<?php
				$args = array(
					'show_option_none' => __( 'Kategorier' ),
					'orderby'          => 'name',
					'echo'             => 0,
					'exclude' => '1',
				);
				?>

				<?php $select  = wp_dropdown_categories( $args ); ?>
				<?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
				<?php $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); ?>

				<?php echo $select; ?>

				<noscript>
					<input type="submit" value="View" />
				</noscript>

			</form>
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="button button--rounded button--black hidden-sm-down">Oversigt</a>
		</nav>

		<nav class="navigation navigation--primary js-primary-toggle" role="navigation">
			<a class="hamburger lines js-lines-toggle hidden-xs-down">
				<span></span>
			</a>
			<a href="#" class="button hidden-sm-down">Bliv kontaktet</a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => '' ) ); ?>

			<div class="navigation__sub hidden-sm-down">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'container_class' => 'navigation--secondary' ) ); ?>

				<div class="navigation--social hidden-sm-down">
					<ul class="social-icons">
						<?php
						$facebook = get_field('facebook', 'options');
						$googleplus = get_field('googleplus', 'options');
						$linkedin = get_field('linkedin', 'options');
						$youtube = get_field('youtube', 'options'); ?>

						<?php if( $googleplus ) : ?>
							<li>
								<a href="<?php echo $googleplus; ?>" target="_blank"><span class="icon icon-google-plus"></span></a>
							</li>
						<?php endif; ?>
						<?php if( $facebook ) : ?>
							<li>
								<a href="<?php echo $facebook; ?>" target="_blank"><span class="icon icon-facebook"></span></a>
							</li>
						<?php endif; ?>
						<?php if( $linkedin ) : ?>
							<li>
								<a href="<?php echo $linkedin; ?>" target="_blank"><span class="icon icon-linkedin"></span></a>
							</li>
						<?php endif; ?>
						<?php if( $youtube ) : ?>
							<li>
								<a href="<?php echo $youtube; ?>" target="_blank"><span class="icon icon-play"></span></a>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div id="content" class="site-content">
