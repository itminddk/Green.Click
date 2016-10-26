<?php
/**
 * Template Name: Front
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
				$subtitle = get_field('front-desktop-subtitle');
				$content = get_field('front-desktop-content');
				?>
				<?php if( $headline ) : ?><h1><?php echo $headline; ?></h1><?php endif; ?>
				<?php if( $subtitle ) : ?><p class="faded"><?php echo $subtitle; ?></p><?php endif; ?>
				<?php if( $content ) : ?><p class="phone"><?php echo $content; ?></p><?php endif; ?>
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

			<?php
			$two_button = get_field('front-two-text');
			$two_link = get_field('front-two-link'); ?>

			<div class="block block--main-front-second block--bg-image-button block--green-dark hidden-lg-down">
				<?php if( $two_button ) : ?><a href="<?php echo $two_link; ?>" class="button button--white"><?php echo $two_button; ?></a><?php endif ;?>
				<div class="magnet-people">
					<svg class="hidden-lg-down" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203 188.1"><title>magnet-faces-blue-one</title><path d="M103.4,26.6a13.36,13.36,0,0,0,13.2,11.5h0.1A13.44,13.44,0,0,0,130,24.7h3.2a29.48,29.48,0,0,0-7.7-10,13.94,13.94,0,0,0-7.4-3.3A13.36,13.36,0,0,0,104.9,0h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.18,13.18,0,0,0,103.4,26.6Zm19.1-5.7a1.9,1.9,0,1,1,0,3.8,2,2,0,0,1-1.9-1.9A1.84,1.84,0,0,1,122.5,20.9ZM99,9.5a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,99,9.5Z" fill="#0d4779"/><path d="M122.1,101.8a13.4,13.4,0,0,0,0-26.8h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.34,13.34,0,0,0,122.1,101.8Zm-5.8-17.3a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,116.3,84.5Z" fill="#0d4779"/><path d="M164.7,112a13.4,13.4,0,0,0-13.4-13.4h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H138a12.41,12.41,0,0,0,.3,2.7,0.9,0.9,0,0,1-.5-0.1h-1a13.4,13.4,0,1,0,0,26.8h0a13.4,13.4,0,0,0,13.4-13.4h3.2a28.74,28.74,0,0,0-1.4-2.6A13.31,13.31,0,0,0,164.7,112Zm-19.2-3.9a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,145.5,108.1Zm-3,19.9a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,142.5,128Z" fill="#0d4779"/><path d="M40.9,154.4h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.4,13.4,0,1,0,40.9,154.4ZM35,167.7a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9A1.9,1.9,0,1,1,35,167.7Z" fill="#0d4779"/><path d="M189.5,112h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.4,13.4,0,1,0,189.5,112Zm-5.8,13.3a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9A1.9,1.9,0,0,1,183.7,125.3Z" fill="#0d4779"/><path d="M159.5,22h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2A13.4,13.4,0,1,0,159.5,22Zm-5.8,13.3a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9,1.9,1.9,0,0,1,1.9,1.9A2,2,0,0,1,153.7,35.3Z" fill="#0d4779"/><path d="M29.9,117.4A13.4,13.4,0,0,0,16.5,104h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10H3.2a13.4,13.4,0,0,0,13.4,13.4A13.23,13.23,0,0,0,29.9,117.4Zm-19.2,0a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,1.9-1.9A1.9,1.9,0,0,1,10.7,117.4Z" fill="#0d4779"/><path d="M93.3,94.7h-1A12.83,12.83,0,0,0,84.5,98a30.51,30.51,0,0,0-7.7,10H80A13.4,13.4,0,1,0,93.3,94.7Zm-5.8,13.4a1.9,1.9,0,1,1,1.9-1.9A1.9,1.9,0,0,1,87.5,108.1Z" fill="#0d4779"/><path d="M50.3,66h0.1A13.34,13.34,0,0,0,63.6,53.4a14.21,14.21,0,0,0,4.2.7h0.1A13,13,0,0,0,78,49.4,13.37,13.37,0,0,0,89.2,60.8a33.83,33.83,0,0,0-2.9,4.9h3.2a13.4,13.4,0,1,0,14.3-13.3,12.8,12.8,0,0,0,.9-4.8h3.2a29.48,29.48,0,0,0-7.7-10,12.83,12.83,0,0,0-7.8-3.3h-1A13,13,0,0,0,81.3,39a12,12,0,0,0-1.7-4.9A13.36,13.36,0,0,0,74.2,8.5h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2a14,14,0,0,0,1.8,6.7,13.85,13.85,0,0,0-3.5,2.2,28.77,28.77,0,0,0-7,8.7c-0.2,0-.5-0.1-0.7-0.1h-1A13.4,13.4,0,0,0,37.1,52.7,13.21,13.21,0,0,0,50.3,66ZM97,65.8a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,97,65.8Zm0.1-22a1.9,1.9,0,1,1-1.9,1.9A1.9,1.9,0,0,1,97.1,43.8ZM56.2,52.6a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,56.2,52.6ZM68.3,17.9a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,68.3,17.9Zm-6.2,19a1.9,1.9,0,1,1-1.9,1.9A1.78,1.78,0,0,1,62.1,36.9Z" fill="#0d4779"/><path d="M81.5,141.4a13.07,13.07,0,0,0-6.6-3.1,14.21,14.21,0,0,0,.7-4.2h3.2a29.48,29.48,0,0,0-7.7-10,12.83,12.83,0,0,0-7.8-3.3h-1A13.4,13.4,0,0,0,60,147.4a14.21,14.21,0,0,0-.7,4.2A13.4,13.4,0,0,0,72.7,165h0.1a13.44,13.44,0,0,0,13.3-13.4h3.2A30.82,30.82,0,0,0,81.5,141.4ZM68.1,130.2a1.9,1.9,0,1,1-1.9,1.9A1.84,1.84,0,0,1,68.1,130.2Zm10.4,21.2a1.9,1.9,0,1,1,0-3.8,2,2,0,0,1,1.9,1.9A1.84,1.84,0,0,1,78.5,151.4Z" fill="#0d4779"/><path d="M136.8,141.3h0Z" fill="#0d4779"/><path d="M130.6,39.2h-0.9a13.4,13.4,0,1,0,0,26.8h0.1a13.36,13.36,0,0,0,4-.6,13.36,13.36,0,1,0,13.3-14.2h-1a0.9,0.9,0,0,0-.5.1,29,29,0,0,0-7.1-8.7,13.85,13.85,0,0,0-7.9-3.4h0Zm10.6,25.3a1.9,1.9,0,0,1-1.9-1.9,2,2,0,0,1,.6-1.4h0a2.25,2.25,0,0,1,1.4-.6,1.9,1.9,0,0,1,1.9,1.9A2,2,0,0,1,141.2,64.5Zm-5.7-15.8a1.9,1.9,0,0,1,0,3.8,2,2,0,0,1-1.9-1.9A1.78,1.78,0,0,1,135.5,48.7Z" fill="#0d4779"/><path d="M133.2,164.6a12.83,12.83,0,0,0-7.8-3.3h-1a13.4,13.4,0,1,0,13.4,13.4H141C140.9,174.7,138.2,168.6,133.2,164.6Zm-3,10.1a1.9,1.9,0,1,1,1.9-1.9A1.84,1.84,0,0,1,130.2,174.7Z" fill="#0d4779"/><path d="M79,79.8A13.42,13.42,0,0,0,65.5,66.4H64.4a13.11,13.11,0,0,0-7.9,3.3,31.62,31.62,0,0,0-7.8,10h3.2a10.32,10.32,0,0,0,.4,3A13.35,13.35,0,1,0,65.9,96h3.2s-0.6-1.3-1.7-3.2A13,13,0,0,0,79,79.8ZM59.6,75.9a2,2,0,0,1,2,1.9,1.92,1.92,0,0,1-2,1.9,2,2,0,0,1-2-1.9A2.14,2.14,0,0,1,59.6,75.9ZM58.5,96.2a1.9,1.9,0,1,1,1.9-1.9A2,2,0,0,1,58.5,96.2Z" fill="#0d4779"/><path d="M154.1,143.3h-1a12.83,12.83,0,0,0-7.8,3.3,30.51,30.51,0,0,0-7.7,10h3.2a13.4,13.4,0,1,0,26.8,0A13.6,13.6,0,0,0,154.1,143.3Zm-5.9,13.3a1.9,1.9,0,1,1,1.9-1.9A1.78,1.78,0,0,1,148.2,156.6Z" fill="#0d4779"/><path d="M74,35.2h0.1a14.08,14.08,0,0,0,5.4-1.1A13.28,13.28,0,0,0,68,27.4H67a12.4,12.4,0,0,0-4.3,1.1A13,13,0,0,0,74,35.2Z" fill="#0a3d69"/><path d="M78.1,49.4a13.3,13.3,0,0,0,3.2-8.7c0-.6-0.1-1.2-0.1-1.8A13.3,13.3,0,0,0,78,47.6,5.15,5.15,0,0,0,78.1,49.4Z" fill="#0a3d69"/><path d="M54.6,40.8a13.41,13.41,0,0,0,9.1,12.7V52.7h3.2a29.48,29.48,0,0,0-7.7-10,12.89,12.89,0,0,0-7.1-3.2,7.31,7.31,0,0,0-.7,1.4h3.2V40.8Z" fill="#0a3d69"/><path d="M117.6,11.5h-0.9a13.4,13.4,0,0,0-13.4,13.4c0,0.6.1,1.2,0.1,1.9a7.57,7.57,0,0,0,1.5.1,13.4,13.4,0,0,0,13.4-13.4c0-.6-0.1-1.2-0.1-1.8a0.85,0.85,0,0,0-.6-0.2h0Z" fill="#0a3d69"/><path d="M145.5,117.9a12.81,12.81,0,0,0-7.3-3.2,13.31,13.31,0,0,0,13.1,10.6h0.5A28.88,28.88,0,0,0,145.5,117.9Z" fill="#0a3d69"/><path d="M130.5,64.5h3.2v0.8a13.5,13.5,0,0,0,6.1-4.1h0a13,13,0,0,0,3.2-8.6h3.2a9.21,9.21,0,0,0-.7-1.3,13.5,13.5,0,0,0-7.3,3.2A30.51,30.51,0,0,0,130.5,64.5Z" fill="#0a3d69"/><path d="M101.9,52.4h0A12.86,12.86,0,0,0,94,55.7a22.81,22.81,0,0,0-4.8,5.1,14.92,14.92,0,0,0,2.1.2,13.51,13.51,0,0,0,12.5-8.6h-1.9Z" fill="#0a3d69"/><path d="M62.3,147.5a13.37,13.37,0,0,0,12.6-9.2c-0.4-.1-0.8-0.1-1.2-0.2h-1A13.49,13.49,0,0,0,60,147.3a16.35,16.35,0,0,0,2.2.2h0.1Z" fill="#0a3d69"/><path d="M61.5,86.2a12.83,12.83,0,0,0-7.8-3.3H52.5a13.4,13.4,0,0,0,13,10.3h0.1c0.7,0,1.3-.1,1.9-0.1A30.82,30.82,0,0,0,61.5,86.2Z" fill="#0a3d69"/></svg>
				</div>
			</div>

			<?php
			$bg = get_field('case-bg-image');
			$image = get_field('case-image');
			$case_button = get_field('case-button-text');
			$case_link = get_field('case-button-link'); ?>

			<div class="block block--case block--sub block--bg-image hidden-lg-down" style="background-image: url('<?php echo $bg['url']; ?>');">
				<span>Case story</span>
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

					<div class="premium">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/build/assets/images/premier.png" alt="Google Premium Partner">
					</div>
				</ul>

			</div>
		</section>

		<?php get_template_part('template-parts/content', 'flex'); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
