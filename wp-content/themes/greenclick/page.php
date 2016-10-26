<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Green_Click
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="section section--grid section--grid-big">
				<?php
				$headline = get_field('block-headline');
				$text = get_field('block-text');
				$type = get_field('block-button-type');
				$button = get_field('block-button-text');
				$link = get_field('block-button-link');
				$image = get_field('block-image'); ?>

				<div class="block block--main block--main block--green">
					<h1 class="whale"><?php echo $headline; ?></h1>
					<p class="wheat"><?php echo $text; ?></p>
					<?php if( $button ) : ?><a href="<?php echo $link; ?>" class="button button--white <?php if( $type == 'video' ) : ?>button--play<?php endif; ?> hidden-sm-down"><?php echo $button; ?></a><?php endif; ?>
				</div>
				<div class="block block--bg-image block--bg-image-button" <?php if( $image ) : ?>style="background-image: url('<?php echo $image['url']; ?>')"<?php endif; ?>>
					<?php if( $button ) : ?><a href="<?php echo $link; ?>" class="button button--green <?php if( $type == 'video' ) : ?>button--play<?php endif; ?> hidden-md-up"><?php echo $button; ?></a><?php endif; ?>
				</div>
			</section>

			<?php get_template_part('template-parts/content', 'flex'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
