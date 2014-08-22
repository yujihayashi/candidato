<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="media">
		<span class="pull-left"><?php twentyfourteen_post_thumbnail(); ?></span>
		<div class="media-body">
			<?php
		// Page thumbnail and title.

			the_title( '<header class="entry-header"><h1 class="entry-title text-primary">', '</h1></header><!-- .entry-header -->' );
			?>

			<div class="entry-content">
				<?php
				the_content();
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					) );

				edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
				?>
			</div><!-- .entry-content -->
		</div> <!-- .media-body -->
	</div> <!-- .media -->
</article><!-- #post-## -->
