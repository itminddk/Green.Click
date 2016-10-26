<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Green_Click
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="page-error">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/build/assets/images/404.jpg" alt="404">
				</div>

				<div class="page-footer">
					<p class="wheat">Øv, vi kan ikke finde det du leder efter! Vi har ledt <strong>overalt</strong> – seriøst :-(</p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back"><span class="icon icon-arrow"></span> Gå til forsiden</a>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
