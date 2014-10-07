<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="media">
		<a class="post-thumbnail pull-left img-thumbnail img-rounded" href="<?php the_permalink(); ?>">
			<?php
		// Output the featured image.
			if ( has_post_thumbnail() ) :
				the_post_thumbnail('large');
			endif;
			?>
		</a>
		<div class="media-body">
			<header class="entry-header">
			<?php the_title( '<h1 class="entry-title text-primary"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h1>' ); ?>
		</header><!-- .entry-header -->
		<div class="entry-summary">
			<?php the_tags( '<p class="entry-meta">Tags: <span class="tag-links">', '', '</span></p>' ); ?>
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	</div> <!-- .media-body -->
</div> <!-- .media -->
</article><!-- #post-## -->
