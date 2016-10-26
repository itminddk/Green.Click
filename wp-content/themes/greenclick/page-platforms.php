<?php
/**
 * Template Name: Platforms
 *
 * @package Green_Click
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="section section--grid section--grid-big section--platforms">
				<div class="block block--main block--main block--yellow">
					<?php
					$headline = get_field('block-headline');
					$text = get_field('block-text');
					$button = get_field('block-button-text');
					$link = get_field('block-button-link');
					$button_two = get_field('block-two-button-text');
					$link_two = get_field('block-two-button-link'); ?>

					<h1 class="whale"><?php echo $headline; ?></h1>
					<p class="wheat"><?php echo $text; ?></p>
					<?php if( $button ) : ?><a href="<?php echo $link; ?>" class="button button--white hidden-sm-down"><?php echo $button; ?></a><?php endif; ?>
				</div>

				<div class="block block--pin block--yellow-dark">
					<p class="nav-phone">Tlf. 70 230 540</p>

					<svg class="pin hidden-lg-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 197.13 348.78"><title>places-pin</title><g style="isolation:isolate"><g id="Layer_1" data-name="Layer 1"><path d="M702,195.92h0c0.12-2,.18-3.93.18-5.92A98.57,98.57,0,1,0,505,190c0,2,.07,4,0.18,5.92a33,33,0,0,0,.6,6.53,98,98,0,0,0,4.41,19.2c8.55,30.57,31.56,94,93.38,218.57,61.82-124.58,84.83-188,93.38-218.57a98,98,0,0,0,4.41-19.2A33,33,0,0,0,702,195.92Z" transform="translate(-505.03 -91.44)" fill="#e14b34"/><circle cx="98.57" cy="98.57" r="43.81" fill="#692d23"/><path d="M701.38,202.46a33,33,0,0,0,.6-6.53c0.12-2,.18-3.93.18-5.92A98.57,98.57,0,0,0,603.6,91.44V440.22c61.82-124.58,84.83-188,93.38-218.57A98,98,0,0,0,701.38,202.46Z" transform="translate(-505.03 -91.44)" fill="#1e1e1c" opacity="0.1" style="mix-blend-mode:multiply"/></g></g></svg>
					<svg class="pin hidden-xl-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 197.1 250.2"><title>places-pin-half</title><path d="M165.2,105.7c-0.9,2.2-1.8,4.5-2.8,6.7C163.4,110.1,164.3,107.9,165.2,105.7Z" transform="translate(0 0)" fill="#e14b34"/><path d="M98.6,43.8A43.79,43.79,0,0,1,54.8,0H0C0,2,.1,4,0.2,5.9a37.76,37.76,0,0,0,.6,6.5A95.6,95.6,0,0,0,5.2,31.6c8.5,30.6,31.6,94,93.4,218.6,4.8-9.7,9.4-19.1,13.8-28.1-4.4,9-9,18.4-13.8,28.1V43.8Z" transform="translate(0 0)" fill="#e14b34"/><path d="M167,101.5c-0.6,1.4-1.1,2.8-1.7,4.2C165.8,104.3,166.4,102.9,167,101.5Z" transform="translate(0 0)" fill="#e14b34"/><path d="M151.3,138.3c-1.2,2.6-2.3,5.3-3.6,8.1C149,143.6,150.1,140.9,151.3,138.3Z" transform="translate(0 0)" fill="#e14b34"/><path d="M129.4,186.4c-1.5,3.2-3,6.5-4.6,9.8C126.4,192.9,127.9,189.6,129.4,186.4Z" transform="translate(0 0)" fill="#e14b34"/><path d="M142.1,159c-3.3,7.2-6.7,14.8-10.4,22.6C135.3,173.8,138.8,166.2,142.1,159Z" transform="translate(0 0)" fill="#e14b34"/><path d="M197,6.3v0Z" transform="translate(0 0)" fill="#e14b34"/><path d="M120,206.3c-2.5,5.1-5,10.4-7.6,15.8Z" transform="translate(0 0)" fill="#e14b34"/><path d="M197,5.9c0.1-1,.1-2,0.1-2.9,0,1-.1,1.9-0.1,2.9h0Z" transform="translate(0 0)" fill="#e14b34"/><path d="M54.8,0A43.79,43.79,0,0,0,98.6,43.8V0H54.8Z" transform="translate(0 0)" fill="#692d23"/><path d="M190.6,36.2c-0.8,2.6-1.7,5.5-2.6,8.5C189,41.6,189.9,38.8,190.6,36.2Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M196.9,8.3c0,0.3-.1.7-0.1,1.1A3.75,3.75,0,0,1,196.9,8.3Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M195.6,17.4c-0.3,1.6-.6,3.2-1,4.8C195,20.6,195.3,19,195.6,17.4Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M186.8,48.5q-2.55,7.8-6,17.4Q184.25,56.3,186.8,48.5Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M188,44.7c-0.4,1.2-.8,2.5-1.2,3.8C187.2,47.2,187.6,45.9,188,44.7Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M174.9,81.4c-1.1,2.8-2.2,5.6-3.4,8.6C172.7,87,173.9,84.2,174.9,81.4Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M178,73.3c-0.6,1.7-1.3,3.5-2,5.3C176.7,76.8,177.4,75.1,178,73.3Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M169.1,96.1c-0.7,1.8-1.4,3.6-2.2,5.4C167.7,99.6,168.4,97.8,169.1,96.1Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M194.6,22.2L193.4,27Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M196.9,7.4a3.08,3.08,0,0,1-.1.9A2.77,2.77,0,0,0,196.9,7.4Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M195.6,17.4c0.3-1.6.5-3.3,0.7-4.9,0.2-1.2.3-2.2,0.4-3-0.1.8-.2,1.8-0.4,3C196.1,14.1,195.9,15.7,195.6,17.4Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M197,6.3V5.9h0V6.3Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M190.6,36.2c0.5-1.6.9-3.1,1.3-4.5s1-3.1,1.5-4.7a42.61,42.61,0,0,1-1.5,4.7C191.5,33.1,191.1,34.6,190.6,36.2Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M98.6,43.8V250.2c4.8-9.7,9.4-19.1,13.8-28.1,2.6-5.4,5.2-10.7,7.6-15.8,1.6-3.4,3.2-6.8,4.8-10.1s3.1-6.6,4.6-9.8c0.8-1.6,1.5-3.2,2.2-4.8,3.7-7.9,7.1-15.4,10.4-22.6q3-6.45,5.7-12.6l3.6-8.1c4.1-9.2,7.7-17.8,11.1-25.9,1-2.3,1.9-4.5,2.8-6.7,0.6-1.4,1.2-2.8,1.7-4.2,0.7-1.8,1.5-3.6,2.2-5.4,0.8-2.1,1.6-4.1,2.4-6.1,1.2-3,2.3-5.8,3.4-8.6,0.4-.9.7-1.8,1.1-2.7,0.7-1.8,1.4-3.6,2-5.3,1-2.6,1.9-5.1,2.8-7.5q3.45-9.6,6-17.4c0.4-1.3.8-2.6,1.2-3.8,1-3.1,1.9-5.9,2.6-8.5,0.5-1.6.9-3.1,1.3-4.5s1-3.1,1.5-4.7,0.9-3.2,1.2-4.8,0.7-3.2,1-4.8,0.5-3.3.7-4.9c0.2-1.2.3-2.2,0.4-3,0-.4.1-0.8,0.1-1.1a2.77,2.77,0,0,1,.1-0.9V5.9h0c0.1-1,.1-2,0.1-2.9V0H142.2A43.49,43.49,0,0,1,98.6,43.8Z" transform="translate(0 0)" fill="#e14b34"/><path d="M98.6,43.8V250.2c4.8-9.7,9.4-19.1,13.8-28.1,2.6-5.4,5.2-10.7,7.6-15.8,1.6-3.4,3.2-6.8,4.8-10.1s3.1-6.6,4.6-9.8c0.8-1.6,1.5-3.2,2.2-4.8,3.7-7.9,7.1-15.4,10.4-22.6q3-6.45,5.7-12.6l3.6-8.1c4.1-9.2,7.7-17.8,11.1-25.9,1-2.3,1.9-4.5,2.8-6.7,0.6-1.4,1.2-2.8,1.7-4.2,0.7-1.8,1.5-3.6,2.2-5.4,0.8-2.1,1.6-4.1,2.4-6.1,1.2-3,2.3-5.8,3.4-8.6,0.4-.9.7-1.8,1.1-2.7,0.7-1.8,1.4-3.6,2-5.3,1-2.6,1.9-5.1,2.8-7.5q3.45-9.6,6-17.4c0.4-1.3.8-2.6,1.2-3.8,1-3.1,1.9-5.9,2.6-8.5,0.5-1.6.9-3.1,1.3-4.5s1-3.1,1.5-4.7,0.9-3.2,1.2-4.8,0.7-3.2,1-4.8,0.5-3.3.7-4.9c0.2-1.2.3-2.2,0.4-3,0-.4.1-0.8,0.1-1.1a2.77,2.77,0,0,1,.1-0.9V5.9h0c0.1-1,.1-2,0.1-2.9V0H142.2A43.49,43.49,0,0,1,98.6,43.8Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/><path d="M98.6,43.8A43.79,43.79,0,0,0,142.4,0H98.6V43.8Z" transform="translate(0 0)" fill="#692d23"/><path d="M98.6,43.8A43.79,43.79,0,0,0,142.4,0H98.6V43.8Z" transform="translate(0 0)" fill="#1e1e1c" opacity="0.1" style="isolation:isolate"/></svg>

	                <?php if( $button_two ) : ?><a href="<?php echo $link_two; ?>" class="button button--white hidden-lg-down"><?php echo $button_two; ?></a><?php endif; ?>

	                <div class="button-group hidden-xl-up">
						<?php if( $button_two ) : ?><a href="<?php echo $link_two; ?>" class="button button--white"><?php echo $button_two; ?></a><?php endif; ?>
					</div>

	                <div class="magnet-people">
						<svg class="hidden-lg-down" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203 188.1"><title>magnet-faces-red-one</title><path d="M103.4,26.6a13.36,13.36,0,0,0,13.2,11.5h0.1A13.44,13.44,0,0,0,130,24.7h3.2a29.48,29.48,0,0,0-7.7-10,13.94,13.94,0,0,0-7.4-3.3A13.36,13.36,0,0,0,104.9,0h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.18,13.18,0,0,0,103.4,26.6Zm19.1-5.7a1.9,1.9,0,1,1,0,3.8,2,2,0,0,1-1.9-1.9A1.84,1.84,0,0,1,122.5,20.9ZM99,9.5a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,99,9.5Z" fill="#e9453a"/><path d="M122.1,101.8a13.4,13.4,0,0,0,0-26.8h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.34,13.34,0,0,0,122.1,101.8Zm-5.8-17.3a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,116.3,84.5Z" fill="#e9453a"/><path d="M164.7,112a13.4,13.4,0,0,0-13.4-13.4h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H138a12.41,12.41,0,0,0,.3,2.7,0.9,0.9,0,0,1-.5-0.1h-1a13.4,13.4,0,1,0,0,26.8h0a13.4,13.4,0,0,0,13.4-13.4h3.2a28.74,28.74,0,0,0-1.4-2.6A13.31,13.31,0,0,0,164.7,112Zm-19.2-3.9a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,145.5,108.1Zm-3,19.9a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,142.5,128Z" fill="#e9453a"/><path d="M40.9,154.4h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.4,13.4,0,1,0,40.9,154.4ZM35,167.7a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9A1.9,1.9,0,1,1,35,167.7Z" fill="#e9453a"/><path d="M189.5,112h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.4,13.4,0,1,0,189.5,112Zm-5.8,13.3a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9A1.9,1.9,0,0,1,183.7,125.3Z" fill="#e9453a"/><path d="M159.5,22h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.4,13.4,0,1,0,159.5,22Zm-5.8,13.3a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9,1.9,1.9,0,0,1,1.9,1.9A2,2,0,0,1,153.7,35.3Z" fill="#e9453a"/><path d="M29.9,117.4A13.4,13.4,0,0,0,16.5,104h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H3.2a13.4,13.4,0,0,0,13.4,13.4A13.23,13.23,0,0,0,29.9,117.4Zm-19.2,0a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9A1.9,1.9,0,0,1,10.7,117.4Z" fill="#e9453a"/><path d="M93.3,94.7h-1A12.83,12.83,0,0,0,84.5,98a30.51,30.51,0,0,0-7.7,10H80A13.4,13.4,0,1,0,93.3,94.7Zm-5.8,13.4a1.9,1.9,0,1,1,1.9-1.9A1.9,1.9,0,0,1,87.5,108.1Z" fill="#e9453a"/><path d="M50.3,66h0.1A13.34,13.34,0,0,0,63.6,53.4a14.21,14.21,0,0,0,4.2.7h0.1A13,13,0,0,0,78,49.4,13.37,13.37,0,0,0,89.2,60.8a33.83,33.83,0,0,0-2.9,4.9h3.2a13.4,13.4,0,1,0,14.3-13.3,12.8,12.8,0,0,0,.9-4.8h3.2a29.48,29.48,0,0,0-7.7-10,12.83,12.83,0,0,0-7.8-3.3h-1A13,13,0,0,0,81.3,39a12,12,0,0,0-1.7-4.9A13.36,13.36,0,0,0,74.2,8.5h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2a14,14,0,0,0,1.8,6.7,13.85,13.85,0,0,0-3.5,2.2,28.77,28.77,0,0,0-7,8.7c-0.2,0-.5-0.1-0.7-0.1h-1A13.4,13.4,0,0,0,37.1,52.7,13.21,13.21,0,0,0,50.3,66ZM97,65.8a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,97,65.8Zm0.1-22a1.9,1.9,0,1,1-1.9,1.9A1.9,1.9,0,0,1,97.1,43.8ZM56.2,52.6a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,56.2,52.6ZM68.3,17.9a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,68.3,17.9Zm-6.2,19a1.9,1.9,0,1,1-1.9,1.9A1.78,1.78,0,0,1,62.1,36.9Z" fill="#e9453a"/><path d="M81.5,141.4a13.07,13.07,0,0,0-6.6-3.1,14.21,14.21,0,0,0,.7-4.2h3.2a29.48,29.48,0,0,0-7.7-10,12.83,12.83,0,0,0-7.8-3.3h-1A13.4,13.4,0,0,0,60,147.4a14.21,14.21,0,0,0-.7,4.2A13.4,13.4,0,0,0,72.7,165h0.1a13.44,13.44,0,0,0,13.3-13.4h3.2A30.82,30.82,0,0,0,81.5,141.4ZM68.1,130.2a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,68.1,130.2Zm10.4,21.2a1.9,1.9,0,1,1,0-3.8,2,2,0,0,1,1.9,1.9A1.84,1.84,0,0,1,78.5,151.4Z" fill="#e9453a"/><path d="M136.8,141.3h0Z" fill="#e9453a"/><path d="M130.6,39.2h-0.9a13.4,13.4,0,1,0,0,26.8h0.1a13.36,13.36,0,0,0,4-.6,13.36,13.36,0,1,0,13.3-14.2h-1a0.9,0.9,0,0,0-.5.1,29,29,0,0,0-7.1-8.7,13.85,13.85,0,0,0-7.9-3.4h0Zm10.6,25.3a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,.6-1.4h0a2.25,2.25,0,0,1,1.4-.6,1.9,1.9,0,0,1,1.9,1.9A2,2,0,0,1,141.2,64.5Zm-5.7-15.8a1.9,1.9,0,0,1,0,3.8,2,2,0,0,1-1.9-1.9A1.78,1.78,0,0,1,135.5,48.7Z" fill="#e9453a"/><path d="M133.2,164.6a12.83,12.83,0,0,0-7.8-3.3h-1a13.4,13.4,0,1,0,13.4,13.4H141C140.9,174.7,138.2,168.6,133.2,164.6Zm-3,10.1a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,130.2,174.7Z" fill="#e9453a"/><path d="M79,79.8A13.42,13.42,0,0,0,65.5,66.4H64.4a13.11,13.11,0,0,0-7.9,3.3,31.62,31.62,0,0,0-7.8,10h3.2a10.32,10.32,0,0,0,.4,3A13.35,13.35,0,1,0,65.9,96h3.2s-0.6-1.3-1.7-3.2A13,13,0,0,0,79,79.8ZM59.6,75.9a2,2,0,0,1,2,1.9,1.92,1.92,0,0,1-2,1.9,2,2,0,0,1-2-1.9A2.14,2.14,0,0,1,59.6,75.9ZM58.5,96.2a1.9,1.9,0,1,1,1.9-1.9A2,2,0,0,1,58.5,96.2Z" fill="#e9453a"/><path d="M154.1,143.3h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2a13.4,13.4,0,1,0,26.8,0A13.6,13.6,0,0,0,154.1,143.3Zm-5.9,13.3a1.9,1.9,0,1,1,1.9-1.9A1.78,1.78,0,0,1,148.2,156.6Z" fill="#e9453a"/><path d="M74,35.2h0.1a14.08,14.08,0,0,0,5.4-1.1A13.28,13.28,0,0,0,68,27.4H67a12.4,12.4,0,0,0-4.3,1.1A13,13,0,0,0,74,35.2Z" fill="#ca3b31"/><path d="M78.1,49.4a13.3,13.3,0,0,0,3.2-8.7c0-.6-0.1-1.2-0.1-1.8A13.3,13.3,0,0,0,78,47.6,5.15,5.15,0,0,0,78.1,49.4Z" fill="#ca3b31"/><path d="M54.6,40.8a13.41,13.41,0,0,0,9.1,12.7V52.7h3.2a29.48,29.48,0,0,0-7.7-10,12.89,12.89,0,0,0-7.1-3.2,7.31,7.31,0,0,0-.7,1.4h3.2V40.8Z" fill="#ca3b31"/><path d="M117.6,11.5h-0.9a13.4,13.4,0,0,0-13.4,13.4c0,0.6.1,1.2,0.1,1.9a7.57,7.57,0,0,0,1.5.1,13.4,13.4,0,0,0,13.4-13.4c0-.6-0.1-1.2-0.1-1.8a0.85,0.85,0,0,0-.6-0.2h0Z" fill="#ca3b31"/><path d="M145.5,117.9a12.81,12.81,0,0,0-7.3-3.2,13.31,13.31,0,0,0,13.1,10.6h0.5A28.88,28.88,0,0,0,145.5,117.9Z" fill="#ca3b31"/><path d="M130.5,64.5h3.2v0.8a13.5,13.5,0,0,0,6.1-4.1h0a13,13,0,0,0,3.2-8.6h3.2a9.21,9.21,0,0,0-.7-1.3,13.5,13.5,0,0,0-7.3,3.2A30.51,30.51,0,0,0,130.5,64.5Z" fill="#ca3b31"/><path d="M101.9,52.4h0A12.86,12.86,0,0,0,94,55.7a22.81,22.81,0,0,0-4.8,5.1,14.92,14.92,0,0,0,2.1.2,13.51,13.51,0,0,0,12.5-8.6h-1.9Z" fill="#ca3b31"/><path d="M62.3,147.5a13.37,13.37,0,0,0,12.6-9.2c-0.4-.1-0.8-0.1-1.2-0.2h-1A13.49,13.49,0,0,0,60,147.3a16.35,16.35,0,0,0,2.2.2h0.1Z" fill="#ca3b31"/><path d="M61.5,86.2a12.83,12.83,0,0,0-7.8-3.3H52.5a13.4,13.4,0,0,0,13,10.3h0.1c0.7,0,1.3-.1,1.9-0.1A30.82,30.82,0,0,0,61.5,86.2Z" fill="#ca3b31"/></svg>
						<svg class="hidden-xl-up" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 185.7 136"><title>magnet-faces-mobile-one-red</title><circle cx="53.2" cy="38.8" r="1.9" fill="none"/><circle cx="59.4" cy="19.9" r="1.9" fill="none"/><circle cx="47.3" cy="50.7" r="1.9" fill="none"/><ellipse cx="50.8" cy="77.9" rx="2" ry="1.9" fill="none"/><circle cx="10.6" cy="74" r="1.9" fill="none"/><circle cx="49.6" cy="94.2" r="1.9" fill="none"/><circle cx="88.3" cy="45.7" r="1.9" fill="none"/><path d="M132.4,64.5a1.9,1.9,0,0,0,0-3.8,2,2,0,0,0-1.4.6h0a2.25,2.25,0,0,0-.6,1.4A2.14,2.14,0,0,0,132.4,64.5Z" transform="translate(-0.1)" fill="none"/><circle cx="126.6" cy="50.6" r="1.9" fill="none"/><circle cx="144.8" cy="33.4" r="1.9" fill="none"/><circle cx="90.2" cy="11.4" r="1.9" fill="none"/><circle cx="88.1" cy="63.8" r="1.9" fill="none"/><circle cx="113.6" cy="22.8" r="1.9" fill="none"/><circle cx="166.3" cy="77.9" r="1.9" fill="none"/><circle cx="78.6" cy="106.1" r="1.9" fill="none"/><circle cx="107.4" cy="86.5" r="1.9" fill="none"/><circle cx="138.8" cy="104.7" r="1.9" fill="none"/><circle cx="135.9" cy="120.6" r="1.9" fill="none"/><path d="M58.2,27.4h0.9a13.28,13.28,0,0,1,11.5,6.7A13.36,13.36,0,0,0,65.2,8.5h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H52a14,14,0,0,0,1.8,6.7,15.78,15.78,0,0,1,4.4-1.1h0Zm-0.6-7.5a1.9,1.9,0,1,1,1.9,1.9A1.9,1.9,0,0,1,57.6,19.9Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M134.2,52.6a13,13,0,0,1-3.2,8.6,2.25,2.25,0,0,1,1.4-.6,1.9,1.9,0,1,1-1.9,1.9,2,2,0,0,1,.6-1.4,13.5,13.5,0,0,1-6.1,4.1A13.36,13.36,0,1,0,138.3,51h-1a0.9,0.9,0,0,0-.5.1c0.4,0.8.7,1.3,0.7,1.3h-3.3v0.2Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M58.1,52.6H54.9v0.8a14.21,14.21,0,0,0,4.2.7h0.1a13,13,0,0,0,10.1-4.7,10.87,10.87,0,0,1-.1-1.8,13.5,13.5,0,0,1,3.2-8.7A12,12,0,0,0,70.7,34a13.35,13.35,0,0,1-5.4,1.1H65.2a13.12,13.12,0,0,1-11.4-6.7,13.85,13.85,0,0,0-3.5,2.2,28.77,28.77,0,0,0-7,8.7,12.89,12.89,0,0,1,7.1,3.2A31.46,31.46,0,0,1,58.1,52.6ZM53.3,36.9a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,53.3,36.9Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M65.2,35.2h0.1a14.08,14.08,0,0,0,5.4-1.1,13.28,13.28,0,0,0-11.5-6.7h-1a12.4,12.4,0,0,0-4.3,1.1A13.17,13.17,0,0,0,65.2,35.2Z" transform="translate(-0.1)" fill="#c53226"/><path d="M94.6,26.6a11.48,11.48,0,0,1-.1-1.9,13.4,13.4,0,0,1,13.4-13.4h1a0.9,0.9,0,0,1,.5.1A13.46,13.46,0,0,0,96.1,0h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.26,13.26,0,0,0,94.6,26.6ZM90.3,9.5a1.9,1.9,0,1,1-1.9,1.9A1.78,1.78,0,0,1,90.3,9.5Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M126.7,88.4A13.4,13.4,0,0,0,113.3,75h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H100a13.4,13.4,0,0,0,13.4,13.4A13.23,13.23,0,0,0,126.7,88.4Zm-19.2,0a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,107.5,88.4Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M144.7,93.2h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2a12.41,12.41,0,0,0,.3,2.7,13.5,13.5,0,0,1,7.3,3.2,28.88,28.88,0,0,1,6.3,7.4A13.3,13.3,0,0,0,144.7,93.2Zm-5.8,13.4a1.9,1.9,0,1,1,1.9-1.9A1.9,1.9,0,0,1,138.9,106.6Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M172.3,66.5h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H159A13.4,13.4,0,1,0,172.3,66.5Zm-5.9,13.3a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9A1.9,1.9,0,0,1,166.4,79.8Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M150.8,48.7a13.4,13.4,0,0,0,0-26.8h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.28,13.28,0,0,0,150.8,48.7Zm-5.9-17.3a1.9,1.9,0,0,1,1.9,1.9,2,2,0,0,1-1.9,1.9A1.9,1.9,0,0,1,144.9,31.4Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M16.6,62.6h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H3.3A13.4,13.4,0,1,0,16.6,62.6ZM10.7,75.9A1.9,1.9,0,0,1,8.8,74a2,2,0,0,1,1.9-2,1.9,1.9,0,0,1,1.9,1.9A2,2,0,0,1,10.7,75.9Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M84.6,94.7h-1A12.83,12.83,0,0,0,75.8,98a30.51,30.51,0,0,0-7.7,10h3.2A13.4,13.4,0,1,0,84.6,94.7Zm-5.9,13.4a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,78.7,108.1Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M69.3,49.4A13.37,13.37,0,0,0,80.5,60.8a22.81,22.81,0,0,1,4.8-5.1,12.83,12.83,0,0,1,7.8-3.3H95a12.8,12.8,0,0,0,.9-4.8h3.2a29.48,29.48,0,0,0-7.7-10,12.83,12.83,0,0,0-7.8-3.3h-1A13,13,0,0,0,72.5,39a10.87,10.87,0,0,1,.1,1.8A13.66,13.66,0,0,1,69.3,49.4Zm19.1-5.6a1.9,1.9,0,1,1-1.9,1.9A1.78,1.78,0,0,1,88.4,43.8Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M69.3,49.4a13.3,13.3,0,0,0,3.2-8.7c0-.6-0.1-1.2-0.1-1.8a13.3,13.3,0,0,0-3.2,8.7A9.72,9.72,0,0,0,69.3,49.4Z" transform="translate(-0.1)" fill="#c53226"/><path d="M41.6,66h0.1A13.34,13.34,0,0,0,54.9,53.4a13.41,13.41,0,0,1-9.1-12.7H42.6a13.84,13.84,0,0,1,.7-1.4c-0.2,0-.5-0.1-0.7-0.1h-1A13.4,13.4,0,1,0,41.6,66Zm5.8-17.3a1.9,1.9,0,1,1-1.9,1.9A1.9,1.9,0,0,1,47.4,48.7Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M45.8,40.8a13.41,13.41,0,0,0,9.1,12.7V52.7h3.2a29.48,29.48,0,0,0-7.7-10,12.89,12.89,0,0,0-7.1-3.2,7.31,7.31,0,0,0-.7,1.4h3.2V40.8Z" transform="translate(-0.1)" fill="#c53226"/><path d="M96.1,26.7a7.57,7.57,0,0,1-1.5-.1,13.36,13.36,0,0,0,13.2,11.5h0.1a13.44,13.44,0,0,0,13.3-13.4h3.2a29.48,29.48,0,0,0-7.7-10,13.94,13.94,0,0,0-7.4-3.3,10.87,10.87,0,0,1,.1,1.8A13.28,13.28,0,0,1,96.1,26.7Zm17.6-5.8a1.9,1.9,0,1,1,0,3.8,2,2,0,0,1-1.9-1.9A1.9,1.9,0,0,1,113.7,20.9Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M108.8,11.5h-0.9A13.4,13.4,0,0,0,94.5,24.9c0,0.6.1,1.2,0.1,1.9a7.57,7.57,0,0,0,1.5.1,13.4,13.4,0,0,0,13.4-13.4c0-.6-0.1-1.2-0.1-1.8a0.73,0.73,0,0,0-.6-0.2h0Z" transform="translate(-0.1)" fill="#c53226"/><path d="M131.7,109.3a0.9,0.9,0,0,1-.5-0.1h-1a13.4,13.4,0,1,0,0,26.8h0a13.4,13.4,0,0,0,13.4-13.4h3.2a28.74,28.74,0,0,0-1.4-2.6h-0.5A13.35,13.35,0,0,1,131.7,109.3Zm4.3,13.3a1.9,1.9,0,1,1,1.9-1.9A2,2,0,0,1,136,122.6Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M139,112.6a12.81,12.81,0,0,0-7.3-3.2A13.31,13.31,0,0,0,144.8,120h0.5A27.31,27.31,0,0,0,139,112.6Z" transform="translate(-0.1)" fill="#c53226"/><path d="M131,61.2h0Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M121.8,39.2h-0.9a13.4,13.4,0,1,0,0,26.8H121a13.36,13.36,0,0,0,4-.6V64.6h-3.2a29.48,29.48,0,0,1,7.7-10,12.81,12.81,0,0,1,7.3-3.2,29,29,0,0,0-7.1-8.7,13.06,13.06,0,0,0-7.9-3.5h0Zm4.9,9.5a1.9,1.9,0,0,1,0,3.8,2,2,0,0,1-1.9-1.9A1.84,1.84,0,0,1,126.7,48.7Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M121.7,64.5h3.2v0.8a13.5,13.5,0,0,0,6.1-4.1h0a13,13,0,0,0,3.2-8.6h3.2a9.21,9.21,0,0,0-.7-1.3,13.5,13.5,0,0,0-7.3,3.2A30.51,30.51,0,0,0,121.7,64.5Z" transform="translate(-0.1)" fill="#c53226"/><path d="M82.5,61a14.92,14.92,0,0,1-2.1-.2,33.83,33.83,0,0,0-2.9,4.9h3.2A13.4,13.4,0,1,0,95,52.4,13.26,13.26,0,0,1,82.5,61Zm5.7,4.8a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,88.2,65.8Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M93.1,52.4h0a12.86,12.86,0,0,0-7.9,3.3,22.81,22.81,0,0,0-4.8,5.1,14.92,14.92,0,0,0,2.1.2A13.51,13.51,0,0,0,95,52.4H93.1Z" transform="translate(-0.1)" fill="#c53226"/><path d="M70.2,79.8A13.42,13.42,0,0,0,56.7,66.4H55.6a13.11,13.11,0,0,0-7.9,3.3,31.62,31.62,0,0,0-7.8,10h3.2a10.32,10.32,0,0,0,.4,3h1.2A12.83,12.83,0,0,1,52.5,86a26.43,26.43,0,0,1,6,6.9A13.19,13.19,0,0,0,70.2,79.8Zm-19.3,0a2,2,0,0,1-2-1.9,1.92,1.92,0,0,1,2-1.9,2,2,0,0,1,2,1.9A2.06,2.06,0,0,1,50.9,79.8Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M56.7,93.2a13.5,13.5,0,0,1-13-10.3A13.35,13.35,0,1,0,57.3,96.2h3.2s-0.6-1.3-1.7-3.2a12.1,12.1,0,0,1-1.9.1Zm-7,3a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,49.7,96.2Z" transform="translate(-0.1)" fill="#e3392e"/><path d="M52.7,86.2a12.83,12.83,0,0,0-7.8-3.3H43.7a13.4,13.4,0,0,0,13,10.3h0.1c0.7,0,1.3-.1,1.9-0.1A26.43,26.43,0,0,0,52.7,86.2Z" transform="translate(-0.1)" fill="#c53226"/></svg>
	                </div>
				</div>
			</section>

			<?php get_template_part('template-parts/content', 'flex'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
