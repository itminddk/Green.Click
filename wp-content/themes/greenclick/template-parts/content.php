<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Green_Click
 */

?>

<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>

<article <?php post_class('block block--bg-image'); ?> id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo $thumb_url; ?>');">
	<a href="<?php echo the_permalink(); ?>">
		<h1 class="wheat"><?php the_title(); ?></h1>
		<p class="wheat"><?php the_date(); ?></p>
	</a>
</article>
