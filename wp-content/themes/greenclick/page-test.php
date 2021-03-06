<?php
/**
 * Template Name: Test - Alle sektioner (ingen WP)
 *
 * @package Green_Click
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="section section--grid">
				<div class="block block--main block--main-front block--green hidden-lg-down">
					<?php
					$headline = get_field('front-desktop-headline');
					$content = get_field('front-desktop-content');
					?>
					<?php if( $headline ) : ?><h1><?php echo $headline; ?></h1><?php endif; ?>
					<?php if( $content ) : ?><p class="phone"><?php echo $content; ?></p><?php endif; ?>

					<div class="services">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 460.1 191.2" xml:space="preserve" enable-background="new 0 0 460.1 191.2">
						  <path class="st0" d="M446.6 121.2l12.8 8.6c-4.1 6.1-14.1 16.6-31.3 16.6 -21.4 0-37.2-16.5-37.2-37.5 0-22.4 16-37.5 35.4-37.5 19.5 0 29 15.5 32.1 23.9l1.7 4.2 -50.2 20.7c3.8 7.5 9.7 11.4 18.2 11.4S442.3 127.4 446.6 121.2L446.6 121.2zM407.2 107.7l33.5-13.9c-1.9-4.7-7.4-7.9-13.9-7.9C418.4 85.7 406.7 93.1 407.2 107.7L407.2 107.7zM366.6 33h16.1v109.8h-16.1V33L366.6 33zM341.1 74.2h15.6v66.7c0 27.7-16.3 39.1-35.7 39.1 -18.2 0-29.1-12.3-33.3-22.2l14.3-6c2.6 6.1 8.8 13.3 18.9 13.3 12.4 0 20-7.7 20-22.1v-5.4h-0.5c-3.7 4.5-10.8 8.6-19.7 8.6 -18.8 0-36-16.3-36-37.4 0-21.2 17.2-37.7 36-37.7 8.9 0 16 4 19.7 8.4h0.5L341.1 74.2 341.1 74.2zM342.3 108.9c0-13.3-8.8-22.9-20-22.9 -11.4 0-20.9 9.6-20.9 22.9 0 13.1 9.6 22.5 20.9 22.5C333.4 131.5 342.3 122 342.3 108.9L342.3 108.9zM196 108.6c0 21.6-16.9 37.5-37.5 37.5s-37.5-16-37.5-37.5c0-21.7 16.9-37.6 37.5-37.6S196 86.9 196 108.6L196 108.6zM179.6 108.6c0-13.5-9.7-22.7-21.1-22.7 -11.4 0-21.1 9.3-21.1 22.7 0 13.3 9.7 22.7 21.1 22.7C169.9 131.4 179.6 122 179.6 108.6L179.6 108.6zM278 108.8c0 21.6-16.9 37.5-37.5 37.5S203 130.4 203 108.8c0-21.7 16.9-37.5 37.5-37.5S278 87 278 108.8L278 108.8zM261.6 108.8c0-13.5-9.7-22.7-21.1-22.7 -11.5-0.1-21.2 9.2-21.2 22.7 0 13.3 9.7 22.7 21.1 22.7C251.8 131.5 261.6 122.1 261.6 108.8L261.6 108.8zM59.3 129.8c-23.5 0-41.9-19-41.9-42.6s18.4-42.5 41.9-42.5c12.7 0 22 5 28.9 11.4l11.3-11.3c-9.6-9.1-22.4-16-40.1-16C27.1 28.8 0 55 0 87.3s27.1 58.5 59.3 58.5c17.4 0 30.6-5.8 40.8-16.4 10.5-10.5 13.8-25.4 13.8-37.4 0-3.8-0.5-7.7-1-10.5H59.3v15.6h38.2c-1.1 9.7-4.2 16.5-8.7 21C83.3 123.7 74.6 129.8 59.3 129.8L59.3 129.8 59.3 129.8z"/>
						</svg>
						<svg class="bing" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 460 191.2" xml:space="preserve" enable-background="new 0 0 460 191.2">
	  						<path class="st0" d="M53.3 46.5l18.3 39.7 27 12.2L1.2 149.7l39.9-35.6V12.6L0 0v150.9l40.9 28.7 102.8-61.2V74.2L53.3 46.5zM229.3 65.2c-11.6 0-20.5 5.1-26.5 15.3h-0.3V33.8l-12.3-3.7v113.5h12.3v-11.1h0.3c5.2 8.6 12.9 12.9 23 12.9 10.8 0 19.4-3.9 25.6-11.6 6.2-7.7 9.4-18 9.4-30.8 0-11.5-2.8-20.7-8.3-27.6C246.9 68.6 239.2 65.2 229.3 65.2zM241.9 126.6c-4.2 5.7-10 8.5-17.5 8.5 -6.3 0-11.6-2.2-15.7-6.6 -4.1-4.4-6.2-9.8-6.2-16.1v-10.7c0-7.5 2.2-13.7 6.5-18.7 4.3-5 10.1-7.5 17.2-7.5 6.7 0 12.1 2.4 16 7.3 3.9 4.8 5.9 11.5 5.9 20.1C248.2 113 246.1 120.9 241.9 126.6zM276.8 143.6h12.3V67h-12.3V143.6zM283.1 33.5c-2.2 0-4.1 0.8-5.6 2.3s-2.3 3.4-2.3 5.7 0.8 4.2 2.3 5.7 3.4 2.2 5.6 2.2 4.2-0.8 5.7-2.3c1.6-1.5 2.4-3.4 2.4-5.6 0-2.3-0.8-4.2-2.4-5.7C287.3 34.3 285.4 33.5 283.1 33.5zM347.2 65.2c-11 0-19.4 4.8-25.2 14.5h-0.3V67h-12.3v76.7h12.3V99.9c0-7 2-12.9 6-17.5s9.1-6.9 15.2-6.9c11.9 0 17.8 8.1 17.8 24.4v43.7H373V96.8c0-10.2-2.2-18.1-6.7-23.5S355.6 65.2 347.2 65.2zM447.7 67v10h-0.3c-5-8.3-12.5-12-22.8-12 -10.9 0-19.6 4.1-25.9 11.8s-9.6 17.9-9.6 30.9c0 11.5 3.2 20.8 9 27.6s13.5 10.2 23 10.2c11.7 0 20.5-4.9 26.4-14.7h0.3v8.4c0 20.1-10.1 30-28.3 30 -6.9 0-13.8-2.1-21.3-5.8l-3.4 11c7.1 3.6 15.4 5.4 24.9 5.4 27 0 40.4-14.1 40.4-42.2V67H447.7L447.7 67zM447.7 109c-0.2 13.6-8.1 25.6-23.3 25.6 -15.1 0-22.5-13-22.5-27.6 0.1-15.3 6.5-31.4 24.3-31.4 11.7 0 21.6 10.1 21.6 22.2L447.7 109 447.7 109z"/>
						</svg>
						<svg class="instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 528.1 191.2" xml:space="preserve" enable-background="new 0 0 528.1 191.2">
						  <g>
						    <path class="st0" d="M27.2 42.7C16.4 47.2 4.5 60 0.7 76.1c-4.7 20.3 15 28.9 16.8 26 2-3.3-3.6-4.5-4.7-15 -1.6-13.7 4.9-28.8 12.8-35.6 1.5-1.3 1.4 0.5 1.4 3.7 0 5.7-0.3 57-0.3 67.7 0 14.5-0.6 19-1.7 23.6 -1 4.6-2.9 7.7-1.5 8.8 1.5 1.4 7.8-1.8 11.5-7 4.4-6.1 6-13.5 6.2-21.5 0.5-9.5 0.5-24.8 0.5-33.5 0-8 0.1-31.4-0.1-45.5C41.3 44.4 31.7 40.7 27.2 42.7"/>
						    <path class="st0" d="M411.1 110.5c-0.3 7.6-2.1 13.4-4.1 17.6 -4 8-12.3 10.6-15.8-1 -2-6.3-2.1-16.9-0.6-25.6 1.4-8.9 5.4-15.7 11.8-15.1C408.8 87 411.9 95.2 411.1 110.5L411.1 110.5zM302.9 157.2c-0.1 12.5-2.1 23.5-6.3 26.6 -6 4.5-14 1.1-12.4-8 1.5-8 8.5-16.3 18.7-26.4C302.9 149.5 303 151.8 302.9 157.2L302.9 157.2zM301.3 110.4c-0.3 6.9-2.2 13.8-4.1 17.7 -4 8-12.4 10.6-15.8-1 -2.4-7.9-1.8-18.1-0.6-24.6 1.5-8.4 5.2-16.2 11.8-16.2C299 86.3 302.2 93.4 301.3 110.4L301.3 110.4zM238.6 110.3c-0.3 7.2-1.8 13.3-4.1 17.8 -4.1 8-12.3 10.6-15.8-1 -2.6-8.4-1.7-19.6-0.6-25.8 1.6-9.1 5.6-15.5 11.8-14.9C236.4 87 239.5 95.2 238.6 110.3L238.6 110.3zM525.8 118.8c-1.6 0-2.3 1.6-2.9 4.4 -2.1 9.4-4.2 11.6-7 11.6 -3.1 0-5.9-4.7-6.7-14.1 -0.6-7.3-0.5-21 0.2-34.4 0.1-2.8-0.6-5.5-8-8.3 -3.2-1.1-7.8-2.9-10.2 2.8 -6.5 15.8-9.1 28.3-9.8 33.5 0 0.2-0.3 0.3-0.5-0.3 -0.3-4.1-1.3-11.5-1.4-27.1 0-3.1-0.7-5.6-4-7.8 -2.2-1.4-8.8-3.8-11.1-0.9 -2.1 2.4-4.5 8.7-6.9 16.3 -1.9 5.9-3.3 10.1-3.3 10.1s0-16.5 0-22.8c0-2.4-1.6-3.2-2.1-3.3 -2.2-0.7-6.5-1.7-8.4-1.7 -2.3 0-2.9 1.3-2.9 3.1 0 0.2-0.3 21.8-0.3 36.8 0 0.7 0 1.4 0 2.2 -1.3 6.9-5.4 16.3-9.8 16.3 -4.5 0-6.5-3.9-6.5-21.9 0-10.4 0.3-15 0.5-22.6 0.1-4.4 0.2-7.7 0.2-8.5 0-2.3-4-3.6-6-3.9 -1.8-0.5-3.6-0.6-4.8-0.6 -1.8 0.1-3.1 1.3-3.1 3 0 0.9 0 2.5 0 2.5 -2.3-3.7-6.1-6.2-8.6-7 -6.8-2-13.8-0.2-19 7.2 -4.2 5.9-6.8 12.5-7.7 22.1 -0.7 7-0.5 14.1 0.8 20.1 -1.6 6.8-4.5 9.5-7.7 9.5 -4.6 0-8-7.6-7.6-20.7 0.2-8.6 2-14.6 3.9-23.3 0.8-3.7 0.1-5.6-1.5-7.6 -1.5-1.7-4.7-2.6-9.3-1.5 -3.2 0.8-7.9 1.6-12.2 2.2 0 0 0.2-1 0.5-2.9 1.1-9.5-9.2-8.7-12.5-5.7 -2 1.8-3.3 3.9-3.8 7.8 -0.8 6.1 4.1 8.9 4.1 8.9 -1.6 7.5-5.6 17.2-9.8 24.3 -2.2 3.8-3.9 6.5-6.1 9.5 0-1.1 0-2.2 0-3.3 0-15.7 0.1-28.1 0.2-32.6 0.1-4.4 0.2-7.7 0.2-8.4 0-1.7-1-2.3-3.1-3.2 -1.8-0.7-4-1.3-6.2-1.4 -2.9-0.2-4.6 1.3-4.5 3.1 0 0.3 0 2.4 0 2.4 -2.3-3.7-6.1-6.2-8.6-7 -6.8-2-13.8-0.2-19 7.2 -4.2 5.9-7 14.1-7.7 22 -0.7 7.3-0.6 13.7 0.3 18.9 -1 5.3-4.1 10.8-7.6 10.8 -4.5 0-7-3.9-7-21.9 0-10.4 0.3-15 0.5-22.6 0.1-4.4 0.2-7.7 0.2-8.5 0-2.3-4-3.6-6-3.9 -2-0.5-3.7-0.6-4.9-0.6 -1.7 0.1-3 1.7-3 2.9v2.6c-2.3-3.7-6.1-6.2-8.6-7 -6.8-2-13.7-0.2-19 7.2 -3.4 4.8-6.3 10.1-7.7 21.9 -0.5 3.4-0.6 6.7-0.6 9.6 -1.4 8.5-7.5 18.2-12.5 18.2 -3 0-5.7-5.7-5.7-17.8 0-16.2 1-39.1 1.1-41.3 0 0 6.3-0.1 7.6-0.1 3.2 0 6 0 10.2-0.2 2.1-0.1 4.1-7.7 2-8.6 -1-0.5-7.9-0.8-10.8-0.8 -2.3 0-8.8-0.6-8.8-0.6s0.6-15.3 0.7-16.9c0.1-1.4-1.6-2.1-2.6-2.4 -2.4-1-4.6-1.5-7.1-2.1 -3.6-0.7-5.2 0-5.5 3 -0.5 4.6-0.7 17.9-0.7 17.9 -2.6 0-11.5-0.5-14.1-0.5 -2.4 0-5 10.4-1.7 10.6 3.9 0.1 10.6 0.2 15 0.5 0 0-0.2 23.4-0.2 30.6 0 0.8 0 1.5 0 2.2 -2.4 12.7-11.1 19.6-11.1 19.6 1.8-8.5-2-14.8-8.7-20.2 -2.5-2-7.5-5.7-13-9.9 0 0 3.2-3.2 6.1-9.5 2.1-4.5 2.1-9.6-2.9-10.8 -8.1-1.8-14.9 4.1-17 10.6 -1.6 4.9-0.7 8.7 2.3 12.5 0.2 0.2 0.5 0.6 0.7 0.8 -1.8 3.6-4.4 8.4-6.5 12 -6 10.3-10.4 18.5-13.9 18.5 -2.8 0-2.6-8.3-2.6-16.1 0-6.7 0.5-16.8 0.9-27.2 0.1-3.4-1.6-5.4-4.5-7.2 -1.7-1-5.5-3.2-7.7-3.2 -3.2 0-12.6 0.5-21.5 26 -1.1 3.2-3.3 9.1-3.3 9.1l0.2-30.7c0-0.7-0.3-1.4-1.3-2 -1.5-0.8-5.5-2.4-9.1-2.4 -1.7 0-2.5 0.8-2.5 2.3l-0.3 48.2c0 3.7 0.1 7.9 0.5 9.8 0.4 1.9 0.9 3.4 1.7 4.2 0.7 0.9 1.6 1.6 3 1.8 1.3 0.2 8.3 1.1 8.7-1.5 0.5-3.2 0.5-6.7 4.1-19.6 5.9-19.7 13.3-29.6 16.9-33.2 0.6-0.6 1.3-0.7 1.3 0.3 -0.1 4.5-0.7 15.5-1 24.9 -0.9 25.1 3.7 29.8 10.2 29.8 5 0 12-4.9 19.6-17.6 4.7-7.8 9.3-15.5 12.6-21.1 2.3 2.1 4.8 4.4 7.5 6.9 6 5.6 7.9 11 6.7 16.2 -1 3.9-4.7 7.9-11.4 4 -2-1.1-2.8-2.1-4.7-3.3 -1-0.7-2.6-0.9-3.7-0.2 -2.5 1.8-3.9 4.2-4.7 7.2 -0.8 2.9 2.1 4.4 5 5.7 2.5 1.1 8.1 2.2 11.7 2.3 13.8 0.5 24.8-6.7 32.5-25 1.4 15.8 7.2 24.8 17.4 24.8 6.8 0 13.7-8.8 16.6-17.4 0.8 3.6 2.1 6.5 3.8 9.2 7.8 12.4 23.1 9.8 30.6-0.8 2.4-3.2 2.8-4.5 2.8-4.5 1.1 10 9.2 13.4 13.8 13.4 5.2 0 10.4-2.4 14.1-10.8 0.5 0.9 0.9 1.7 1.4 2.6 7.8 12.4 23.1 9.8 30.6-0.8 0.3-0.5 0.7-0.9 0.9-1.4l0.2 6.5c0 0-4.4 4-7 6.4 -11.8 10.8-20.8 18.9-21.3 28.6 -0.8 12.2 9.1 16.6 16.5 17.3 7.9 0.6 14.7-3.8 18.8-9.9 3.7-5.4 6.1-17 5.9-28.5 -0.1-4.6-0.2-10.4-0.2-16.6 4.1-4.8 8.8-10.9 13.1-18 4.7-7.7 9.6-18.1 12.3-26.3 0 0 4.4 0 8.9-0.2 1.5-0.1 2 0.2 1.6 1.3 -0.3 1.3-5.9 22.7-0.8 36.9 3.4 9.8 11.2 12.9 15.8 12.9 5.4 0 10.6-4.1 13.3-10.2 0.3 0.7 0.7 1.4 1 2 7.8 12.4 22.9 9.8 30.6-0.8 1.7-2.4 2.8-4.5 2.8-4.5 1.6 10.3 9.6 13.4 14.2 13.4 4.8 0 9.3-2 13-10.7 0.1 3.8 0.3 7 0.8 7.9 0.2 0.6 1.6 1.4 2.5 1.7 4.4 1.6 8.8 0.8 10.4 0.6 1.1-0.2 2.1-1.1 2.2-3.6 0.3-6.2 0.1-16.6 2-24.4 3.2-13.1 6.1-18.1 7.5-20.5 0.8-1.4 1.7-1.6 1.7-0.1 0.1 3 0.2 11.8 1.5 23.6 0.9 8.7 2.1 13.9 3 15.5 2.6 4.7 5.9 4.9 8.5 4.9 1.7 0 5.2-0.5 4.9-3.4 -0.1-1.5 0.1-10.3 3.2-23.2 2.1-8.4 5.4-15.9 6.7-18.7 0.5-1 0.7-0.2 0.7-0.1 -0.2 5.7-0.8 24.7 1.5 35 3.2 14 12.4 15.6 15.6 15.6 6.9 0 12.5-5.2 14.3-18.9C528.6 121.4 527.9 118.8 525.8 118.8L525.8 118.8z"/>
						  </g>
						</svg>
						<svg class="facebook" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 571 112.02"><title>facebook</title><path d="M313.8,69.9c-8.6-1-15.9,1.6-22.2,9.2V76.7h0V32.8l-22.7,2.9v107h22.7v-6.2c3.1,2.1,6,4.7,9.7,6,13.3,4.7,30.8.7,36.9-16.8a55.75,55.75,0,0,0,.7-34.5C335.5,78.2,327.2,71.1,313.8,69.9Zm3.5,46.4c-1,7.1-6.6,10.7-13.3,10.2a21.12,21.12,0,0,1-4.5-1,15.49,15.49,0,0,1-7.6-11.5h0c-0.2-5-.7-15.6,1.6-20.6,2.1-4,5.7-6,10.4-6,6.8-.2,12,3.1,13,10.2A49,49,0,0,1,317.3,116.3Zm77.2-45.2a45.37,45.37,0,0,0-23.7,0c-11.8,3.1-19.6,10.7-22.2,22.5a84.35,84.35,0,0,0-1.4,20.1c0.7,15.1,10.2,26.1,24.8,29.5,0.2,0,.5,0,0.5.2h0c0.5,0,1,.2,1.6.2h0.5a9.35,9.35,0,0,0,2.4.2,59.29,59.29,0,0,0,9.4.2h0.5c15.1-.7,26.3-10.2,29.8-24.8a51.24,51.24,0,0,0,0-24C414.6,82.6,407,74.5,394.5,71.1Zm1.1,43.8c0,0.5-.2,1-0.2,1.4-1.6,6.8-6.2,10.4-12.8,9.9-7.1-.2-11.8-4.5-12.5-11.5a79.24,79.24,0,0,1,0-15.4c0.7-8.1,5.7-12.5,13.3-12.3,6.2,0,10.7,3.6,12.3,9.7C396.6,103,395.6,113.7,395.6,114.9ZM53.3,70.9H37.1V60.2c1.4-10.2,18-8.3,18-8.3V51.2h0V34h0c-0.5-.2-33.4-7.8-40,17.3h0v0.2c-1,3.1-1,17.5-1,19.4H0V90H14.9v52.3H36.6V90H53.4l1.8-19.1H53.3Zm52,9.1-0.7-.7h0l-0.5-.5h0c-5.2-5.2-7.1-6.6-10.9-7.6-15.4-4.5-30.5,3.6-35.3,19.1C55,100,55,109.7,56.5,119.2c3.6,20.9,19.4,27.9,35.7,24.6,5-1,8.9-4.2,12.3-8.6a6.74,6.74,0,0,0,.7-1v9.2h21.1V70.9H105.2l0.1,9.1h0Zm-1.9,36c-0.7,6.6-6,10.7-12.5,10.4s-10.7-3.6-12.3-9.9c-1.6-8.9.2-19.6,0.5-20.4,1.9-6,6-8.9,12.5-8.9,6.2,0.2,10.9,4,11.8,10.4A113,113,0,0,1,103.4,116Zm87.8,21.4c-1-3.6-2.1-7.1-3.1-10.7l-1-4s-26.7,12.8-30.8-11.5a79.92,79.92,0,0,1,.2-12c1-7.6,5.5-11.5,12.8-12a44.23,44.23,0,0,1,7.3.2c3.4,0.5,6.6,1.6,10.2,2.4,1.4-4,2.6-7.6,3.6-11.5a14.24,14.24,0,0,1,.5-1.6h0l0.5-2.4-1-1h0a9.66,9.66,0,0,0-3.4-1.6,6.69,6.69,0,0,0-1.9-.5,3,3,0,0,0-1-.2h0c-7.1-2.1-14.2-2.1-21.4-1.4-15.4,1.6-25.8,10.7-28.7,25.6a55.71,55.71,0,0,0,.2,23.7c2.6,11.8,9.7,19.6,21.4,23,7.6,2.4,15.4,2.4,23.2,1a67.37,67.37,0,0,0,11.2-3.4l1.4-.5-0.2-1.6h0ZM261,109.5a106.2,106.2,0,0,0-.7-14.9c-1.9-13.3-10.2-22-23.2-24a66.12,66.12,0,0,0-15.4-.2c-14.2,1.4-24.6,10.2-26.9,23.2a81.14,81.14,0,0,0-.5,24.6c1.6,12,7.6,19.6,17.5,23.5H212c4.7,1.4,27.2,7.3,47.3-2.6l-0.7-3.4h0c-1-4-2.1-7.8-3.1-11.8v-0.2a3.1,3.1,0,0,1-1,.2h0c-0.7.2-1.9,0.5-2.6,0.7a0.65,0.65,0,0,0-.5.2c-3.1.7-7.3,1.9-12,2.6a63.11,63.11,0,0,1-11.5,0c-6.2-1-11.2-4.5-10.9-12.5h44.6v-0.7Zm-20.3-10H216.1c0-5,.7-9.4,5-12.3a13.62,13.62,0,0,1,14.4-.5C240.4,89.6,240.7,94.3,240.7,99.5ZM571,71.6H546.9l-20.8,32.6V32.7l-22.8,2.9v107h22.8V110l20.8,32.6H571l-22.7-35.5Zm-98.9-.5a45.37,45.37,0,0,0-23.7,0c-11.8,3.1-19.6,10.7-22.2,22.5a84.35,84.35,0,0,0-1.4,20.1c0.7,15.1,10.2,26.1,24.8,29.5,0.2,0,.5,0,0.5.2h0c0.5,0,1,.2,1.6.2h0.5a9.35,9.35,0,0,0,2.4.2,59.29,59.29,0,0,0,9.4.2h0.5c15.1-.7,26.3-10.2,29.8-24.8a51.24,51.24,0,0,0,0-24C492.2,82.6,484.6,74.5,472.1,71.1Zm1,43.8c0,0.5-.2,1-0.2,1.4-1.6,6.8-6.2,10.4-12.8,9.9-7.1-.2-11.8-4.5-12.5-11.5a79.24,79.24,0,0,1,0-15.4c0.7-8.1,5.7-12.5,13.3-12.3,6.2,0,10.7,3.6,12.3,9.7C474.2,103,473.1,113.7,473.1,114.9Z" transform="translate(0 -32.7)" fill="#fff"/></svg>
					</div>
				</div>

				<div class="block block--main block--green hidden-xl-up">
					<?php
					$headline_mobile = get_field('front-mobile-headline');
					$content_mobile = get_field('front-mobile-content'); ?>

					<?php if( $headline_mobile ) : ?><h1 class="whale"><?php echo $headline_mobile; ?></h1><?php endif; ?>
					<?php if( $content_mobile ) : ?><p class="wheat faded"><?php echo $content_mobile; ?></p><?php endif; ?>

					<?php
					$button = get_field('front-mobile-button-text');
					$link = get_field('front-mobile-button-link');
					$button_two = get_field('front-mobile-button-two-text');
					$link_two = get_field('front-mobile-button-two-link'); ?>

					<?php if( $button && !$button_two ) : ?><a href="<?php echo $link; ?>" class="button button--blue"><?php echo $button; ?></a><?php endif; ?>
					<?php if( $button && $button_two ) : ?>
						<div class="button-group">
							<a href="<?php echo $link; ?>" class="button button--blue"><?php echo $button; ?></a>
							<a href="<?php echo $link_two; ?>" class="button button--white button--outline"><?php echo $button_two; ?></a>
						</div>
					<?php endif; ?>

					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400.29 265.19"><title>gc-front</title><g style="isolation:isolate"><g id="Layer_1" data-name="Layer 1"><path d="M218.6,392.49h0c0.08-1.28.12-2.57,0.12-3.88a64.58,64.58,0,0,0-129.15,0c0,1.3,0,2.59.12,3.88a21.63,21.63,0,0,0,.39,4.28A64.18,64.18,0,0,0,93,409.35c5.6,20,20.68,61.58,61.17,143.2,40.5-81.62,55.58-123.17,61.17-143.2a64.19,64.19,0,0,0,2.89-12.58A21.62,21.62,0,0,0,218.6,392.49Z" transform="translate(-89.57 -305.5)" fill="#e14c34"/><circle cx="64.58" cy="83.12" r="28.7" fill="#6a2e24"/><path d="M218.21,396.77a21.62,21.62,0,0,0,.39-4.28c0.08-1.28.12-2.57,0.12-3.88A64.58,64.58,0,0,0,154.15,324v228.5c40.5-81.62,55.58-123.17,61.17-143.2A64.19,64.19,0,0,0,218.21,396.77Z" transform="translate(-89.57 -305.5)" fill="#1d1e1c" opacity="0.1" style="mix-blend-mode:multiply"/><line x1="320.42" y1="190.33" x2="320.42" y2="157.04" fill="none" stroke="#efc48c" stroke-miterlimit="10" stroke-width="30"/><line x1="320.42" y1="202.04" x2="320.42" y2="190.33" fill="none" stroke="#134679" stroke-miterlimit="10" stroke-width="30"/><line x1="320.41" y1="247.04" x2="320.42" y2="202.04" fill="none" stroke="#134679" stroke-miterlimit="10" stroke-width="30"/><circle cx="413.03" cy="400.8" r="61.83" transform="translate(-252.07 97.07) rotate(-44.32)" fill="none" stroke="#134679" stroke-miterlimit="10" stroke-width="30"/><path d="M411.13,324l-2.29,228.5H425V476.64A76.77,76.77,0,0,0,411.13,324Z" transform="translate(-89.57 -305.5)" fill="#1d1e1c" opacity="0.1" style="mix-blend-mode:multiply"/><circle cx="192.13" cy="132.6" r="132.6" fill="#fff"/><path d="M281.71,325.5a112.6,112.6,0,1,1-79.62,33,111.86,111.86,0,0,1,79.62-33m0-20A132.6,132.6,0,1,0,414.3,438.1a132.6,132.6,0,0,0-132.6-132.6h0Z" transform="translate(-89.57 -305.5)" fill="#1e7961"/><circle cx="192.13" cy="132.6" r="76.22" fill="none" stroke="#1e7961" stroke-miterlimit="10" stroke-width="20"/><circle cx="192.13" cy="132.6" r="22.71" fill="#1e7961"/><path d="M281.71,305.5V570.69A132.6,132.6,0,1,0,281.71,305.5Z" transform="translate(-89.57 -305.5)" fill="#010101" opacity="0.1"/></g></g></svg>
				</div>

				<div class="block block--bg-image block--green-dark hidden-lg-down" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/build/assets/images/magnet.svg');"></div>

				<?php
				$bg = get_field('case-bg-image');
				$image = get_field('case-image');
				$case_button = get_field('case-button-text');
				$case_link = get_field('case-button-link'); ?>

				<div class="block block--case block--sub block--bg-image hidden-lg-down" style="background-image: url('<?php echo $bg['url']; ?>');">
					<span>Casestory</span>
					<?php if( $image ) : ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><?php endif; ?>
					<?php if( $case_button ) : ?><a href="<?php echo $case_link; ?>" class="button button--grey"><?php echo $case_button; ?></a><?php endif; ?>
				</div>

				<div class="block block--sub block--list block--grey-alt hidden-lg-down">
					<span>Løsninger</span>

					<div class="block--list__content">
						<?php
						$title = get_field('service-title');
						$content = get_field('service-content'); ?>

						<h1 class="whale"><?php echo $title; ?></h1>
						<p class="wheat"><?php echo $content; ?></p>
					</div>

					<?php
					$adwords_button = get_field('service-adwords-button-text');
					$adwords_link = get_field('service-adwords-button-link');
					$seo_button = get_field('service-seo-button-text');
					$seo_link = get_field('service-seo-button-link');
					$platforms_button = get_field('service-platforms-button-text');
					$platforms_link = get_field('service-platforms-button-link'); ?>

					<ul>
						<li>
							<a href="<?php echo $adwords_link; ?>" class="button button--green"><?php echo $adwords_button; ?></a>
						</li>
						<li>
							<a href="<?php echo $seo_link; ?>" class="button button--green"><?php echo $seo_button; ?></a>
						</li>
						<li>
							<a href="<?php echo $platforms_link; ?>" class="button button--green"><?php echo $platforms_button; ?></a>
						</li>
					</ul>


					<div class="premium">
						<svg class="svg-premium" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 287.4 287.4">
						  <title>Premium</title>
						  <g id="Layer_2" data-name="Layer 2">
						    <g>
						      <path d="M19,286.5a18.05,18.05,0,0,1-18-18V19A18.05,18.05,0,0,1,19,1H268.4a18.05,18.05,0,0,1,18,18V268.4a18.05,18.05,0,0,1-18,18H19v0.1Z" fill="#f5fafe"/>
						      <path d="M268.5,2a17,17,0,0,1,17,17V268.4a17,17,0,0,1-17,17H19a17,17,0,0,1-17-17V19A17.12,17.12,0,0,1,19,2H268.5m0-2H19A19,19,0,0,0,0,19V268.4a19,19,0,0,0,19,19H268.4a19,19,0,0,0,19-19V19A18.91,18.91,0,0,0,268.5,0h0Z" fill="#a9d7f1"/>
						    </g>
						    <rect x="2" y="85.1" width="283.5" height="56.7" fill="#327cc1"/>
						    <g>
						      <path d="M95.3,27.8c-1.3,1.4-2.6,2.7-4,4.1-0.4-.3-0.7-0.6-1.1-0.9a15,15,0,0,0-7.7-3.2A15.39,15.39,0,0,0,65.5,40a15.57,15.57,0,0,0,2.8,13.2,14.9,14.9,0,0,0,10.1,5.9,15.27,15.27,0,0,0,11.5-2.6,11.41,11.41,0,0,0,4.8-7.9,2.77,2.77,0,0,0,.1-0.9,0.27,0.27,0,0,0-.3-0.3H81.3c-0.6,0-.6,0-0.6-0.6V42.2c0-.4.1-0.5,0.5-0.5H99.8a0.5,0.5,0,0,1,.6.6A21.39,21.39,0,0,1,98.5,55a17.19,17.19,0,0,1-8.3,8.1A22.08,22.08,0,0,1,59.1,48a20.2,20.2,0,0,1,2.4-14.8A22,22,0,0,1,73.8,23.1a20.52,20.52,0,0,1,6.5-1,21.06,21.06,0,0,1,13.4,4.5c0.5,0.4.9,0.8,1.3,1.1A0.28,0.28,0,0,1,95.3,27.8Z" fill="#4285f4"/>
						      <path d="M164.8,69.6c1.8-.8,3.5-1.5,5.2-2.2a10,10,0,0,0,2,2.9,7.68,7.68,0,0,0,6.3,2,6.73,6.73,0,0,0,6.2-6.1c0.1-1.4.1-2.8,0.2-4.2a0.1,0.1,0,0,1-.1-0.1c-0.1.1-.2,0.1-0.3,0.2a9,9,0,0,1-6.3,3c-6,.6-11.9-3.7-13.7-9.7a15.93,15.93,0,0,1-.6-4.3,14,14,0,0,1,10.5-13.3,10.37,10.37,0,0,1,9,1.7c0.4,0.3.8,0.7,1.4,1.2V39.2c0-.9-0.1-0.8.8-0.8h4.4c0.4,0,.5.1,0.5,0.5V64a16,16,0,0,1-2.3,8.5,11,11,0,0,1-7.9,5,14.23,14.23,0,0,1-7.9-.7,12.69,12.69,0,0,1-6.1-5.1A23.93,23.93,0,0,1,164.8,69.6Zm12.6-9.8a7.25,7.25,0,0,0,5.8-2.8,8.64,8.64,0,0,0,1.8-4.9,10.47,10.47,0,0,0-1.1-5.5,7,7,0,0,0-6.3-3.8,7.46,7.46,0,0,0-6.5,3.6,8.89,8.89,0,0,0-1.1,7.1A7.59,7.59,0,0,0,177.4,59.8Z" fill="#4285f4"/>
						      <path d="M116.6,37.4c5.1,0.2,9.2,2.1,12,6.5a12.93,12.93,0,0,1,1.9,6.4,13.78,13.78,0,0,1-1.8,8.2,13.39,13.39,0,0,1-9.5,6.5A14.1,14.1,0,0,1,109,63a13.51,13.51,0,0,1-6-9.3,13.53,13.53,0,0,1,4.4-12.8,12.62,12.62,0,0,1,6.9-3.2A20.79,20.79,0,0,1,116.6,37.4Zm8.1,13.7c-0.1-.5-0.1-1.1-0.2-1.7a7.85,7.85,0,0,0-6.8-6.5,7.11,7.11,0,0,0-6.7,2.6,8.7,8.7,0,0,0-1.7,8.6,7.75,7.75,0,0,0,11.2,4.8C123.4,57.2,124.6,54.5,124.7,51.1Z" fill="#ea4335"/>
						      <path d="M146.8,37.4c5.1,0.2,9.2,2.1,12,6.5a12.93,12.93,0,0,1,1.9,6.4,13.78,13.78,0,0,1-1.8,8.2,13.39,13.39,0,0,1-9.5,6.5,14.1,14.1,0,0,1-10.2-2,13.51,13.51,0,0,1-6-9.3,13.53,13.53,0,0,1,4.4-12.8,12.62,12.62,0,0,1,6.9-3.2A16,16,0,0,1,146.8,37.4Zm8,13.7c-0.1-.5-0.1-1.1-0.2-1.7a7.85,7.85,0,0,0-6.8-6.5,7.11,7.11,0,0,0-6.7,2.6,8.7,8.7,0,0,0-1.7,8.6,7.75,7.75,0,0,0,11.2,4.8C153.5,57.2,154.7,54.5,154.8,51.1Z" fill="#fbbc05"/>
						      <path d="M228.8,47.7c-6.3,2.6-12.5,5.2-18.7,7.7,2.3,5.6,10.7,5.9,13.7.5,1.5,1,3.1,2.1,4.6,3.1a0.31,0.31,0,0,0-.1.2,14,14,0,0,1-9,5.6c-7,1.1-14.1-2.8-15.6-10.6a14.23,14.23,0,0,1,1.9-11,12.1,12.1,0,0,1,9-5.8c5.5-.7,9.6,1.6,12.4,6.2C227.6,45,228.1,46.3,228.8,47.7Zm-19.6,3.2c4.2-1.8,8.4-3.5,12.5-5.2l-0.3-.6a5.68,5.68,0,0,0-5.8-2.4,7.77,7.77,0,0,0-6.4,6.1A5,5,0,0,0,209.2,50.9Z" fill="#ea4335"/>
						      <path d="M194.4,43.8V24c0-.6,0-0.6.6-0.6h4.8c0.6,0,.6,0,0.6.6V63.7c0,0.6,0,.6-0.7.6h-4.9c-0.4,0-.5-0.1-0.5-0.5C194.4,57.1,194.4,50.5,194.4,43.8Z" fill="#34a853"/>
						    </g>
						    <g>
						      <path d="M120,118.6h-8.9l-2,5.6h-2.9l8.1-21.3h2.5l8.2,21.3h-2.9Zm-8-2.3h7.3l-3.6-10Z" fill="#fff"/>
						      <path d="M129.3,124.1V102.8h6a9.62,9.62,0,0,1,4.9,1.2,8.58,8.58,0,0,1,3.3,3.5,11.07,11.07,0,0,1,1.2,5.2v1.4a11.2,11.2,0,0,1-1.2,5.3,8.58,8.58,0,0,1-3.3,3.5,10,10,0,0,1-5,1.2h-5.9Zm2.8-19v16.7h3a6.62,6.62,0,0,0,5.1-2A8.39,8.39,0,0,0,142,114v-1.2a9,9,0,0,0-1.7-5.7,6.11,6.11,0,0,0-4.8-2h-3.4Z" fill="#fff"/>
						      <path d="M155.1,117.4l0.4,2.8,0.6-2.5,4.2-14.9h2.4l4.1,14.9,0.6,2.6,0.5-2.9,3.3-14.6H174l-5.2,21.3h-2.6l-4.4-15.5-0.3-1.6-0.3,1.6-4.6,15.5H154l-5.2-21.3h2.8Z" fill="#fff"/>
						      <path d="M195,114.2a13.49,13.49,0,0,1-1.1,5.5,8.22,8.22,0,0,1-3,3.6,7.61,7.61,0,0,1-4.5,1.2,8.41,8.41,0,0,1-4.5-1.2,7.94,7.94,0,0,1-3-3.5,12.53,12.53,0,0,1-1.1-5.3V113a12.67,12.67,0,0,1,1.1-5.4,8.22,8.22,0,0,1,3-3.6,8.73,8.73,0,0,1,9-.1,7.7,7.7,0,0,1,3,3.6A13.49,13.49,0,0,1,195,113v1.2Zm-2.8-1.4a9.55,9.55,0,0,0-1.5-5.8,5.1,5.1,0,0,0-4.3-2,5,5,0,0,0-4.2,2,10.05,10.05,0,0,0-1.6,5.6v1.6a9.76,9.76,0,0,0,1.5,5.8,4.92,4.92,0,0,0,4.3,2.1,5,5,0,0,0,4.2-2,9.22,9.22,0,0,0,1.5-5.7v-1.6h0.1Z" fill="#fff"/>
						      <path d="M208.6,115.5h-5v8.6h-2.8V102.8h7.1a8.2,8.2,0,0,1,5.5,1.6,5.91,5.91,0,0,1,1.9,4.8,6.06,6.06,0,0,1-1.1,3.5,6.22,6.22,0,0,1-3,2.2l5,9.1v0.2h-3Zm-5-2.3h4.3a4.86,4.86,0,0,0,3.3-1.1,3.7,3.7,0,0,0,1.2-2.9,3.77,3.77,0,0,0-1.2-3,5,5,0,0,0-3.4-1.1h-4.3v8.1h0.1Z" fill="#fff"/>
						      <path d="M220.7,124.1V102.8h6a9.62,9.62,0,0,1,4.9,1.2,8.58,8.58,0,0,1,3.3,3.5,11.07,11.07,0,0,1,1.2,5.2v1.4a11.2,11.2,0,0,1-1.2,5.3,8.58,8.58,0,0,1-3.3,3.5,10,10,0,0,1-5,1.2h-5.9Zm2.8-19v16.7h3a6.62,6.62,0,0,0,5.1-2,8.39,8.39,0,0,0,1.8-5.8v-1.2a9,9,0,0,0-1.7-5.7,6.11,6.11,0,0,0-4.8-2h-3.4Z" fill="#fff"/>
						      <path d="M248.2,114.6a12.45,12.45,0,0,1-5.3-2.6,4.85,4.85,0,0,1-1.6-3.7,5.31,5.31,0,0,1,2-4.2,7.88,7.88,0,0,1,5.2-1.6,9.35,9.35,0,0,1,3.9.8,7.54,7.54,0,0,1,2.7,2.3,6.29,6.29,0,0,1,.9,3.3h-2.8a4.14,4.14,0,0,0-1.2-3.1,4.76,4.76,0,0,0-3.5-1.1,4.89,4.89,0,0,0-3.2.9,3,3,0,0,0-1.2,2.5,2.79,2.79,0,0,0,1.1,2.2A10.47,10.47,0,0,0,249,112a17.62,17.62,0,0,1,4.2,1.6,6.37,6.37,0,0,1,2.2,2.1,5.07,5.07,0,0,1,.7,2.8,5.31,5.31,0,0,1-2,4.2,8.09,8.09,0,0,1-5.4,1.6,11.09,11.09,0,0,1-4.1-.8,6.11,6.11,0,0,1-2.9-2.3,5.58,5.58,0,0,1-1-3.3h2.8a4,4,0,0,0,1.4,3.1,6.34,6.34,0,0,0,3.8,1.1,5.51,5.51,0,0,0,3.4-.9,2.91,2.91,0,0,0,1.2-2.5,2.78,2.78,0,0,0-1.1-2.4A16.11,16.11,0,0,0,248.2,114.6Z" fill="#fff"/>
						    </g>
						    <g style="isolation: isolate">
						      <text transform="translate(32.61 209.51)" font-size="46" fill="#215eac" font-family="Roboto" letter-spacing="1" style="isolation: isolate">PREMIUM</text>
						      <text transform="translate(58.11 252.71)" font-size="36" fill="#215eac" font-family="Roboto" style="isolation: isolate"><tspan letter-spacing="-1">P</tspan><tspan x="21.26" y="0">A</tspan><tspan x="45.71" y="0">R</tspan><tspan x="67.45" y="0">TNER</tspan></text>
						    </g>
						    <g>
						      <g>
						        <path d="M43.2,143.3a1.61,1.61,0,0,1-1.1-.5c-0.3-.4-8.3-10.3-11.3-15.3s-10-16.1-10.1-16.2a1.39,1.39,0,0,1-.2-1.1l1.2-4.7a1.6,1.6,0,0,1,.7-0.9c0.3-.2,28.3-15.2,51.5-20.7h0.3a1.43,1.43,0,0,1,1.2.6l15.9,23.9a1.39,1.39,0,0,1,.2,1.1l-1,5.4a1.59,1.59,0,0,1-.8,1c-0.2.1-16.7,8.4-25.2,13.9C56.1,135.1,44.2,143,44,143A1.14,1.14,0,0,1,43.2,143.3Z" fill="#f1f1ef"/>
						        <path d="M74.4,85.1L90.2,109l-1,5.4s-16.7,8.4-25.3,13.9-20.7,13.5-20.7,13.5S35,131.7,32,126.7s-10.1-16.2-10.1-16.2l1.2-4.7c0.1-.1,28-15.1,51.3-20.7m0-2.9a1.7,1.7,0,0,0-.7.1C50.3,87.9,23,102.5,21.8,103.2a3.1,3.1,0,0,0-1.4,1.8l-1.2,4.7a2.44,2.44,0,0,0,.4,2.2c0.1,0.1,7.1,11.3,10,16.2,3.1,5.1,11.1,15,11.4,15.4a3,3,0,0,0,2.3,1.1,3,3,0,0,0,1.6-.5c0.1-.1,12.1-8,20.6-13.5s24.9-13.7,25.1-13.8a2.74,2.74,0,0,0,1.5-2.1l1-5.4a3.08,3.08,0,0,0-.4-2.1L76.8,83.5a3.09,3.09,0,0,0-2.4-1.3h0Z" fill="#fff"/>
						      </g>
						      <g>
						        <path d="M43.2,142.6a0.86,0.86,0,0,1-.6-0.3c-0.3-.4-8.2-10.2-11.2-15.2s-10-16.1-10.1-16.2a1.27,1.27,0,0,1-.1-0.6l1.2-4.7a0.66,0.66,0,0,1,.4-0.5C23.1,104.9,51,90,74.2,84.4h0.2a0.71,0.71,0,0,1,.6.3l15.9,23.9a0.9,0.9,0,0,1,.1.5l-1,5.4a0.66,0.66,0,0,1-.4.5c-0.2.1-16.7,8.4-25.3,13.9s-20.5,13.4-20.6,13.5A1.06,1.06,0,0,1,43.2,142.6Z" fill="#f1f1ef"/>
						        <path d="M74.4,85.1L90.2,109l-1,5.4s-16.7,8.4-25.3,13.9-20.7,13.5-20.7,13.5S35,131.7,32,126.7s-10.1-16.2-10.1-16.2l1.2-4.7c0.1-.1,28-15.1,51.3-20.7m0-1.4H74.1c-23.2,5.6-51.2,20.6-51.5,20.7a1.27,1.27,0,0,0-.7.9L20.7,110a1.39,1.39,0,0,0,.2,1.1C21,111.2,28,122.4,31,127.3s11,14.9,11.3,15.3a1.27,1.27,0,0,0,1.1.5,1.88,1.88,0,0,0,.8-0.2c0.1-.1,12.1-8,20.6-13.5s25-13.8,25.2-13.9a1.59,1.59,0,0,0,.8-1l1-5.4a1.47,1.47,0,0,0-.2-1.1l-16-23.7a1.56,1.56,0,0,0-1.2-.6h0Z" fill="#465663"/>
						      </g>
						      <g>
						        <path d="M43.2,142.6a0.86,0.86,0,0,1-.6-0.3c-0.3-.4-8.2-10.2-11.2-15.2s-10-16.1-10.1-16.2a1.27,1.27,0,0,1-.1-0.6l1.2-4.7a0.66,0.66,0,0,1,.4-0.5C23.1,104.9,51,90,74.2,84.4h0.2a0.71,0.71,0,0,1,.6.3l15.9,23.9a0.9,0.9,0,0,1,.1.5l-1,5.4a0.66,0.66,0,0,1-.4.5c-0.2.1-16.7,8.4-25.3,13.9s-20.5,13.4-20.6,13.5A1.06,1.06,0,0,1,43.2,142.6Z" fill="#f1f1ef"/>
						        <path d="M74.4,85.1L90.2,109l-1,5.4s-16.7,8.4-25.3,13.9-20.7,13.5-20.7,13.5S35,131.7,32,126.7s-10.1-16.2-10.1-16.2l1.2-4.7c0.1-.1,28-15.1,51.3-20.7m0-1.4H74.1c-23.2,5.6-51.2,20.6-51.5,20.7a1.27,1.27,0,0,0-.7.9L20.7,110a1.39,1.39,0,0,0,.2,1.1C21,111.2,28,122.4,31,127.3s11,14.9,11.3,15.3a1.27,1.27,0,0,0,1.1.5,1.88,1.88,0,0,0,.8-0.2c0.1-.1,12.1-8,20.6-13.5s25-13.8,25.2-13.9a1.59,1.59,0,0,0,.8-1l1-5.4a1.47,1.47,0,0,0-.2-1.1l-16-23.7a1.56,1.56,0,0,0-1.2-.6h0Z" fill="#465663"/>
						      </g>
						      <path d="M30.4,108.6S50.3,97.2,65.2,93.1l2.2,2.5L32,111.7Z" fill="#043f79"/>
						      <polygon points="34.4 115 35.8 117.3 76.3 98.3 75 96.6 34.4 115" fill="#b3bbae"/>
						      <polygon points="37.8 119.5 39.3 121.7 80 102.8 78.6 101 37.8 119.5" fill="#b3bbae"/>
						      <polygon points="41.4 124.4 42.5 127.4 63.9 116.2 62.8 114.4 41.4 124.4" fill="#8cc226"/>
						      <path d="M43.2,136.2v5.6s17.9-12,26-16.8,19.9-10.7,19.9-10.7l1-5.4Z" fill="#bfb699"/>
						      <polygon points="23.2 105.7 43.2 136.2 43.2 141.8 34.4 130.3 31.1 125.1 22 110.5 23.2 105.7" fill="#e3dcd2"/>
						    </g>
						  </g>
						</svg>
					</div>

				</div>
			</section>

		<?php get_template_part('template-parts/content', 'flex'); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
