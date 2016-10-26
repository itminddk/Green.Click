<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Green_Click
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
				<?php the_archive_title( '<h1 class="page-title whale">', '</h1>' ); ?>
				<div class="archive-description">
					<?php the_archive_description(); ?>
				</div>
			</header><!-- .page-header -->

			<section class="section section--grid section--posts">
			<?php
			if ( have_posts() ) : ?>

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

			endif; ?>
		</section>

		<section class="section section--burj">

			<div class="container">

				<h1 class="whale whale--green">Lad os styrke din online position!</h1>
				<p class="wheat">Få et tilbud på telefon <a href="tel:70230540">70 230 540</a></p>

				<a href="#" class="button">Bliv kontaktet</a>

			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
