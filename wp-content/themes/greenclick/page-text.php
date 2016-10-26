<?php
/**
 * Template Name: Text
 *
 * @package Green_Click
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<nav class="navigation navigation--text-secondary">
				<?php wp_nav_menu( array( 'theme_location' => 'text-secondary', 'container' => '' ) ); ?>
			</nav>

			<?php get_template_part('template-parts/content', 'flex'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
