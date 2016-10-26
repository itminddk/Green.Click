<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Green_Click
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single' );

			endwhile; // End of the loop.
			?>

			<?php $color = get_field('cta-design', 'option'); ?>

			<section class="section <?php if( $color == 'blue') : ?>section--grey-alt<?php endif; ?> section--burj">

				<div class="container">

					<?php
					$headline = get_field('cta-headline', 'option');
					$content = get_field('cta-content', 'option');
					$button = get_field('cta-button-text', 'option');
					$confirmation = get_field('cta-button-confirmation', 'option'); ?>

					<?php if( $headline ) : ?><h1 class="whale whale--<?php echo $color; ?>"><?php echo $headline; ?></h1><?php endif; ?>
					<?php if( $content ) : ?><p class="wheat"><?php echo $content; ?></p><?php endif; ?>

					<?php if( $button ) : ?>
						<div class="contact" id="contactForm">
							<form class="button-container" action="" method="">
								<div class="button-group is-inactive">
									<input type="text" class="input input--first" placeholder="Navn">
									<span class="tel-prefix">+45</span><input type="tel" class="input input--second" placeholder="Telefonnummer" required>
									<button type="submit" class="button--<?php echo $color; ?> contact__button" id="contactButton"><span><?php echo $button; ?></span></button>
									<p><?php echo $confirmation; ?></p>
								</div>
							</form>
						</div>
					<?php endif; ?>
				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
