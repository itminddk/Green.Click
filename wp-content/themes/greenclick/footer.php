<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Green_Click
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<nav class="navigation navigation--footer" role="navigation">
				<div class="navigation--footer__primary">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-primary', 'menu_id' => 'footer-primary-menu', 'container' => '' ) ); ?>
					<p><a href="tel:70230540">Tlf. 70 230 540</a></p>
				</div>
				<div class="navigation--footer__secondary">
					<p>&copy; <?php echo date('Y'); ?></p>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-secondary', 'menu_id' => 'footer-secondary-menu', 'container' => '' ) ); ?>
				</div>
			</nav>

			<nav class="navigation navigation--footer-secondary">
				<div class="language-select">
					<a href="https://www.greenclickmedia.com/" class="button button--grey-light button--outline">English <img src="<?php echo get_stylesheet_directory_uri(); ?>/build/assets/images/uk_flag_retina.png"></a>
				</div>
				<ul class="social-icons">
					<?php
					$facebook = get_field('facebook', 'options');
					$googleplus = get_field('googleplus', 'options');
					$linkedin = get_field('linkedin', 'options');
					$youtube = get_field('youtube', 'options'); ?>

					<?php if( $googleplus ) : ?>
						<li>
							<a href="<?php echo $googleplus; ?>" target="_blank"><span class="icon icon-google-plus"></span></a>
						</li>
					<?php endif; ?>
					<?php if( $facebook ) : ?>
						<li>
							<a href="<?php echo $facebook; ?>" target="_blank"><span class="icon icon-facebook"></span></a>
						</li>
					<?php endif; ?>
					<?php if( $linkedin ) : ?>
						<li>
							<a href="<?php echo $linkedin; ?>" target="_blank"><span class="icon icon-linkedin"></span></a>
						</li>
					<?php endif; ?>
					<?php if( $youtube ) : ?>
						<li>
							<a href="<?php echo $youtube; ?>" target="_blank"><span class="icon icon-play"></span></a>
						</li>
					<?php endif; ?>
				</ul>
			</nav>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
