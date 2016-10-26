<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Green_Click
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="section section--grid section--posts">
				<?php
				if ( have_posts() ) :

					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

				endif; ?>
			</section>

			<section class="section section--burj">

				<div class="container">

					<h1 class="whale whale--green">Lad os styrke din online position!</h1>
					<p class="wheat">Få et tilbud på telefon 70 230 540</p>

					<div class="contact" id="contactForm">
						<form class="button-container" action="" method="">
							<div class="button-group is-inactive">
								<input type="text" class="input input--first" placeholder="Navn">
								<input type="email" class="input input--second" placeholder="E-mail" required>
								<button type="submit" class="button--<?php echo $color; ?> contact__button" id="contactButton"><span>Bliv kontaktet</span></button>
								<p>Vi vender tilbage inden for 2 arbejdsdage.</p>
							</div>
						</form>
					</div>

				</div>
			</section>

			<?php get_template_part('template-parts/content', 'flex'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
