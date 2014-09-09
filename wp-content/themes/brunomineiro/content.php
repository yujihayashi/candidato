<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php if(!is_category('propostas') && !is_single()):$postClasse = 'media-list';endif; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class($postClasse); ?>>

	<?php if ( !is_category('propostas') && !is_category('programas-tv') && is_single() ) : ?>
		<?php twentyfourteen_post_thumbnail(); ?>
	<?php elseif ( !is_category('propostas') && !is_category('programas-tv') && !is_single() ) : ?>
	<div class="media">
		<span class="pull-left"><?php the_post_thumbnail('thumbnail'); ?></span>
		<div class="media-body">
	<?php endif; ?>
	<header class="entry-header">
		
		<?php

			if ( is_single() ) :
				the_title( '<h1 class="entry-title text-primary">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title text-primary"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>
		<?php if ( is_category('propostas') ) : ?>
			<?php twentyfourteen_post_thumbnail(); ?>
		<?php endif; ?>
		<div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() )
					twentyfourteen_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
			<?php
				endif;

				edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php elseif ( is_category('programas-tv') ) : ?>
	<div class="entry-summary">
		<?php the_post_thumbnail(); ?>
	</div><!-- .entry-summary -->
	<?php elseif ( is_category() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
<?php if ( !is_category('propostas') && !is_category('programas-tv') && !is_single() ) : ?>
</div> <!-- .media-body -->
</div> <!-- .media -->
<?php endif; ?>
</article><!-- #post-## -->
