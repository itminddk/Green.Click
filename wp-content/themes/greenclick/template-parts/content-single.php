<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Green_Click
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];
	?>

	<img src="<?php echo $thumb_url; ?>">

	<div class="mobile-header-image" style="background-image: url('<?php echo $thumb_url; ?>');"></div>

	<div class="article__inner">

		<header class="entry-header">
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="back"><span class="icon icon-arrow"></span> Tilbage</a>
			<a href="<?php echo the_permalink(); ?>" class="entry-title">
				<h1 class="whale entry-title"><?php the_title(); ?></h1>
			</a>
			<p class="entry-date"><?php the_date(); ?></p>
			<p class="entry-category"><?php the_category( ', ' ); ?></p>
		</header><!-- .entry-header -->

		<div class="entry-content section section--eiffel">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<div class="entry-footer">
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="back"><span class="icon icon-arrow"></span> Tilbage</a>

			<div class="social-container">
				<div class="social social--facebook"><a href="https://www.facebook.com/dialog/share?app_id=1123780824308502&display=popup&href=<?php echo the_permalink(); ?>&redirect_uri=<?php echo the_permalink(); ?>"><span class="icon icon-facebook"></span></a></div>
				<div class="social social--linkedin"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink(); ?>&title=<?php echo the_title(); ?>&source=<?php echo the_permalink(); ?>" target="_blank"><span class="icon icon-linkedin"></span></a></div>
			</div>
		</div>

	</div>
</article>
