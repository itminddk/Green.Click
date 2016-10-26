<?php
/**
 * Template Name: Adwords
 *
 * @package Green_Click
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="section section--grid section--grid-big section--adwords">
				<div class="block block--main block--main block--blue">
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

				<div class="block block--bullseye block--blue-dark">
					<p class="nav-phone">Tlf. 70 230 540</p>

				    <svg class="bullseye hidden-lg-down" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 223 223"><title>adwords-bullseye</title><circle cx="111.5" cy="111.5" r="111.5" fill="#fff"/><path d="M111.5,20A91.5,91.5,0,1,1,20,111.5,91.6,91.6,0,0,1,111.5,20m0-20A111.5,111.5,0,1,0,223,111.5,111.5,111.5,0,0,0,111.5,0h0Z" fill="#0da653"/><circle cx="111.5" cy="111.5" r="64.1" fill="none" stroke="#0da653" stroke-miterlimit="10" stroke-width="20"/><circle cx="111.5" cy="111.5" r="19.1" fill="#1b7960"/><path d="M111.5,0V223A111.5,111.5,0,1,0,111.5,0Z" opacity="0.1"/></svg>
	                <svg class="bullseye hidden-xl-up" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 223 111.5"><title>half_bullseye</title><path d="M111.5,74.1A74.13,74.13,0,0,1,37.4,0H20a91.54,91.54,0,0,0,91.5,91.5V74.1h0Z" fill="#fff"/><path d="M92.4,0h-35a54.2,54.2,0,0,0,54.1,54.1h0v-35A19.16,19.16,0,0,1,92.4,0Z" fill="#fff"/><path d="M8.8,43.4c-1.1-2.5-2-5-2.9-7.6A69.87,69.87,0,0,0,8.8,43.4Z" fill="#0da653"/><path d="M1.3,17C1,15.2.8,13.3,0.6,11.4,0.8,13.3,1,15.1,1.3,17Z" fill="#0da653"/><path d="M17.6,60.1c-1.5-2.3-2.8-4.6-4.1-6.9C14.7,55.5,16.1,57.8,17.6,60.1Z" fill="#0da653"/><path d="M200.8,66.7c-1.6,2.1-3.3,4.2-5,6.3C197.6,70.9,199.2,68.9,200.8,66.7Z" fill="#0da653"/><path d="M182.4,86l-4.2,3.3Q180.3,87.8,182.4,86Z" fill="#0da653"/><path d="M27.2,73a76.79,76.79,0,0,1-5-6.3C23.8,68.9,25.4,70.9,27.2,73Z" fill="#0da653"/><path d="M44.8,89.3L40.6,86Q42.7,87.8,44.8,89.3Z" fill="#0da653"/><path d="M51.4,93.9c-1.5-1-3-2-4.4-3A42.7,42.7,0,0,0,51.4,93.9Z" fill="#0da653"/><path d="M176,90.9c-1.5,1-2.9,2-4.4,3A42.7,42.7,0,0,0,176,90.9Z" fill="#0da653"/><path d="M214.2,43.4c-0.7,1.7-1.5,3.3-2.2,4.9C212.8,46.7,213.5,45.1,214.2,43.4Z" fill="#0da653"/><path d="M209.5,53.1c-1.3,2.4-2.7,4.7-4.1,6.9A59.7,59.7,0,0,0,209.5,53.1Z" fill="#0da653"/><path d="M217.1,35.8c-0.9,2.6-1.8,5.1-2.9,7.6A69.87,69.87,0,0,0,217.1,35.8Z" fill="#0da653"/><path d="M11,48.3c-0.8-1.6-1.5-3.3-2.2-4.9C9.5,45.1,10.2,46.7,11,48.3Z" fill="#0da653"/><path d="M222.4,11.4c-0.2,1.9-.4,3.7-0.7,5.6C222,15.1,222.2,13.3,222.4,11.4Z" fill="#0da653"/><path d="M20,0H0A107.41,107.41,0,0,0,.6,11.4c0.2,1.9.4,3.7,0.7,5.6A107.53,107.53,0,0,0,5.9,35.8c0.9,2.6,1.8,5.1,2.9,7.6,0.7,1.7,1.5,3.3,2.2,4.9s1.6,3.2,2.5,4.8c1.3,2.4,2.7,4.7,4.1,6.9s3,4.5,4.6,6.6,3.3,4.2,5,6.3A118.44,118.44,0,0,0,40.6,86l4.2,3.3c0.7,0.5,1.4,1.1,2.2,1.6,1.5,1,2.9,2,4.4,3a111.14,111.14,0,0,0,60.1,17.6v-20A91.54,91.54,0,0,1,20,0Z" fill="#0da653"/><path d="M111.5,74.1h0v-20h0A54.2,54.2,0,0,1,57.4,0h-20A74.13,74.13,0,0,0,111.5,74.1Z" fill="#0da653"/><path d="M92.4,0a19.16,19.16,0,0,0,19.1,19.1V0H92.4Z" fill="#1b7960"/><path d="M165.6,0h-35a19.16,19.16,0,0,1-19.1,19.1v35A54.2,54.2,0,0,0,165.6,0Z" fill="#fff"/><path d="M165.6,0h-35a19.16,19.16,0,0,1-19.1,19.1v35A54.2,54.2,0,0,0,165.6,0Z" opacity="0.1" style="isolation:isolate"/><path d="M111.5,74.1V91.5A91.54,91.54,0,0,0,203,0H185.6A74.13,74.13,0,0,1,111.5,74.1Z" fill="#fff"/><path d="M111.5,74.1V91.5A91.54,91.54,0,0,0,203,0H185.6A74.13,74.13,0,0,1,111.5,74.1Z" opacity="0.1" style="isolation:isolate"/><path d="M111.5,91.5v20a110.3,110.3,0,0,0,60.1-17.6c1.5-1,3-2,4.4-3,0.7-.5,1.5-1,2.2-1.6l4.2-3.3a118.44,118.44,0,0,0,13.4-13.1,76.79,76.79,0,0,0,5-6.3c1.6-2.2,3.1-4.4,4.6-6.6s2.8-4.6,4.1-6.9c0.9-1.6,1.7-3.2,2.5-4.8s1.5-3.3,2.2-4.9c1.1-2.5,2-5,2.9-7.6A114.73,114.73,0,0,0,221.7,17c0.3-1.8.5-3.7,0.7-5.6A107.41,107.41,0,0,0,223,0H203A91.54,91.54,0,0,1,111.5,91.5Z" fill="#0da653"/><path d="M111.5,91.5v20a110.3,110.3,0,0,0,60.1-17.6c1.5-1,3-2,4.4-3,0.7-.5,1.5-1,2.2-1.6l4.2-3.3a118.44,118.44,0,0,0,13.4-13.1,76.79,76.79,0,0,0,5-6.3c1.6-2.2,3.1-4.4,4.6-6.6s2.8-4.6,4.1-6.9c0.9-1.6,1.7-3.2,2.5-4.8s1.5-3.3,2.2-4.9c1.1-2.5,2-5,2.9-7.6A114.73,114.73,0,0,0,221.7,17c0.3-1.8.5-3.7,0.7-5.6A107.41,107.41,0,0,0,223,0H203A91.54,91.54,0,0,1,111.5,91.5Z" opacity="0.1" style="isolation:isolate"/><path d="M111.5,54.1v20A74.13,74.13,0,0,0,185.6,0h-20A54.2,54.2,0,0,1,111.5,54.1Z" fill="#0da653"/><path d="M111.5,54.1v20A74.13,74.13,0,0,0,185.6,0h-20A54.2,54.2,0,0,1,111.5,54.1Z" opacity="0.1" style="isolation:isolate"/><path d="M111.5,19.1A19.16,19.16,0,0,0,130.6,0H111.5V19.1Z" fill="#1b7960"/><path d="M111.5,19.1A19.16,19.16,0,0,0,130.6,0H111.5V19.1Z" opacity="0.1" style="isolation:isolate"/></svg>

	                <?php if( $button_two ) : ?><a href="<?php echo $link_two; ?>" class="button button--white hidden-lg-down"><?php echo $button_two; ?></a><?php endif; ?>

	                <div class="button-group hidden-xl-up">
						<?php if( $button_two ) : ?><a href="<?php echo $link_two; ?>" class="button button--white"><?php echo $button_two; ?></a><?php endif; ?>
					</div>

	                <div class="magnet-people">
						<svg class="hidden-lg-down" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203 188.1"><title>magnet-faces-green</title><path d="M103.4,26.6a13.36,13.36,0,0,0,13.2,11.5h0.1A13.44,13.44,0,0,0,130,24.7h3.2a29.48,29.48,0,0,0-7.7-10,13.94,13.94,0,0,0-7.4-3.3A13.36,13.36,0,0,0,104.9,0h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.18,13.18,0,0,0,103.4,26.6Zm19.1-5.7a1.9,1.9,0,1,1,0,3.8,2,2,0,0,1-1.9-1.9A1.84,1.84,0,0,1,122.5,20.9ZM99,9.5a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,99,9.5Z" fill="#059d42"/><path d="M122.1,101.8a13.4,13.4,0,0,0,0-26.8h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.34,13.34,0,0,0,122.1,101.8Zm-5.8-17.3a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,116.3,84.5Z" fill="#059d42"/><path d="M164.7,112a13.4,13.4,0,0,0-13.4-13.4h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H138a12.41,12.41,0,0,0,.3,2.7,0.9,0.9,0,0,1-.5-0.1h-1a13.4,13.4,0,1,0,0,26.8h0a13.4,13.4,0,0,0,13.4-13.4h3.2a28.74,28.74,0,0,0-1.4-2.6A13.31,13.31,0,0,0,164.7,112Zm-19.2-3.9a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,145.5,108.1Zm-3,19.9a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,142.5,128Z" fill="#059d42"/><path d="M40.9,154.4h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.4,13.4,0,1,0,40.9,154.4ZM35,167.7a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9A1.9,1.9,0,1,1,35,167.7Z" fill="#059d42"/><path d="M189.5,112h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.4,13.4,0,1,0,189.5,112Zm-5.8,13.3a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9A1.9,1.9,0,0,1,183.7,125.3Z" fill="#059d42"/><path d="M159.5,22h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.4,13.4,0,1,0,159.5,22Zm-5.8,13.3a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9,1.9,1.9,0,0,1,1.9,1.9A2,2,0,0,1,153.7,35.3Z" fill="#059d42"/><path d="M29.9,117.4A13.4,13.4,0,0,0,16.5,104h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H3.2a13.4,13.4,0,0,0,13.4,13.4A13.23,13.23,0,0,0,29.9,117.4Zm-19.2,0a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9A1.9,1.9,0,0,1,10.7,117.4Z" fill="#059d42"/><path d="M93.3,94.7h-1A12.83,12.83,0,0,0,84.5,98a30.51,30.51,0,0,0-7.7,10H80A13.4,13.4,0,1,0,93.3,94.7Zm-5.8,13.4a1.9,1.9,0,1,1,1.9-1.9A1.9,1.9,0,0,1,87.5,108.1Z" fill="#059d42"/><path d="M50.3,66h0.1A13.34,13.34,0,0,0,63.6,53.4a14.21,14.21,0,0,0,4.2.7h0.1A13,13,0,0,0,78,49.4,13.37,13.37,0,0,0,89.2,60.8a33.83,33.83,0,0,0-2.9,4.9h3.2a13.4,13.4,0,1,0,14.3-13.3,12.8,12.8,0,0,0,.9-4.8h3.2a29.48,29.48,0,0,0-7.7-10,12.83,12.83,0,0,0-7.8-3.3h-1A13,13,0,0,0,81.3,39a12,12,0,0,0-1.7-4.9A13.36,13.36,0,0,0,74.2,8.5h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2a14,14,0,0,0,1.8,6.7,13.85,13.85,0,0,0-3.5,2.2,28.77,28.77,0,0,0-7,8.7c-0.2,0-.5-0.1-0.7-0.1h-1A13.4,13.4,0,0,0,37.1,52.7,13.21,13.21,0,0,0,50.3,66ZM97,65.8a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,97,65.8Zm0.1-22a1.9,1.9,0,1,1-1.9,1.9A1.9,1.9,0,0,1,97.1,43.8ZM56.2,52.6a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,56.2,52.6ZM68.3,17.9a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,68.3,17.9Zm-6.2,19a1.9,1.9,0,1,1-1.9,1.9A1.78,1.78,0,0,1,62.1,36.9Z" fill="#059d42"/><path d="M81.5,141.4a13.07,13.07,0,0,0-6.6-3.1,14.21,14.21,0,0,0,.7-4.2h3.2a29.48,29.48,0,0,0-7.7-10,12.83,12.83,0,0,0-7.8-3.3h-1A13.4,13.4,0,0,0,60,147.4a14.21,14.21,0,0,0-.7,4.2A13.4,13.4,0,0,0,72.7,165h0.1a13.44,13.44,0,0,0,13.3-13.4h3.2A30.82,30.82,0,0,0,81.5,141.4ZM68.1,130.2a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,68.1,130.2Zm10.4,21.2a1.9,1.9,0,1,1,0-3.8,2,2,0,0,1,1.9,1.9A1.84,1.84,0,0,1,78.5,151.4Z" fill="#059d42"/><path d="M136.8,141.3h0Z" fill="#059d42"/><path d="M130.6,39.2h-0.9a13.4,13.4,0,1,0,0,26.8h0.1a13.36,13.36,0,0,0,4-.6,13.36,13.36,0,1,0,13.3-14.2h-1a0.9,0.9,0,0,0-.5.1,29,29,0,0,0-7.1-8.7,13.85,13.85,0,0,0-7.9-3.4h0Zm10.6,25.3a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,.6-1.4h0a2.25,2.25,0,0,1,1.4-.6,1.9,1.9,0,0,1,1.9,1.9A2,2,0,0,1,141.2,64.5Zm-5.7-15.8a1.9,1.9,0,0,1,0,3.8,2,2,0,0,1-1.9-1.9A1.78,1.78,0,0,1,135.5,48.7Z" fill="#059d42"/><path d="M133.2,164.6a12.83,12.83,0,0,0-7.8-3.3h-1a13.4,13.4,0,1,0,13.4,13.4H141C140.9,174.7,138.2,168.6,133.2,164.6Zm-3,10.1a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,130.2,174.7Z" fill="#059d42"/><path d="M79,79.8A13.42,13.42,0,0,0,65.5,66.4H64.4a13.11,13.11,0,0,0-7.9,3.3,31.62,31.62,0,0,0-7.8,10h3.2a10.32,10.32,0,0,0,.4,3A13.35,13.35,0,1,0,65.9,96h3.2s-0.6-1.3-1.7-3.2A13,13,0,0,0,79,79.8ZM59.6,75.9a2,2,0,0,1,2,1.9,1.92,1.92,0,0,1-2,1.9,2,2,0,0,1-2-1.9A2.14,2.14,0,0,1,59.6,75.9ZM58.5,96.2a1.9,1.9,0,1,1,1.9-1.9A2,2,0,0,1,58.5,96.2Z" fill="#059d42"/><path d="M154.1,143.3h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2a13.4,13.4,0,1,0,26.8,0A13.6,13.6,0,0,0,154.1,143.3Zm-5.9,13.3a1.9,1.9,0,1,1,1.9-1.9A1.78,1.78,0,0,1,148.2,156.6Z" fill="#059d42"/><path d="M74,35.2h0.1a14.08,14.08,0,0,0,5.4-1.1A13.28,13.28,0,0,0,68,27.4H67a12.4,12.4,0,0,0-4.3,1.1A13,13,0,0,0,74,35.2Z" fill="#088640"/><path d="M78.1,49.4a13.3,13.3,0,0,0,3.2-8.7c0-.6-0.1-1.2-0.1-1.8A13.3,13.3,0,0,0,78,47.6,5.15,5.15,0,0,0,78.1,49.4Z" fill="#088640"/><path d="M54.6,40.8a13.41,13.41,0,0,0,9.1,12.7V52.7h3.2a29.48,29.48,0,0,0-7.7-10,12.89,12.89,0,0,0-7.1-3.2,7.31,7.31,0,0,0-.7,1.4h3.2V40.8Z" fill="#088640"/><path d="M117.6,11.5h-0.9a13.4,13.4,0,0,0-13.4,13.4c0,0.6.1,1.2,0.1,1.9a7.57,7.57,0,0,0,1.5.1,13.4,13.4,0,0,0,13.4-13.4c0-.6-0.1-1.2-0.1-1.8a0.85,0.85,0,0,0-.6-0.2h0Z" fill="#088640"/><path d="M145.5,117.9a12.81,12.81,0,0,0-7.3-3.2,13.31,13.31,0,0,0,13.1,10.6h0.5A28.88,28.88,0,0,0,145.5,117.9Z" fill="#088640"/><path d="M130.5,64.5h3.2v0.8a13.5,13.5,0,0,0,6.1-4.1h0a13,13,0,0,0,3.2-8.6h3.2a9.21,9.21,0,0,0-.7-1.3,13.5,13.5,0,0,0-7.3,3.2A30.51,30.51,0,0,0,130.5,64.5Z" fill="#088640"/><path d="M101.9,52.4h0A12.86,12.86,0,0,0,94,55.7a22.81,22.81,0,0,0-4.8,5.1,14.92,14.92,0,0,0,2.1.2,13.51,13.51,0,0,0,12.5-8.6h-1.9Z" fill="#088640"/><path d="M62.3,147.5a13.37,13.37,0,0,0,12.6-9.2c-0.4-.1-0.8-0.1-1.2-0.2h-1A13.49,13.49,0,0,0,60,147.3a16.35,16.35,0,0,0,2.2.2h0.1Z" fill="#088640"/><path d="M61.5,86.2a12.83,12.83,0,0,0-7.8-3.3H52.5a13.4,13.4,0,0,0,13,10.3h0.1c0.7,0,1.3-.1,1.9-0.1A30.82,30.82,0,0,0,61.5,86.2Z" fill="#088640"/></svg>
						<svg class="hidden-xl-up" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 185.7 136"><title>magnet-faces-mobile-one-green</title><circle cx="53.2" cy="38.8" r="1.9" fill="none"/><circle cx="59.4" cy="19.9" r="1.9" fill="none"/><circle cx="47.3" cy="50.7" r="1.9" fill="none"/><ellipse cx="50.8" cy="77.9" rx="2" ry="1.9" fill="none"/><circle cx="10.6" cy="74" r="1.9" fill="none"/><circle cx="49.6" cy="94.2" r="1.9" fill="none"/><circle cx="88.3" cy="45.7" r="1.9" fill="none"/><path d="M132.4,64.5a1.9,1.9,0,0,0,0-3.8,2,2,0,0,0-1.4.6h0a2.25,2.25,0,0,0-.6,1.4A2.14,2.14,0,0,0,132.4,64.5Z" transform="translate(-0.1)" fill="none"/><circle cx="126.6" cy="50.6" r="1.9" fill="none"/><circle cx="144.8" cy="33.4" r="1.9" fill="none"/><circle cx="90.2" cy="11.4" r="1.9" fill="none"/><circle cx="88.1" cy="63.8" r="1.9" fill="none"/><circle cx="113.6" cy="22.8" r="1.9" fill="none"/><circle cx="166.3" cy="77.9" r="1.9" fill="none"/><circle cx="78.6" cy="106.1" r="1.9" fill="none"/><circle cx="107.4" cy="86.5" r="1.9" fill="none"/><circle cx="138.8" cy="104.7" r="1.9" fill="none"/><circle cx="135.9" cy="120.6" r="1.9" fill="none"/><path d="M58.2,27.4h0.9a13.28,13.28,0,0,1,11.5,6.7A13.36,13.36,0,0,0,65.2,8.5h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H52a14,14,0,0,0,1.8,6.7,15.78,15.78,0,0,1,4.4-1.1h0Zm-0.6-7.5a1.9,1.9,0,1,1,1.9,1.9A1.9,1.9,0,0,1,57.6,19.9Z" transform="translate(-0.1)" fill="#059d42"/><path d="M134.2,52.6a13,13,0,0,1-3.2,8.6,2.25,2.25,0,0,1,1.4-.6,1.9,1.9,0,1,1-1.9,1.9,2,2,0,0,1,.6-1.4,13.5,13.5,0,0,1-6.1,4.1A13.36,13.36,0,1,0,138.3,51h-1a0.9,0.9,0,0,0-.5.1c0.4,0.8.7,1.3,0.7,1.3h-3.3v0.2Z" transform="translate(-0.1)" fill="#059d42"/><path d="M58.1,52.6H54.9v0.8a14.21,14.21,0,0,0,4.2.7h0.1a13,13,0,0,0,10.1-4.7,10.87,10.87,0,0,1-.1-1.8,13.5,13.5,0,0,1,3.2-8.7A12,12,0,0,0,70.7,34a13.35,13.35,0,0,1-5.4,1.1H65.2a13.12,13.12,0,0,1-11.4-6.7,13.85,13.85,0,0,0-3.5,2.2,28.77,28.77,0,0,0-7,8.7,12.89,12.89,0,0,1,7.1,3.2A31.46,31.46,0,0,1,58.1,52.6ZM53.3,36.9a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,53.3,36.9Z" transform="translate(-0.1)" fill="#059d42"/><path d="M65.2,35.2h0.1a14.08,14.08,0,0,0,5.4-1.1,13.28,13.28,0,0,0-11.5-6.7h-1a12.4,12.4,0,0,0-4.3,1.1A13.17,13.17,0,0,0,65.2,35.2Z" transform="translate(-0.1)" fill="#008d42"/><path d="M94.6,26.6a11.48,11.48,0,0,1-.1-1.9,13.4,13.4,0,0,1,13.4-13.4h1a0.9,0.9,0,0,1,.5.1A13.46,13.46,0,0,0,96.1,0h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.26,13.26,0,0,0,94.6,26.6ZM90.3,9.5a1.9,1.9,0,1,1-1.9,1.9A1.78,1.78,0,0,1,90.3,9.5Z" transform="translate(-0.1)" fill="#059d42"/><path d="M126.7,88.4A13.4,13.4,0,0,0,113.3,75h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H100a13.4,13.4,0,0,0,13.4,13.4A13.23,13.23,0,0,0,126.7,88.4Zm-19.2,0a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,107.5,88.4Z" transform="translate(-0.1)" fill="#059d42"/><path d="M144.7,93.2h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2a12.41,12.41,0,0,0,.3,2.7,13.5,13.5,0,0,1,7.3,3.2,28.88,28.88,0,0,1,6.3,7.4A13.3,13.3,0,0,0,144.7,93.2Zm-5.8,13.4a1.9,1.9,0,1,1,1.9-1.9A1.9,1.9,0,0,1,138.9,106.6Z" transform="translate(-0.1)" fill="#059d42"/><path d="M172.3,66.5h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H159A13.4,13.4,0,1,0,172.3,66.5Zm-5.9,13.3a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9A1.9,1.9,0,0,1,166.4,79.8Z" transform="translate(-0.1)" fill="#059d42"/><path d="M150.8,48.7a13.4,13.4,0,0,0,0-26.8h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.28,13.28,0,0,0,150.8,48.7Zm-5.9-17.3a1.9,1.9,0,0,1,1.9,1.9,2,2,0,0,1-1.9,1.9A1.9,1.9,0,0,1,144.9,31.4Z" transform="translate(-0.1)" fill="#059d42"/><path d="M16.6,62.6h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H3.3A13.4,13.4,0,1,0,16.6,62.6ZM10.7,75.9A1.9,1.9,0,0,1,8.8,74a2,2,0,0,1,1.9-2,1.9,1.9,0,0,1,1.9,1.9A2,2,0,0,1,10.7,75.9Z" transform="translate(-0.1)" fill="#059d42"/><path d="M84.6,94.7h-1A12.83,12.83,0,0,0,75.8,98a30.51,30.51,0,0,0-7.7,10h3.2A13.4,13.4,0,1,0,84.6,94.7Zm-5.9,13.4a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,78.7,108.1Z" transform="translate(-0.1)" fill="#059d42"/><path d="M69.3,49.4A13.37,13.37,0,0,0,80.5,60.8a22.81,22.81,0,0,1,4.8-5.1,12.83,12.83,0,0,1,7.8-3.3H95a12.8,12.8,0,0,0,.9-4.8h3.2a29.48,29.48,0,0,0-7.7-10,12.83,12.83,0,0,0-7.8-3.3h-1A13,13,0,0,0,72.5,39a10.87,10.87,0,0,1,.1,1.8A13.66,13.66,0,0,1,69.3,49.4Zm19.1-5.6a1.9,1.9,0,1,1-1.9,1.9A1.78,1.78,0,0,1,88.4,43.8Z" transform="translate(-0.1)" fill="#059d42"/><path d="M69.3,49.4a13.3,13.3,0,0,0,3.2-8.7c0-.6-0.1-1.2-0.1-1.8a13.3,13.3,0,0,0-3.2,8.7A9.72,9.72,0,0,0,69.3,49.4Z" transform="translate(-0.1)" fill="#008d42"/><path d="M41.6,66h0.1A13.34,13.34,0,0,0,54.9,53.4a13.41,13.41,0,0,1-9.1-12.7H42.6a13.84,13.84,0,0,1,.7-1.4c-0.2,0-.5-0.1-0.7-0.1h-1A13.4,13.4,0,1,0,41.6,66Zm5.8-17.3a1.9,1.9,0,1,1-1.9,1.9A1.9,1.9,0,0,1,47.4,48.7Z" transform="translate(-0.1)" fill="#059d42"/><path d="M45.8,40.8a13.41,13.41,0,0,0,9.1,12.7V52.7h3.2a29.48,29.48,0,0,0-7.7-10,12.89,12.89,0,0,0-7.1-3.2,7.31,7.31,0,0,0-.7,1.4h3.2V40.8Z" transform="translate(-0.1)" fill="#008d42"/><path d="M96.1,26.7a7.57,7.57,0,0,1-1.5-.1,13.36,13.36,0,0,0,13.2,11.5h0.1a13.44,13.44,0,0,0,13.3-13.4h3.2a29.48,29.48,0,0,0-7.7-10,13.94,13.94,0,0,0-7.4-3.3,10.87,10.87,0,0,1,.1,1.8A13.28,13.28,0,0,1,96.1,26.7Zm17.6-5.8a1.9,1.9,0,1,1,0,3.8,2,2,0,0,1-1.9-1.9A1.9,1.9,0,0,1,113.7,20.9Z" transform="translate(-0.1)" fill="#059d42"/><path d="M108.8,11.5h-0.9A13.4,13.4,0,0,0,94.5,24.9c0,0.6.1,1.2,0.1,1.9a7.57,7.57,0,0,0,1.5.1,13.4,13.4,0,0,0,13.4-13.4c0-.6-0.1-1.2-0.1-1.8a0.73,0.73,0,0,0-.6-0.2h0Z" transform="translate(-0.1)" fill="#008d42"/><path d="M131.7,109.3a0.9,0.9,0,0,1-.5-0.1h-1a13.4,13.4,0,1,0,0,26.8h0a13.4,13.4,0,0,0,13.4-13.4h3.2a28.74,28.74,0,0,0-1.4-2.6h-0.5A13.35,13.35,0,0,1,131.7,109.3Zm4.3,13.3a1.9,1.9,0,1,1,1.9-1.9A2,2,0,0,1,136,122.6Z" transform="translate(-0.1)" fill="#059d42"/><path d="M139,112.6a12.81,12.81,0,0,0-7.3-3.2A13.31,13.31,0,0,0,144.8,120h0.5A27.31,27.31,0,0,0,139,112.6Z" transform="translate(-0.1)" fill="#008d42"/><path d="M131,61.2h0Z" transform="translate(-0.1)" fill="#059d42"/><path d="M121.8,39.2h-0.9a13.4,13.4,0,1,0,0,26.8H121a13.36,13.36,0,0,0,4-.6V64.6h-3.2a29.48,29.48,0,0,1,7.7-10,12.81,12.81,0,0,1,7.3-3.2,29,29,0,0,0-7.1-8.7,13.06,13.06,0,0,0-7.9-3.5h0Zm4.9,9.5a1.9,1.9,0,0,1,0,3.8,2,2,0,0,1-1.9-1.9A1.84,1.84,0,0,1,126.7,48.7Z" transform="translate(-0.1)" fill="#059d42"/><path d="M121.7,64.5h3.2v0.8a13.5,13.5,0,0,0,6.1-4.1h0a13,13,0,0,0,3.2-8.6h3.2a9.21,9.21,0,0,0-.7-1.3,13.5,13.5,0,0,0-7.3,3.2A30.51,30.51,0,0,0,121.7,64.5Z" transform="translate(-0.1)" fill="#008d42"/><path d="M82.5,61a14.92,14.92,0,0,1-2.1-.2,33.83,33.83,0,0,0-2.9,4.9h3.2A13.4,13.4,0,1,0,95,52.4,13.26,13.26,0,0,1,82.5,61Zm5.7,4.8a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,88.2,65.8Z" transform="translate(-0.1)" fill="#059d42"/><path d="M93.1,52.4h0a12.86,12.86,0,0,0-7.9,3.3,22.81,22.81,0,0,0-4.8,5.1,14.92,14.92,0,0,0,2.1.2A13.51,13.51,0,0,0,95,52.4H93.1Z" transform="translate(-0.1)" fill="#008d42"/><path d="M70.2,79.8A13.42,13.42,0,0,0,56.7,66.4H55.6a13.11,13.11,0,0,0-7.9,3.3,31.62,31.62,0,0,0-7.8,10h3.2a10.32,10.32,0,0,0,.4,3h1.2A12.83,12.83,0,0,1,52.5,86a26.43,26.43,0,0,1,6,6.9A13.19,13.19,0,0,0,70.2,79.8Zm-19.3,0a2,2,0,0,1-2-1.9,1.92,1.92,0,0,1,2-1.9,2,2,0,0,1,2,1.9A2.06,2.06,0,0,1,50.9,79.8Z" transform="translate(-0.1)" fill="#059d42"/><path d="M56.7,93.2a13.5,13.5,0,0,1-13-10.3A13.35,13.35,0,1,0,57.3,96.2h3.2s-0.6-1.3-1.7-3.2a12.1,12.1,0,0,1-1.9.1Zm-7,3a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,49.7,96.2Z" transform="translate(-0.1)" fill="#059d42"/><path d="M52.7,86.2a12.83,12.83,0,0,0-7.8-3.3H43.7a13.4,13.4,0,0,0,13,10.3h0.1c0.7,0,1.3-.1,1.9-0.1A26.43,26.43,0,0,0,52.7,86.2Z" transform="translate(-0.1)" fill="#008d42"/></svg>
	                </div>
				</div>
			</section>

			<?php get_template_part('template-parts/content', 'flex'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
